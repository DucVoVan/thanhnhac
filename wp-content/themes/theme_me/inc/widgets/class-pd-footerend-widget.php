<?php
	/**
	 * Widget class
	 */
class PD_Footerend_Widget extends PD_Widget {
	/**
	 * This is construct function.
	 */
	public function __construct() {
		$this->widget_cssclass    = '';
		$this->widget_name        = esc_html__( 'VD: Khu vực cuối cùng chân trang', 'dv' );
		$this->widget_id          = 'pd-news20';
		$this->widget_description = esc_html__( 'Hiển thị phần chân trang.', 'dv' );
		$this->settings           = array(
			'text1'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Giới thiệu về tôi',
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
			
		);
		$instance = wp_parse_args( $instance, $default );
		$this->widget_start( $args, $instance );
		?>
			<div class="footer-page">
				<?php echo $instance['text1']; ?>
			</div>
		<?php
		$this->widget_end( $args );
	}
}