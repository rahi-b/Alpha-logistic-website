<?php
/*
 * Standard blog index page
 */
get_header(); 
transto_blog_breadcrumb();?>

<main class="transto_blog_index">
<div class="container">
	<div class="row">
	
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
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
		<?php get_sidebar( 'right' ); 
		}else{ ?>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-12 tx-img-w">
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
		<?php } ?>	
	</div>
</div>

</main>	
<?php
get_footer();