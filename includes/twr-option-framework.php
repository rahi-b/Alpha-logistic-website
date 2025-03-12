<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if (!class_exists('Redux'))
{
    return;
}

/* This is your option name where all the Redux data is stored.*/
$opt_name = "transto_opt";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 *
 */

$theme = wp_get_theme(); /* For use with some settings. Not necessary.*/
$args = array(
    /* TYPICAL -> Change these values as you need/desire*/
    'opt_name' => $opt_name,
    /* This is where your data is stored in the database and also becomes your global variable name.*/
    'display_name' => $theme->get('Name') ,
    /* Name that appears at the top of your panel*/
    'display_version' => $theme->get('Version') ,
    /* Version that appears at the top of your panel*/
    'menu_type' => 'submenu',
    /*Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)*/
    'allow_sub_menu' => true,
    /* Show the sections below the admin menu item or not*/
    'menu_title' => esc_html__('transto Theme Options', 'transto') ,
    'page_title' => esc_html__('transto Theme Options', 'transto') ,
    /* You will need to generate a Google API key to use this feature.*/
    /* Please visit: https://developers.google.com/fonts/docs/developer_api#Aut*/
    'google_api_key' => '',
    /* Set it you want google fonts to update weekly. A google_api_key value is required.*/
    'google_update_weekly' => false,
    /* Must be defined to add google fonts to the typography module*/
    'async_typography' => true,
    /* Use a asynchronous font on the front end or font string*/
    /*'disable_google_fonts_link' => true, */                   /* Disable this in case you want to create your own google fonts loader*/
    'admin_bar' => true,
    /* Show the panel pages on the admin bar*/
    'admin_bar_icon' => 'dashicons-portfolio',
    /* Choose an icon for the admin bar menu*/
    'admin_bar_priority' => 50,
    /* Choose an priority for the admin bar menu*/
    'global_variable' => '',
    /* Set a different name for your global variable other than the opt_name*/
    'dev_mode' => false,
    /* Show the time the page took to load, etc*/
    'update_notice' => false,
    /* If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo*/
    'customizer' => false,
    /* Enable basic customizer support*/
    /*'open_expanded'     => true, */                   /* Allow you to start the panel in an expanded way initially.*/
    /*'disable_save_warn' => true,  */                  /* Disable the save warning when a user changes a field*/
    /* OPTIONAL -> Give you extra features*/
    'page_priority' => null,
    /* Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.*/
    'page_parent' => 'themes.php',
    /* For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters*/
    'page_permissions' => 'manage_options',
    /* Permissions needed to access the options panel.*/
    'menu_icon' => '',
    /* Specify a custom URL to an icon*/
    'last_tab' => '',
    /* Force your panel to always open to a specific tab (by id)*/
    'page_icon' => 'icon-themes',
    /* Icon displayed in the admin panel next to your menu_title*/
    'page_slug' => '',
    /* Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided*/
    'save_defaults' => true,
    /* On load save the defaults to DB before user clicks save or not*/
    'default_show' => false,
    /* If true, shows the default value next to each field that is not the default value.*/
    'default_mark' => '',
    /* What to print by the field's title if the value shown is default. Suggested: * */
    'show_import_export' => true,
    /* Shows the Import/Export panel when not used as a field.*/
    /* CAREFUL -> These options are for advanced use only*/
    'transient_time' => 60 * MINUTE_IN_SECONDS,
    'output' => true,
    /* Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output*/
    'output_tag' => true,
    /* Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head*/
    /* 'footer_credit'     => '',                   /* Disable the footer credit of Redux. Please leave if you can help it.*/
    /* FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.*/
    'database' => '',
    /* possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!*/
    'use_cdn' => true,
    /* If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.*/
    /* HINTS */
    'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'red',
            'shadow' => true,
            'rounded' => false,
            'style' => '',
        ) ,
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ) ,
        'tip_effect' => array(
            'show' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'mouseover',
            ) ,
            'hide' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'click mouseleave',
            ) ,
        ) ,
    )
);

Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
*/
/*
 *
 * ---> START SECTIONS
 *
*/

/*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


*/

/* -> START Basic Fields*/
Redux::setSection($opt_name, array(
    'title' => esc_html__('Genarel Option', 'transto') ,
    'id' => 'wellgoption',
    'icon' => 'el-icon-cog',
    'fields' => array(
        array(
            'id' => 'dfgfdgdf',
            'type' => 'info',
            'title' => esc_html__('Welcome Our Theme Option', 'transto') ,
        ) ,
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Global Color Option', 'transto') ,
    'id' => 'main_logo_id',
    'customizer_width' => '400px',
    'icon' => 'el-icon-cog',
    'fields' => array(
        array(
            'id' => 'transto_nnotice_typography',
            'type' => 'info',
            'title' => esc_html__('Welcome Our Global Color Option', 'transto') ,
        ) ,
        array(
            'id' => 'transto_nnoticec_typography',
            'type' => 'info',
            'title' => esc_html__('Note: you can change theme color 2 ways. One Global Option. if you set any color from here, it will show everywhere and second option is Every Section. you need to go every section area. there you can find the color option and you need change the color there.', 'transto') ,
        ) ,
    )
));

/*========================
transto Typography FIELD
=========================*/
Redux::setSection($opt_name, array(
    'title' => esc_html__('Global Typography', 'transto') ,
    'id' => 'transto_tyfo_page',
    'icon' => 'el el-circle-arrow-right',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'transto_gbtf',
            'type' => 'typography',
            'title' => esc_html__('Global Body Typography', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'line-height' => false,
            'text-align' => false,
            'color' => false,
            'output' => array(
                '
						body,p						
					'
            ) ,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto') ,
            'default' => array(
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
            ) ,
        ) ,
        array(
            'id' => 'transto_ghtf',
            'type' => 'typography',
            'title' => esc_html__('Global Heading Typography', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'line-height' => false,
            'text-align' => false,
            'color' => false,
            'output' => array(
                '
						h1,
						h2,
						h3,
						h4,
						h5,
						h6,
						h1 a,
						h2 a,
						h3 a,
						h4 a,
						h5 a,
						h6 a,
						.transto_cauthor_name a		
					'
            ) ,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto') ,
            'default' => array(
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
            ) ,
        ) ,
        array(
            'id' => 'transto_gmtf',
            'type' => 'typography',
            'title' => esc_html__('Global Menu Typography', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'line-height' => false,
            'text-align' => false,
            'color' => false,
            'output' => array(
                '.transto_menu > ul > li > a,.transto_menu ul .sub-menu li a						
				'
            ) ,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto') ,
            'default' => array(
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
            ) ,
        ) ,
        array(
            'id' => 'transto_gbtnf',
            'type' => 'typography',
            'title' => esc_html__('Global Button Typography', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'line-height' => false,
            'text-align' => false,
            'color' => false,
            'font-size' => false,
            'output' => array(
                '
						button,a.btn,a.dtbtn,.btn,.learn_btn,.witr_feature_btn_f a,.witr_feature_btn_3d a,.feature_btn a,.witr_ser_btnb a,.service-btn > a,.witr_btn,.witr_bbtn,.witr_gbtn,.witr_gbbtn,.transto_button a,.witr_sbtn_s8 a,
						.blog_readmore a						
					'
            ) ,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto') ,
            'default' => array(
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
            ) ,
        ) ,

    ) ,
));

/*  global color */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Global Color', 'transto') ,
    'id' => 'twr_title_option',
    'subsection' => true,
    'icon' => 'el el-circle-arrow-right',
    'fields' => array(
	
        array(
            'id' => 'transto_gprimary',
            'type' => 'color',
            'title' => esc_html__('Theme Color', 'transto') ,
            'default' => ''
        ),	
        array(
            'id' => 'transto_ghprimary',
            'type' => 'color',
            'title' => esc_html__('Theme Hover Color', 'transto') ,
            'default' => ''
        ),
        array(
            'id' => 'transto_alborder',
            'type' => 'color',
            'title' => esc_html__('Theme Border Color', 'transto') ,
            'default' => ''
        ),
        array(
            'id' => 'transto_alborderh',
            'type' => 'color',
            'title' => esc_html__('Theme Border Hover Color', 'transto') ,
            'default' => ''
        ),
        array(
            'id' => 'transto_linkabtn',
            'type' => 'color',
            'title' => esc_html__('Theme Button & Link Color', 'transto') ,
            'default' => ''
        ),		
        array(
            'id' => 'transto_altitle',
            'type' => 'color',
            'title' => esc_html__('Theme Title Color', 'transto') ,
            'default' => ''
        ),
        array(
            'id' => 'transto_alpra',
            'type' => 'color',
            'title' => esc_html__('Theme Pragraph Color', 'transto') ,
            'default' => ''
        ),
        array(
            'id' => 'transto_alwhite',
            'type' => 'color',
            'title' => esc_html__('Theme White Text & BG Place Color', 'transto') ,
            'default' => ''
        ),		
        array(
            'id' => 'transto_allopcity',
            'type' => 'color_rgba',
            'title' => esc_html__('Theme Box Shadow Color', 'transto') ,
            'default' => array(
                'color' => '',
                'alpha' => 1
            ) 
        ) ,		
        array(
            'id' => 'transto_galbgo',
            'type' => 'color_rgba',
            'title' => esc_html__('Theme Overlay BG Color', 'transto') ,
            'default' => array(
                'color' => '',
                'alpha' => 1
            ) 
        ) , 

/*		
        array(
            'id' => 'twr_glc',
            'type' => 'color',
            'title' => esc_html__('Global Link Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
						a
					'
            )
        ),
        array(
            'id' => 'twr_glhc',
            'type' => 'color',
            'title' => esc_html__('Global Link Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
						a:hover					
					'
            )
        ) ,
        array(
            'id' => 'twr_gcc',
            'type' => 'color',
            'title' => esc_html__('Global Content Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
					
						body,p,
						.transto_s_color .widget a,
						.twr_product_sidebar a,
						.footer-menu ul li a,
						a.page-numbers, .page-numbers, .tutor-pagination-wrap a, .tutor-pagination-wrap span.page-numbers.current
					
					'
            )
        ) ,
        array(
            'id' => 'twr_gtc',
            'type' => 'color',
            'title' => esc_html__('Global Title Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
						h1,
						h2,
						h3,
						h4,
						h5,
						h6,
						h1 a,
						h2 a,
						h3 a,
						h4 a,
						h5 a,
						h6 a,
						.transto_cauthor_name a,
						.twr_product_sidebar .product_list_widget li a,
						.mini_shop_content a i,
						.twr_mini_cart .woocommerce ul.cart_list li a, .twr_mini_cart .woocommerce ul.product_list_widget li a
					
					'
            )
        ) ,
        array(
            'id' => 'twr_gmc',
            'type' => 'color',
            'title' => esc_html__('Global Menu Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
						.transto_menu > ul > li > a,
						.transto_menu ul .sub-menu li a
					
					'
            )
        ) ,
        array(
            'id' => 'twr_gbtntc',
            'type' => 'color',
            'title' => esc_html__('Global Button Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
				.blog_readmore a,
				.transto_sblog_tag ul li a,
				.reply_date a,
				.pocket_com_title small a
				
				',
				'border-color' => '
				.blog_readmore a,
				.transto_sblog_tag ul li a
				'
            )
        ) ,
        array(
            'id' => 'twr_gpmetc',
            'type' => 'color',
            'title' => esc_html__('Global Post Meta Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.transto_meta span a, .transto_meta span, .transto_meta i'
            )
        ) ,		
        array(
            'id' => 'twr_gpmetch',
            'type' => 'color',
            'title' => esc_html__('Global Main Color, Title & Text Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
					.transto_menu > ul > li.current > a, .transto_menu > ul > li:hover > a, .transto_menu > ul > li:hover > a:before, .transto_menu > ul > li.current > a:before,
					.transto_menu ul .sub-menu li:hover:before, .transto_menu ul .sub-menu .current-menu-item > a, .transto_menu ul .sub-menu li:hover > a, .transto_menu ul .sub-menu .sub-menu li:hover > a, .transto_menu ul .sub-menu .sub-menu .sub-menu li:hover > a, .transto_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a,
						h1 a:hover,
						h2 a:hover,
						h3 a:hover,
						h4 a:hover,
						h5 a:hover,
						h6 a:hover,
						.transto_cauthor_name a:hover,
						.twr_product_sidebar .product_list_widget li a:hover,
						.mini_shop_content a i:hover,
						.twr_mini_cart .woocommerce ul.cart_list li a:hover, .twr_mini_cart .woocommerce ul.product_list_widget li a:hover,
						.transto_s_color .widget a:hover,
						.transto_blog_details a:focus, .transto_blog_details a:hover						
					
				'
            )
        ) ,

        array(
            'id' => 'twr_gbgc',
            'type' => 'color',
            'title' => esc_html__('Global Background Color', 'transto') ,
            'default' => '',
            'output' => array(
				'color' => '
				p.sticky_featured,
				.transto_bquote .transto_blog_item i
				',
                'background-color' => '
				.transto_s_color .widget.widget_block h2, .wp-block-search__label,
				.paginations .page-numbers.current, .transto-blog-area .page-numbers.current, .witr_shop_area .page-numbers.current,
				#wp-calendar>caption,
				.btn-primary,
				.pbtn:hover,
				a.page-numbers:hover,
				.tutor-pagination-wrap a:hover,
				#scrollUp,
				.transto_sblog_tag ul li a:hover, .tagcloud a:hover, .transto-single-icon a:hover,
				.wp-block-button__link,
				.transto_postd_pagi a:hover, .transto_postd_pagi span.current				
				
				',
                'border-color' => '
				.sticky .transto_blog_item, .tag-sticky-2 .transto_blog_item,
				.transto_s_color .widget-title::before,
				.btn-primary,
				.pbtn:hover,
				a.page-numbers:hover,
				.tutor-pagination-wrap a:hover,
				#scrollUp,
				.transto_sblog_tag ul li a:hover, .tagcloud a:hover, .transto-single-icon a:hover,
				.wp-block-button__link,
				.transto_postd_pagi a:hover, .transto_postd_pagi span.current
				',
                'border-left-color' => '.transto_bquote .transto_blog_item',
                'border-right-color' => '',
                'border-bottom-color' => '',
                'border-top-color' => ''
            )
        ) ,
        array(
            'id' => 'twr_gbghc',
            'type' => 'color',
            'desc' => esc_html__('Some of button set brand color, when you select global background color on this button. that that time, you need select another hover background color. if you need select another background, That time set background color from here.', 'transto') ,
            'title' => esc_html__('Global Background Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'background-color' => '
				.btn-primary:hover
				',
                'border-color' => '
				.btn-primary:hover
				'
            )
        ) ,

        array(
            'id' => 'twr_gbgovc',
            'type' => 'color_rgba',
            'title' => esc_html__('Global Overlay BG Color', 'transto') ,
            'default' => array(
                'color' => '',
                'alpha' => 1
            ) ,
            'output' => array(
                'background-color' => ''
            )
        ) , 
        */       

    ) ,
));

/*========================
END transto global color  FIELD
=========================*/

/* preloader option */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Preloader Option', 'transto') ,
    'id' => 'preloderoption',
    'icon' => 'el-icon-cog',
    'fields' => array(
        array(
            'id' => 'twr_is_preloader',
            'type' => 'switch',
            'title' => esc_html__('Preloader', 'transto') ,
            'on' => esc_html__('ON', 'transto') ,
            'off' => esc_html__('OFF', 'transto') ,
            'default' => false,
        ) ,

        array(
            'required' => array('twr_is_preloader','=','1') ,
            'id' => 'twr_preloader_style',
            'type' => 'select',
            'title' => esc_html__('Preloader Style', 'transto') ,
            'default' => '1',
            'options' => array(
                '1' => esc_html__('Text Preloader Style', 'transto') ,
                '2' => esc_html__('Image Preloader Style', 'transto')
            )
        ) ,

        /**
         * Text Preloader
         */
        array(
			'required' => array('twr_is_preloader','=','1') ,
            'id' => 'preloader_text',
            'type' => 'text',
            'title' => esc_html__('Preloader Logo Text', 'transto') ,
            'default' => get_bloginfo('name')
        ) ,

        array(
			'required' => array('twr_is_preloader','=','1') ,
            'title' => esc_html__('Loading Text Color', 'transto') ,
            'id' => 'preloader_color',
            'type' => 'color',
            'output' => array(
                '.twr_pretwr_loader_pre .twr_animation .twr_text_pre, .twr_pretwr_loader_pre .twr_animation .twr_text_pre .twr_textletter_pre:before'
            ) ,
        ) ,
        array(
			'required' => array('twr_is_preloader','=','1') ,
            'id' => 'twr_circle_colorbg',
            'type' => 'color',
            'title' => esc_html__(' Spinning Circle Color', 'transto') ,
            'default' => '',
            'output' => array(
                'border-bottom-color' => '.twr_pretwr_loader_pre .twr_animation .twr_circle_pre',
                'border-top-color' => '.twr_pretwr_loader_pre .twr_animation .twr_circle_pre'
            )
        ) ,
        array(
			'required' => array('twr_is_preloader','=','1') ,
            'title' => esc_html__('Backend Shadow Color', 'transto') ,
            'id' => 'preloader_shadow_color',
            'type' => 'color_rgba',
            'output' => array(
                '.twr_pretwr_loader_pre .twr_animation .twr_text_pre .twr_textletter_pre'
            ) ,
        ) ,
        array(
			'required' => array('twr_is_preloader','=','1') ,
            'title' => esc_html__('Loading Logo Typography', 'transto') ,
            'id' => 'preloader_typo',
            'type' => 'typography',
            'text-align' => false,
            'color' => false,
            'output' => array(
                '.twr_pretwr_loader_pre .twr_animation .twr_text_pre,.twr_pretwr_loader_pre .twr_animation .twr_text_pre .twr_textletter_pre:before'
            ) ,
        ) ,
        array(
			'required' => array('twr_is_preloader','=','1') ,
            'id' => 'pre_preloader_image',
            'type' => 'media',
            'desc' => esc_html__('Insert gif image for the better look', 'transto') ,
            'title' => esc_html__('Preloader image', 'transto') ,
            'compiler' => true,
            'default' => array(
                'url' => ''
            )
        ) ,

        array(
			'required' => array('twr_is_preloader','=','1') ,
            'id' => 'pre_preloader_text',
            'type' => 'text',
            'title' => esc_html__('Loding Text', 'transto') ,
            'desc' => esc_html__('Insert Loading Text Here. Not use the text, remove the text from field.', 'transto') ,
            'default' => esc_html__('Please Wait For Loading', 'transto')
        ) ,
        array(
			'required' => array('twr_is_preloader','=','1') ,
            'title' => esc_html__('Loading Text Typography', 'transto') ,
            'id' => 'preloader_small_typo',
            'type' => 'typography',
            'text-align' => false,
            'output' => array(
                '.twr_pretwr_loader_pre p'
            ) ,
        ) ,

        array(
			'required' => array('twr_is_preloader','=','1') ,
            'id' => 'transto_preceross_hide',
            'type' => 'switch',
            'title' => esc_html__('Loading Cancel Show/Hide', 'transto') ,
            'default' => false,
        ) ,
        array(
			'required' => array('twr_is_preloader','=','1') ,
            'id' => 'preloader_cancel_icon',
            'type' => 'text',
            'title' => esc_html__('Loding Cancel Icon', 'transto') ,
            'desc' => esc_html__('insert icon here. Use themify Icon ex = ti-close or icofont-close go https://themify.me/themify-icons or https://icofont.com/icons . Not use the field, remove the text from field..', 'transto') ,
            'default' => esc_html__('ti-close', 'transto') ,
        ) ,
        array(
			'required' => array('twr_is_preloader','=','1') ,
            'id' => 'preloader_cancel_text',
            'type' => 'text',
            'title' => esc_html__('Loding Cancel Text', 'transto') ,
            'desc' => esc_html__('Insert Loading Cancel Text. Not use the text, remove the text from field.', 'transto') ,
            'default' => esc_html__('Cancel Loading', 'transto')
        ) ,
        array(
			'required' => array('twr_is_preloader','=','1') ,
            'title' => esc_html__('Loading Cancel Text Color', 'transto') ,
            'id' => 'preloader_cancel_color',
            'type' => 'color',
            'output' => array(
                '.twr_precross'
            ) ,
        ) ,

    )
));

