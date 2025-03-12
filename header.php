<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package transto
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta
  name="description"
  content="transto is one of the best WP theme, There have many feature avaiable.">	
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <?php
	 if ( function_exists('wp_body_open') ) {
		wp_body_open();
	 }
global $transto_opt;
get_template_part('includes/twr_preloader'); 
/* body side social icon */
	 if (!empty($transto_opt['transto_header_display_social_hide']) && $transto_opt['transto_header_display_social_hide']==true): ?>
	<div class="em_slider_social">
		<ul>
			<?php transto_menu_social_icon();?>
		</ul>
	</div>
	<?php endif; ?>

<!-- MAIN WRAPPER START -->
<div class="wrapper">
	
<?php  
	$txbdm_toptsstas1 = get_post_meta( get_the_ID(),'_txbdm_toptsstas1', true );  
	$txbdm_box_menu = get_post_meta( get_the_ID(),'_txbdm_box_menu_style', true ); 
?>
<!-- MAIN HEADER START -->			
<?php if (!empty($transto_opt['transto_header_display_none_hide']) && $transto_opt['transto_header_display_none_hide']==true): ?>	
	<div class="transto_theme_harea hdisplay_none">
<?php else: ?>
	<div class="transto_theme_harea  <?php if(!empty($transto_opt['transto_header_posi_top']) && $transto_opt['transto_header_posi_top']==true){echo esc_attr('all_header_abs');}elseif($txbdm_toptsstas1==2){echo esc_attr('all_header_abs');}else{}; ?>   ">
<?php endif; ?>

<!-- HEADER TOP AREA -->
 <?php  $header_topa = get_post_meta( get_the_ID(),'_txbdm_header_topa', true );  
 if (!empty($transto_opt['transto_header_top_hide']) && $transto_opt['transto_header_top_hide']==true){ ?>		
		<div class="transto-header-top   <?php if(!empty($transto_opt['transto_box_layout']) && $transto_opt['transto_box_layout']=="htopt_boxi"){echo esc_attr('container');}elseif($txbdm_box_menu==2){echo esc_attr('container');}else{ }?>">					
			<div class="<?php if(!empty($transto_opt['transto_box_layout']) && $transto_opt['transto_box_layout']=="htopt_full"){echo esc_attr('container-fluid');}elseif($txbdm_box_menu==3){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">									
				 <?php
					/* Top menu style */					
					if(!empty($transto_opt['twr_top_right_layout']) && $transto_opt['twr_top_right_layout'] != 'h_top_l11'){
						$header_topstyle = $transto_opt['twr_top_right_layout'];
						get_template_part( 'template-parts/header/header-top/menu', $header_topstyle);					
					}
				?>
			</div>
		</div>
 <?php }else{
  if($header_topa==1){?> 
		<div class="transto-header-top   <?php if(!empty($transto_opt['transto_box_layout']) && $transto_opt['transto_box_layout']=="htopt_boxi"){echo esc_attr('container');}elseif($txbdm_box_menu==2){echo esc_attr('container');}else{ }?>">					
			<div class="<?php if(!empty($transto_opt['transto_box_layout']) && $transto_opt['transto_box_layout']=="htopt_full"){echo esc_attr('container-fluid');}elseif($txbdm_box_menu==3){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">									
				 <?php
					/* Top menu style */
					if(!empty($transto_opt['twr_top_right_layout']) && $transto_opt['twr_top_right_layout'] != 'h_top_l11'){
						$header_topstyle = $transto_opt['twr_top_right_layout'];
						get_template_part( 'template-parts/header/header-top/menu', $header_topstyle); 
					}
				?>
			</div>
		</div>
 <?php }elseif($header_topa==2){

 }else{}}?>

 

<!-- HEADER TOP 2 creative AREA -->

<?php  $toptsst = get_post_meta( get_the_ID(),'_txbdm_toptsst', true );    ?>
<div class="tx_top2_relative">
<div class="<?php if(!empty($transto_opt['transto_header_posi_top2']) && $transto_opt['transto_header_posi_top2']==true){echo esc_attr('all_header_abs');}elseif($txbdm_toptsstas1==3){echo esc_attr('all_header_abs');}else{};?>">
 <?php if (!empty($transto_opt['transto_header_top_two_hide']) && $transto_opt['transto_header_top_two_hide']==true){
	/* Top menu style */
	if(!empty($transto_opt['twr_top_two_layout']) && $transto_opt['twr_top_two_layout'] != 'h_middle1'){
		$header_middlestyle = $transto_opt['twr_top_two_layout'];
		get_template_part( 'template-parts/header/header-middle/menu', $header_middlestyle);	
	}
}else{ 
	if($toptsst==1){		 
		/* Top menu style */
		if(!empty($transto_opt['twr_top_two_layout']) && $transto_opt['twr_top_two_layout'] != 'h_middle1'){
			$header_middlestyle = $transto_opt['twr_top_two_layout'];
			get_template_part( 'template-parts/header/header-middle/menu', $header_middlestyle); 
		}			 

	}elseif($toptsst==2){ 
		
	}else{}  
	 
}?>	


<!-- Mobile Logo -->
<?php mobile_logo_display();?>



<!-- HEADER MAIN MENU AREA -->
<?php  $twr_menu_header_style = get_post_meta( get_the_ID(),'_txbdm_twr_menu_header_style', true ); ?>
<div class="tx_relative_m">
	<div class="<?php if(!empty($transto_opt['transto_header_posi_top3']) && $transto_opt['transto_header_posi_top3']==true){echo esc_attr('all_header_abs');}elseif($txbdm_toptsstas1==4){echo esc_attr('all_header_abs');}else{};?>">  
		<div class="mainmenu_width_tx  <?php if(!empty($transto_opt['transto_main_box_layout']) && $transto_opt['transto_main_box_layout']=="hmenul_boxi"){echo esc_attr('container');}elseif($txbdm_box_menu==2){echo esc_attr('container');}else{};?>">
		   <?php
		/* rudex main menu style */
		if(!empty($transto_opt['twr_defaulth_menu_layout']) && $transto_opt['twr_defaulth_menu_layout'] != 111){
			$headerstyle = $transto_opt['twr_defaulth_menu_layout'];
			get_template_part( 'template-parts/header/header-menu/header', $headerstyle); 
		}else{ 
		/* metabox main menu style */

			 if(!empty($twr_menu_header_style)){
				get_template_part( 'template-parts/header/header-menu/header', $twr_menu_header_style);			
			 }else{ 

			get_template_part( 'template-parts/header/header-menu/header', 'defaultm');

		} } ?>	
		 
		</div> 
	</div><!-- absulate div -->
</div> <!-- relative div -->

</div> <!-- top 2 absulate div -->
</div> <!--  top 2 relative div  extra -->



</div> <!-- END MAIN HEADER -->		
