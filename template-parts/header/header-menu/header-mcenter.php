<?php 
/*
* left Logo,Center Menu,Search And Right Address = 22
*/
global $transto_opt;
?>
 	<div class="transto-main-menu one_page hidden-xs hidden-sm  witr_h_h22">
		<div class="transto_nav_area scroll_fixed">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-2 col-sm-3 col-xs-4">
						<?php transto_main_logo(); ?>
					</div>					
					<!-- MAIN MENU -->
					<div class="col-md-10 col-sm-9 col-xs-8">
						<div class="number_align">
							<nav class="transto_menu menu_search">						
								<?php transto_main_menu(); ?>
								<?php transto_search_code(); ?>
							</nav>							
							<div class="main_menu_address_a">
								<div class="mcallicon">
									<?php echo wp_kses($transto_opt['main_menu_icon'], array(
										'i' => array(
											'class' =>array()
										),
									));
									?>									
								</div>
								<div class="mcallphone">
								<?php
								if (!empty($transto_opt['main_menu_top_title'])): ?>										
										<p><?php echo esc_html($transto_opt['main_menu_top_title']); ?></p>
								<?php endif;

								if (!empty($transto_opt['main_menu_number'])): ?>
									<p><a href="<?php esc_attr_e('tel:','transto')?><?php echo esc_html($transto_opt['main_menu_number']); ?>"><?php echo esc_html($transto_opt['main_menu_number']); ?></a></p>
								<?php endif; ?>									
								</div>
							</div>						
						</div>						
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						

			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	