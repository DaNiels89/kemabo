<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

$heroImage = get_field("hero_background_image");
$heroSubtitle = get_field("hero_subtitle");
$heroText = get_field("hero_text");
$heroLink = get_field("hero_link");

$textLeftSubtitle = get_field("text_left_subtitle");
$textLeftTitle = get_field("text_left_title");
$textLeftText = get_field("text_left_text");
$textLeftLink = get_field("text_left_link");
$imageRight = get_field("image_right");

$titlesSubtitle = get_field('titles_block_subtitle');
$titlesTitle = get_field('titles_block_title');

$bgiImage = get_field("bgi_image");
$bgiSubtitle = get_field("bgi_subtitle");
$bgiText = get_field("bgi_text");
$bgiLink = get_field("bgi_link");

$ourTeamTitle = get_field("team_members_title_red_block");

$imageLeft = get_field("image_left");
$textRightSubtitle = get_field("text_right_subtitle");
$textRightTitle = get_field("text_right_title");
$textRightText = get_field("text_right_text");
$textRightLink = get_field("text_right_link");

$partnersTitle = get_field("partners_title");

$latestNewsTitle = get_field("latest_news_title");

get_header();
?>

<div class="hero-bgi" style="background-image: url('<?php echo $heroImage["sizes"]["large"] ?>') ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <?php if ($heroSubtitle): ?>
                    <span class="hero-subtitle"><?php echo $heroSubtitle; ?></span>
                <?php endif; ?>
                <?php if ($heroText): ?>
                    <p class="hero-paragraph">
                        <?php echo $heroText; ?>
                    </p>
                <?php endif; ?>
                <?php if ($heroLink): ?>
                    <div class="">
                        <button class="btn-with-a">
                            <?php echo $heroLink["title"]; ?>
                            <a href="<?php echo $heroLink["url"]; ?>" class="btn btn-primary btn-red-big stretched-link d-inline-flex align-items-center justify-content-center" alt="<?php echo $heroLink["title"]; ?>">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bgc-light-gray cf-no-padding">
    <div class="row row-go-half-up first-slider;">

        <?php if( have_rows('red_services_block_repeater') ): ?>
            <?php while( have_rows('red_services_block_repeater') ) : the_row();
                $rsb_link = get_sub_field('red_services_block_link');
            ?>

                <div class="col-md-4">
                    <div class="red-bgc-div">
                        <?php if ($rsb_link): ?>
                            <h4 class="light-color"><?php echo $rsb_link["title"]; ?></h4>
                        <?php endif; ?>

                        <ul class="red-bgc-ul">

                            <?php if( have_rows('service_item_repeater') ): ?>
                                <?php while( have_rows('service_item_repeater') ) : the_row(); 
                                    $serviceItem = get_sub_field("service_item");
                                ?>

                                    <li class="red-bgc-ul-li"><?php echo $serviceItem; ?></li>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </ul>

                        <a href="<?php echo $rsb_link["url"] ?>" class="stretched-link btn btn-secondary btn-dark-big align-right-bottom-main d-flex align-items-center justify-content-center" title="<?php echo $rsb_link["title"] ?>" target="<?php echo $rsb_link["target"] ?>">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>

<div class="padding-div-95"></div>

<div class="container-fluid bgc-light-gray pb-5 pr-lg-0">
    <div class="row">
        <div class="col">
            <img src="<?php echo $imageRight["sizes"]["big-laying-image"]; ?>" alt="<?php echo $imageLeft["title"]; ?>" class="img-fluid">
        </div>
        <div class="col-lg-4 order-lg-first d-flex align-items-center">
            <div class="who-are-we-text-div">
                <?php if ($textLeftSubtitle): ?>
                    <h4 class="red-subtitle">
                        <?php echo $textLeftSubtitle; ?>
                    </h4>
                <?php endif; ?>
                <?php if ($textLeftSubtitle): ?>
                    <h3 class="h3-title mb-lg-4">
                        <?php echo $textLeftTitle; ?>
                    </h3>
                <?php endif; ?>
                <?php if ($textLeftSubtitle): ?>
                    <p class="ml-2 mb-5 ml-lg-0 mb-lg-3">
                        <?php echo $textLeftText; ?>
                    </p>
                <?php endif; ?>
                <?php if ($textLeftLink): ?>
                    <a href="<?php echo $textLeftLink["url"]; ?>" class="btn btn-primary btn-red-big bottom-10 stretched-link d-inline-flex align-items-center justify-content-center" title="<?php echo $textLeftLink["title"]; ?>" target="<?php echo $textLeftLink["target"]; ?>">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bgc-light-gray">
    <div class="row">
        <div class="col">
            <div class="recent-projects-text-div text-center">
                <?php if ($titlesSubtitle): ?>
                    <h4 class="red-subtitle "><?php echo $titlesSubtitle; ?></h4>
                <?php endif; ?>
                <?php if ($titlesTitle): ?>
                    <h3 class="h3-padding"><?php echo $titlesTitle; ?></h3>
                <?php endif; ?>
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

