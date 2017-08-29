<?php
/**
 * Apply by email content.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-application-email.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @version     1.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<p><?php printf( __( 'To apply for this job, <b>email your details to</b> <a class="job_application_email" href="mailto:%1$s%2$s">%1$s</a>', 'wp-job-manager' ), $apply->email, '?subject=' . rawurlencode( $apply->subject ) ); ?></p>
