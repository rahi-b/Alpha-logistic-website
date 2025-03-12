<?php 
/*
* Header Menu With Social Icon - 9
*/
global $transto_opt;
?>
 	<div class="transto-main-menu one_page hidden-xs hidden-sm  witr_h_h9">
		<div class="transto_nav_area scroll_fixed">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
						
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-2 col-sm-3 col-xs-4">
						<?php transto_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-10 col-sm-9 col-xs-8">
						<nav class="transto_menu">						
							<?php transto_main_menu(); ?>
								<div class="p_menu_social">					
									<?php transto_topmenu_social_icon();?>
								</div>
								<!-- menu button -->
								<?php transto_menu_button();?>											
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>