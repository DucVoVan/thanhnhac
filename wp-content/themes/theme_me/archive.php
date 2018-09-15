<?php get_header(); ?>
	<div class="content-main col-xl-8 col-lg-8">
		<div class="container">
			<div class="row">
				<?php 
					if(have_posts()): while(have_posts()): the_post();
					get_template_part('template/content');
					endwhile;
				?>
					<div class="clearfix"></div>
					<?php vd_posts_pagination(); ?>	
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="sidebar-right col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
		<div class="sidebar-fixed" id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php 
get_footer();