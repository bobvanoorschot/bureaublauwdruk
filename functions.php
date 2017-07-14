<?php

// Include the class (unless you are using the script as a plugin)
require_once( 'wp-content/plugins/wp-less/wp-less.php' );

// enqueue a .less style sheet
if ( ! is_admin() )
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.less' );

// you can also use .less files as mce editor style sheets
// add_editor_style( 'editor-style.less' );
