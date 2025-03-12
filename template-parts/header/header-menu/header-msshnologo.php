<?php 
/*
* No Logo,Search, Mini Shop Button -18
*/
global $transto_opt;
?>
 	<div class="transto-main-menu hidden-xs hidden-sm one_page witr_h_h18">
		<div class="transto_nav_area scroll_fixed">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row align_item_center">				
						
						<!-- MAIN MENU -->
						<div class="col-md-8 col-sm-8 col-xs-8">
							<nav class="transto_menu">						
								<?php transto_main_menu(); ?>
							</nav>				
						</div>
						<!-- END MAIN MENU -->
						<div class="col-md-4 col-sm-4">
							<div class=" tx_mmenu_together">						
								<div class="main-search-menu">						
									<?php transto_search_code(); ?>																			
								</div>
								<!-- Woo Icon cart -->
								<?php if( class_exists( 'WooCommerce' ) ) { transto_mini_shop_output(); } ?>
								<!-- menu button -->
								<?php transto_menu_button();?>										
							</div>	
						</div>
				</div><!-- END ROW -->		
			</div> 	<!-- END CONTAINER -->			
					
		</div> 	
	</div>  <!-- END AREA -->