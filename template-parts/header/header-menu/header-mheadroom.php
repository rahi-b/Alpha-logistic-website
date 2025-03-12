<?php 
/*
* Header Menu With Button headroom Menu - 11
*/
global $transto_opt;
?>
 	<div class="transto-main-menu hidden-xs hidden-sm one_page header--fixed headrooma  witr_h_h11">
		<div class="transto_nav_area">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php transto_onepage_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="transto_menu">						
							<?php transto_one_page_menu(); ?>
							<!-- menu button -->
								<?php transto_menu_button();?>	
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>		