<?php
/**
 * Used for a single product information except product dcm-12 since we have a separate template for it.
 * For any other post type, single.php will be called.
 */

/* includes header.php and renders its content. */
get_header();
?>

	<!-- Template specific markup goes here. -->

<?php
/* includes footer.php and renders its content. */
get_footer();