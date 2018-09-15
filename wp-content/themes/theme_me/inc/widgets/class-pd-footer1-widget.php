<?php
	/**
	 * Widget class
	 */
class PD_Footer1_Widget extends PD_Widget {
	/**
	 * This is construct function.
	 */
	public function __construct() {
		$this->widget_cssclass    = '';
		$this->widget_name        = esc_html__( 'VD: Khu vực chân trang 1', 'dv' );
		$this->widget_id          = 'pd-news5';
		$this->widget_description = esc_html__( 'Hiển thị phần chân trang.', 'dv' );
		$this->settings           = array(
			'text1'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Giới thiệu về tôi',
			),
			'text2'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Đức Võ Văn',
			),
			'text3'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Đây là blog của mình, mình yêu ca hát và lập trình, mình tạo ra blog này để chia sẻ những vấn đề trong cuộc sống của mình với bạn!',
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
			'text1'   => 'Giới thiệu về tôi',
			'text2'   => 'Đức Võ Văn',
			'text3'   => 'Đây là blog của mình, mình yêu ca hát và lập trình, mình tạo ra blog này để chia sẻ những vấn đề trong cuộc sống của mình với bạn!',
		);
		$instance = wp_parse_args( $instance, $default );
		$this->widget_start( $args, $instance );
		?>
			<h1><?php echo $instance['text1']; ?></h1>
			<div class="info">
				<img src="<?php echo get_theme_file_uri('/assets/images/me.jpg'); ?>" alt="">
				<h3><?php echo $instance['text2']; ?></h3>
				<div><?php echo $instance['text3']; ?></div>
			</div>
		<?php
		$this->widget_end( $args );
	}
}