/* total header area */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Header area', 'transto') ,
    'id' => 'transto_header_area',
    'desc' => esc_html__('Header options', 'transto') ,
    'icon' => 'el-icon-tasks',
    'fields' => array(

        array(
            'id' => 'transto_header_display_none_hide',
            'desc' => esc_html__('All Menu OFF/ON section', 'transto') ,
            'type' => 'switch',
            'title' => esc_html__('All Header Hide', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_header_posi_top',
            'desc' => esc_html__('All Menu Position  OFF/ON section', 'transto') ,
            'type' => 'switch',
            'title' => esc_html__('All Header absolute', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_header_posi_top2',
            'desc' => esc_html__('Top 2 and Main Menu Position  OFF/ON section', 'transto') ,
            'type' => 'switch',
            'title' => esc_html__('Top 2 and Main Menu Header absolute', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_header_posi_top3',
            'desc' => esc_html__('Main Menu Position  OFF/ON section', 'transto') ,
            'type' => 'switch',
            'title' => esc_html__('Main Header absolute', 'transto') ,
            'default' => false,
        ) ,


    )
));

/* Header Top 1 */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Header Top Menu 1', 'transto') ,
    'id' => 'transto_header_top',
    'desc' => esc_html__('Insert header top info', 'transto') ,
    'icon' => 'el el-circle-arrow-right',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'transto_header_top_hide',
            'desc' => esc_html__('If you ON this section. It will show header top style everywhere. But If you want to show header top style of your choose post and page. That time, Please don\'t ON the option. For this go to your page or post below, there you can see a Top Menu 1 OFF/ON option. Please select OFF/ON from there.', 'transto') ,
            'type' => 'switch',
            'title' => esc_html__('Header Top', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_box_layout',
            'type' => 'select',
            'title' => esc_html__('Select Top 1 Header layout', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                'htops_box' => esc_html__('Select Layout', 'transto') ,
                'htopt_box' => esc_html__('Box Layout', 'transto') ,
                'htopt_boxi' => esc_html__('Box Inner Layout', 'transto') ,
                'htopt_full' => esc_html__('Full Layout', 'transto') ,
            ) ,
            'default' => 'htops_box'
        ) ,
        array(
            'id' => 'twr_top_right_layout',
            'type' => 'select',
            'title' => esc_html__('Select Top Header Style', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                'h_top_l11' => esc_html__('Select Top Menu', 'transto') ,
                'top1' => esc_html__('Left: Address and Right: Menu, Open Hours, Icon, Welcome, Login, Search', 'transto') ,
                'top2' => esc_html__('Left: Address, Middle: Welcome, Open Hours and Right: Menu, Icon, Login, Search', 'transto') ,
                'top3' => esc_html__('Left: Address, Open Hours, Middle: Welcome,Icon and Right: Menu, Login, Search', 'transto') ,
                'top4' => esc_html__('Center All Item', 'transto') ,
            ) ,
            'default' => 'top1'
        ) ,
        array(
            'id' => 'topflex_select',
            'type' => 'select',
            'title' => esc_html__('Menu Direction', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                'flex-row' => esc_html__('Row', 'transto') ,
				'flex-row-reverse' => esc_html__('Row Reverse', 'transto') ,
                'flex-column' => esc_html__('Column', 'transto') ,
                'flex-column-reverse' => esc_html__('Column Reverse', 'transto') ,
            ) ,
            'default' => 'flex-row'
        ) ,		
        array(
            'id' => 'top_address_hide',
            'type' => 'switch',
            'title' => esc_html__('Address Section', 'transto') ,
            'default' => true,
        ) ,		
        array(
            'id' => 'top_icon_hide',
            'type' => 'switch',
            'title' => esc_html__('Social Icon Section', 'transto') ,
            'default' => true,
        ) ,	
        array(
            'id' => 'top_search_hide',
            'type' => 'switch',
            'title' => esc_html__('Search Section', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'top_menu_hide',
            'type' => 'switch',
            'title' => esc_html__('Menu Section', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'top_login_hide',
            'type' => 'switch',
            'title' => esc_html__('Login Section', 'transto') ,
            'default' => false,
        ) ,		
        array(
            'id' => 'top_welcome_hide',
            'type' => 'switch',
            'title' => esc_html__('Text Message Section', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'top_opening_hide',
            'type' => 'switch',
            'title' => esc_html__('Opening Hours Section', 'transto') ,
            'default' => true,
        ) ,		
			
        array(
			'required' => array('top_address_hide', '=','true'), 
            'id' => 'transto_header_top_i1',
            'type' => 'text',
            'title' => esc_html__('Set Location Icon', 'transto') ,
            'desc' => esc_html__('insert icofont icon here. ex - <i class="ti-home"></i> go https://themify.me/themify-icons. Not use the field, remove the text from field', 'transto') ,
            'default' => esc_html__('<i class="ti-home"></i>', 'transto') ,
        ) ,
        array(
			'required' => array('top_address_hide', '=','true'),		
            'id' => 'transto_header_top_road',
            'type' => 'text',
            'title' => esc_html__('Location Name', 'transto') ,
            'desc' => esc_html__('Insert Your Text', 'transto') ,
            'default' => esc_html__('1st Floor New World.', 'transto') ,
        ) ,
        array(
			'required' => array('top_address_hide', '=','true'),		
            'id' => 'transto_header_top_i2',
            'type' => 'text',
            'title' => esc_html__('Set Phone Icon', 'transto') ,
            'desc' => esc_html__('insert icofont icon here. ex - <i class="ti-mobile"></i> go https://themify.me/themify-icons. Not use the field, remove the text from field', 'transto') ,
            'default' => esc_html__('<i class="ti-mobile"></i>', 'transto') ,
        ) ,
        array(
			'required' => array('top_address_hide', '=','true'),		
            'id' => 'transto_header_top_mobile',
            'type' => 'text',
            'title' => esc_html__('Phone Number', 'transto') ,
            'desc' => esc_html__('Insert Your Phone Number Text', 'transto') ,
            'default' => esc_html__('+998556778345', 'transto') ,
        ) ,
        array(
			'required' => array('top_address_hide', '=','true'),		
            'id' => 'transto_header_top_i3',
            'type' => 'text',
            'title' => esc_html__('Set Email Icon', 'transto') ,
            'desc' => esc_html__('insert icofont icon here. ex - <i class="ti-email"></i> go https://themify.me/themify-icons. Not use the field, remove the text from field', 'transto') ,
            'default' => esc_html__('<i class="ti-email"></i>', 'transto') ,
        ) ,
        array(
			'required' => array('top_address_hide', '=','true'),		
            'id' => 'transto_header_top_email',
            'type' => 'text',
            'title' => esc_html__('Email ID', 'transto') ,
            'desc' => esc_html__('Insert Your Text', 'transto') ,
            'default' => esc_html__('demo@example.com', 'transto') ,
        ) ,		
        array(
			'required' => array('top_welcome_hide', '=','true'),		
            'id' => 'transto_header_top_i4',
            'type' => 'text',
            'title' => esc_html__('Set Message Icon', 'transto') ,
            'desc' => esc_html__('insert icofont icon here. ex - <i class="ti-crown"></i> go https://themify.me/themify-icons. Not use the field, remove the text from field', 'transto') ,
            'default' => esc_html__('<i class="ti-crown"></i>', 'transto') ,
        ) ,
        array(
			'required' => array('top_welcome_hide', '=','true'),		
            'id' => 'transto_header_top_wellcome',
            'type' => 'text',
            'title' => esc_html__('Text Message', 'transto') ,
            'desc' => esc_html__('Insert text support - span,a,br,strong,b,em and h2 html tag', 'transto') ,
            'default' => esc_html__('welcome visit our site', 'transto') ,
        ) ,
        array(
			'required' => array('top_opening_hide', '=','true'),		
            'id' => 'transto_header_top_i5',
            'type' => 'text',
            'title' => esc_html__('Set Open Icon', 'transto') ,
            'desc' => esc_html__('insert icofont icon here. ex - <i class="ti-time"></i> go https://themify.me/themify-icons. Not use the field, remove the text from field', 'transto') ,
            'default' => esc_html__('<i class="ti-time"></i>', 'transto') ,
        ) ,
        array(
			'required' => array('top_opening_hide', '=','true'),		
            'id' => 'transto_header_top_opening',
            'type' => 'text',
            'title' => esc_html__('Opening Text', 'transto') ,
            'desc' => esc_html__('Insert Text', 'transto') ,
            'default' => esc_html__('Open hours: 9am-6pm', 'transto') ,
        ) ,
        array(
            'id' => 'transto_header_top_color',
            'type' => 'color',
            'title' => esc_html__('All Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.top-address p a,
								.top-right-menu ul.social-icons li a,
								.top-address p span,
								.top-address.menu_18 span,
								.top-welcome p span,
								.top-welcomet p span,.top-address p span i, .top-address p a i,.top-welcome p span i,
								.ossos .em-quearys-menu i
					'
            )
        ) ,
        array(
            'id' => 'transto_htic',
            'type' => 'color',
            'title' => esc_html__('Top Icon Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.top-address p span i, .top-address p a i,.top-right-menu .social-icons li a,.top-welcome p span i
				'
            )
        ) ,		
        array(
            'id' => 'transto_htich',
            'type' => 'color',
            'title' => esc_html__('All Icon Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.top-right-menu .social-icons li a:hover,
								.top-right-menu .social-icons li a i:hover,
								.top-address p a i:hover,
								.top-address p span i:hover
					'
            )
        ) ,
        /*array(
                    'id'        => 'transto_header_top_wella_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Text Message Link Color', 'transto'),
                    'default'  => '',
        'output'    => array(
        'color' => '.top-welcome p a,.top-address p a'
        )
                ),
        array(
                    'id'        => 'transto_header_hover_Link_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Text Message Link Hover Color', 'transto'),
                    'default'  => '',
        'output'    => array(
        'color' => '.top-welcome p a:hover,.top-welcomet p a:hover,.top-address p a:hover'
        )
                ),	*/
        array(
            'id' => 'transto_htibgc',
            'type' => 'background',
            'title' => esc_html__('Header Top Section BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                '
				.transto-header-top,.top-right-menu ul .sub-menu
				'
            ) ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'top_menu_gr',
            'type' => 'color_gradient',
            'title' => esc_html__('HeaderTop Menu Section Gradient BG Color', 'transto') ,
            'desc' => esc_html__('Set Gradient From here.', 'transto') ,
            'validate' => 'color',
            'default' => array(
                'from' => '',
                'to' => '',
            )
        ) ,
        array(
            'id' => 'top_header_border',
            'type' => 'border',
            'title' => __('Header Border Option', 'transto') ,
            'subtitle' => __('Only color validation can be done on this field type', 'transto') ,
            'output' => array(
                '.transto-header-top'
            ) ,
            'desc' => __('This is the description field, again good for additional info.', 'transto') ,
            'default' => array(
                'border-color' => '',
                'border-style' => 'solid',
                'border-top' => '',
                'border-right' => '',
                'border-bottom' => '',
                'border-left' => ''
            )
        ) ,

        array(
            'id' => 'transto_htpds',
            'type' => 'spacing',
            'output' => array(
                '.transto-header-top'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing padding they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,

    ) ,
));

/* Header Top 2 */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Header Top Menu 2', 'transto') ,
    'id' => 'transto_header_toptwo',
    'desc' => esc_html__('Insert header top info', 'transto') ,
    'icon' => 'el el-circle-arrow-right',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'transto_header_top_two_hide',
            'desc' => esc_html__('If you ON this section. It will show header top style 2 everywhere. But If you want to show header top style 2 your choose page and post. That time, Please don\'t ON the option. For this go to your page or post below, there you can see a Top Menu 2 OFF/ON option. Please select OFF/ON from there.', 'transto') ,
            'type' => 'switch',
            'title' => esc_html__('Header Top style 2', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_box_layouttwo',
            'type' => 'select',
            'title' => esc_html__('Select Top 2 Header layout', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                'htops_box' => esc_html__('Select Layout', 'transto') ,
                'htopt_box' => esc_html__('Box Layout', 'transto') ,
                'htopt_boxi' => esc_html__('Box Inner Layout', 'transto') ,
                'htopt_full' => esc_html__('Full Layout', 'transto') ,
            ) ,
            'default' => 'htops_box'
        ) ,
        array(
            'id' => 'twr_top_two_layout',
            'type' => 'select',
            'title' => esc_html__('Select Top 2 Header Style', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                'h_middle1' => esc_html__('Select Top Menu', 'transto') ,
                'middle1' => esc_html__('1. Left Logo,Middle Address And Right Top Menu, Social Icon, Shop, Button', 'transto') ,
                'middle2' => esc_html__('2. Left Address, Middle Logo And Right Top Menu, Social Icon, Shop, Button', 'transto') ,
            ) ,
            'default' => 'middle1'
        ) ,
        array(
            'id' => 'middleflex_select',
            'type' => 'select',
            'title' => esc_html__('Menu Direction', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                'flex-row' => esc_html__('Row', 'transto') ,
				'flex-row-reverse' => esc_html__('Row Reverse', 'transto') ,
                'flex-column' => esc_html__('Column', 'transto') ,
                'flex-column-reverse' => esc_html__('Column Reverse', 'transto') ,
            ) ,
            'default' => 'flex-row'
        ) ,
        array(
            'id' => 'middle_address_hide',
            'type' => 'switch',
            'title' => esc_html__('Address Section', 'transto') ,
            'default' => true,
        ) ,		
        array(
            'id' => 'middle_icon_hide',
            'type' => 'switch',
            'title' => esc_html__('Social Icon Section', 'transto') ,
            'default' => true,
        ) ,
        array(
            'id' => 'middle_menu_hide',
            'type' => 'switch',
            'title' => esc_html__('Menu Section', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'middle_logo_hide',
            'type' => 'switch',
            'title' => esc_html__('Logo Section', 'transto') ,
            'default' => true,
        ) ,
        array(
            'id' => 'middle_woo_hide',
            'type' => 'switch',
            'title' => esc_html__('WooCommerce Section', 'transto') ,
            'default' => false,
        ) ,		
        array(
            'id' => 'middle_button_hide',
            'type' => 'switch',
            'title' => esc_html__('Button Section', 'transto') ,
            'default' => false,
        ) ,		
		
        array(
			'required' => array('middle_address_hide', '=','true'),
            'id' => 'transto_header_top_ci1',
            'type' => 'text',
            'title' => esc_html__('Set Location Icon', 'transto') ,
            'desc' => esc_html__('insert icofont icon here. ex - <i class="ti-location-pin"></i> go https://themify.me/themify-icons . Not use the field, remove the text from field', 'transto') ,
            'default' => esc_html__('<i class="ti-location-pin"></i>', 'transto') ,
        ) ,
        array(
			'required' => array('middle_address_hide', '=','true'),		
            'id' => 'transto_header_top_roadtwot',
            'type' => 'text',
            'title' => esc_html__('Location Title', 'transto') ,
            'desc' => esc_html__('Insert Text Here', 'transto') ,
            'default' => esc_html__('Location', 'transto') ,
        ) ,
        array(
			'required' => array('middle_address_hide', '=','true'),		
            'id' => 'transto_header_top_roadtwo',
            'type' => 'text',
            'title' => esc_html__('Location Sub Title', 'transto') ,
            'desc' => esc_html__('Insert Text Here', 'transto') ,
            'default' => esc_html__('1st Floor.', 'transto') ,
        ) ,
        array(
			'required' => array('middle_address_hide', '=','true'),		
            'id' => 'transto_header_top_ci2',
            'type' => 'text',
            'title' => esc_html__('Set Email Icon', 'transto') ,
            'desc' => esc_html__('insert icofont icon here. ex - <i class="ti-email"></i> . Not use the field, remove the text from field', 'transto') ,
            'default' => esc_html__('<i class="ti-email"></i>', 'transto') ,
        ) ,
        array(
			'required' => array('middle_address_hide', '=','true'),		
            'id' => 'transto_header_top_emailtwot',
            'type' => 'text',
            'title' => esc_html__('Email Title', 'transto') ,
            'desc' => esc_html__('insert info', 'transto') ,
            'default' => esc_html__(' Email', 'transto') ,
        ) ,
        array(
			'required' => array('middle_address_hide', '=','true'),		
            'id' => 'transto_header_top_emailtwo',
            'type' => 'text',
            'title' => esc_html__('Email Sub Title', 'transto') ,
            'desc' => esc_html__('Iinsert info', 'transto') ,
            'default' => esc_html__('demo@example.com', 'transto') ,
        ) ,
        array(
			'required' => array('middle_address_hide', '=','true'),		
            'id' => 'transto_header_top_ci3',
            'type' => 'text',
            'title' => esc_html__('Set Phone Icon', 'transto') ,
            'desc' => esc_html__('insert icofont icon here. ex - <i class="ti-mobile"></i> . Not use the field, remove the text from field', 'transto') ,
            'default' => esc_html__('<i class="ti-mobile"></i>', 'transto') ,
        ) ,
        array(
			'required' => array('middle_address_hide', '=','true'),		
            'id' => 'transto_header_top_mobiletwot',
            'type' => 'text',
            'title' => esc_html__('Phone Title', 'transto') ,
            'desc' => esc_html__('insert info', 'transto') ,
            'default' => esc_html__('Phone', 'transto') ,
        ) ,
        array(
			'required' => array('middle_address_hide', '=','true'),		
            'id' => 'transto_header_top_mobiletwo',
            'type' => 'text',
            'title' => esc_html__('Phone Number', 'transto') ,
            'desc' => esc_html__('insert info', 'transto') ,
            'default' => esc_html__('+998556778345', 'transto') ,
        ) ,
        array(
			'required' => array('middle_button_hide', '=','true'),		
            'id' => 'transto_header_buttonc1',
            'type' => 'text',
            'title' => esc_html__('Button Text', 'transto') ,
            'desc' => esc_html__('Insert text here, Not use the button, remove the text from field', 'transto') ,
            'default' => esc_html__('Get a Quote', 'transto') ,
        ) ,
        array(
			'required' => array('middle_button_hide', '=','true'),		
            'id' => 'transto_header_button_urlc1',
            'type' => 'text',
            'title' => esc_html__('Button URL', 'transto') ,
            'desc' => esc_html__('Insert url ex: - https://your_site.com/ and Not use the link, remove the link from field', 'transto') ,
            'default' => '#',
        ) ,
        array(
            'id' => 'transto_httic',
            'type' => 'color',
            'title' => esc_html__('Top Icon Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.creative_header_icon i
					'
            )
        ) ,
        array(
            'id' => 'transto_httibg',
            'type' => 'color',
            'title' => esc_html__('Top Icon BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'background-color' => '.creative_header_icon i',
            )
        ) ,
        array(
            'id' => 'transto_httipd',
            'type' => 'spacing',
            'output' => array(
                '.creative_header_icon i'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Top Icon Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing padding they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,

        array(
            'id' => 'transto_htttf',
            'type' => 'typography',
            'title' => esc_html__('Title Typography style', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'output' => array(
                '.creative_header_address_text > h3'
            ) ,
            'line-height' => false,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto') ,
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ) ,
        ) ,
        array(
            'id' => 'transto_httstf',
            'type' => 'typography',
            'title' => esc_html__('Sub Title Typography style', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'output' => array(
                '.creative_header_address_text > p,.creative_header_address_text > p > a,.top_crmenu_l li a,.cr_top_addess p span,.cr_top_addess p a'
            ) ,
            'line-height' => false,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto') ,
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ) ,
        ) ,
        array(
            'id' => 'transto_httbbg',
            'type' => 'color',
            'title' => esc_html__('Button BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'background-color' => '
				.tx_menuc_btn .tx_mc_btn,.top_crmenu_l ul, .top_crt_style,
				.creative_header_button .dtbtn,
				.mini_shop_content a span.count
				',
				'border-color' => '.creative_header_button .dtbtn'
            )
        ) ,
        array(
            'id' => 'transto_httbbgh',
            'type' => 'color',
            'title' => esc_html__('Button BG Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'background-color' => '
				.tx_menuc_btn .tx_mc_btn:hover,
				.creative_header_button .dtbtn:hover
				',
				'border-color' => '
				.tx_menuc_btn .tx_mc_btn:hover,
				.creative_header_button .dtbtn:hover
				'
            )
        ) ,
        array(
            'id' => 'transto_httscbg',
            'type' => 'background',
            'title' => esc_html__('Header Top Section BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                '.em_creative_header,.top_crt_style
				'
            ) ,
            'default' => array(
                'background-color' => '',
            )
        ) ,

        array(
            'id' => 'transto_httscpd',
            'type' => 'spacing',
            'output' => array(
                '.em_creative_header,.top_crt_style'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing padding they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,

    ) ,
));

/* Header Logo */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Header Logo', 'transto') ,
    'id' => 'transto_header_logo',
    'desc' => esc_html__('Header Logo', 'transto') ,
    'icon' => 'el el-circle-arrow-right',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'transto_logo',
            'type' => 'media',
            'title' => esc_html__('Default Logo', 'transto') ,
            'compiler' => 'true',
            'mode' => false,
            'desc' => esc_html__('Upload logo here.ex: - it is work in default menu.', 'transto') ,
        ) ,
        array(
            'id' => 'transto_onepage_logo',
            'type' => 'media',
            'title' => esc_html__('One Page Menu Logo', 'transto') ,
            'compiler' => 'true',
            'mode' => false,
            'desc' => esc_html__('Upload logo here. ex:- it is work in one page menu', 'transto') ,
        ) ,
        array(
            'id' => 'transto_ts_logo',
            'type' => 'media',
            'title' => esc_html__('Transparent Menu Logo', 'transto') ,
            'compiler' => 'true',
            'mode' => false,
            'desc' => esc_html__('Upload logo here. ex: - it is work in transparent menu', 'transto') ,
        ) ,
        array(
            'id' => 'transto_mobile_top_logo',
            'type' => 'media',
            'title' => esc_html__('Mobile Logo', 'transto') ,
            'compiler' => 'true',
            'mode' => false,
            'desc' => esc_html__('Upload logo here. recommend size:- 180x48px.', 'transto') ,
        ) ,
        array(
            'id' => 'transto_logo_height',
            'type' => 'text',
            'title' => esc_html__('Logo Height', 'transto') ,
            'mode' => false,
            'desc' => esc_html__('Set height ex-100px', 'transto') ,
        ) ,
        array(
            'id' => 'transto_logo_widget',
            'type' => 'text',
            'title' => esc_html__('Logo Width', 'transto') ,
            'mode' => false,
            'desc' => esc_html__('Set Width ex-100px', 'transto') ,
        ) ,
        array(
            'id' => 'transto_line_height',
            'type' => 'text',
            'title' => esc_html__('Set your logo spacing to Menu ', 'transto') ,
            'mode' => false,
            'desc' => esc_html__('Set number default-15px', 'transto') ,
            'default' => '',
        ) ,
        array(
            'id' => 'twr_hlogoc',
            'type' => 'color',
            'desc' => esc_html__('Set Logo color', 'transto') ,
            'title' => esc_html__('Text Logo Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
				.top_crt_style .site-title a
				',
            )
        ) ,		

 

    ) ,
));
/* Mobile Logo */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Mobile Logo', 'transto') ,
    'id' => 'transto_mlogos',
    'desc' => esc_html__('Mobile Logo', 'transto') ,
    'icon' => 'el el-circle-arrow-right',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'transto_mobile_top_logo',
            'type' => 'media',
            'title' => esc_html__('Mobile Logo', 'transto') ,
            'compiler' => 'true',
            'mode' => false,
            'desc' => esc_html__('Upload logo here. recommend size:- 180x48px.', 'transto') ,
        ) ,
        array(
            'id' => 'twr_mlogoc',
            'type' => 'color',
            'desc' => esc_html__('Set Logo color', 'transto') ,
            'title' => esc_html__('Text Logo Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
				.mobile_menu_logo  .site-title a
				',
            )
        ) ,				
        array(
            'id' => 'transto_mobilebg_color',
            'type' => 'color',
            'title' => esc_html__('Mobile Menu BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'background-color' => '.mobile_logo_area',
            )
        ) ,
        array(
            'id' => 'transto_mobileicon_color',
            'type' => 'color',
            'title' => esc_html__('Mobile Menu Icon Color', 'transto') ,
            'default' => '',
            'output' => array(
                'background-color' => '',
                'color' => '.mobile_menu_o i'
            )
        ) ,

    ) ,
));

