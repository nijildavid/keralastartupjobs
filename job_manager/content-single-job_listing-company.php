<?php
/**
 * Single view Company information box
 *
 * Hooked into single_job_listing_start priority 30
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-single-job_listing-company.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.14.0
 * @version     1.28.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! get_the_company_name() ) {
	return;
}
?>
<div class="avenir">
<!-- 	<?php the_company_logo(); ?> -->

	<p class="black-70 f4 pa3 pl0 mb4 bb b--black-10">
	<?php the_company_name( ); ?> <br>
		<?php if ( $website = get_the_company_website() ) : ?>

			<a class="f6 link dark-blue hover" href="<?php echo esc_url( $website ); ?>" target="_blank" rel="nofollow"><?php echo esc_url( $website ); ?></a>
		<?php endif; ?>
<!-- 		<?php the_company_twitter(); ?>
 -->		
	</p>
<!-- 	<?php the_company_tagline( '<p class="tagline">', '</p>' ); ?>
 -->	<!-- <?php the_company_video(); ?> -->

</div>
