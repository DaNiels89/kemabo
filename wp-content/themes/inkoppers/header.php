<?php
// Exit if accessed directly.
defined( "ABSPATH" ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action("wp_body_open"); ?>

<!-- Mobile menu -->
<nav id="mobile-menu" class="navbar navbar-expand-lg navbar-light bg-white d-lg-none">
  <a class="navbar-brand" href="<?php echo home_url(); ?>">
    <img src="/kemabo/wp-content/uploads/2021/08/logo.svg" width="152,37" height="30,5" class="img-fluid" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="custom-toggler navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu(['menu' => 'Hoofdmenu', 'container' => false, 'menu_class' => false]); ?>
  </div>
</nav>

<!-- Desktop menu -->
<nav id="desktop-menu" class="navbar navbar-light bg-white d-none d-lg-block">
  <div class="desktop-menu-wrapper">
    <div class="desktop-menu-logo-div">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="/kemabo/wp-content/uploads/2021/08/logo-desktop.svg" width="243,11" height="44,85" class="img-fluid" alt="">
      </a>
    </div>
    <div class="desktop-menu-pages-links-div">
      <?php wp_nav_menu(['menu' => 'Hoofdmenu', 'container' => false, 'menu_class' => false]); ?>
    </div>
    <div class="desktop-menu-contact-link-div">
      <a href="<?php echo home_url("over-ons"); ?>" class="desktop-menu-a">
        Contact opnemen
        <svg class="desktop-menu-svg" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
          <rect id="Rectangle_93" data-name="Rectangle 93" width="50" height="50" />
          <path id="chevron-right-solid" d="M36.47,45.844l-6.761,6.761a.835.835,0,0,1-1.181,0l-.789-.789a.835.835,0,0,1,0-1.179L33.1,45.254,27.738,39.87a.835.835,0,0,1,0-1.179l.789-.789a.835.835,0,0,1,1.181,0l6.761,6.761A.835.835,0,0,1,36.47,45.844Z" transform="translate(-7.495 -20.657)"/>
        </svg>
      </a>
    </div>
  </div>
</nav>