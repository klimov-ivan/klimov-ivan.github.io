<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_site
 */

?>
<!DOCTYPE html>
<html lang="ru">
	 <head>
	<title>Совет, Что? Как?</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.min.css">
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

</head>
	<body>
		<div class="wrapper">
			<script >
	function clock() {
	var d = new Date();
	var month_num = d.getMonth()
	var day = d.getDate();
	var hours = d.getHours();
	var minutes = d.getMinutes();
	var seconds = d.getSeconds();
	month=new Array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
	if (day <= 9) day = "0" + day;
	if (hours <= 9) hours = "0" + hours;
	if (minutes <= 9) minutes = "0" + minutes;
	if (seconds <= 9) seconds = "0" + seconds;
	date_time = day + "." + month[month_num] + "." + d.getFullYear() + " г.   "+ hours + ":" + minutes + ":" + seconds;
	if (document.layers) {
	document.layers.doc_time.document.write(date_time);
	document.layers.doc_time.document.close();
	}
	else document.getElementById("doc_time").innerHTML = date_time;
	setTimeout("clock()", 1000);
	}
</script>
<header class="header">
	<div class="inform-block">
         <div class="inform-block__time">
		   <span>Сегодня </span>
	        <div class="time" id="doc_time"></div>
         </div>
		 <div class="inform-block__socium" >
		 <div class="ya-share2" data-curtain data-size="s" data-shape="round" data-services="vkontakte,facebook,odnoklassniki,telegram,"data-title="All about Yandex" data-access-token:facebook="fb-token" ></div>
		 </div>
    </div>
	<script> clock(); </script>

	
	<div class="header__content _container">
		<div class="icon-menu">
			<span></span>
			<span></span>
			<span></span>
		</div>
	   <a href="http://localhost/my_1_site/" class="header__logo"><picture><source srcset="<?php bloginfo('template_url');?>/img/icons/logo.webp" type="image/webp"><img src="<?php bloginfo('template_url');?>/img/icons/logo.png" alt="" /></picture></a>
	   <div class="d1">
	   <div class="ya-site-form ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;https://yandex.ru/search/site/&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:14,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Поиск по cliiv.ru&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_blank&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2453983,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;bold&quot;,&quot;input_placeholder&quot;:&quot;Искать здесь....&quot;,&quot;input_placeholderColor&quot;:&quot;#ffcc00&quot;,&quot;input_borderColor&quot;:&quot;#7f9db9&quot;}">

		
		<form  action="https://yandex.ru/search/site/"method="get" target="_blank" accept-charset="utf-8" >
			<input type="hidden" name="searchid" value="2453983"/>
             <input type="hidden" name="l10n" value="ru"/>
             <input type="hidden" name="reqenc" value=""/>
             <input type="search" name="text" value=""/>
             <input type="submit" value="ok"/>
		</form>
		</div>
	  
	  <style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }#ya-site-form0 .ya-site-form__wrap {flex:1 1 auto;position:relative;max-width:800px; width: 100%;table-layout: auto;}#ya-site-form0 .ya-site-form__submit{background-color: #ffffff;color: #fc0;padding: 0 5px 0 5px;}#ya-site-form0 .ya-site-form__submit:before {content: "\f002";font-family: FontAwesome;font-size: 16px;color: #000;}.ya-site-form input[type="search"]{width: 100%;height: 40px;padding-left: 10px;border-radius: 19px;outline: none;background: #f8f5ee;color: #9E9C9C;}.ya-site-form input[value="Найти"]{position: absolute;top: 7px;right: 7px;width: 42px;height: 38px;border: none;background: #f8f5ee;border-radius: 0 19px 19px 0;cursor: pointer; } </style>
	  <script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
	  </div>
	   <div class="header__menu menu">
		   <nav class="menu__body">
		   
		   <?php wp_nav_menu( array(
      		'menu'            => 'top_menu',
      		'container'       => 'ul',
      		'container_class' => 'menu__list',
      		'menu_class'      => 'menu__list',
      		'menu_id'         => '',
      		'echo'            => true,
      		'fallback_cb'     => 'wp_page_menu',
      		'before'          => '',
      		'after'           => '',
      		'link_before'     => '',
      		'link_after'      => '',
      		'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
      		'depth'           => 0,
      		'walker'          => '',
      	) ); ?>
			   
			   <ul class="menu__list">
				   <details>
					<summary>Строительство и ремонт</summary>
					<?php wp_nav_menu("menu=stroitelstvo"); ?>
				</details>
				   <details>
					<summary>Сад и огород</summary>
					<?php wp_nav_menu("menu=sad-ogorod"); ?>
				</details>
				   <details> 
					<summary>Кухня и кулинария</summary>
					<?php wp_nav_menu("menu=kuhny-kulinar"); ?>
				</details>
				   <details>
					<summary>Автомобиль</summary>
					<?php wp_nav_menu("menu=automob"); ?>
				</details>
				   <details>
					<summary>Бытовые советы и хитрости</summary>
					<?php wp_nav_menu("menu=sovet-hitrosti"); ?>
				</details>
				   <details>
					<summary>Красота и здоровье</summary>
					<?php wp_nav_menu("menu=krasota-zdorove"); ?>
				</details>
				</ul> 
		   </nav>
	   </div>
	   <a href="http://localhost/my_1_site/добавить-совет/" target="_blank" class=" menu__btn">добавить советы</a>
	   <a href="" class=" menu__link_1 " title="Подписаться!"></a>

	</div>
	
</header>
