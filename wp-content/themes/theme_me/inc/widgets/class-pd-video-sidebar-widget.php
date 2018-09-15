<?php
	/**
	 * Widget class
	 */
class PD_Video_Sidebar_Widget extends PD_Widget {
	/**
	 * This is construct function.
	 */
	public function __construct() {
		$this->widget_cssclass    = 'content_video';
		$this->widget_name        = esc_html__( 'VD: Khu vực hiển thị video trang chủ', 'dv' );
		$this->widget_id          = 'pd-news4';
		$this->widget_description = esc_html__( 'Hiển thị phần sidebar trang.', 'dv' );
		$this->settings           = array(
			'text'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Video giới thiệu',
			),
			'number' => array(
				'type'  => 'number',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Số video mới nhất muốn hiển thị: ',
				'std'   => 1,
			),
		);
		parent::__construct();
	}
	/**
	 * [widget description]
	 *
	 * @param  string $args     sadasdada.
	 * @param  array  $instance dasdada.
	 * @return void             sadsadas.
	 */
	public function widget( $args, $instance ) {
		$default  = array(
			'number' => 1,
			'text'   => 'Bài viết theo chuyên mục',
		);
		$instance = wp_parse_args( $instance, $default );
		$this->widget_start( $args, $instance );
		?>
			<h3 class="title-news"><?php echo $instance['text']; ?></h3>
			
		<?php
			$args_sidebar_video  = array(
				'posts_per_page' => $instance['number'],
				'post_type' => array('video'),
			);
		$query_sidebar_video = new WP_Query( $args_sidebar_video  );
		if($query_sidebar_video->have_posts()):
			while($query_sidebar_video->have_posts()): $query_sidebar_video->the_post();
				$value = get_field( "url_video" ); // tham số url_video là trường name trong field acf
		?>
			<div class="video-me">
				<div class="video1_show js-modal-btn " data-video-id="<?php echo substr($value, 32); ?>">
					<img  class="video1-a" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="intro" title="<?php the_title(); ?>">
					<img class="text-2" src="<?php echo get_theme_file_uri('assets/images/l-4.png'); ?>" alt="" title="<?php the_title(); ?>">
				</div>

				<div class="meta-video">
					<div class="title-video"><?php the_title(); ?></div>
					<a class="seemore_show" href="<?php the_permalink(); ?>">Xem Chi tiết »</a>
				</div>
			</div>
		<?php
		endwhile;
		wp_reset_postdata();
		endif;
		$this->widget_end( $args );
	}
}