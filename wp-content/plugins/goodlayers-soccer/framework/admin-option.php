<?php
	/*	
	*	Goodlayers Admin Option File
	*/	
	
	// add a post option to custom post type page
	if( is_admin() ){ 
		add_action('init', 'gdlr_create_soccer_sidebar_options'); 
	}
	function gdlr_create_soccer_sidebar_options(){
		global $gdlr_sidebar_controller;
		
		if( !class_exists('gdlr_page_options') ) return;
		new gdlr_page_options( 
			
			// page option attribute
			array(
				'post_type' => array('player', 'fixture_and_result'),
				'meta_title' => __('Goodlayers Sidebar Option', 'gdlr-soccer'),
				'meta_slug' => 'goodlayers-page-option',
				'option_name' => 'post-option',
				'position' => 'side',
				'priority' => 'core',
			),
				  
			// page option settings
			array(
				'page-layout' => array(
					'title' => __('Sidebar Layout', 'gdlr-soccer'),
					'options' => array(
							'sidebar' => array(
								'type' => 'radioimage',
								'options' => array(
									'default-sidebar'=>GDLR_PATH . '/include/images/default-sidebar-2.png',
									'no-sidebar'=>GDLR_PATH . '/include/images/no-sidebar-2.png',
									'both-sidebar'=>GDLR_PATH . '/include/images/both-sidebar-2.png', 
									'right-sidebar'=>GDLR_PATH . '/include/images/right-sidebar-2.png',
									'left-sidebar'=>GDLR_PATH . '/include/images/left-sidebar-2.png'
								),
								'default' => 'default-sidebar'
							),	
							'left-sidebar' => array(
								'title' => __('Left Sidebar' , 'gdlr-soccer'),
								'type' => 'combobox',
								'options' => $gdlr_sidebar_controller->get_sidebar_array(),
								'wrapper-class' => 'sidebar-wrapper left-sidebar-wrapper both-sidebar-wrapper'
							),
							'right-sidebar' => array(
								'title' => __('Right Sidebar' , 'gdlr-soccer'),
								'type' => 'combobox',
								'options' => $gdlr_sidebar_controller->get_sidebar_array(),
								'wrapper-class' => 'sidebar-wrapper right-sidebar-wrapper both-sidebar-wrapper'
							),						
					)
				),

			)
		);
		
	}
	


?>