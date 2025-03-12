<?php
/**
 * transto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package transto
 */

if (!function_exists("transto_setup")):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function transto_setup()
    {
        load_theme_textdomain("transto", get_template_directory() . "/languages");
        add_theme_support("automatic-feed-links");
        add_theme_support("title-tag");
        add_theme_support("post-formats", [
            "gallery",
            "quote",
            "video",
            "audio",
            "image",
            "link",
        ]);
        add_image_size("transto_390x350", 390, 350, true);
        add_image_size("transto_900x350", 975, 548, true);
        add_image_size("transto_900x550", 900, 550, true);
        add_image_size("transto_570x350", 570, 350, true);
        add_image_size("transto_1170x600", 1170, 600, true);
        add_image_size("transto_recent_image", 70, 70, true);
        add_theme_support("woocommerce");
        add_theme_support("wc-product-gallery-zoom");
        add_theme_support("wc-product-gallery-lightbox");
        add_theme_support("wc-product-gallery-slider");
        add_theme_support("post-thumbnails");
        add_editor_style();
        add_theme_support("align-wide");
        add_theme_support("responsive-embeds");
		add_theme_support( "wp-block-styles" );		
        register_nav_menus([
            "menu-top" => esc_html__("Top Menu", "transto"),
            "menu-1" => esc_html__("Main Menu", "transto"),
            "one-pages" => esc_html__("One Page Menu", "transto"),
            "menu-2" => esc_html__("Footer Menu", "transto"),
            "menu-3" => esc_html__("Mobile Menu", "transto"),
        ]);
        add_theme_support("html5", [
            "search-form",
            "comment-form",
            "comment-list",
            "gallery",
            "caption",
        ]);

        add_theme_support(
            "custom-background",
            apply_filters("transto_custom_background_args", [
                "default-color" => "ffffff",
                "default-image" => "",
            ])
        );
		
        add_theme_support("customize-selective-refresh-widgets");
    }
endif;
add_action("after_setup_theme", "transto_setup");
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
/*
Register Fonts
 */
if(!function_exists('transto_fonts_url')){
	
	function transto_fonts_url(){
    $font_url = '';
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */	 
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'transto' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap');
    }
    return $font_url;
	}	
} 

