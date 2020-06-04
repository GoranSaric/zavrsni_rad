<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="shortcut icon" type="image/icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png"/>
  <script src="https://kit.fontawesome.com/628c3c7a1a.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/flexslider/jquery.flexslider.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/js/flexslider/flexslider.css" media='all' />

  <script type="text/javascript">
    $(document).ready(function() {
      $('.flexslider').flexslider({
        animation: "slide"
      });
    });
  </script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="wrapper">
    <header class="header">
     <div class="logo">
       <a href="http://polaznik70.edunova.hr" class="header-logo">yggdrastil</a>
     </div>
     <div class="container">
      <div class="row">
        <div class="col-2" id="main-menu-zavrsni">
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
    </div>
  </div>
</header>






