<?php 
/*
* Header Hamburgers Menu - 16
*/
global $transto_opt;
?>
 	<div class="transto-main-menu hidden-xs hidden-sm transprent-menu heading_style_4  witr_h_h16">
		<div class="trp_nav_area">		
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
		
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php transto_ts_logo(); ?>
					</div>
					<!-- END LOGO -->
					
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 hmer col-xs-8">
					
						<button class="hamburger hamburger--slider" type="button">
						  <span class="hamburger-box">
							<span class="hamburger-inner"></span>
						  </span>
						</button>					
						<nav class="transto_menu dvrm">						
							<?php transto_main_menu(); ?>
						</nav>				
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->	
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>	
		