<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

</div><!-- #page -->
<style>
.footer-overlay {
	background: #2c89fb url("<?php echo the_field("lbc_header_overlay_image") ?>") right no-repeat;
	background-size: cover; 
	object-fit:cover; 
	background-position: 50% 50%; 
	background-blend-mode: overlay;	
}
</style>
<div class="footer-overlay">
	<div class="container-fluid footer-container">
		<div class="footer-position">			
			<div class="row">
				<div class="col-12 col-lg-3">
					<img src="<?php echo the_field("lbc_footer_logo"); ?>" alt="Envria Logo">
				</div>
					<div class="col-12 col-lg-3 mt-lg-4">
						<div class="footer-services">
							<p class="mb-3"><?php echo the_field("lbc_column_one_heading"); ?></p>
							<p><?php echo the_field("c1_l1"); ?></p>
							<p><?php echo the_field("c1_l2"); ?></p>
							<p><?php echo the_field("c1_l3"); ?></p>
							<p><?php echo the_field("c1_l4"); ?></p>
						</div>
						</div>		
						<div class="col-6 col-lg-2 mt-lg-4">
							<div>
								<p class="mb-3"><?php echo the_field("lbc_menu_column"); ?></p>
							</div>
							<div class="footer-menu">
								<?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
							</div><!-- /footer-menu-->
						</div>
						<div class="col-6 col-lg-2 mt-lg-4">
							<p class="mb-3"><?php echo the_field("lbc_column_three_heading"); ?></p>
							<p class="small-paragraph">
							<?php echo the_field("c3_l1"); ?>
							</br>
							<?php echo the_field("c3_l2"); ?>
							</br>
							<?php echo the_field("c3_l3"); ?>
							</br>
							<?php echo the_field("c3_l4"); ?>
							</p>		
						</div>
						<div class="col-6 col-lg-2 mt-4">
							<div>
								<p class="mb-3"><?php echo the_field("lbc_column_heading_four"); ?></p>	  
								<p class="bigger-paragraph mb-4"><?php echo the_field("c4_l1"); ?></p>	  
							</div>
							<div>
								<a class="btn btn-outline-light btn-lg rounded-0" href="<?php echo the_field("c4_btn_link"); ?>" role="button"> <?php echo the_field("c4_btn"); ?></a>
							</div>
							</div>
						<div class="col-6 col-lg-12 mt-lg-4"></div>
				</div><!-- /row -->
			</div><!-- /footer position -->
		</div><!-- /container-->
	<div class="footer-margin-bottom"></div>
</div><!-- /footer-overlay-->




<?php wp_footer(); ?>

</body>
</html>