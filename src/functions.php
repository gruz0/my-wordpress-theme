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

