<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<section class="header-section-main">
	<div id="div-headline-main">
		<h1><?php the_field('frontpage_title'); ?></h1>
		<p><?php the_field('frontpage_greeting'); ?></p>
	</div>
</section>

<!--############  Articles  ##########-->

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

	<!--############  Articles  ##########-->

	<!--############  Services - under construction  ##########-->
	<div id="services">
		<div id="services-title">
			<a href="">
				<h3>Services</h3>
			</a>
		</div>
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="<?php bloginfo('template_url'); ?>/assets/images/battlemap3.jpg">
					<p class="flex-caption">Battle Maps</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/assets/images/pint-banner.png">
					<p class="flex-caption">Tips & Tricks</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/assets/images/character-creationist.jpg">
					<p class="flex-caption">Character Creation</p>
				</li>
			</ul>
		</div>
	</div>

	<!--############  Services - under construction  ##########-->

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
				<a href="http://polaznik70.edunova.hr/tavern" class="box-btn">To the tavern!</a>
			</div>
		</div>
	</div>

	<?php
	get_footer();
