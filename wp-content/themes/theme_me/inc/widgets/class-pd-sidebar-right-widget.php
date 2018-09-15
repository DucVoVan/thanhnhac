<?php
	/**
	 * Widget class
	 */
class PD_SideBar_Right_Widget extends PD_Widget {
	/**
	 * This is construct function.
	 */
	public function __construct() {
		$this->widget_cssclass    = 'header-mid-child-right ';
		$this->widget_name        = esc_html__( 'VD: Bài viết mới nhất trên trang', 'dv' );
		$this->widget_id          = 'pd-news2';
		$this->widget_description = esc_html__( 'Hiển thị phần phía trên của trang.', 'dv' );
		$this->settings           = array(
			'text'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Bài viết mới nhất',
			),
			'number' => array(
				'type'  => 'number',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Số bài viết mới nhất muốn hiển thị: ',
				'std'   => 2,
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
			'number' => 2,
			'text'   => 'Bài viết mới nhất',
		);
		$instance = wp_parse_args( $instance, $default );
		$this->widget_start( $args, $instance );
		?>
			<h3 class="title-news"><?php echo $instance['text']; ?></h3>
		<?php
			$vd_new_post_args  = array(
				'posts_per_page' => $instance['number'],
			);
		$vd_new_post_query = new WP_Query( $vd_new_post_args );
		if($vd_new_post_query->have_posts()): while($vd_new_post_query->have_posts()): $vd_new_post_query->the_post();
		?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php
		endwhile;
		endif;
		$this->widget_end( $args );
	}
}
