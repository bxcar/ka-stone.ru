	<footer class="footer">
		<!--<div class="top-panel">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-4 col-sm-4"><div class="title">бесплатные консультации</div></div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<?php /*if( get_field('consult_tel', 'option') ) { echo '<a href="tell:'.get_field('consult_tel', 'option').'" class="footer-contact">'.get_field('consult_tel', 'option').'</a>'; } */?>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="schedule">
							<?php /*if( get_field('time_consult', 'option') ) { echo get_field('time_consult', 'option'); } */?>
							<?php /*if( get_field('no_consult', 'option') ) { echo '<small>'.get_field('no_consult', 'option').'</small>'; } */?>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<div class="bottom-panel tobg">
			<div class="container">
				<div class="row flex-row">
					<div class="footer-logo">
                        <div class="logo">
                            <a href="<?php echo home_url('/'); ?>">
                                <?php if( get_field('footer_logo', 'option') ) {
                                    echo '<img src="'.get_field('footer_logo', 'option').'" alt="">';
                                } else {
                                    echo '<img src="'.get_template_directory_uri().'/img/footer-logo.png" alt="">';
                                } ?>
                            </a>
                            <span class="logo-text">Изделия из натурального и кварцевого камня</span>
                        </div>
                        <div class="networks">
                            <?php if( get_field('facebook', 'option') ) { echo '<a href="'.get_field('facebook', 'option').'" target="_blank"><img src="'.get_template_directory_uri().'/img/fb-light.png" alt=""></a>'; } ?>
                            <?php if( get_field('vkontakte', 'option') ) { echo '<a href="'.get_field('vkontakte', 'option').'" target="_blank"><img src="'.get_template_directory_uri().'/img/vk-light.png" alt=""></a>'; } ?>
                            <?php if( get_field('instagram', 'option') ) { echo '<a href="'.get_field('instagram', 'option').'" target="_blank"><img src="'.get_template_directory_uri().'/img/in-light.png" alt=""></a>'; } ?>
                        </div>
					</div>
                    <div class="footer-address-wrap">
                        <div class="footer-address">
                            <img src="<?= get_template_directory_uri()?>/img/footer-location.png">
                            <span>г. Москва, ул. Генерала<br>Дорохова, дом 10А</span>
                        </div>
                        <div class="footer-phone">
                            <img src="<?= get_template_directory_uri()?>/img/footer-phone.png">
                            <span>8 (495) 226-28-73</span>
                        </div>
                        <div class="order-call-item">
                            <a href="#feedback" data-target="#feedback" class="btn-new show_popup" style="color: #fff;">Заказать звонок</a>
                        </div>
                    </div>
					<div class="footer-menu">
                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'footer-1',
//                            'menu'            => 'footer',
//                            'container'       => false,
                            'menu_class'      => '',
                            'fallback_cb'     => '__return_empty_string',
                            'depth'           => 1,
                        ) );
                        ?>
                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'footer-2',
//                            'menu'            => 'footer',
//                            'container'       => false,
                            'menu_class'      => '',
                            'fallback_cb'     => '__return_empty_string',
                            'depth'           => 1,
                        ) );
                        ?>
                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'footer-3',
//                            'menu'            => 'footer',
//                            'container'       => false,
                            'menu_class'      => '',
                            'fallback_cb'     => '__return_empty_string',
                            'depth'           => 1,
                        ) );
                        ?>
					</div>
				</div>
			</div>
			<div class="copyright">Copyright © <?php if( get_field('copy', 'option') ) { echo get_field('copy', 'option'); } else { echo 'Все права защищены | Magma Stone-компания по поставкам природного камня'; } ?></div>
		</div>
	</footer>

	<!--.light_box-->
	<div class="light-box" id="feedback">
		<div class="modal">
			<div class="modal-wrap">
				<div class="close-btn">x</div>
				<div class="contact-form">
					<div class="contact-form-header"><p>Закажите обратный звонок специалиста:</p></div>
					<div class="contact-form-title">Оставьте свой контактный номер телефона и мы перезвоним вам в ближайшее время!</div>
					<div class="contact-form-title2">Ваш телефон:</div>
					<form action="<?php echo get_template_directory_uri(); ?>/inc/mail.php" id="popupForm">
						<div class="form-group"><input type="tel" class="requered" id="popupTel" name="popupTel" placeholder="+7 - (___) - ___ - __ - __"></div>
						<div class="form-group"><textarea class="requered" id="popupName" name="popupName" placeholder="Пожалуйста, представьтесь и опишите суть Вашего обращения"></textarea></div>
						<input type="hidden" id="popupCaptcha" name="popupCaptcha">
						<div class="form-group" id="popupSend_mess"></div>
						<div class="form-group-submit"><button class="submitBtn" id="popupSubmit">Заказать обратный звонок</button></div>
					</form>
				</div>
			</div>
		</div>	
	</div><!--End .light_box-->


	<!--.light_box-->
	<div class="light-box" id="order">
		<div class="modal">
			<div class="modal-wrap">
				<div class="close-btn">х</div>
				<div class="contact-form">
					<h3>Заказать</h3>
					<div class="title_order_prod"></div>
					<form action="<?php echo get_template_directory_uri(); ?>/inc/mail.php" id="orderForm">
						<div class="form-group"><input type="text" class="requered" id="orderName" name="orderName" placeholder="ФИО..."></div>
						<div class="form-group"><input type="tel" class="requered" id="orderTel" name="orderTel" placeholder="Телефон..."></div>
						<div class="form-group"><input type="email" class="requered" id="orderEmail" name="orderEmail" placeholder="E-mail..."></div>
						<div class="form-group"><textarea id="orderMess" name="orderMess" placeholder="Комментарий..."></textarea></div>
						<input type="hidden" id="orderTitle" name="orderTitle">
						<input type="hidden" id="orderCaptcha" name="orderCaptcha">
						<div class="form-group" id="orderSend_mess"></div>
						<div class="form-group-submit"><button class="submitBtn" id="orderSubmit">Заказать</button></div>
					</form>
				</div>
			</div>
		</div>	
	</div><!--End .light_box-->



	<?php wp_footer(); ?>


	<?php if( is_page( 21 ) ){ ?>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwTn0T2CZo4xYCz0gNocEISyQxkTAW2B8&amp;callback=initMap"></script>
	<script>
			/*_______Map_________*/
				function initMap() {
					var mapElement = document.getElementById('map');
					var myLatlng = new google.maps.LatLng(mapElement.getAttribute('data-lat'), mapElement.getAttribute('data-lng'));

					var mapOptions = {
						zoom: 13,
				    center: myLatlng,
				    scrollwheel: false,
				  };

				  //var map = new google.maps.Map(mapElement, mapOptions);
				  var markerImage = new google.maps.MarkerImage(
				  	'<?php echo get_template_directory_uri(); ?>/img/marker.png',
				  	new google.maps.Size(33,44),
				  	new google.maps.Point(0,0),
				  	new google.maps.Point(0,33)
				  );

				  var image = '<?php echo get_template_directory_uri(); ?>/img/marker.png';

				  var marker = new google.maps.Marker({
						position	: myLatlng,
						icon		: markerImage,
						map			: map
					});
				  
				  var map = new google.maps.Map(mapElement, mapOptions);
				  marker.setMap(map);
				}
			/*_______End Map_________*/
	</script>
	<?php } ?>
<!--<noindex><script async src="https://stats.lptracker.ru/code/new/44169"></script></noindex>-->
<script>
	jQuery(".description-goods p:contains('Количество:')").css('display', 'none');
	</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'OOYPK1Ec5f';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>