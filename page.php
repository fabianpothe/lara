<?php get_header(); ?>
<div id="page-content" class="container">



			<?php get_template_part('loop'); ?>


				<?php dynamic_sidebar( 'sidebar-a' ); ?>
			<?php dynamic_sidebar( 'sidebar-b' ); ?>

</div><!-- /#page-content -->
<?php get_footer(); ?>
