<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage lightboxchallenge
 * @since LightBox Challenge 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- 	<meta name="viewport" content="width=device-width, initial-scale=1" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<?php wp_head(); ?>
</head>
<style>
	.header-overlay {
  background-image: url("<?php echo the_field("lbc_header_image_small_screens"); ?>"), url("<?php echo the_field("lbc_header_overlay_image"); ?>"), linear-gradient(to top, rgba(51,51,102, .1), rgba(51,51,102, .95));
  		background-blend-mode: multiply;	
	   background-size: cover; 
   	   object-fit:cover; 
	   background-position: 50% 50%;
}
#site-navigation {
   background: #2c89fb url("<?php echo the_field("lbc_header_overlay_image"); ?>") right no-repeat;
   background-blend-mode: screen;	
   background-size: cover; 
   object-fit:cover; 
   background-position: 50% 50%; 
   background-blend-mode: overlay;	
}	
@media (min-width: 768px) {
	.header-overlay {	
		height: 115vh;
  		background-image: url("<?php echo the_field("lbc_header_image_big_screens"); ?>"), url("<?php echo the_field("lbc_header_overlay_image"); ?>"), linear-gradient(to top, rgba(51,51,102, .1), rgba(51,51,102, .95));
  		background-blend-mode: multiply;	
	    background-size: cover; 
   	    object-fit:cover; 	
	    background-position: 50% 50%;
	}	
}
</style>
		<!-- Create header-overlay for home page -->
	<?php
	    $show_header = get_field('lbc_show_header_image');
		if ($show_header){
		?>
	<div class="header-overlay">
		<!-- heght: 100vh; will make div span page correctly	 -->
	<?php } ?>
		
	<?php get_template_part( 'template-parts/header/site-header' ); ?>
	<?php
		if ($show_header){
		?>
		</div><!-- /header-overlay	 -->
		<!-- Nest navigation bar inside header overlay, so that it can be seen -->
		<?php } ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
