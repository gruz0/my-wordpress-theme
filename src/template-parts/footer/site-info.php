<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	&copy; <?php echo date( 'Y' ); ?> Alexander Kadyrov
	<br />
	<script type="text/javascript">document.write("<a href='//www.liveinternet.ru/click' target=_blank rel=nofollow><img src='//counter.yadro.ru/hit?t26.1;r"+escape(document.referrer)+((typeof(screen)=="undefined")?"":";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+";h"+escape(document.title.substring(0,150))+";"+Math.random()+"' alt='' title='LiveInternet: number of visitors for today is"+" shown' "+"border='0' width='88' height='15'><\/a>")</script>

	<a href="https://metrika.yandex.ru/stat/?id=15894565&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/15894565/1_0_FFFFFFFF_FFFFFFFF_0_uniques" style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (уникальные посетители)" /></a><script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(15894565, "init", { id:15894565, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true });</script><noscript><div><img src="https://mc.yandex.ru/watch/15894565" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</div>
