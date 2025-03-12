<?php
/**
* Standard page page
*
*/

get_header();		

get_template_part( 'includes/header' , 'page-title' ); ?>
<!-- BLOG AREA START -->
<main class="transto-page-template">
	<div class="container">				
		<div class="row">					
			<div class="col-md-12">
				<?php
				while ( have_posts() ) : the_post();
						global $post;
						 get_template_part( 'template-parts/content' , 'page' );
				 endwhile;
				 ?>							
			</div>

		</div>	
	</div>
</main>
<!-- END BLOG AREA START -->
			
<?php

get_footer();		
