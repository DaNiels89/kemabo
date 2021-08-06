<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;
?>

<?php wp_footer(); ?>

<div class="padding-div-200"></div>

<footer class="">
    <div class="bgi-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="container-fluid">
                    <div class="row margin-top-row-half">
                        <div class="col-md-3">
                            <div class="footer-logo-div footer-upper-div-item d-flex align-items-center justify-content-center">
                                <img src="/kemabo/wp-content/uploads/2021/08/logo.svg" width="224.11" height="44.85" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-upper-div-item bgc-red">
                                <h4 class="h4-footer">Kemabo BV</h4>
                                <address class="footer-address">
                                    <p class="footer-p">Handelsweg 18</p>
                                    <p class="footer-p">5492 NL Sint-Oedenrode</p>
                                    <p class="footer-p">Tel: <a href="tel:0031413840244" class="footer-a">0413-840244</a></p>
                                    <p class="footer-p"><a href="mailto:info@kemabo.nl" class="footer-a">info@kemabo.nl</a></p>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-upper-div-item bgc-red">
                                <h4 class="h4-footer">Onze diensten</h4>
                                <div class="d-flex flex-column">
                                    <a href="<?php echo home_url("waterbeheersing"); ?>" class="footer-a">Waterbeheersing</a>
                                    <a href="<?php echo home_url("aandrijf-en-besturingstechniek"); ?>" class="footer-a">Aandrijf en besturingstechniek</a>
                                    <a href="<?php echo home_url("automatisering-elektrische-besturingskasten"); ?>" class="footer-a">Automatisering elektrische besturingskasten</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-upper-div-item bgc-red">
                                <h4 class="h4-footer">Volg ons via</h4>
                                <div class="mb-5">
                                    <a href="https://nl-nl.facebook.com/pages/category/Product-Service/Kemabo-202098569905145/" class="footer-social-a" target="_blank">
                                        <svg class="footer-social-svg dark-rect-svg" xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
                                            <rect id="Rectangle_133" data-name="Rectangle 133" width="39" height="39"/>
                                            <path id="facebook-f-brands" d="M32.647,10.966l.541-3.528H29.8V5.148a1.764,1.764,0,0,1,1.989-1.906h1.539v-3A18.769,18.769,0,0,0,30.6,0c-2.788,0-4.61,1.69-4.61,4.749V7.438h-3.1v3.528h3.1V19.5H29.8V10.966Z" transform="translate(-8.595 9.768)" fill="#fff"/>
                                        </svg>
                                    </a>
                                    <a href="https://nl.linkedin.com/company/kemabo" class="footer-social-a" target="_blank">
                                        <svg class="footer-social-svg dark-rect-svg" xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
                                            <rect id="Rectangle_134" data-name="Rectangle 134" width="39" height="39"/>
                                            <path id="linkedin-in-brands" d="M3.818,17.068H.282V5.679H3.818ZM2.048,4.126A2.058,2.058,0,1,1,4.1,2.058,2.065,2.065,0,0,1,2.048,4.126ZM17.055,17.068H13.526V11.524c0-1.321-.027-3.016-1.839-3.016-1.839,0-2.121,1.436-2.121,2.921v5.639H6.034V5.679H9.426V7.233h.05a3.716,3.716,0,0,1,3.346-1.839c3.579,0,4.237,2.357,4.237,5.418v6.256Z" transform="translate(10.766 10.919)"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <span class="hero-subtitle">kemabo bv</span>
                    <p class="hero-paragraph">
                        De professional op het gebied van Waterbeheersing, aandrijf en besturingstechniek en draai en freeswerk
                    </p>
                    <a href="#" class="hero-a">
                        Meer informatie opvragen
                        <svg class="red-rect-svg" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                            <rect id="Rectangle_93" data-name="Rectangle 93" width="50" height="50" />
                            <path id="chevron-right-solid" d="M36.47,45.844l-6.761,6.761a.835.835,0,0,1-1.181,0l-.789-.789a.835.835,0,0,1,0-1.179L33.1,45.254,27.738,39.87a.835.835,0,0,1,0-1.179l.789-.789a.835.835,0,0,1,1.181,0l6.761,6.761A.835.835,0,0,1,36.47,45.844Z" transform="translate(-7.495 -20.657)"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="container-fluid footer-bottom">
            <div class="row">
                <div class="col-md-6">
                    <p class="footer-p d-inline-block mr-3">Copyright <?php echo date('Y') ?></p>
                    <a href="<?php echo site_url('/algemene-voorwaaden'); ?>" class="footer-a">Algemene voorwaarden</a>
                </div>
                <div class="col-md-6">
                    <p class="footer-p">Realisatie door: <a href="https://inkoppers.nl" class="footer-a" target="_blank">Inkoppers.</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html> 