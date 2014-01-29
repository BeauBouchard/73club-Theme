<aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="search">
	<?php get_search_form()	?>
</div>

<div id="iconlinks" >
	<ul>
		<li id="icpinterest" ><a href="http://www.pinterest.com/masonandrye/"><img class="icons" src="/images/icons/pinterest48.png" alt="Instagram" /></a></li>
		<li id="icinstagram" ><a href="#"><img class="icons" src="/images/icons/instagram48.png" alt="Instagram" /></a></li>
		<li id="ictwitter" ><a href="http://www.twitter.com/masonandrye"><img class="icons" src="/images/icons/twitter48.png" alt="Twitter" /></a></li>
		<li id="icrss" ><a href="#"><img class="icons" src="/images/icons/rss48.png" alt="RSS" /></a></li>
	</ul>
</div>

<div id="primary" class="widget-area">
<ul class="xoxo">

<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>