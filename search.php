<?php
/*
 * Archive page
 */
get_header(); 
get_template_part( 'includes/header' , 'page-title' ); ?>
<main class="transto_blog_index transto_blog_search">
<div class="container">
	<div class="row">
		<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12 ">
			<div class="row">
				<div class="col-md-12">
					<?php 
					if ( have_posts() ) :
						while (have_posts() ) : the_post();
							 get_template_part( 'template-parts/pformate/content' , get_post_format() );
						endwhile;
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;					
					?>	
				</div>
				<!-- START PAGINATION -->
				<div class="row">
					<div class="col-md-12">
						<?php transto_pagination();?>
					</div>
				</div>
				<!-- END START PAGINATION -->				
			</div>
		</div>
		<?php get_sidebar( 'right' ); ?>	
	</div>
</div>

</main>	
<?php
get_footer();