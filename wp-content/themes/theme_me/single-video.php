<?php get_header(); ?>
	<?php 
		if(have_posts()): while(have_posts()): the_post();
	?>
	<div class="col-xl-8 news">
		<article >
			<h1><?php the_title(); ?></h1>
			<div class="article-meta">
				<?php echo get_the_time(); ?>
				<?php echo get_the_date(); ?>
			</div>
			<?php the_content(); ?>
			<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
			<div class="fb-comments" data-href="https://ducvovan.com"  data-numposts="5"></div>

		</article>
	</div>
	<div class="sidebar-right col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
		<div class="sidebar-fixed" id="sidebar">
			<?php 
				if ( is_active_sidebar( 'sidebar-video' ) ) {
					dynamic_sidebar( 'sidebar-video' );
				}
			?>
		</div>
	</div>
	<?php 
		endwhile;
		endif;
	?>
<?php get_footer();
