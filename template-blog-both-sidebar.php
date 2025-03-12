<?php
/**
* Template Name: transto blog both sidebar for show post
*/

get_header();
get_template_part( 'includes/header' , 'page-title' ); ?>

<!-- BLOG AREA START -->
<main class="transto_blog_index">
	<div class="container">				
		<div class="row">
		
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) {?>
				<div class="col-lg-3 sidebar-right content-widget pdsl">
					<div class="blog-left-side transto_s_color transto_theme_widget">							
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				</div>		
			<?php } 
			
				$page = ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
				$paged = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : $page );
				$wp_query = new WP_Query( array(
					'post_type' => 'post',
					'paged'     => $paged,
					'page'      => $paged,
				) );
			if ( $wp_query->have_posts() ) : ?>
										
				<div class="col-lg-6">
					<div class="row">								
						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();
							global $post;
							?> <div class="col-lg-12 col-md-6">  <?php
							get_template_part( 'template-parts/pformate/content' , get_post_format() );
							?> </div> <?php
							endwhile; ?>							
					</div>
					<!-- START PAGINATION -->
					<div class="row">
						<div class="col-md-12">									
							<?php transto_pagination();?>
						</div>
					</div>
					<!-- END START PAGINATION -->								
				</div>
			<?php endif;  ?>

			<?php if ( is_active_sidebar( 'sidebar-2' ) ) {?>
				<div class="col-lg-3 sidebar-right content-widget pdsr">
					<div class="blog-left-side transto_s_color transto_theme_widget">						
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				</div>		
			<?php } ?>																				

		</div>
	</div>
</main>
<!-- END BLOG AREA START -->

<?php 
get_footer();