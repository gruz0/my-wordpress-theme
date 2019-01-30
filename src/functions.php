<?php

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

add_action( 'wp_footer', 'add_google_analytics' );

function add_google_analytics() {
?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-32863434-1', 'auto');
ga('send', 'pageview');
</script>
	<?php
}

