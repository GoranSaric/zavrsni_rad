<?php
/**
 * The contact page template file
 *
 * Template Name: Contact
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
<div id="contact-container">
	<div id="contact-wrap" class="social-icons">
		<div class="mail-box">
			<i class="far fa-envelope"></i>
			<h4>mail us</h4>
			<span><a href="mailto:mai@test.is">over here!</a></span>
		</div>
		<div class="facebook-box">
			<i class="fab fa-facebook-square"></i>
			<h4>check us out</h4>
			<span><a href="https://www.facebook.com/gsaric2">over here!</a></span>
		</div>
		<div class="linked-box">
			<i class="fab fa-linkedin"></i>
			<h4>link with us</h4>
			<span><a href="https://www.linkedin.com/in/goran-%C5%A1ari%C4%87-35420a184/">over here!</a></span>
		</div>
		<div class="twitter-box">
			<i class="fab fa-twitter-square"></i>
			<h4>Tweet with us</h4>
			<span><a href="https://twitter.com/">over here!</a></span>
		</div>
	</div>
	<div id="contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1398.4322405937999!2d18.737906858302804!3d45.49267367500576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475cef284d0d0fc3%3A0xf3abc964f1463a49!2sPanjevi%2C%2031207%2C%20Tenja!5e0!3m2!1sen!2shr!4v1584983869263!5m2!1sen!2shr" width="100%" max-width="1000px" height="300" frameborder="0" style="border:0; border: 1px solid forestgreen;"></iframe>
	</div>
	<div id="form-area">
		<form>
			<input type="hidden" name="">
			<div id="contact-container">
				<div id="name-area">
					<input type="text" name="name" placeholder="enter your name">
				</div>
				<div id="form-sub-wrapper">
					<div id="phone-area">
						<input type="text" name="phone" placeholder="enter your phone number">
					</div>
					<div id="mail-area">
						<input type="text" name="email" placeholder="enter your e-mail">
					</div>
				</div>
				<div id="text-area">
					<textarea name="message" rows="5" placeholder="enter your message" data-constraints="@NotEmpty"></textarea>
				</div>
				<div id="submit-btn">
					<input type="submit" name=""><span></span></button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php
get_footer();
