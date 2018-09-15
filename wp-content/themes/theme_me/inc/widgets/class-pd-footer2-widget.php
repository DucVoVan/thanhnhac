<?php
	/**
	 * Widget class
	 */
class PD_Footer2_Widget extends PD_Widget {
	/**
	 * This is construct function.
	 */
	public function __construct() {
		$this->widget_cssclass    = '';
		$this->widget_name        = esc_html__( 'VD: Khu vực chân trang 2', 'dv' );
		$this->widget_id          = 'pd-news6';
		$this->widget_description = esc_html__( 'Hiển thị phần chân trang.', 'dv' );
		$this->settings           = array(
			'text1'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Thông tin liên hệ',
			),
			'text2'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Bạn có những thắc mắc muốn giải đáp hoặc hợp tác, có thể liên hệ với mình theo thông tin dưới đây:',
			),
			'text3'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Địa chỉ:',
			),
			'text4'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Tổ 6, P.Mỗ Lao, Hà Đông, Hà Nội',
			),
			'text5'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Email:',
			),
			'text6'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'vovanducvina@gmail.com',
			),
			'text7'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => 'Phone:',
			),
			'text8'   => array(
				'type'  => 'text',
				'desc'  => 'Nhập nội dung muốn thay đổi',
				'label' => 'Tiêu đề muốn hiển thị: ',
				'std'   => '01234470695',
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
			'text1'   => 'Thông tin liên hệ',
			'text1'   => 'Bạn có những thắc mắc muốn giải đáp hoặc hợp tác, có thể liên hệ với mình theo thông tin dưới đây:',
			'text1'   => 'Địa chỉ:',
			'text1'   => 'Tổ 6, P.Mỗ Lao, Hà Đông, Hà Nội',
			'text1'   => 'Email:',
			'text1'   => 'vovanducvina@gmail.com',
			'text1'   => 'Phone:',
			'text1'   => '01234470695',
		);
		$instance = wp_parse_args( $instance, $default );
		$this->widget_start( $args, $instance );
		?>
			<h1>Thông tin liên hệ</h1>
			<div>Bạn có những thắc mắc muốn giải đáp hoặc hợp tác, có thể liên hệ với mình theo thông tin dưới đây:</div>
			<ul>
				<li>
					<i class="fas fa-map-marker"></i>
					<div>
						<span>Địa chỉ:</span>
						<div>Tổ 6, P.Mỗ Lao, Hà Đông, Hà Nội</div>
					</div>
				</li>
				<li>
					<i class="far fa-envelope"></i>
					<div>
						<span>Email:</span>
						<span>vovanducvina@gmail.com</span>
					</div>
				</li>
				<li>
					<i class="fas fa-phone"></i>
					<div>
						<span>Phone:</span>
						<span>01234470695</span>
					</div>
				</li>
			</ul>
		<?php
		$this->widget_end( $args );
	}
}