<?php
/**
 * Template part for displaying archive posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package transto
 */

?>

	<!-- SEARCH QUERY -->
	<div class="col-md-6 col-sm-12 col-xs-12 grid-item">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="transto-single-blog">					
				
				<!-- BLOG THUMB -->
				<?php if(has_post_thumbnail()){?>
					<div class="transto-blog-thumb">
						<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('transto-blog-default', array( 'class' => 'img-fluid')); ?> </a>
					</div>									
				<?php } ?>
				
				<div class="em-blog-content-area">
				
					<!-- BLOG TITLE -->
					<div class="blog-page-title">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
					</div>
						
					<!-- BLOG POST META  -->
					<?php transto_blog_post_meta();?>				
					
					<!-- BLOG TITLE AND CONTENT -->
					<div class="blog-inner">
						<div class="blog-content">					
							<p><?php echo wp_trim_words( get_the_content(), 18, ' ' ); ?></p>
						</div>
					</div>	
					<!-- blog Button -->
					<?php transto_blog_btn();?>
				</div>			
			</div>
		</div> <!--  END SINGLE BLOG -->

	</div><!-- #post-## -->
