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

	// format the headline, so that the last word is wrapped in a span // 
    // Breaks string to pieces
    $title = get_field('lbc_headline');
    $pieces = explode(" ", $title);
    // Modifies the last word
    $pieces[count($pieces)-1] = '<span class="accent-color">' . $pieces[count($pieces)-1] . '</span>';
    // Returns the glued pieces
    $title = implode(" ", $pieces);
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
.header-overlay::after {
  background-image: url("<?php echo the_field("lbc_header_image_small_screens"); ?>"), url("<?php echo the_field("lbc_header_overlay_image"); ?>"), linear-gradient(to top, rgba(51,51,102, .1), rgba(51,51,102, .95));	
}
#site-navigation {
	background: #2c89fb url("<?php echo the_field("lbc_header_overlay_image") ?>");
   	background-blend-mode: overlay;
   	background-size: cover; 
   	object-fit:cover; 
   	background-position: 50% 50%; 	
}	
@media (min-width: 768px) {
	.header-overlay::after {	
  		background-image: url("<?php echo the_field("lbc_header_image_big_screens"); ?>"), url("<?php echo the_field("lbc_header_overlay_image"); ?>"), linear-gradient(to top, rgba(51,51,102, .1), rgba(51,51,102, .95));
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
		
<!-- hero -->
		<div class="hero-header jumbotron text-white text-center rounded-0">
			<div class="container col-lg-5"><!-- Bootstrap default format	 -->
			  <h1 class="h2"><?php echo $title; ?></h1>
			  <p class="my-5"><?php echo the_field("lbc_headline_paragraph"); ?></p>
			  <p class="lead my-5">
				<a class="btn btn-outline-light btn-lg rounded-0" href="/#"><?php echo the_field("lbc_headline_button_text"); ?></a>
			  </p>
			</div><!-- 	/container -->
		</div><!-- /.hero-header -->
<!-- /hero -->		
		</div><!-- /header-overlay	 -->

		<!-- Nest navigation bar inside header overlay, so that it can be seen -->
		<?php } ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
