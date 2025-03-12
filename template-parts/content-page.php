<?php 
/*
single details page

*/
?>	
<article id="post-<?php the_ID(); ?>" <?php post_class('transto_sblog_item'); ?>>	
<div class="transto_blog_details">
	<?php if(has_post_thumbnail()){ ?>
		<div class="transto_sblog_thumb">
		<?php
		the_post_thumbnail('transto_single_900x450', array( 'class' => 'img-fluid')); 
		?> </div> <?php
	} ?>
	<?php $ptitle  = get_post_meta( get_the_ID(),'_txbdm_ptitle', true );  
	 if( $ptitle == 'ptitles' ) {}else{ ?>	
			<h2 class="blog_title"><?php the_title(); ?></h2>				
	<?php } ?>	
	
	<?php transto_blog_singlepost_meta();?>
	<div class="transto_spage_content transto_sblog_content">
	<?php 
	the_content();
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
	?> 
	</div> <?php 
 comments_template();?>
</div>
</article>
