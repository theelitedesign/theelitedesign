<?php
/**
 * Block Name: Faq
 *
 * The template for displaying the custom gutenberg block named Faq.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package DevDives
 * @since 1.0.0
 */

EliteDesigns::block(
	$block,
	function ( $ed_block_id, $ed_block_name, $ed_block_fields, $ed_option_fields ) {

		// Block variables.

		$ed_var_hrhm_title_one     = $ed_block_fields['bst_var_hrhm_title_one'] ?? null;
		$ed_var_hrhm_title_two      = $ed_block_fields['bst_var_hrhm_title_two'] ?? null;
		$ed_var_hrhm_sp   = $ed_block_fields['bst_var_hrhm_sp'] ?? null;
		$ed_var_hrhm_text   = $ed_block_fields['bst_var_hrhm_text'] ?? null;

		?>

			<section id="hero-section" class="hero-section overflow-hidden ctn-dblue">
				<div class=" hero-ctn">
					<div class="wrapper">
						<div class="s-48"></div>
						<div class="hero-content">
							<h1 style="display:none"></h1>
							<div class="mb-0  font-bold d2">
								<?php if ( $ed_var_hrhm_title_one ) { ?>
									<div class="headingLine"> <?php echo html_entity_decode( $ed_var_hrhm_title_one ); ?>  </div>
								<?php } ?>
								<?php if ( $ed_var_hrhm_title_two ) { ?>
									<div class="headingLine"><?php echo html_entity_decode( $ed_var_hrhm_title_two ); ?> </div>
								<?php } ?>
							</div>
							<?php if ( $ed_var_hrhm_text ) { ?>
								<div class="s-48"></div>
								<div class="t3">
									<div class="headingLine"><?php echo html_entity_decode( $ed_var_hrhm_text ); ?> </div>
								</div>
							<?php } ?>

							<div class="scroll-down">
								<div class="scroll-down__button">
									<a href="#intro-section" aria-label="Down to First section">
										<svg width="16" height="37" viewBox="0 0 16 37" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path class="dropdown-item1" id="arrow"
												d="M3.33398 16L8.00065 20.6667L12.6673 16" stroke="#ffffff"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											</path>

											<g class="dropdown-item2" opacity="0.15">
												<path d="M3.33398 6L8.00065 10.6667L12.6673 6" stroke="#ffffff"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
												</path>
											</g>

											<g class="dropdown-item3" opacity="0.15">
												<path d="M3.33398 27L8.00065 31.6667L12.6673 27" stroke="#ffffff"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
												</path>
											</g>
										</svg>
										<div class=""><?php esc_html_e( 'Scroll Down', 'elitedesigns_td' ); ?></div>
									</a>
								</div>
							</div>
						</div>
						<div class="s-96"></div>
					</div>
				</div>
			</section>
			<div id="intro-section"></div>

		<?php
	}
);

