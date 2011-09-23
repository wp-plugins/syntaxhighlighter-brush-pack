<?php
/*
Plugin Name: WordPress SyntaxHighlighter Evolved: CoffeeScript Brush
Description: Adds a CoffeeScript brush to SyntaxHighlighter Evolved.
Version: 1.0.1
Requires at least: WP 3.0.0
Tested up to: WP 3.2
License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
Author: Philipp Schr&ouml;er
Author URI:
Plugin URI:
Last Modified: 5 September, 2011
*/

/*
    Copyright (C) 2011 Philipp Schröer

    This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or  any later version.

    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses>.

*/

// register brush
wp_register_script( 'syntaxhighlighter-brush-coffeescript', plugins_url( 'shBrushCoffeeScript.js', __FILE__ ), array('syntaxhighlighter-core'), '2.0.0' );

// add filter for aliases
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_coffeescript_brush' );

function syntaxhighlighter_coffeescript_brush($brushes) {
   $brushes['coffee'] = 'coffeescript';
   $brushes['coffeescript'] = 'coffeescript';

   return $brushes;
}
?>
