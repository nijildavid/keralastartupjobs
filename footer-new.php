<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


		</div><!-- #content -->

		<footer id="colophon" class="" role="contentinfo">
			<div class="">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

   <footer class="bg-light-gray avenir lh-copy f4">
           
            <div class="f6 cf ph7-l pb3 black-70">
                <div class="fl w-100 w-80-ns">
                    <div class="mt4">
                <span class="lh-copy">Stay updated with our Facebook page <a class="link dark-blue underline" href="#">@keralastartupjobs</a>
                                              <p >Kerala startup jobs aims to reduce the unemployment in Kerala.<br> Made it in a pulse!</p>

                </span>
                    </div>
                </div>
                <div class="fl w-100 w-10-ns pa0 mt4">
     
                </div>
            </div>
            </div>
        </footer>
</body>
</html>
