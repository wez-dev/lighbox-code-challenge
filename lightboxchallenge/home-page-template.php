<?php
/*
 * Template Name: Home Page
 * description: >-
  Home page template for the LightBox Code Challenge
 */
	get_header();

	// format the headline, so that the last word is wrapped in a span // 
    // Breaks string to pieces
    $title = get_field('lbc_headline');
    $pieces = explode(" ", $title);
    // Modifies the last word
    $pieces[count($pieces)-1] = '<span class="accent-color">' . $pieces[count($pieces)-1] . '</span>';
    // Returns the glued pieces
    $title = implode(" ", $pieces);
?>
<!-- hero -->
	<div class="hero-header-position"><!-- 	Re-positions .hero-header to menu area -->
		<div class="hero-header jumbotron text-white text-center rounded-0">
			<div class="container col-lg-5"><!-- Bootstrap default format	 -->
			  <h1 class="h2"><?php echo $title; ?></h1>
			  <p class="my-5"><?php echo the_field("lbc_headline_paragraph"); ?></p>
			  <p class="lead my-5">
				<a class="btn btn-outline-light btn-lg rounded-0" href="<?php echo "Hero Link" ?> role="button"> <?php echo the_field("lbc_headline_button_text"); ?></a>
			  </p>
			</div><!-- 	/container -->
		</div><!-- /.hero-header -->
		<div class="diagonal-cut"></div>

</div><!-- hero-header-position -->
<!-- /hero -->

<!-- icon cards  -->
<div class="container col-11 col-sm-9 col-md-12 col-md-11">
	<div class="row icon-cards-row text-center">
		<div class="card-deck">
			<div class="col-12 col-lg-4">
			  <div class="card border-0 shadow">
				<div class="card-padding">				
				  <div class="icon-background rounded-circle">
					<img class="card-img-top" src="<?php echo the_field('lbc_icon_one') ?>" alt="Icon One">
				  </div>
				  <div class="card-body">
				  <h5 class="card-title h4"><?php echo the_field('lbc_icon_one_headline') ?></h5>
				  <p class="card-text"><?php echo the_field('lbc_icon_one_paragraph') ?></p>
					<p class="card-small-text"><small><?php echo the_field('lbc_icon_one_small_text') ?></small></p>
				  </div>
				<div class="card-footer-na">
				</div>
				</div><!-- /card-padding -->
			 </div><!-- /card-->
			</div><!-- /col -->
			<div class="col-12 col-lg-4">
			  <div class="card border-0 shadow">
				<div class="card-padding">					  
				  <div class="icon-background rounded-circle">
					<img class="card-img-top" src="<?php echo the_field('lbc_icon_two') ?>" alt="Icon Two">
				  </div>
				   <div class="card-body">
				  	<h5 class="card-title h4"><?php echo the_field('lbc_icon_two_headline') ?></h5>
				  	<p class="card-text"><?php echo the_field('lbc_icon_two_paragraph') ?></p>
					<p class="card-small-text"><small><?php echo the_field('lbc_icon_two_small_text') ?></small></p>					    </div>
				 <div class="card-footer-na">
				 </div>
				</div><!-- /card-padding -->
			   </div><!-- /card-->
			</div><!-- /col -->
			<div class="col-12 col-lg-4">
			  <div class="card border-0 shadow">
				<div class="card-padding">					  
				  <div class="icon-background">
					<img class="card-img-top rounded-circle" src="<?php echo the_field('lbc_icon_three') ?>" alt="Icon Three">
				  </div>
				  <div class="card-body">
				  	<h5 class="card-title h4"><?php echo the_field('lbc_icon_three_headline') ?></h5>
				  	<p class="card-text"><?php echo the_field('lbc_icon_three_paragraph') ?></p>
					<p class="card-small-text"><small><?php echo the_field('lbc_icon_three_small_text') ?></small></p>	
				  </div>
				  <div class="card-footer-na">
				  </div>
				</div><!-- /card-padding -->
			  </div><!-- /card-->	
			</div><!-- /col -->
		</div>
	</div><!-- /icon-cards-row -->
</div><!-- /container for icon row -->
<!-- /icon cards -->


<!-- m-stacked single column / d-three equal spacing @ col-4 Note: overlap the hero image -->
<!-- /icon cards -->

<!-- Banner: we work with -->
<!-- m/d full width - carousell? -->
<!-- /banner -->

<!-- Hero image & action button -->
<!-- m- full width and button/text under driver's torso / d- full with and button/text left aligned -->
<!-- /hero -->

<!-- Casestudy cards x2 #maybe do as blog post loop? Custom post type# -->
<!-- m lauder stacked first / d- Lauder above jaguar -->
<!-- /casestudy cards -->

<!-- Testimonial cards carousel -->
<!-- m and d - take whole page - styling differences so come back -->
<!-- /testimonial -->

<!-- Trust pilot carousell -->

<!-- Latest news blog posts x2 + social media banner -->
<!-- m-stacked single column, social on bottom / d- three equal columns @ col-4 -->
<!-- /latest news + social media banner -->


<!-- Contact form -->
<!-- m- stacked / d- text block left and <form> right -->
<!-- /contact form -->

<!-- Accreditation badges -->
<!-- m/d - single row with three equal spacing @ col-4 -->
<!-- /accreditation -->

<?php
get_footer();
