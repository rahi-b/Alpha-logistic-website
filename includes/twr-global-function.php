<?php
/* theme fallback menu */
if (!function_exists('transto_fallback_menu'))
{

	function transto_fallback_menu()
	{ ?>
		<ul class="main-menu clearfix">
			<li><a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"><?php esc_html_e('Create Menu', 'transto'); ?></a></li>
		</ul>	
	<?php
	}
}

/* theme main menu */
if (!function_exists('transto_main_menu'))
{
	function transto_main_menu()
	{
		wp_nav_menu(array(
			'theme_location' => 'menu-1',
			'container' => false,
			'menu_class' => 'sub-menu',
			'fallback_cb' => 'transto_fallback_menu',
		));
	}
}

/* theme main menu */
if (!function_exists('transto_one_page_menu'))
{

	function transto_one_page_menu()
	{
		wp_nav_menu(array(
			'theme_location' => 'one-pages',
			'container' => false,
			'menu_class' => 'sub-menu nav_scroll',
			'fallback_cb' => 'transto_fallback_menu',
		));
	}
}

/* theme main menu */
if (!function_exists('transto_mobile_menu'))
{

	function transto_mobile_menu()
	{
		wp_nav_menu(array(
			'theme_location' => 'menu-3',
			'container' => false,
			'menu_class' => 'main-menu mobile_menu_item clearfix',
			'fallback_cb' => 'transto_fallback_menu',
		));
	}
}

/* theme logo 1 setting  */
if (!function_exists('transto_main_logo'))
{
	function transto_main_logo()
	{
		global $transto_opt;
		if (is_ssl())
		{
			if (!empty($transto_opt['transto_logo']['url']))
			{
				$transto_opt['transto_logo']['url'] = str_replace('http:', 'https:', $transto_opt['transto_logo']['url']);
			}
			if (!empty($transto_opt['transto_ts_logo']['url']))
			{
				$transto_opt['transto_ts_logo']['url'] = str_replace('http:', 'https:', $transto_opt['transto_ts_logo']['url']);
			}
		}
?>

	  <?php if (isset($transto_opt['transto_logo']['url']) && !empty($transto_opt['transto_logo']['url']))
		{ ?>	  
		<div class="logo">
			<a class="main_sticky_main_l" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
				<img src="<?php echo esc_url($transto_opt['transto_logo']['url']); ?>" alt="<?php bloginfo('name'); ?>" />
			</a>
			<a class="main_sticky_l" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
				<img src="<?php echo esc_url($transto_opt['transto_ts_logo']['url']); ?>" alt="<?php bloginfo('name'); ?>" />
			</a>
		</div>	  
	  <?php
		}
		else
		{ ?>
	  
			<div class="logo_area">
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1><?php
			$description = get_bloginfo('description', 'display');
			$description = get_bloginfo('description', 'display');
			if ($description || is_customize_preview()): ?>
				<p class="site-description"><?php echo esc_html($description); ?></p>
			<?php
			endif; ?>
			
			</div>	 					
	 
	<?php
		}
	}
}

/* theme logo 2 setting */
if (!function_exists('transto_onepage_logo'))
{
	function transto_onepage_logo()
	{
		global $transto_opt;
		if (is_ssl())
		{
			if (!empty($transto_opt['transto_onepage_logo']['url']))
			{
				$transto_opt['transto_onepage_logo']['url'] = str_replace('http:', 'https:', $transto_opt['transto_onepage_logo']['url']);
			}
			if (!empty($transto_opt['transto_ts_logo']['url']))
			{
				$transto_opt['transto_ts_logo']['url'] = str_replace('http:', 'https:', $transto_opt['transto_ts_logo']['url']);
			}
		}
?>
	  <?php if (isset($transto_opt['transto_onepage_logo']['url']))
		{ ?>	  
		<div class="logo">
			<a class="main_sticky_main_l"  href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
				<img src="<?php echo esc_url($transto_opt['transto_onepage_logo']['url']); ?>" alt="<?php bloginfo('name'); ?>" />
			</a>
			<a class="main_sticky_l" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
				<img src="<?php echo esc_url($transto_opt['transto_ts_logo']['url']); ?>" alt="<?php bloginfo('name'); ?>" />
			</a>			
		</div>	  
	  <?php
		}
	}
}
/* theme logo 3 setting */
if (!function_exists('transto_ts_logo'))
{
	function transto_ts_logo()
	{
		global $transto_opt;
		if (is_ssl())
		{
			if (!empty($transto_opt['transto_ts_logo']['url']))
			{
				$transto_opt['transto_ts_logo']['url'] = str_replace('http:', 'https:', $transto_opt['transto_ts_logo']['url']);
			}
		}
?>
		<?php if (isset($transto_opt['transto_ts_logo']['url']) && !empty($transto_opt['transto_ts_logo']['url']))
		{ ?>	  
		<div class="logo">
			<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
				<img src="<?php echo esc_url($transto_opt['transto_ts_logo']['url']); ?>" alt="<?php bloginfo('name'); ?>" />
			</a>		
		</div>	  
	  <?php
		}
	}
}
/* theme logo 4 for mobile */
if (!function_exists('transto_mobile_top_logo'))
{
	function transto_mobile_top_logo()
	{
		global $transto_opt;
		if (is_ssl())
		{
			if (!empty($transto_opt['transto_mobile_top_logo']['url']))
			{
				$transto_opt['transto_mobile_top_logo']['url'] = str_replace('http:', 'https:', $transto_opt['transto_mobile_top_logo']['url']);
			}
		}
		if (isset($transto_opt['transto_mobile_top_logo']['url']) && !empty($transto_opt['transto_mobile_top_logo']['url']))
		{ ?>
		<div class="mobile_menu_logo text-left">
			<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
				<img src="<?php echo esc_url($transto_opt['transto_mobile_top_logo']['url']); ?>" alt="<?php bloginfo('name'); ?>" />
			</a>		
		</div>
	  <?php
		}
		else
		{ ?>
			<div class="mobile_menu_logo text-left">
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			</div>			
		
		<?php
		}
	}
}

