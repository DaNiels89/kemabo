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
    wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap", [], $version);
    wp_enqueue_style("styles-css", get_stylesheet_directory_uri() . "/css/styles.min.css", [], $version);

    wp_enqueue_script("jquery-js", get_stylesheet_directory_uri() . "/js/jquery-3.5.1.min.js", [], $version);
    wp_enqueue_script("bootstrap-js", get_stylesheet_directory_uri() . "/js/bootstrap.bundle.min.js", [], $version);
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