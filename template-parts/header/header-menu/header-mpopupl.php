<?php 
/*
* Left Logo,Right Search,Popup Menu,Button = 20
*/
global $transto_opt;
?>
 	<div class="transto-main-menu one_page hidden-xs hidden-sm witr_search_wh  witr_h_h20">
		<div class="transto_nav_area scroll_fixed">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php transto_main_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<div class="tx_mmenu_together">
							<nav class="transto_menu nologo_menu13">						
								<?php transto_main_menu(); ?>						
							</nav>
							<div class="main_exx">	
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