<?php
add_action( 'init', 'register_project');

function register_project() {
  $labels = array(
		"name" => "Projecten",
		"singular_name" => "Portfolio",
		"menu_name" => "Projecten",
		"all_items" => "Alle Projecten",
		"add_new" => "Nieuwe toevoegen",
		"add_new_item" => "Voeg nieuw project toe",
		"edit" => "Bewerken",
		"edit_item" => "Bewerk project",
		"new_item" => "Nieuw project",
		"view" => "Bekijk",
		"view_item" => "Bekijk project",
		"search_items" => "Zoek project",
		"not_found" => "Geen projecten gevonden",
		"not_found_in_trash" => "Geen projecten gevonden in Prullenbak",
		"parent" => "Hoofd project",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "project", "with_front" => true ),
		"query_var" => true,

		"supports" => array( "title", "editor" ,"thumbnail"),
		"taxonomies" => array( "post_tag" )
	);

  register_post_type( 'project', $args );

  add_theme_support( 'post-thumbnails' );
}
