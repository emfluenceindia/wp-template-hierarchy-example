<?php
/**
 * Used only for site homepage.
 * Because we have a page.php in our theme, all pages will fallback to it.
 * If it was not available, default fallback template will be index.php for pages.
 */

/* includes header.php and renders its content. */
get_header();
?>

	<!-- Template specific markup goes here. -->

<?php
/* includes footer.php and renders its content. */
get_footer();