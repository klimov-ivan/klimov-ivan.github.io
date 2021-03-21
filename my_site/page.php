<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_site
 */

get_header();
?>

<main class="page">
               <section class="main ">
				<div class="main__shell">
					<h1 class="main__title">Самые полезные советы</h1>
					<a href="http://localhost/my_1_site/добавить-совет/" target="_blank" class="main__btn">добавить советы</a>
					<p class="main__subtitle">Всё, что вы хотели знать, но...</p>
					</div>
				   <div class="main__content">
				<!-- Контейнер с адаптиными блоками -->
                <div class="masonry">
                    <!-- Адаптивные блоки с содержанием -->

					<?php 
           // параметры по умолчанию
           $posts = get_posts( array(
             'numberposts' => -1,
             'orderby'     => 'date',
             'order'       => 'DESC',
             'post_type'   => 'page',
             'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

           foreach( $posts as $post ){
             setup_postdata($post);
               ?>
                    
                   <div class="masonry__item">
                      <picture><source srcset="<?php the_post_thumbnail_url() ?>" type="image/webp"><img src="<?php the_post_thumbnail_url() ?>"></picture>
					  <ul class="likes">
										<li class="likes__item likes__item--like">
											<a href="#">
												Like (0)
											</a>
										</li>
										<li class="likes__item likes__item--dislike">
											<a href="#">
												Dislike (0)
											</a>
										</li>
									</ul>
                      <br><p><?php the_title(); ?><br><?php the_excerpt(); ?></p> 
					  <a href="<?php the_permalink(); ?>">Подробнее »</a>
                    </div>
					<?php  
        }

           wp_reset_postdata(); // сброс
               ?>
                    <!-- Конец адаптивных блоков с содержанием -->
 
                  </div>
                   <!-- Конец контейнера с адаптивными блоками -->
				   <aside>
					<div class="content__block-2">
						<h2 class="content__title-2">Новости</h2>
						<?php get_sidebar();?>
						<ul class="content__item-2">
							<li><a href=""target="_blank"  class="content__link-1"></a></li>
							<li><a href="" class="content__link-1"></a></li>
							<li><a href="" class="content__link-1"></a></li>
							<li><a href="" class="content__link-1"></a></li>
						</ul>
					</div>
				   </aside>
	               
                 </div>
               </section>
			</main>

			<?php get_footer(); ?>