<div class="see-all-projects-div" style="background-image: url('<?php echo $bgiImage["sizes"]["large"]; ?>'); background-color: linear-gradient(0,0,0,0.5); background-size: cover; background-repeat: no-repeat;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 offset-md-4 text-center">
                <?php if ($bgiSubtitle): ?>
                    <span class="see-all-projects-subtitle">
                        <?php echo $bgiSubtitle; ?>
                    </span>
                <?php endif; ?>
                <?php if ($bgiText): ?>
                    <p class="hero-paragraph hero-paragraph-smaller">
                        <?php echo $bgiText; ?>
                    </p>
                <?php endif; ?>
                <?php if ($bgiLink): ?>
                    <button class="btn-with-a">
                        <?php echo $bgiLink["title"]; ?>
                        <a href="<?php echo $bgiLink["url"]; ?>" class="btn btn-primary btn-red-big stretched-link d-inline-flex align-items-center justify-content-center">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid our-team">
    <div class="row">
        <div class="column col-md-12">
            <div class="row">
                <div class="column col-md-3 d-flex align-items-center title-div">
                    <?php if ($ourTeamTitle): ?>
                        <h2 class=""><?php echo $ourTeamTitle; ?></h2>
                    <?php endif; ?>
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
            <img src="<?php echo $imageLeft["sizes"]["big-laying-image"]; ?>" alt="<?php echo $imageLeft["title"]; ?>" class="img-fluid">
        </div>
        <div class="col-lg-4 d-flex align-items-center to-the-left">
            <div class="who-are-we-text-div">
                <?php if ($textRightSubtitle): ?>
                    <h4 class="red-subtitle">
                        <?php echo $textRightSubtitle; ?>
                    </h4>
                <?php endif; ?>
                <?php if ($textRightTitle): ?>
                    <h3 class="h3-title mb-lg-4">
                        <?php echo $textRightTitle; ?>
                    </h3>
                <?php endif; ?>
                <?php if ($textRightText): ?>
                    <p class="ml-2 mb-5 ml-lg-0 mb-lg-3">
                        <?php echo $textRightText; ?>
                    </p>
                <?php endif; ?>
                <?php if ($textRightLink): ?>
                    <a href="<?php echo $textRightLink["url"]; ?>" class="btn btn-primary btn-red-big bottom-10 stretched-link d-inline-flex align-items-center justify-content-center" title="<?php echo $$textRightLink["title"]; ?>">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bgc-light-gray cooperation-div">
    <div class="row">
        <div class="col">
            <div class="cooperating-div">
                <?php if ($partnersTitle): ?>
                    <h4 class="cooperating-title">
                        <?php echo $partnersTitle; ?>
                    </h4>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid logo-partners-div">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="row">

                <?php if( have_rows('partners_logo_div_repeater') ): ?>
                    <?php while( have_rows('partners_logo_div_repeater') ) : the_row();
                        $partnerLogo = get_sub_field('partner_logo');
                        $partnerLink = get_sub_field('partner_link');
                    ?>

                        <div class="col-md-4">
                            <a href="<?php echo $partnerLink["url"]; ?>" class="" title="<?php echo $partnerLink["title"]; ?>" target="<?php echo $partnerLink["targer"]; ?>">
                                <div class="logo-partner-div">
                                    <img src="<?php echo $partnerLogo["sizes"]["large"]; ?>" class="logo-partner-img" alt="<?php echo $partnerLogo["title"]; ?>">
                                </div>
                            </a>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<div class="padding-div-101"></div>

<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            <?php if ($latestNewsTitle): ?>
                <h2 class="mb-5"><?php echo $latestNewsTitle; ?></h2>
            <?php endif; ?>
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