<?php
/**
 * Standard archive page
 *
 */

get_header(); 
get_template_part( 'includes/header' , 'page-title' ); 

?>
			
			<!-- archive AREA START -->
			<div class="transto-blog-area ivc_archive_page">
				<div class="container">				
					<div class="row">

						<?php if( have_posts() ) :
							while( have_posts() ) : the_post(); ?>
							
						<div class="col-lg-4 col-md-6 col-xs-12 col-sm-12 " >
							<div class="single_archive">
								<div class="ic_archive_thumb">
									<?php the_post_thumbnail();?>
									<div class="ic_archive_position">									
										<div class="ic_archive_icon">									
											<a class=" venobox" data-gall="myGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="ti-image"></i></a>
											<a href="<?php the_permalink(); ?>"><i class="ti-link"></i></a>
										</div>									
										<div class="ic_archive_content">										
											<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
										</div>
									</div>
								</div>				
							</div>
						</div>							

					 <?php endwhile;  endif; ?>
									
					</div>	
				</div>
			</div>
			<!-- END BLOG AREA START -->						
<?php
get_footer();