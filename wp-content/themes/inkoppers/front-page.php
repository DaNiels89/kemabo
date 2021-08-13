<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<div class="hero-bgi position-relative">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <span class="hero-subtitle">Kemabo BV</span>
                <p class="hero-paragraph">
                    De professional op het gebied van Water-beheersing, aandrijf en besturingstechniek en draai en freeswerk
                </p>
                <div class="">
                    <button class="btn-with-a">
                        Meer informatie opvragen
                        <a href="<?php echo get_permalink(42); ?>" class="btn btn-primary btn-red-big stretched-link d-inline-flex align-items-center justify-content-center">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bgc-light-gray cf-no-padding">
    <div class="row row-go-half-up first-slider"> 
        <div class="col-md-4">
            <div class="red-bgc-div">
                <h4 class="light-color">Waterbeheersing</h4>
                <ul class="red-bgc-ul">
                    <li class="red-bgc-ul-li">Lorem ipsum dolor sit amet</li>
                    <li class="red-bgc-ul-li">Consectetur adipiscing elit</li>
                    <li class="red-bgc-ul-li">In vel ante elementum</li>
                    <li class="red-bgc-ul-li">Auctor nibh vitae</li>
                </ul>
                <a href="<?php echo get_permalink(36); ?>" class="btn btn-secondary btn-dark-big align-right-bottom-main stretched-link d-flex align-items-center justify-content-center">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>  
        </div>

        <div class="col-md-4">
            <div class="red-bgc-div">
                <h4 class="light-color">Aandrijf en besturingstechniek</h4>
                <ul class="red-bgc-ul">
                    <li class="red-bgc-ul-li">Lorem ipsum dolor sit amet</li>
                    <li class="red-bgc-ul-li">Consectetur adipiscing elit</li>
                    <li class="red-bgc-ul-li">In vel ante elementum</li>
                    <li class="red-bgc-ul-li">Auctor nibh vitae</li>
                </ul>
                <a href="<?php echo get_permalink(38); ?>" class="btn btn-secondary btn-dark-big align-right-bottom-main stretched-link d-flex align-items-center justify-content-center">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>  
        </div>

        <div class="col-md-4">
            <div class="red-bgc-div">
                <h4 class="light-color">Draai en freeswerk</h4>
                <ul class="red-bgc-ul">
                    <li class="red-bgc-ul-li">Lorem ipsum dolor sit amet</li>
                    <li class="red-bgc-ul-li">Consectetur adipiscing elit</li>
                    <li class="red-bgc-ul-li">In vel ante elementum</li>
                    <li class="red-bgc-ul-li">Auctor nibh vitae</li>
                </ul>
                <a href="<?php echo get_permalink(40); ?>" class="btn btn-secondary btn-dark-big align-right-bottom-main stretched-link d-flex align-items-center justify-content-center">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>  
        </div>
    </div>
</div>

<div class="padding-div-95"></div>

