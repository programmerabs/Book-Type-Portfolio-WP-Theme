<?php
/*
==================
Resume Post
==================
*/
function myportfolio_resume(){

	$prefix = '_mp_';
	$resume_meta = new_cmb2_box( array(
		'id'            => 'Resume_area',
		'title'         => 'Resume Area',
		'object_types' => array( 'resume' ), // post type
	) );
	$resume_meta->add_field( array(
	'name' => 'Experience heading',
	'id' =>'exp_head',
	'type' => 'text',
	));
	$Rexp_field_group = $resume_meta->add_field( array(
	'id'          =>'rex_g',
	'type'        => 'group',
	'options'     => array(
		'group_title'   => 'Experience Details',
		'add_button'    => 'Add Another list',
		'remove_button' => 'Remove list',
		'sortable'      => true, 
	),
) );
	$resume_meta->add_group_field( $Rexp_field_group, array(
	'name' =>'TimeFrame',
	'id'   =>'r_time',
	'type' => 'text'
	
	) );
	$resume_meta->add_group_field( $Rexp_field_group, array(
		'name' => 'Company Name ',
		'id'   =>'r_cname',
		'type' => 'text'
		
	) );
	$resume_meta->add_group_field( $Rexp_field_group, array(
		'name' => 'Designation',
		'id'   =>'r_dg',
		'type' => 'text'
		
	) );
	
	$resume_meta->add_group_field( $Rexp_field_group, array(
		'name' => 'Content',
		'id'   =>'c_tl',
		'type' => 'textarea_small'
		
	) );
	//education
	$resume_meta->add_field( array(
	'name' => 'Education heading',
	'id' =>'eedu_head',
	'type' => 'text',
	));
	$Rexp_field_group = $resume_meta->add_field( array(
	'id'          =>'eedu_g',
	'type'        => 'group',
	'options'     => array(
		'group_title'   => 'Education Details',
		'add_button'    => 'Add Another list',
		'remove_button' => 'Remove list',
		'sortable'      => true, 
	),
) );
	$resume_meta->add_group_field( $Rexp_field_group, array(
	'name' =>'TimeFrame',
	'id'   =>'e_time',
	'type' => 'text'
	
	) );
	$resume_meta->add_group_field( $Rexp_field_group, array(
		'name' => 'Institute Name ',
		'id'   =>'e_cname',
		'type' => 'text'
		
	) );
	$resume_meta->add_group_field( $Rexp_field_group, array(
		'name' => 'Degree',
		'id'   =>'e_dg',
		'type' => 'text'
		
	) );
	
	$resume_meta->add_group_field( $Rexp_field_group, array(
		'name' => 'Content',
		'id'   =>'e_cont',
		'type' => 'textarea_small'
		
	) );
	///skill 1
	$resume_meta->add_field( array(
	'name' => 'Skill heading 1',
	'id' =>'skill_head1',
	'type' => 'text',
	));
	$Rexp_field_group = $resume_meta->add_field( array(
	'id'          =>'skill_g1',
	'type'        => 'group',
	'options'     => array(
		'group_title'   => 'Skill Details',
		'add_button'    => 'Add Another skill',
		'remove_button' => 'Remove skill',
		'sortable'      => true, 
	),
) );
	$resume_meta->add_group_field( $Rexp_field_group, array(
	'name' =>'Skill Name',
	'id'   =>'skill_name1',
	'type' => 'text'
	
	) );
	$resume_meta->add_group_field( $Rexp_field_group, array(
		'name' => 'Skill value',
		'id'   =>'skill_val1',
		'type' => 'text'
		
	) );
	///skill 2
	$resume_meta->add_field( array(
	'name' => 'Skill heading 2',
	'id' =>'skill_head2',
	'type' => 'text',
	));
	$Rexp_field_group = $resume_meta->add_field( array(
	'id'          =>'skill_g2',
	'type'        => 'group',
	'options'     => array(
		'group_title'   => 'Skill Details',
		'add_button'    => 'Add Another skill',
		'remove_button' => 'Remove skill',
		'sortable'      => true, 
	),
) );
	$resume_meta->add_group_field( $Rexp_field_group, array(
	'name' =>'Skill Name',
	'id'   =>'skill_name2',
	'type' => 'text'
	
	) );
	$resume_meta->add_group_field( $Rexp_field_group, array(
		'name' => 'Skill value',
		'id'   =>'skill_val2',
		'type' => 'text'
		
	) );
	
	
}

add_action( 'cmb2_admin_init', 'myportfolio_resume' );

