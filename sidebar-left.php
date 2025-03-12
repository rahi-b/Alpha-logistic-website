<?php /**
* Maybe show the left sidebar
*/




if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<div class="col-xl-3 col-lg-4 col-md-5  col-sm-12 sidebar-right content-widget pdsl">
		<div class="blog-left-side transto_s_color transto_theme_widget">
		
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		
		</div>
	</div>
							
