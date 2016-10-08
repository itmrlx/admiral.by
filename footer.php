	<!-- main contacts -->
	<div class="container main-contacts-container">
		<div class="row">
			<div class="col-xs-4">
				<div class="centered">
					<a href="/kontaktyi/myi-v-minske/" class="btn btn-main-contacts-blue">Мы в Минске</a>
				</div>
				<div class="map"><?php the_field('map_minsk','option'); ?></div>
				<?php if(get_field('con_text1','option')): ?><p><?php the_field('con_text1','option'); ?></p><?php endif; ?>
				<?php if(get_field('con_tel1','option')): ?><p class="phones"><?php the_field('con_tel1','option'); ?></p><?php endif; ?>
				<?php if(get_field('con_adres1','option')): ?><p class="adress"><?php the_field('con_adres1','option'); ?></p><?php endif; ?>
			</div>
			<div class="col-xs-4">
				<div class="centered">
					<a href="/kontaktyi/kazino-v-gomele/" class="btn btn-main-contacts-blue">Мы в Гомеле</a>
				</div>
				<div class="map"><?php the_field('map_gomel','option'); ?></div>
				<?php if(get_field('con_text2','option')): ?><p><?php the_field('con_text2','option'); ?></p><?php endif; ?>
				<?php if(get_field('con_tel2','option')): ?><p class="phones"><?php the_field('con_tel2','option'); ?></p><?php endif; ?>
				<?php if(get_field('con_adres2','option')): ?><p class="adress"><?php the_field('con_adres2','option'); ?></p><?php endif; ?>
			</div>
			<div class="col-xs-4">
				<div class="centered">
					<a href="/kontaktyi/myi-v-osipovichah/" class="btn btn-main-contacts-blue">Мы в Осиповичах</a>
				</div>
				<div class="map"><?php the_field('map_osipovichi','option'); ?></div>
				<?php if(get_field('con_text3','option')): ?><p><?php the_field('con_text3','option'); ?></p><?php endif; ?>
				<?php if(get_field('con_tel3','option')): ?><p class="phones"><?php the_field('con_tel3','option'); ?></p><?php endif; ?>
				<?php if(get_field('con_adres3','option')): ?><p class="adress"><?php the_field('con_adres3','option'); ?></p><?php endif; ?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="wrapper footer-wr">
		<div class="container">
			<p class="webber centered">&copy; <?=date('Y');?>. All Rights reserved. Admiral.by &nbsp;&nbsp;&nbsp; Разработка сайта<a href="http://webber.by"><img src="<?php bloginfo('template_url'); ?>/img/webber-white.svg" alt="Webber создание сайтов">Webber Studio</a></p>
		</div>
	</div>

	<!-- modal -->
	<div id="fform" style="display: none;">
		<form id="form-id" class="form-call">
			<h3 class="modal-form-title centered">Заказать звонок</h3>
			<div class="form-group">
				<label>*Введите Ваше имя:</label>
				<input class="form-control" name="name" type="text" required />
			</div>
			<div class="form-group">
				<label>*Введите Ваш телефон:</label>
				<input class="form-control" name="tel" type="tel" required />
			</div>
			<div class="form-group for-robots" style="display: none;">
				<input class="form-control" type="text" name="email" />
				<input class="form-control modal-form-value" type="text" name="title" value="Заказать звонок!" />
			</div>
			<button type="submit" class="btn btn-primary">Отправить</button>
		</form>
	</div>
	
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery-2.2.3-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery.fancybox-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/slick-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/script-min.js"></script>
	<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter37145920 = new Ya.Metrika({ id:37145920, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/37145920" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
	<?php wp_footer(); ?>
</body>
</html>