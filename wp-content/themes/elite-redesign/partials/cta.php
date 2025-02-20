<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package elite designs
 * @since 1.0.0
 */

list( $ed_var_post_id, $ed_fields, $ed_option_fields, $ed_queried_object ) = EliteDesigns::defaults();

$ed_var_to_cta_headline = $ed_option_fields['bst_var_to_cta_headline'] ?? null;

$ed_var_page_cta_pagevisibility = $ed_fields['bst_var_page_cta_pagevisibility'] ?? null;
$ed_var_ftrcta_headline         = $ed_fields['bst_var_page_cta_headline'] ?? $ed_var_to_cta_headline;
?>

