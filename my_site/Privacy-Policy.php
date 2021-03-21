<?php
/*
Template Name: Privacy Policy

*/


?>


<!-- html код шаблона -->

<?php get_header(); ?>



   <main class="page">
               <div class="main">
				   <div class="main__blog blog-main" >
					   <div class="blog-main__content _container">
						   <div class="blog-main__block">
							   
							   <div class="ya-share2" data-curtain data-size="m" data-shape="round" data- data-services="messenger,vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp,moimir" data-direction="vertical" data-title="All about Yandex" data-access-token:facebook="fb-token" data-title:twitter="Yandex" data-hashtags:twitter="yandex,share" ></div>							   
						   </div>
						   <div class="blog-main__add add-block ">
							   <div class="add-block__article article">
								   <div class="article__bg"></div>
								   <div class="article__inf">
								   <a href="http://localhost/my_1_site/" class="article__title">Самые полезные советы</a>
								   <div class="article__user">250</div>
								   <a href="" class="article__btn">Подписаться</a>
								</div>
							   </div>
							   
                                <h1 class="add-block__title"><?php the_title(); ?></h1>
								
								<section class="add-block__content">
									<div class="add-block__item">
										<ul class="likes">
                                            <li class="likes__item likes__item--like">
                                            <a href="<?php echo add_query_arg('post_action', 'like'); ?>">
                                            Like (<?php echo ip_get_like_count('likes') ?>)
                                            </a>
                                            </li>
                                            <li class="likes__item likes__item--dislike">
                                            <a href="<?php echo add_query_arg('post_action', 'dislike'); ?>">
                                            Dislike (<?php echo ip_get_like_count('dislikes') ?>)
                                            </a>
                                            </li>
                                        </ul>
										<p><?php the_content(); ?></p>
									</div>
								</section>
								<div class="comment"><?php comments_template(); ?></div>
						   </div>
						   <div class="blog-main__ad ad-block">
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
			   </div>
			</main>

    <?php get_footer(); ?>
	