<?php 
/*
* header mini shop menu - 15
*/
global $transto_opt;
?>
 	<div class="transto-main-menu hidden-xs hidden-sm  witr_h_h15">
		<div class="transto_nav_area">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-2 col-sm-2 col-xs-2">
						<?php transto_main_logo(); ?>
					</div>
					<!-- END LOGO -->					
						<!-- MAIN MENU -->
						<div class="col-md-10 col-sm-10 col-xs-10 tx_menu_together">
							<nav class="transto_menu">						
								<?php transto_main_menu(); ?>
							</nav>				
							<!-- END MAIN MENU -->
							<!-- Woo Icon cart -->
							<?php if( class_exists( 'WooCommerce' ) ) { transto_mini_shop_output(); } ?>
							<!-- menu button -->
							<?php transto_menu_button();?>	
						</div>
					</div><!-- END ROW -->		
				</div> 	<!-- END CONTAINER -->			
					
			</div> 	
		</div>  <!-- END AREA -->