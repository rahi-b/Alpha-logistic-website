<div class="defaultsearch">
	<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr_e( 'Search', 'transto' ) ?>" title="<?php echo esc_attr_e( 'Search for:', 'transto' ) ?>" />
	<button  type="submit" class="icons">
		<i class="ti-search"></i>
	</button>
	</form>
</div>

		
		
		