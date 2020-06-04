<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section class="header-section">
	<div id="div-headline"></div>
</section>
<div id="single-wrap">
	<?php

	while ( have_posts() ) {
		the_post();
		?>
		<div id="div-hero-page">

			<h1><?php the_title(); ?></h1>
			<div id="div-hero-img">
				<?php 
						if(has_post_thumbnail()){
							the_post_thumbnail( 'large' );
						}
						?>
			</div>
			<h2>Hero stats</h2>
			<div id="div-hero-stats">

				<div id="stat-wrap">
					<ul>
						<li>STR <span class="stat-score"><?php the_field('str'); ?></span><span class="stat-modifier"><?php the_field('str-mod'); ?></span></li>
						
						<li>DEX <span class="stat-score">21</span><span class="stat-modifier"><?php the_field('dex-mod'); ?></span></li>
						
						<li>CON <span class="stat-score">21</span><span class="stat-modifier"><?php the_field('con-mod'); ?></span></li>
						
						<li>WIS  <span class="stat-score">21</span><span class="stat-modifier"><?php the_field('wis-mod'); ?></span></li>
						
						<li>INT  <span class="stat-score">21</span><span class="stat-modifier"><?php the_field('int-mod'); ?></span></li>
						
						<li>CHA  <span class="stat-score">21</span><span class="stat-modifier"><?php the_field('cha-mod'); ?></span></li>
					</ul>
				</div>
			</div>

			<div id="div-hero-details">
				<div id="div-hero-traits">
					<h2>Background: <span><?php the_field('background-title'); ?></span></h2>
					<?php the_field('background'); ?>
				</div>
				<div id="div-hero-story">
					<h5>Backstory</h5>
					<?php the_content(); ?>
				</div>
			</div>
		</div>

		<div id="post-quote">
			<hr>
			<h6><?php the_field('wise_quote'); ?></h6>
		</div>
		<div style="clear: both;"></div>
	<?php } ?>
</div>
<?php
get_footer();
