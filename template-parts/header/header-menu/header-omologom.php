<?php 
/*
* nologo one page menu = 24
*/
global $transto_opt;
?>
 	<div class="transto-main-menu one_page hidden-xs hidden-sm sb_popup witr_h_h24">
		<div class="transto_nav_area scroll_fixed">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">								
				<div class="row">									
					<!-- MAIN MENU -->
					<div class="col-lg-12">
						<nav class="transto_menu tx_mmenu_together">						
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