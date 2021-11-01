<?php

/*
	================================
				Custom Post Type
	================================
*/
///////for Resume
function myportfolio_custom_resume(){
	$labels=array(
		'name'				=>__('Resume','myportfolio'),
		'singular_name' 	=>__('Resume','myportfolio'),
		'add_new'			=>__('Add Resume','myportfolio'),
		'all_items'			=>__('Resume','myportfolio'),
		'add_new_item'		=>__('Add Resume','myportfolio'),
		'edit_item'			=>__('Edit Resume','myportfolio'),
		'view_item'			=>__('View Resume','myportfolio'),
		'not_found'			=>__('No Resume Found ','myportfolio'),
		'not_found_in_trash'		=>__('No Resume Found in trash','myportfolio'),
		'parent_item_colon'	=>__('Parent Resume Item','myportfolio'),
		'search_items'		=>__('Search Resume','myportfolio'),
	);
	$args=array(
		'labels'			=>$labels,
		'public'			=>true,
		
		'capability_type'	=>'post',
		'supports'			=>array(
			'title',
			),
			'menu_position'=>8,
			'menu_icon'	   =>'dashicons-welcome-add-page',
			'exclude_from_search'=>false
	);
	register_post_type('Resume',$args);
}
add_action('init','myportfolio_custom_resume');

///////for About
function myportfolio_custom_about(){
	$labels=array(
		'name'				=>__('About','myportfolio'),
		'singular_name' 	=>__('About','myportfolio'),
		'add_new'			=>__('Add About','myportfolio'),
		'all_items'			=>__('About','myportfolio'),
		'add_new_item'		=>__('Add About','myportfolio'),
		'edit_item'			=>__('Edit About','myportfolio'),
		'view_item'			=>__('View About','myportfolio'),
		'not_found'			=>__('No About Found ','myportfolio'),
		'not_found_in_trash'		=>__('No About Found in trash','myportfolio'),
		'parent_item_colon'	=>__('Parent About Item','myportfolio'),
		'search_items'		=>__('Search About','myportfolio'),
	);
	$args=array(
		'labels'			=>$labels,
		'public'			=>true,
		
		'capability_type'	=>'post',
		'supports'			=>array(
			'title',
			'editor',
			),
			'menu_position'=>7,
			'menu_icon'	   =>'dashicons-welcome-add-page',
			'exclude_from_search'=>false
	);
	register_post_type('about',$args);
}
add_action('init','myportfolio_custom_about');
///////for success
function mp_success(){
	$labels=array(
		'name'				=>__('success','myportfolio'),
		'singular_name' 	=>__('success','myportfolio'),
		'add_new'			=>__('Add success','myportfolio'),
		'all_items'			=>__('success','myportfolio'),
		'add_new_item'		=>__('Add success','myportfolio'),
		'edit_item'			=>__('Edit success','myportfolio'),
		'view_item'			=>__('View success','myportfolio'),
		'not_found'			=>__('No success Found ','myportfolio'),
		'not_found_in_trash'		=>__('No success Found in trash','myportfolio'),
		'parent_item_colon'	=>__('Parent success Item','myportfolio'),
		'search_items'		=>__('Search success','myportfolio'),
	);
	$args=array(
		'labels'			=>$labels,
		'public'			=>true,
		
		'capability_type'	=>'post',
		'supports'			=>array(
			'title',
			'editor',
			),
			'menu_position'=>14,
			'menu_icon'	   =>'dashicons-welcome-add-page',
			'exclude_from_search'=>false
	);
	register_post_type('success',$args);
}
add_action('init','mp_success');

