<?php
/*** Removing shortcodes ***/
vc_remove_element("vc_widget_sidebar");
vc_remove_element("vc_gallery");
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_button");
vc_remove_element("vc_button2");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_message");
vc_remove_element("vc_tour");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_toggle");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");

/*** Remove unused parameters ***/
if (function_exists('vc_remove_param')) {
	vc_remove_param('vc_single_image', 'css_animation');
	vc_remove_param('vc_column_text', 'css_animation');
	vc_remove_param('vc_row', 'video_bg');
	vc_remove_param('vc_row', 'video_bg_url');
	vc_remove_param('vc_row', 'video_bg_parallax');
	vc_remove_param('vc_row', 'full_height');
	vc_remove_param('vc_row', 'content_placement');
	vc_remove_param('vc_row', 'full_width');
	vc_remove_param('vc_row', 'bg_image');
	vc_remove_param('vc_row', 'bg_color');
	vc_remove_param('vc_row', 'font_color');
	vc_remove_param('vc_row', 'margin_bottom');
	vc_remove_param('vc_row', 'bg_image_repeat');
	vc_remove_param('vc_tabs', 'interval');
	vc_remove_param('vc_separator', 'style');
	vc_remove_param('vc_separator', 'color');
	vc_remove_param('vc_separator', 'accent_color');
	vc_remove_param('vc_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'style');
	vc_remove_param('vc_text_separator', 'color');
	vc_remove_param('vc_text_separator', 'accent_color');
	vc_remove_param('vc_text_separator', 'el_width');
	vc_remove_param('vc_row', 'gap');
    vc_remove_param('vc_row', 'columns_placement');
    vc_remove_param('vc_row', 'equal_height');
    vc_remove_param('vc_row_inner', 'gap');
    vc_remove_param('vc_row_inner', 'content_placement');
    vc_remove_param('vc_row_inner', 'equal_height');
    vc_remove_param('vc_hoverbox', 'use_custom_fonts_primary_title');
    vc_remove_param('vc_hoverbox', 'use_custom_fonts_hover_title');
    vc_remove_param('vc_hoverbox', 'hover_add_button');
	vc_remove_param('vc_row', 'parallax');
    vc_remove_param('vc_row', 'parallax_image');
	vc_remove_param('vc_row', 'parallax_speed_bg');
	vc_remove_param('vc_row', 'parallax_speed_video');
	vc_remove_param('vc_row', 'disable_element');
	vc_remove_param('vc_row', 'el_id');
	vc_remove_param('vc_row', 'el_class');
	//vc_remove_param('vc_row', 'css_animation');
}

/*** Row ***/

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Row Type",
	"param_name" => "row_type",
	"value" => array(
		
		"Section" => "sec1",
		"Dark Section" => "sec2",
	
	)
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Container",
	"param_name" => "enable_container",
	"value" => array(
		"Enable" => "st1",
		"Disable" => "st2",		
		
	),
	"description" => "Optional. <br>Disable container if you are using Default page Template. Or You can disable total page's container by using page settings.",
	
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Corner Effect",
	"param_name" => "enable_corner_effect",
	"value" => array(
		"Disable" => "st1",
		"Enable" => "st2",		
		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('sec2'))
	
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Scrollable Row",
	"param_name" => "scrollrow",
	"value" => array(
		"Disable" => "st1",
		"Enable" => "st2",		
			
	),
	"description" => "Enable for scrollable row. Must add scroll ID if you enable it.",
	"dependency" => Array('element' => "row_type", 'value' => array('sec1'))
	
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Scroll ID",
	"param_name" => "scroll_id",
	"value" => "",
	"description" => "e.x: sec2",
	"dependency" => Array('element' => "scrollrow", 'value' => array('st2'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Top Box Shadow",
	"param_name" => "enable_top_box",
	"value" => array(
		"Disable" => "st1",
		"Enable" => "st2",		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('sec1'))
	
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Bottom Box Shadow",
	"param_name" => "enable_bottom_box",
	"value" => array(
		"Disable" => "st1",
		"Enable Style 1(Long)" => "st2",		
		"Enable Style 2(Short)" => "st3",		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('sec1'))
	
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Top",
	"value" => "",
	"param_name" => "sec_padding_top",
	"description" => "Optional. e.x: 50",
	"dependency" => Array('element' => "row_type", 'value' => array('sec1'))
	
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Bottom",
	"value" => "",
	"param_name" => "sec_padding_bottom",
	"description" => "Optional. e.x: 50",
	"dependency" => Array('element' => "row_type", 'value' => array('sec1'))
	
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Title Section",
	"param_name" => "enabletitle",
	"value" => array(
		"Disable" => "st1",
		"Enable" => "st2",		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('sec1'))
	
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Title",
	"value" => "",
	"param_name" => "nastik_sec_title",
	"description" => "",
	"dependency" => Array('element' => "enabletitle", 'value' => array('st2'))
	
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Section Number",
	"value" => "",
	"param_name" => "nastik_sec_number",
	"description" => "Optional.<br> e.x: 1",
	"dependency" => Array('element' => "enabletitle", 'value' => array('st2'))
	
));

vc_add_param("vc_row", array(
	"type" => "textarea",
	"class" => "",
	"heading" => "Description",
	"value" => "",
	"param_name" => "nastik_sec_dectiption",
	"description" => "",
	"dependency" => Array('element' => "enabletitle", 'value' => array('st2'))
	
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Section Separator",
	"param_name" => "enableseparator",
	"value" => array(
		"Enable" => "st1",
		"Disable" => "st2",		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('sec1'))
	
));




/***************** Nastik  Shortcodes *********************/

// Nastik image
vc_map( array(
		"name" => "Nastik Image",
		"base" => "nastik_image",
		"category" => 'bY Nastik',
		"icon" => "icon-wpb-single-image",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Upload Image",
				"param_name" => "image",
				"description" => "",
				
			),
				
		)
) );

