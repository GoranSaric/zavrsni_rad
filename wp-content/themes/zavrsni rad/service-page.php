<?php
/**
 * The contact page template file
 *
 * Template Name: Services
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/#contact
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="header-section">
	<div id="div-headline">
		<h1><?php the_title(); ?></h1>
	</div>
</section>
<div id="div-body-wrap">
<div id="services">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<a href="">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/belmont.jpg">
						<p class="flex-caption">Battle Maps</p>
					</a>
				</li>
				<li>
					<a href="">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/mage-chick.jpg">
						<p class="flex-caption">Tips & Tricks</p>
					</a>
				</li>
				<li>
					<a href="">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/alucard.jpg">
						<p class="flex-caption">Guides</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
	</div>
<?php
get_footer();
