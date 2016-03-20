<?php
/*
The comments page for Bones
*/

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
  	<div class="alert alert-info"><?php _e("This post is password protected. Enter the password to view comments.","wpbootstrap"); ?></div>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->


<ul class="list-unstyled">
    <?php
        // Register Custom Comment Walker
        require_once('assets/class-wp-bootstrap-comment-walker.php');

        wp_list_comments( array(
            'style'         => 'ul',
            'short_ping'    => true,
            'avatar_size'   => '64',
            'walker'        => new Bootstrap_Comment_Walker(),
        ) );
    ?>
</ul><!-- .comment-list -->

	<?php if ( ! comments_open() ) : ?>
	<p class="alert alert-info"><?php _e("Comments are closed","wpbootstrap"); ?>.</p>
	<?php endif; ?>



<?php if ( comments_open() ) : ?>

	<?php comment_form(); ?>

<?php endif; // if you delete this the sky will fall on your head ?>
