<?php
/*
 * This file is part of Totara LMS
 *
 * Copyright (C) 2010 - 2012 Totara Learning Solutions LTD
 * 
 * This program is free software; you can redistribute it and/or modify  
 * it under the terms of the GNU General Public License as published by  
 * the Free Software Foundation; either version 3 of the License, or     
 * (at your option) any later version.                                   
 *                                                                       
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Eugene Venter <eugene@catalyst.net.nz>
 * @package totara
 * @subpackage plan
 */

require_once("{$CFG->libdir}/formslib.php");

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

class plan_edit_form extends moodleform {

    function definition() {
        global $CFG, $USER, $TEXTAREA_OPTIONS;

        $mform =& $this->_form;
        $action = $this->_customdata['action'];
        if (isset($this->_customdata['plan'])) {
            $plan = $this->_customdata['plan'];
        }

        // Add some hidden fields
        if ($action != 'add') {
            $mform->addElement('hidden', 'id');
            $mform->setType('id', PARAM_INT);
        }
        $mform->addElement('hidden', 'userid', $USER->id);
        $mform->setType('userid', PARAM_INT);
        $template = dp_get_first_template();
        $mform->addElement('hidden', 'templateid', $template->id);  //@todo: HACK! we will always use the first template for now
        $mform->setType('templateid', PARAM_INT);
        $mform->addElement('hidden', 'status', 0);
        $mform->setType('status', PARAM_INT);
        $mform->addElement('hidden', 'action', $action);
        $mform->setType('action', PARAM_TEXT);

        if ($action == 'delete') {
            // Only show delete confirmation
            $mform->addElement('html', get_string('checkplandelete', 'totara_plan', $plan->name));
            $buttonarray = array();
            $buttonarray[] = $mform->createElement('submit', 'deleteyes', get_string('yes'));
            $buttonarray[] = $mform->createElement('submit', 'deleteno', get_string('no'));
            $mform->addGroup($buttonarray, 'buttonar', '', array(' '), false);
            $mform->closeHeaderBefore('buttonar');

            return;
        }
        if ($action == 'complete') {
            // Only show complete plan confirmation
            $mform->addElement('html', get_string('checkplancomplete11', 'totara_plan', $plan->name));
            $buttonarray = array();
            $buttonarray[] = $mform->createElement('submit', 'completeyes', get_string('completeplan', 'totara_plan'));
            $buttonarray[] = $mform->createElement('submit', 'completeno', get_string('no'));
            $mform->addGroup($buttonarray, 'buttonar', '', array(' '), false);
            $mform->closeHeaderBefore('buttonar');

            return;
        }

        $mform->addElement('date_selector', 'startdate', get_string('datecreated', 'totara_plan'));
        $mform->freeze('startdate');

        $mform->addElement('text', 'name', get_string('planname', 'totara_plan'), array('size' => 50));
        $mform->setType('name', PARAM_TEXT);
        $mform->addRule('name', get_string('err_required', 'form'), 'required', '', 'client', false, false);
        $mform->setDefault('name', $template->fullname);
        $mform->addElement('editor', 'description_editor', get_string('plandescription', 'totara_plan'), null, $TEXTAREA_OPTIONS);
        $mform->setType('description_editor', PARAM_CLEANHTML);
        $mform->addElement('text', 'enddate', get_string('completiondate', 'totara_plan'), array('placeholder' => get_string('datepickerplaceholder', 'totara_core')));
        $mform->addRule('enddate', get_string('err_required', 'form'), 'required', '', 'client', false, false);
        $mform->setDefault('enddate', userdate($template->enddate, get_string('strftimedatefullshort', 'langconfig'), $CFG->timezone, false));

        if ($action == 'view') {
            $mform->hardFreeze(array('name', 'description_editor', 'enddate'));
            $buttonarray = array();
            if ($plan->get_setting('update') == DP_PERMISSION_ALLOW && $plan->status != DP_PLAN_STATUS_COMPLETE) {
                $buttonarray[] = $mform->createElement('submit', 'edit', get_string('editdetails', 'totara_plan'));
            }
            if ($plan->get_setting('delete') == DP_PERMISSION_ALLOW) {
                $buttonarray[] = $mform->createElement('submit', 'delete', get_string('deleteplan', 'totara_plan'));
            }
            if ($plan->get_setting('completereactivate') >= DP_PERMISSION_ALLOW && $plan->status == DP_PLAN_STATUS_APPROVED) {
                $buttonarray[] = $mform->createElement('submit', 'complete', get_string('plancomplete', 'totara_plan'));
            }

            $mform->addGroup($buttonarray, 'buttonar', '', array(' '), false);
            $mform->closeHeaderBefore('buttonar');
        } else {
            switch ($action) {
            case 'add':
                $actionstr = 'createplan';
                break;
            case 'edit':
                $actionstr = 'updateplan';
                break;
            default:
                $actionstr = null;
            }
            $this->add_action_buttons(true, get_string($actionstr, 'totara_plan'));
        }
    }

    function validation($data) {
        $mform =& $this->_form;
        $result = array();

        if (in_array($this->_customdata['action'], array('add', 'edit'))) {
            // Validate edit form
            $startdate = isset($data['startdate']) ? $data['startdate'] : '';
            $enddate = isset($data['enddate']) ? $data['enddate'] : '';

            $datepattern = get_string('datepickerregexphp', 'totara_core');
            if (preg_match($datepattern, $enddate, $matches) == 0) {
                $errstr = get_string('error:dateformat','totara_plan', get_string('datepickerplaceholder', 'totara_core'));
                $result['enddate'] = $errstr;
                unset($errstr);
            } elseif ( $startdate > totara_date_parse_from_format(get_string('datepickerparseformat', 'totara_core'), $enddate) && $startdate !== false && $enddate !== false ) {
                // Enforce start date before finish date
                $errstr = get_string('error:creationaftercompletion', 'totara_plan');
                $result['enddate'] = $errstr;
                unset($errstr);
            }
        }

        return $result;
    }

}
