<?php
/*
Template Name: Контакты
*/
?>


<?php get_header(); ?>


<main class="page">
				<div class="main">
			    <div class="contacts _container">
					<div class="contacts__block"></div>
					<div class="contacts__content">
					<h1 class="contacts__title">Обратная связь</h1>
					<p class="contacts__text">Страница обратная связь, сайта <a href="http://localhost/my_1_site/"><< ЧТО? КАК? >></a>, сужит для общения с пользователями сайта. <br>Каждый посетитель нашего сайта, может написать в сообщении, свои пожелания в форме обратной связи.<br>Наша команда, незамедлительно ответит Вам.</p>
					<p class="contacts__text1">Пишите. Будем рады общению!</p>
				
					<div class="contacts__form">
						<form class="contact_form form" action="<?php bloginfo('template_url'); ?>/mailer/smart.php" method="post">
							<ul>
							
								<li>
									 <h2>Написать сообщение</h2>
									 <span class="required_notification">* Поля, обязательные для заполнения</span>
								</li>
								<li>
									<label for="name">Имя:</label>
									<input type="text" id="name" name="user_name"  class="input"  placeholder="Иван Иванов" required />
								</li>
								<li>
									<label for="email">Email:</label>
									<input type="email" id="email" name="user_email" placeholder="name@something.com" required />
									<span class="form_hint">Правильный формат "name@something.com"</span>
								</li>
								
								<li>
									<label for="message">Сообщение:</label>
									<textarea id="message" name="comment" cols="40" rows="6" required ></textarea>
								</li>
								<li>
									<button name="submit" class="submit" type="submit">ОТПРАВИТЬ</button>
								</li>
							</ul>
						</form>
					</div>
				</div>
					<div class="contacts__item add-main__item_2">
						<h2 class="ad-block__title">Реклама</h2>
						<?php get_sidebar();?>
						<ul class="ad-block__content">
							<li><a href="" class="ad-block__link"></a></li>
							<li><a href="" class="ad-block__link"></a></li>
							<li><a href="" class="ad-block__link"></a></li>
							<li><a href="" class="ad-block__link"></a></li>
						</ul>
					</div>
				
				</div>
			</div>
			</main>

<?php get_footer(); ?>