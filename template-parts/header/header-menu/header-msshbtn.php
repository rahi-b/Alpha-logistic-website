<?php 
/*
* Left Logo,Right Search, Mini Shop Button - 19
*/
global $transto_opt;
?>
 	<div class="transto-main-menu hidden-xs hidden-sm one_page witr_h_h19">
		<div class="transto_nav_area scroll_fixed">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row logo-left">								
					<!-- LOGO -->
					<div class="col-md-2 col-sm-2 col-xs-2">
						<?php transto_main_logo(); ?>
					</div>						
						<!-- MAIN MENU -->
						<div class="col-md-10 col-sm-10 col-xs-10 tx_menu_together">
							<nav class="transto_menu">						
								<?php transto_main_menu(); ?>
							</nav>				
					

							<div class=" tx_mmenu_together">						
								<div class="main-search-menu">						
									<?php transto_search_code(); ?>																			
								</div>
								<!-- Woo Icon cart -->
								<?php if( class_exists( 'WooCommerce' ) ) { transto_mini_shop_output(); } ?>										
							</div>				

						</div>
				</div><!-- END ROW -->		
			</div> 	<!-- END CONTAINER -->			
					
		</div> 	
	</div>  <!-- END AREA -->	