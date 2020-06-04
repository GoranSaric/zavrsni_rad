<?php
/**
 * The contact page template file
 *
 * Template Name: Rumor
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

	<div id="article-wrapper">
		<div id="article-title">
			<h3>rumors</h3>
		</div>
			<div id="article-box-medium">
<?php 
		$mojaObjava = new WP_Query( array( 'posts_per_page' => 2, 'post_type' => 'post', 'category_name' => 'big_post' ) );
		while($mojaObjava->have_posts()):
			$mojaObjava->the_post();
			?>
				<div class="div-article-wrapper">
					<div id="div-article-box">
						<?php 
						if(has_post_thumbnail()){
							the_post_thumbnail( 'large' );
						}
						?>
						<div id="div-article-desc">
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
								<p>Neki tekst koji pokazuje da ovdje ima više contenta nego što bi trebalo biti</p>
							</a>
						</div>
						<div class="overlay"></div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>

			<div id="article-box-small">
				<?php 
		$mojaObjava = new WP_Query( array( 'posts_per_page' => 3, 'post_type' => 'post', 'category_name' => 'medium' ) );
		while($mojaObjava->have_posts()):
			$mojaObjava->the_post();
			?>
				<div class="article-box-wrapper">
					<div id="article-box">
						<?php 
						if(has_post_thumbnail()){
							the_post_thumbnail( 'large' );
						}
						?>
						<div id="article-desc">
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
								<p>Neki tekst koji pokazuje da ovdje ima više contenta nego što bi trebalo biti</p>
							</a>
						</div>
						<div class="overlay"></div>
					</div>
				</div>
			<?php endwhile; ?>
			</div>
		
	</div>
	<div id="post-quote">
			<hr>
			<h6><?php the_field('wise_quotes'); ?></h6>
		</div>
</div>
<?php
get_footer();
