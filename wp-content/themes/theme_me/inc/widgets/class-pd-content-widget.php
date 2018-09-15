<?php
	/**
	 * Widget class
	 */
class PD_Content_Widget extends PD_Widget {
	/**
	 * This is construct function.
	 */
	public function __construct() {
		$this->widget_cssclass    = 'content';
		$this->widget_name        = esc_html__( 'VD: Khu vực hiển thị bài viết', 'dv' );
		$this->widget_id          = 'pd-news12';
		$this->widget_description = esc_html__( 'Hiển thị phần giữa trang.', 'dv' );
		$this->settings           = array(
			'text'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Bài viết theo chuyên mục',
			),
			'number' => array(
				'type'  => 'number',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Số bài viết mới nhất muốn hiển thị: ',
				'std'   => 4,
			),
			'cat' => array(
				'type'  => 'number',
				'desc'  => '3 - là chuyên mục ca nhạc. 4-là chuyên mục giải trí',
				'label' => 'Chuyên mục muốn hiển thị: ',
				'std'   => 4,
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
			'number' => 4,
			'text'   => 'Bài viết theo chuyên mục',
			'cat'    => 4,
		);
		$instance = wp_parse_args( $instance, $default );
		$this->widget_start( $args, $instance );
		?>
			<h3 class="title-news"><?php echo $instance['text']; ?></h3>
			
		<?php
			$vd_new_post_args  = array(
				'posts_per_page' => $instance['number'],
				'cat'            => $instance['cat'],
			);
		$vd_new_post_query = new WP_Query( $vd_new_post_args );
		if($vd_new_post_query->have_posts()):
			while($vd_new_post_query->have_posts()): $vd_new_post_query->the_post();
				$link = get_the_permalink();
		?>
			<div class="article">
				<div class="container">
					<div class="row">
						<div class="article-image col-xl-4">
							<a href="<?php echo $link; ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<div class="article-info col-xl-8">
							<h2 class="article-title" title="<?php the_title(); ?>"><a href="<?php echo $link; ?>"><?php the_title(); ?></a></h2>	
							<div class="article-meta">
								<i class="far fa-calendar-alt"></i> <span><?php echo get_the_date(); ?></span> <i class="far fa-clock"></i> <span><?php echo get_the_time(); ?></span>
							</div>
							<div class="article-description">
								<?php excerpt_short(get_the_excerpt()); ?>
							</div>
							<a class="next" href="<?php echo $link; ?>">Đọc tiếp <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		<?php
		endwhile;
		wp_reset_postdata();
		endif;
		$this->widget_end( $args );
	}
}