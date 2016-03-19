<div id="content">
	<?php if (have_posts()) : $i = 1; while (have_posts() && $i < 6) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>

				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<?php if (has_post_thumbnail()): ?>

					<?php the_post_thumbnail( 'postbox-thumb', array( 'class' => 'img-responsive' ) ); ?>
					<?php the_post_thumbnail_caption(); ?>
				<?php endif; ?>

				<?php
					/*
					if ( has_post_thumbnail() )
					{

						print '<figure class="post-thumb>';
							print '<div style="max-height:350px; overflow:hidden;">';
								#the_post_thumbnail( 'postbox-thumb', array( 'class' => 'img-responsive' ) );
							print '</div>';
							print '<figcaption><div class="thumb-caption text-right"><small >';
								#the_post_thumbnail_caption();
							print '</small></div></figcaption>';
						print '</figure><!-- /.post-thumb -->';
					}*/
				?>

			</header>

			<?php the_content(); ?>


		</article>
		<?php wp_link_pages(); ?>
		<div id="tags">
			<?php the_tags( '<span class="label label-info">', '</span><span class="label label-info">', '</span>' ); ?>
		</div><!-- /#tags -->
		<hr />

	<?php $i++; endwhile; endif; ?>

	<p></p>

	<nav>
	  <ul class="pagination">
	    <li><?php previous_posts_link(); ?></li>
	    <li><?php next_posts_link(); ?></li>
	  </ul>
	</nav>

	</div></!-- /#content -->
