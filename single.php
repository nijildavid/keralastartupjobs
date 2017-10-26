
<!-- /**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
 -->


<div class="wrap avenir mw9 pt4-ns ph6-l">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php get_header('new'); ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle fw4">' . __( 'Previous Job', 'twentyseventeen' ) . '</span> <span class="nav-title fw4 f4"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => '' ) ) . '</span>%title</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle fw4">' . __( 'Next Job', 'twentyseventeen' ) . '</span> <span class="nav-title fw4 f4">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => '' ) ) . '</span></span>',
				) );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
