<?php
/**
 * Content template.
 */
?>
<article <?php post_class( 'col-md-6 col-sm-6 col-xs-12' ); ?>">

				<a href="<?php the_permalink(); ?>" class="entry-thumbnail">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail(); ?>
				<?php else : ?>
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/no-image.jpg' ) ); ?>" alt="">
				<?php endif; ?>
					<div class="overlay2">
						<span><?php esc_html_e( 'Xem chi tiết', 'ducvo' ); ?></span>
					</div>
				</a>

				<?php the_title( '<h4 class="entry-title"><a href="' . get_the_permalink() . '">', '</a></h4>' ); ?>
				<div class="entry-meta">
					<?php printf( '<i class="far fa-clock"></i> %1$s <i class="far fa-user"></i> %2$s', get_the_time( 'l, j F, Y' ), get_the_author() ) ?>
				</div>

				<div class="entry-content">
					<p><?php excerpt_short(get_the_excerpt()); ?></p>
					<a class="readmore" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Xem Thêm &raquo;', 'ducvo' ); ?></a>
				</div>

</article>