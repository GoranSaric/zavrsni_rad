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
	<div id="div-headline">
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<div id="single-wrap">
	<?php

	while ( have_posts() ) {
		the_post();
		?>
		<div id="div-single-post">
			<div id="div-post">
				<?php 
				if(has_post_thumbnail()){
					the_post_thumbnail( 'large' );
				}
				?>
				<ul>
					<li><?php the_author(); ?></li>
					<li class="div-datum"><?php the_time( 'l, F jS, Y' ); ?></li>
				</ul>
			</div>
			<div id="div-post-info">
				<div id="div-post-text">
					<h2><?php the_field('pod_naslov') ?></h2>
					<h5><?php the_field('uvodna_rijec') ?></h5>
					<span><h4><?php the_field('komentar') ?></h4></span>
					<?php the_content(); ?>
				</div>
			</div>
			<div id="div-author-info">
				<div id="author-avatar">
					<?php if( get_field('author_avatar') ): ?>
						<img src="<?php the_field('author_avatar'); ?>" />
					<?php endif; ?>
				</div>
				<div id="author-bio">
					<h6><?php the_author(); ?></h6>
					<p><?php the_field('author_info'); ?></p>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<div id="post-quote">
			<hr>
			<h6><?php the_field('wise_quotes'); ?></h6>
		</div>
	<?php } ?>
</div>
<?php
get_footer();
