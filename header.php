<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> class="avenir lh-copy f4"> 
  <header class="bg-lightest-green">
            <div class="mw9 center pt5-ns pb0 ph7-l pb4">
                <h4 class="f1-m f-subheadline pb3 lh-title mv0 tracked-tight black-80">
        Kerala startup jobs
      </h4>
                <span class="lh-copy">A place to find your right job in successful companies and startups based in Kerala. Hire the talented ones by listing your jobs here.</span>
            </div>
            <div class="cf ph7-l ">
                <div class="fl w-100 w-50-ns pa0">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/trees.svg">
                </div>
                <div class="fl w-100 w-50-ns">
                    <div class="tr">
                        <p class="f6 lh-copy pb0 mb1 mt4 gray">Offer valid till Dec 2017</p>
                        <a class="f4 link button-reset br2 ph4 pv2 dib white bg-dark-blue" href="/post-a-job/"><b>Post your job</b> ( <span class="strike light-red">250 Rs </span>  FREE for 30 days )</a></div>
                </div>
            </div>
            </div>
        </header>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
