<?php get_header(); ?>
<div id="single-content" class="container">
  <div class="row">
    <div class="col-md-8">
      SINGLE
      <?php get_template_part('loop'); ?>

       <?php comments_template(); ?> 

    </div><!-- /.col-md-8 -->
    <div class="col-md-4">
  				<?php dynamic_sidebar( 'sidebar-a' ); ?>
  			<?php dynamic_sidebar( 'sidebar-b' ); ?>
    </div><!-- /.col-md-4 -->
  </div><!-- /.row -->
</div><!-- /#single-content -->
<?php get_footer(); ?>
