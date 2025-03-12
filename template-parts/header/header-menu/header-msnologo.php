<?php 
/*
* Header Menu With Search and no Logo - 12
*/
global $transto_opt;
?>
 	<div class="transto-main-menu one_page hidden-xs hidden-sm  witr_h_h12">
		<div class="transto_nav_area scroll_fixed">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
	
				<div class="row no-logo-sr">				
					<!-- MAIN MENU -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<nav class="transto_menu creative_header_menu">						
							<?php transto_main_menu(); ?>
							<div class="tx_bs_together">
								<div class="creative_search_icon">
									<?php transto_search_code(); ?>
								</div>
								<!-- menu button -->
								<?php transto_menu_button();?>	
							</div>			
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	