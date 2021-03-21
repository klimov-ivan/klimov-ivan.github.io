<?php
/*
Template Name: Добавить советы
*/
?>

<!-- html код шаблона -->

<?php get_header(); ?>

<main class="page">
				<div class="main">
					<div class="main__add add-main__content _container">
						<div class="blog-main__block"></div>
						<div class="add-main__item_1">
							<h1 class="add-main__title">Добавить</h1>
							<div class="add-main__text">
								<h2 class="add-main__subtitle">Уважаемые Друзья! Мы рады, Вам всегда!</h2>
								<p class="add-main__text_1">
									Перед тем, как добавить на сайт <a href="http://localhost/my_1_site/"><< ЧТО? КАК? >></a> совет,<br> прочитайте несколько наших запросов, чтобы отправить их.<br>Совет должны иметь свое авторство. Материалы с других сайтов, журналов   или  книг  не могут быть скопированы. Использование не своих материалов возможно только в том случае, если вы завершили оригинальный совет, разработали его и пересказали своими словами. Кроме того, мы  приветствуем много советов, предоставленных с их авторством – фото иллюстрации.
								</p>
								<ul class="add-main__text_2">
									<li><span>Требования к авторам совета:</span></li>
									<li>текст не может содержать открытую рекламу продукта, компании, услуг.</li>
									<li>Мы не публикуем статьи с прямой рекламой и материалы, которые скопированы с других источников.</li>
									<li>Принимаем, только уникальный контент.</li>
								</ul>
								<div class="add-main__thanks">Большое спасибо!</div>
							</div>
							<div class="add-main__form">
								<form class="contact_form form form__body" id="form" enctype="multipart/form-data"  action="#" method="post" name="contact_form">
									<ul>
										<li>
											 <h2>Прислать интересный совет</h2>
											 <span class="required_notification">* Поля, обязательные для заполнения</span>
										</li>
										
										<li>
											<label for="formName"">Имя:</label>
											<input <?php echo do_shortcode('[text* your-name  id="94" ] '); ?> type="text" id="formName" name="name"class="input"  placeholder="Иван Иванов" required />
										</li>
										<li>
											<label <input <?php echo do_shortcode('[email* email-523] '); ?> for="formEmail">Email:</label>
											<input <?php echo do_shortcode('[email* email-523 id="94" ] '); ?> type="email" id="formEmail" name="email" placeholder="name@something.com" required />
											<span class="form_hint">Правильный формат "name@something.com"</span>
										</li>
										
										<li>
											<label for="formMessage">Сообщение:</label>
											<textarea <?php echo do_shortcode('[textarea your-message]  '); ?> id="formMessage" name="message" cols="40" rows="6" required ></textarea>
										</li>
										<li>
										
										<label for="file">Файл:</label>
										<input <?php echo do_shortcode('[file file-627  id="94"]'); ?> id="file" id="formImage" accept=".jpg, .png, .gif" type="file" name="image">
										<div id="formPreview" class="file__preview"></div>
										</li>
										<li>
											<button <?php echo do_shortcode('[submit "Submit"]  '); ?>   class="submit" name="submit" type="submit">ОТПРАВИТЬ</button>
										</li>
									</ul>
									
								</form>
								
										
										
							</div>
						</div>
						<div class="add-main__item_2">
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