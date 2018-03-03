<?php
/** 
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Resto
 */

?>

	</div><!-- #content -->

	<footer >
		<div class="wrapper">

			<ul>
				<li>New Yourk Restaurant</li>
				<li>3926 Anmoore Road</li>
				<li>New Yourk, NY 10014</li>
				<li>718-749-1714</li>
			</ul>
			<ul>
				<li>France Restaurant</li>
				<li>68, rue de la Couronne</li>
				<li>75002 PARIS</li>
				<li>02.94.23.69.56</li>
			</ul>
			<ul>
				<li>Blog</li>
				<li>Careers</li>
				<li>Privacy Policy</li>
				<li>Contact</li>
			</ul>
			<ul>
				<li><img src="<?php echo(get_template_directory_uri()); ?>/images/logo_footer.png" alt="Logo"></li>
				<li>&copy; All Rights Reserved 2018.</li>
			</ul>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div>


<?php wp_footer(); ?>

</body>
</html>
