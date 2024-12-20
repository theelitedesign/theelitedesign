<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ELITE Design
 * @since 1.0.0
 *
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;


$elitedesign_dflt_hero_kicker = (isset($fields['elitedesign_dflt_hero_kicker'])) ? $fields['elitedesign_dflt_hero_kicker'] : null;
$elitedesign_dflt_hero_title = (isset($fields['elitedesign_dflt_hero_title'])) ? $fields['elitedesign_dflt_hero_title'] : null;
$elitedesign_dflt_hero_text = (isset($fields['elitedesign_dflt_hero_text'])) ? $fields['elitedesign_dflt_hero_text'] : null;
$elitedesign_dflt_hero_btn_one = (isset($fields['elitedesign_dflt_hero_btn_one'])) ? $fields['elitedesign_dflt_hero_btn_one'] : null;

if(!$elitedesign_dflt_hero_title){
	$elitedesign_dflt_hero_title = get_the_title();
}

?>

	

	<section id="hero-section" class="hero-section">
		<div class="hero hero-ctn hero--work">
			<div class="s-48"></div>
			<div class="wrapper">
				<div class="hero__content">
					<div class="overline"><?php echo $elitedesign_dflt_hero_kicker; ?></div>
					<div class="-24"></div>
					<h1><?php echo $elitedesign_dflt_hero_title; ?></h1>
					<div class="s-48"></div>
					<?php if($elitedesign_dflt_hero_btn_one) { ?>
						<a href="<?php echo $elitedesign_dflt_hero_btn_one['url']; ?>" target="<?php echo $elitedesign_dflt_hero_btn_one['target']; ?>" class="button"><?php echo $elitedesign_dflt_hero_btn_one['title']; ?></a>
					<?php } ?>
				</div>
			</div>
			<div class="s-96"></div>
		</div>
	</section>
	<!-- Hero End -->

<section id="page-section" class="page-section">
	<!-- Content Start -->

	<?php while ( have_posts() ) { the_post();
		//Include specific template for the content.
		get_template_part( 'partials/content', 'page' );

	} ?>

	<div class="clear"></div>
	<!-- Content End -->
</section>

<?php get_footer(); ?>
