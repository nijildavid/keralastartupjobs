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

   <footer class="bg-light-gray avenir lh-copy f4 mt5">
   	

 
           
            <div class="cf ph6-l pb5 lh-copy tc tl-ns">
 <article class="fl black-70 w-100 dib-ns w-20-ns mr4 mb4 pr2 pr0-ns mt4-ns">
  <img class="mw5 db pb3 left-1-ns" src="<?php bloginfo('template_url'); ?>/assets/images/kerala_startup_jobs_logo.svg">
      <p class="f6 f7-ns db black-70">The startup jobboard of kerala for Designers, Developers, Product Managers and many other professionals. The best ones come here looking for new jobs.</p>

<p class="f6 f7-ns db">© Kerala Startup jobs  2018 </p>

</span>
     
    </article>

 <div class="fl w-100 dib-ns w-20-ns mr4 mb4 pr2 pr0-ns mt4-ns">
      <span class="f7 f7-l fw6">JOBS BY DISTRICTS</span>
      <a class="f7 f6-l db black-70" href="/jobs-in-trivandrum/" title="Jobs in Trivandrum">Jobs in Trivandrum</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-kollam/" title="Jobs in Kollam">Jobs in Kollam</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-alappuzha/" title="Jobs in Alappuzha">Jobs in Alappuzha</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-alappuzha/" title="Jobs in Pathanamthitta">Jobs in Pathanamthitta</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-palakkad/" title="Jobs in Palakkad">Jobs in Palakkad</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-thrissur/" title="Jobs in Thrissur">Jobs in Thrissur</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-idukki/" title="Jobs in Idukki">Jobs in Idukki</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-malappuram/" title="Jobs in Malappuram">Jobs in Malappuram</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-palakkad/" title="Jobs in Kottayam">Jobs in Kottayam</a>
<a class="f7 f6-l db black-70" href="/jobs-in-kottayam/" title="Jobs in Kochi">Jobs in Kochi</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-kasaragod/" title="Jobs in Kasaragod">Jobs in Kasaragod</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-kannur/" title="Jobs in Kannur">Jobs in Kannur</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-wayanad/" title="Jobs in Wayanad">Jobs in Wayanad</a>
      <a class="f7 f6-l db black-70" href="/jobs-in-kozhikode/" title="Jobs in Kozhikode">Jobs in Kozhikode</a>
            
    </div>

 <div class="fl w-100 dib-ns w-20-ns mr4 mb4 pr2 pr0-ns mt4-ns">
      <span class="f7 f7-l fw6">JOBS BY CATEGORY</span>
      <a class="f7 f6-l db black-70" href="/design-jobs/" title="Designer jobs in Kerala">Designer jobs</a>
      <a class="f7 f6-l db black-70" href="/developer-jobs/" title="Developer jobs in Kerala">Developer jobs</a>
      <a class="f7 f6-l db black-70" href="#" title="Product Manager jobs in Kerala">Product Manager jobs</a>
      <a class="f7 f6-l db black-70" href="/sales-marketing-jobs/" title="Sales and Marketing Jobs in Kerala">Sales and Marketing Jobs</a>
      <a class="f7 f6-l db black-70" href="/other-jobs/" title="Freelance, Content Jobs in Kerala">Other Jobs</a>
    </div>

  
    <!-- <div class="fl w-100 dib-ns w-20-ns mr4 mb4 pr2 pr0-ns mt4-ns">
      <span class="f7 f7-l fw6">ABOUT KERALA STARTUP JOBS</span>
      <a class="f7 f6-l db black-70" href="#" title="Designer jobs in Kerala">Why it started</a>
      <a class="f7 f6-l db black-70" href="#" title="Developer jobs in Kerala">Contact</a>
      <a class="f7 f6-l db black-70" href="#" title="Product Manager jobs in Kerala">Subscribe to Email alerts</a>
      <a class="f7 f6-l db black-70" href="/post-a-job/" title="Sales and Marketing Jobs in Kerala">Post your next job</a>
      <a class="f7 f6-l db black-70" href="#" title="Freelance, Content Jobs in Kerala">Other Jobs</a>
    </div> -->

            </div>
            </div>
        </footer>
</body>
</html>
