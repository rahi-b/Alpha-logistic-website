<?php
/**
* Template Name: transto blog left 2column for show post
* @since Layers 1.0.0
*/

get_header();
get_template_part( 'includes/header' , 'page-title' ); ?>

<!-- BLOG AREA START -->
<main class="transto_blog_index">
	<div class="container">				
		<div class="row">										
			<?php get_sidebar( 'left' ); 
				$page = ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
				$paged = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : $page );
				$wp_query = new WP_Query( array(
					'post_type' => 'post',
					'paged'     => $paged,
					'page'      => $paged,
				) );
			if ( $wp_query->have_posts() ) : ?>										
				<div class="col-lg-9">
					<div class="row">								
						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();
							global $post;
							?> <div class="col-lg-6">  <?php
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
			<?php endif; ?>																		
		</div>
	</div>
</main>
<!-- END BLOG AREA START -->
<?php 
get_footer();