<?php
get_header();
?>
    <!--.breadcrumb-section-->
<?php if (function_exists('kama_breadcrumbs') && !is_front_page()) { ?>
    <section class="breadcrumb-section">
        <div class="container">
            <?php echo kama_breadcrumbs(' >> '); ?>
        </div>
    </section>
<?php } ?><!--End .breadcrumb-section-->


    <div class="land-block container">
        <!--        <h2 class="land-block__title land-block__title-desktop">-->
        <?php //the_field('main_title'); ?><!--</h2>-->
        <div class="land-block__title-mob">
            <div class="title land-main-title">
                <h2><span><?php the_field('main_title'); ?></span></h2>
            </div>
        </div>
        <div class="title land-main-title land-block__title-desktop">
            <h2><span><?php the_field('main_title'); ?></span></h2>
        </div>
        <div class="land-block__top-part">
            <div class="land-block__top-part-item">
                <img src="<?php the_field('main_img'); ?>" class="land-block__main-img">
            </div>
            <div class="land-block__top-part-item">
                <span class="land-block__top-part-title"><?php the_field('top_part_title'); ?></span>
                <div class="land-block__top-part-subimg-wrapper">
                    <div class="land-block__top-part-subimg">
                        <span class="land-block__top-part-subimg-title"><?php the_field('top_part_subtitle_1'); ?></span>
                        <img src="<?php the_field('top_part_subimg_1'); ?>"
                             class="land-block__top-part-subimg-img">
                    </div>
                    <div class="land-block__top-part-subimg">
                        <span class="land-block__top-part-subimg-title"><?php the_field('top_part_subtitle_2'); ?></span>
                        <img src="<?php the_field('top_part_subimg_2'); ?>"
                             class="land-block__top-part-subimg-img">
                    </div>
                    <div class="land-block__top-part-subimg">
                        <span class="land-block__top-part-subimg-title"><?php the_field('top_part_subtitle_3'); ?></span>
                        <img src="<?php the_field('top_part_subimg_3'); ?>"
                             class="land-block__top-part-subimg-img">
                    </div>
                </div>
            </div>
            <div class="land-block__top-part-item">
                <span class="land-block__top-part-price"><?php the_field('main_price'); ?></span>
                <span class="land-block__top-part-price-subtext1"><?php the_field('main_price_subtext1'); ?></span>
                <span class="land-block__top-part-price-subtext2"><?php the_field('main_price_subtext2'); ?></span>
                <span class="land-block__top-part-price-subtext3"><?php the_field('main_price_subtext3'); ?></span>
            </div>
        </div>

        <div class="land-second-block">
            <div class="title">
                <h2><span><?php the_field('second_block_title'); ?></span></h2>
            </div>
            <div class="land-second-block__images">
                <div class="land-second-block__images-item">
                    <div class="land-second-block__images-item-img-wrap">
                        <img class="land-second-block__images-item-img" src="<?php the_field('second_block_img_1'); ?>">
                    </div>
                    <span class="land-second-block__images-item-text"><?php the_field('second_block_text_1'); ?></span>
                </div>
                <div class="land-second-block__images-item">
                    <div class="land-second-block__images-item-img-wrap">
                        <img class="land-second-block__images-item-img" src="<?php the_field('second_block_img_2'); ?>">
                    </div>
                    <span class="land-second-block__images-item-text"><?php the_field('second_block_text_2'); ?></span>
                </div>
                <div class="land-second-block__images-item">
                    <div class="land-second-block__images-item-img-wrap">
                        <img class="land-second-block__images-item-img" src="<?php the_field('second_block_img_3'); ?>">
                    </div>
                    <span class="land-second-block__images-item-text"><?php the_field('second_block_text_3'); ?></span>
                </div>
            </div>
        </div>


        <!--.popular-goods-section-->
        <section class="popular-goods-section land-popular-goods-section slider-version-2">
            <div class="container">
                <div class="title">
                    <span class="land-slider-title"><?php the_field('block_3_title'); ?></span>
                    <a target="<?= get_field('block_3_link')['target'] ?>"
                       href="<?= get_field('block_3_link')['url'] ?>"
                       class="btn-new land-btn-new btn-new--2"><?= get_field('block_3_link')['title'] ?></a>
                </div>

                <div class="default-shell to-price" id="slider-main-page-2">
                    <?php if (get_field('block_3_slider')) {
                        foreach (get_field('block_3_slider') as $item) { ?>
                            <!--.view-box-->
                            <div class="view-box active">
                                <div class="inset-box">
                                    <div class="foto" style="background-image: url(<?= $item['img'] ?>)"><a
                                                target="<?= $item['link']['target'] ?>"
                                                href="<?= $item['link']['url'] ?>"></a></div>

                                    <div class="name-goods"><?= $item['title_1'] ?></div>

                                    <div class="title-goods"><h3><a
                                                    target="<?= $item['link']['target'] ?>"
                                                    href="<?= $item['link']['url'] ?>"><?= $item['title_2'] ?></a></h3>
                                    </div>

                                    <div class="land-block__slider-prices">
                                        <div class="land-block__slider-prices-inner-wrapper">
                                            <span class="land-block__slider-price1-title"><?= $item['price_1_text'] ?></span>
                                            <span class="land-block__slider-price1"><?= $item['price_1'] ?></span>
                                        </div>
                                        <div class="land-block__slider-prices-inner-wrapper">
                                            <span class="land-block__slider-price2-title"><?= $item['price_2_text'] ?></span>
                                            <span class="land-block__slider-price2"><?= $item['price_2'] ?></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End .view-box-->
                        <?php }
                    } ?>
                </div>

            </div>
        </section>
        <!--End .popular-goods-section-->

        <!--.popular-goods-section-->
        <section class="popular-goods-section slider-version-2">
            <div class="container">
                <div class="title">
                    <span class="land-slider-title"><?php the_field('block_4_title'); ?></span>
                    <a target="<?= get_field('block_4_link')['target'] ?>"
                       href="<?= get_field('block_4_link')['url'] ?>"
                       class="btn-new land-btn-new btn-new--2"><?= get_field('block_4_link')['title'] ?></a>
                </div>

                <div class="default-shell to-price" id="slider-main-page-3">
                    <?php if (get_field('block_4_slider')) {
                        foreach (get_field('block_4_slider') as $item) { ?>
                            <!--.view-box-->
                            <div class="view-box active">
                                <div class="inset-box">
                                    <div class="foto" style="background-image: url(<?= $item['img'] ?>)"><a
                                                target="<?= $item['link']['target'] ?>"
                                                href="<?= $item['link']['url'] ?>"></a></div>

                                    <div class="name-goods"><?= $item['title_1'] ?></div>

                                    <div class="title-goods"><h3><a
                                                    target="<?= $item['link']['target'] ?>"
                                                    href="<?= $item['link']['url'] ?>"><?= $item['title_2'] ?></a></h3>
                                    </div>

                                    <div class="land-block__slider-prices">
                                        <div class="land-block__slider-prices-inner-wrapper">
                                            <span class="land-block__slider-price1-title"><?= $item['price_1_text'] ?></span>
                                            <span class="land-block__slider-price1"><?= $item['price_1'] ?></span>
                                        </div>
                                        <div class="land-block__slider-prices-inner-wrapper">
                                            <span class="land-block__slider-price2-title"><?= $item['price_2_text'] ?></span>
                                            <span class="land-block__slider-price2"><?= $item['price_2'] ?></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End .view-box-->
                        <?php }
                    } ?>
                </div>

            </div>
        </section>
        <!--End .popular-goods-section-->

        <div class="land-block__bottom-part">
            <div class="land-block__bottom-part-top">
                <div>
                    <span class="land-block__bottom-part-top-item"><?php the_field('block_5_string_1'); ?>
                        <span><?php the_field('block_5_string_1_price'); ?></span></span>
                    <span class="land-block__bottom-part-top-item"><?php the_field('block_5_string_2'); ?>
                        <span><?php the_field('block_5_string_2_price'); ?></span></span>
                    <span class="land-block__bottom-part-top-item"><?php the_field('block_5_string_3'); ?>
                        <span><?php the_field('block_5_string_3_price'); ?></span></span>
                </div>



            </div>
            <div class="land-block__bottom-part-bottom">
                <?php
                $i = 1;
                if (get_field('block_5_images')) {
                    foreach (get_field('block_5_images') as $item) {
                        if($i <= 4) { ?>
                            <div class="land-block__bottom-part-bottom-img">
                                <img src="<?= $item['img'] ?>">
                            </div>
                        <?php }?>
                    <?php $i++;  }
                } ?>
            </div>

            <div class="land-block__bottom-part-bottom land-block__bottom-part-bottom--hidden">
                <?php
                $i = 1;
                if (get_field('block_5_images')) {
                    foreach (get_field('block_5_images') as $item) {
                        if($i > 4) { ?>
                            <div class="land-block__bottom-part-bottom-img">
                                <img src="<?= $item['img'] ?>">
                            </div>
                        <?php }?>
                        <?php $i++;  }
                } ?>
            </div>
        </div>

        <div>
            <a target="<?php//get_field('block_5_link')['target'] ?>"
               href="#<?php //get_field('block_5_link')['url'] ?>"
               class="btn-new land-btn-new btn-new--2 btn-new--load-more-img">Все изображения<?php //get_field('block_5_link')['title'] ?></a>
        </div>

    </div>

<script>
    jQuery('.btn-new--load-more-img').click(function (e) {
        e.preventDefault();
        jQuery('.land-block__bottom-part-bottom--hidden').removeClass('land-block__bottom-part-bottom--hidden');
    })
</script>


<?php get_footer(); ?>