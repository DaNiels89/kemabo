<?php
// Exit if accessed directly.
defined( "ABSPATH" ) || exit;

$headerLogo = get_field("header_logo", "option");
$headerLink = get_field("header_link_right", "option");

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
    <img src="<?php echo $headerLogo["sizes"]["large"]; ?>" width="152,37" height="30,5" class="img-fluid" alt="<?php echo $headerLogo["title"]; ?>">
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
        <img src="<?php echo $headerLogo["sizes"]["large"]; ?>" width="243,11" height="44,85" class="img-fluid" alt="<?php echo $headerLogo["title"]; ?>">
      </a>
    </div>
    <div class="desktop-menu-pages-links-div">
      <?php wp_nav_menu(['menu' => 'Hoofdmenu', 'container' => false, 'menu_class' => false]); ?>
    </div>
    <div class="desktop-menu-contact-link-div">
      <?php if($headerLink): ?>
        <button class="btn-with-a clr-dark">
          <?php echo $headerLink["title"]; ?>
            <a href="<?php echo $headerLink["url"]; ?>" class="btn btn-primary btn-gray-big stretched-link d-inline-flex align-items-center justify-content-center" title="<?php echo $headerLink["title"]; ?>">
                <i class="fas fa-chevron-right"></i>
            </a>
        </button>
      <?php endif; ?>
    </div>
  </div>
</nav>