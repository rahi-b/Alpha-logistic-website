<!-- BLOG QUERY Audio -->
	<!-- SINGLE BLOG -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="transto_blog_item">						
				<!-- BLOG Audio -->
				<div class="transto_player_audio">
					<?php echo do_shortcode( '[audio]' ); ?>
				</div>
				<div class="transto_blog_content">
					<h2 class="blog_title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>			
					<!-- BLOG POST META  -->	
					<?php transto_blog_post_meta();?>			
					<p><?php echo transto_excerpt();?></p>
					<!-- blog Button -->
					<?php transto_blog_btn();?>									
				</div>			
			</div>
		</article> <!--  END SINGLE BLOG -->