/* menu top login option */
if (!function_exists('transto_login'))
{
	function transto_login()
	{
		if (is_user_logged_in())
		{ ?>		
				<a title="Logout" href="<?php echo esc_url(wp_logout_url(get_permalink())); ?>"><i class="ti-back-right"></i> <?php esc_html_e('Logout', 'transto'); ?></a>			
			<?php
		}
		else
		{ ?>			
		<a title="Login"  href="<?php echo esc_url(wp_login_url(get_permalink())); ?>"><i class="ti-user"></i> <?php esc_html_e('Login', 'transto'); ?></a>
		<a title="Register" href="<?php echo esc_url(wp_registration_url(get_permalink())); ?>"><i class="ti-pencil-alt"></i> <?php esc_html_e('Register', 'transto'); ?></a>
		<?php
		}
	}
}
/* theme logo 2 setting */
if (!function_exists('twr_loding_logo'))
{
	function twr_loding_logo()
	{
		global $transto_opt;
		if (is_ssl())
		{
			if (!empty($transto_opt['pre_preloader_image']['url']))
			{
				$transto_opt['pre_preloader_image']['url'] = str_replace('http:', 'https:', $transto_opt['pre_preloader_image']['url']);
			}
		}
		if (isset($transto_opt['pre_preloader_image']['url']))
		{ ?>	  
		<div class="loding_logo">
				<img src="<?php echo esc_url($transto_opt['pre_preloader_image']['url']); ?>" alt="<?php bloginfo('name'); ?>" />			
		</div>	  
	  <?php
		}
	}
}
/*  main menu button */
if (!function_exists('transto_menu_button'))
{
	function transto_menu_button()
	{
		global $transto_opt;
		if (!empty($transto_opt['transto_header_button']))
		{ ?>
			<div class="donate-btn-header">
				<a class="dtbtn" href="<?php if (!empty($transto_opt['transto_header_button_url']))
			{
				echo esc_url($transto_opt['transto_header_button_url']);
			} ?>">
					<?php echo transto_kses_post($transto_opt['transto_header_button']); ?>	
				</a>	
			</div>	
		<?php
		}

	}
}
/* search menu option */
if (!function_exists('transto_search_code'))
{
	function transto_search_code()
	{
?>
			<div class="em-quearys-top msin-menu-search">
				<div class="em-top-quearys-area">
				   <div class="em-header-quearys">
						<div class="em-quearys-menu">
							<i class="ti-search t-quearys"></i>							
						</div>
					</div>
					<!--SEARCH FORM-->
					<div class="em-quearys-inner">
						<div class="em-quearys-form">
							<form class="top-form-control" action="<?php echo esc_url(home_url('/')); ?>" method="get">
									<input type="text" placeholder="<?php echo esc_attr_e('Type Your Keyword', 'transto') ?>" name="s" value="<?php the_search_query(); ?>" />
								<button class="top-quearys-style" type="submit">
									<i class="ti-search"></i>
								</button>
							</form>
							<div class="em-header-quearys-close text-center mrt10">
								<div class="em-quearys-menu">
									<i class="ti-close  t-close em-s-hidden"></i>
								</div>
							</div>											
						</div>
					</div>														
				</div>
			</div>				
	<?php
	}
}
/* menu social icons option */
if (!function_exists('transto_menu_social_icon'))
{
	function transto_menu_social_icon()
	{
		global $transto_opt;
		foreach ($transto_opt['transto_social_icons'] as $key => $value)
		{
			if ($value != '')
			{
				echo '<li><a class="' . esc_attr($key) . ' social-icon" href="' . esc_url($value) . '" title="' . ucwords(esc_attr($key)) . '" ><i class="ti-' . esc_attr($key) . '"></i></a></li>';
			}
		}

	}
}
/* top menu social icons option */
if (!function_exists('transto_topmenu_social_icon'))
{
	function transto_topmenu_social_icon()
	{
		global $transto_opt;
		foreach ($transto_opt['transto_social_icons'] as $key => $value)
		{
			if ($value != '')
			{
				echo '<a class="' . esc_attr($key) . ' social-icon" href="' . esc_url($value) . '" title="' . ucwords(esc_attr($key)) . '" ><i class="ti-' . esc_attr($key) . '"></i></a>';
			}
		}

	}
}

/*  BLOG SOCIAL SHARING LINKS  */

