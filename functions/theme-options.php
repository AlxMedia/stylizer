<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'stylizer', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'stylizer' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'stylizer' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'stylizer' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'stylizer' ),
	'button_url'  => 'https://wordpress.org/support/theme/stylizer/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'stylizer' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'stylizer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'stylizer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'stylizer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'stylizer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'stylizer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'stylizer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'stylizer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'stylizer' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'stylizer' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'stylizer' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'stylizer' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'stylizer' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Blog Layout
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_html__( 'Blog Layout', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> 'blog-list',
	'choices'		=> array(
		'blog-standard'	=> esc_html__( 'Standard', 'stylizer' ),
		'blog-list'		=> esc_html__( 'List', 'stylizer' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'stylizer' ),
	'description'	=> esc_html__( 'Your blog heading', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'stylizer' ),
	'description'	=> esc_html__( 'Your blog subheading', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'stylizer' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'stylizer' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Featured Category
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'stylizer' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'stylizer' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'stylizer' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'stylizer' ),
	'description'	=> esc_html__( '2 columns of widgets', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'stylizer' ),
	'description'	=> esc_html__( '2 columns of widgets', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Post Format Icon
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'format-icon',
	'label'			=> esc_html__( 'Post Format Icons', 'stylizer' ),
	'description'	=> esc_html__( 'Icons bottom right corner', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'stylizer' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'stylizer' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'stylizer' ),
		'categories'=> esc_html__( 'Related by categories', 'stylizer' ),
		'tags'		=> esc_html__( 'Related by tags', 'stylizer' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'stylizer' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'stylizer' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'stylizer' ),
		's1'		=> esc_html__( 'Sidebar Primary', 'stylizer' ),
		'content'	=> esc_html__( 'Below content', 'stylizer' ),
	),
) );
// Header: Search
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'stylizer' ),
	'description'	=> esc_html__( 'Header search button', 'stylizer' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'stylizer' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'stylizer' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Ads
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'stylizer' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'stylizer' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'stylizer' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'stylizer' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'stylizer' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'stylizer' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'stylizer' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'stylizer' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'stylizer' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'stylizer' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'stylizer' ),
	'description'	=> esc_html__( 'Footer credit text', 'stylizer' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'stylizer' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'stylizer' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Home
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'stylizer' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'stylizer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Single
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'stylizer' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'stylizer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'stylizer' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'stylizer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'stylizer' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'stylizer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Search
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'stylizer' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'stylizer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'stylizer' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'stylizer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'stylizer' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'stylizer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
	),
) );


function stylizer_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'stylizer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'stylizer' ),
		'description'	=> esc_html__( '(is_home) Primary', 'stylizer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'stylizer' ),
	) );
	Kirki::add_field( 'stylizer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'stylizer' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'stylizer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'stylizer' ),
	) );
	Kirki::add_field( 'stylizer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'stylizer' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'stylizer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'stylizer' ),
	) );
	Kirki::add_field( 'stylizer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'stylizer' ),
		'description'	=> esc_html__( '(is_category) Primary', 'stylizer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'stylizer' ),
	) );
	Kirki::add_field( 'stylizer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'stylizer' ),
		'description'	=> esc_html__( '(is_search) Primary', 'stylizer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'stylizer' ),
	) );
	Kirki::add_field( 'stylizer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'stylizer' ),
		'description'	=> esc_html__( '(is_404) Primary', 'stylizer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'stylizer' ),
	) );
	Kirki::add_field( 'stylizer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'stylizer' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'stylizer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'stylizer' ),
	) );
	
 } 
add_action( 'init', 'stylizer_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'stylizer' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'stylizer' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'stylizer' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'stylizer' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'stylizer' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'stylizer' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'stylizer' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'stylizer' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'stylizer' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'stylizer' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'stylizer' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'stylizer' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'stylizer' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'stylizer' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'stylizer' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'stylizer' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'stylizer' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Switch
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'light-dark-switch',
	'label'			=> esc_html__( 'Light/Dark Theme Switch', 'stylizer' ),
	'description'	=> esc_html__( 'Do not use with Dark Theme option enabled', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Sidebar Home Button
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'sidebar-home-btn',
	'label'			=> esc_html__( 'Sidebar Home Button', 'stylizer' ),
	'description'	=> esc_html__( 'Use instead of light/dark switch', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Dark
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark',
	'label'			=> esc_html__( 'Dark Theme', 'stylizer' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'stylizer' ),
	'description'	=> esc_html__( 'Select font for the theme', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'stylizer' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'stylizer' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'stylizer' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'stylizer' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'stylizer' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'stylizer' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'stylizer' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'stylizer' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'stylizer' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'stylizer' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'stylizer' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'stylizer' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'stylizer' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'stylizer' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'stylizer' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'stylizer' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'stylizer' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'stylizer' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'stylizer' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'stylizer' ),
		'arial'					=> esc_html__( 'Arial', 'stylizer' ),
		'georgia'				=> esc_html__( 'Georgia', 'stylizer' ),
		'verdana'				=> esc_html__( 'Verdana', 'stylizer' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'stylizer' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'stylizer' ),
	'description'	=> esc_html__( 'Max-width of the container', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> '1024',
	'choices'     => array(
		'min'	=> '720',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> '#e93ead',
) );
// Styling: Angled Style
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'angled',
	'label'			=> esc_html__( 'Angled Style', 'stylizer' ),
	'description'	=> esc_html__( 'Triangles', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'stylizer' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Left Bar Top Color
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-bar-top-left',
	'label'			=> esc_html__( 'Left Bar Top Color', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> '#4c5051',
) );
// Styling: Left Bar Color
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-bar-left',
	'label'			=> esc_html__( 'Left Bar Color', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> '#383c3d',
) );
// Styling: Left Background Color
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background-left',
	'label'			=> esc_html__( 'Left Background Color', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> '#1e2021',
) );
// Styling: Background Color
Kirki::add_field( 'stylizer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'stylizer' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
