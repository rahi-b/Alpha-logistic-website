<?php 
/*
single details post

*/
 global $transto_opt;
?>	
<article id="post-<?php the_ID(); ?>" <?php post_class('transto_sblog_item'); ?>>	
	<div class="transto_blog_details">
		<!-- POST THUMBNAIL -->
		<?php if(has_post_thumbnail()){ ?> 
			<div class="transto_spage_thumb">
			<?php the_post_thumbnail('transto_900x350',array( 'class' => 'img-fluid')); ?>
			</div> 
		<?php } ?>
		<!-- POST TITLE -->
		<h2 class="blog_title"><?php the_title(); ?></h2>
		<!-- POST META -->
		<?php transto_blog_singlepost_meta();
		/* POST CONTENT */
		if( get_the_content() ) : ?>
		<div class="transto_sblog_content"> 
		<?php the_content();
		/**
		* Display In-Post Pagination
		*/
		wp_link_pages( array(
			'before'			    => '<div class="transto_postd_pagi"><span class="page-link-text">' . esc_html__( 'More pages: ', 'transto' ) . '</span>',
			 'after'				 => '</div>',
			 'next_or_number'	 => 'number',
			 'separator'			 => '  ',
			 'nextpagelink'		 => esc_html__( 'Next ', 'transto' ) . '<i class="fti-arrow-right"></i>',
			 'previouspagelink' => '<i class="ti-arrow-left"></i>' . esc_html__( 'Previous', 'transto' ),
		));
		?> </div> <?php 
		 endif; 

		/* BLOG POST SHARING */
		 if( 'post' == get_post_type() ) { 
		 if (!empty($transto_opt['transto_blc_hide']) && $transto_opt['transto_blc_hide']==true){?>			
			<div class="transto-blog-social">
			<?php
					if( function_exists('twr_sitepage_sharing') ){						
						twr_sitepage_sharing();
					} ?>
			</div>							
		<?php }else{
		}} ?> 	 
		<!-- SINGLE TAGS -->
		<?php transto_single_tags();?>

		<!-- NEXT - PREVIEW -->
		<div class="transto_prev_next_dsing">
			<div class="prevspost">
			<?php previous_post_link( '<span>Prev Post</span> %link', __( '%title', 'transto' ), true ); ?> 
			</div>
			<div class="nextspost">
			<?php next_post_link( '<span>Next Post</span> %link', __( '%title', 'transto' ), true ); ?> 
			</div>
		</div>
		<!-- COMMENT -->
		<?php comments_template();?>
	</div>
</article>
