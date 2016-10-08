<?php
// add image sizes
add_image_size ( game, 300, 200, true );
add_image_size ( event_main, 300, 400, true );
add_image_size ( event_archive, 300, 300, true );
add_image_size ( news, 450, 300, true );
add_image_size ( slide, 1920, 920, true );

/* Patch for WP Admin rendering bug in Chrome 45+ */
function admin_menu_chrome_patch(){
	echo '<style>#adminmenu { transform: translateZ(0); }</style>';
}
add_action('admin_head', 'admin_menu_chrome_patch');
/* end */

/* hide adminbar if u not admin */
function my_function_admin_bar($content) {
	return ( current_user_can("administrator") ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
/* end */

/* Optional */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Управление сайтом',
		'menu_title'	=> 'Управление',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts'
	));
}
/* end */

/* add title */
add_theme_support( 'title-tag' );
/* end */

/* remove attachment rel */
function my_remove_rel_attr($content) {
    return preg_replace('/\s+rel="attachment wp-att-[0-9]+"/i', '', $content);
}
add_filter('the_content', 'my_remove_rel_attr');
/* end */

/* register menus */
register_nav_menus( array(
	'main-menu' => __( 'Главное меню' ),
	'side-menu' => __( 'Боковое меню' ),
) );
/* end */

/* Switch default core markup for search form, comment form, and comments to output valid HTML5. */
add_theme_support( 'html5', array(
	// 'search-form',
	// 'comment-form',
	// 'comment-list',
	// 'gallery',
	// 'caption',
) );
/* end */

/* add post formats */
add_theme_support( 'post-formats', array(
	// 'aside',
	// 'image',
	// 'video',
	// 'quote',
	// 'link',
) );
/* end */

/* init widgets */
function prosites_widgets_init() {
	register_sidebar(
		array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'prosites_widgets_init' );
/* end */

/* short story ... */
function new_excerpt_more( $more ) {return '...';}
add_filter('excerpt_more', 'new_excerpt_more');
/* end */

/* Webber logotype (enter admin page) */
function login_logo_prosites(){
	echo '<style type="text/css">h1 a{outline: none !important;box-shadow: none !important;background-image:url('.get_bloginfo('template_directory').'/img/logo-webber.svg) !important;background-size: 150px 155px !important;width:150px !important;height:155px !important;}.wp-core-ui .button-primary{border:0;border-radius:0;}</style>';};
add_action('login_head', 'login_logo_prosites');
function my_custom_login_url(){return 'http://webber.by';}
add_filter( 'login_headerurl', 'my_custom_login_url', 10, 4 );
function login_header_title(){return 'Разработка и продвижение сайтов';}
add_filter('login_headertitle','login_header_title');
/* end */

/* pagination */
function proPagination($pages = '', $range = 2){
	$showitems = ($range * 2)+1;
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){$pages = 1;}
	};
	if(1 != $pages){
		echo "<ul class='pagination'>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
		if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";

		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? "<li class='active'><a class='btn-danger' href='#'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
			};
		};
		if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";
		if ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
		echo "</ul>";
	};
};
/* end */