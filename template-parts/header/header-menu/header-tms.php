<?php 
/*
* Header Transparent With Sticky Menu
*/
global $transto_opt;
?>
 	<div class="transto-main-menu one_page menu4 hidden-xs hidden-sm  heading_style_5  witr_h_h3">
		<div class="transto_nav_area transprent-menu scroll_fixed bdbar">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php transto_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="transto_menu">						
							<?php transto_main_menu(); ?>
							
							<?php if (!empty($transto_opt['transto_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($transto_opt['transto_header_button_url'])){echo esc_url($transto_opt['transto_header_button_url']);}?>">
										<?php echo wp_kses($transto_opt['transto_header_button'], array(
											'i' => array(
												'class' =>array()
											),
										));?>	
									</a>	
								</div>	
							<?php endif; ?>								
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	