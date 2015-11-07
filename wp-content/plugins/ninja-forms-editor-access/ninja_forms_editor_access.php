<?php
/*
Plugin Name: Ninja Forms - Editor Access
Description: Allows editors to manage NinjaForms
Version:     1.0
Author:      Joseph Chagnon
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

NinjaForms - Editor Access is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
NinjaForms - Editor Access is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with NinjaForms - Editor Access. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// Source: https://wordpress.org/support/topic/works-but-there-is-capabilities-problems

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// To give Editors access to the ALL Forms menu.
function ninja_forms_change_capabilities_filter( $capabilities ) {
    $capabilities = "edit_pages";
    return $capabilities;
}
add_filter( 'ninja_forms_admin_parent_menu_capabilities', 'ninja_forms_change_capabilities_filter' );
add_filter( 'ninja_forms_admin_all_forms_capabilities', 'ninja_forms_change_capabilities_filter' );

// To give Editors access to ADD New Forms.
function my_custom_change_ninja_forms_add_new_capabilities_filter( $capabilities ) {
    $capabilities = "edit_pages";
    return $capabilities;
}
add_filter( 'ninja_forms_admin_parent_menu_capabilities', 'my_custom_change_ninja_forms_add_new_capabilities_filter' );
add_filter( 'ninja_forms_admin_add_new_capabilities', 'my_custom_change_ninja_forms_add_new_capabilities_filter' );

/* To give Editors access to the Submissions - Simply replace ‘edit_posts’ in the code snippet below with the capability
that you would like to attach the ability to view/edit submissions to.Please note that all three filters are needed to
provide proper submission viewing/editing on the backend!
*/
function nf_subs_capabilities( $cap ) {
    return 'edit_pages';
}
add_filter( 'ninja_forms_admin_submissions_capabilities', 'nf_subs_capabilities' );
add_filter( 'ninja_forms_admin_parent_menu_capabilities', 'nf_subs_capabilities' );
add_filter( 'ninja_forms_admin_menu_capabilities', 'nf_subs_capabilities' );

// To give Editors access to the Inport/Export Options
function my_custom_change_ninja_forms_import_export_capabilities_filter( $capabilities ) {
    $capabilities = "edit_pages";
    return $capabilities;
}
add_filter( 'ninja_forms_admin_parent_menu_capabilities', 'my_custom_change_ninja_forms_import_export_capabilities_filter' );
add_filter( 'ninja_forms_admin_import_export_capabilities', 'my_custom_change_ninja_forms_import_export_capabilities_filter' );

// To give Editors access to the the Settings page
function my_custom_change_ninja_forms_settings_capabilities_filter( $capabilities ) {
    $capabilities = "edit_pages";
    return $capabilities;
}
add_filter( 'ninja_forms_admin_parent_menu_capabilities', 'my_custom_change_ninja_forms_settings_capabilities_filter' );
add_filter( 'ninja_forms_admin_settings_capabilities', 'my_custom_change_ninja_forms_settings_capabilities_filter' );
