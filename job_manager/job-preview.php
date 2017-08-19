<?php
/**
 * Job listing preview when submitting job listings.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-preview.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @version     1.27.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<form method="post" id="job_preview" action="<?php echo esc_url( $form->get_action() ); ?>">
		


	<div class=" ba1 b--solid b--lightest-blue pb2 pt0 mt0">
	<p class="f6 pa2 bg-lightest-blue mt0"><?php _e( 'Here is your job preview. Confirm and Submit.', 'wp-job-manager' ); ?></p>
		<div class="pl3 pr3"><p class="f2 fw5 pb0 mb0 pt0 mt0"><?php wpjm_the_job_title(); ?></p>

		<?php get_job_manager_template_part( 'content-single', 'job_listing' ); ?></div>

		<input type="hidden" name="job_id" value="<?php echo esc_attr( $form->get_job_id() ); ?>" />
		<input type="hidden" name="step" value="<?php echo esc_attr( $form->get_step() ); ?>" />
		<input type="hidden" name="job_manager_form" value="<?php echo $form->get_form_name(); ?>" />
	</div>
	
		<div class="mw9">
  <div class="cf">
     <div class="fl w-100 w-30-ns">
      <div class="pa2 pt3"> <p>If all looks good,</p>
      <input type="submit" name="continue" id="job_preview_submit_button" class="f4 link button-reset br2 ph4 pv3 dib white bg-dark-blue hover-white hover-bg-blue" value="<?php echo apply_filters( 'submit_job_step_preview_submit_text', __( 'Submit this Job', 'wp-job-manager' ) ); ?>" />
      </div>
      <div class="pa2 pt0">or else
      	<input type="submit" name="edit_job" class=" bb1 b--dark-blue br5 dib  bg-white blue" value="<?php _e( 'Edit it', 'wp-job-manager' ); ?>" />
      </div>
    </div>
    <div class="fl w-100 w-50-ns">
      
    </div>
 
  </div>
</div>

</form>
