<?php
/**
 * The contact page template file
 *
 * Template Name: Tavern
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
	<div id="div-hero-showcase-section">
		<div id="div-hero-title">
			<h3>Hero Showcase</h3>
		</div>
		<?php 
		$myHero = new WP_Query( array( 'posts_per_page' => 4, 'post_type' => 'hero', 'taxonomies' => 'categories' ) );
		$counter = 1;
		while($myHero->have_posts()):
			$myHero->the_post();
			?>
			<div class="<?php if($counter%2==0) echo 'div-right-hero'; else echo 'left-hero'; ?>">
				<ul>
					<li class="<?php if($counter%2==0) echo 'div-right-image'; else echo 'left-image'; ?>">
						<?php 
						if(has_post_thumbnail()){
							the_post_thumbnail( 'large' );
						}
						?>
					</li>

					<li class="<?php if($counter%2==0) echo 'div-right-info'; else echo 'left-info'; ?>">
						<h3><a href="<?php the_permalink(); ?>" class="box-title"><?php the_title(''); ?></a></h3>
						<div class="<?php if($counter%2==0) echo 'right-info-box'; else echo 'left-info-box'; ?>"><p><?php the_excerpt('200'); ?></p></div>
						<a href="<?php the_permalink(); ?>" class="box-btn">read more</a>
					</li>
				</ul>
				<div style="clear: both;"></div>
				<hr>
			</div>
			<?php $counter++; endwhile; ?>
		
		<div id="redirect-btn" class="clearfix">
			<a href="#" class="box-btn">To the tavern!</a>
		</div>
	</div>
</div>
<?php
get_footer();
