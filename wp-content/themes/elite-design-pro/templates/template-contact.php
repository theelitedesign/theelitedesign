<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * This template is for displaying home page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package ELITE Design
 * @since 1.0.0
 *
 */

// Include header
get_header();


?>

<section id="hero-section" class="hero-section">
	<div class="hero hero-ctn hero--team">
		<div class="s-96"></div>
		<div class="wrapper">
			<div class="hero__content">
				<h1>Next step  <br>
					<span> Connect with Us</span>
				</h1>
			</div>
		</div>
		<div class="s-96"></div>
	</div>
</section>
<div id="page-section" class="page-section">
	<section class="white-ctn">
		<div class="s-192"></div>
		<div class="wrapper">
			<div class="contact-form flex-between-start">
				<div class="contact-form-content">
					<div class="contact-form-inner-area">
						<div class="s-12"></div>
						<div class="p3 label font-med"> Contact Information</div>
						<div class="s-12"></div>
						<div class="p1">
							<a href="mailto:hello@theelitedesign.com">hello@theelitedesign.com</a> <br>
							<div class="s-12"></div>
							<a href="tel:923474849527">Call923474849527</a>
						</div>
					</div>
					<div class="s-48"></div>
					<div class="contact-form-inner-area">
						<div class="p3 label font-med"> Support help?</div>
						<div class="s-12"></div>
						<div class="p1">
							<a href="mailto:support@theelitedesign.com">support@theelitedesign.com</a> <br>
						</div>
					</div>
				</div>
				<div class="contact-form-form">
					<form method="post" enctype="multipart/form-data" id="gform_2" action="/?gf_page=preview&amp;id=2#gf_2" novalidate="">
						<div class="gform_body gform-body">
							<div id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below">
								<div id="field_2_1" class="gfield half-input-field field_sublabel_below field_description_below gfield_visibility_visible label-down" data-js-reload="field_2_1"><label class="gfield_label" for="input_2_1">First name</label>
									<div class="ginput_container ginput_container_text"><input name="input_1" id="input_2_1" type="text" value="" class="large" aria-invalid="false"> </div>
								</div>
								<div id="field_2_3" class="gfield half-input-field last field_sublabel_below field_description_below gfield_visibility_visible label-down" data-js-reload="field_2_3"><label class="gfield_label" for="input_2_3">Last name</label>
									<div class="ginput_container ginput_container_text"><input name="input_3" id="input_2_3" type="text" value="" class="large" aria-invalid="false"> </div>
								</div>
								<div id="field_2_4" class="gfield half-input-field field_sublabel_below field_description_below gfield_visibility_visible label-down" data-js-reload="field_2_4"><label class="gfield_label" for="input_2_4">Your email</label>
									<div class="ginput_container ginput_container_email">
										<input name="input_4" id="input_2_4" type="email" value="" class="large" aria-invalid="false">
									</div>
								</div>
								<div id="field_2_5" class="gfield half-input-field last field_sublabel_below field_description_below gfield_visibility_visible label-down" data-js-reload="field_2_5"><label class="gfield_label" for="input_2_5">Your phone (helpful)</label>
									<div class="ginput_container ginput_container_phone"><input name="input_5" id="input_2_5" type="tel" value="" class="large" aria-invalid="false"></div>
								</div>
								<div id="field_2_6" class="gfield half-input-field field_sublabel_below field_description_below gfield_visibility_visible label-down" data-js-reload="field_2_6"><label class="gfield_label" for="input_2_6">Organization / Company (if
										available)</label>
									<div class="ginput_container ginput_container_text"><input name="input_6" id="input_2_6" type="text" value="" class="large" aria-invalid="false"> </div>
								</div>
								<div id="field_2_7" class="gfield half-input-field last field_sublabel_below field_description_below gfield_visibility_visible label-down" data-js-reload="field_2_7"><label class="gfield_label" for="input_2_7">Website URL (if
										available)</label>
									<div class="ginput_container ginput_container_text"><input name="input_7" id="input_2_7" type="text" value="" class="large" aria-invalid="false"> </div>
								</div>
								<div id="field_2_8" class="gfield field_sublabel_below field_description_below gfield_visibility_visible label-down" data-js-reload="field_2_8"><label class="gfield_label" for="input_2_8">Project details
										(optional)</label>
									<div class="ginput_container ginput_container_text"><input name="input_8" id="input_2_8" type="text" value="" class="large" aria-invalid="false"> </div>
								</div>
								<div id="field_2_9" class="gfield field_sublabel_below field_description_below gfield_visibility_visible label-down" data-js-reload="field_2_9"><label class="gfield_label" for="input_2_9">Why you're a fit, in one sentence
										(optional)</label>
									<div class="ginput_container ginput_container_text"><input name="input_9" id="input_2_9" type="text" value="" class="large" aria-invalid="false"> </div>
								</div>
							</div>
						</div>
						<div class="gform_footer top_label">
							<input type="submit" id="gform_submit_button_2" class="gform_button button" value="Submit">


						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="s-192"></div>
	</section>
</div>

<?php get_footer(); ?>
