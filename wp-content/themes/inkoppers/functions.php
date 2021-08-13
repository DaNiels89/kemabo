<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

load_theme_textdomain("inkoppers", get_template_directory() . "/languages");

register_nav_menus();

add_theme_support("title-tag");
add_theme_support("html5", ["search-form", "comment-form", "comment-list", "gallery", "caption"]);
add_theme_support("post-thumbnails");
add_theme_support("customize-selective-refresh-widgets");
add_theme_support("post-formats", ["aside", "image", "video", "quote", "link"]);
add_theme_support("custom-logo");
add_theme_support("responsive-embeds");

function enqueue_scripts()
{
    $version = wp_get_theme()->get("Version");

    wp_enqueue_style("bootstrap-css", get_stylesheet_directory_uri() . "/css/bootstrap.min.css", [], $version);
    wp_enqueue_style("font-awesome-css", get_stylesheet_directory_uri() . "/css/all.min.css", [], $version);
    wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;700&display=swap", [], $version);
    wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=Montserrat&display=swap", [], $version);
    wp_enqueue_style("slick-css", get_stylesheet_directory_uri() . "/slick/slick.css", [], $version);
    wp_enqueue_style("slick-theme-css", get_stylesheet_directory_uri() . "/slick/slick-theme.css", [], $version);
    wp_enqueue_style("styles-css", get_stylesheet_directory_uri() . "/css/styles.min.css", [], $version);

    wp_enqueue_script("jquery-js", get_stylesheet_directory_uri() . "/js/jquery-3.5.1.min.js", [], $version);
    wp_enqueue_script("bootstrap-js", get_stylesheet_directory_uri() . "/js/bootstrap.bundle.min.js", [], $version);
    wp_enqueue_script("slick-js", get_stylesheet_directory_uri() . "/slick/slick.min.js", [], $version);
    wp_enqueue_script("custom-js", get_stylesheet_directory_uri() . "/js/custom.js", [], $version);
}

add_action("wp_enqueue_scripts", "enqueue_scripts");

if (function_exists("acf_add_options_page"))
{
    acf_add_options_page();
}

add_filter("wpcf7_autop_or_not", "__return_false");

function wpharvest_yoasttobottom()
{
    return "low";
}

add_filter("wpseo_metabox_prio", "wpharvest_yoasttobottom");

add_image_size("mobile-laying-image", 314, 188, ["center", "center"]);
add_image_size("mobile-laying-image-taller", 314, 210, ["center", "center"]);
add_image_size("mobile-team-image", 314, 314, ["center", "center"]);
add_image_size("team-image", 398, 398, ["center", "center"]);
add_image_size("big-laying-image", 1228, 734, ["center", "center"]);
add_image_size("tall-standing-image", 674, 916, ["center", "center"]);
add_image_size("small-laying-image", 674, 450, ["center", "center"]);