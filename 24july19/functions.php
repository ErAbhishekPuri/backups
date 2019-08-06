<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'twentynineteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		//nav-menu

add_action('init', 'register_my_menus');


function register_my_menus() {
  register_nav_menus(array(
    'main-menu' => 'Main Menu',
    'head-menu' => 'Head Menu'
        
  ));
}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
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

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'twentynineteen' ),
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'twentynineteen' ),
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	// register_sidebar(
	// 	array(
	// 		'name'          => __( 'DO YOU NEED HELP?', 'twentynineteen' ),
	// 		'id'            => 'sidebar-1',
	// 		'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );


	register_sidebar(
		array(
			'name'          => __( 'search-bar', 'twentynineteen' ),
			'id'            => 'sidebar-20',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


	register_sidebar(
		array(
			'name'          => __( 'Action link at sub-category page', 'twentynineteen' ),
			'id'            => 'sidebar-15',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

		register_sidebar(
		array(
			'name'          => __( 'Problem at work list 1', 'twentynineteen' ),
			'id'            => 'sidebar-17',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);	register_sidebar(
		array(
			'name'          => __( 'Problem at work list 2', 'twentynineteen' ),
			'id'            => 'sidebar-18',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);





	register_sidebar(
		array(
			'name'          => __( 'categories at category page', 'twentynineteen' ),
			'id'            => 'sidebar-16',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);









	register_sidebar(
		array(
			'name'          => __( 'DO YOU NEED HELP?', 'twentynineteen' ),
			'id'            => 'sidebar-11',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


	register_sidebar(
		array(
			'name'          => __( 'sidebar for shop page', 'twentynineteen' ),
			'id'            => 'sidebar-12',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);



	register_sidebar(
		array(
			'name'          => __( 'QUICK LINKS', 'twentynineteen' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


	register_sidebar(
		array(
			'name'          => __( 'PROBLEM AT WORK?', 'twentynineteen' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'HEAD OFFICE', 'twentynineteen' ),
			'id'            => 'sidebar-4',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'bottom-Footer', 'twentynineteen' ),
			'id'            => 'sidebar-5',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',

		)
	);


register_sidebar(
		array(
			'name'          => __( 'bottom-Footer-social icons', 'twentynineteen' ),
			'id'            => 'sidebar-6',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);



register_sidebar(
		array(
			'name'          => __( 'top header content', 'twentynineteen' ),
			'id'            => 'sidebar-7',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

register_sidebar(
		array(
			'name'          => __( 'top header social icons', 'twentynineteen' ),
			'id'            => 'sidebar-8',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);



register_sidebar(
		array(
			'name'          => __( 'top header Menu', 'twentynineteen' ),
			'id'            => 'sidebar-9',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);





register_sidebar(
		array(
			'name'          => __( 'News letter', 'twentynineteen' ),
			'id'            => 'sidebar-10',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
	wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '1.1', true );
		wp_enqueue_script( 'twentynineteen-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '1.1', true );
	}

	wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function twentynineteen_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo twentynineteen_custom_colors_css(); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'twentynineteen_colors_css_wrap' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

//custom post type-1


/* Advice post type */
add_action( 'init', 'advice_init' );

function advice_init() {
	$labels = array(
		'name'			   => _x( 'advice', 'post type general name' ),
		'singular_name'	  => _x( 'Advice', 'post type singular name' ),
		'menu_name'		  => _x( 'Advice', 'admin menu' ),
		'name_admin_bar'	 => _x( 'Advice Page', 'add new on admin bar' ),
		'add_new'			=> _x( 'Add New Advice Page', 'add new' ),
		'add_new_item'	   => __( 'Add New Advice Page' ),
		'new_item'		   => __( 'New Advice Page' ),
		'edit_item'		  => __( 'Edit Advice Page' ),
		'view_item'		  => __( 'View Advice Page' ),
		'all_items'		  => __( 'All Advice' ),
		'search_items'	   => __( 'Search Advice' ),
		'parent_item_colon'  => __( 'Parent Advice Pages:' ),
		'not_found'		  => __( 'No advice pages found.' ),
		'not_found_in_trash' => __( 'No advice pages found in trash.' )
	);

	$args = array(
		'labels'			  => $labels,
		'public'			  => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'			  => true,
		'show_in_nav_menus'   => true,
		'show_in_menu'	      => true,
		'show_in_admin_bar'   => true,
		'menu_position'	      => 20,
		'query_var'		      => true,
		'menu_icon'		      => 'dashicons-book-alt',
		'rewrite'			  => array( 'slug' => 'advice' ),
		'capability_type'     => 'post',
		'has_archive'		  => true,
		'hierarchical'	      => true,
		'supports'		      => array( 'title', 'thumbnail', 'revisions','editor', 'page-attributes' )
	);

	register_post_type( 'advice', $args );
}






add_filter( 'post_updated_messages', 'advice_updated_messages' );








function create_post_type() {
   register_post_type( 'banner_slider',
  
        array(

            'labels' => array(

             'name' => __( 'banner_slider' ),
             

             'singular_name' => __( 'banner_slider' ),
             'menu_name' =>_('Banner_Slider'),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),


         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
       
         'supports' => array('title', 'editor','thumbnail','custom-fields')
         )



       );





   // register_post_type( 'advice',
  
   //      array(

   //          'labels' => array(

   //           'name' => __( 'advice' ),
             

   //           'singular_name' => __( 'advice' ),
   //           'menu_name' =>_('Advice'),
   //           'add_new' => __( 'Add New ' ),
   //           'add_new_item' => __( 'Add New ' ),
   //           'edit_item' => __( 'Edit ' ),

   //           'new_item' => __( 'Add New Advice Page ' ),

   //           'view_item' => __( 'All Advice' ),

   //           'search_items' => __( 'Search' ),

   //           'not_found' => __( 'No home post found' ),

   //           'not_found_in_trash' => __( 'No home post in trash' )

   //         ),


   //       'public' => true,

   //       'show_ui' => true,

   //       'capability_type' => 'post',

   //       'hierarchical' => false,

   //       'rewrite' => true,
   //       'menu_position' => 20,
       
   //       'supports' => array('title', 'editor','thumbnail','custom-fields')
   //       )



   //     );




//    register_post_type( 'EMPLOYMENT LAW GUIDES
// ',
  
//         array(

//             'labels' => array(

//              'name' => __( 'EMPLOYMENT LAW GUIDES
// ' ),
             

//              'singular_name' => __( 'EMPLOYMENT LAW GUIDES
// ' ),
//              'menu_name' =>_('EMPLOYMENT LAW GUIDES
// '),
//              'add_new' => __( 'Add New ' ),
//              'add_new_item' => __( 'Add New ' ),
//              'edit_item' => __( 'Edit ' ),

//              'new_item' => __( 'Add New ' ),

//              'view_item' => __( 'View' ),

//              'search_items' => __( 'Search' ),

//              'not_found' => __( 'No home post found' ),

//              'not_found_in_trash' => __( 'No home post in trash' )

//            ),


//          'public' => true,

//          'show_ui' => true,

//          'capability_type' => 'post',

//          'hierarchical' => false,

//          'rewrite' => true,
//          'menu_position' => 20,
       
//          'supports' => array('title', 'editor','thumbnail','custom-fields')
//          )
//        );


   register_post_type( 'ASK EDDIE HOW TO
',
  
        array(

            'labels' => array(

             'name' => __( 'ASK EDDIE HOW TO
' ),
             

             'singular_name' => __( 'ASK EDDIE HOW TO

' ),
             'menu_name' =>_('ASK EDDIE HOW TO
'),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),


         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
       
  


         'supports' => array('title', 'editor','thumbnail','custom-fields')
         )
       );




      register_post_type( 'Calculators
',
  
        array(

            'labels' => array(

             'name' => __( 'Calculators
' ),
             

             'singular_name' => __( 'Calculators

' ),
             'menu_name' =>_('CALCULATORS
'),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),


         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
       
  


         'supports' => array('title', 'editor','thumbnail','custom-fields')
         )
       );


//  register_post_type( 'News
// ',
  
//         array(

//             'labels' => array(

//              'name' => __( 'News
// ' ),
             

//              'singular_name' => __( 'News

// ' ),
//              'menu_name' =>_('NEWS
// '),
//              'add_new' => __( 'Add New ' ),
//              'add_new_item' => __( 'Add New ' ),
//              'edit_item' => __( 'Edit ' ),

//              'new_item' => __( 'Add New ' ),

//              'view_item' => __( 'View' ),

//              'search_items' => __( 'Search' ),

//              'not_found' => __( 'No home post found' ),

//              'not_found_in_trash' => __( 'No home post in trash' )

//            ),


//          'public' => true,

//          'show_ui' => true,

//          'capability_type' => 'post',

//          'hierarchical' => false,

//          'rewrite' => true,
//          'menu_position' => 20,
       
  


//          'supports' => array('title', 'editor','thumbnail','custom-fields')
//          )
//        );






register_post_type( 'WHATS YOUR PROBLEM 

',
  
        array(

            'labels' => array(

             'name' => __( 'WHATS YOUR PROBLEM

' ),
             

             'singular_name' => __( 'WHATS YOUR PROBLEM

' ),
             'menu_name' =>_('WHATS YOUR PROBLEM

'),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),


         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
         'taxonomies'          => array( 'category' ),
       


         'supports' => array('title', 'editor','thumbnail','custom-fields')
         )

       );


// register_post_type( 'DOCUMENTS AND..


// ',
  
//         array(

//             'labels' => array(

//              'name' => __( 'DOCUMENTS AND..


// ' ),
             

//              'singular_name' => __( 'DOCUMENTS AND..


// ' ),
//              'menu_name' =>_('DOCUMENTS AND..


// '),
//              'add_new' => __( 'Add New ' ),
//              'add_new_item' => __( 'Add New ' ),
//              'edit_item' => __( 'Edit ' ),

//              'new_item' => __( 'Add New ' ),

//              'view_item' => __( 'View' ),

//              'search_items' => __( 'Search' ),

//              'not_found' => __( 'No home post found' ),

//              'not_found_in_trash' => __( 'No home post in trash' )

//            ),


//          'public' => true,

//          'show_ui' => true,

//          'capability_type' => 'post',

//          'hierarchical' => false,

//          'rewrite' => true,
//          'menu_position' => 20,
       
//          'supports' => array('title', 'editor','thumbnail','custom-fields')
//          )
//        );



// register_post_type( 'employment_news',
  
//         array(

//             'labels' => array(

//              'name' => __( 'employment_news' ),
             

//              'singular_name' => __( 'employment_news' ),
//              'menu_name' =>_('EMPLOYMENT UPDATES'),
//              'add_new' => __( 'Add New ' ),
//              'add_new_item' => __( 'Add New ' ),
//              'edit_item' => __( 'Edit ' ),

//              'new_item' => __( 'Add New ' ),

//              'view_item' => __( 'View' ),

//              'search_items' => __( 'Search' ),

//              'not_found' => __( 'No home post found' ),

//              'not_found_in_trash' => __( 'No home post in trash' )

//            ),


//          'public' => true,

//          'show_ui' => true,

//          'capability_type' => 'post',

//          'hierarchical' => false,

//          'rewrite' => true,
//          'menu_position' => 20,
       
//          'supports' => array('title', 'editor','thumbnail','custom-fields')
//          )
//        );


register_post_type( 'EBOOKS TODAY!




',
  
        array(

            'labels' => array(

             'name' => __( 'EBOOKS TODAY!



' ),
             

             'singular_name' => __( 'EBOOKS TODAY!



' ),
             'menu_name' =>_('EBOOKS TODAY!



'),
             'add_new' => __( 'Add New ' ),
             'add_new_item' => __( 'Add New ' ),
             'edit_item' => __( 'Edit ' ),

             'new_item' => __( 'Add New ' ),

             'view_item' => __( 'View' ),

             'search_items' => __( 'Search' ),

             'not_found' => __( 'No home post found' ),

             'not_found_in_trash' => __( 'No home post in trash' )

           ),


         'public' => true,

         'show_ui' => true,

         'capability_type' => 'post',

         'hierarchical' => false,

         'rewrite' => true,
         'menu_position' => 20,
       
         'supports' => array('title', 'editor','thumbnail','custom-fields')
         )
       );





}
add_action( 'init', 'create_post_type' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="primary" class="content-area container">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );




@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'active-m ';
    }
    return $classes;
}

// always display rating stars
function filter_woocommerce_product_get_rating_html( $rating_html, $rating, $count ) { 
    $rating_html  = '<div class="star-rating">';
    $rating_html .= wc_get_star_rating_html( $rating, $count );
    $rating_html .= '</div>';

    return $rating_html; 
};  
add_filter( 'woocommerce_product_get_rating_html', 'filter_woocommerce_product_get_rating_html', 10, 3 ); 

function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



/*Custom Validation for Contact Us Form*/

add_filter( 'wpcf7_validate_text*', 'custom_text_validation_filter', 20, 2 );

function custom_text_validation_filter( $result, $tag ) {
    if ( 'first-name' == $tag->name ) {
        
        $re = '/^[a-zA-Z]+$/';

        if (!preg_match($re, $_POST['first-name'], $matches)) {
            $result->invalidate($tag, "First name is not valid!" );
        }
    }
    if ( 'last-name' == $tag->name ) {
        
        $re = '/^[a-zA-Z]+$/';

        if (!preg_match($re, $_POST['last-name'], $matches)) {
            $result->invalidate($tag, "Last name is not valid!" );
        }
    }
    if ( 'subject' == $tag->name ) {
       
        $re = '/^[a-zA-Z0-9]+$/';

        if (!preg_match($re, $_POST['subject'], $matches)) {
            $result->invalidate($tag, "Invalid Subject!" );
        }
    }


    return $result;
}







/*Adding tags to Pages */
add_filter( 'gform_review_page', 'wpmonks_add_review_page', 10, 3 );
// add tag support to pages
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

/*Adding tags code ends*/



// function add_your_fields_meta_box() {
//     	add_meta_box(
//     		'your_fields_meta_box', // $id
//     		'Your Fields', // $title
//     		'show_your_fields_meta_box', // $callback
//     		'advice', // $screen
//     		'normal', // $context
//     		'high' // $priority
//     	);
//     }
//     add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );





function advice_updated_messages( $messages ) {
	$post			  = get_post();
	$post_type		  = get_post_type( $post );
	$post_type_object = get_post_type_object( $post_type );

	$messages['advice'] = array(
		0  => '', // Unused
		1  => __( 'Advice updated.' ),
		2  => __( 'Custom field updated.' ),
		3  => __( 'Custom field deleted.' ),
		4  => __( 'Advice updated.' ),
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Advice page restored to revision from %s' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6  => __( 'Advice page published.' ),
		7  => __( 'Advice page saved.' ),
		8  => __( 'Advice submitted.' ),
		9  => sprintf(
			__( 'Advice page scheduled for: <strong>%1$s</strong>.' ),
			date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) )
		),
		10 => __( 'Advice page draft updated.' )
	);

	if ( $post_type_object->publicly_queryable ) {
		$permalink = get_permalink( $post->ID );

		$view_link = sprintf( ' <a href="%s">%s</a>', esc_url( $permalink ), __( 'View advice page' ) );
		$messages['advice'][1] .= $view_link;
		$messages['advice'][6] .= $view_link;
		$messages['advice'][9] .= $view_link;

		$preview_permalink = add_query_arg( 'preview', 'true', $permalink );
		$preview_link = sprintf( ' <a target="_blank" href="%s">%s</a>', esc_url( $preview_permalink ), __( 'Preview advice page' ) );
		$messages['advice'][8]  .= $preview_link;
		$messages['advice'][10] .= $preview_link;
	}

	return $messages;
}





function call_advice_related_pages() {
	new advice_related_pages();
}

// Get pages attached to some post
// @param int $post_id
// @return array
function advice_related_pages_get_pages($post_id=null) {
	global $post;
	if ($post_id == null) {
		$post_id = $post->ID;
	}

	$value = get_post_meta($post_id, 'advice_related_pages', true);
	$pages = unserialize($value);
	
	$result = array();
	if (!empty($pages)) {
		foreach ($pages as $page) {
			$result[] = $page;
		}
	}
	
	return $result;
}

if (is_admin()) {
	add_action('load-post.php', 'call_advice_related_pages');
	add_action('load-post-new.php', 'call_advice_related_pages');
}



// advice_related_pages
class advice_related_pages {

	var $post_types = array('advice');

	// Initialize advice_related_pages
	public function __construct() {
		$this->post_types = array('advice');
		add_action('add_meta_boxes', array($this, 'add_meta_box'));
		add_action('save_post', array($this, 'save'));
		add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
	}

	// Adds the meta box container
	public function add_meta_box($post_types) {

		if (in_array($post_types, $this->post_types)) {
			add_meta_box(
					'advice_related_pages_meta_box'
					, __('Advice Related Pages', 'advice_related_pages_textdomain')
					, array($this, 'advice_related_pages_meta_box_content')
					, $post_types
					, 'normal'
					, 'high'
			);
		}
	}

	// Save the images when the post is saved.
	// @param int $post_id The ID of the post being saved.
	public function save($post_id) {
		// Security checks

		// Check if our nonce is set.
		if (!isset($_POST['advice_related_pages_inner_custom_box_nonce'])) {
			return $post_id;
		}

		$nonce = $_POST['advice_related_pages_inner_custom_box_nonce'];

		// Verify that the nonce is valid.
		if (!wp_verify_nonce($nonce, 'advice_related_pages_inner_custom_box')) {
			return $post_id;
		}

		// If this is an autosave, our form has not been submitted,
		// so we don't want to do anything.
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return $post_id;
		}

		// Check the user's permissions.
		if ('page' == $_POST['post_type']) {
			if (!current_user_can('edit_page', $post_id)) {
				return $post_id;
			}
		} else {
			if (!current_user_can('edit_post', $post_id)) {
				return $post_id;
			}
		}

		// OK, its safe for us to save the data now

		// Validate user input
		$posted_related_pages = $_POST['advice_related_pages'];
		
		$advice_related_pages = array();
		if (!empty($posted_related_pages)) {
			foreach ($posted_related_pages as $page_url) {
				if (!empty($page_url)) {
					$advice_related_pages[] = esc_html($page_url);
				}
			}
		}

		// Update the advice_related_pages meta field
		update_post_meta($post_id, 'advice_related_pages', serialize($advice_related_pages));
	}

	// Render Meta Box content
	// @param WP_Post $post The post object
	public function advice_related_pages_meta_box_content($post) {

		// Add an nonce field so we can check for it later.
		wp_nonce_field('advice_related_pages_inner_custom_box', 'advice_related_pages_inner_custom_box_nonce');

		// Use get_post_meta to retrieve an existing value from the database.
		$value = get_post_meta($post->ID, 'advice_related_pages', true);

		$pages = unserialize($value);
		
		$dropdown_args = array(
			'post_type'        => 'advice',
			'name'             => 'select-advice-related-page',
			'sort_column'      => 'menu_order, post_title',
			'echo'             => 0,
		);
		
		$related = '';
		
		$i = 0;
		
		if(!empty($pages)) {
		
			$args = array(
						'posts_per_page' => '-1',
						'post_type'      => 'advice',
						'post__in'       => $pages,
						'orderby'		 => 'name',
						'order'			 => 'ASC'
					);
			$the_query = new WP_Query($args);
			

			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$related .= '<li id="row-'.$i.'"><span>'.get_the_title().'</span>';
					$related .= '<input class="advice-related-page-remove button" type="button" value="Remove" id="remove-'.$i.'" />';
					$related .= '<input type="hidden" name="advice_related_pages['.$i.']" value="'.get_the_ID().'" id="remove-'.$i.'" /></li>';
					$i++;
				}
			}
			
			wp_reset_query();
		
		}

		$metabox_content = '<div id="advice_related_pages">
		
		<p>'.wp_dropdown_pages($dropdown_args).' <input type="button" data-post-id="" data-post-title="" value="Add this page to related pages" class="advice-related-page-add button" /></p>
		
		<p><strong></strong></p>
		
		<ul class="advice-related-pages" id="advice_related_pages_list">'.$related.'</ul>
		
		</div>';
		
		$script = '<script>itemsCount = '.$i.';</script>';
		
		echo $script;
		
		echo $metabox_content;
		
	}

	function enqueue_scripts($hook) {
		if ('post.php' != $hook && 'post-edit.php' != $hook && 'post-new.php' != $hook) {
			return;
		}
		
		wp_register_script('admin-advice-related-pages-script', get_stylesheet_directory_uri().'/js/meta-box.js');
		wp_enqueue_script('admin-advice-related-pages-script');
		
		wp_register_style('admin-css', get_stylesheet_directory_uri().'/assets/css/style.css');
		wp_enqueue_style('admin-css');
	}

}
/* /Advice related pages */

/* Advice related products */

// Calls the class on the post add/edit screens
function call_advice_related_products() {
	new advice_related_products();
}

// Get products attached to some post
// @param int $post_id
// @return array
function advice_related_products_get_products($post_id=null) {
	global $post;
	if ($post_id == null) {
		$post_id = $post->ID;
	}

	$value = get_post_meta($post_id, 'advice_related_products', true);
	$products = unserialize($value);
	
	$result = array();
	if (!empty($products)) {
		foreach ($products as $product) {
			$result[] = $product;
		}
	}
	
	return $result;
}

if (is_admin()) {
	add_action('load-post.php', 'call_advice_related_products');
	add_action('load-post-new.php', 'call_advice_related_products');
}

// advice_related_products
class advice_related_products {

	var $post_types = array('advice');

	// Initialize advice_related_products
	public function __construct() {
		$this->post_types = array('advice');
		add_action('add_meta_boxes', array($this, 'add_meta_box'));
		add_action('save_post', array($this, 'save'));
	}

	// Adds the meta box container
	public function add_meta_box($post_types) {

		if (in_array($post_types, $this->post_types)) {
			add_meta_box(
					'advice_related_products_meta_box'
					, __('Employment Law Guides', 'advice_related_products_textdomain')
					, array($this, 'advice_related_products_meta_box_content')
					, $post_types
					, 'normal'
					, 'high'
			);
		}
	}

	// Save the images when the post is saved.
	// @param int $post_id The ID of the post being saved.
	public function save($post_id) {
		// Security checks

		// Check if our nonce is set.
		if (!isset($_POST['advice_related_products_inner_custom_box_nonce'])) {
			return $post_id;
		}

		$nonce = $_POST['advice_related_products_inner_custom_box_nonce'];

		// Verify that the nonce is valid.
		if (!wp_verify_nonce($nonce, 'advice_related_products_inner_custom_box')) {
			return $post_id;
		}

		// If this is an autosave, our form has not been submitted,
		// so we don't want to do anything.
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return $post_id;
		}

		// Check the user's permissions.
		if ('page' == $_POST['post_type']) {
			if (!current_user_can('edit_page', $post_id)) {
				return $post_id;
			}
		} else {
			if (!current_user_can('edit_post', $post_id)) {
				return $post_id;
			}
		}

		// OK, its safe for us to save the data now

		// Validate user input
		$posted_related_products = $_POST['advice_related_products'];
		
		$advice_related_products = array();
		if (!empty($posted_related_products)) {
			foreach ($posted_related_products as $product_url) {
				if (!empty($product_url)) {
					$advice_related_products[] = esc_html($product_url);
				}
			}
		}

		// Update the advice_related_products meta field
		update_post_meta($post_id, 'advice_related_products', serialize($advice_related_products));
	}

	// Render Meta Box content
	// @param WP_Post $post The post object
	public function advice_related_products_meta_box_content($post) {

		// Add an nonce field so we can check for it later.
		wp_nonce_field('advice_related_products_inner_custom_box', 'advice_related_products_inner_custom_box_nonce');

		// Use get_post_meta to retrieve an existing value from the database.
		$value = get_post_meta($post->ID, 'advice_related_products', true);

		$products = unserialize($value);
		
		$related_products_select = '';
		
		$args = array(
					'posts_per_page' => '-1',
					'post_type'      => 'product',
					'orderby'		 => 'name',
					'order'			 => 'ASC'
				);
		$the_query = new WP_Query($args);
		
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$related_products_select .= '<option class="level-0" value="'.get_the_ID().'">'.get_the_title().'</option>';
			}
		}
		
		wp_reset_query();
		
		$related_products = '';
		
		$i = 0;
		
		if(!empty($products)) {
		
			$args = array(
						'posts_per_page' => '-1',
						'post_type'      => 'product',
						'post__in'       => $products,
						'orderby'		 => 'name',
						'order'			 => 'ASC'
					);
			$the_query = new WP_Query($args);
			
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$related_products .= '<li id="product-row-'.$i.'"><span>'.get_the_title().'</span>';
					$related_products .= '<input class="advice-related-product-remove button" type="button" value="Remove" id="product-remove-'.$i.'" />';
					$related_products .= '<input type="hidden" name="advice_related_products['.$i.']" value="'.get_the_ID().'" id="product-remove-'.$i.'" /></li>';
					$i++;
				}
			}
			
			wp_reset_query();
		
		}

		$metabox_content = '<div id="advice_related_products">
		
		<p><select name="select-advice-related-product" id="select-advice-related-product">'.$related_products_select.'</select> <input type="button" data-post-id="" data-post-title="" value="Add this product to related products" class="advice-related-product-add button" /></p>
		
		<p><strong></strong></p>
		
		<ul class="advice-related-products" id="advice_related_products_list">'.$related_products.'</ul>
		
		</div>';
		
		$script = '<script>itemsProductCount = '.$i.';</script>';
		
		echo $script;
		
		echo $metabox_content;
		
	}

	function enqueue_related_products_scripts($hook) {
		if ('post.php' != $hook && 'post-edit.php' != $hook && 'post-new.php' != $hook) {
			return;
		}
		
		wp_register_script('admin-advice-related-products-script', get_stylesheet_directory_uri().'/js/meta-box.js');
		wp_enqueue_script('admin-advice-related-products-script');
		
		wp_register_style('admin-css', get_stylesheet_directory_uri().'/assets/css/style.css');
		wp_enqueue_style('admin-css');
	}

}
/* /Advice related products */

// add_shortcode('sitemap', 'wp_sitemap_page');

//  function wp_sitemap_page(){

//     return "<ul>".wp_list_pages('title_li=&echo=0')."</ul>";

// }

//woocommerce

// Override theme default specification for product # per row
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 32;' ), 20 );
// Change number or products per row to 2
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
function loop_columns() {
return 3; // 2 products per row
}
} 











// *****************************************************************************


// Documents and templates


	
// Calls the class on the post add/edit screens
function call_document_and_template_product() {
	new document_and_template_product();
}			  
// Get products attached to some post
// @param int $post_id
// @return array
function document_and_template_product_get_products($post_id=null) {
	global $post;
	if ($post_id == null) {
		$post_id = $post->ID;
	}

	$value = get_post_meta($post_id, 'document_and_template_product', true);
	$products = unserialize($value);
	
	$result = array();
	if (!empty($products)) {
		foreach ($products as $product) {
			$result[] = $product;
		}
	}
	
	return $result;
}

if (is_admin()) {
	add_action('load-post.php', 'call_document_and_template_product');
	add_action('load-post-new.php', 'call_document_and_template_product');
}
			   	
			
class document_and_template_product{

	var $post_types = array('advice');

	// Initialize document_and_tmplate_product
	public function __construct() {
		$this->post_types = array('advice');
		add_action('add_meta_boxes', array($this, 'add_dat_meta_box'));
		add_action('save_post', array($this, 'save_dat'));
	}

	// Adds the meta box container
	public function add_dat_meta_box($post_types) {

		if (in_array($post_types, $this->post_types)) {
			add_meta_box(
					'document_and_template_product_meta_box'
					, __('Document and Template', 'document_and_template_product_textdomain')
					, array($this, 'document_and_template_product_meta_box_content')
					, $post_types
					, 'normal'
								);
		}
	}

	// Save the images when the post is saved.
	// @param int $post_id The ID of the post being saved.
	public function save_dat($post_id) {
		// Security checks

		// Check if our nonce is set.
		if (!isset($_POST['document_and_template_product_inner_custom_box_nonce'])) {
			return $post_id;
		}

		$nonce = $_POST['document_and_template_product_inner_custom_box_nonce'];

		// Verify that the nonce is valid.
		if (!wp_verify_nonce($nonce, 'document_and_template_product_inner_custom_box')) {
			return $post_id;
		}

		// If this is an autosave, our form has not been submitted,
		// so we don't want to do anything.
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return $post_id;
		}

		// Check the user's permissions.
		if ('page' == $_POST['post_type']) {
			if (!current_user_can('edit_page', $post_id)) {
				return $post_id;
			}
		} else {
			if (!current_user_can('edit_post', $post_id)) {
				return $post_id;
			}
		}

		// OK, its safe for us to save the data now

		// Validate user input
		$posted_related_products = $_POST['document_and_template_product'];
		
		$document_and_template_product = array();
		if (!empty($posted_related_products)) {
			foreach ($posted_related_products as $product_url) {
				if (!empty($product_url)) {
					$document_and_template_product[] = esc_html($product_url);
				}
			}
		}

		// Update the document_and_template_product meta field
		update_post_meta($post_id, 'document_and_template_product', serialize($document_and_template_product));
	}

	// Render Meta Box content
	// @param WP_Post $post The post object
	public function document_and_template_product_meta_box_content($post) {

		// Add an nonce field so we can check for it later.
		wp_nonce_field('document_and_template_product_inner_custom_box', 'document_and_template_product_inner_custom_box_nonce');

		// Use get_post_meta to retrieve an existing value from the database.
		$value = get_post_meta($post->ID, 'document_and_template_product', true);

		$products = unserialize($value);
		
		$related_products_select = '';
		
		$args = array(
					'posts_per_page' => '-1',
					'post_type'      => 'product',
					'orderby'		 => 'name',
					'order'			 => 'ASC'
				);
		$the_query = new WP_Query($args);
		
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$related_products_select .= '<option class="level-0" value="'.get_the_ID().'">'.get_the_title().'</option>';
			}
		}
		
		wp_reset_query();
		
		$related_products = '';
		
		$i = 0;
		
		if(!empty($products)) {
		
			$args = array(
						'posts_per_page' => '-1',
						'post_type'      => 'product',
						'post__in'       => $products,
						'orderby'		 => 'name',
						'order'			 => 'ASC'
					);
			$the_query = new WP_Query($args);
			
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$related_products .= '<li id="product-rows-'.$i.'"><span>'.get_the_title().'</span>';
					$related_products .= '<input class="advice-related-product-removes button" type="button" value="Remove" id="product-remove-'.$i.'" />';
					$related_products .= '<input type="hidden" name="document_and_template_product['.$i.']" value="'.get_the_ID().'" id="product-remove-'.$i.'" /></li>';
					$i++;
				}
			}
			
			wp_reset_query();
		
		}

		$metabox_content = '<div id="document_and_template_product">
		
		<p><select name="select-advice-related-products" id="select-advice-related-products">'.$related_products_select.'</select> <input type="button" data-post-ids="" data-post-titles="" value="Add this product to related products" class="advice-related-product-adds button" /></p>
		
		<p><strong></strong></p>
		
		<ul class="advice-related-product" id="document_and_template_product_list">'.$related_products.'</ul>
		
		</div>';
		
		$script = '<script>itemsProductCount = '.$i.';</script>';
		
		echo $script;
		
		echo $metabox_content;
		
	}



	 function enqueue_related_products_scripts($hook) {
	 	if ('post.php' != $hook && 'post-edit.php' != $hook && 'post-new.php' != $hook) {
	 		return;
		}
		
		wp_register_script('admin-advice-related-products-script', get_stylesheet_directory_uri().'/js/meta-box.js');
		wp_enqueue_script('admin-advice-related-products-script');
		
		wp_register_style('admin-css', get_stylesheet_directory_uri().'/assets/css/style.css');
		wp_enqueue_style('admin-css');
	}

}



/* /Advice related pages */
