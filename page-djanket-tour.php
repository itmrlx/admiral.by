<?php /*
template name: Джанкет тур
*/ ?>
<?php get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<div class="container">
	<div class="row">
		<ul class="tab-menu">
				<li class="<?php if(is_page('poker')):echo " current-menu-item"; endif; ?>"><a href="/poker">Покер</a></li>
				<li class="<?php if(is_page('ruletka')):echo "current-menu-item"; endif; ?>"><a href="ruletka">Рулетка</a></li>
				<li class="<?php if(is_page('blek-dzhek')):echo " current-menu-item"; endif; ?>"><a href="/blek-dzhek">Блек Джек</a></li>
				<li class="<?php if(is_page('dzhanket-tur')):echo " current-menu-item"; endif; ?>"><a href="dzhanket-tur">Джанкет тур</a></li>
				<li class="<?php if(is_page('igrovyie-avtomatyi')):echo " current-menu-item"; endif; ?>"><a href="/igrovyie-avtomatyi">Игровые автоматы</a></li>
				<li class="<?php if(is_page('bukmekerskaya-kontora')):echo " current-menu-item"; endif; ?>"><a href="/bukmekerskaya-kontora">Букмекерская контора</a></li>
				<li class="<?php if(is_page('pontun')):echo " current-menu-item"; endif; ?>"><a href="/pontun">Понтун</a></li>
				<li class="<?php if(is_page('pontun')):echo " current-menu-item"; endif; ?>"><a href="/lovi-volnu">Лови волну</a></li>
				<li class="<?php if(is_page('pontun')):echo " current-menu-item"; endif; ?>"><a href="/punto-banko">Пунто Банко</a></li>
		</ul>
	</div>
