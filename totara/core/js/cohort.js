/*
 * This file is part of Totara LMS
 *
 * Copyright (C) 2010-2012 Totara Learning Solutions LTD
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
 * @author Eugene Venter <eugene@catalyst.net.nz>
 * @author Aaron Barnes <aaron.barnes@totaralms.com>
 * @author Dave Wallace <dave.wallace@kineo.co.nz>
 * @package totara
 * @subpackage totara_core
 */
M.totara_cohort = M.totara_cohort || {

    Y: null,
    // optional php params and defaults defined here, args passed to init method
    // below will override these values
    config: {},

    /**
     * module initialisation method called by php js_init_call()
     *
     * @param object    YUI instance
     * @param string    args supplied in JSON format
     */
    init: function(Y, args){

        var module = this;

        // save a reference to the Y instance (all of its dependencies included)
        this.Y = Y;

        // if defined, parse args into this module's config object
        if (args) {
            var jargs = Y.JSON.parse(args);
            for (var a in jargs) {
                if (Y.Object.owns(jargs, a)) {
                    this.config[a] = jargs[a];
                }
            }
        }

        // check jQuery dependency is available
        if (typeof $ === 'undefined') {
            throw new Error('M.totara_cohort.init()-> jQuery dependency required for this module to function.');
        }

        ///
        /// Position dialog
        ///
        (function() {
            var url = M.cfg.wwwroot+'/totara/hierarchy/prefix/position/assign/';

            totaraSingleSelectDialog(
                'position',
                M.util.get_string('chooseposition', 'totara_hierarchy') +
                module.config.display_selected_position,
                url+'position.php?',
                'positionid',
                'positiontitle'
            );
        })();


        ///
        /// Organisation dialog
        ///
        (function() {
            var url = M.cfg.wwwroot+'/totara/hierarchy/prefix/organisation/assign/';

            totaraSingleSelectDialog(
                'organisation',
                M.util.get_string('chooseorganisation', 'totara_hierarchy') +
                module.config.display_selected_organisation,
                url+'find.php?',
                'organisationid',
                'organisationtitle'
            );
        })();


        ///
        /// Confirmation dialog
        ///
        (function() {
            var submitAllowed = false;
            $('#mform1').submit(function () {
                return submitAllowed;
            });

            var handler = new totaraDialog_handler();
            var name = 'confirm';
            var buttonsObj = {};
            buttonsObj[M.util.get_string('cancel', 'moodle')] = function() { handler._cancel() };
            buttonsObj[M.util.get_string('continue', 'moodle')] = function() { submitAllowed = true; $('#mform1').submit(); };
            var dialog = new totaraDialog(
                name,
                'id_submitbutton',
                {
                    buttons: buttonsObj,
                    title: '<h2>'+ M.util.get_string('confirmdynamiccohortcreation', 'totara_cohort') +'</h2>'
                },
                '',
                handler
            );

            // Override the open function to get the dialog url dynamically
            dialog.originalOpen = dialog.open;
            dialog.open = function() {

                var positionincludechildren = 0;
                if ($('input[name="positionincludechildren"]').is(':checked')) {
                    positionincludechildren = 1;
                }

                var orgincludechildren = 0;
                if ($('input[name="orgincludechildren"]').is(':checked')) {
                    orgincludechildren = 1;
                }

                dialog.default_url = M.cfg.wwwroot+'/cohort/criteria.php' +
                '?cohortname=' + $('input[name="cohortname"]').val() +
                '&profilefield=' + $('select[name="profilefield"]').val() +
                '&profilefieldvalues=' + $('input[name="profilefieldvalues"]').val() +
                '&positionid=' + $('input[name="positionid"]').val() +
                '&positionincludechildren=' + positionincludechildren +
                '&organisationid=' + $('input[name="organisationid"]').val() +
                '&orgincludechildren=' + orgincludechildren;

                dialog.originalOpen();
            }

            totaraDialogs[name] = dialog;
        })();

    }
};
