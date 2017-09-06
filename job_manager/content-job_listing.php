
<?php
/**
 * Job listing in the loop.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.0.0
 * @version     1.27.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;
?>

<!-- 
<li class="flex items-center lh-copy pa2 ph0-l bb b--black-10 hover-bg-light-gray" <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr( $post->geolocation_lat ); ?>" data-latitude="<?php echo esc_attr( $post->geolocation_long ); ?>">
	<a class="link dark-blue" href="<?php the_job_permalink(); ?>">
                        <div class="flex-auto f4 pl3">
			<span class=" b hover"><?php wpjm_the_job_title(); ?></span>
			<span class="black-70 pl2">
				<?php the_company_name(); ?>
			</span>
		</div>

		<div>
			<?php do_action( 'job_listing_meta_start' ); ?>

	

			<div class="f6 gray pr3"><?php the_job_publish_date(); ?></div>


			<?php do_action( 'job_listing_meta_end' ); ?>
		</div>
	</a>
</li> -->
 


  <a class="link dark-blue avenir" href="<?php the_job_permalink(); ?>">
                    <li class="flex items-center lh-copy pa2 ph0-l bb bt0 b--black-10 hover-bg-light-gray" <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr( $post->geolocation_lat ); ?>" data-latitude="<?php echo esc_attr( $post->geolocation_long ); ?>">
                        <div class="flex-auto f4 pl3">
                            <span class="fw5 hover"><?php wpjm_the_job_title(); ?></span>
                            <span class="black-70 pl2"><?php the_company_name(); ?></span>
                        </div>
                        <div class="f6 gray pr3">
                            <?php the_job_publish_date(); ?>

                        </div>
                    </li>
                </a>