<?php
/**
 * The template  displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ELITE Design
 * @since 1.0.0
 */

// Include header
get_header();



?>
<section id="hero-section" class="hero-section">
	<div class="hero hero-ctn hero--work">
		<div class="s-96"></div>
		<div class="wrapper">
			<div class="hero__content">
				<h1>
					Something Wrong
				</h1>
			</div>
		</div>
		<div class="s-96"></div>
	</div>
</section>
<section id="page-section" class="page-section white-ctn">

		<div class="s-96"></div>
		<div class="wrapper">
			<div class="page-404-menu">
			<p>It looks like you may have taken a wrong turn <br>
				Don’t worry… it happens to the best of us.</p>

				<p>Here’s a little map that might help you get back on track:</p>
			<div class="s-48"></div>
				<ul>
					<li>
						<a href="#">Projects</a>
					</li>
					<li>
						<a href="#">Services</a>
					</li>
					<li>
						<a href="#">Team</a>
					</li>
					<li>
						<a href="#">Company</a>
					</li>

					<li>
						<a href="#">Contact</a>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>
				</ul>
				<div class="s-48"></div>
				<div class="form-404">
						<form role="search" method="get" class="search-form" action="https://www.theelitedesign.com/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search …" value="" name="s">
				</label>
				<input type="submit" class="search-submit" value="Search">
			</form>					</div>
			</div>

		</div>
		<div class="s-96"></div>

</section> <?php
get_footer();