/* Header Menu */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Main Menu', 'transto') ,
    'id' => 'transto_menu',
    'icon' => 'el el-circle-arrow-right',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'transto_main_box_layout',
            'type' => 'select',
            'title' => esc_html__('Select Header Menu layout', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                'htops_box' => esc_html__('Select Layout', 'transto') ,
                'hmenul_box' => esc_html__('Box Layout', 'transto') ,
                'hmenul_boxi' => esc_html__('Box Inner Layout', 'transto') ,
                'hmenu_full' => esc_html__('Full Layout', 'transto') ,
            ) ,
            'default' => 'htops_box'
        ) ,
        array(
            'id' => 'twr_defaulth_menu_layout',
            'desc' => esc_html__('select your menu from here.', 'transto') ,
            'type' => 'select',
            'title' => esc_html__('Select Default Menu For All Page', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                '111' => esc_html__('Select Menu Style From Here', 'transto') ,
                'defaultm' => esc_html__('1 Header Default Menu', 'transto') ,
                'tm' => esc_html__('2 Header Transparent Menu', 'transto') ,
                'tms' => esc_html__('3 Header Transparent With Sticky Menu', 'transto') ,
                'om' => esc_html__('4 Header One Page Menu', 'transto') ,
                'otm' => esc_html__('5 Header One Page Transparent Menu', 'transto') ,
                'otsm' => esc_html__('6 Header One Page Transparent With Sticky  Menu', 'transto') ,
                'defaultsticky' => esc_html__('1-1 Header Default with Sticky Menu', 'transto') ,
                'msearch' => esc_html__('8 Header Menu With Search', 'transto') ,
                'msocial' => esc_html__('9 Header Menu With Social Icon and Button', 'transto') ,
                'mbutton' => esc_html__('10 Header Menu With Button', 'transto') ,
                'mheadroom' => esc_html__('11 Header Menu With Button headroom Menu', 'transto') ,
                'msnologo' => esc_html__('12 Header Menu With Search and no Logo', 'transto') ,
                'tsmnologo' => esc_html__('13 Header Transparent Sticky No logo Menu', 'transto') ,
                'omsearch' => esc_html__('14 Header One Page With Search Menu', 'transto') ,
                'mmshop' => esc_html__('15 Header Mini Shop Menu', 'transto') ,
                'mhamburger' => esc_html__('16 Header Hamburgers Menu', 'transto') ,
                'mbox' => esc_html__('17 Header Box Style Menu', 'transto') ,
                'msshnologo' => esc_html__('18 No Logo,Search, Mini Shop Button', 'transto') ,
                'msshbtn' => esc_html__('19 Left Logo,Right Search, Mini Shop Button', 'transto') ,
                'mpopupl' => esc_html__('20 Left Logo,Right Search,Popup Menu,Button', 'transto') ,
                'mpopnologo' => esc_html__('21 No Logo,Right Search,Popup Menu,Button', 'transto') ,
                'mcenter' => esc_html__('22 left Logo,Center Menu,Search And Right Address', 'transto') ,
                'mpopup' => esc_html__('23 Header Popup Menu', 'transto') ,
                'omologom' => esc_html__('24 No Logo,One Page Menu,Button', 'transto') ,
                'topmain' => esc_html__('25 Top and Main Menu,Button', 'transto') ,
                'blank' => esc_html__('26 Header Menu Hide', 'transto') ,
            ) ,
            'default' => '111'
        ) ,
        array(
            'id' => 'transto_header_button',
            'type' => 'text',
            'title' => esc_html__('Button Text', 'transto') ,
            'desc' => esc_html__('Insert text here, Not use the button, remove the text from field', 'transto') ,
            'default' => esc_html__('Buy Now', 'transto') ,
        ) ,
        array(
            'id' => 'transto_header_button_url',
            'type' => 'text',
            'title' => esc_html__('Button URL', 'transto') ,
            'desc' => esc_html__('Insert url ex: - https://your_site.com/  and  Not use the link, remove the link from field', 'transto') ,
            'default' => '#',
        ) ,
        
        array(
            'id' => 'mmenu_its_hide',
            'type' => 'switch',
            'title' => esc_html__(' Phone Number', 'transto') ,
            'default' => true,
        ) ,        
        array(
            'required' => array('mmenu_its_hide', '=','true'),
            'id' => 'main_menu_icon',
            'type' => 'text',
            'title' => esc_html__('Set Icon', 'transto') ,
            'desc' => esc_html__('insert icofont icon here. ex - <i class="ti-mobile"></i> go https://themify.me/themify-icons . Not use the field, remove the text from field and and This option work only, when you select - 22 style menu', 'transto') ,
            'default' => esc_html__('<i class="ti-mobile"></i>', 'transto') ,
        ) ,
        array(
            'required' => array('mmenu_its_hide', '=','true'),
            'id' => 'main_menu_top_title',
            'type' => 'text',
            'title' => esc_html__('Title', 'transto') ,
            'desc' => esc_html__('insert title here and This option work only, when you select  - 22 style menu', 'transto') ,
            'default' => esc_html__('Phone', 'transto') ,
        ) ,
        array(
            'required' => array('mmenu_its_hide', '=','true'),
            'id' => 'main_menu_number',
            'type' => 'text',
            'title' => esc_html__('Sub Title', 'transto') ,
            'desc' => esc_html__('insert sub title here and This option work only, when you select  - 22 style menu', 'transto') ,
            'default' => esc_html__('+998556778345', 'transto') ,
        ) ,
        array(
            'id' => 'mmenu_login_hide',
            'type' => 'switch',
            'title' => esc_html__('Login Section', 'transto') ,
            'desc' => esc_html__('insert title here and This option work only, when you select  - 25 style menu', 'transto') ,
            'default' => true,
        ) ,     
        array(
            'id' => 'mmenu_countdown_hide',
            'type' => 'switch',
            'title' => esc_html__(' Countdown', 'transto') ,
            'default' => true,
        ) ,        
        array(
            'required' => array('mmenu_countdown_hide', '=','true'),            
            'id' => 'mmenu_counttitle',
            'type' => 'text',
            'title' => esc_html__('Countdown Title', 'transto') ,
            'desc' => esc_html__('insert title here and This option work only, when you select  - 25 style menu', 'transto') ,
            'default' => esc_html__('Vote Now:', 'transto') ,
        ) ,
        array(
            'required' => array('mmenu_countdown_hide', '=','true'), 
            'id' => 'mmenu_countday',
            'type' => 'text',
            'title' => esc_html__('Countdown Day', 'transto') ,
            'desc' => esc_html__('insert countdown day here, EX: M D Y and This option work only, when you select  - 25 style menu', 'transto') ,
            'default' => esc_html__('12 30 2025', 'transto') ,
        ) , 
        array(
            'id' => 'transto_menu_typography',
            'type' => 'typography',
            'title' => esc_html__('Main Menu Color & Typography', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'output' => array(
                '
						.transto_menu > ul > li > a,
						.heading_style_2 .transto_menu > ul > li > a,
						.heading_style_3 .transto_menu > ul > li > a,
						.heading_style_4 .transto_menu > ul > li > a,
						.main_menu_header_address_text h3,
						.main_menu_header_address_text h4 a,
						.heading_style_5 .transto_menu > ul > li > a,
						.mini_shop_content a i
					'
            ) ,
            'line-height' => false,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto') ,
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ) ,
        ) ,
        array(
            'id' => 'transto_menu_texts_hover_color',
            'type' => 'color',
            'title' => esc_html__('Main Menu Hover Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.transto_menu > ul > li > a:hover,.transto_menu > ul > li.current-menu-item > a,.right_sideber_menu i:hover,.main_menu_header_address_text h4 a:hover,.transto_menu ul .sub-menu li:hover > a,.transto_menu ul .sub-menu .sub-menu li:hover > a,.transto_menu ul .sub-menu .sub-menu .sub-menu li:hover > a,.transto_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a,.transto_menu ul .sub-menu li:hover:before,.heading_style_2 .transto_menu > ul > li > a:hover,.heading_style_3 .transto_menu > ul > li > a:hover,.heading_style_4 .transto_menu > ul > li > a:hover,.hbg2 .transto_menu > ul > li > a:hover,.transto_nav_area.prefix .transto_menu>ul>li>a:hover,.transto_menu ul .sub-menu li a:hover,.transto_menu>ul>li>a:hover',

                'background-color' => '.transto_menu > ul > li > a::before,.transto_menu > ul > li.current-menu-item:hover > a::before,.transto_menu > ul > li.current-menu-item > a:before'
            )
        ) ,
        array(
            'id' => 'transto_mitemm',
            'type' => 'spacing',
            'output' => array(
                '.transto_menu>ul>li>a'
            ) ,
            'mode' => 'margin',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Menu Item Spacing Option', 'transto') ,
            'subtitle' => esc_html__('Set menu item spacing here.', 'transto') ,
            'desc' => esc_html__('Top, Right, Bottom, Left', 'transto') ,
            'default' => array(
                'margin-top' => '',
                'margin-right' => '',
                'margin-bottom' => '',
                'margin-left' => '',
                'units' => 'px',
            )
        ) ,		
        array(
            'id' => 'transto_menu_sticky_text_color',
            'type' => 'color',
            'title' => esc_html__('Main Menu Sticky Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
					.transto_nav_area.prefix .transto_menu > ul > li > a,.hmenu_box_style.hbg2 .transto_menu > ul > li > a,.hbg2 .transto_menu > ul > li > a,.transto_nav_area.prefix .right_sideber_menu i,.witr_search_wh .prefix  .em-header-quearys .em-quearys-menu i,.transto_nav_area.prefix .transto_menu > ul > li.current > a
					',
                'background-color' => '
					.transto_nav_area.prefix .transto_menu > ul > li > a::before,
					.hbg2 .transto_menu > ul > li > a::before
					
					'
            )
        ) ,
        array(
            'id' => 'transto_menu_text_hover_color',
            'type' => 'color',
            'title' => esc_html__('Main Menu & Sticky Menu Current Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
					.transto_nav_area.prefix .transto_menu > ul > li.current > a,.hbg2 .transto_menu > ul > li.current > a,.heading_style_2 .transto_menu > ul > li.current-menu-item > a,.heading_style_3 .transto_menu > ul > li.current-menu-item > a,.heading_style_4 .transto_menu > ul > li.current-menu-item > a,.hbg2 .transto_menu > ul > li.current-menu-item > a,.transto_nav_area.prefix .transto_menu>ul>li.current-menu-item>a,.transto_menu ul .sub-menu li.current-menu-item a,.transto_menu>ul>li.current-menu-item>a
					',
                'background-color' => '
						.transto_nav_area.prefix .transto_menu > ul > li.current > a::before					
					'
            )
        ) ,
        array(
            'id' => 'transto_menu_bg_sticky_color',
            'type' => 'color_rgba',
            'title' => esc_html__('Main Menu Sticky BG Color', 'transto') ,
            'default' => array(
                'color' => '#000000',
                'alpha' => .7
            ) ,
            'output' => array(
                'background-color' => '
					.transto_nav_area.prefix,
					.hbg2
				'
            )
        ) ,
        array(
            'id' => 'transto_sub_menu_typography',
            'type' => 'typography',
            'title' => esc_html__('Sub Menu Color & Typography', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'output' => array(
                '
				.transto_menu ul .sub-menu li a,.transto_menu ul .sub-menu li:before
				'
            ) ,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto') ,
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ) ,
        ) ,

        array(
            'id' => 'transto_submenu_hover_text_color',
            'type' => 'color',
            'title' => esc_html__('Sub Menu Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
						.transto_menu ul .sub-menu li:hover > a,
						.transto_menu ul .sub-menu .sub-menu li:hover > a,
						.transto_menu ul .sub-menu .sub-menu .sub-menu li:hover > a,
						.transto_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a,	
						.transto_menu ul .sub-menu li:hover:before	
						
						'
            )
        ) ,
        array(
            'id' => 'transto_submenu_bg_color',
            'type' => 'background',
            'title' => esc_html__('Sub Menu BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                '
				.transto_menu ul .sub-menu
				'
            ) ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'transto_Button_colorm',
            'type' => 'color',
            'title' => esc_html__('Menu Button Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i,.top-form-control button.top-quearys-style'
            )
        ) ,
        array(
            'id' => 'transto_Button_colorurl',
            'type' => 'color',
            'title' => esc_html__('Menu Button BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'background-color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i,.mini_shop_content a span.count',
                'border-color' => '.em-quearys-form,a.dtbtn'
            )
        ) ,
        array(
            'id' => 'button_bg_gr',
            'type' => 'color_gradient',
            'title' => esc_html__('Menu Button Gradient BG Color', 'transto') ,
            'desc' => esc_html__('Set Gradient From here.', 'transto') ,
            'validate' => 'color',
            'default' => array(
                'from' => '',
                'to' => '',
            )
        ) ,
        array(
            'id' => 'transto_Buttonht_colorm',
            'type' => 'color',
            'title' => esc_html__('Menu Button Hover Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => 'a.dtbtn:hover,.creative_header_button > a:hover'
            )
        ) ,
        array(
            'id' => 'transto_Buttonhtb_colorurl',
            'type' => 'color',
            'title' => esc_html__('Menu Button Hover BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'background-color' => '
				a.dtbtn:hover,.creative_header_button > a:hover,
				.dtbtn:hover, .em-quearys-top.msin-menu-search .em-quearys-menu i:hover, .p_menu_social a:hover
				',
				'border-color' => 'a.dtbtn:hover,.em-quearys-top.msin-menu-search .em-quearys-menu i:hover, .p_menu_social a:hover'
            )
        ) ,
        array(
            'id' => 'button_bgh_gr',
            'type' => 'color_gradient',
            'title' => esc_html__('Menu Button Hover Gradient BG Color', 'transto') ,
            'desc' => esc_html__('Set Gradient From here.', 'transto') ,
            'validate' => 'color',
            'default' => array(
                'from' => '',
                'to' => '',
            )
        ) ,
        array(
            'id' => 'transto_menu_bg_color',
            'type' => 'background',
            'title' => esc_html__('Main Menu Section BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                '
				.transto_nav_area,.transprent-menu .transto_nav_area,.hmenu_box_style,.mini_shop_content a i
				'
            ) ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'main_header_border',
            'type' => 'border',
            'title' => __('Section Border Option', 'transto') ,
            'subtitle' => __('Only color validation can be done on this field type', 'transto') ,
            'output' => array(
                '.transto_nav_area,.trp_nav_area'
            ) ,
            'desc' => __('This is the description field, again good for additional info.', 'transto') ,
            'default' => array(
                'border-color' => '',
                'border-style' => 'solid',
                'border-top' => '',
                'border-right' => '',
                'border-bottom' => '',
                'border-left' => ''
            )
        ) ,		
        array(
            'id' => 'menu_spacing',
            'type' => 'spacing',
            'output' => array(
                '.transto_nav_area,.trp_nav_area,.transprent-menu .transto_nav_area'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Section Padding Option', 'transto') ,
            'subtitle' => esc_html__('Set your padding here.', 'transto') ,
            'desc' => esc_html__('Top, Right, Bottom, Left', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,

    ) ,
));

