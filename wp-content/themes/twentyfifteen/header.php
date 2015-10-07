<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<div id="main">
<header>
	<section id="footer_first">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 text-left">
				<span class="header_phones">
					<a title="Наш телефон" href="tel:+375 (29) 684-43-54">+375 (29) 684-43-54;</a>
					<a title="Наш телефон" class="menu_displayed" href="tel:+375 (29) 444-52-23">+375 (29) 444-52-23;</a>
				</span>
			</div>
			<div class="col-xs-6 text-right">
				<span class="follow_us">
						<a href="https://instagram.com/test" title="Мы в Instagram" ><i class="fa fa-instagram"></i></a>
						<a href="https://youtube.com/test" title="Мы в Youtube" ><i class="fa fa-youtube"></i></a>
						<a href="https://fb.com/test" title="Мы в Facebook" ><i class="fa fa-facebook"></i></a>
						<a href="https://vk.com/test" title="Мы в ВКонтакте" ><i class="fa fa-vk"></i></a>
						<span class="menu_displayed">следите за нами:</span>
				</span>


			</div>
		</div>
	</div>
	</section>
	<section id="footer_second navbar navbar-inverse" >
	<div class="container">
		<div class="row">
		<div class="navbar-header">
			<a class="navbar-brand" data-scroll-nav="0" href="#introduction">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_white.svg" alt="Logo">
			</a>
			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
     		</button>
			
		</div>
		
		
		
		<ul class="nav nav-header navbar-nav navbar-right navbar-collapse collapse" id="myNavbar">
			<li>
				<a href="#top_tours" data-scroll-nav="1" class="active">Топ-туры</a>
			</li>
			<li>
				<a href="#burn_tours" data-scroll-nav="2">Горячие туры</a>
			</li>
			<li>
				<a href="#work_scheme" data-scroll-nav="3">Схема работы</a>
			</li>
			<li>
				<a href="#review" data-scroll-nav="4">Отзывы</a>
			</li>
			<li>
				<a href="#contact" data-scroll-nav="5">Контакты</a>
			</li>
		</ul>
			
			</div>
		</div>
	</section>
</header>
<body <?php body_class(); ?>>