</div>
<!-- for vip -->
<div class="container vip-container">
	<h1 class="hr-title"><?php the_field('dj_title1'); ?></h1>
	<div class="desc"><?php the_field('dj_desc1'); ?></div>
	<div class="row"><hr></div>
	<div class="vip-chice-container">
		<div class="vip-choice">
			<div class="col-xs-3">
				<div class="pole1">
					<div class="vert-center"><div class="hand"></div></div>
				</div>
				<div class="pole2">
					<div class="vert-center">Размен в кассе казино Медиум</div>
				</div>
				<div class="pole3">
					<div class="vert-center">Минимальная игра на рулетке</div>
				</div>
				<div class="pole4">
					<div class="vert-center">Минимальная игра на карточных столах</div>
				</div>
				<div class="pole5">
					<div class="vert-center">Трансфер: аэропорт (ж/д вокзал)/отель/казино),кухня ресторана ,бар казино</div>
				</div>
				<div class="pole6">
					<div class="vert-center">Проезд</div>
				</div>
				<div class="pole7">
					<div class="vert-center">Компенсация проезда обратно на личном авто</div>
				</div>
				<div class="pole8">
					<div class="vert-center">Проживание</div>
				</div>
				<div class="pole9">
					<div class="vert-center">Компенсация приезда (ж/д, авто, авиа) при наличии проездного документа</div>
				</div>
				<div class="pole10">
					<div class="vert-center">Дополнительные услуги</div>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="vip-block">
					<div class="pole1">
						<div class="vert-center">Medium</div>
					</div>
					<div class="pole2">
						<div class="vert-center">	3.000 у.е. до 5.000 у.е. (депозит включен в эту сумму и составляет 1.000 у.е.)</div>
					</div>
					<div class="pole3">
						<div class="vert-center">4 часа по 100 у.е. за спин</div>
					</div>
					<div class="pole4">
						<div class="vert-center">4 часа с суммарной ставкой на всех боксах - 50 у.е.</div>
					</div>
					<div class="pole5">
						<div class="vert-center"><div class="check"></div></div>
					</div>
					<div class="pole6">
						<div class="vert-center">Поездом обратно в купе в одну сторону (Москва / Санкт- Петербург )</div>
					</div>
					<div class="pole7">
						<div class="vert-center"><div class="check"></div></div>
					</div>
					<div class="pole8">
						<div class="vert-center">2 дня в отеле ”Орбита” в номере Single г.Минск, Отель "Турист" г.Гомель</div>
					</div>
					<div class="pole9">
						<div class="vert-center">Частичная в пределах 150 у.е.</div>
					</div>
					<div class="pole10">
						<div class="vert-center"><div class="none"></div></div>
					</div>
				</div>
				<a href="#zakaz" class="btn btn-zakaz fancybox" onclick="getValue('Medium')">Оставьте заявку<br>и мы с Вами свяжемся</a>
			</div>
			<div class="col-xs-3">
				<div class="vip-block mediumplus">
					<div class="pole1">
						<div class="vert-center">Medium +</div>
					</div>
					<div class="pole2">
						<div class="vert-center">от 6.500 у.е. до 9.500 у.е. (депозит включен в эту сумму и составляет 1.500 у.е.)</div>
					</div>
					<div class="pole3">
						<div class="vert-center">4 часа по 200 у.е. за спин</div>
					</div>
					<div class="pole4">
						<div class="vert-center">4 часа с суммарной ставкой на всех боксах-150 у.е.</div>
					</div>
					<div class="pole5">
						<div class="vert-center"><div class="check"></div></div>
					</div>
					<div class="pole6">
						<div class="vert-center">Перелет эконом-классом обратно в одну сторону (Москва / Санкт- Петербург )</div>
					</div>
					<div class="pole7">
						<div class="vert-center"><div class="check"></div></div>
					</div>
					<div class="pole8">
						<div class="vert-center">2 дня в отеле “ Орбита” в номере люкс Single</div>
					</div>
					<div class="pole9">
						<div class="vert-center">Частичная в пределах 150 у.е.</div>
					</div>
					<div class="pole10">
						<div class="vert-center"><div class="none"></div></div>
					</div>
				</div>
				<a href="#zakaz" class="btn btn-zakaz fancybox" onclick="getValue('Medium +')">Оставьте заявку<br>и мы с Вами свяжемся</a>
			</div>
			<div class="col-xs-3">
				<div class="vip-block">
					<div class="pole1">
						<div class="vert-center">Max +</div>
					</div>
					<div class="pole2">
						<div class="vert-center">от 9.500 до 12.500 (депозит включен в эту сумму и составляет 2.500 у.е.)</div>
					</div>
					<div class="pole3">
						<div class="vert-center">4 часа по 300 у.е. за спин</div>
					</div>
					<div class="pole4">
						<div class="vert-center">4 часа с суммарной ставкой на всех боксах-250 у.е.</div>
					</div>
					<div class="pole5">
						<div class="vert-center"><div class="check"></div></div>
					</div>
					<div class="pole6">
						<div class="vert-center">Перелет бизнес-классом обратно в одну сторону (Москва / Санкт- Петербург)</div>
					</div>
					<div class="pole7">
						<div class="vert-center"><div class="check"></div></div>
					</div>
					<div class="pole8">
						<div class="vert-center">в отеле “ Орбита” в номере дабллюкс на все время игры</div>
					</div>
					<div class="pole9">
						<div class="vert-center">Полная компенсация</div>
					</div>
					<div class="pole10">
						<div class="vert-center"><div class="check"></div></div>
					</div>
				</div>
				<a href="#zakaz" class="btn btn-zakaz fancybox" onclick="getValue('MAX +')">Оставьте заявку<br>и мы с Вами свяжемся</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 tour-desc">
			<hr>
			<?php the_field('dj_pod1'); ?>
			<hr>
		</div>
	</div>
</div>

<div class="container vip-container2">
	<h2 class="title"><?php the_field('dj_title2'); ?></h2>
	<?php the_field('dj_desc2'); ?>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 tour-desc centered">
			<hr>
			<?php the_field('dj_pod2'); ?>
			<hr>
		</div>
	</div>
	<div class="clearfix"></div>
</div>

<!-- modal -->
<div id="zakaz" style="display:none;">
	<form id="myform">
		<div class="centered modaltitle"><h3></h3></div>
		<div class="form-group">
			<label>Имя:</label>
			<input class="form-control" name="name" type="text" required />
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input class="form-control" name="mail" type="email" />
		</div>
		<div class="form-group">
			<label>Телефон:</label>
			<input class="form-control" name="tel" type="tel" required />
		</div>
		<div class="form-group" style="display:none;">
			<label>for robots:</label>
			<input class="form-control" type="text" name="email" />
			<input id="zakazinput" class="form-control" type="text" name="zakaz" />
		</div>
		<div class="centered">
			<button type="submit" class="btn btn-primary">Отправить</button>
		</div>
	</form>
</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>