if (!function_exists('twr_sitepage_sharing'))
{
	function twr_sitepage_sharing()
	{
		global $post;

		$html = '<div class="transto-single-icon">';

		/* facebook */
		$facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . get_the_permalink();
		$html .= '<a href="' . esc_url($facebook_url) . '" target="_blank"><i class="ti-facebook"></i></a>';

		/* twitter */
		$twitter_url = 'https://twitter.com/share?' . esc_url(get_permalink()) . '&amp;text=' . get_the_title();
		$html .= '<a href="' . esc_url($twitter_url) . '" target="_blank"><i class="ti-twitter"></i></a>';

		/* google plus */
		$google_plus_url = 'https://plus.google.com/share?url=' . esc_url(get_permalink());
		$html .= '<a href="' . esc_url($google_plus_url) . '" target="_blank"><i class="ti-google"></i></a>';

		/* linkedin */
		$linkedin_url = 'http://www.linkedin.com/shareArticle?url=' . esc_url(get_permalink()) . '&amp;title=' . get_the_title();
		$html .= '<a href="' . esc_url($linkedin_url) . '" target="_blank"><i class="ti-linkedin"></i></a>';

		/* pinterest */
		$pinterest_url = 'https://pinterest.com/pin/create/bookmarklet/?url=' . esc_url(get_permalink()) . '&amp;description=' . get_the_title() . '&amp;media=' . esc_url(wp_get_attachment_url(get_post_thumbnail_id($post->ID)));
		$html .= '<a href="' . esc_url($pinterest_url) . '" target="_blank"><i class="ti-pinterest"></i></a>';

		/* reddit */
		$reddit_url = 'http://reddit.com/submit?url=' . esc_url(get_permalink()) . '&amp;title=' . get_the_title();
		$html .= '<a href="' . esc_url($reddit_url) . '" target="_blank"><i class="ti-reddit"></i></a>';

		$html .= '</div>';

		echo '' . $html;
	}
}

