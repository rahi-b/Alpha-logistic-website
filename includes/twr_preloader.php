<?php 
/* preloader option */
global $transto_opt;
$twr_is_preloader = !empty($transto_opt['twr_is_preloader']) ? $transto_opt['twr_is_preloader'] : '';
$twr_preloader_style = !empty($transto_opt['twr_preloader_style']) ? $transto_opt['twr_preloader_style'] : '1';
$preopttext = !empty($transto_opt['preloader_text']) ? strtoupper($transto_opt['preloader_text']) : strtoupper(get_bloginfo( 'name'));
$pretext = str_split($preopttext);
if ( $twr_is_preloader == '1' ) {
    if ( defined( 'ELEMENTOR_VERSION' ) ) {
        if ( \Elementor\Plugin::$instance->preview->is_preview_mode() ) {
            echo '';
        } else {
            if ( $twr_preloader_style == '1' ) {?> 
				<div id="pretwr_loader_pre">
					<div id="twr_pretwr_loader_pre" class="twr_pretwr_loader_pre">
						<div class="twr_animation">
							<div class="twr_circle_pre text-center"></div>
							<div class="twr_text_pre text-center">
								<?php
								if (is_array($pretext)) {
									foreach ($pretext as $logonametext) {
										?>
										<span data-text-pretwr_loader_pre="<?php echo esc_attr($logonametext) ?>" class="twr_textletter_pre">
											<?php echo esc_html($logonametext) ?>
										</span>
										<?php
									}
								}
								?>
							</div>
							<?php if(!empty($transto_opt['pre_preloader_text'])): ?>
								<p class="text-center"><?php echo esc_html($transto_opt['pre_preloader_text']);?></p>
							<?php endif;
							 if (!empty($transto_opt['transto_preceross_hide']) && $transto_opt['transto_preceross_hide']==true): 
								if (!empty($transto_opt['preloader_cancel_icon'])):?>
									<i class="<?php echo esc_attr($transto_opt['preloader_cancel_icon']);?> twr_precross"></i>
								<?php endif;
								if (!empty($transto_opt['preloader_cancel_text'])):?>
									<h2 class="twr_precross"><?php echo esc_html($transto_opt['preloader_cancel_text']);?></h2>
								<?php endif; 
							endif; ?>								
						</div>
						<div class="twr_loader_pre">
							<div class="row">
								<div class="col-lg-3 trw_prebg "><div class="twr_bgoverlay"></div></div>
								<div class="col-lg-3 trw_prebg "><div class="twr_bgoverlay"></div></div>
								<div class="col-lg-3 trw_prebg "><div class="twr_bgoverlay"></div></div>
								<div class="col-lg-3 trw_prebg "><div class="twr_bgoverlay"></div></div>
							</div>
						</div>												
					</div>
				</div>	
		<?php 
        }else{ ?>
				<div id="pretwr_loader_pre">
					<div id="twr_pretwr_loader_pre" class="twr_pretwr_loader_pre">
						<div class="twr_animation">
							<div class="twr_text_pre">
								<?php
								twr_loding_logo()
								?>
							</div>
							<?php if(!empty($transto_opt['pre_preloader_text'])): ?>
								<p class="text-center"><?php echo esc_html($transto_opt['pre_preloader_text']);?></p>
							<?php endif;
							 if (!empty($transto_opt['transto_preceross_hide']) && $transto_opt['transto_preceross_hide']==true): 
								if (!empty($transto_opt['preloader_cancel_icon'])):?>
									<i class="<?php echo esc_attr($transto_opt['preloader_cancel_icon']);?> twr_precross"></i>
								<?php endif;
								if (!empty($transto_opt['preloader_cancel_text'])):?>
									<h2 class="twr_precross"><?php echo esc_html($transto_opt['preloader_cancel_text']);?></h2>
								<?php endif; 
							endif; ?>						
						</div>
					</div>
				</div>
		<?php }
    }	
	
}else{
            if ( $twr_preloader_style == '1' ) {?> 
				<div id="pretwr_loader_pre">
					<div id="twr_pretwr_loader_pre" class="twr_pretwr_loader_pre">
						<div class="twr_animation">
							<div class="twr_circle_pre"></div>
							<div class="twr_text_pre">
								<?php
								if (is_array($pretext)) {
									foreach ($pretext as $logonametext) {
										?>
										<span data-text-pretwr_loader_pre="<?php echo esc_attr($logonametext) ?>" class="twr_textletter_pre">
											<?php echo esc_html($logonametext) ?>
										</span>
										<?php
									}
								}
								?>
							</div>
								<?php if(!empty($transto_opt['pre_preloader_text'])): ?>
									<p class="text-center"><?php echo esc_html($transto_opt['pre_preloader_text']);?></p>
								<?php endif;
								 if (!empty($transto_opt['transto_preceross_hide']) && $transto_opt['transto_preceross_hide']==true): 
									if (!empty($transto_opt['preloader_cancel_icon'])):?>
										<i class="<?php echo esc_attr($transto_opt['preloader_cancel_icon']);?> twr_precross"></i>
								<?php endif;
								if (!empty($transto_opt['preloader_cancel_text'])):?>
									<h2 class="twr_precross"><?php echo esc_html($transto_opt['preloader_cancel_text']);?></h2>
								<?php endif; 
							endif; ?>
						</div>
        <div class="twr_loader_pre">
            <div class="row">
                <div class="col-lg-3 trw_prebg "><div class="bg"></div></div>
                <div class="col-lg-3 trw_prebg "><div class="bg"></div></div>
                <div class="col-lg-3 trw_prebg "><div class="bg"></div></div>
                <div class="col-lg-3 trw_prebg "><div class="bg"></div></div>
            </div>
        </div>						
						
					</div>
				</div>				
		<?php 
        }else{ ?>
				<div id="pretwr_loader_pre">
					<div id="twr_pretwr_loader_pre" class="twr_pretwr_loader_pre">
						<div class="twr_animation">
							<div class="twr_text_pre">
								<?php
								twr_loding_logo()
								?>
							</div>
								<?php if(!empty($transto_opt['pre_preloader_text'])): ?>
									<p class="text-center"><?php echo esc_html($transto_opt['pre_preloader_text']);?></p>
								<?php endif;
								 if (!empty($transto_opt['transto_preceross_hide']) && $transto_opt['transto_preceross_hide']==true): 
									if (!empty($transto_opt['preloader_cancel_icon'])):?>
										<i class="<?php echo esc_attr($transto_opt['preloader_cancel_icon']);?> twr_precross"></i>
									<?php endif;
								if (!empty($transto_opt['preloader_cancel_text'])):?>
									<h2 class="twr_precross"><?php echo esc_html($transto_opt['preloader_cancel_text']);?></h2>
								<?php endif; 
							endif; ?>
						</div>
					</div>
				</div>
		<?php }	
	
}

}
