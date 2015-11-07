<?php
/**
 * Website footer template
 *
 * @package    Auberge
 * @copyright  2015 WebMan - Oliver Juhas
 * @version    1.0
 */



	if ( ! apply_filters( 'wmhook_disable_footer', false ) ) {

		/**
		 * Content
		 */

			wmhook_content_bottom();

			wmhook_content_after();



		/**
		 * Footer
		 */

			wmhook_footer_before();

			wmhook_footer_top();

			wmhook_footer();

			wmhook_footer_bottom();

			wmhook_footer_after();

	} // /wmhook_disable_footer



	/**
	 * Body and WordPress footer
	 */

		wmhook_body_bottom();

		wp_footer();

?>

<div class="roobadley">
	<a class="roobadley" href="https://twitter.com/RooBadleyOsu">
		<span class="genericon genericon-heart roobadley"></span>
	</a>
</div>

</body>

</html>
