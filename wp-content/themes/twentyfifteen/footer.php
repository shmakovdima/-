<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>


	<footer role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<span class="align-left">2015 Copyright VeroGusto Travel</span>
				</div>
				<div class="col-sm-4 footer__logo"></div>
				<div class="col-sm-4">
					<ul>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- .site-footer -->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
