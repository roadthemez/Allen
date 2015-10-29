<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */
?>
<?php global $road_opt; ?>

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
						echo 'Copyright <a href="'.esc_url( home_url( '/' ) ).'">'.get_bloginfo('name').'</a> '.date('Y').'. All Rights Reserved';
					}
					?>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>