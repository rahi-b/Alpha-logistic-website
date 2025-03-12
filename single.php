<?php
/**
* Standard blog single page
*
*/
get_header(); 
get_template_part( 'includes/header' , 'page-title' ); ?>

<!-- BLOG AREA START -->
<main class="transto_blog_index transto_bindex_single">
	<div class="container">				
		<div class="row">	
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
				<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12  blog-lr">
					<?php if (have_posts() ) :
						while ( have_posts() ) : the_post();
							 get_template_part( 'template-parts/content' , 'single' ); 
						endwhile;
					endif; ?>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12  sidebar-right content-widget pdsr">
					<div class="blog-left-side transto_s_color transto_theme_widget">
					
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				</div>				
			<?php }else{ ?>
				<div class="col-md-12  col-sm-12 col-xs-12 blog-lr tx-img-w">
					<?php if (have_posts() ) :
						while ( have_posts() ) : the_post();
							 get_template_part( 'template-parts/content' , 'single' ); 
						endwhile;
					endif; ?>
				</div>													
			<?php } ?>						
		</div>	
	</div>
</main>
<!-- END BLOG AREA START -->						
<?php
get_footer();