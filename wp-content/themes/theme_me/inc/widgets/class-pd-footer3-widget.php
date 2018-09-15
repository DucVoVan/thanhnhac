<?php
	/**
	 * Widget class
	 */
class PD_Footer3_Widget extends PD_Widget {
	/**
	 * This is construct function.
	 */
	public function __construct() {
		$this->widget_cssclass    = '';
		$this->widget_name        = esc_html__( 'VD: Khu vực chân trang 3', 'dv' );
		$this->widget_id          = 'pd-news7';
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
			<h1>MAPS</h1>
		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2989087647206!2d105.7852393154858!3d20.98065198602444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdcf7b0bd1%3A0xc1cf5dd00247628a!2sPTIT!5e0!3m2!1svi!2s!4v1524459413510" width="270" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		<?php
		$this->widget_end( $args );
	}
}