<?php 
/*
* Top and Menu With Button - 25
*/
global $transto_opt;
?>


 	<div class="transto-main-menu one_page hidden-xs hidden-sm  witr_h_h25">
		<div class="transto_nav_area scroll_fixed">
			<div class="<?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
			
				<div class="row">				
					<!-- LOGO -->
					<div class="col-lg-12 col-xl-2 logo_area_bg align-content-center">
						<?php transto_main_logo(); ?>
					</div>
					<!-- MAIN MENU -->
					<div class="col-lg-12 col-xl-10 padding_left_zero">
					    <!-- top menu -->
                        <div class=" topmain_border d-flex align-items-center justify-content-between">
                        	<div class="top_singlemenu ">
                				<ul class="topsocial_icon d-flex align-items-center justify-content-center">
                					<?php transto_menu_social_icon();?>								
                				</ul>									 									 								 
                        	</div>					
                        	<div class="top_singlemenu">
                        		<div class="top-address transto-header-top top_address_bg">
                        			<?php transto_top_address_option();?>
                        		</div>
                        	</div>
                        	<?php if (!empty($transto_opt['mmenu_login_hide']) && $transto_opt['mmenu_login_hide']==true): ?>
                   		    <div class="loginaddress top_singlemenu">
                        		<div class="top-address em-login">
                        			<?php transto_login();?>
                        		</div>
                    		</div>
                    		<?php endif; ?>
                        </div>
                        <!-- main menu -->
                        <div class="d-flex align-items-center justify-content-between">
    						<nav class="transto_menu d-flex align-items-center">						
    							<?php transto_main_menu(); ?>
    							<?php transto_search_code(); ?>
    						</nav>
    						<div class="d-flex align-items-center">
                            <?php if (!empty($transto_opt['mmenu_countdown_hide']) && $transto_opt['mmenu_countdown_hide']==true): ?>    						    
    						    <?php if (!empty($transto_opt['mmenu_counttitle'])): ?>
        						    <div class="anydcount_title">
        						        <h4><?php echo esc_html($transto_opt['mmenu_counttitle']); ?></h4>
        						    </div>
    						    <?php endif; ?>
			                        <?php header_countdown();?>
			                    <?php endif; ?>
    						    <?php transto_menu_button();?>
    						</div>
    						
    						
						</div>
					</div>
					<!-- END MAIN MENU -->
				</div> <!-- END ROW -->						
			</div> <!-- END CONTAINER -->	
		</div>  <!-- END AREA -->				
	</div>		