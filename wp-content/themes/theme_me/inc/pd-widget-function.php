<?php
/**
 * [pd_register_widgets description]
 *
 * @return void [description]
 */
function pd_register_widgets() {
	register_widget( 'PD_Sidebar_Right_Widget' );
	register_widget( 'PD_Content_Widget' );
	register_widget( 'PD_Video_Sidebar_Widget' );
	register_widget( 'PD_Footer1_Widget' );
	register_widget( 'PD_Footer2_Widget' );
	register_widget( 'PD_Footer3_Widget' );
	register_widget( 'PD_Footer4_Widget' );
	register_widget( 'PD_Header_Link_Widget' );
	register_widget( 'PD_Footerend_Widget' );
}
add_action( 'widgets_init', 'pd_register_widgets' );

