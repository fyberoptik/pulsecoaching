<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<div id="rightCol" class="grid_3">
	<div class="margin">
	</div>
	
	<div class="breakTan"></div>
	<h2><b>Contact Us</b></h2>
	<div class="breakTan"></div>

	<p><b>Phone</b><br>
 	07702 892792</p>
	<div class="breakHR"></div>

	<p><b>eMail</b> </br> <a style="font-size:14px;" href="mailto:contact@email.com">contact@pulsecoaching.co.uk</a></p>
	<div class="break"></div>
	
	<h3><b>Social Media</b></h3>
	
	
	<div class="break"></div>
	<div id="social" class="margin20 marginLeft">
		<a href="http://www.linkedin.com"><img src="wp-content/themes/prashant/images/linkedin.png"/></img></a>
		<a href="http://www.facebook.com"><img src="wp-content/themes/prashant/images/facebook.png"/></img></a>
		<a href="http://www.twitter.com/pulseCoach"><img src="wp-content/themes/prashant/images/twitter.png"/></img></a>
		<a href="http://www.youtube.com"><img src="wp-content/themes/prashant/images/youtube.png"/></img></a>
		<div class="clear"></div>
	</div>



<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	

				<div class="breakTan"></div>
				
				<h3>News <?php _e( 'Archives', 'twentyten' ); ?></h3>
				<div class="breakTan"></div>
				
					<?php wp_get_archives( 'type=daily' ); ?>
					
				
				<!--h3><?php _e( 'Meta', 'twentyten' ); ?></h3>

				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul-->

		<?php endif; // end primary widget area ?>

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>

<?php endif; ?>
	<div class="breakTan"></div>
	<h3><b>Clients</b></h3>
	<div class="breakTan"></div>

	<p><q>"We could see the change in the kids instantly, the really started to work for themselves."</q></br><b>- Ciaran Shiels</b></p>
	<div class="breakHR"></div>
	<p><q>"Working with Prash gave me some great connexions that really got me where I am now."</q></br><b>- James Skevington</b></p>
	<div class="breakHR"></div>
	<p><q>"The first step was the hardest, now I'm running my own business and getting links to some incredible resources.'"</q></br><b>- Chris Pennbrook</b></p>
</div>