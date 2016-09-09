<?php

/**
 * Template Name: Full Width
 *
 * Displays the page without a sidebar.
 */

get_header(); ?>

<div id="primary" class="full-width">
	<main id="main" class="site-main" role="main">

		<?php get_template_part( 'content', 'hero' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">
<!--					--><?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

			</article><!-- #post-## -->

		<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
