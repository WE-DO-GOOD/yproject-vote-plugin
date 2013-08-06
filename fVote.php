<?php
/*
Plugin Name: fVote
Plugin URI: http://wordpress.org/extend/plugins/fVote
Description: fVote is a Poll plugin for specific questions
Author: wp-plugin-dev.com
Version: 0.5
Author URI: http://www.wp-plugin-dev.com
Text Domain:   fVote
Domain Path:   /lang/

This Plugin is licensed under GPL

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.



*/

include('fVote_setup.php');
include('fVote_core.php');

register_activation_hook( __FILE__, 'setup_fVote');


// is commented out... you need this line when you want to delete the fVote table from database.
// rememebr all your data from fVote is lost than.
// register_deactivation_hook( __FILE__, 'uninstall_fVote');



?>