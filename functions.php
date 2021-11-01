<?php

function myportfolio_setup(){
	add_theme_support('title-tag');
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
	'html5',
	array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	)
);
load_theme_textdomain('myportfolio',get_template_directory_uri().'/languages');
	
	register_nav_menus( 
		array(
			'Main_menu'    =>__( 'Primary menu', 'gcaab' ),
			'footer_menu' =>__( 'Footer Menu', 'gcaab' ),
		) 
	);
	
	//Read More
	function read_more($limit){
		$post_content=explode(" ",get_the_content());
		$less_content=array_slice($post_content,0,$limit);
		echo implode(" ",$less_content);
	}

	
}
add_action('after_setup_theme','myportfolio_setup');
/*
	================================
				Include Script
	================================
*/
function myportfolio_script(){
	wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/css/vendor/bootstrap.min.css', array());
	wp_enqueue_style('magnific-popup',get_template_directory_uri().'/css/vendor/magnific-popup.css', array());
	wp_enqueue_style('bookblock',get_template_directory_uri().'/css/vendor/bookblock.css', array());
	wp_enqueue_style('ionicons-min',get_template_directory_uri().'/css/vendor/ionicons.min.css', array());
	wp_enqueue_style('main-css',get_template_directory_uri().'/css/main.css', array());
	wp_enqueue_style('blue-style',get_template_directory_uri().'/css/colors/blue.css', array());
	//wp_enqueue_style('green-style',get_template_directory_uri().'/css/colors/green.css', array());
	//wp_enqueue_style('red-style',get_template_directory_uri().'/css/colors/red.css', array());
	//wp_enqueue_style('orange-style',get_template_directory_uri().'/css/colors/orange.css', array());
	//wp_enqueue_style('black-style',get_template_directory_uri().'/css/colors/black.css', array());
	//wp_enqueue_style('white-style',get_template_directory_uri().'/css/colors/white.css', array());
	wp_enqueue_style('mainstyle',get_stylesheet_uri());
	wp_enqueue_script( 'modernizr-js',get_theme_file_uri('/js/vendor/modernizr.custom.js'), array(), '1.1', false);
	
	wp_enqueue_script( 'map-js',get_theme_file_uri('/js/vendor/map.js'), array(), '1.1', true);
	wp_enqueue_script( 'min-js',get_theme_file_uri('/js/vendor/jquery.min.js'), array(), '1.1', true);
	wp_enqueue_script( 'imagesloaded-js',get_theme_file_uri('/js/vendor/imagesloaded.pkgd.min.js'), array(), '1.1', true);
	wp_enqueue_script( 'isotope-js',get_theme_file_uri('/js/vendor/isotope.pkgd.min.js'), array(), '1.1', true);
	wp_enqueue_script( 'magnific-js',get_theme_file_uri('/jquery.magnific-popup.min.js'), array(), '1.1', true);
	wp_enqueue_script( 'slimscroll-js',get_theme_file_uri('/js/vendor/jquery.slimscroll.min.js'), array(), '1.1', true);
	wp_enqueue_script( 'scrollTo-js',get_theme_file_uri('/js/vendor/jquery.scrollTo.min.js'), array(), '1.1', true);
	wp_enqueue_script( 'localScroll-js',get_theme_file_uri('/js/vendor/jquery.localScroll.min.js'), array(), '1.1', true);
	wp_enqueue_script( 'jquerypp-js',get_theme_file_uri('/js/vendor/jquerypp.custom.js'), array(), '1.1', true);
	wp_enqueue_script( 'bookblock-js',get_theme_file_uri('/js/vendor/jquery.bookblock.min.js'), array(), '1.1', true);
	//wp_enqueue_script( 'styleswitch-js',get_theme_file_uri('/js/vendor/styleswitch.js'), array(), '1.1', true);
	wp_enqueue_script( 'main-js',get_theme_file_uri('/js/main.js'), array(), '1.1', true);


}
add_action('wp_enqueue_scripts','myportfolio_script');

///customize api
function logo_customize($logo){
	$logo->add_section('header_section',array(
		'title'=>'Header Options',
		'priority'=>20
	));
	$logo->add_setting('logo_image',array(
		'transport'=>'refresh'
	));
	$logo->add_control(
	new WP_Customize_Image_Control($logo,'logo_image',array(
		'label'  	=>'Logo Uploader',
		'section'	=>'header_section',
		'settings'	=>'logo_image'
	))
		
	);	
}
add_action('customize_register','logo_customize');

function social_custom($social){
	$social->add_section('social_section',array(
		'title'=>'Social Options',
		'priority'=>21
	));
	$social->add_setting('facebook_url',array(
		'default'=>'https://www.facebook.com/developerabs',
		'transport'=>'refresh'
	));
	$social->add_control('facebook_url',array(
		'section'  =>'social_section',
		'label'    =>'Facebook Profile URL',
		'type'	   =>'text'
	));
	$social->add_setting('twitter_url',array(
		'default'=>'https://www.twitter.com/developerabs',
		'transport'=>'refresh'
	));
	$social->add_control('twitter_url',array(
		'section'  =>'social_section',
		'label'    =>'Twitter profile URL ',
		'type'	   =>'text'
	));
	$social->add_setting('behance_url',array(
		'default'=>'https://www.behance.com/abssakil',
		'transport'=>'refresh'
	));
	$social->add_control('behance_url',array(
		'section'  =>'social_section',
		'label'    =>'Behance profile URL ',
		'type'	   =>'text'
	));
	$social->add_setting('email_address',array(
		'default'=>'absakil0@gmail.com',
		'transport'=>'refresh'
	));
	$social->add_control('email_address',array(
		'section'  =>'social_section',
		'label'    =>'Email Address',
		'type'	   =>'text'
	));
	$social->add_setting('phone_number',array(
		'default'=>'+8801797776259',
		'transport'=>'refresh'
	));
	$social->add_control('phone_number',array(
		'section'  =>'social_section',
		'label'    =>'Phone Number',
		'type'	   =>'text'
	));
	

}
add_action('customize_register','social_custom');

require_once('inc/custom_type.php');
require_once('inc/metabox/init.php');
require_once('inc/metabox/functions.php');