/* top menu address option */
if (!function_exists('transto_top_address_option'))
{
	function transto_top_address_option()
	{
		global $transto_opt;
?>
	<p class="d-flex align-items-center flex-wrap tx_coll">							
	<?php if (!empty($transto_opt['transto_header_top_road'])): ?>
	<span>
	<?php echo transto_kses_post($transto_opt['transto_header_top_i1']);
			echo transto_kses_post($transto_opt['transto_header_top_road']); ?></span>
	<?php
		endif;
		if (!empty($transto_opt['transto_header_top_mobile'])): ?>
	<a href="<?php esc_attr_e('tel:', 'transto') ?><?php echo esc_html($transto_opt['transto_header_top_mobile']); ?>">
	<?php echo transto_kses_post($transto_opt['transto_header_top_i2']);
			echo transto_kses_post($transto_opt['transto_header_top_mobile']); ?>
	</a>
	<?php
		endif;
		if (!empty($transto_opt['transto_header_top_email'])): ?>
	<a href="<?php esc_attr_e('mailto:', 'transto') ?><?php echo esc_html($transto_opt['transto_header_top_email']); ?>">
	<?php echo transto_kses_post($transto_opt['transto_header_top_i3']);
			echo transto_kses_post($transto_opt['transto_header_top_email']); ?>
	</a>
	<?php
		endif; ?>	
	</p>
<?php

	}
}
/* top menu address wellcome option */
if (!function_exists('transto_top_wellcome_option'))
{
	function transto_top_wellcome_option()
	{
		global $transto_opt;
		if (!empty($transto_opt['transto_header_top_wellcome'])): ?>		
		<span>
			<?php echo transto_kses_post($transto_opt['transto_header_top_i4']);
			echo transto_kses_post($transto_opt['transto_header_top_wellcome']);
?>	</span>	
	<?php
		endif;

	}
}
/* top menu address open time option */
if (!function_exists('transto_top_opening_option'))
{
	function transto_top_opening_option()
	{
		global $transto_opt;
?>
	<p>
		<?php if (!empty($transto_opt['transto_header_top_opening'])): ?>
			<span>
			<?php echo wp_kses($transto_opt['transto_header_top_i5'], array(
				'i' => array(
					'class' => array()
				) ,
			)); ?>										
			<?php echo esc_html($transto_opt['transto_header_top_opening']); ?></span>										
		<?php
		endif; ?>	
		
	</p>
	<?php

	}
}
/* top menu */
if (!function_exists('transto_topright_menu'))
{
	function transto_topright_menu()
	{
		if (has_nav_menu('menu-top'))
		{
			wp_nav_menu(array(
				'theme_location' => 'menu-top',
				'menu_class' => 'txmenu_top social-icons',
				'fallback_cb' => false,
				'container' => '',
			));
		}
	}
}
/* top 2 creative menu */
if (!function_exists('transto_top_crmenu_option'))
{
	function transto_top_crmenu_option()
	{
		if (has_nav_menu('menu-top'))
		{
			wp_nav_menu(array(
				'theme_location' => 'menu-top',
				'menu_class' => 'top_crmenu_l',
				'fallback_cb' => false,
				'container' => '',
			));
		}
	}
}
/* top 2 creative address 1 */
if (!function_exists('transto_top_craddress1_option'))
{
	function transto_top_craddress1_option()
	{
		global $transto_opt;
?>
	<div class="single_header_address">
		<div class="creative_header_icon">
			<?php echo transto_kses_post($transto_opt['transto_header_top_ci1']); ?>
		</div>
		<div class="creative_header_address_text">
		
		<?php if (!empty($transto_opt['transto_header_top_roadtwot'])): ?>										
					<h3><?php echo transto_kses_post($transto_opt['transto_header_top_roadtwot']); ?></h3>
		<?php
		endif; ?>		

		<?php if (!empty($transto_opt['transto_header_top_roadtwo'])): ?>										
					<p><?php echo transto_kses_post($transto_opt['transto_header_top_roadtwo']); ?></p>
		<?php
		endif; ?>											
		</div>
	</div>	
	<?php
	}
}
/* top 2 creative address 2 */
if (!function_exists('transto_top_craddress2_option'))
{
	function transto_top_craddress2_option()
	{
		global $transto_opt;
?>
	<div class="single_header_address">
		<div class="creative_header_icon">
			<?php echo transto_kses_post($transto_opt['transto_header_top_ci2']); ?>
		</div>
		<div class="creative_header_address_text">
		<?php if (!empty($transto_opt['transto_header_top_emailtwot'])): ?>										
					<h3><?php echo transto_kses_post($transto_opt['transto_header_top_emailtwot']); ?></h3>
		<?php
		endif; ?>	
			<?php if (!empty($transto_opt['transto_header_top_emailtwo'])): ?>
			<p><a href="<?php esc_attr_e('mailto:', 'transto') ?><?php echo esc_html($transto_opt['transto_header_top_emailtwo']); ?>"><?php echo transto_kses_post($transto_opt['transto_header_top_emailtwo']); ?></a></p>
		<?php
		endif; ?>																					
		</div>
	</div>	
	<?php
	}
}
/* top 2 creative menu address 3 */
if (!function_exists('transto_top_craddress3_option'))
{

	function transto_top_craddress3_option()
	{
		global $transto_opt;
?>
	<p class="d-flex align-items-center flex-wrap tx_coll">							
		<?php if (!empty($transto_opt['transto_header_top_roadtwo'])): ?>
			<span>
			<?php echo transto_kses_post($transto_opt['transto_header_top_ci1']); ?>
			<?php echo transto_kses_post($transto_opt['transto_header_top_roadtwo']); ?></span>
		<?php
		endif; ?>	
		<?php if (!empty($transto_opt['transto_header_top_mobiletwo'])): ?>
			<a href="<?php esc_attr_e('mailto:', 'transto') ?><?php echo esc_html($transto_opt['transto_header_top_mobiletwo']); ?>">
			<?php echo transto_kses_post($transto_opt['transto_header_top_ci3']); ?>										
			<?php echo transto_kses_post($transto_opt['transto_header_top_mobiletwo']); ?></a>
		<?php
		endif; ?>										
		<?php if (!empty($transto_opt['transto_header_top_emailtwo'])): ?>
			<a href="<?php esc_attr_e('tel:', 'transto') ?><?php echo esc_html($transto_opt['transto_header_top_emailtwo']); ?>">
			<?php echo transto_kses_post($transto_opt['transto_header_top_ci2']); ?>										
			<?php echo transto_kses_post($transto_opt['transto_header_top_emailtwo']); ?></a>
		<?php
		endif; ?>	
	</p>	
	<?php
	}
}
/* top 2 creative menu address 4 */
if (!function_exists('transto_top_craddress4_option'))
{
	function transto_top_craddress4_option()
	{
		global $transto_opt;
?>
	<div class="single_header_address ctrp">
		<div class="creative_header_icon">										
			<?php echo transto_kses_post($transto_opt['transto_header_top_ci3']); ?>
		</div>
		<div class="creative_header_address_text">
		<?php if (!empty($transto_opt['transto_header_top_mobiletwot'])): ?>										
					<h3><?php echo transto_kses_post($transto_opt['transto_header_top_mobiletwot']); ?></h3>
		<?php
		endif; ?>	
		<?php if (!empty($transto_opt['transto_header_top_mobiletwo'])): ?>
			<p><a href="<?php esc_attr_e('tel:', 'transto') ?><?php echo esc_html($transto_opt['transto_header_top_mobiletwo']); ?>"><?php echo transto_kses_post($transto_opt['transto_header_top_mobiletwo']); ?></a></p>
		<?php
		endif; ?>										
			
		</div>
	</div>
	<?php
	}
}
/* top 2 creative menu button */
if (!function_exists('transto_top_craddress_button'))
{
	function transto_top_craddress_button()
	{
		global $transto_opt;
		if (!empty($transto_opt['transto_header_buttonc1'])): ?>
		<div class="tx_menuc_btn text_m_center">
			<a class="top-btn-color tx_mc_btn" href="<?php if (!empty($transto_opt['transto_header_button_urlc1']))
			{
				echo esc_url($transto_opt['transto_header_button_urlc1']);
			} ?>">
				<?php echo transto_kses_post($transto_opt['transto_header_buttonc1']); ?>										
			</a>	
		</div>	
	<?php
		endif;
	}
}
/* top 2 creative menu button */
if (!function_exists('transto_top_craddress2_button'))
{
	function transto_top_craddress2_button()
	{
		global $transto_opt;
		if (!empty($transto_opt['transto_header_buttonc1'])): ?>
		<div class="creative_header_button">
			<a class="top-btn-color dtbtn" href="<?php if (!empty($transto_opt['transto_header_button_urlc1']))
			{
				echo esc_url($transto_opt['transto_header_button_urlc1']);
			} ?>">
				<?php echo transto_kses_post($transto_opt['transto_header_buttonc1']); ?>									
			
			</a>	
		</div>	
	<?php
		endif;
	}
}
if (!function_exists('transto_right_side_menu'))
{
	function transto_right_side_menu()
	{
		global $transto_opt;
?>

		   <div class="right_popupmenu_area">
			   <div class="right_side_icon">
					<div class="right_sideber_menu">
						<i class="ti-menu openclass"></i>
					</div>
				</div>
				<!--SEARCH FORM-->
				<div class="right_sideber_menu_inner">
					<div class="right_sideber_content">
					<?php if (is_active_sidebar('sidebar-pop'))
		{ ?>
						<div class="sidebar-right content-widget pdsr">
							<div class="blog-left-side transto_s_color transto_theme_widget">										
								<?php dynamic_sidebar('sidebar-pop'); ?>								
							</div>
						</div>
					<?php
		} ?>
						<div class="right_side_icon right_close_class">
							<div class="right_sideber_menu">
								<i class="ti-close closeclass"></i>
							</div>
						</div>											
					</div>
				</div>													
			</div>													
						
	<?php
	}
}
if (!function_exists('mobile_logo_display'))
{
	function mobile_logo_display()
	{
		global $transto_opt;
?>

<div class="mobile_logo_area">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<div class="mobilemenu_con">
				<?php transto_mobile_top_logo(); ?>
					<div class="mobile_menu_option">
						<div class="mobile_menu_o mobile_opicon">
							<i class="ti-menu openclass"></i>
						</div>
					<!--SEARCH FORM-->
					<div class="mobile_menu_inner mobile_p">
						<div class="mobile_menu_content">
							<?php transto_mobile_top_logo(); ?>
							<div class="menu_area mobile-menu ">
								<nav>
									<?php transto_mobile_menu(); ?>
								</nav>
							</div>

							<?php if (is_active_sidebar('sidebar-pop'))
		{ ?>
								<div class="sidebar-right content-widget pdsr">
									<div class="blog-left-side transto_s_color transto_theme_widget">										
										<?php dynamic_sidebar('sidebar-pop'); ?>								
									</div>
								</div>
							<?php
		} ?>
							<div class="mobile_menu_o mobile_cicon">
								<i class="ti-close closeclass"></i>
							</div>
						</div>	
			
						
					</div>
						<div class="mobile_overlay"></div>
				</div>		
				
			</div>
		
			</div>	
			
		</div>
	</div>
</div>
												
						
	<?php
	}
}

