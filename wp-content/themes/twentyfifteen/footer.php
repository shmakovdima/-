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
					<span>2015 Copyright VeroGusto Travel</span>
				</div>
				<div class="col-sm-4 footer__logo"></div>
				<div class="col-sm-4">
					<span>
						<a href="https://vk.com/test" title="Мы в ВКонтакте" ><i class="fa fa-vk"></i></a>
						<a href="https://fb.com/test" title="Мы в Facebook" ><i class="fa fa-facebook"></i></a>
						<a href="https://youtube.com/test" title="Мы в Youtube" ><i class="fa fa-youtube"></i></a>
						<a href="https://instagram.com/test" title="Мы в Instagram" ><i class="fa fa-instagram"></i></a>
					</span>
				</div>
			</div>
		</div>
	</footer><!-- .site-footer -->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