// Nastik textblock
class WPBakeryShortCode_WR_VC_Textblock  extends WPBakeryShortCode {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Nastik Text Block", "nastik",
        "base" => "wr_vc_textblock",
        "content_element" => true,
		"category" => 'bY Nastik',
		"icon" => "icon-wpb-layer-shape-text",
        
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Small Title",
				"param_name" => "small_title",
				"value" => "",
				"description" => "Optional",
				
			),
			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Big Title",
				"param_name" => "big_title",
				"value" => "",
				"description" => "e.x: For marking text:  About [span] Us[/span] <br> For line break: [br]",
				
			),
			
			
			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => "",
				"description" => "",
			
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
            
        ),
        
) );

// Number Counter
class WPBakeryShortCode_WR_VC_Counters  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Nastik Number Counter", "nastik",
        "base" => "wr_vc_counters",
        "as_parent" => array('only' => 'wr_vc_counter'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Nastik',
		"icon" => "nastik-icon",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Class",
				"param_name" => "class",
				"value" => ""
			),	
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Counter extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Counter Item", "nastik",
        "base" => "wr_vc_counter",
        "content_element" => true,
		"icon" => "nastik-icon",
        "as_child" => array('only' => 'wr_vc_counters'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
		
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "datatitle",
				"value" => "",
				"description" => "e.x: Finished projects",
				
			),
			
				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Counter Number",
				"param_name" => "datanumber",
				"value" => "",
				"description" => "e.x: 145",
				
			),
		 )
) );


// Nastik Services
vc_map( array(
		"name" => "Nastik Services",
		"base" => "nastik_service",
		"category" => 'bY Nastik',
		"icon" => "nastik-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => "Use this field if you need.",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__('Post Count', 'nastik'),
				"param_name" => "postcount",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'nastik'),
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'nastik'),
				"param_name" => "postoffset",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'nastik'),
			),
			
				
		)
) );

// call to
vc_map( array(
		"name" => "Nastik Call To Action 1",
		"base" => "nastik_call_to_action1",
		"category" => 'bY Nastik',
		"icon" => "icon-wpb-call-to-action",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "URL Type",
				"param_name" => "link_type",
				"value" => array(
					"Own Site" => "st1",
					"Other Site" => "st2",
					
				),
				"description" => "",
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
				
		)
) );

