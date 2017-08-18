<!-- 

 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 -->

<div class="wrap avenir">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		

		<?php
if(is_page(39)) {
 get_header('new');
}
else {
 get_header();
}
 wp_head();
?>


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php 


if(is_page(96)) {
 get_footer('new');
}
else {
 get_footer();
}
 wp_head();
