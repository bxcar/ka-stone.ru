<?php
/*
* Template Name: Контакты
*/
get_header();
?>
<img class="single-top-img" src="<?= get_template_directory_uri(); ?>/img/single-top-img.png">


<!--.breadcrumb-section-->
<?php if (function_exists('kama_breadcrumbs') && !is_front_page()) { ?>
    <section class="breadcrumb-section">
        <div class="container">
            <?php echo kama_breadcrumbs(' >> '); ?>
        </div>
    </section>
<?php } ?><!--End .breadcrumb-section-->


<?php while (have_posts()) : the_post(); ?>

    <!--.contact-section-->
    <section class="contact-section contact-page">
        <div class="container">
            <div class="title-section"><h2 id="contact"><?php the_title(); ?></h2></div>
            <div class="shell">
                <div class="row">
                    <div class="item contact-box">
                        <address>
                            <?php if (have_rows('tels')) { ?>
                                <p class="address-phones">
                                    <strong>Телефоны:</strong>
                                    <span>
											<?php
                                            $count = 0;
                                            while (have_rows('tels')) : the_row();
                                                $count++;
                                                if ($count > 1) {
                                                    $br = '<br>';
                                                }
                                                echo $br . '<a href="tel:' . get_sub_field('tel') . '">' . get_sub_field('tel') . '</a>';
                                            endwhile; ?>
										</span>
                                </p>
                            <?php } ?>
                            <?php if (get_field('email')) {?>
                                <p class="address-email"><strong>E-mail:</strong>
                                <?php foreach (get_field('email') as $item) { ?>
                                        <span><a href="<?= $item['email']; ?>"><?= $item['email']; ?></a></span>
                                <?php } ?>
                            </p>
                            <?php } ?>
                            <a href="#feedback" data-target="#feedback" class="btn-new show_popup" style="color: #fff;">Заказать
                                звонок</a>
                        </address>
                        <address>
                            <?php if (get_field('time')) {
                                echo '<p class="address-time"><strong>Время работы:</strong><span>' . get_field('time') . '</span></p>';
                            } ?>
                            <?php if (get_field('address')) {
                                echo '<p class="address-address"><strong>Адрес:</strong> <span>' . get_field('address') . '</span></p>';
                            } ?>
                        </address>
                    </div>

                </div>
                <?php
                $location = get_field('maps');
                if (!empty($location)) {
                    ?>
                    <div class="item">
                        <!--<div class="mapya" id="mapya" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>-->
                        <div class="mapya" id="mapya">
                            <script type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac219384b02dfaf76a0e9761f20221c24970c56240207d43c21ff9762b1d2efd7&amp;width=100%25&amp;height=656&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section><!--End .contact-section-->
<?php endwhile; ?>





<?php get_footer(); ?>
