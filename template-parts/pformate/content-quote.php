<!-- BLOG QUERY quote' -->
	<!-- SINGLE BLOG -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('transto_bquote'); ?>>
			<div class="transto_blog_item">					
				<div class="transto_blog_content">
					<i class="ti-quote-left"></i>
					<h2 class="blog_title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>							
				</div>			
			</div>
		</article> <!--  END SINGLE BLOG -->
