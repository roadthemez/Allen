<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<?php global $road_opt, $road_secondimage; ?>

<div class="container">
<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
</div>
<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="product-nav">
			<a class="back-shop" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) );?>"><?php esc_html_e('All products', 'allen');?></a>
			<div class="next-prev">
				<div class="prev"><?php previous_post_link('%link'); ?></div>
				<div class="next"><?php next_post_link('%link'); ?></div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-7">
				<div class="single-product-image">
					<?php
						/**
						 * woocommerce_before_single_product_summary hook
						 *
						 * @hooked woocommerce_show_product_sale_flash - 10
						 * @hooked woocommerce_show_product_images - 20
						 */
						do_action( 'woocommerce_before_single_product_summary' );
					?>
				</div>
				
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="summary entry-summary single-product-info">
					
					<?php
						/**
						 * woocommerce_single_product_summary hook
						 *
						 * @hooked woocommerce_template_single_title - 5
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
						 */
						do_action( 'woocommerce_single_product_summary' );
					?>

				</div><!-- .summary -->
			</div>
		</div>
	</div>
	<div class="single-product-sharing">
		<div class="container">
			<?php
			if(function_exists('road_product_sharing')){
				road_product_sharing();
			}
			?>
		</div>
	</div>
	<div class="container">
		<?php
			/**
			 * woocommerce_after_single_product_summary hook
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
		?>
		
		<meta itemprop="url" content="<?php the_permalink(); ?>" />
	</div>
</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action('woocommerce_show_related_products');

//dynamic_sidebar( 'sidebar-product' ); ?>

<?php do_action( 'woocommerce_after_single_product' ); ?>