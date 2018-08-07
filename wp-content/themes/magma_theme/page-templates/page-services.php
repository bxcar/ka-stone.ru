<?php
/*
* Template Name: Услуги
*/
get_header();
?>
<img class="single-top-img" src="<?= get_template_directory_uri(); ?>/img/single-top-img.png">


<!--.breadcrumb-section-->
<?php if (function_exists('kama_breadcrumbs') && !is_front_page()) { ?>
    <section class="breadcrumb-section breadcrumb-services">
        <div class="container">
            <?php echo kama_breadcrumbs(' >> '); ?>
        </div>
    </section>
<?php } ?><!--End .breadcrumb-section-->


<?php while (have_posts()) : the_post(); ?>

    <!--.contact-section-->
    <section class="contact-section services-page">
        <div class="container">
            <div class="title" style="margin-bottom: 10px;">
                <h2 id="contact"><span><?php the_title(); ?></span></h2>
            </div>

            <div class="slider-version-2 our-projects-section">
                <div class="default-shell">
                    <?php if (get_field('services')) {
                        foreach (get_field('services') as $item) { ?>
                            <div class="view-box active">
                                <div class="inset-box">
                                    <div class="foto"
                                         style="background-image: url(<?= $item['img']; ?>)">
                                        <a href="<?= $item['link']; ?>"></a></div>

                                    <div class="title-goods"><h3><a href="<?= $item['link']; ?>"><?= $item['title']; ?></a></h3></div>
                                    <p class="tile-goods-desc"><?= $item['desc']; ?></p>
                                </div>
                            </div><!--End .view-box-->
                        <?php }
                    } ?>
                </div>
            </div>

        </div>
    </section><!--End .contact-section-->


    <?php
    if (get_field('mini_slider')) {
        ?>
        <section class="our-projects-section slider-version-2" style="padding-bottom: 0;">
            <div class="container">
                <div class="title">
                    <h2><span><?php the_field('mini_slider_title'); ?></span></h2>
                    <?php if (get_field('page_catalog', 'option')) {
                        echo '<a href="' . get_field('page_catalog', 'option') . '" class="btn-new btn-new--2">В портфолио</a>';
                    } ?>
                </div>

                <div class="default-shell to-price" id="slider-main-page-4" style="padding-bottom: 80px;">

                    <?php foreach (get_field('mini_slider') as $item) { ?>
                        <!--.view-box-->
                        <div class="view-box active">
                            <div class="inset-box">
                                <div class="foto"
                                     style="background-image: url(<?= $item['img']; ?>)">
                                    <a href="<?= $item['link']; ?>"></a></div>

                                <div class="title-goods"><h3><a href="<?= $item['link']; ?>"><?= $item['title']; ?></a></h3></div>
                                <p class="tile-goods-desc"><?= $item['desc']; ?></p>
                            </div>
                        </div><!--End .view-box-->

                        <?php } ?>

                </div>

            </div>
        </section>
    <?php } ?>
<?php endwhile; ?>





<?php get_footer(); ?>
