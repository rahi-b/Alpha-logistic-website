<?php 
/*
* header middle menu - no need change any code from this file.
*/
global $transto_opt;
$txbdm_box_menu = get_post_meta( get_the_ID(),'_txbdm_box_menu_style', true ); 
?>
<div class="transto_header_top_two top_crt_style  <?php if(!empty($transto_opt['transto_box_layouttwo']) && $transto_opt['transto_box_layouttwo']=="htopt_boxi"){echo esc_attr('container');}elseif($txbdm_box_menu==2){echo esc_attr('container');}else{ }?>">
	<div class="<?php if(!empty($transto_opt['transto_box_layouttwo']) && $transto_opt['transto_box_layouttwo']=="htopt_full"){echo esc_attr('containerss-fluid');}elseif($txbdm_box_menu==3){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
		<div class="row">
			<div class="col tx_m_coll tx_coll d-flex align-items-center justify-content-between flex-wrap <?php echo $transto_opt['middleflex_select'];?>">
				<!-- left-->
				<?php if (!empty($transto_opt['middle_logo_hide']==true)): ?>
					<div class="theme_cr_logo d-none d-xl-block d-lg-block">						
						<?php transto_main_logo(); ?>
					</div>
				<?php endif; ?>
				<!-- middle-->
				<?php if (!empty($transto_opt['middle_address_hide']==true)): ?>
				<div class="txmiddle_mgap d-flex align-items-center justify-content-center flex-wrap">				
					<?php transto_top_craddress1_option();
						 transto_top_craddress2_option();
						 transto_top_craddress4_option();?>
				</div>
				<?php endif; ?>				
				<!-- Right-->
				<?php if($transto_opt['middle_menu_hide'] || $transto_opt['middle_icon_hide'] || $transto_opt['middle_woo_hide'] || $transto_opt['middle_button_hide']):?>
				<div class="txmiddle_mgap d-flex align-items-center justify-content-center flex-wrap">
					<?php if (!empty($transto_opt['middle_menu_hide']==true)): ?>
						<div class="top_crl_menu">							 									 								 
							<?php transto_top_crmenu_option();?>
						</div>
					<?php endif; 
					 if (!empty($transto_opt['middle_icon_hide']==true)): ?>
						<div class="top_crmenu_icon">
							<ul class="top_crmenu_i_list">
								<?php transto_menu_social_icon(); ?>									
							</ul>									 									 								 
						</div>
						<?php endif; 
						 if (!empty($transto_opt['middle_woo_hide']==true)): 
						 if( class_exists( 'WooCommerce' ) ) { transto_mini_shop_output(); } 
						 endif;	
						 if (!empty($transto_opt['middle_button_hide']==true)): 					
							 transto_top_craddress2_button();
						endif; ?>					
				</div>
				<?php endif;?>
			</div>								
		</div>
	</div>
</div>