/*========================
END transto HEADER FIELD
=========================*/

/*========================
transto BREADCRUMB FIELD
=========================*/
Redux::setSection($opt_name, array(
    'title' => esc_html__('Breadcrumb Area', 'transto') ,
    'id' => 'transto_bread_page',
    'icon' => 'el-icon-picture',
    'fields' => array(
        array(
            'id' => 'info_normal',
            'type' => 'info',
            'desc' => esc_html__('Notice:- If you want to more breadcrumb control. Please see every page bottom area. We Added More Field Here', 'transto')
        ) ,
        array(
            'id' => 'transto_breadcr_style',
            'type' => 'select',
            'title' => esc_html__('Select Breadcrumb Style', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                '0' => esc_html__('Select style ', 'transto') ,
                '1' => esc_html__('Style 1 ', 'transto') ,
                '2' => esc_html__('Style 2 ', 'transto') ,
                '3' => esc_html__('Breadcrumb None ', 'transto') ,
            ) ,
            'default' => '1'
        ) ,
        array(
            'id' => 'bpage_text_align',
            'type' => 'select',
            'title' => esc_html__('Breadcrumb Text Align Style', 'transto') ,
            'desc' => esc_html__('this option work only, when select Breadcrumb Style 1', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                'text-left' => esc_html__('Align Left', 'transto') ,
                'text-center' => esc_html__('Align Middle', 'transto') ,
                'text-right' => esc_html__('Alige Right', 'transto') ,
            ) ,
            'default' => 'text-center'
        ) ,
        array(
            'id' => 'bpage_text_transform',
            'type' => 'select',
            'title' => esc_html__('Breadcrumb Text Transform Style', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                'lcase' => esc_html__('Transform lowercase', 'transto') ,
                'ucase' => esc_html__('Transform uppercase', 'transto') ,
                'ccase' => esc_html__('Transform capitalize', 'transto') ,
            ) ,
            'default' => 'ccase'
        ) ,

        array(
            'id' => 'transto_breadcrumb_bg',
            'type' => 'background',
            'output' => array(
                '.breadcumb-area,.breadcumb-blog-area'
            ) ,
            'title' => esc_html__('Breadcrumb Background', 'transto') ,
            'subtitle' => esc_html__('Breadcrumb background with image, color.', 'transto') ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'transto_brdov_text_color',
            'type' => 'color_rgba',
            'title' => esc_html__('Breadcumb Overlay', 'transto') ,
            'default' => array(
                'color' => '',
                'alpha' => 1
            ) ,
            'options' => array(
                'show_input' => true,
                'show_initial' => true,
                'show_alpha' => true,
                'show_palette' => true,
                'show_palette_only' => false,
                'show_selection_palette' => true,
                'max_palette_size' => 10,
                'allow_empty' => true,
                'clickout_fires_change' => false,
                'choose_text' => 'Choose',
                'cancel_text' => 'Cancel',
                'show_buttons' => true,
                'use_extended_classes' => true,
                'palette' => null,
                'input_text' => 'Select Color'
            ) ,
            'output' => array(
                'background-color' => '
		.breadcumb-area::before,
		.breadcumb-blog-area::before
		'
            )
        ) ,
        array(
            'id' => 'transto_breadcumb_overlay_gr',
            'type' => 'color_gradient',
            'title' => esc_html__('Breadcumb Overlay Gradient BG Color', 'transto') ,
            'desc' => esc_html__('Set Gradient From here.', 'transto') ,
            'validate' => 'color',
            'default' => array(
                'from' => '',
                'to' => '',
            )
        ) ,
        array(
            'id' => 'transto_bread_titleh',
            'type' => 'switch',
            'title' => esc_html__('Title ON/OFF Option', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_bread_title_page_color',
            'type' => 'typography',
            'title' => esc_html__('Breadcrumb Title Style', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'line-height' => false,
            'text-align' => false,
            'output' => array(
                '
				.brpt .brcrumb_title,.breadcumb-inner .brcrumb_title,.brpt.brptsize .brcrumb_title    
				'
            ) ,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto'),
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
            ) ,
        ) ,

        array(
            'id' => 'transto_bread_menuhide',
            'type' => 'switch',
            'title' => esc_html__('Breadcrumb Menu Hide Option', 'transto'),
            'desc' => esc_html__('When Set ON, Link Item Will Hide and When Set Off, Link Item Will Show', 'transto'),
            'default' => false,
        ) ,
        array(
            'id' => 'transto_current_position',
            'type' => 'text',
            'title' => esc_html__('Change Text Currently Here', 'transto'),
            'desc' => esc_html__('Change your You Are Currently Here text . Not use the field, remove the text from field. It will Show Default', 'transto'),
            'default' => esc_html__('You Here!', 'transto') ,
        ) ,
        array(
            'id' => 'transto_breadhome_textc',
            'type' => 'text',
            'title' => esc_html__('Chnage text Home', 'transto') ,
            'desc' => esc_html__('Change your Home Here text . Not use the field, remove the text from field. It will Show Default', 'transto') ,
            'default' => esc_html__('Home', 'transto'),
        ) ,
        array(
            'id' => 'transto_breadbar_textc',
            'type' => 'text',
            'title' => esc_html__('Change Icon or bar', 'transto') ,
            'desc' => esc_html__('insert icofont icon here. ex - <i class="ti-angle-right"></i> go https://themify.me/themify-icons . Not use the field, remove the text from field.. It will Show Default', 'transto'),
            'default' => esc_html__('-', 'transto') ,
        ) ,
        array(
            'id' => 'transto_breadcrumb_typography',
            'type' => 'typography',
            'title' => esc_html__('Breadcrumb Text And Font style', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'line-height' => false,
            'text-align' => false,
            'output' => array(
                '
      .breadcumb-inner ul,     
      .breadcumb-inner ul span a,     
      .breadcumb-inner li,
      .breadcumb-inner li a,.witr_breadcumb_shop ul li span a     
     '
            ) ,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto'),
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
            ) ,
        ) ,
        array(
            'id' => 'transto_bread_current_page_color',
            'type' => 'color',
            'title' => esc_html__('Breadcrumb Current Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.breadcumb-inner ul span.current,.witr_breadcumb_shop ul li span'
            )
        ) ,
        array(
            'id' => 'spacing',
            'type' => 'spacing',
            'output' => array(
                '.breadcumb-area,.breadcumb-area.breadcumb_st2,.breadcumb-blog-area'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing or margin they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,

    ) ,
));

if (class_exists('WooCommerce'))
{

    Redux::setSection($opt_name, array(
        'title' => esc_html__('Shop Breadcumb', 'transto') ,
        'id' => 'transto_bredshop_page',
        'icon' => 'el-icon-picture',
        'subsection' => true,
        'fields' => array(
            array(
                'id' => 'info_normshop',
                'type' => 'info',
                'desc' => esc_html__('Notice:- All breadcrumb Field working in shop area. if you want to change shop breadcrumb bg image, Please change here', 'transto')
            ) ,
            array(
                'id' => 'transto_shopbread_bg',
                'type' => 'background',
                'output' => array(
                    '.breadcumb-area.breadcumb_st2.msope_bgarea,.breadcumb-area.msope_bgarea'
                ) ,
                'title' => esc_html__('Shop Background Image', 'transto') ,
                'default' => array(
                    'background-color' => '',
                )
            ) ,

        ) ,
    ));
}

/*========================
END transto BREADCRUMB FIELD
=========================*/

/*========================
transto BLOG FIELD
=========================*/
Redux::setSection($opt_name, array(
    'title' => esc_html__('Blog Area', 'transto') ,
    'id' => 'transto_blog_section_area',
	'desc' => esc_html__('Blog and Single Blog Style here', 'transto') ,
    'icon' => 'el el-circle-arrow-right',
    'fields' => array(
        array(
            'id' => 'transto_blog_btn_text',
            'type' => 'text',
            'title' => esc_html__('Blog Button', 'transto') ,
            'desc' => esc_html__('insert button text here. Not use the Button, remove the text from field', 'transto') ,
            'default' => esc_html__('Details', 'transto') ,
        ) ,
        array(
            'id' => 'transto_blog_post_meta',
            'type' => 'switch',
            'title' => esc_html__('Blog Post Meta Hide/Show', 'transto') ,
			'desc' => esc_html__('When set On, It Will Hide', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_blc_hide',
            'type' => 'switch',
            'title' => esc_html__('Blog Single Social Icon Show/Hide', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_blitc',
            'type' => 'background',
            'output' => array(
                '.transto_blog_item,.transto_blog_details'
            ) ,
            'title' => esc_html__('Blog Item BG Color', 'transto') ,
            'subtitle' => esc_html__('BG color', 'transto') ,
            'default' => array(
                'background-color' => '',
            )
        ) ,

        array(
            'id' => 'transto_bltc',
            'type' => 'color',
            'title' => esc_html__('Blog Title Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
						.transto_blog_content h1, .transto_blog_content h2, .transto_blog_content h3, .transto_blog_content h4, .transto_blog_content h5, .transto_blog_content h6,					
						.transto_blog_details h1, .transto_blog_details h2, .transto_blog_details h3, .transto_blog_details h4, .transto_blog_details h5, .transto_blog_details h6,
						.transto_blog_content h2 a,.blog-page-title a,.transto-single-blog-title h2					
					'
            )
        ) ,
        array(
            'id' => 'transto_bltch',
            'type' => 'color',
            'title' => esc_html__('Blog Title Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
					.transto_blog_content h2 a:hover,
					.blog-page-title h2 a:hover,p.sticky_featured				
					',
                'border-color' => '.sticky .transto_blog_item, .tag-sticky-2 .transto_blog_item'
            )
        ) ,
        array(
            'id' => 'transto_bltxc',
            'type' => 'color',
            'title' => esc_html__('Blog Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
					 .transto_blog_content p,
					 .transto_blog_details p,
					 .transto_blog_details ul,
					 .transto_blog_details ol,
					 .transto_blog_details address,
					 .transto_blog_details table tr th,
					 .transto_blog_details table tr td,
					 .transto_blog_details dl,
					 .transto_blog_details dd,
					 .transto_blog_details cite
					'
            )
        ) ,
        array(
            'id' => 'transto_blog_plink',
            'type' => 'color',
            'title' => esc_html__('Blog Link Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
					 .transto_blog_details table tr th a,
					 .transto_blog_details table tr td a,
					 .transto_blog_details a,
					 .transto_blog_details ul a,
					 .transto_blog_details ol a					 
					'
            )
        ) ,
        array(
            'id' => 'transto_blpmc',
            'type' => 'color',
            'title' => esc_html__('Blog Post Meta Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
					.transto_meta span a, .transto_meta span
					'
            )
        ) ,
        array(
            'id' => 'transto_blpmic',
            'type' => 'color',
            'title' => esc_html__('Blog Meta Icon Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
					 .transto_meta i
					'
            )
        ) ,
        array(
            'id' => 'transto_bbltxc',
            'type' => 'color',
            'title' => esc_html__('Blog Button Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
						.blog_readmore a
					'
            )
        ) ,
        array(
            'id' => 'transto_blog_bhctext',
            'type' => 'color',
            'title' => esc_html__('Blog Button Text Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.blog_readmore a:hover'
            )
        ) ,
        array(
            'id' => 'transto_blog_btnbgcolor',
            'type' => 'background',
            'output' => array(
                '.blog_readmore a'
            ) ,
            'title' => esc_html__('Button BG Color', 'transto') ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'transto_blog_bbbtnbgcolor',
            'type' => 'border',
            'output' => array(
                '.blog_readmore a'
            ) ,
            'title' => esc_html__('Button Border Color', 'transto') ,
            'default' => '',
        ),	
        array(
            'id' => 'transto_blog_bhbtnbgcolor',
            'type' => 'background',
            'output' => array(
                '.blog_readmore a:hover'
            ) ,
            'title' => esc_html__('Button Hover BG Color', 'transto') ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'transto_blog_bbhbtnbgcolor',
            'type' => 'border',
            'output' => array(
                '.blog_readmore a:hover'
            ) ,
            'title' => esc_html__('Button Hover Border Color', 'transto') ,
            'default' => '',
        ) ,

        array(
            'id' => 'transto_bstic',
            'type' => 'color',
            'title' => esc_html__('Single Blog Tag Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.transto_sblog_tag ul li a',
                'border-color' => '.transto_sblog_tag ul li a',
            )
        ) ,
        array(
            'id' => 'transto_bstibgc',
            'type' => 'color',
            'title' => esc_html__('Single Blog Tag BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'background-color' => '.transto_sblog_tag ul li a',
                'border-color' => '.transto_sblog_tag ul li a',
            )
        ) ,
        array(
            'id' => 'transto_bsictc',
            'type' => 'color',
            'title' => esc_html__('Single Social Icon Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.transto-single-icon a',
                'border-color' => '.transto-single-icon a',
            )
        ) ,
        array(
            'id' => 'transto_blsoiclh',
            'type' => 'color',
            'title' => esc_html__('Single Blog Social Icon & Tag Hover BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'background-color' => '.transto_sblog_tag ul li a:hover,.transto-single-icon a:hover',
                'border-color' => '.transto_sblog_tag ul li a:hover,.transto-single-icon a:hover',
            )
        ) ,		
        array(
            'id' => 'transto_pgtc',
            'type' => 'color',
            'title' => esc_html__('Pagination Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.paginations a',
                'border-color' => '.paginations a',
            )
        ) ,

        array(
            'id' => 'transto_pghbgc',
            'type' => 'color',
            'title' => esc_html__('Pagination Hover BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'background-color' => '.paginations .page-numbers.current, .transto-blog-area .page-numbers.current, .witr_shop_area .page-numbers.current,.tutor-pagination-wrap span.page-numbers.current,a.page-numbers:hover,.tutor-pagination-wrap a:hover',
                'border-color' => '.paginations .page-numbers.current, .transto-blog-area .page-numbers.current, .witr_shop_area .page-numbers.current,.tutor-pagination-wrap span.page-numbers.current,a.page-numbers:hover,.tutor-pagination-wrap a:hover',
            )
        ) ,
        array(
            'id' => 'transto_blsp',
            'type' => 'spacing',
            'output' => array(
                '.transto_blog_content'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Blog Item Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing or padding they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,
        array(
            'id' => 'transto_blssp',
            'type' => 'spacing',
            'output' => array(
                '.transto_blog_details'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Single Blog Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing or padding they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,			
    )
));
/* blog sidebar */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Blog Sidebar', 'transto') ,
    'id' => 'transto_blogsidebar_page',
    'icon' => 'el-icon-picture',
    'subsection' => true,
    'fields' => array(

        array(
            'id' => 'transto_blog_widget_bgcolor',
            'type' => 'background',
            'output' => array(
                '.transto_s_color > div'
            ) ,
            'title' => esc_html__('Blog Sidebar BG Color', 'transto') ,
            'subtitle' => esc_html__('BG color', 'transto') ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'transto_sidebar_widgett_text_color',
            'type' => 'color',
            'title' => esc_html__('Sidebar Title Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.transto_s_color .widget h2'
            )
        ) ,
        array(
            'id' => 'transto_blog_blockbar_hover',
            'type' => 'color',
            'title' => esc_html__('Title Block Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
							.transto_s_color .widget.widget_block h2, .wp-block-search__label,
							.transto_s_color #wp-calendar>caption,
							.transto_s_color .wp-block-search__button
						'
            )
        ) ,
		
        array(
            'id' => 'transto_wbarst',
            'type' => 'color',
            'title' => esc_html__('Title bar and Block BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'border-color' => '
					.transto_s_color .widget.widget_block h2, .wp-block-search__label,
					.transto_s_color #wp-calendar>caption,
					.transto_s_color .wp-block-search__button,.transto_s_color .widget-title::before',
                'background' => '
					.transto_s_color .widget.widget_block h2,
					.wp-block-search__label,
					.transto_s_color #wp-calendar>caption,
					.transto_s_color .wp-block-search__button
					',
            )
        ) ,
        array(
            'id' => 'transto_sidebar_widget_li_color',
            'type' => 'color',
            'title' => esc_html__('Sidebar Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
							.transto_s_color footer,
							.transto_s_color .widget ul li,
							.transto_s_color .widget ul li a,
							.transto_s_color .widget ul li::before,
							.tagcloud a,
							caption,
							table,
							 table td a,
							cite,
							.rssSummary,
							span.rss-date,
							span.comment-author-link,
							.textwidget p,
							.widget .screen-reader-text,
							.transto_s_color .widget a,
							.transto_s_color .widget p,
							.transto_s_color .widget .tagcloud a,
							.widget.widget_categories select
						'
            )
        ) ,
        array(
            'id' => 'transto_sidebar_widget_li_hover_color',
            'type' => 'color',
            'title' => esc_html__('Sidebar Text Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
							.transto_s_color .widget ul li a:hover,
							.transto_s_color .widget ul li:hover::before,
							.transto_s_color .widget a:hover,
							.transto_s_color .widget .tagcloud a:hover,
							.transto_s_color .widget .wp-block-archives li:hover::before, .transto_s_color .widget .wp-block-categories li:hover::before
						'
            )
        ) ,
        array(
            'id' => 'transto_blog_link',
            'type' => 'color',
            'title' => esc_html__('Blog Link Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
							.transto_s_color .widget a				
						',
                'background-color' => '
							.transto_s_color #wp-calendar th				
						'
            )
        ) ,
        array(
            'id' => 'transto_blog_link_hover',
            'type' => 'color',
            'title' => esc_html__('Blog Link Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
							.transto_s_color .widget a:hover
						'
            )
        ) ,

    ) ,
));

/*========================
END transto BLOG FIELD
=========================*/

/*========================
transto 404 FIELD
=========================*/

Redux::setSection($opt_name, array(
    'title' => esc_html__('404 Area', 'transto') ,
    'id' => 'transto_error_page',
    'desc' => esc_html__('Use this section to upload background images, select background color', 'transto') ,
    'icon' => 'el-icon-cog',
    'fields' => array(
        array(
            'id' => 'transto_background_404',
            'type' => 'background',
            'output' => array(
                '.not-found-area'
            ) ,
            'title' => esc_html__('404 Page Background Color', 'transto') ,
            'subtitle' => esc_html__('404 background with image, color.', 'transto') ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'transto_not_title',
            'type' => 'color',
            'title' => esc_html__('Title Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.not-found-inner h2,.not-found-inner'
            )
        ) ,
        array(
            'id' => 'transto_sub_not_title',
            'type' => 'color',
            'title' => esc_html__('Sub Title Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.not-found-inner p,.not-found-inner strong'
            )
        ) ,
        array(
            'id' => 'transto_not_link_color',
            'type' => 'color',
            'title' => esc_html__('Return Link Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.not-found-inner a'
            )
        ) ,
        array(
            'id' => '404_info',
            'type' => 'editor',
            'title' => esc_html__('404 Information', 'transto') ,
            'subtitle' => esc_html__('HTML tags allowed: a, br, em, strong', 'transto') ,
            'default' => esc_html__('404 Oops! The page you are Looking for does not exist. ', 'transto') ,
            'desc' => esc_html__('Please use title this way. example- <h2>404</h2> and text <p>your text</p>', 'transto') ,
        ) ,
        array(
            'id' => 'transto_notfound_spacing',
            'type' => 'spacing',
            'output' => array(
                '.not-found-area'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Section Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing or padding they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,

    ) ,
));

/*========================
END transto NOT FOUND FIELD
=========================*/

/*========================
transto Scroll Up
=========================*/

Redux::setSection($opt_name, array(
    'title' => esc_html__('ScrollUp Area', 'transto') ,
    'id' => 'transto_scrollup_page',
    'desc' => esc_html__('Use this section to upload background images, select background color', 'transto') ,
    'icon' => 'el-icon-cog',
    'fields' => array(

        array(
            'id' => 'transto_scrollup_color',
            'type' => 'color',
            'title' => esc_html__('Icon Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '#scrollUp i'
            )
        ) ,
        array(
            'id' => 'transto_background_scrollup',
            'type' => 'background',
            'output' => array(
                '#scrollUp'
            ) ,
            'title' => esc_html__('Icon Background Color', 'transto') ,
            'subtitle' => esc_html__('Icon background with image, color.', 'transto') ,
            'default' => array(
                'background-color' => '',
            )
        ) ,

        array(
            'id' => 'transto_scrollup_height_widget',
            'type' => 'dimensions',
            'units' => array(
                'em',
                'px',
                '%'
            ) ,
            'output' => array(
                '#scrollUp'
            ) ,
            'title' => esc_html__('Icon (Width/Height) Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose width, height, and/or unit.', 'transto') ,
            'desc' => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'transto') ,
            'default' => '',
        ) ,

        /*array(
                    'id'        => 'transto_scrollup_line_height',
                    'type'      => 'text',
        'output'    => array('#scrollUp'),
                    'title'     => esc_html__('Icon Line Height ', 'transto'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set number default-40px', 'transto'),
        'default'   =>'',
                ),*/

    ) ,
));

/*========================
END transto NOT FOUND FIELD
=========================*/

/*========================
transto Shop FIELD
=========================*/
if (class_exists('WooCommerce'))
{

    Redux::setSection($opt_name, array(
        'title' => esc_html__('Shop Area', 'transto') ,
        'id' => 'transto_woocom_page',
        'desc' => esc_html__('Set your shop style option here', 'transto') ,
        'icon' => 'el-icon-cog',
        'fields' => array(
        array(
            'id' => 'transto_shopsb',
            'type' => 'select',
            'title' => esc_html__('Shop Style', 'transto') ,
            'default' => '1',
            'options' => array(
                '1' => esc_html__('Shop Left & Right Sidebar', 'transto') ,
                '2' => esc_html__('Shop Right & Left Sidebar', 'transto'),
                '3' => esc_html__('Shop & No Sidebar', 'transto')
            )
        ) ,		
		
            array(
                'id' => 'transto_shop_related',
                'type' => 'switch',
                'title' => esc_html__('Shop Relate Product ON/OFF Option', 'transto') ,
                'default' => true,
            ) ,
            /* Title And Price box color area */
            array(
                'id' => 'transto_woocommerce_count',
                'type' => 'color',
                'title' => esc_html__('Showing Count Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.woocommerce .woocommerce-result-count, .nice-select span.current,.nice-select .option'
                )
            ) ,

            array(
                'id' => 'transto_background_woocommerce',
                'type' => 'background',
                'output' => array(
                    '.tbd_product_content'
                ) ,
                'title' => esc_html__('Background Color', 'transto') ,
                'subtitle' => esc_html__('background, color.', 'transto') ,
                'default' => array(
                    'background-color' => '',
                )
            ) ,
            array(
                'id' => 'transto_woocommerce_title',
                'type' => 'color',
                'title' => esc_html__('Title Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.tbd_product_title h2,.woocommerce div.product .product_title,.tbd_product_title h3,.woocommerce .twr_product_sidebar ul.product_list_widget li a'
                )
            ) ,
            array(
                'id' => 'transto_woocommerce_htitle',
                'type' => 'color',
                'title' => esc_html__('Title Hover Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.tbd_product_title h2:hover,.woocommerce div.product .product_title:hover,.tbd_product_title h3:hover,.woocommerce .twr_product_sidebar ul.product_list_widget li a:hover'
                )
            ) ,
            array(
                'id' => 'transto_price_woocommerce',
                'type' => 'color',
                'title' => esc_html__('Price Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce div.product p.price ins, .woocommerce div.product span.price ins,.woocommerce div.product .stock,.woocommerce .twr_product_sidebar span.woocommerce-Price-amount.amount'
                )
            ) ,
            array(
                'id' => 'transto_price_star_color',
                'type' => 'color',
                'title' => esc_html__('Rating Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.woocommerce .products .star-rating, .woocommerce .star-rating'
                )
            ) ,
            array(
                'id' => 'transto_product_iconc',
                'type' => 'color',
                'title' => esc_html__('Product Icon Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.tbd_product .thb_product_car a'
                )
            ) ,
            array(
                'id' => 'transto_product_iconch',
                'type' => 'color',
                'title' => esc_html__('Product Icon Hover Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.tbd_product .thb_product_car a:hover,.thb_product_car a.added_to_cart:hover:before'
                )
            ) ,
            array(
                'id' => 'transto_product_iconc_bg',
                'type' => 'color',
                'title' => esc_html__('Product Icon BG Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'background-color' => '.tbd_product .thb_product_car a',
                    'border-color' => '.tbd_product .thb_product_car a'

                )
            ) ,
            array(
                'id' => 'transto_product_iconc_hbg',
                'type' => 'color',
                'title' => esc_html__('Product Icon BG Hover Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'background-color' => '.tbd_product .thb_product_car a:hover,.thb_product_car a.added_to_cart:hover:before,.twr_product_sidebar .tagcloud a:hover,.widget_product_search button',
                    'border-color' => '.tbd_product .thb_product_car a:hover,.thb_product_car a.added_to_cart:hover:before,.twr_product_sidebar .tagcloud a:hover,.widget_product_search button,'

                )
            ) ,

            array(
                'id' => 'transto_Button_color_wooco',
                'type' => 'color',
                'title' => esc_html__('Button Text Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled], .woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward, .woocommerce input.button,.woocommerce div.product form.cart .button,.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,.transto_btn,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active,
					ul.tx_product_tab.nav li a'
                )
            ) ,
            array(
                'id' => 'transto_Buttonht_woocommerce',
                'type' => 'color',
                'title' => esc_html__('Button Text Hover Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover,.woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover, .woocommerce input.button:hover,.woocommerce div.product form.cart .button,.transto_btn:hover,.paginations a:hover, .paginations a.current, .page-numbers span.current'
                )
            ) ,
            array(
                'id' => 'transto_Button_bgw',
                'type' => 'color',
                'title' => esc_html__('Button BG Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'background-color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled],  .woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward,  .woocommerce input.button,.woocommerce div.product form.cart .button,.woocommerce div.product .woocommerce-tabs ul.tabs li.active,,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active',

                    'border-left-color' => 'nav.woocommerce-MyAccount-navigation ul li.is-active:after',
                    'border-color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled],.woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward, .woocommerce input.button,.woocommerce div.product form.cart .button,.transto_btn,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active',

                )
            ) ,

            array(
                'id' => 'transto_Buttonhtb_bgwh',
                'type' => 'color',
                'title' => esc_html__('Button Hover & Grid BG Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'background-color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover, .woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover, .woocommerce input.button:hover,.woocommerce div.product form.cart .button,.transto_btn:hover,ul.tx_product_tab.nav li a.active,.paginations a:hover,.paginations a.current, .page-numbers span.current',

                    'border-color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover, .woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover, .woocommerce input.button:hover,.woocommerce div.product form.cart .button,.transto_btn:hover,ul.tx_product_tab.nav li a.active,.paginations a:hover, .paginations a.current, .page-numbers span.current'

                )
            ) ,

            array(
                'id' => 'transto_Button_color_sale',
                'type' => 'color',
                'title' => esc_html__('Sale Button Text Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner '
                )
            ) ,
            array(
                'id' => 'transto_Button_bgsale',
                'type' => 'color',
                'title' => esc_html__('Sale Button BG Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'background-color' => '.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner',
                    'border-color' => '.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner'
                )
            ) ,
            array(
                'id' => 'transto_swoocommerce_title',
                'type' => 'color',
                'title' => esc_html__('Sidebar Title Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.twr_product_sidebar h2.widget-title'
                )
            ) ,
            array(
                'id' => 'transto_swoocommerce_bgtitle',
                'type' => 'color',
                'title' => esc_html__('Sidebar Title BG Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'background-color' => '.twr_product_sidebar h2.widget-title'
                )
            ) ,
            array(
                'id' => 'transto_swoocommerce_textc',
                'type' => 'color',
                'title' => esc_html__('Sidebar Text Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.woocommerce .twr_product_sidebar li a,.woocommerce .twr_product_sidebar li span.count,.twr_product_sidebar p,.twr_product_sidebar .tagcloud a'
                )
            ) ,
            array(
                'id' => 'transto_swoocommerce_barc',
                'type' => 'color',
                'title' => esc_html__('Price Filter Bar color', 'transto') ,
                'default' => '',
                'output' => array(
                    'background-color' => '.woocommerce .widget_price_filter .price_slider_amount .button,.content-widget .widget_price_filter .ui-slider .ui-slider-range,.woocommerce .widget_price_filter .price_slider_amount .button'
                )
            ) ,
            array(
                'id' => 'transto_swoocommerce_rangc',
                'type' => 'color',
                'title' => esc_html__('Price Filter Rang Circle color', 'transto') ,
                'default' => '',
                'output' => array(
                    'background-color' => '.content-widget .widget_price_filter .ui-slider .ui-slider-handle, .content-widget .widget_price_filter .ui-slider .ui-slider-handle'
                )
            ) ,
            array(
                'id' => 'transto_swoocommerce_fpricec',
                'type' => 'color',
                'title' => esc_html__('Sidebar Filter Price color', 'transto') ,
                'default' => '',
                'output' => array(
                    'color' => '.woocommerce .twr_product_sidebar .price_label'
                )
            ) ,
            array(
                'id' => 'transto_swoocommerce_bgcolor',
                'type' => 'color',
                'title' => esc_html__('Sidebar BG Color', 'transto') ,
                'default' => '',
                'output' => array(
                    'background-color' => '.twr_product_sidebar > div'
                )
            ) ,
            array(
                'id' => 'w_sectionshop_spacing',
                'type' => 'spacing',
                'output' => array(
                    '.sec_padding'
                ) ,
                'mode' => 'padding',
                'units' => array(
                    'em',
                    'px'
                ) ,
                'units_extended' => 'false',
                'title' => esc_html__('Section Shop Area Padding Option', 'transto') ,
                'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
                'default' => array(
                    'padding-top' => '',
                    'padding-right' => '',
                    'padding-bottom' => '',
                    'padding-left' => '',
                    'units' => 'px',
                )
            ) ,

        ) ,
    ));

}
/*========================
END transto Shop FIELD
=========================*/
/*========================
transto social FIELD
=========================*/
Redux::setSection($opt_name, array(
    'title' => esc_html__(' Social Icon Section', 'transto') ,
    'id' => 'transto_social_icons_sec',
    'icon' => 'el-icon-cog',
    'fields' => array(
		
   /* array(
        'id'       => 'tx_opt_checkbox',
        'type'     => 'checkbox',
        'title'    => __('Open A New Windows', 'transto'), 
        'desc'     => __('This is the description field', 'transto'),
        'default'  => 'target="_blank"'
    ),*/	
	
	
	
        array(
            'id' => 'transto_social_icons',
            'type' => 'sortable',
            'title' => esc_html__('Insert Social Icons', 'transto') ,
            'subtitle' => esc_html__('Enter social links', 'transto') ,
            'desc' => esc_html__('Drag/drop to re-arrange', 'transto') ,
            'mode' => 'text',
            'label' => true,
            'options' => array(
                'facebook' => '',
                'twitter' => '',
                'instagram' => '',
                'dropbox' => '',
                'skype' => '',
                'github' => '',
                'tumblr' => '',
                'pinterest' => '',
                'google' => '',
                'linkedin' => '',
                'dribbble' => '',
                'youtube' => '',
                'vimeo' => '',
                'apple' => '',

            ) ,
            'default' => array(
                'facebook' => esc_url('#') ,
                'twitter' => esc_url('#') ,
                'instagram' => esc_url('#') ,

            ) ,
        ) ,


    )
));

/*=== Body Social ===*/
Redux::setSection($opt_name, array(
    'title' => esc_html__('Body Social Icon Color', 'transto') ,
    'id' => 'tx_social_icons_body',
    'icon' => 'el el-circle-arrow-right',
	'subsection' => true,
    'fields' => array(
        array(
            'id' => 'transto_header_display_social_hide',
            'desc' => esc_html__('Body Social icon OFF/ON section', 'transto') ,
            'type' => 'switch',
            'title' => esc_html__('Body Social ON/OFF', 'transto') ,
            'default' => false,
        ) ,	
	
        array(
            'id' => 'tx_body_icon_color',
            'type' => 'color',
            'title' => esc_html__(' Icon Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.em_slider_social a',
            )
        ) ,
        array(
            'id' => 'tx_body_icon_bgcolor',
            'type' => 'color',
            'title' => esc_html__(' Icon BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'border-color' => '.em_slider_social a',
                'background-color' => '.em_slider_social a',
            )
        ) ,
        array(
            'id' => 'tx_body_icon_hcolor',
            'type' => 'color',
            'title' => esc_html__(' Icon Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.em_slider_social a:hover',
            )
        ) ,
        array(
            'id' => 'tx_body_icon_hbgcolor',
            'type' => 'color',
            'title' => esc_html__(' Icon BG Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'border-color' => '.em_slider_social a:hover',
                'background-color' => '.em_slider_social a:hover',
            )
        ) ,

    )
));

/*=== Top Social ===*/
Redux::setSection($opt_name, array(
    'title' => esc_html__('Top Social Icon Color', 'transto') ,
    'id' => 'tx_social_icons_top',
    'icon' => 'el el-circle-arrow-right',
	'subsection' => true,
    'fields' => array(
        array(
            'id' => 'tx_top_icon_color',
            'type' => 'color',
            'title' => esc_html__(' Icon Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.top-right-menu .social-icons li a,.top_crmenu_i_list li a i',
            )
        ) ,
        array(
            'id' => 'tx_top_icon_bgcolor',
            'type' => 'color',
            'title' => esc_html__(' Icon BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'border-color' => '.top-right-menu .social-icons li a,.top_crmenu_i_list li a i',
                'background-color' => '.top-right-menu .social-icons li a,.top_crmenu_i_list li a i',
            )
        ) ,
        array(
            'id' => 'tx_top_icon_hcolor',
            'type' => 'color',
            'title' => esc_html__(' Icon Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.top-right-menu .social-icons li a:hover,.top_crmenu_i_list li a i:hover',
            )
        ) ,
        array(
            'id' => 'tx_top_icon_hbgcolor',
            'type' => 'color',
            'title' => esc_html__(' Icon BG Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'border-color' => '.top-right-menu .social-icons li a:hover,.top_crmenu_i_list li a i:hover',
                'background-color' => '.top-right-menu .social-icons li a:hover,.top_crmenu_i_list li a i:hover',
            )
        ) ,

    )
));
/*=== Footer Social ===*/
Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer Social Icon Color', 'transto') ,
    'id' => 'tx_social_icons_footer',
    'icon' => 'el el-circle-arrow-right',
	'subsection' => true,
    'fields' => array(
        array(
            'id' => 'tx_footer_icon_color',
            'type' => 'color',
            'title' => esc_html__(' Icon Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.transto-description-area .social-icons a',
            )
        ) ,
        array(
            'id' => 'tx_footer_icon_bgcolor',
            'type' => 'color',
            'title' => esc_html__(' Icon BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                'border-color' => '.transto-description-area .social-icons a',
                'background-color' => '.transto-description-area .social-icons a',
            )
        ) ,
        array(
            'id' => 'tx_footer_icon_hcolor',
            'type' => 'color',
            'title' => esc_html__(' Icon hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.transto-description-area .social-icons a:hover',
            )
        ) ,
        array(
            'id' => 'tx_footer_icon_hbgcolor',
            'type' => 'color',
            'title' => esc_html__(' Icon BG Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'border-color' => '.transto-description-area .social-icons a:hover',
                'background-color' => '.transto-description-area .social-icons a:hover',
            )
        ) ,

    )
));








/*========================
transto FOOTER FIELD
=========================*/

/*Footer area*/
Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer Area', 'transto') ,
    'id' => 'footer_area_id',
    'desc' => esc_html__('Insert style for top address area', 'transto') ,
    'icon' => 'el-icon-cog',
    'fields' => array(
        array(
            'id' => 'witr_show_hide_shortcode',
            'type' => 'switch',
            'title' => esc_html__('Footer subscribe Section Show/Hide', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_address_hide',
            'type' => 'switch',
            'title' => esc_html__('Footer Address Section Show/Hide', 'transto') ,
            'default' => false,
        ) ,

        array(
            'id' => 'transto_social_hide',
            'type' => 'switch',
            'title' => esc_html__('Footer Logo Section Show/Hide', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_widget_hide',
            'type' => 'switch',
            'title' => esc_html__('Widget Section Hide/show', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_copyright_hide',
            'type' => 'switch',
            'title' => esc_html__('Copyright Section Show/Hide', 'transto') ,
            'default' => false,
        ) ,
        array(
            'id' => 'transto_dfaultwidget_hide',
            'type' => 'switch',
            'title' => esc_html__('Defult Widget Hide', 'transto') ,
            'desc' => esc_html__('Not set on, it show default widget', 'transto') ,
            'default' => false,
        ) ,

        array(
            'id' => 'transto_footer_box_layout',
            'type' => 'select',
            'title' => esc_html__('Select Footer layout', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                'footer_box' => esc_html__('Box Layout', 'transto') ,
                'footer_full' => esc_html__('Full Layout', 'transto') ,
            ) ,
            'default' => 'footer_box'
        ) ,

    )
));

/*========================
transto footer Section subscribe
=========================*/

Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer subscribe Section', 'transto') ,
    'id' => 'transto_shortcode',
    'desc' => esc_html__('This section for Title, Content, Shortcode And color Option', 'transto') ,
    'icon' => 'el el-circle-arrow-right',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => esc_html__('Title Text', 'transto') ,
            'subtitle' => esc_html__('HTML tags allowed: br,span', 'transto') ,
            'id' => 'witr_title_shortcode',
            'default' => 'Add your title here',
            'type' => 'text',
            'desc' => esc_html__('Please use this way Example ex-<span>Add your text here</span>, <a href="#">text</a>, </br>', 'transto') ,
        ) ,
        array(
            'id' => 'witr_content_shortcode',
            'type' => 'textarea',
            'title' => esc_html__('Content Text', 'transto') ,
            'subtitle' => esc_html__('HTML tags allowed: a, br, em, strong,span,b', 'transto') ,
            'default' => esc_html__('Lorem ipsum dolor sit met conjectural ', 'transto') ,
            'desc' => esc_html__('Please use this way Example ex-<span>text</span>, <a href="#">text</a>, <strong>text</strong>, <em>text</em>, <b>text</b>, </br>', 'transto') ,
        ) ,

        /* Shortcode */
        array(
            'title' => esc_html__('Shortcode option', 'transto') ,
            'subtitle' => esc_html__('Add your shortcode here.', 'transto') ,
            'id' => 'witr_footre_shortcode',
            'type' => 'text',
            'desc' => esc_html__('Please use shortcode this way Example ex-[mc4wp_form id="831"]', 'transto') ,
        ) ,

        array(
            'id' => 'transto_shortcode_color',
            'type' => 'typography',
            'title' => esc_html__('Title Typography', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'line-height' => false,
            'text-align' => false,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto') ,
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
            ) ,
            'output' => array(
                '
				  .shortcode_content h2'
            ) ,
        ) ,
        array(
            'id' => 'transto_shortcode_hover_color',
            'type' => 'color',
            'title' => esc_html__('Title Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.shortcode_content h2:hover'
            )
        ) ,

        array(
            'id' => 'transto_short_typo_content',
            'type' => 'typography',
            'title' => esc_html__('Content Typography', 'transto') ,
            'google' => true,
            'font-backup' => true,
            'line-height' => false,
            'text-align' => false,
            'units' => 'px',
            'subtitle' => esc_html__('Typography option with each property can be called individually.', 'transto') ,
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
            ) ,
            'output' => array(
                '
				  .shortcode_content p'
            ) ,
        ) ,

        array(
            'id' => 'transto_shortcode_form_margin',
            'type' => 'spacing',
            'output' => array(
                '.witr_shortcode_form'
            ) ,
            'mode' => 'margin',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__(' shortcode Form Margin', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing margin they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'margin-top' => '',
                'margin-right' => '',
                'margin-bottom' => '',
                'margin-left' => '',
                'units' => 'px',
            )
        ) ,
        array(
            'id' => 'transto_shortcode_bg_color',
            'type' => 'background',
            'title' => esc_html__(' Section BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                '
					.witr_shortcode_inner'
            ) ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'transto_shortcode_section_spacing',
            'type' => 'spacing',
            'output' => array(
                '.witr_shortcode_inner'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__(' Box Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing padding they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,
        array(
            'id' => 'transto_shortcode_section_margin',
            'type' => 'spacing',
            'output' => array(
                '.witr_shortcode_inner'
            ) ,
            'mode' => 'margin',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__(' Box Margin Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing margin they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'margin-top' => '',
                'margin-right' => '',
                'margin-bottom' => '',
                'margin-left' => '',
                'units' => 'px',
            )
        ) ,

    ) ,
));

/* footer Address Section */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer Address Section', 'transto') ,
    'id' => 'transto_address_section',
    'subsection' => true,
    'icon' => 'el el-circle-arrow-right',
    'fields' => array(

        array(
            'id' => 'transto_address_logo_style',
            'type' => 'select',
            'title' => esc_html__('Select Logo Style', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                's_logo_s1' => esc_html__('Show Text Logo', 'transto') ,
                's_logo_s2' => esc_html__('Show Image Logo', 'transto') ,
            ) ,
            'default' => 's_logo_s1'
        ) ,

        array(
            'id' => 'transto_address_title_text',
            'type' => 'text',
            'title' => esc_html__('Address Title Text Logo', 'transto') ,
            'default' => esc_html__('transto', 'transto') ,
            'desc' => esc_html__('Please set this way for different color. ex-  A<span>S</span>T<span>U</span>T<span>E</span>', 'transto') ,
        ) ,
        array(
            'id' => 'transto_address_logo',
            'type' => 'media',
            'title' => esc_html__('Address Image Logo', 'transto') ,
            'compiler' => 'true',
            'mode' => false,
            'desc' => esc_html__('Upload logo here. recommend size:- 220x50px. Notice:- If you upload this logo, Title text logo will be hide ', 'transto') ,
        ) ,
        array(
            'id' => 'transto_address_road',
            'type' => 'text',
            'title' => esc_html__('Address Area Name', 'transto') ,
            'desc' => esc_html__('insert area name ex:- house, road-4.', 'transto') ,
            'default' => esc_html__('1st Floor New World Tower Rang.', 'transto') ,
        ) ,
        array(
            'id' => 'transto_address_email',
            'type' => 'text',
            'title' => esc_html__('Email Number', 'transto') ,
            'desc' => esc_html__('Insert email number', 'transto') ,
            'default' => esc_html__('demo@example.com', 'transto') ,
        ) ,
        array(
            'id' => 'transto_address_mobile',
            'type' => 'text',
            'title' => esc_html__('Phone Number', 'transto') ,
            'desc' => esc_html__('Insert phone number', 'transto') ,
            'default' => esc_html__('+998 556 778 345', 'transto') ,
        ) ,
        array(
            'id' => 'transto_address_title_text_color',
            'type' => 'color',
            'title' => esc_html__('Address Title Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.footer-top-address h2'
            )
        ) ,
        array(
            'id' => 'transto_address_title2_text_color',
            'type' => 'color',
            'title' => esc_html__('Address Title Text Color 2', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.footer-top-address h2 span'
            )
        ) ,
        array(
            'id' => 'transto_address_text_color',
            'type' => 'color',
            'title' => esc_html__('Address Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.top_address_content a,.top_address_content span'
            )
        ) ,
        array(
            'id' => 'transto_address_bg_color',
            'type' => 'background',
            'title' => esc_html__('Address Section BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                '
						.top-address-area
					'
            ) ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'transto_address_section_spacing',
            'type' => 'spacing',
            'output' => array(
                '.top-address-area'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing padding they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,
    )
));
/* footer logo section */
Redux::setSection($opt_name, array(
    'title' => esc_html__(' Footer Logo Section', 'transto') ,
    'id' => 'transto_social_section',
    'icon' => 'el el-circle-arrow-right',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'transto_social_logo_style',
            'type' => 'select',
            'title' => esc_html__('Select Logo Style', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                's_logo_s1' => esc_html__('Show Text Logo', 'transto') ,
                's_logo_s2' => esc_html__('Show Image Logo', 'transto') ,
            ) ,
            'default' => 's_logo_s1'
        ) ,

        array(
            'id' => 'transto_social_title_text',
            'type' => 'text',
            'title' => esc_html__('Footer Title Text Logo', 'transto') ,
            'default' => esc_html__('transto', 'transto') ,
            'desc' => esc_html__('Please set this way for different color. ex-  A<span>S</span>T<span>U</span>T<span>E</span>', 'transto') ,
        ) ,
        array(
            'id' => 'transto_social_logo',
            'type' => 'media',
            'title' => esc_html__('Footer Image Logo', 'transto') ,
            'compiler' => 'true',
            'mode' => false,
            'desc' => esc_html__('Upload logo here. recommend size:- 220x50px. Notice:- If you upload this logo, Title text logo will be hide ', 'transto') ,
        ) ,
        array(
            'id' => 'transto_social_text',
            'type' => 'editor',
            'title' => esc_html__('Footer logo information', 'transto') ,
            'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur ahkl adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud', 'transto') ,
            'args' => array(
                'teeny' => true,
                'textarea_rows' => 5,
                'media_buttons' => false,
            )
        ) ,
        array(
            'id' => 'transto_social_title_text_color',
            'type' => 'color',
            'title' => esc_html__('Footer logo Title Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.footer-top-inner h2'
            )
        ) ,
        array(
            'id' => 'transto_social_title2_text_color',
            'type' => 'color',
            'title' => esc_html__('Footer logo Title Text Color 2', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.footer-top-inner h2 span'
            )
        ) ,
        array(
            'id' => 'transto_social_text_color',
            'type' => 'color',
            'title' => esc_html__('Footer logo content Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.footer-top-inner p'
            )
        ) ,
        array(
            'id' => 'transto_social_bg_color',
            'type' => 'background',
            'title' => esc_html__('Footer logo Section BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                '
						.footer-top
					'
            ) ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'transto_social_section_spacing',
            'type' => 'spacing',
            'output' => array(
                '.footer-top'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing padding they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,

    )
));
/*  footer widget area */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer Widget Section', 'transto') ,
    'id' => 'transto_widget_section',
    'subsection' => true,
    'icon' => 'el el-circle-arrow-right',
    'fields' => array(
        array(
            'id' => 'transto_wmb_bg_color',
            'type' => 'background',
            'title' => esc_html__('Together Widget and Cppyright Section BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                '.witrfm_area'
            ) ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'footer_wcs_gr',
            'type' => 'color_gradient',
            'title' => esc_html__('Widget and Cppyright Section Gradient BG Color', 'transto') ,
            'desc' => esc_html__('Set Gradient From here.', 'transto') ,
            'validate' => 'color',
            'default' => array(
                'from' => '',
                'to' => '',
            )
        ) ,
        array(
            'id' => 'transto_wmbov_bg_color',
            'type' => 'color_rgba',
            'title' => esc_html__('Widget and Cppyright Section Overlay', 'transto') ,
            'default' => array(
                'color' => '#00509f',
                'alpha' => 0
            ) ,
            'output' => array(
                'background-color' => '.witrfm_area:before'
            )
        ) ,
        array(
            'id' => 'twr_heading_widget_c',
            'type' => 'info',
            'desc' => esc_html__('Please set your column Width Below options. total column width - 100%', 'transto')
        ) ,
        array(
            'id' => 'transto_widget_column_count1',
            'type' => 'select',
            'title' => esc_html__('Footer Widget 1', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                '1' => esc_html__('Column 1 =  8.33%', 'transto') ,
                '2' => esc_html__('Column 2 = 16.66%', 'transto') ,
                '3' => esc_html__('Column 3 = 25%', 'transto') ,
                '4' => esc_html__('Column 4 = 33.33%', 'transto') ,
                '6' => esc_html__('Column 6 = 50%', 'transto') ,
                '12' => esc_html__('Column 12 = 100%', 'transto') ,
                'd-none' => esc_html__('Column Hide', 'transto') ,
            ) ,
            'default' => '4'
        ) ,
        array(
            'id' => 'transto_widget_column_count2',
            'type' => 'select',
            'title' => esc_html__('Footer Widget 2', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                '1' => esc_html__('Column 1 =  8.33%', 'transto') ,
                '2' => esc_html__('Column 2 = 16.66%', 'transto') ,
                '3' => esc_html__('Column 3 = 25%', 'transto') ,
                '4' => esc_html__('Column 4 = 33.33%', 'transto') ,
                '6' => esc_html__('Column 6 = 50%', 'transto') ,
                '12' => esc_html__('Column 12 = 100%', 'transto') ,
                'd-none' => esc_html__('Column Hide', 'transto') ,
            ) ,
            'default' => '2'
        ) ,
        array(
            'id' => 'transto_widget_column_count3',
            'type' => 'select',
            'title' => esc_html__('Footer Widget 3', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                '1' => esc_html__('Column 1 =  8.33%', 'transto') ,
                '2' => esc_html__('Column 2 = 16.66%', 'transto') ,
                '3' => esc_html__('Column 3 = 25%', 'transto') ,
                '4' => esc_html__('Column 4 = 33.33%', 'transto') ,
                '6' => esc_html__('Column 6 = 50%', 'transto') ,
                '12' => esc_html__('Column 12 = 100%', 'transto') ,
                'd-none' => esc_html__('Column Hide', 'transto') ,
            ) ,
            'default' => '2'
        ) ,
        array(
            'id' => 'transto_widget_column_count4',
            'type' => 'select',
            'title' => esc_html__('Footer Widget 4', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                '1' => esc_html__('Column 1 =  8.33%', 'transto') ,
                '2' => esc_html__('Column 2 = 16.66%', 'transto') ,
                '3' => esc_html__('Column 3 = 25%', 'transto') ,
                '4' => esc_html__('Column 4 = 33.33%', 'transto') ,
                '6' => esc_html__('Column 6 = 50%', 'transto') ,
                '12' => esc_html__('Column 12 = 100%', 'transto') ,
                'd-none' => esc_html__('Column Hide', 'transto') ,
            ) ,
            'default' => '4'
        ) ,
        array(
            'id' => 'transto_fwtc',
            'type' => 'color',
            'title' => esc_html__('Widget Title Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.footer-middle .widget h2'
            )
        ) ,
        array(
            'id' => 'transto_fwc',
            'type' => 'color',
            'title' => esc_html__('Widget Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
							.footer-middle .widget ul li,
							.footer-middle .widget ul li a,
							.footer-middle .widget ul li::before,
							.footer-middle .tagcloud a,
							.footer-middle caption,
							.footer-middle table,
							.footer-middle table td a,
							.footer-middle cite,
							.footer-middle .rssSummary,
							.footer-middle span.rss-date,
							.footer-middle span.comment-author-link,
							.footer-middle .textwidget p,
							.footer-middle .widget .screen-reader-text,
							.transto_f_color .widget p,
							.mc4wp-form-fields p,
							.mc4wp-form-fields,
							.footer-m-address p,
							.footer-m-address,
							.footer-widget.address,
							.footer-widget.address p,
							.mc4wp-form-fields p,
							.transto-description-area p, 
							.transto-description-area .phone a,
							.transto-description-area .social-icons a,
							.recent-review-content h3,
							.recent-review-content h3 a,
							.recent-review-content p,
							.footer-middle .transto-description-area p,
							.footer-middle .recent-post-text h4 a,
							.footer-middle .recent-post-text .rcomment,
							.witr_sub_table span
							
						'
            )
        ) ,
        array(
            'id' => 'transto_fwch',
            'type' => 'color',
            'title' => esc_html__('Widget Text Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '
							.footer-middle .widget ul li a:hover,
							.footer-middle .widget ul li:hover::before,
							.footer-middle .sub-menu li a:hover, 
							.footer-middle .nav .children li a:hover,
							.footer-middle .tagcloud a:hover,
							#today
						'
            )
        ) ,
        array(
            'id' => 'transto_fwbg',
            'type' => 'background',
            'title' => esc_html__('Widget Section BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                '
				.footer-middle
				'
            ) ,
            'default' => array(
                'background-color' => '',
            )
        ) ,
        array(
            'id' => 'transto_fwpd',
            'type' => 'spacing',
            'output' => array(
                '.footer-middle'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing padding they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,

    )
));

/* footer copyright text */
Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer Copyright Info', 'transto') ,
    'id' => 'transto_copyright',
    'desc' => esc_html__('Insert your copyright style', 'transto') ,
    'icon' => 'el el-circle-arrow-right',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'transto_fcst',
            'type' => 'select',
            'title' => esc_html__('Copyright Style Layout', 'transto') ,
            'customizer_only' => false,
            'options' => array(
                'copy_s1' => esc_html__('Copyright Text Style', 'transto') ,
                'copy_s2' => esc_html__('Copyright Text and Right Menu', 'transto') ,
                'copy_s3' => esc_html__('Copyright Text and Left Menu', 'transto') ,
                'copy_s4' => esc_html__('Copyright Text and Social Icon', 'transto') ,
            ) ,
            'default' => 'copy_s2'
        ) ,
        array(
            'id' => 'transto_wftp_color',
            'type' => 'background',
            'title' => esc_html__('Top Boeder Color', 'transto') ,
            'default' => '',
            'output' => array(
                '
						.footer-bottom:before
					'
            ) ,
            'default' => array(
                'background-color' => '',
            )
        ) ,

        array(
            'id' => 'transto_copyright_text',
            'type' => 'editor',
            'title' => esc_html__('Copyright information', 'transto') ,
            'subtitle' => esc_html__('HTML tags allowed: a, br, em, strong', 'transto') ,
            'default' => esc_html__('Copyright &copy; transto all rights reserved.', 'transto') ,
            'args' => array(
                'teeny' => true,
                'textarea_rows' => 5,
                'media_buttons' => false,
            )
        ) ,
        array(
            'id' => 'transto_fcc',
            'type' => 'color',
            'title' => esc_html__('Copyright Text Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.copy-right-text p,.footer-menu ul li a'
            )
        ) ,
        array(
            'id' => 'transto_fcch',
            'type' => 'color',
            'title' => esc_html__('Copyright Text Hover Color', 'transto') ,
            'default' => '',
            'output' => array(
                'color' => '.copy-right-text a, .footer-menu ul li a:hover'
            )
        ) ,
        array(
            'id' => 'transto_fcbg',
            'type' => 'background',
            'title' => esc_html__('Copyright Section BG Color', 'transto') ,
            'default' => '',
            'output' => array(
                '
				.footer-bottom
				'
            ) ,
            'default' => array(
                'background-color' => '',
            )
        ) ,

        array(
            'id' => 'transto_fcr_pd',
            'type' => 'spacing',
            'output' => array(
                '.footer-bottom'
            ) ,
            'mode' => 'padding',
            'units' => array(
                'em',
                'px'
            ) ,
            'units_extended' => 'false',
            'title' => esc_html__('Padding Option', 'transto') ,
            'subtitle' => esc_html__('Allow your users to choose the spacing padding they want.', 'transto') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'transto') ,
            'default' => array(
                'padding-top' => '',
                'padding-right' => '',
                'padding-bottom' => '',
                'padding-left' => '',
                'units' => 'px',
            )
        ) ,

    ) ,
));

/* ========================
END transto FOOTER FIELD
=========================*/

