<!-- BLOG QUERY Image -->
	<!-- SINGLE BLOG -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="transto_blog_item">					
				<!-- BLOG THUMB -->
				<?php if(has_post_thumbnail()){?>
					<figure class="transto_blog_thumb">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'transto_900x350', array( 'class' => 'img-fluid')) ?> </a>
					</figure>									
				<?php } ?>
				
				<div class="transto_blog_content">
					<h2 class="blog_title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>			
					<!-- BLOG POST META  -->	
					<?php transto_blog_post_meta();?>			
				
					<!-- blog Button -->
					<?php transto_blog_btn();?>
										
				</div>			
			</div>
		</article> <!--  END SINGLE BLOG -->
