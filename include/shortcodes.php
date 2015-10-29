<?php
//Shortcodes for Visual Composer

add_action( 'vc_before_init', 'road_vc_shortcodes' );
function road_vc_shortcodes() {
	
	//Brand logos
	vc_map( array(
		"name" => esc_html__( "Brand Logos", "roadthemes" ),
		"base" => "ourbrands",
		"class" => "",
		"category" => esc_html__( "RoadThemes", "roadthemes"),
		"params" => array()
	) );
	
	//Latest posts
	vc_map( array(
		"name" => esc_html__( "Latest posts", "roadthemes" ),
		"base" => "latestposts",
		"class" => "",
		"category" => esc_html__( "RoadThemes", "roadthemes"),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Number of posts", "roadthemes" ),
				"param_name" => "posts_per_page",
				"value" => esc_html__( "5", "roadthemes" ),
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image scale", "roadthemes" ),
				"param_name" => "image",
				"value" => array(
						'Wide'	=> 'wide',
						'Square'	=> 'square',
					),
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Excerpt length", "roadthemes" ),
				"param_name" => "length",
				"value" => esc_html__( "20", "roadthemes" ),
			),
		)
	) );
	
	//Testimonials
	vc_map( array(
		"name" => esc_html__( "Testimonials", "roadthemes" ),
		"base" => "woothemes_testimonials",
		"class" => "",
		"category" => esc_html__( "RoadThemes", "roadthemes"),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Number of testimonial", "roadthemes" ),
				"param_name" => "limit",
				"value" => esc_html__( "10", "roadthemes" ),
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image size", "roadthemes" ),
				"param_name" => "size",
				"value" => esc_html__( "120", "roadthemes" ),
			),
		)
	) );
	
	//Skill
	vc_map( array(
		"name" => esc_html__( "Skill", "roadthemes" ),
		"base" => "skill",
		"class" => "",
		"category" => esc_html__( "RoadThemes", "roadthemes"),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Skill title", "roadthemes" ),
				"param_name" => "title",
				"value" => esc_html__( "Skill", "roadthemes" ),
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percent", "roadthemes" ),
				"param_name" => "percent",
				"value" => esc_html__( "100", "roadthemes" ),
			),
		)
	) );
	
	//Rotating tweets
	vc_map( array(
		"name" => esc_html__( "Rotating tweets", "roadthemes" ),
		"base" => "rotatingtweets",
		"class" => "",
		"category" => esc_html__( "RoadThemes", "roadthemes"),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Twitter user name", "roadthemes" ),
				"param_name" => "screen_name",
				"value" => esc_html__( "RoadThemes", "roadthemes" ),
			),
		)
	) );
	
	//Icons
	vc_map( array(
		"name" => esc_html__( "FontAwesome Icon", "roadthemes" ),
		"base" => "roadicon",
		"class" => "",
		"category" => esc_html__( "RoadThemes", "roadthemes"),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "",
				"class" => "",
				"heading" => esc_html__( "FontAwesome Icon", "roadthemes" ),
				"description" => esc_html__( "<a href=\"http://fortawesome.github.io/Font-Awesome/cheatsheet/\" target=\"_blank\">Go here</a> to get icon class. Example: fa-search", "roadthemes" ),
				"param_name" => "icon",
				"value" => esc_html__( "fa-search", "roadthemes" ),
			),
		)
	) );
}
?>