/* main menu code */
if (!function_exists('transto_left_side_menu'))
{
	function transto_left_side_menu()
	{
		global $transto_opt;
?>
		   <div class="right_popupmenu_area">
			   <div class="right_side_menu_icon">
					<div class="right_sideber_menu">
						<i class="ti-menu openclass"></i>
					</div>
				</div>
				<!--SEARCH FORM-->
				<div class="right_sideber_menu_inner">
					<div class="right_sideber_content">
						<div class="blog-left-side">
							<?php transto_main_logo(); ?>
							<?php dynamic_sidebar('sidebar-pop'); ?>
						</div>					
						<div class="right_side_icon right_close_class">
							<div class="right_sideber_menu">
								<i class="ti-close closeclass"></i>
							</div>
						</div>											
					</div>
				</div>													
			</div>													
						
	<?php
	}
}

/* Blog post meta */
if (!function_exists('transto_blog_post_meta'))
{
	function transto_blog_post_meta()
	{
		global $transto_opt;
		if (!empty($transto_opt['transto_blog_post_meta']) && $transto_opt['transto_blog_post_meta'] == true)
		{

		}
		else
		{ ?>
	<div class="transto_meta">
			<span><i class="ti-timer"></i> <?php echo get_the_time(get_option('date_format')); ?></span>
			
		<?php if (comments_open() || get_comments_number())
			{ ?>
			<span><a href="<?php comments_link(); ?>"><i class="ti-comment"></i> <?php comments_number(esc_html__('0 Comments', 'transto') , esc_html__('1 Comment', 'transto') , esc_html__('% Comments', 'transto')); ?>
			</a></span>					
		<?php
			}
			else
			{ ?>
			<span><i class="ti-comment"></i> <?php echo esc_html__('Comments Off', 'transto'); ?></span>
		<?php
			} ?>						
	</div>	
	<?php
		}
	}
}

/* Blog single post meta */
if (!function_exists('transto_blog_singlepost_meta'))
{
	function transto_blog_singlepost_meta()
	{
		global $transto_opt;
		if (!empty($transto_opt['transto_blog_post_meta']) && $transto_opt['transto_blog_post_meta'] == true)
		{

		}
		else
		{
			if ('post' == get_post_type())
			{ ?>

	<div class="transto_meta">
			<span><i class="ti-timer"></i> <?php echo get_the_time(get_option('date_format')); ?></span>
			<span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID') , get_the_author_meta('user_nicename')); ?>"><i class="ti-user"></i> <?php the_author(); ?></a></span>
		<?php if (comments_open() || get_comments_number())
				{ ?>
			<span><a href="<?php comments_link(); ?>"><i class="ti-comment"></i> <?php comments_number(esc_html__('0 Comments', 'transto') , esc_html__('1 Comment', 'transto') , esc_html__('% Comments', 'transto')); ?>
			</a></span>					
		<?php
				}
				else
				{ ?>
			<span><i class="ti-comment"></i> <?php echo esc_html__('Comments Off', 'transto'); ?></span>
		<?php
				} ?>						
	</div>			
		<?php
			}

		}
	}
}

/* Blog single post meta */
if (!function_exists('transto_blog_btn'))
{
	function transto_blog_btn()
	{
		global $transto_opt;
		if (!empty($transto_opt['transto_blog_btn_text']))
		{
		?>
		<div class="blog_readmore"><a class="pbtn" href="<?php the_permalink(); ?>"><?php echo esc_html($transto_opt['transto_blog_btn_text']); ?></a></div>
		<?php
		}elseif(empty($transto_opt['transto_blog_btn_text'])){
			
		}
		else
		{ ?> 
		<div class="blog_readmore"><a class="pbtn" href="<?php the_permalink(); ?>">
		<?php esc_html_e('Reading Now', 'transto'); ?></a></div>
		<?php
		}
	}
}

if (!function_exists('transto_single_tags'))
{
	function transto_single_tags()
	{

		$transto_single_btag = get_the_tags(get_the_id());
		if (!is_array($transto_single_btag))
		{
			return;
		} ?>
		<div class="transto_sblog_tag d-block d-sm-flex justify-content-between align-items-center">
			 <ul>
				<?php foreach ($transto_single_btag as $tag): ?>
				   <li><a href="<?php echo esc_url(get_tag_link($tag)); ?>"> <?php echo esc_html($tag->name); ?></a></li>
				<?php
		endforeach; ?>   
			 </ul>
		</div>	
<?php
	}
}