<div class="container-fluid bgc-light-gray pb-5 pr-lg-0">
    <div class="row">
        <div class="col">
            <img src="/kemabo/wp-content/uploads/2021/08/projecten_afbeelding_groot.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-4 order-lg-first d-flex align-items-center">
            <div class="who-are-we-text-div">
                <h4 class="red-subtitle">
                    Wie zijn wij?
                </h4>
                <h3 class="h3-title mb-lg-4">
                    Kemabo BV
                </h3>
                <p class="ml-2 mb-5 ml-lg-0 mb-lg-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a lectus a purus convallis eleifend. Donec a pulvinar nunc. Ut eget rhoncus ipsum, a dictum orci. Donec sollicitudin mi eu blandit facilisis. Maecenas non egestas est. Nullam fringilla lacus lacinia efficitur egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a lectus a purus convallis eleifend. Donec a pulvinar nunc. Ut eget rhoncus ipsum, a dictum orci.
                </p>
                <a href="<?php echo get_permalink(42); ?>" class="btn btn-primary btn-red-big bottom-10 stretched-link d-inline-flex align-items-center justify-content-center">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bgc-light-gray">
    <div class="row">
        <div class="col">
            <div class="recent-projects-text-div text-center">
                <h4 class="red-subtitle ">Lorum ipsum dolor</h4>
                <h3 class="h3-padding">Recente projecten</h3>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid projects alt">
    <div class="top-bgc-gray"></div>
    <div class="row">
        <div class="column col-md-10 offset-md-1">
            <div class="row">
                <div class="column col-md-6">
                    <?php
                    $query = new WP_Query(['post_status' => 'publish', 'posts_per_page' => '3', 'post_type' => 'project', 'orderby' => 'ID', 'order' => 'DESC']);
                    $i = 0;
                    while ($query->have_posts()) : $query->the_post();
                        $categories = get_the_category();
                        ?>  
                        <?php if ($i == 0): ?>          
                            <div class="item h-100 mb-0 position-relative">
                        <?php else: ?>
                            <div class="item position-relative">
                        <?php endif; ?>
                            <?php if ($i == 0): ?>
                                <img class="d-block d-md-none w-100" src="<?php the_post_thumbnail_url("small-laying-image"); ?>" alt="<?php echo $title; ?>">
                                <div class="overlay"></div>
                                
                                <div class="h-100 w-100 d-none d-md-block position-absolute" style="background: linear-gradient(rgba(255,255,255, 0) 60%, rgba(0,0,0,0.8)), url(<?php the_post_thumbnail_url("tall-standing-image"); ?>); background-size: cover; background-color: #000;">
                                </div>
                            <?php else: ?>
                                <img class="w-100" src="<?php the_post_thumbnail_url("small-laying-image"); ?>" alt="<?php echo $title; ?>">
                                <div class="overlay"></div>               
                            <?php endif; ?>
                            <div class="content d-flex justify-content-between flex-column position-absolute w-100 h-100" style="top: 0; left: 0;">
                                <div class="top">
                                    <span><?php echo $categories[0]->name; ?></span>
                                </div>
                                <div class="bottom d-flex justify-content-between position-relative">
                                    <p class=""><?php the_title(); ?></p>
                                    <a href="<?php echo $permalink; ?>" class="btn btn-primary stretched-link d-flex align-items-center justify-content-center">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php if($i == 0): ?>
                            </div>
                            <div class="column col-md-6">
                        <?php endif; ?>
                    <?php
                    $i++;
                    endwhile;
                    wp_reset_query();
                    ?>  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="see-all-projects-div">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 offset-md-4 text-center">
                <span class="see-all-projects-subtitle">Lorem ipsum dolor sit amet</span>
                <p class="hero-paragraph hero-paragraph-smaller">
                Benieuwd naar wat we nog meer gerealiseerd hebben?
                </p>
                <button class="btn-with-a">
                    Bekijk alle projecten
                    <a href="<?php echo get_permalink(44); ?>" class="btn btn-primary btn-red-big stretched-link d-inline-flex align-items-center justify-content-center">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid our-team">
    <div class="row">
        <div class="column col-md-12">
            <div class="row">
                <div class="column col-md-3 d-flex align-items-center title-div">
                    <h2 class="">Ons<br />team</h2>
                </div>
                <div class="column col-md-9">
                    <div class="row">

                    
                        <?php if( have_rows('team_members_repeater') ): ?>
                            <?php while( have_rows('team_members_repeater') ) : the_row();
                                $tm_image = get_sub_field('team_member_image');
                                $tm_function = get_sub_field('team_member_function');
                                $tm_name = get_sub_field('team_member_name');
                            ?>

                                <div class="column col-md-4">
                                    <div class="item">
                                        <img src="<?php echo $tm_image["sizes"]["mobile-team-image"] ?>" alt="<?php echo $tm_image["title"] ?>" class="d-md-none w-100">
                                        <img src="<?php echo $tm_image["sizes"]["team-image"] ?>" alt="<?php echo $tm_image["title"] ?>" class="d-none d-md-block w-100">
                                        <div class="overlay">
                                            <div class="text">
                                                <?php if( $tm_function ): ?>
                                                    <span class="function"><?php echo $tm_function; ?></span>
                                                <?php endif; ?>
                                                <?php if( $tm_name ): ?>
                                                    <span class="name"><?php echo $tm_name; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php endwhile; ?>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="padding-div-95"></div>

