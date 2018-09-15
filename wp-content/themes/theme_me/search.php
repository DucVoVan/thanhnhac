
<div id="result" class="result" onclick="document.getElementById('result').style.display='none'"; style="opacity: 1;
	display: block;
    z-index: 1;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    transition: opacity .15s linear;
    overflow: auto;
    background-color: rgba(127, 127, 127, 0.7);">
        <div class="menu-modal">
		    <div class="button-menu">
				<div class="title-menu">
					Message
				</div>
				<button type="button" class="close-popup" onclick="document.getElementById('result').style.display='none'">
				    <span aria-hidden="true">×</span>
				</button>
			</div>
			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->
			<?php

				while ( have_posts() ) :
					the_post();
					get_template_part( 'template/content', get_post_format() );
				endwhile;
				else: echo "Không tìm thấy kết quả";
				endif;
			?>
		</div>
</div>