/* load style */
if (!function_exists("transto_styles")) {
    function transto_styles()
    {
        global $transto_opt;
        global $post;
        $toptsst = get_post_meta(get_the_ID(), "_txbdm_toptsst", true);
        $twr_menu_header_style = get_post_meta(get_the_ID(),"_txbdm_menu_header_style",true);
        if (is_rtl()) {
	
            wp_enqueue_style( 'transto-fonts', transto_fonts_url(), array(), time() );
            wp_enqueue_style("all_plugin", get_template_directory_uri() . "/assets/css/all_plugin.css");
            wp_enqueue_style("bootstrap", get_template_directory_uri() . "/assets/css/bootstrap.rtl.css");
            wp_enqueue_style("venobox", get_template_directory_uri() . "/venobox/venobox.min.css");		
            if (
                (!empty($transto_opt["twr_defaulth_menu_layout"]) && $transto_opt["twr_defaulth_menu_layout"] == "mhamburger") || $twr_menu_header_style == "mhamburger" ) {
                wp_enqueue_style("hamburger",get_template_directory_uri() . "/assets/css/hamburger.rtl.css" );
            }
            if (
                (!empty($transto_opt["transto_header_top_two_hide"]) && $transto_opt["transto_header_top_two_hide"] == true) || $toptsst == 1 ) {
                wp_enqueue_style( "top_middle", get_template_directory_uri() . "/assets/css/top_middle.rtl.css");
            }

            /*
             * Enqueueing JavaScript Files
             */

            if (class_exists("WooCommerce")) {
                wp_register_style("woo_theme",get_template_directory_uri() . "/assets/css/woo_theme.rtl.css" );
                wp_enqueue_style("woo_theme");

                if (
                    is_shop() ||
                    is_tax("product_cat") ||
                    is_singular("product") ||
                    is_tax("product_tag") ||
                    is_checkout() ||
                    is_account_page() ||
                    is_checkout() ||
                    is_checkout()
                ) {
                    wp_enqueue_style("woo_theme");
                }
                if (
                    is_shop() ||
                    is_tax("product_cat") ||
                    is_tax("product_tag")
                ) {
                    wp_enqueue_style("niceselect", get_template_directory_uri() ."/assets/css/niceselect.css");
                    wp_enqueue_script( "niceselect", get_template_directory_uri() ."/assets/js/niceselect.js",["jquery"],"3.3.5", true);
                }
            }

            /* headroom menu js */
            if (
                (!empty($transto_opt["twr_defaulth_menu_layout"]) && $transto_opt["twr_defaulth_menu_layout"] == "mheadroom") || $twr_menu_header_style == "mheadroom" ) {
                wp_enqueue_script("headroom", get_template_directory_uri() . "/assets/js/headroom.js", ["jquery"],"3.3.5", true );
            }

            /* main css */
            wp_enqueue_style("transto_style", get_stylesheet_uri());
			wp_style_add_data( 'transto_style', 'rtl', 'replace' );
            /* main theme js */
            wp_enqueue_script("imagesloaded");
            wp_enqueue_script("bootstrap", get_template_directory_uri() . "/assets/js/bootstrap.min.js",["jquery"],"1", true );
            wp_enqueue_script("venobox", get_template_directory_uri() . "/venobox/venobox.min.js", ["jquery"],"1", true );			
            wp_enqueue_script("theme-plugin", get_template_directory_uri() . "/assets/js/theme-pluginjs.js",  ["jquery"], "1", true );
            wp_enqueue_script("transto-themes", get_template_directory_uri() . "/assets/js/theme.rtl.js",["jquery"],"1", true );			
			
			/* End RTL css */	
        } else {
            wp_enqueue_style( 'transto-fonts', transto_fonts_url(), array(), time() );
            wp_enqueue_style("all_plugin", get_template_directory_uri() . "/assets/css/all_plugin.css");
            wp_enqueue_style("bootstrap", get_template_directory_uri() . "/assets/css/bootstrap.min.css");
            wp_enqueue_style("venobox", get_template_directory_uri() . "/venobox/venobox.min.css");		
            if (
                (!empty($transto_opt["twr_defaulth_menu_layout"]) && $transto_opt["twr_defaulth_menu_layout"] == "mhamburger") || $twr_menu_header_style == "mhamburger" ) {
                wp_enqueue_style("hamburger",get_template_directory_uri() . "/assets/css/hamburger.css" );
            }
            if (
                (!empty($transto_opt["transto_header_top_two_hide"]) && $transto_opt["transto_header_top_two_hide"] == true) || $toptsst == 1 ) {
                wp_enqueue_style( "top_middle", get_template_directory_uri() . "/assets/css/top_middle.css");
            }

            /*
             * Enqueueing JavaScript Files
             */

            if (class_exists("WooCommerce")) {
                wp_register_style("woo_theme",get_template_directory_uri() . "/assets/css/woo_theme.css" );
                wp_enqueue_style("woo_theme");

                if (
                    is_shop() ||
                    is_tax("product_cat") ||
                    is_singular("product") ||
                    is_tax("product_tag") ||
                    is_checkout() ||
                    is_account_page() ||
                    is_checkout() ||
                    is_checkout()
                ) {
                    wp_enqueue_style("woo_theme");
                }
                if (
                    is_shop() ||
                    is_tax("product_cat") ||
                    is_tax("product_tag")
                ) {
                    wp_enqueue_style("niceselect", get_template_directory_uri() ."/assets/css/niceselect.css");
                    wp_enqueue_script( "niceselect", get_template_directory_uri() ."/assets/js/niceselect.js",["jquery"],"3.3.5", true);
                }
            }

            /* headroom menu js */
            if (
                (!empty($transto_opt["twr_defaulth_menu_layout"]) &&
                    $transto_opt["twr_defaulth_menu_layout"] == "mheadroom") ||
                $twr_menu_header_style == "mheadroom"
            ) {
                wp_enqueue_script("headroom", get_template_directory_uri() . "/assets/js/headroom.js", ["jquery"],"3.3.5", true );
            }

            /* main css */
            wp_enqueue_style("transto_style", get_stylesheet_uri());
            /* main theme js */
            wp_enqueue_script("imagesloaded");
            wp_enqueue_script("bootstrap", get_template_directory_uri() . "/assets/js/bootstrap.min.js",["jquery"],"1", true );
            wp_enqueue_script("venobox", get_template_directory_uri() . "/venobox/venobox.min.js", ["jquery"],"1", true );			
            wp_enqueue_script("theme-plugin", get_template_directory_uri() . "/assets/js/theme-pluginjs.js",  ["jquery"], "1", true );
            wp_enqueue_script("transto-themes", get_template_directory_uri() . "/assets/js/theme.js",["jquery"],"1", true );
        } /* rtl end */

        if (is_singular() && comments_open() && get_option("thread_comments")) {
            wp_enqueue_script("comment-reply");
        }
    }
}

add_action("wp_enqueue_scripts", "transto_styles");

/**
 * transto widget js
 */
if (!function_exists("transto_media_scripts")) {
    function transto_media_scripts()
    {
        wp_enqueue_media();
        wp_enqueue_script(
            "transto-uploader",
            get_template_directory_uri() . "/assets/js/twr_uploader.js",
            false,
            "",
            true
        );
    }
}
add_action("admin_enqueue_scripts", "transto_media_scripts");

