<!-- BLOG QUERY Link -->
	<!-- SINGLE BLOG -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('transto_bquote'); ?>>
			<div class="transto_blog_item">									
				<div class="transto_blog_content">
				
					<h2 class="blog_title">	
						<i class=" ti-link"></i>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<p><?php echo transto_excerpt();?></p>					
				</div>			
			</div>
		</article> <!--  END SINGLE BLOG -->