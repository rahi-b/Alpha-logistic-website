<?php /**
* Maybe show the right sidebar
*/

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

	<div class="col-xl-3 col-lg-4 col-md-5  col-sm-12  sidebar-right content-widget pdsr">
		<div class="blog-left-side transto_s_color transto_theme_widget">
		
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
	</div>
	
