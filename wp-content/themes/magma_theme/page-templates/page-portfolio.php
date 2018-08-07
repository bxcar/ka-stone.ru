<?php
/*
* Template Name: Портфолио
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
    <section class="contact-section services-page portfolio-page">
        <div class="container">
            <div class="title" style="margin-bottom: 10px;">
                <h2 id="contact"><span><?php the_title(); ?></span></h2>
            </div>

            <div class="img-with-desc">
                <img src="<?php the_field('main_img'); ?>">
                <div class="desc">
                    <h3 class="desc-title"><a><?php the_field('title'); ?></a></h3>
                    <p><?php the_field('main_desc'); ?></p>
                </div>
            </div>

            <div class="slider-version-2 our-projects-section">
                <div class="default-shell">
                    <!--.view-box-->
                    <?php if (get_field('items')) {
                        foreach (get_field('items') as $item) { ?>
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

<?php endwhile; ?>





<?php get_footer(); ?>
