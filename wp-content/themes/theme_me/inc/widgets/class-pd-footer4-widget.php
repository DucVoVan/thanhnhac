<?php
	/**
	 * Widget class
	 */
class PD_Footer4_Widget extends PD_Widget {
	/**
	 * This is construct function.
	 */
	public function __construct() {
		$this->widget_cssclass    = '';
		$this->widget_name        = esc_html__( 'VD: Khu vực chân trang 4', 'dv' );
		$this->widget_id          = 'pd-news8';
		$this->widget_description = esc_html__( 'Hiển thị phần chân trang.', 'dv' );
		$this->settings           = array(
			
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
			
		);
		$instance = wp_parse_args( $instance, $default );
		$this->widget_start( $args, $instance );
		?>
			<h1>INSTAGRAM</h1>
			<?php echo do_shortcode('[instagram-feed]'); ?>
		<?php
		$this->widget_end( $args );
	}
}