function transto_content_width()
{
    if (!isset($content_width)) {
        $content_width = 900;
    }
}

/* Content word count */
if (!function_exists("transto_read_more")) {
    function transto_read_more($limit)
    {
        $content = explode(" ", get_the_content());
        $count = array_slice($content, 0, $limit);
        echo implode(" ", $count);
    }
}

/*  Title word count */
if (!function_exists("the_title")) {
    function the_title($limit)
    {
        $title = explode(" ", get_the_title());
        $titles = array_slice($title, 0, $limit);
        echo implode(" ", $titles);
    }
}
/*  word count */
if (!function_exists("transto_excerpt")) {
    function transto_excerpt()
    {
        $transto_ctext_limit = 26;
        $transto_p_excerpt = get_the_excerpt();
        $excerpt =
            strlen(trim($transto_p_excerpt)) != 0
                ? wp_trim_words(get_the_excerpt(), $transto_ctext_limit, "")
                : wp_trim_words(get_the_content(), $transto_ctext_limit, "");

        return wp_kses_post($excerpt);
    }
}

/**
 * Register widget area.
 */
if (!function_exists("transto_widgets_init")) {
    function transto_widgets_init()
    {
        register_sidebar([
            "name" => esc_html__("Blog Left Sidebar", "transto"),
            "id" => "sidebar-1",
            "description" => esc_html__("Add widgets here.", "transto"),
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => '<h2 class="widget-title">',
            "after_title" => "</h2>",
        ]);
        register_sidebar([
            "name" => esc_html__("Blog Right Sidebar", "transto"),
            "id" => "sidebar-2",
            "description" => esc_html__("Add widgets here.", "transto"),
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => '<h2 class="widget-title">',
            "after_title" => "</h2>",
        ]);
        register_sidebar([
            "name" => esc_html__("Page Left Sidebar", "transto"),
            "id" => "sidebar-3",
            "description" => esc_html__("Add widgets here.", "transto"),
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => '<h2 class="widget-title">',
            "after_title" => "</h2>",
        ]);
        register_sidebar([
            "name" => esc_html__("Page Right Sidebar", "transto"),
            "id" => "sidebar-4",
            "description" => esc_html__("Add widgets here.", "transto"),
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => '<h2 class="widget-title">',
            "after_title" => "</h2>",
        ]);
        register_sidebar([
            "name" => esc_html__("Shop Sidebar", "transto"),
            "id" => "sidebar_shop",
            "description" => esc_html__("Add widgets here.", "transto"),
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => '<h2 class="widget-title">',
            "after_title" => "</h2>",
        ]);
        register_sidebar([
            "name" => esc_html__("Popup Menu Sidebar", "transto"),
            "id" => "sidebar-pop",
            "description" => esc_html__("Add widgets here.", "transto"),
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => '<h2 class="widget-title">',
            "after_title" => "</h2>",
        ]);

        /**
         * Register Footer Sidebars
         */
        register_sidebar([
            "id" => "twr-footer-1",
            "name" => esc_html__("Footer widget 1", "transto"),
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => '<h2 class="widget-title">',
            "after_title" => "</h2>",
        ]);
        register_sidebar([
            "id" => "twr-footer-2",
            "name" => esc_html__("Footer widget 2", "transto"),
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => '<h2 class="widget-title">',
            "after_title" => "</h2>",
        ]);
        register_sidebar([
            "id" => "twr-footer-3",
            "name" => esc_html__("Footer widget 3", "transto"),
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => '<h2 class="widget-title">',
            "after_title" => "</h2>",
        ]);
        register_sidebar([
            "id" => "twr-footer-4",
            "name" => esc_html__("Footer widget 4", "transto"),
            "before_widget" => '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => '<h2 class="widget-title">',
            "after_title" => "</h2>",
        ]);
    }
}
add_action("widgets_init", "transto_widgets_init");

function sunset_get_embedded_media($type = [])
{
    $content = do_shortcode(apply_filters("the_content", get_the_content()));
    $embed = get_media_embedded_in_content($content, $type);

    if (in_array("audio", $type)):
        $output = str_replace("?visual=true", "?visual=false", $embed[0]);
    else:
        $output = $embed[0];
    endif;

    return $output;
}
/* load redux  */
if (class_exists("ReduxFrameworkPlugin")) {
    require get_template_directory() . "/includes/twr-option-framework.php";
}
require get_template_directory() . "/includes/twr-global-function.php";
require get_template_directory() . "/includes/twr-breadcrumb.php";
require get_template_directory() . "/includes/twr-wooconfig.php";
require get_template_directory() . "/includes/twr-tgm-activation.php";
