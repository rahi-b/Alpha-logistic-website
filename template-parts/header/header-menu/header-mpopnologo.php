<?php 
/*
* No Logo,Right Search,Popup Menu,Button = 21
*/
global $transto_opt;
?>
 	<div class="transto-main-menu one_page hidden-xs hidden-sm witr_search_wh sb_popup  witr_h_h21">
		<div class="transto_nav_area scroll_fixed">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					
				<div class="row">				
					
					<!-- MAIN MENU -->
					<div class="col-md-12">
						<div class="tx_mmenu_together">
							<nav class="transto_menu nologo_menu13">						
								<?php transto_main_menu(); ?>																										
							</nav>
							
							<div class="search_popup_button">						
								<div class="main-search-menu">						
									<?php transto_search_code(); ?>																			
								</div>
								<?php if ( is_active_sidebar( 'sidebar-pop' ) ) { ?>
									<div class="menu_popup_option">
										<?php transto_right_side_menu(); ?>
									</div>
								<?php  }?>
								
								<!-- menu button -->
								<?php transto_menu_button();?>		
						
							</div>
						</div>
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
			
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	