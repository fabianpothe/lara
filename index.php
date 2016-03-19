<?php get_header(); ?>
<div class="container">



			<?php get_template_part('loop'); ?>


				<?php dynamic_sidebar( 'sidebar-a' ); ?>
			<?php dynamic_sidebar( 'sidebar-b' ); ?>

</div>
<?php get_footer(); ?>