// Nastik Feature
vc_map( array(
		"name" => "Nastik Feature",
		"base" => "nastik_feature",
		"category" => 'bY Nastik',
		"icon" => "nastik-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Icon Class",
				"param_name" => "iconclass",
				"description" => "Use <a href='https://fontawesome.com/icons?d=gallery' target='_blank'>Fontawesome</a> Icon Class",
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "Optional",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Serial Number",
				"param_name" => "number",
				"value" => "",
				"description" => "ex: 01",
				
			),
			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => "",
				"description" => "",
				
			),
			
				
		)
) );


// wr piechart
class WPBakeryShortCode_WR_VC_Piecharts  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Nastik Piechart", "nastik",
        "base" => "wr_vc_piecharts",
        "as_parent" => array('only' => 'wr_vc_piechart'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Nastik',
		"icon" => "icon-wpb-vc-round-chart",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Section Title",
				"param_name" => "sec_title",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => "Piechart Background Color",
				"param_name" => "data_color",
				"value" => "",
				"description" => "Optional",
			),
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Piechart extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Piechart Item", "nastik",
        "base" => "wr_vc_piechart",
        "content_element" => true,
		"icon" => "icon-wpb-vc-round-chart",
        "as_child" => array('only' => 'wr_vc_piecharts'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
		
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "",
				
			),
			
				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Data Percent",
				"param_name" => "data_percent",
				"value" => "",
				"description" => "e.x: 80",
				
			),
			
			
							
            
        )
) );

// wr skillbar
class WPBakeryShortCode_WR_VC_Skillbars  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Nastik Skill Bar", "nastik",
        "base" => "wr_vc_skillbars",
        "as_parent" => array('only' => 'wr_vc_skillbar'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Nastik',
		"icon" => "icon-wpb-vc-line-chart",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Section Title",
				"param_name" => "title",
				"value" => ""
			),	
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Skillbar extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Skill Bar Item", "nastik",
        "base" => "wr_vc_skillbar",
        "content_element" => true,
		"icon" => "icon-wpb-vc-line-chart",
        "as_child" => array('only' => 'wr_vc_skillbars'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
		
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "",
				
			),
			
				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Data Percent",
				"param_name" => "data_percent",
				"value" => "",
				"description" => "e.x: 80",
				
			),
			
        )
) );

// video
vc_map( array(
		"name" => "Nastik Video",
		"base" => "nastik_videos",
		"category" => 'bY Nastik',
		"icon" => "icon-wpb-film-youtube",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Upload Background Image",
				"param_name" => "image",
				"description" => "",
				
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Vimeo Video URL",
				"param_name" => "vimeovideo",
				"value" => "",
				"description" => "e.x: https://vimeo.com/34741214",
				
				
			),
			
		)
) );

// timeline
vc_map( array(
		"name" => "Nastik Timeline",
		"base" => "nastik_timeline",
		"category" => 'bY Nastik',
		"icon" => "nastik-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => "Use this field if you need.",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__('Post Count', 'nastik'),
				"param_name" => "postcount",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'nastik'),
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'nastik'),
				"param_name" => "postoffset",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'nastik'),
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
				
		)
) );


// wr testimonials
class WPBakeryShortCode_WR_VC_Testimonials  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Nastik Testimonial", "nastik",
        "base" => "wr_vc_testimonials",
        "as_parent" => array('only' => 'wr_vc_testimonial'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Nastik',
		"icon" => "nastik-icon",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Class",
				"param_name" => "class",
				"value" => ""
			),	
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Testimonial extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Testimonial Item", "nastik",
        "base" => "wr_vc_testimonial",
        "content_element" => true,
		"icon" => "nastik-icon",
        "as_child" => array('only' => 'wr_vc_testimonials'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Testimonial Number",
				"param_name" => "testimonial_number",
				"value" => "",
				"description" => "Optional. e.x: 01",
			),
			
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Client's Image",
				"param_name" => "image",
				"description" => ""
			),
			
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Client Name",
				"param_name" => "clientname",
				"value" => "",
				"description" => "",
			),
			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Text",
				"param_name" => "content",
				"value" => ""
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
							
            
        )
) );

