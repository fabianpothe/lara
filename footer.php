</main>

<footer class="hidden-print">
	<nav class="container">
		<?php echo '&copy; '.date("Y",time()).'&nbsp;'; bloginfo('name'); ?> | Powered by LARA
		<?php if ( function_exists('has_nav_menu') && has_nav_menu('footer-menu') ) {
			wp_nav_menu(array( 'items_wrap' => '<ul id="%1$s" class="nav nav-pills footer-menu %2$s">%3$s</ul>','sort_column' => 'menu_order', 'container' => 'ul', 'theme_location' => 'footer-menu' ) );
		} ?>
	</nav>
</footer>

<?php wp_footer(); ?>

</body>
</html>
