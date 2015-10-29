<?php
$_SESSION["preset"] = 4;
/**
 * Template Name: Demo Eighth
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php global $road_opt; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
	if(isset($road_opt['opt-favicon']) && $road_opt['opt-favicon']!="") { 
		if(is_ssl()){
			$road_opt['opt-favicon'] = str_replace('http:', 'https:', $road_opt['opt-favicon']);
		}
	?>
		<link rel="icon" type="image/png" href="<?php echo esc_url($road_opt['opt-favicon']['url']);?>">
	<?php }
}
?>
<?php wp_head(); ?>
</head>

<body <?php body_class('home'); ?>>
	<div id="yith-wcwl-popup-message" style="display:none;"><div id="yith-wcwl-message"></div></div>
	<div class="wrapper box-layout">
		<div class="page-wrapper">
			<div class="header-container fourth layout4">
				<?php if(isset($road_opt)) { ?>
					<div class="top-bar">
						<div class="container">

							<?php if(isset($road_opt['call_us']) && $road_opt['call_us']!=''){ ?>
								<div class="call-us">
									<?php echo wp_kses($road_opt['call_us'], array(
										'a' => array(
											'href' => array(),
											'title' => array()
										),
										'img' => array(
											'src' => array(),
											'alt' => array()
										),
										'ul' => array(),
										'li' => array(),
										'i' => array(
											'class' => array()
										),
										'br' => array(),
										'em' => array(),
										'strong' => array(),
										'p' => array(),
									)); ?>
								</div>
							<?php } ?>
						
							<div class="currency"><?php do_action('currency_switcher'); ?></div>
							<?php do_action('icl_language_selector'); ?>
							
							<?php if ( class_exists( 'WC_Widget_Cart' ) ) {
										the_widget('Custom_WC_Widget_Cart'); 
							} ?>
							
							<?php if( isset($road_opt['top_menu']) ) {
								$menu_object = wp_get_nav_menu_object( $road_opt['top_menu'] );
								$menu_args = array(
									'menu_class'      => 'nav_menu',
									'menu'         => $road_opt['top_menu'],
								); ?>
								<div class="top-menu widget">
									<?php wp_nav_menu( $menu_args ); ?>
								</div>
							<?php } ?>
							
							
							
						</div>
					</div>
				<?php } ?>
				<div class="header clearfix">
					<div class="container">
						<div class="header-inner">
							<div class="row">
								<div class="col-xs-12 col-md-4">
									<?php if( isset($road_opt['logo_main']['url']) ){ ?>
										<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url($road_opt['logo_main']['url']); ?>" alt="" /></a></div>
									<?php
									} else { ?>
										<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php
									} ?>
								</div>
								<div class="col-xs-12 col-md-8">
									<?php if( class_exists('WC_Widget_Product_Search') ) { ?>
										<div class="header-search">
											<?php the_widget('WC_Widget_Product_Search', array('title' => 'Search')); ?>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-container">
						<div class="container">
							<div class="horizontal-menu">
								<div class="visible-large">
									<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'primary-menu-container', 'menu_class' => 'nav-menu' ) ); ?>
								</div>
								<div class="visible-small mobile-menu">
									<div class="nav-container">
										<div class="mbmenu-toggler"><?php echo esc_html($road_opt['mobile_menu_label']);?><span class="mbmenu-icon"></span></div>
										<?php wp_nav_menu( array( 'theme_location' => 'mobilemenu', 'container_class' => 'mobile-menu-container', 'menu_class' => 'nav-menu' ) ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- .header -->
				<div class="clearfix"></div>
			</div>
			<div class="main-container">
				<div class="page-content front-page">
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</article>
					<?php endwhile; ?>
					
				</div>
			</div>
			<div class="footer second layout2">
		
				<?php if(isset($road_opt)) { ?>
				<div class="footer-top">
					<div class="container">
					
						<?php
						if ( isset($road_opt['newsletter_form']) ) {
							if(class_exists( 'WYSIJA_NL_Widget' )){
								the_widget('WYSIJA_NL_Widget', array(
									'title' => esc_html($road_opt['newsletter_title']),
									'form' => (int)$road_opt['newsletter_form'],
									'id_form' => 'newsletter1',
									'success' => '',
								));
							}
						}
						?>
					
						<?php
							if( isset($road_opt['footer_menu1']) && $road_opt['footer_menu1']!='' ) {
							$menu1_object = wp_get_nav_menu_object( $road_opt['footer_menu1'] );
							$menu1_args = array(
								'menu_class'      => 'nav_menu',
								'menu'         => $road_opt['footer_menu1'],
							); ?>

							<div class="widget widget_menu">
								<?php wp_nav_menu( $menu1_args ); ?>
							</div>
						<?php } ?>


						<div class="widget widget-social">
							<?php
							if(isset($road_opt['social_icons'])) {
								echo '<ul class="social-icons">';
								foreach($road_opt['social_icons'] as $key=>$value ) {
									if($value!=''){
										if($key=='vimeo'){
											echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>';
										} else {
											echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
										}
									}
								}
								echo '</ul>';
							}
							?>
						</div>
						
						<div class="widget-copyright">
							<?php 
							if( isset($road_opt['copyright']) && $road_opt['copyright']!='' ) {
								echo wp_kses($road_opt['copyright'], array(
									'a' => array(
										'href' => array(),
										'title' => array()
									),
									'br' => array(),
									'em' => array(),
									'strong' => array(),
								));
							} else {
								echo '2015 Allen';
							}
							?>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div><!-- .page -->
	</div><!-- .wrapper -->
	<!--<div class="road_loading"></div>-->
	<div id="back-top" class="hidden-xs hidden-sm hidden-md"></div>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ie8.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_footer(); ?>
</body>
</html>
<?php unset($_SESSION["preset"]); ?>