///////for Service
function myportfolio_custom_service(){
	$labels=array(
		'name'				=>__('service','myportfolio'),
		'singular_name' 	=>__('service','myportfolio'),
		'add_new'			=>__('Add new service','myportfolio'),
		'all_items'			=>__('All service','myportfolio'),
		'add_new_item'		=>__('Service Title','myportfolio'),
		'edit_item'			=>__('Edit service','myportfolio'),
		'view_item'			=>__('View service','myportfolio'),
		'not_found'			=>__('No service Found ','myportfolio'),
		'not_found_in_trash'		=>__('No service Found in trash','myportfolio'),
		'parent_item_colon'	=>__('Parent service Item','myportfolio'),
		'search_items'		=>__('Search service','myportfolio'),
	);
	$args=array(
		'labels'			=>$labels,
		'public'			=>true,
		
		'capability_type'	=>'post',
			'menu_position'=>9,
			'menu_icon'	   =>'dashicons-welcome-add-page',
			'exclude_from_search'=>false
	);
	register_post_type('service',$args);
}
add_action('init','myportfolio_custom_service');

///////for table
function myportfolio_custom_table(){
	$labels=array(
		'name'				=>__('Table','myportfolio'),
		'singular_name' 	=>__('Table','myportfolio'),
		'add_new'			=>__('Add new Table','myportfolio'),
		'all_items'			=>__('All Table','myportfolio'),
		'add_new_item'		=>__('Table Name','myportfolio'),
		'edit_item'			=>__('Edit Table','myportfolio'),
		'view_item'			=>__('View Table','myportfolio'),
		'not_found'			=>__('No Table Found ','myportfolio'),
		'not_found_in_trash'		=>__('No Table Found in trash','myportfolio'),
		'parent_item_colon'	=>__('Parent Table Item','myportfolio'),
		'search_items'		=>__('Search Table','myportfolio'),
	);
	$args=array(
		'labels'			=>$labels,
		'public'			=>true,
		'supports'			=>array(
			'title',
			),
		'capability_type'	=>'post',
			'menu_position'=>13,
			'menu_icon'	   =>'dashicons-welcome-add-page',
			'exclude_from_search'=>false
	);
	register_post_type('table',$args);
}
add_action('init','myportfolio_custom_table');

///////for Clients
function mp_clients(){
	$labels=array(
		'name'				=>__('client','myportfolio'),
		'singular_name' 	=>__('client','myportfolio'),
		'add_new'			=>__('Add new client','myportfolio'),
		'all_items'			=>__('All client','myportfolio'),
		'add_new_item'		=>__('client Name','myportfolio'),
		'edit_item'			=>__('Edit client','myportfolio'),
		'view_item'			=>__('View client','myportfolio'),
		'not_found'			=>__('No client Found ','myportfolio'),
		'not_found_in_trash'		=>__('No client Found in trash','myportfolio'),
		'parent_item_colon'	=>__('Parent client Item','myportfolio'),
		'search_items'		=>__('Search client','myportfolio'),
	);
	$args=array(
		'labels'			=>$labels,
		'public'			=>true,
		'supports'			=>array(
			'title',
			'thumbnail',
			),
		'capability_type'	=>'post',
			'menu_position'=>14,
			'menu_icon'	   =>'dashicons-welcome-add-page',
			'exclude_from_search'=>false
	);
	register_post_type('client',$args);
}
add_action('init','mp_clients');
///////for Clients
function mp_contact(){
	$labels=array(
		'name'				=>__('Contact','myportfolio'),
		'singular_name' 	=>__('Contact','myportfolio'),
		'add_new'			=>__('Add new Contact','myportfolio'),
		'all_items'			=>__('All Contact','myportfolio'),
		'add_new_item'		=>__('Contact','myportfolio'),
		'edit_item'			=>__('Edit Contact','myportfolio'),
		'view_item'			=>__('View Contact','myportfolio'),
		'not_found'			=>__('No Contact Found ','myportfolio'),
		'not_found_in_trash'		=>__('No Contact Found in trash','myportfolio'),
		'parent_item_colon'	=>__('Parent Contact Item','myportfolio'),
		'search_items'		=>__('Search Contact','myportfolio'),
	);
	$args=array(
		'labels'			=>$labels,
		'public'			=>true,
		'supports'			=>array(
			'title',
			'editor',
			),
		'capability_type'	=>'post',
			'menu_position'=>15,
			'menu_icon'	   =>'dashicons-welcome-add-page',
			'exclude_from_search'=>false
	);
	register_post_type('contact',$args);
}
add_action('init','mp_contact');


