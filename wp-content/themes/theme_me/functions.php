<?php
function remove_core_updates (){ global $wp_version ; return ( object ) array ( ‘last_checked’ => time (), ‘version_checked’ => $wp_version ,); } add_filter ( ‘pre_site_transient_update_core’ , ‘remove_core_updates’ ); add_filter ( ‘pre_site_transient_update_plugins’ , ‘remove_core_updates’ ); add_filter ( ‘pre_site_transient_update_themes’ , ‘remove_core_updates’ );
if ( ! function_exists( 'vd_theme_setup' ) ) {
/**
 * [trch_theme_setup description]
 */
function vd_theme_setup() {

		load_theme_textdomain( 'dv', apply_filters( 'dv_theme_textdomain', get_theme_file_path( '/languages' ), 'dv' ) );

		register_nav_menus( array(
			'footer_menu'  => 'My Custom Footer Menu',
			'primary-menu' => 'Primary Menu',
			'mobile-menu-sub'  => 'Mobile Menu',
		) );

		add_theme_support( 'custom-logo' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'post-formats', array(
			'image',
			'video',
			'gallery',
			'quote',
			'link',
		) );
	}
}
add_action( 'after_setup_theme', 'vd_theme_setup' );

if ( ! function_exists( 'vd_menu' ) ) {
	/**
	 * [pd_menu description]
	 *
	 * @param  string $menu [description].
	 * @return void       [description].
	 */

	function vd_menu( $menu ) {
		$menu = array(
			'theme_location'  => $menu,
			'container'       => 'div',
			'container_class' => $menu,
			'container_id'    => $menu,
		);
		wp_nav_menu( $menu );
	}
}

function v_d_style(){
	// load js library
	// wp_enqueue_script('modal-video-js', get_theme_file_uri('assets/js/modal-video.js'), array( 'jquery' ), false, true );
 //    wp_enqueue_script('jquery-modal-video-js', get_theme_file_uri('assets/js/jquery-modal-video.js'), array( 'jquery' ), false, true );
 //    wp_enqueue_script('jquery-tinyscrollbar-js', get_theme_file_uri('assets/js/jquery.tinyscrollbar.js'), array( 'jquery' ), false, true );
 //    wp_enqueue_script('jquery-tinyscrollbar-custom-js', get_theme_file_uri('assets/js/jquery.tinyscrollbar.custom.js'), array( 'jquery' ), false, true );
	wp_enqueue_script('main-js', get_theme_file_uri('assets/js/custom/main.js'), array( 'jquery' ), false, true);


	// load css library
	wp_enqueue_style('bootstrap-css', get_theme_file_uri( 'assets/css/bootstrap.min.css' ), array(), '4.0');
	// wp_enqueue_style('modal-video',get_theme_file_uri('assets/css/modal-video.min.css'), array(),'1.0.0');
	wp_enqueue_style('icon', get_theme_file_uri( 'assets/css/fontawesome-all.min.css' ), array(), '4.0');
	wp_enqueue_style( 'font-google', vd_fonts_url(), array(), '1.0.0' );
	wp_enqueue_style('custom-css', get_theme_file_uri( 'assets/css/style-custom.css' ), array(), '1.0.0');

}
add_action('wp_enqueue_scripts', 'v_d_style');

/**
 * Register custom fonts.
 */
function vd_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'twentyseventeen' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Nunito:300,400,400i,600,700&amp;subset=vietnamese|Roboto+Slab:300,400,700&amp;subset=vietnamese';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

function pd_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar trang', 'dv' ),
		'id'            => 'sidebar-right',
		'description'   => esc_html__( 'Thêm tiện ích vào đây để hiển thị cột bên cạnh nội dung.', 'pd-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Bài viết liên quan dưới mỗi bài viết', 'dv' ),
		'id'            => 'single-below',
		'description'   => esc_html__( 'Thêm tiện ích vào đây để hiển thị cột bên cạnh nội dung.', 'pd-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Khu vực bài viết ở trang chủ', 'dv' ),
		'id'            => 'content',
		'description'   => esc_html__( 'Thêm tiện ích vào đây để hiển thị cột bên cạnh nội dung.', 'pd-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Khu vực sidebar ở phần archive và single video', 'dv' ),
		'id'            => 'sidebar-video',
		'description'   => esc_html__( 'Thêm tiện ích vào đây để hiển thị cột bên cạnh nội dung.', 'pd-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebars( 4, array(
            'name'          => esc_html__( 'Chân trang - phần %d', 'ducvo' ),
            'id'            => 'footer',
            'description'   => esc_html__( 'Thêm tiện ích vào đây để hiển thị nội dung chân trang.', 'pd-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
		'name'          => esc_html__( 'Khu vực link youtube,facebook,email nằm ở phần header', 'dv' ),
		'id'            => 'header-link',
		'description'   => esc_html__( 'Thêm tiện ích vào đây để hiển thị cột bên cạnh nội dung.', 'pd-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Khu vực hiển thị nằm phía dưới cùng chân trang', 'dv' ),
		'id'            => 'footer-end',
		'description'   => esc_html__( 'Thêm tiện ích vào đây để hiển thị cột bên cạnh nội dung.', 'pd-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'pd_widgets_init' );

require_once get_theme_file_path( 'inc/abstract-class-pd-widget.php' );
require_once get_theme_file_path( 'inc/class-pd-autoloader.php' );
require_once get_theme_file_path( 'inc/pd-widget-function.php' );
require_once get_theme_file_path( 'inc/customizer.php' );


function excerpt_short($string){
	echo substr($string, 0, 100).'...';
}

/**
 * [facebook description]
 *
 * @return void [description],
 */
function facebook() { ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=1499909570134607&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php
}
add_filter( 'wp_footer', 'facebook' );


/**
 * 2 function ngay phía dưới là hàm dùng để tạo các liên kết trong bài viết, các back-link.
 * Plugin Related Posts By Taxonomy được cài vào dùng để lấy shortcode của nó và dán vào trong function prefix_insert_post_ads()
 * @param  [type] $insertion    [description]
 * @param  [type] $paragraph_id [description]
 * @param  [type] $content      [description]
 * @return [type]               [description]
 */
function count_paragraph( $insertion, $paragraph_id, $content ) {
    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );
    foreach ($paragraphs as $index => $paragraph) {
            if ( trim( $paragraph ) ) {
                    $paragraphs[$index] .= $closing_p;
            }
            if ( $paragraph_id == $index + 1 ) {
                    $paragraphs[$index] .= $insertion;
            }
    }

    return implode( '', $paragraphs );
}

add_filter( 'the_content', 'prefix_insert_post_ads' );
 
function prefix_insert_post_ads( $content ) {
 
    $related_posts = do_shortcode('[related_posts_by_tax posts_per_page="10"]');

    if ( is_single() ) {
            return count_paragraph( $related_posts, 1, $content );
    }

    return $content;
}

/**
 * Hàm phân trang.
 * @return [type] [description]
 */
function vd_posts_pagination() {
	the_posts_pagination( array(
		'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i><span class="screen-reader-text">' . esc_html__( 'Trang trước', 'pd-theme' ) . '</span>',
		'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Trang sau', 'pd-theme' ) . '</span><i class="fa fa-angle-right" aria-hidden="true"></i>',
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Trang', 'pd-theme' ) . '</span>',
	) );
}

/**
 * Tạo custom post type video
 */
function tao_custom_post_type()
{
 
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Video', //Tên post type dạng số nhiều
        'singular_name' => 'Video_me' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type đăng video', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ), //Các tính năng được hỗ trợ trong post type
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('video', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
 
}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'tao_custom_post_type');
