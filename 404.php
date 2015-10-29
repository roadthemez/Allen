<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */

global $road_opt;

get_header('error');

?>
	<div class="main-container error404">
		
		<div class="search-form-wrapper">
			<h1><?php esc_html_e('404', 'allen');?></h1>
			<h2><?php esc_html_e( "WHOOPS, OUR BAD...", "roadthemes" ); ?></h2>
			<p class="home-link"><?php esc_html_e( "Please go to the home page ", 'allen' ); ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_html_e( 'home page', 'allen' ); ?>"><?php esc_html_e( 'home page', 'allen' ); ?></a></p>
		</div>
	</div>
</div>
<?php get_footer('error'); ?>