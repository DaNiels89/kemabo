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

<nav id="mobile-menu" class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="<?php echo home_url(); ?>">
    <img src="/kemabo/wp-content/uploads/2021/08/logo.svg" width="152,37" height="30,5" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="custom-toggler navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu(['menu' => 'Hoofdmenu', 'container' => false, 'menu_class' => false]); ?>
  </div>
</nav>