<?php
/**
 * The filter for product category page
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-filter' ) ) : ?>
<div class="col-xs-12 col-md-8">
	<div class="sidebar-filter">
		<?php dynamic_sidebar( 'sidebar-filter' ); ?>
	</div>
</div>
<?php endif; ?>