// client logo
class WPBakeryShortCode_WR_VC_Clients  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Client Logo", "nastik",
        "base" => "wr_vc_clients",
        "as_parent" => array('only' => 'wr_vc_client'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Nastik',
		"icon" => "nastik-icon",
        "show_settings_on_create" => true,
        "params" => array(
		
		array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Class",
				"param_name" => "class",
				"value" => ""
			),
			
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Client extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Client Logo Item", "nastik",
        "base" => "wr_vc_client",
        "content_element" => true,
		"icon" => "nastik-icon",
        "as_child" => array('only' => 'wr_vc_clients'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
				
			
			
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Uplod Client Logo",
				"param_name" => "image",
				"description" => ""
			),
			
			
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Custom URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
							
            
        )
) );

// wr team block
vc_map( array(
		"name" => "Nastik Team Member",
		"base" => "nastik_team",
		"category" => 'bY Nastik',
		"icon" => "nastik-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Name",
				"param_name" => "title",
				"value" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Custom Url",
				"param_name" => "custom_url",
				"value" => "",
				"description" => "Effected on title. <br> Optional.",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Designation",
				"param_name" => "designation",
				"value" => "",
				
			),
			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Description",
				"param_name" => "content",
				"value" => "",
				
			),
			
			 array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Member's Image",
				"param_name" => "image",
				"description" => ""
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Mail Address",
				"param_name" => "mail",
				"value" => "",
				
			),
				
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Behance Social URL",
				"param_name" => "behance",
				"value" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Facebook Social URL",
				"param_name" => "facebook",
				"value" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Google Social URL",
				"param_name" => "gplus",
				"value" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Twitter Social URL",
				"param_name" => "twitter",
				"value" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Youtube Social URL",
				"param_name" => "youtube",
				"value" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Vimeo Social URL",
				"param_name" => "vimeo",
				"value" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Pinterest Social URL",
				"param_name" => "pinterest",
				"value" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Xing Social URL",
				"param_name" => "xing",
				"value" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Linkedin Social URL",
				"param_name" => "linkedin",
				"value" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Instagram Social URL",
				"param_name" => "instagram",
				"value" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "VKontakte Social URL",
				"param_name" => "vkontakte",
				"value" => "",
				
			),
			
		)
) );


// wr contact info
class WPBakeryShortCode_WR_VC_Contacts  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Nastik Contact Info", "nastik",
        "base" => "wr_vc_contacts",
        "as_parent" => array('only' => 'wr_vc_contact'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Nastik',
		"icon" => "nastik-icon",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Class",
				"param_name" => "data_class",
				"value" => ""
			),

			
			
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Contact extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Contact Info Item", "nastik",
        "base" => "wr_vc_contact",
        "content_element" => true,
		"icon" => "nastik-icon",
        "as_child" => array('only' => 'wr_vc_contacts'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "e.x: Phone Number",
			),
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Icon Class",
				"param_name" => "iconclass",
				"value" => "",
				"description" => "Use <a href='https://fontawesome.com/icons?d=gallery' target='_blank'>Fontawesome</a> Icon Class",
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__('URL Type', 'nastik'),
				"param_name" => "link_type",
				"value" => array(
					"Custom URL" => "st1",
					"Email Address" => "st2",
					"Phone Number" => "st3",
					
				),
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "URL/ Phone Number/ Email Address",
				"param_name" => "url",
				"value" => "",
				"description" => "",
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "URL Text",
				"param_name" => "url_text",
				"value" => "",
				"description" => "",
				"dependency" => Array('element' => "link_type", 'value' => array('st1'))
			),
			
		
        )
) );


// Google Map
vc_map( array(
		"name" => "Nastik Google Map",
		"base" => "nastik_vc_map",
		"category" => 'bY Nastik',
		"icon" => "icon-wpb-map-pin",
		"allowed_container_element" => 'vc_row',
		"params" => array(

			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Latitude, Longitude",
				"param_name" => "latitude",
				"value" => "",
				"description" => "Ex: 40.714 , -74.005",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Address",
				"param_name" => "address",
				"value" => "",
				"description" => "Ex: My Location in New York.",
				
			),
			
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Upload Location Marker",
				"param_name" => "image",
				"description" => "Required.",
				
				
			),
							
			
		)
) );


?>