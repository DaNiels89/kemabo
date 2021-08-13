<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

$footerLogo = get_field("footer_logo", "option");
$footerTitle1 = get_field("footer_title_1", "option");
$footerAddress = get_field("footer_address", "option");
$footerTitle2 = get_field("footer_title_2", "option");
$footerTitle3 = get_field("footer_title_3", "option");
$facebook = get_field("facebook", "option");
$linkedin = get_field("linkedin", "option");

$footerSubtitle = get_field("footer_subtitle", "option");
$footerText = get_field("footer_text", "option");
$footerLink = get_field("footer_link", "option");
$footerCopyright = get_field("footer_copyright", "option");
$footerLinkTerms = get_field("footer_link_terms", "option");

?>

<?php wp_footer(); ?>

<div class="padding-div-200"></div>

<footer class="">
    <div class="bgi-footer">
        <div class="container-fluid container-footer">
            <div class="row footer-upper-row">
                <div class="col-md-3">
                    <div class="footer-logo-div footer-upper-div-item d-flex align-items-center justify-content-center">
                        <img src="<?php echo $footerLogo["sizes"]["large"]; ?>" width="224.11" height="44.85" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-upper-div-item bgc-red">
                        <?php if($footerTitle1): ?>
                            <h4 class="h4-footer mb-mt-17"><?php echo $footerTitle1; ?></h4>
                        <?php endif; ?>
                        <?php if($footerAddress): ?>
                            <address class="footer-address">
                                <?php echo $footerAddress; ?>
                            </address>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-upper-div-item bgc-red">
                        <?php if($footerTitle2): ?>
                            <h4 class="h4-footer"><?php echo $footerTitle2; ?></h4>
                        <?php endif; ?>
                        <div class="d-flex flex-column">
                            
                            <?php if( have_rows('footer_url_services', "option") ): ?>
                                <?php while( have_rows('footer_url_services', "option") ): the_row();
                                    $servicesLink = get_sub_field("services_link");
                                ?>
                                    <a href="<?php echo $servicesLink["url"] ?>" class="footer-a" title="<?php echo $servicesLink["title"] ?>" target="<?php echo $servicesLink["target"] ?>"><?php echo $servicesLink["title"] ?></a>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-upper-div-item footer-upper-div-item-last bgc-red">
                        <?php if($footerTitle3): ?>
                            <h4 class="h4-footer"><?php echo $footerTitle3; ?></h4>
                        <?php endif; ?>
                        <div class="mb-5">
                            <?php if($facebook): ?>
                                <a href="<?php echo $facebook["url"] ?>" class="btn btn-secondary btn-dark-resp d-inline-flex align-items-center justify-content-center" title="<?php echo $facebook["title"] ?>" target="<?php echo $facebook["target"] ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            <?php endif; ?>
                            <?php if($linkedin): ?>
                                <a href="<?php echo $linkedin["url"] ?>" class="btn btn-secondary btn-dark-resp d-inline-flex align-items-center justify-content-center" title="<?php echo $linkedin["title"] ?>" target="<?php echo $linkedin["target"] ?>">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row footer-middle-row">
                <div class="col-md-8 offset-md-2 text-center">
                    <?php if ($footerSubtitle): ?>
                        <span class="hero-subtitle"><?php echo $footerSubtitle; ?></span>
                    <?php endif; ?>
                    <?php if ($footerText): ?>
                        <p class="hero-paragraph">
                            <?php echo $footerText; ?>
                        </p>
                    <?php endif; ?>
                    <?php if ($footerLink): ?>
                        <div class="">
                            <button class="btn-with-a">
                                <?php echo $footerLink["title"]; ?>
                                <a href="<?php echo $footerLink["url"]; ?>" class="btn btn-primary btn-red-big d-inline-flex align-items-center justify-content-center" title="<?php echo $footerLink["title"]; ?>" target="<?php echo $footerLink["target"]; ?>">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row footer-bottom-row">
                <div class="col-md-8">
                    <p class="footer-p d-inline-block mr-2 mr-md-5"><?php echo $footerCopyright ?> <?php echo date('Y') ?></p>
                    <?php if ($footerLinkTerms): ?>
                        <a href="<?php echo $footerLinkTerms["url"]; ?>" class="footer-a" title="<?php echo $footerLinkTerms["title"]; ?>" target="<?php echo $footerLinkTerms["target"]; ?>">
                            <?php echo $footerLinkTerms["title"]; ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="col-md-4 text-md-right mt-2 mt-md-0">
                    <p class="footer-p">Realisatie door: <a href="https://inkoppers.nl" class="footer-a" target="_blank">Inkoppers.</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html> 