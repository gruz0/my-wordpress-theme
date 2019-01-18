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

