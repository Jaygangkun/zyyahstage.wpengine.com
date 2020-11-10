<?php
	
	
	
	
/**************** Preview CSS ****************/
	



function primer_setup() {
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
  
	// Enqueue editor styles.
	add_editor_style( 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );
	add_editor_style( 'library/css/style.css' );
	
}

add_action( 'after_setup_theme', 'primer_setup' );




/**************** Preview JS ****************/


// Still working out the kinks on this one.

/*
function primer_enqueue() {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/library/js/libs/slick.min.js' );
    wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/library/js/scripts.js' );
}

add_action( 'enqueue_block_editor_assets', 'primer_enqueue' );
*/




/**************** Gutenberg Block Custom Category ****************/




function custom_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'custom',
				'title' => __( 'Custom', 'custom' ),
			),
		)
	);
}

add_filter( 'block_categories', 'custom_category', 10, 2);




/**************** Loading ACF into Gutenberg ****************/




// Render Callback

function my_acf_block_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/{$slug}.php") );
	}
}


// Registering ACF Blocks

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
  	
		acf_register_block(array(
			'name'				=> 'test-block',
			'title'				=> __('Test Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));
		
		
		acf_register_block(array(
			'name'				=> 'home-hero-block',
			'title'				=> __('Home Hero Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'home-management-block',
			'title'				=> __('Home Management Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'home-one-place-block',
			'title'				=> __('Home One Place Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'home-connect-block',
			'title'				=> __('Home Connect Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'signup-block',
			'title'				=> __('Signup Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'how-we-work-hero-block',
			'title'				=> __('How We Work Hero Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'how-we-work-ownership-block',
			'title'				=> __('How We Work Ownership Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'how-we-work-professionals-block',
			'title'				=> __('How We Work Professionals Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'how-we-work-list-block',
			'title'				=> __('How We Work List Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'about-hero-block',
			'title'				=> __('About Hero Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'description-block',
			'title'				=> __('Description Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'image-text-block',
			'title'				=> __('Image Text Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));

		acf_register_block(array(
			'name'				=> 'contact-block',
			'title'				=> __('Contact Block'),
			'description'		=> __('A dummy starter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'test' )
		));
	}
}
  
?>