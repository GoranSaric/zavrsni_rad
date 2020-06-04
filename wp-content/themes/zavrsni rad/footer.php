<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<div class="footer">
  <div class="footer-logo">
       <a href="http://polaznik70.edunova.hr">yggdrastil</a>
     </div>
  <div class="contain">
    <div class="col info">
     <?php 
         $args = array(
           'menu'            => 2,
           'container'       => 'div',
           'container_class' => 'menu',
           'container_id'    => '',
           'menu_class'      => '',
           'menu_id'         => 'main-menu-zavrsni'
         );
         wp_nav_menu( $args );
         ?>
   <!--       <div class="menu">

          <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">lifestyle</a></li>
            <li><a href="#">Food</a></li>
            <li><a href="#">Nature</a></li>
            <li><a href="#">photography</a></li>
          </ul>
        </div> -->
    </div>
    <div style="clear: both;"></div>
  </div>
  <div class="lower-footer">
    <div class="footer-container">
      <div class="copyright">Copyright 2020 Yggdrastil.com. All rights reserved.</div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