/* transto comment form */
add_filter('comment_form_default_fields', 'transto_comments_form');
if (!function_exists('transto_comments_form'))
{
	function transto_comments_form($default)
	{
		$default['author'] = '<div  class="comment_forms from-area"><div  class="comment_forms_inner">
			
			<div class="comment_field">
			<div class="row">
				<div class="col-md-6 form-group">
					<input id="name" class="form-control" name="author" type="text" placeholder="Your Name*"/>
				</div>';

		$default['email'] = '
				<div class="col-md-6 form-group">				
					<input id="email" class="form-control"  name="email" type="text" placeholder="Email Address*"/>
				</div> 
			</div>';

		$default['phone'] = '
				<div class="row">
					<div class="col-md-6 form-group">				
						<input id="phone" class="form-control"  name="phone" type="text" placeholder="Phone Number"/>
					</div> 
				';
		$default['title'] = '
				<div class="col-md-6 form-group">
					<input id="title" class="form-control" name="url" type="text" placeholder="Your Website"/>
				</div>   
				</div>   
			</div>  ';
		$default['url'] = '';
		$default['message'] = '<div class="comment_field"><div class="textarea-field"><textarea name="comment" id="comment" cols="30" rows="10" class="form-control" placeholder="Write your comment*..."></textarea></div></div>   </div></div>';

		return $default;
	}
}
add_filter('comment_form_defaults', 'transto_form_default');

if (!function_exists('transto_form_default'))
{
	function transto_form_default($default_info)
	{
		if (!is_user_logged_in())
		{
			$default_info['comment_field'] = '';
		}
		else
		{
			$default_info['comment_field'] = '<div  class="comment_forms"><div  class="comment_forms_inner"> <div class="comment_field"><div class="textarea-field"><textarea name="comment" id="comment" class="form-control" cols="30" rows="10" placeholder="Write your comment..."></textarea></div></div> </div></div>';
		}

		$default_info['submit_button'] = '<button class="comment_transto_btn btn btn-primary button" type="submit">' . esc_html__('Post Comment', 'transto') . '</button>';
		$default_info['submit_field'] = '%1$s %2$s';
		$default_info['comment_notes_before'] = ' ';
		$default_info['title_reply'] = esc_html__('Leave A Comment ', 'transto');
		$default_info['title_reply_before'] = '<div class="commment_title"><h3 class="pocket_com_title"> ';
		$default_info['title_reply_after'] = '</h3></div> ';

		return $default_info;
	}

}

/*transto comment show*/
if (!function_exists('transto_comment'))
{
	function transto_comment($comment, $arg, $depth)
	{
		$GLOBALS['comment'] = $comment;
?>

		<!-- connent reply -->		
		<div class="post_comment">
			<div class="comment_inner">
				<div class="post_replay">
					<div class="post_replay_content">											
						<div class="post_replay_inner" id="comment-<?php comment_ID(); ?>">

							<div class="post_reply">
								<div class="transto_cauthor_tumb">
									<div class="transto_reply_thumb">
										 <?php echo get_avatar($comment, 35); ?>
									</div>
									<div class="transto_cadate">
										<div class="transto_cauthor_name">
										<a href="<?php echo get_author_posts_url(get_the_author_meta('ID') , get_the_author_meta('user_nicename')); ?>"><?php echo get_comment_author(); ?></a>
										</div>
										<div class="transto_cauthor_date">
										<span class="span_left"><?php echo get_comment_date(get_option('date_format')); ?></span>
										</div>
									</div>			
								</div>
							
							
							

								<div class="reply_date">
									<?php
		comment_reply_link(array_merge($arg, array(
			'reply_text' => '<span class="span_right">' . esc_html__('Reply', 'transto') . '</span>',
			'depth' => $depth,
			'max_depth' => $arg['max_depth']
		))); ?>   
									
								</div>
								<div class="transto_com_content"><?php comment_text(); ?></div>
								<div class="edit_comment"><?php edit_comment_link(esc_html__('(Edit)', 'transto') , '<small class="ecome">', '</small>') ?></div>
							</div>
							
						</div>
					</div>																
				</div>
			</div>
		</div>		
	
		<?php
	}
}

/**
 * Add color styling from theme
 */

