<?php
/**
 * Event Management functions and definitions
 * @package Event Management
 */

/* Theme Setup */
if ( ! function_exists( 'event_management_setup' ) ) :

function event_management_setup() {

	$GLOBALS['content_width'] = apply_filters( 'event_management_content_width', 640 );

	load_theme_textdomain( 'event-management', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('event-management-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'event-management' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', event_management_font_url() ) );
}
endif; // event_management_setup
add_action( 'after_setup_theme', 'event_management_setup' );

/* Theme Widgets Setup */
function event_management_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'event-management' ),
		'description'   => __( 'Appears on posts and pages', 'event-management' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Posts and Pages Sidebar', 'event-management' ),
		'description'   => __( 'Appears on posts and pages', 'event-management' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'event-management' ),
		'description'   => __( 'Appears on posts and pages', 'event-management' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$event_management_widget_areas = get_theme_mod('footer_widget_areas', '4');
	for ($i=1; $i<=$event_management_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Widget ', 'event-management' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'event_management_widgets_init' );

/* Theme Font URL */
function event_management_font_url() {
	$font_url      = '';
	$font_family   = array();
	$font_family[] = 'ABeeZee:400,400i';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Acme';
	$font_family[] = 'Allura:400';
	$font_family[] = 'Anton';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Archivo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Arimo:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Arsenal:400,400i,700,700i';
	$font_family[] = 'Arvo:400,400i,700,700i';
	$font_family[] = 'Alegreya:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre:300,300i,400,400i,700,700i';
	$font_family[] = 'Bangers';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Barlow Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Bitter:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'BenchNine:300,400,700';
	$font_family[] = 'Cabin:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Cardo:400,400i,700';
	$font_family[] = 'Courgette';
	$font_family[] = 'Caveat Brush:400';
	$font_family[] = 'Cherry Swash:400,700';
	$font_family[] = 'Cormorant Garamond:300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Crimson Text:400,400i,600,600i,700,700i';
	$font_family[] = 'Cuprum:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Cookie';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Charm:400,700';
	$font_family[] = 'Chewy';
	$font_family[] = 'Days One';
	$font_family[] = 'Dosis:200,300,400,500,600,700,800';
	$font_family[] = 'DM Sans:400,400i,500,500i,700,700i';
	$font_family[] = 'EB Garamond:400,400i,500,500i,600,600i,700,700i,800,800i';
	$font_family[] = 'Economica:400,400i,700,700i';
	$font_family[] = 'Fira Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Francois One';
	$font_family[] = 'Frank Ruhl Libre:300,400,500,700,900';
	$font_family[] = 'Gabriela:400';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Handlee';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Heebo:100,200,300,400,500,700,800,900';
	$font_family[] = 'Hind:300,400,500,600,700';
	$font_family[] = 'Inconsolata:200,300,400,500,600,700,800,900';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Josefin Slab:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Josefin Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Jost:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Krub:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Lobster:400';
	$font_family[] = 'Lato:100,100i,300,300i,400,400i,700,700i,900,900i';
	$font_family[] = 'Lora:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Libre Baskerville:400,400i,700';
	$font_family[] = 'Lobster Two:400,400i,700,700i';
	$font_family[] = 'Merriweather:300,300i,400,400i,700,700i,900,900i';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Marcellus:400';
	$font_family[] = 'Merienda One:400';
	$font_family[] = 'Monda:400,700';
	$font_family[] = 'Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Muli';
	$font_family[] = 'Mulish:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Noto Serif:400,400i,700,700i';
	$font_family[] = 'Nunito Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
	$font_family[] = 'Overpass:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Overpass Mono:300,400,500,600,700';
	$font_family[] = 'Oxygen:300,400,700';
	$font_family[] = 'Oswald:200,300,400,500,600,700';
	$font_family[] = 'Orbitron:400,500,600,700,800,900';
	$font_family[] = 'Patua One';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Padauk:400,700';
	$font_family[] = 'Playball:400';
	$font_family[] = 'Playfair Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'PT Sans:400,400i,700,700i';
	$font_family[] = 'PT Serif:400,400i,700,700i';
	$font_family[] = 'Philosopher:400,400i,700,700i';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Poiret One';
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Prata:400';
	$font_family[] = 'Quicksand:300,400,500,600,700';
	$font_family[] = 'Quattrocento Sans:400,400i,700,700i';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Rubik:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
	$font_family[] = 'Roboto Condensed:300,300i,400,400i,700,700i';
	$font_family[] = 'Rokkitt:100,200,300,400,500,600,700,800,900';
	$font_family[] = 'Russo One';
	$font_family[] = 'Righteous';
	$font_family[] = 'Saira:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Sen:400,700,800';
	$font_family[] = 'Slabo';
	$font_family[] = 'Source Sans Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Sail:400';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Spartan:100,200,300,400,500,600,700,800,900';
	$font_family[] = 'Staatliches';
	$font_family[] = 'Stylish:400';
	$font_family[] = 'Tangerine:400,700';
	$font_family[] = 'Titillium Web:200,200i,300,300i,400,400i,600,600i,700,700i,900';
	$font_family[] = 'Trirong:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Ubuntu:300,300i,400,400i,500,500i,700,700i';
	$font_family[] = 'Unica One';
	$font_family[] = 'VT323';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Vollkorn:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Volkhov:400,400i,700,700i';
	$font_family[] = 'Work Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Yanone Kaffeesatz:200,300,400,500,600,700';
	$font_family[] = 'ZCOOL XiaoWei';
	
	$query_args = array(
		'family' => rawurlencode(implode('|', $font_family)),
	);
	$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/* Theme enqueue scripts */
function event_management_scripts() {
	wp_enqueue_style( 'event-management-font', event_management_font_url(), array() );
	// blocks-css
	wp_enqueue_style( 'event-management-block-style', get_theme_file_uri('/css/blocks.css') );
	
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()) . '/css/bootstrap.css');
	wp_enqueue_style( 'event-management-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'event-management-style', 'rtl', 'replace' );	
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css' );

	// Body
	$event_management_body_color       = get_theme_mod(
		'event_management_body_color', '');
	$event_management_body_font_family = get_theme_mod('event_management_body_font_family', '');
	$event_management_body_font_size   = get_theme_mod(
		'event_management_body_font_size', '');

	// Paragraph
	$event_management_paragraph_color       = get_theme_mod('event_management_paragraph_color', '');
	$event_management_paragraph_font_family = get_theme_mod('event_management_paragraph_font_family', '');
	$event_management_paragraph_font_size   = get_theme_mod('event_management_paragraph_font_size', '');
	// "a" tag
	$event_management_atag_color       = get_theme_mod('event_management_atag_color', '');
	$event_management_atag_font_family = get_theme_mod('event_management_atag_font_family', '');
	// "li" tag
	$event_management_li_color       = get_theme_mod('event_management_li_color', '');
	$event_management_li_font_family = get_theme_mod('event_management_li_font_family', '');
	
	// H1
	$event_management_h1_color       = get_theme_mod('event_management_h1_color', '');
	$event_management_h1_font_family = get_theme_mod('event_management_h1_font_family', '');
	$event_management_h1_font_size   = get_theme_mod('event_management_h1_font_size', '');

	// H2
	$event_management_h2_color       = get_theme_mod('event_management_h2_color', '');
	$event_management_h2_font_family = get_theme_mod('event_management_h2_font_family', '');
	$event_management_h2_font_size   = get_theme_mod('event_management_h2_font_size', '');
	// H3
	$event_management_h3_color       = get_theme_mod('event_management_h3_color', '');
	$event_management_h3_font_family = get_theme_mod('event_management_h3_font_family', '');
	$event_management_h3_font_size   = get_theme_mod('event_management_h3_font_size', '');
	// H4
	$event_management_h4_color       = get_theme_mod('event_management_h4_color', '');
	$event_management_h4_font_family = get_theme_mod('event_management_h4_font_family', '');
	$event_management_h4_font_size   = get_theme_mod('event_management_h4_font_size', '');
	// H5
	$event_management_h5_color       = get_theme_mod('event_management_h5_color', '');
	$event_management_h5_font_family = get_theme_mod('event_management_h5_font_family', '');
	$event_management_h5_font_size   = get_theme_mod('event_management_h5_font_size', '');
	// H6
	$event_management_h6_color       = get_theme_mod('event_management_h6_color', '');
	$event_management_h6_font_family = get_theme_mod('event_management_h6_font_family', '');
	$event_management_h6_font_size   = get_theme_mod('event_management_h6_font_size', '');


	$event_management_custom_css = '

		body{
		    color:'.esc_html($event_management_body_color).'!important;
		    font-family: '.esc_html($event_management_body_font_family).';
		    font-size: '.esc_html($event_management_body_font_size).'px;
		}
		p,span{
		    color:'.esc_html($event_management_paragraph_color).'!important;
		    font-family: '.esc_html($event_management_paragraph_font_family).';
		    font-size: '.esc_html($event_management_paragraph_font_size).';
		}
		a{
		    color:'.esc_html($event_management_atag_color).'!important;
		    font-family: '.esc_html($event_management_atag_font_family).';
		}
		li{
		    color:'.esc_html($event_management_li_color).'!important;
		    font-family: '.esc_html($event_management_li_font_family).';
		}
		h1{
		    color:'.esc_html($event_management_h1_color).'!important;
		    font-family: '.esc_html($event_management_h1_font_family).'!important;
		    font-size: '.esc_html($event_management_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_html($event_management_h2_color).'!important;
		    font-family: '.esc_html($event_management_h2_font_family).'!important;
		    font-size: '.esc_html($event_management_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_html($event_management_h3_color).'!important;
		    font-family: '.esc_html($event_management_h3_font_family).'!important;
		    font-size: '.esc_html($event_management_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_html($event_management_h4_color).'!important;
		    font-family: '.esc_html($event_management_h4_font_family).'!important;
		    font-size: '.esc_html($event_management_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_html($event_management_h5_color).'!important;
		    font-family: '.esc_html($event_management_h5_font_family).'!important;
		    font-size: '.esc_html($event_management_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_html($event_management_h6_color).'!important;
		    font-family: '.esc_html($event_management_h6_font_family).'!important;
		    font-size: '.esc_html($event_management_h6_font_size).'!important;
		}
	';
	wp_add_inline_style('event-management-basic-style', $event_management_custom_css);

	/* Theme Color sheet */
	require get_parent_theme_file_path( '/theme-color-option.php' );
	wp_add_inline_style( 'event-management-basic-style',$event_management_custom_css );
	wp_enqueue_script( 'tether-js', esc_url(get_template_directory_uri()) . '/js/tether.js', array('jquery') ,'',true);
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'event-management-custom-scripts-jquery', esc_url(get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'event_management_scripts' );

function event_management_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );
  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/* Excerpt Limit Begin */
function event_management_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/*radio button sanitization*/
function event_management_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function event_management_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function event_management_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

/**
 * Integer sanitization
 */
if ( ! function_exists( 'event_management_sanitize_integer' ) ) {
	function event_management_sanitize_integer( $input ) {
		return (int) $input;
	}
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'event_management_loop_columns');
if (!function_exists('event_management_loop_columns')) {
	function event_management_loop_columns() {
		$columns = get_theme_mod( 'event_management_per_columns', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'event_management_shop_per_page', 20 );
function event_management_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'event_management_product_per_page', 9 );
	return $cols;
}

//Display the related posts
if ( ! function_exists( 'event_management_related_posts' ) ) {
	function event_management_related_posts() {
		wp_reset_postdata();
		global $post;
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'         => absint( get_theme_mod( 'event_management_related_posts_count_number', '3' ) ),
		);
		// Categories
		if ( get_theme_mod( 'event_management_related_posts_taxanomies', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Tags
		if ( get_theme_mod( 'event_management_related_posts_taxanomies', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}
		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();
		return $query;
	}
}

function event_management_enable_post_featured_image(){
	if(get_theme_mod('event_management_post_featured_image') == 'Image' ) {
		return true;
	}
	return false;
}

function event_management_post_color_enabled(){
	if(get_theme_mod('event_management_post_featured_image') == 'Color' ) {
		return true;
	}
	return false;
}

function event_management_enable_post_image_custom_dimention(){
	if(get_theme_mod('event_management_post_featured_image_dimention') == 'Custom' ) {
		return true;
	}
	return false;
}

function event_management_show_post_color(){
	if(get_theme_mod('event_management_post_featured_image') == 'Color' ) {
		return true;
	}
	return false;
}

define('EVENT_MANAGEMENT_LIVE_DEMO',__('https://www.buywptemplates.com/event-management-pro/', 'event-management'));
define('EVENT_MANAGEMENT_BUY_PRO',__('https://www.buywptemplates.com/themes/event-management-wordpress-theme/', 'event-management'));
define('EVENT_MANAGEMENT_PRO_DOC',__('https://buywptemplates.com/demo/docs/bwt-event-management-pro/', 'event-management'));
define('EVENT_MANAGEMENT_FREE_DOC',__('https://buywptemplates.com/demo/docs/free-event-management/', 'event-management'));
define('EVENT_MANAGEMENT_PRO_SUPPORT',__('https://www.buywptemplates.com/support/', 'event-management'));
define('EVENT_MANAGEMENT_FREE_SUPPORT',__('https://wordpress.org/support/theme/event-management/', 'event-management'));

define('EVENT_MANAGEMENT_CREDIT',__('https://www.buywptemplates.com/themes/free-event-management-wordpress-theme/', 'event-management'));

if ( ! function_exists( 'event_management_credit' ) ) {
	function event_management_credit(){
		echo "<a href=".esc_url(EVENT_MANAGEMENT_CREDIT)." target='_blank'>".esc_html__('Event Management WordPress Theme ','event-management')."</a>";
	}
}

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Load Customizer file. */
require get_template_directory() . '/inc/customizer.php';

/* About Widget */
require get_template_directory() . '/inc/about.php';

/* Contact Widget */
require get_template_directory() . '/inc/contact.php';

/* Load welcome message.*/
require get_template_directory() . '/inc/dashboard/get_started_info.php';
/* Webfonts */
require get_template_directory() . '/inc/wptt-webfont-loader.php';