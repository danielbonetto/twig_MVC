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
 * @author Simon Coggins <simon.coggins@totaralms.com>
 * @package totara
 * @subpackage totara_hierarchy
 */

require_once($CFG->dirroot.'/lib/formslib.php');
require_once($CFG->dirroot.'/totara/hierarchy/lib.php');

class item_bulkaction_form extends moodleform {

    // Define the form
    function definition() {
        global $CFG, $SESSION, $OUTPUT;

        $mform =& $this->_form;

        $prefix = $this->_customdata['prefix'];
        $frameworkid = $this->_customdata['frameworkid'];
        $framework = $this->_customdata['framework'];
        $action = $this->_customdata['action'];
        $shortprefix = hierarchy::get_short_prefix($prefix);
        $apage = $this->_customdata['apage'];
        $spage = $this->_customdata['spage'];
        $displayed_available_items = $this->_customdata['displayed_available_items'];
        $displayed_selected_items = $this->_customdata['displayed_selected_items'];
        $all_selected_item_ids = $this->_customdata['all_selected_item_ids'];
        $all_disabled_item_ids = $this->_customdata['all_disabled_item_ids'];
        $count_available_items = $this->_customdata['count_available_items'];
        $count_selected_items = $this->_customdata['count_selected_items'];
        $searchterm = $this->_customdata['searchterm'];

        $hierarchy = new $prefix();
        $hierarchy->frameworkid = $frameworkid;

        $items     = $hierarchy->get_items();
        $types   = $hierarchy->get_types();

        // pass params to next page
        $mform->addElement('hidden', 'prefix', $prefix);
        $mform->setType('prefix', PARAM_ALPHA);
        $mform->addElement('hidden', 'frameworkid', $frameworkid);
        $mform->setType('frameworkid', PARAM_INT);
        $mform->addElement('hidden', 'action', $action);
        $mform->setType('action', PARAM_ALPHA);
        $mform->addElement('hidden', 'spage', $spage);
        $mform->setType('spage', PARAM_INT);
        $mform->addElement('hidden', 'apage', $apage);
        $mform->setType('apage', PARAM_INT);

        // warning when a parent and its descendent are both selected
        // this shouldn't really be possible as unneeded children are also removed from the list
        // at the time the items are added
        if (count($all_selected_item_ids) != count($hierarchy->get_items_excluding_children($all_selected_item_ids))) {
            $message = get_string('parentchildselectedwarning' . $action, 'totara_hierarchy');
            $mform->addElement('html', $OUTPUT->container($message, 'hierarchy-bulk-'.$action.'-warning'));
        }

        $available_str = get_string('availablex', 'totara_hierarchy', get_string($prefix . 'plural', 'totara_hierarchy'));
        $selected_str = get_string('selectedx', 'totara_hierarchy', get_string($prefix . 'plural', 'totara_hierarchy'));

        // the main 'bulk actions' form is formatted using HTML, and the renderers
        // overridden to get rid of all of formslib's default formatting
        $html = html_writer::start_tag('table', array('id' => 'hierarchy-bulk-actions-form'));
        $html .= html_writer::start_tag('tr') . html_writer::tag('th', $available_str, array('class' => 'available-column'));
        $html .= html_writer::tag('th', '&nbsp;', array('class' => 'action-column'));
        $html .= html_writer::tag('th', $selected_str, array('class' => 'selected-column'));
        $html .= html_writer::end_tag('tr');
        $html .= html_writer::start_tag('tr') . html_writer::start_tag('td', array('class' => 'available-column'));
        $mform->addElement('html', $html);

        $mform->addElement('text', 'search', '',
            array('placeholder' => get_string('searchavailable', 'totara_hierarchy')));
        $mform->setDefault('search', $searchterm);
        $mform->setType('search', PARAM_TEXT);
        $mform->addElement('submit', 'submitsearch', get_string('search'));
        if (strlen(trim($searchterm)) != 0) {
            $mform->addElement('submit', 'clearsearch', get_string('showall', 'moodle', get_string($prefix.'plural', 'totara_hierarchy')));
        }

        $html = html_writer::end_tag('td') . html_writer::tag('td', '&nbsp;', array('class' => 'action-column'));
        $html .= html_writer::start_tag('td', array('class' => 'selected-column'));
        $mform->addElement('html', $html);

        $remove_attr = array('class' => 'removebutton');
        if ($count_selected_items == 0) {
            $remove_attr['disabled'] = 'disabled';
        }
        $mform->addElement('submit', 'remove_all_items',
            get_string('clearselection', 'totara_hierarchy'), $remove_attr);

        $html = html_writer::end_tag('td') . html_writer::end_tag('tr');
        $mform->addElement('html', $html);

        $apaging = $OUTPUT->paging_bar($count_available_items, $apage, HIERARCHY_BULK_AVAILABLE_PER_PAGE, new moodle_url('bulkactions.php', array('prefix' => $prefix, 'action' => $action, 'frameworkid' => $frameworkid, 'spage' => $spage)), 'apage', false, true, 5);

        $spaging = $OUTPUT->paging_bar($count_selected_items, $spage, HIERARCHY_BULK_SELECTED_PER_PAGE, new moodle_url('bulkactions.php', array('prefix' => $prefix, 'action' => $action, 'frameworkid' => $frameworkid, 'apage' => $apage)), 'spage', false, true, 5);

        // only show the paging row if necessary
        if ($apaging != '' || $spaging != '') {
            $html = html_writer::start_tag('tr') . html_writer::tag('th', $apaging, array('class' => 'available-column'));
            $html .= html_writer::tag('th', '&nbsp;', array('class' => 'action-column'));
            $html .= html_writer::tag('th', $spaging, array('class' => 'selected-column'));
            $html .= html_writer::end_tag('tr');
            $mform->addElement('html', $html);
        }
        $html = html_writer::start_tag('tr') . html_writer::start_tag('td', array('class' => 'available-column'));
        $mform->addElement('html', $html);
        // build the select options manually to allow for disabled options
        $select =& $mform->createElement('select', 'available', '', array(),
            array('multiple' => 'multiple', 'size' => 25, 'class' => 'itemslist'));
        if ($displayed_available_items) {
            foreach ($displayed_available_items as $id => $name) {
                $attr = in_array($id, $all_disabled_item_ids) ?
                    array('disabled' => 'disabled') : array();
                $select->addOption($name, $id, $attr);
            }
        } else {
            $select->addOption(get_string('noxfound', 'totara_hierarchy',
                strtolower(get_string($prefix.'plural', 'totara_hierarchy'))), '',
                array('disabled' => 'disabled'));
        }
        $mform->addElement($select);
        $mform->setType('available', PARAM_INT);

        $html = html_writer::end_tag('td') . html_writer::start_tag('td', array('class' => 'action-column'));
        $mform->addElement('html', $html);

        $add_attr = array();
        if ($count_selected_items == $count_available_items) {
            $add_attr['disabled'] = 'disabled';
        }
        $mform->addElement('submit', 'add_items', get_string('add') . ' >', $add_attr);

        $mform->addElement('submit', 'remove_items', '< ' . get_string('remove'), $remove_attr);
        $html = html_writer::end_tag('td') . html_writer::start_tag('td', array('class' => 'selected-column'));
        $mform->addElement('html', $html);

        $mform->addElement('select', 'selected', '',  $displayed_selected_items,
            array('multiple' => 'multiple', 'size' => 25, 'class' => 'itemslist'));
        $mform->setType('selected', PARAM_INT);

        $html = html_writer::end_tag('td') . html_writer::end_tag('tr');
        $mform->addElement('html', $html);

        switch ($action) {
        case 'delete':
            $mform->addElement('submit', 'deletebutton',
                get_string('deleteselectedx', 'totara_hierarchy',
                strtolower(get_string($prefix.'plural', 'totara_hierarchy'))));
            break;
        case 'move':
            $mform->addElement('html', html_writer::start_tag('tr'));
            $title = get_string('moveselectedxto', 'totara_hierarchy', strtolower(get_string($prefix.'plural', 'totara_hierarchy')));
            $options = $hierarchy->get_parent_list($items, $all_selected_item_ids);
            $mform->addElement('html', html_writer::tag('td', $title, array('class' => 'available-column')) . html_writer::start_tag('td', array('class' => 'action-column')));
            $select =& $mform->createElement('select', 'newparent', '', $options, totara_select_width_limiter());
            $mform->addElement($select);
            $mform->addElement('html', html_writer::end_tag('td') . html_writer::start_tag('td', array('class' => 'selected-column')));
            $mform->addElement('submit', 'movebutton', get_string('move'));
            $mform->addElement('html', html_writer::end_tag('td') . html_writer::end_tag('tr') . html_writer::end_tag('table'));
            break;
        default:
            // this shouldn't happen
            print_error('error:unknownaction', 'totara_hierarchy');
        }

        // change default render template for bulk action form elements
        $elements = array('available', 'add_items', 'add_all_items', 'remove_items',
            'remove_all_items', 'selected', 'search', 'submitsearch', 'clearsearch', 'deletebutton', 'newparent', 'movebutton');
        $renderer =& $mform->defaultRenderer();
        $elementtemplate = '{element}';
        foreach ($elements as $element) {
            $renderer->setElementTemplate($elementtemplate, $element);
        }
    }

}
