<?php
/**
 * The template for displaying product category thumbnails within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Increase loop count
$woocommerce_loop['loop']++;
?>
<div class="product-category product<?php
    if ( ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] == 0 || $woocommerce_loop['columns'] == 1 )
        echo ' first';
	if ( $woocommerce_loop['loop'] % $woocommerce_loop['columns'] == 0 )
		echo ' last';
	if($woocommerce_loop['loop'] % 2 == 0){
		echo ' even';
	} else {
		echo ' odd';
	}
	?>">

	<?php do_action( 'woocommerce_before_subcategory', $category ); ?>

	<div class="category-image">
	<?php
		/**
		 * woocommerce_before_subcategory_title hook
		 *
		 * @hooked woocommerce_subcategory_thumbnail - 10
		 */
		//do_action( 'woocommerce_before_subcategory_title', $category );

		$thumbnail_id           = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true  );
		if ( $thumbnail_id ) {
			$image = wp_get_attachment_url( $thumbnail_id );
		} else {
			$image = wc_placeholder_img_src();
		}
		if ( $image ) {
			// Prevent esc_url from breaking spaces in urls for image embeds
			// Ref: http://core.trac.wordpress.org/ticket/23605
			$image = str_replace( ' ', '%20', $image );

			echo '<img src="' . esc_url( $image ) . '" alt="' . esc_attr( $category->name ) . '" />';
		}
	?>
	</div>
	<div class="category-info">
		<label><?php echo esc_html($woocommerce_loop['loop']);?>.</label>
		<h1><?php echo esc_html($category->name); ?></h1>
		<div class="category-desc"><?php echo esc_html($category->description); ?></div>
		<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>">
			<?php esc_html_e('Browse Category', 'allen');?>
		</a>
	</div>
	<?php
		/**
		 * woocommerce_after_subcategory_title hook
		 */
		do_action( 'woocommerce_after_subcategory_title', $category );
	?>
	<?php do_action( 'woocommerce_after_subcategory', $category ); ?>

</div>
