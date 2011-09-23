<?php
/*
Plugin Name: WordPress SyntaxHighlighter Evolved: Brush Pack
Description: Adds additional brushes to SyntaxHighlighter Evolved.
Version: 0.1
Requires at least: WP 3.0
Tested up to: WP 3.2
License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
Author: Ben Atkin
Author URI: http://benatkin.com/
Plugin URI: https://github.com/benatkin/wordpress-syntaxhighlighter-brush-pack
Last Modified: September 21, 2011
*/

/*
    Copyright (C) 2011 Ben Atkin
    Copyright (C) 2011 Philipp Schröer

    This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or  any later version.

    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses>.

*/

// register brushes
wp_register_script( 'syntaxhighlighter-brush-coffeescript', plugins_url( 'shBrushCoffeeScript.js', __FILE__ ), array('syntaxhighlighter-core'), '2.0.0' );
wp_register_script( 'syntaxhighlighter-brush-clojure', plugins_url( 'shBrushClojure.js', __FILE__ ), array('syntaxhighlighter-core'), '2.0.0' );
wp_register_script( 'syntaxhighlighter-brush-vimscript', plugins_url( 'shBrushVimscript.js', __FILE__ ), array('syntaxhighlighter-core'), '2.0.0' );

// add filter for aliases
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_coffeescript_brush' );

function syntaxhighlighter_coffeescript_brush($brushes) {
   $brushes['coffee'] = 'coffeescript';
   $brushes['coffeescript'] = 'coffeescript';
   $brushes['clojure'] = 'clojure';
   $brushes['clj'] = 'clojure';
   $brushes['vimscript'] = 'vimscript';

   return $brushes;
}
?>