if (!function_exists('transto_inline_styles'))
{
	function transto_inline_styles()
	{
		global $transto_opt;
		 $lheight = $logoheight = $lwidth = $logoweight = $linheight = $lmtop = $transto_br_from = $transto_br_to = $transto_br_overly = $menu_bt_from = $menu_bt_to = $menu_bt_bg = $menu_bth_from = $menu_bth_to = $menu_bth_bg = $footer_wc_from = $footer_wc_to = $footer_wc_bg = $menu_top_from = $menu_top_to = $menu_top_bg = '';
		$pprimary = $primary_color ="";
		$pprimary_h = $primary_hcolor ="";
		$galborder = $galborder_color ="";
		$galborderh = $galborder_hcolor ="";
		$gbtn_link = $gbtn_linkcolor ="";
		$gtitle = $gtitle_color ="";
		$gpra = $gpra_color ="";
		$white = $white_color ="";
		$galboxs = $galboxsc ="";
		$galbgov = $galbgovc ="";
		if (!empty($transto_opt['transto_gprimary']))
		{
			$pprimary = $transto_opt['transto_gprimary'];
			$primary_color = "--brcolor:{$pprimary}";
		}		
		if (!empty($transto_opt['transto_ghprimary']))
		{
			$pprimary_h = $transto_opt['transto_ghprimary'];
			$primary_hcolor = "--black:{$pprimary_h}";
		}
		if (!empty($transto_opt['transto_alborder']))
		{
			$galborder = $transto_opt['transto_alborder'];
			$galborder_color = "--bdcolor:{$galborder}";
		}
		if (!empty($transto_opt['transto_alborderh']))
		{
			$galborderh = $transto_opt['transto_alborderh'];
			$galborder_hcolor = "--bdhcolor:{$galborderh}";
		}		
		if (!empty($transto_opt['transto_linkabtn']))
		{
			$gbtn_link = $transto_opt['transto_linkabtn'];
			$gbtn_linkcolor = "--linkcolor:{$gbtn_link}";
		}		

		if (!empty($transto_opt['transto_altitle']))
		{
			$gtitle = $transto_opt['transto_altitle'];
			$gtitle_color = "--titlecolor:{$gtitle}";
		}
		if (!empty($transto_opt['transto_alpra']))
		{
			$gpra = $transto_opt['transto_alpra'];
			$gpra_color = "--pracolor:{$gpra}";
		}		
		if (!empty($transto_opt['transto_alwhite']))
		{
			$white = $transto_opt['transto_alwhite'];
			$white_color = "--white:{$white}";
		}			
		if (!empty($transto_opt['transto_allopcity']['rgba']))
		{
			$galboxs = $transto_opt['transto_allopcity']['rgba'];
			$galboxsc = "--bshadow:{$galboxs}";
		}		
		if (!empty($transto_opt['transto_galbgo']['rgba']))
		{
			$galbgov = $transto_opt['transto_galbgo']['rgba'];
			$galbgovc = "--bropacity:{$galbgov}";
		}

		if (!empty($transto_opt['transto_logo_height']))
		{
			$lheight = $transto_opt['transto_logo_height'];
			$logoheight = "height:{$lheight}";
		}
		if (!empty($transto_opt['transto_logo_widget']))
		{
			$lwidth = $transto_opt['transto_logo_widget'];
			$logoweight = "width:{$lwidth}";
		}
		if (!empty($transto_opt['transto_line_height']))
		{
			$linheight = $transto_opt['transto_line_height'];
			$lmtop = "margin-top:{$linheight}";
		}
		/* Top Menu Background  Gradient */
		if (!empty($transto_opt['top_menu_gr']))
		{
			$menu_top_from = $transto_opt['top_menu_gr']['from'];
			$menu_top_to = $transto_opt['top_menu_gr']['to'];
			$menu_top_bg = "background: linear-gradient(-45deg, {$menu_top_from}, {$menu_top_to});";
		}
		/* Button Background  Gradient */
		if (!empty($transto_opt['button_bg_gr']))
		{
			$menu_bt_from = $transto_opt['button_bg_gr']['from'];
			$menu_bt_to = $transto_opt['button_bg_gr']['to'];
			$menu_bt_bg = "background: linear-gradient(-45deg, {$menu_bt_from}, {$menu_bt_to});";
		}
		/* Button Hover Background Gradient */
		if (!empty($transto_opt['button_bgh_gr']))
		{
			$menu_bth_from = $transto_opt['button_bgh_gr']['from'];
			$menu_bth_to = $transto_opt['button_bgh_gr']['to'];
			$menu_bth_bg = "background: linear-gradient(-45deg, {$menu_bth_from}, {$menu_bth_to});";
		}
		/* Widget and Cppyright Background Gradient */
		if (!empty($transto_opt['footer_wcs_gr']))
		{
			$footer_wc_from = $transto_opt['footer_wcs_gr']['from'];
			$footer_wc_to = $transto_opt['footer_wcs_gr']['to'];
			$footer_wc_bg = "background: linear-gradient(-45deg, {$footer_wc_from}, {$footer_wc_to});";
		}

		/* Breadcumb Background Overlay Gradient */
		if (!empty($transto_opt['transto_breadcumb_overlay_gr']))
		{
			$transto_br_from = $transto_opt['transto_breadcumb_overlay_gr']['from'];
			$transto_br_to = $transto_opt['transto_breadcumb_overlay_gr']['to'];
			$transto_br_overly = "background: linear-gradient(-45deg, {$transto_br_from}, {$transto_br_to});";
		}

		wp_register_style('transto-breadcrumb', false);
		wp_enqueue_style('transto-breadcrumb');
		$inlinewp_css = " .transto-header-top{ {$menu_top_bg} } .logo img { {$logoheight}; {$logoweight}; } .logo a{ {$lmtop} }  .breadcumb-area::before, .breadcumb-blog-area::before{ {$transto_br_overly} } a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i,.mini_shop_content a span.count{ {$menu_bt_bg} } a.dtbtn:hover,.creative_header_button .dtbtn:hover,.em-quearys-menu i:hover,.mini_shop_content a span.count:hover{ {$menu_bth_bg} } .witrfm_area.witrfm_area{ {$footer_wc_bg} }

			:root{
				{$primary_color}; /* brand color */
				{$primary_hcolor}; /* brand hover color */
				{$galborder_color}; /* border color */
				{$galborder_hcolor}; /* border hover color */
				{$gbtn_linkcolor};  /* button & Link color */
				{$gpra_color}; /* pragrap/body color */
				{$gtitle_color}; /* title color */
				{$white_color}; /* white color */
				{$galboxsc}; /* opacity color box shadow */ 
				{$galbgovc}; /* brand opacity color */ 
			}


		";

		wp_add_inline_style('transto-breadcrumb', $inlinewp_css);
	}
}
add_action('wp_enqueue_scripts', 'transto_inline_styles', 200);

