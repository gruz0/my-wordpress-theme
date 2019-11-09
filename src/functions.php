<?php

add_action( 'wp_head', 'add_google_adsense' );

function add_google_adsense() {
	echo '<script data-ad-client="ca-pub-6111467760015630" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
}

add_filter( 'the_content', 'add_notice_to_old_post' );

function add_notice_to_old_post( $content ) {
	$notice = '';

	if ( is_single() ) {
		if ( has_tag( 'старое' ) ) {
			$notice = <<<NOTICE
				<div class="old-post">
						<strong>Внимание!</strong>
						Данная статья помечена автором как устаревшая
						и информация в ней может быть неактуальна на текущий день.
						Используйте примеры кода на свой страх и риск.
				</div>
NOTICE;
		}
	}

	return $notice . $content;
}

add_action( 'wp_enqueue_scripts', 'enqueue_likely' );

function enqueue_likely() {
	wp_register_script( 'likely', get_stylesheet_directory_uri() . '/vendor/likely/likely.js', array(), false, true );
	wp_enqueue_script( 'likely' );

	wp_register_style( 'likely-css', get_stylesheet_directory_uri() . '/vendor/likely/likely.css' );
	wp_enqueue_style( 'likely-css' );
}

add_filter( 'the_content', 'add_likely_buttons_after_post' );

function add_likely_buttons_after_post( $content ) {
	$likely = '';

	if ( is_single() ) {
		$likely = <<<NOTICE
			<div class="likely">
				<div class="twitter" data-via="gruz0">Твитнуть</div>
				<div class="facebook">Поделиться</div>
				<div class="vkontakte">Поделиться</div>
				<div class="telegram">Отправить</div>
			</div>
NOTICE;
	}

	return $content . $likely;
}

