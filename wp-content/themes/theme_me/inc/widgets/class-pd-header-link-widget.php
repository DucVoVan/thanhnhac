<?php
	/**
	 * Widget class
	 */
class PD_Header_Link_Widget extends PD_Widget {
	/**
	 * This is construct function.
	 */
	public function __construct() {
		$this->widget_cssclass    = '';
		$this->widget_name        = esc_html__( 'VD: Khu vực link fb,yt,gm ', 'dv' );
		$this->widget_id          = 'pd-news9';
		$this->widget_description = esc_html__( 'Hiển thị phần chân trang.', 'dv' );
		$this->settings           = array(
			'fb'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Link facebook: ',
				'std'   => '',
			),
			'yt'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Link Youtube: ',
				'std'   => '',
			),
			'gm'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Link Gmail: ',
				'std'   => '',
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
			'fb' => '',
			'yt' => '',
			'gm' => '',
		);
		$instance = wp_parse_args( $instance, $default );
		$this->widget_start( $args, $instance );
		?>
			<ul>
				<li><a href="<?php echo $instance['fb']; ?>" target="blank"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="<?php echo $instance['yt']; ?>" target="blank"><i class="fab fa-youtube"></i></a></li>
				<li><a href="<?php echo $instance['gm']; ?>" target="blank"><i class="far fa-envelope"></a></i></li>
			</ul>
		<?php
		$this->widget_end( $args );
	}
}