/**
 * Print pagination
 *
 * @param    array           $args           Arguments for this function, including 'query', 'range'
 * @param    string         $wrapper        Type of html wrapper
 * @param    string         $wrapper_class  Class of HTML wrapper
 * @echo     string                          Post Meta HTML
 */
if (!function_exists('transto_pagination'))
{
	function transto_pagination($args = NULL, $wrapper = 'div', $wrapper_class = 'paginations')
	{

		/* Set up some globals*/
		global $wp_query, $paged;

		/* Get the current page*/
		if (empty($paged)) $paged = (get_query_var('page') ? get_query_var('page') : 1);

		/* Set a large number for the 'base' argument*/
		$big = 99999;

		/* Get the correct post query*/
		if (!isset($args['query']))
		{
			$use_query = $wp_query;
		}
		else
		{
			$use_query = $args['query'];
		} ?>

		<<?php echo esc_html($wrapper); ?> class="<?php echo esc_html($wrapper_class); ?>">
			<?php echo paginate_links(array(
			'base' => str_replace($big, '%#%', get_pagenum_link($big)) ,
			'prev_next' => true,
			'mid_size' => (isset($args['range']) ? $args['range'] : 5) ,
			'prev_text' => is_rtl() ? '<i class="ti-angle-right"></i>' : '<i class="ti-angle-left"></i>',
			'next_text' => is_rtl() ? '<i class="ti-angle-left"></i>' : '<i class="ti-angle-right"></i>',
			'type' => 'list',
			'current' => $paged,
			'total' => $use_query->max_num_pages
		)); ?>
		</<?php echo esc_html($wrapper); ?>>
	<?php
	}
} /* transto_pagination*/


if (!function_exists('transto_slider_o'))
{
	function transto_slider_o($file_list_meta_key, $img_size = 'full')
	{

		/* Get the list of files*/
		$files = get_post_meta(get_the_ID() , $file_list_meta_key, 1);

		/* Loop through them and output an image*/
		foreach ((array)$files as $attachment_id => $attachment_url)
		{
			echo '<div class="gitem">';
			echo wp_get_attachment_image($attachment_id, $img_size);
			echo '</div>';
		}
	}
}

/*Disables the block editor from managing widgets in the Gutenberg plugin.*/
add_filter('gutenberg_use_widgets_block_editor', '__return_false', 100);
/* Disables the block editor from managing widgets.*/
add_filter('use_widgets_block_editor', '__return_false');

/*------------------------------
    POST PASSWORD FORM
-------------------------------*/
if (!function_exists('transto_password_form'))
{
	function transto_password_form($form)
	{
		global $post;
		$label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
		$form = '<form class="transto_pass_protect" action="' . esc_url(home_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
                       <span>' . esc_html__("To view this protected post, enter the password below:", 'transto') . '</span>
                       <input class="form-control passwidth" name="post_password" id="' . $label . '" type="password"  placeholder="' . esc_attr__("Enter Password", 'transto') . '"><button class="btn btn-primary mb-2" type="submit" name="Submit">' . esc_attr__("Submit", 'transto') . '</button>
                   </form>';

		return $form;
	}
}

add_filter('the_password_form', 'transto_password_form');

/*------------------------------
    Main Menu Header Countdown
-------------------------------*/
function header_countdown(){ 
	global $transto_opt; ?>
    <div id="anyday_header" class="any_day_header d-flex align-items-center"></div>
	<script type="text/javascript">
		jQuery(function($){
			var countDownDate = new Date("<?php echo esc_html($transto_opt['mmenu_countday']); ?>").getTime();var x = setInterval(function(){var now=(new Date).getTime(),distance=countDownDate-now,days=Math.floor(distance/864e5),hours=Math.floor(distance%864e5/36e5),minutes=Math.floor(distance%36e5/6e4),seconds=Math.floor(distance%6e4/1e3);
			document.getElementById("anyday_header").innerHTML='<div class="tx_any d-flex"><span>'+days+'</span><p>D</p></div><div class="tx_any d-flex"><span>'+hours+'</span><p>H</p></div><div class="tx_any d-flex"><span>'+minutes+'</span><p>M</p></div><div class="tx_any d-flex"><span>'+seconds+'</span><p>S</p></div>';}, 1000);	
		});
	</script>
<?php }


/**
 * @param string  $content   Text content to filter.
 * @return string Filtered content containing only the allowed HTML.
 *
 */
if (!function_exists('transto_kses_post'))
{
	function transto_kses_post($content)
	{
		$allowed_tag = array(
			'strong' => [],
			'br' => [],
			'p' => ['class' => [],
			'style' => [],
			],
			'i' => ['class' => [],
			'style' => [],
			],
			'ul' => ['class' => [],
			'style' => [],
			],
			'li' => ['class' => [],
			'style' => [],
			],
			'span' => ['class' => [],
			'style' => [],
			],
			'a' => ['href' => [],
			'class' => []],
			'div' => ['class' => [],
			'style' => [],
			],
			'h1' => ['class' => [],
			'style' => []],
			'h2' => ['class' => [],
			'style' => []],
			'h3' => ['class' => [],
			'style' => []],
			'h4' => ['class' => [],
			'style' => []],
			'h5' => ['class' => [],
			'style' => []],
			'h6' => ['class' => [],
			'style' => []],
			'img' => ['class' => [],
			'style' => [],
			'height' => [],
			'width' => [],
			'src' => [],
			'srcset' => [],
			'alt' => [],
			],

		);
		return wp_kses($content, $allowed_tag);
	}
}

