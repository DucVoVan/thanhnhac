<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="searchforms" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $unique_id ); ?>">
		<span class="screen-reader-text"><?php echo esc_attr( _x( 'Search for:', 'label', 'phoenixdigi' ) ); ?></span>
	</label>
	<input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Nhập từ khóa và lấy búa đập phím enter &hellip;', 'placeholder', 'phoenixdigi' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<i class="fas fa-times"></i>
</form>
