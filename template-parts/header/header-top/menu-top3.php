<?php 
/*
* header top 3 
*/
global $transto_opt;
?>
<div class="row">
	<!-- TOP LEFT -->
	<div class="col tx_coll d-flex align-items-center justify-content-between flex-wrap <?php echo $transto_opt['topflex_select'];?>">
		<?php if($transto_opt['top_address_hide'] || $transto_opt['top_opening_hide']):?>	
			<div class="top-address d-flex align-items-center">
				<?php if (!empty($transto_opt['top_address_hide']==true)): ?>
					<?php transto_top_address_option();?>
				<?php endif; ?>
				<?php if (!empty($transto_opt['top_opening_hide']==true)): ?>
					<?php transto_top_opening_option();?>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<!-- Middle -->
		<?php if($transto_opt['top_welcome_hide'] || $transto_opt['top_icon_hide']):?>			
			<div class="tx_itemmiddle tx_coll d-flex align-items-center flex-wrap">
				<?php if (!empty($transto_opt['top_welcome_hide']==true)): ?>	
				<div class="top-welcome">
					<p><?php transto_top_wellcome_option();?></p>
				</div>			
				<?php endif; ?>		
				<?php if (!empty($transto_opt['top_icon_hide']==true)): ?>
				<div class="top-right-menu">
				<ul class="social-icons text-right">
					<?php transto_menu_social_icon();?>
				</ul>
				</div>
				<?php endif; ?>		
			</div>
		<?php endif; ?>
		<!-- TOP RIGHT -->
		<?php if($transto_opt['top_menu_hide'] || $transto_opt['top_login_hide'] || $transto_opt['top_search_hide']):?>		
			<div class="top-right-menu tx_coll d-flex flex-wrap">
				<?php if (!empty($transto_opt['top_menu_hide']==true)): ?>
					<?php transto_topright_menu(); ?>
				<?php endif; ?>
				<?php if (!empty($transto_opt['top_login_hide']==true)): ?>	
				<div class="top-address em-login">
					<p><?php transto_login();?></p>
				</div>			
				<?php endif; ?>
				<?php if (!empty($transto_opt['top_search_hide']==true)): ?>
				<div class="ossos">
					<?php transto_search_code();?>
				</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>		
	</div>	
</div>	