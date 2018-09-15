<?php get_header(); ?>
	<div class="content-main col-xl-8 col-lg-8">
		<div class="video-youtube">
			<div class="container">
				<div class="row">
					<?php 
						$arg_video = array(
							'post_type' => array(
								'video',
							),
						);
						$query_video = new WP_Query($arg_video);
						if($query_video->have_posts()): while($query_video->have_posts()): $query_video->the_post();
						 $value = get_field( "url_video" ); // tham số url_video là trường name trong field acf
					?>
					<div class="video-me col-xl-5">
						<div class="video1 js-modal-btn " data-video-id="<?php echo substr($value, 32); ?>">
							<img  class="video1-a" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="intro" >
							
							<div class="overlay">
								<img class="text-1" src="<?php echo get_theme_file_uri('assets/images/l-4.png'); ?>" alt="">
							</div>
						</div>

						<div class="meta-video">
							<div class="title-video"><?php the_title(); ?></div>
							<a class="seemore" href="<?php the_permalink(); ?>">Xem Chi tiết »</a>
						</div>
					</div>
					<?php 
						endwhile;
						endif;
					?>
				</div>
			</div>
		</div>
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
</div>
<?php get_footer(); ?>