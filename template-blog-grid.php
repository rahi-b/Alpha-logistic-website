<?php
/**
* Template Name: transto blog grid for show post
*/

get_header();
get_template_part( 'includes/header' , 'page-title' ); ?>

<!-- BLOG AREA START -->
<main class="transto_blog_index bgimgload">
	<div class="container">			
		<div class="row blog-messonary">
		
			<?php
				$page = ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
				$paged = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : $page );
				$wp_query = new WP_Query( array(
					'post_type' => 'post',
					'paged'     => $paged,
					'page'      => $paged,
				) );
			if ( $wp_query->have_posts() ) : ?>										
				<div class="col-lg-12">
					<div class="row">
						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();
							global $post;
							?> <div class="grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12">  <?php
							get_template_part( 'template-parts/pformate/content' , get_post_format() );
							?> </div> <?php
							endwhile; ?>								
						
					</div>
								
				</div>
			<?php endif;  ?>																				
		</div>
		<!-- START PAGINATION -->
		<div class="row">
			<div class="col-md-12">
				<?php transto_pagination();?>
			</div>
		</div>
		<!-- END START PAGINATION -->		
	</div>
</main>
<!-- END BLOG AREA START -->
<?php 
get_footer();