/*
	================================
				Custom Post Type
	================================
*/
///////for portfolio
function gcaab_custom_portfolio(){
	$labels=array(
		'name'				=>__('portfolio','myportfolio'),
		'singular_name' 	=>__('portfolio','myportfolio'),
		'add_new'			=>__('Add New','myportfolio'),
		'all_items'			=>__('All portfolio','myportfolio'),
		'add_new_item'		=>__('Add New portfolio','myportfolio'),
		'edit_item'			=>__('Edit portfolio','myportfolio'),
		'view_item'			=>__('View portfolio','myportfolio'),
		'not_found'			=>__('No portfolio Found ','myportfolio'),
		'not_found_in_trash'		=>__('No portfolio Found in trash','myportfolio'),
		'parent_item_colon'	=>__('Parent portfolio Item','myportfolio'),
		'search_items'		=>__('Search portfolio','myportfolio'),
	);
	$args=array(
		'labels'			=>$labels,
		'public'			=>true,
		'has_archive'		=>true,
		'publicly_queryable'=>true,
		'query_var'			=>true,
		'rewrite'			=>true,
		'capability_type'	=>'post',
		'supports'			=>array(
			'title',
			'editor',
			'thumbnail',
			),
			'menu_position'=>8,
			'menu_icon'	   =>'dashicons-welcome-add-page',
			'exclude_from_search'=>false
	);
	register_post_type('portfolio',$args);
}
add_action('init','gcaab_custom_portfolio');

function mp_custom_taxonomies(){
	/////for categories
	$labels=array(
		'name'				=>__('portfolio Categories','myportfolio'),
		'singular_name' 	=>__('portfolio Category','myportfolio'),
		'Search_item'		=>__('Search Category','myportfolio'),
		'all_items'			=>__('All Categories','myportfolio'),
		'parent_item'	=>__('Parent Category','myportfolio'),
		'parent_item_colon'	=>__('Parent Category','myportfolio'),
		'edit_item'			=>__('Edit Category','myportfolio'),
		'update_item'			=>__('Update Category','myportfolio'),
		'add_new_item'		=>__('Add New Category','myportfolio'),
		'new_item_name'		=>__('New Category Name','myportfolio'),
		'menu_name'			=>__('Categories','myportfolio')
	);
	$args=array(
		'hierarchical'=>true,
		'labels'=>$labels,
		'show_ui'=>true,
		'show_admin_column'=>true,
		'query_var'=>true,
		'rewrite'=>array('slug'=>'portfolio_category')
	);
	register_taxonomy('portfolio_category',array('portfolio'),$args);
		/////for Tag
	$labels=array(
		'name'				=>__('portfolio Tag','myportfolio'),
		'singular_name' 	=>__('portfolio Tag','myportfolio'),
		'Search_item'		=>__('Search Tag','myportfolio'),
		'all_items'			=>__('All Tags','myportfolio'),
		'edit_item'			=>__('Edit Tags','myportfolio'),
		'update_item'			=>__('Update Tag','myportfolio'),
		'add_new_item'		=>__('Add New  Tag','myportfolio'),
		'new_item_name'		=>__('New Tag Name','myportfolio'),
		'menu_name'			=>__('Tags','myportfolio')
	);
	$args=array(
		'hierarchical'=>false,
		'labels'=>$labels,
		'show_ui'=>true,
		'show_admin_column'=>true,
		'query_var'=>true,
		'rewrite'=>array('slug'=>'portfolio_tag')
	);
	register_taxonomy('portfolio_tag',array('portfolio'),$args);
}
add_action('init','mp_custom_taxonomies');
