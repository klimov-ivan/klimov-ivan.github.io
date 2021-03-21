<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_site
 */

?>

<footer class="footer">
	<div class="footer__content _container">
		<div class="footer__head footer-head ">
			<div class="footer-head__item-1">
				<p>Все права защищены.</p>
			</div>
			<div class="footer-head__item-2">
				<p>© Copyright 2021 - Самые полезные советы</p>
			</div>
            <div class="footer-head__item-3">
				<a href="http://localhost/my_1_site/контакты/" target="_blank">Обратная связь </a>
			</div>
			<div class="footer-head__btn">
				<a id="button"></a>
			</div>
		</div>

	</div>
</footer>
		</div>
		<div class="popup">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close"></div>
		</div>
	</div>
</div>
<div class="popup popup_video">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close popup__close_video"></div>
			<div class="popup__video _video"></div>
		</div>
	</div>
</div>

	
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>





<script> 
	var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

	</script> 
<script src="<?php bloginfo('template_url');?>/js/vendors.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/app.min.js"></script>
<script src="https://use.fontawesome.com/55bd95d924.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>
	</body>
</html>
