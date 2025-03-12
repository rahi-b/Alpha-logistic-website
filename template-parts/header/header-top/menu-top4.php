<?php 
/*
* header top 1 
*/
global $transto_opt;
?>
<div class="row">
	<!-- TOP LEFT -->
	<div class="col">
		<div class="top-address top-right-menu tx_coll d-flex align-items-center justify-content-center flex-wrap <?php echo $transto_opt['topflex_select'];?>">
			<?php if (!empty($transto_opt['top_address_hide']==true)): ?>
				<?php transto_top_address_option();?>
			<?php endif; ?>
			<?php if (!empty($transto_opt['top_opening_hide']==true)): ?>
				<?php transto_top_opening_option();?>
			<?php endif; ?>
			<?php if (!empty($transto_opt['top_opening_hide']==true)): ?>
				<?php transto_top_opening_option();?>
			<?php endif; ?>		
			<?php if (!empty($transto_opt['top_welcome_hide']==true)): ?>	
			<div class="top-welcome">
				<p><?php transto_top_wellcome_option();?></p>
			</div>			
			<?php endif; ?>
			<?php if (!empty($transto_opt['top_login_hide']==true)): ?>
			<div class="top-address em-login">
				<p><?php transto_login();?></p>
			</div>	
			<?php endif; ?>			
			<?php if (!empty($transto_opt['top_menu_hide']==true)): ?>
				<?php transto_topright_menu(); ?>
			<?php endif; ?>
			<?php if (!empty($transto_opt['top_icon_hide']==true)): ?>
			<ul class="social-icons text-right">
				<?php transto_menu_social_icon();?>
			</ul>
			<?php endif; ?>			
			<?php if (!empty($transto_opt['top_search_hide']==true)): ?>
			<div class="ossos">
				<?php transto_search_code();?>
			</div>
			<?php endif; ?>

	    </div>	
	</div>	
</div>	