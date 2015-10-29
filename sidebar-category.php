<?php
/**
 * The sidebar for product category page
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-category' ) ) : ?>
<div class="col-xs-12 col-md-4">
	<div class="sidebar-category">
		<?php dynamic_sidebar( 'sidebar-category' ); ?>
	</div>
</div>
<?php endif; ?>