<div class="container-fluid pb-5 pl-md-0">
    <div class="row">
        <div class="col-lg-8">
            <img src="/kemabo/wp-content/uploads/2021/08/waterval-groot.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-4 d-flex align-items-center to-the-left">
            <div class="who-are-we-text-div">
                <h4 class="red-subtitle">
                    Meer informatie
                </h4>
                <h3 class="h3-title mb-lg-4">
                    Lorem ipsum dolor sit amet adipiscing
                </h3>
                <p class="ml-2 mb-5 ml-lg-0 mb-lg-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a lectus a purus convallis eleifend. Donec a pulvinar nunc.
                </p>
                <a href="<?php echo get_permalink(42); ?>" class="btn btn-primary btn-red-big bottom-10 stretched-link d-inline-flex align-items-center justify-content-center">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bgc-light-gray cooperation-div">
    <div class="row">
        <div class="col">
            <div class="cooperating-div">
                <h4 class="cooperating-title">Wij werken samen met</h4>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid logo-partners-div">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="row">
                <div class="col-md-4">
                    <a href="https://www.mbi.nl/" class="" target="_blank">
                        <div class="logo-partner-div">
                            <img src="/kemabo/wp-content/uploads/2021/08/Logo-MBI-De-Steenmeesters.svg" alt="" class="logo-partner-img">
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://nl.hansa-flex.com/index.html" class="" target="_blank">
                        <div class="logo-partner-div">
                            <img src="/kemabo/wp-content/uploads/2021/08/Logo-Hansaflex.svg" alt="" class="logo-partner-img">
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://www.mbi.nl/" class="" target="_blank">
                        <div class="logo-partner-div">
                            <img src="/kemabo/wp-content/uploads/2021/08/Logo-MBI-De-Steenmeesters.svg" alt="" class="logo-partner-img">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="padding-div-101"></div>

<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            <h2 class="mb-5">Laatste nieuws</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <?php
            $query = new WP_Query(['post_status' => 'publish', 'posts_per_page' => '2', 'post_type' => 'post', 'orderby' => 'ID', 'order' => 'DESC']);
            $i = 0;
            while ($query->have_posts()) : $query->the_post();

            // Get post permalink
            $permalink = get_permalink();
            // WP post title ophalen
            $title = get_the_title();
            //WP date ophalen
            $post_date = get_the_date( 'j F Y' );
        ?>

            <div class="col-md-5 <?php if ($i % 2 == 0): echo "offset-md-1"; endif; ?>">
                <a href="<?php echo $permalink; ?>" class="recent-projects-a">
                    <div class="recent-projects-div-for-image">
                        <img src="<?php the_post_thumbnail_url("small-laying-image"); ?>" alt="<?php echo $title; ?>" class="recent-projects-image w-100">
                        <div class="recent-projects-image-overlay"></div>
                        <span class="recent-projects-image-top-text latest-news"><?php echo $post_date; ?></span>
                        <span class="recent-projects-image-bottom-text"><?php echo $title; ?></span>
                        <a href="<?php echo $permalink; ?>" class="btn btn-primary btn-red-resp align-right-bottom stretched-link d-inline-flex align-items-center justify-content-center">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </a>
            </div>

        <?php
            $i++;
            endwhile;
            wp_reset_query();
        ?>
    </div>
</div>

<?php get_footer();