/*
==================
About Post
==================
*/
function myportfolio_about(){

	$prefix = '_mp_';
	$about_meta = new_cmb2_box( array(
		'id'            => 'about_area',
		'title'         => 'About Area',
		'object_types' => array( 'about' ), // post type
	) );
	$About_field_group = $about_meta->add_field( array(
	'id'          =>'abt_gp',
	'type'        => 'group',
	'options'     => array(
		'group_title'   => 'Information List',
		'add_button'    => 'Add Another information',
		'remove_button' => 'Remove information',
		'sortable'      => true, 
	),
) );
	$about_meta->add_group_field( $About_field_group, array(
	'name' =>'Name',
	'id'   =>'info_name',
	'type' => 'text'
	
	) );
	$about_meta->add_group_field( $About_field_group, array(
		'name' => 'Value',
		'id'   =>'info_value',
		'type' => 'text'
		
	) );
}
add_action( 'cmb2_admin_init', 'myportfolio_about' );
/*
==================
Table Post
==================
*/
function mp_table(){

	$prefix = '_mp_';
	$table_meta = new_cmb2_box( array(
		'id'            => 'table_area',
		'title'         => 'Table Area',
		'object_types' => array( 'table' ), // post type
	) );
	$table_meta->add_field( array(
	'name' => 'currency',
	'id' =>'currency',
	'type' => 'text',
	));
	$table_meta->add_field( array(
	'name' => 'Amount',
	'id' =>'Amount',
	'type' => 'text',
	));
	$table_meta->add_field( array(
	'name' => 'Period',
	'id' =>'Period',
	'type' => 'text',
	));
	$table_field_group = $table_meta->add_field( array(
	'id'          =>'table_g',
	'type'        => 'group',
	'options'     => array(
		'group_title'   => 'Feature List',
		'add_button'    => 'Add Another list',
		'remove_button' => 'Remove list',
		'sortable'      => true, 
	),
) );
	$table_meta->add_group_field( $table_field_group, array(
	'name' =>'Feature Name',
	'id'   =>'f_name',
	'type' => 'text'
	
	) );
	$table_meta->add_field( array(
	'name' => 'Button Name',
	'id' =>'tbl_btn_name',
	'type' => 'text',
	));
	$table_meta->add_field( array(
	'name' => 'Button link',
	'id' =>'tbl_btn_link',
	'type' => 'text_url',
	));
}
add_action( 'cmb2_admin_init', 'mp_table' );
/*
==================
Service Post
==================
*/
function myportfolio_service(){

	$prefix = '_mp_';
	$service_meta = new_cmb2_box( array(
		'id'            => 'service_area',
		'title'         => ' ',
		'object_types' => array( 'service' ), // post type
	) );
	$service_meta->add_field( array(
	'name' => 'icon',
	'id' =>'sv_icon',
	'type' => 'text',
	));
}
add_action( 'cmb2_admin_init', 'myportfolio_service' );
/*
==================
Portfolio Post
==================
*/
function myportfolio_portfolio(){

	$prefix = '_mp_';
	$portfolio_meta = new_cmb2_box( array(
		'id'            => 'portfolio_area',
		'title'         => ' ',
		'object_types' => array( 'portfolio' ), // post type
	) );
	$portfolio_meta->add_field( array(
	'name' => 'client',
	'id' =>'clint_n',
	'type' => 'text',
	));
	$portfolio_meta->add_field( array(
	'name' => 'Technology',
	'id' =>'technolog_n',
	'type' => 'text',
	));
	$portfolio_meta->add_field( array(
	'name' => 'Optional Content',
	'id' =>'content_n',
	'type' => 'textarea',
	));
	$portfolio_meta->add_field( array(
	'name' => 'Portfolio link Name',
	'id' =>'portfolio_l_n',
	'type' => 'text_medium',
	));
	$portfolio_meta->add_field( array(
	'name' => 'Portfolio Link URL',
	'id' =>'portfolio_l_u',
	'type' => 'text_url',
	));
}
add_action( 'cmb2_admin_init', 'myportfolio_portfolio' );

/*
==================
Contact Post
==================
*/
function mp_contact_page(){

	$prefix = '_mp_';
	$contact_meta = new_cmb2_box( array(
		'id'            => 'contact_a',
		'title'         => 'Contact Area',
		'object_types' => array( 'contact' ), // post type
	) );
	$contact_meta->add_field( array(
	'name' => 'Address',
	'id' =>'c_address',
	'type' => 'text',
	));
	$contact_meta->add_field( array(
	'name' => 'Phone Number',
	'id' =>'c_phone',
	'type' => 'text',
	));
	$contact_meta->add_field( array(
	'name' => 'Email',
	'id' =>'c_email',
	'type' => 'text_email',
	));
	$contact_meta->add_field( array(
	'name' => 'Website',
	'id' =>'c_website',
	'type' => 'text',
	));
	$contact_meta->add_field( array(
	'name' => 'Maps',
	'id' =>'g_map',
	'type' => 'textarea_code',
	));
	
}
add_action( 'cmb2_admin_init', 'mp_contact_page' );