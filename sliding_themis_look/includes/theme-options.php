<?php
if (!function_exists( 'woo_options')) {
function woo_options() {

// THEME VARIABLES
$themename = "Sliding";
$themeslug = "Sliding";

// STANDARD VARIABLES. DO NOT TOUCH!
$shortname = "woo";
$manualurl = 'http://www.woothemes.com/support/theme-documentation/'.$themeslug.'/';

//Access the WordPress Categories via an Array
$woo_categories = array();
$woo_categories_obj = get_categories( 'hide_empty=0' );
foreach ($woo_categories_obj as $woo_cat) {
    $woo_categories[$woo_cat->cat_ID] = $woo_cat->cat_name;}
$categories_tmp = array_unshift($woo_categories, "Select a category:" );

//Access the WordPress Pages via an Array
$woo_pages = array();
$woo_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
foreach ($woo_pages_obj as $woo_page) {
    $woo_pages[$woo_page->ID] = $woo_page->post_name; }
$woo_pages_tmp = array_unshift($woo_pages, "Select a page:" );

//Stylesheets Reader
$alt_stylesheet_path = get_template_directory() . '/styles/';
$alt_stylesheets = array();
if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) {
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }
    }
}

//More Options
$other_entries = array( "Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19" );

// THIS IS THE DIFFERENT FIELDS
$options = array();

// General

$options[] = array( "name" => "General Settings",
					"type" => "heading",
					"icon" => "general" );

$options[] = array( "name" => "Theme Stylesheet",
					"desc" => "Select your themes alternative color scheme.",
					"id" => $shortname."_alt_stylesheet",
					"std" => "default.css",
					"type" => "select",
					"options" => $alt_stylesheets);

$options[] = array( "name" => "Custom Logo",
					"desc" => "Upload a logo for your theme, or specify an image URL directly.",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "upload" );

$options[] = array( "name" => "Text Title",
					"desc" => "Enable text-based Site Title and Tagline. Setup title & tagline in <a href='".home_url()."/wp-admin/options-general.php'>General Settings</a>.",
					"id" => $shortname."_texttitle",
					"std" => "false",
					"class" => "collapsed",
					"type" => "checkbox" );

$options[] = array( "name" => "Site Title",
					"desc" => "Change the site title typography.",
					"id" => $shortname."_font_site_title",
					"std" => array( 'size' => '30','unit' => 'px','face' => 'Droid Serif','style' => 'bold','color' => '#333333'),
					"class" => "hidden",
					"type" => "typography" );

$options[] = array( "name" => "Site Description",
					"desc" => "Enable the site description/tagline under site title.",
					"id" => $shortname."_tagline",
					"class" => "hidden",
					"std" => "false",
					"type" => "checkbox" );

$options[] = array( "name" => "Site Description",
					"desc" => "Change the site description typography.",
					"id" => $shortname."_font_tagline",
					"std" => array( 'size' => '12','unit' => 'px','face' => 'Droid Sans','style' => '','color' => '#999999'),
					"class" => "hidden last",
					"type" => "typography" );

$options[] = array( "name" => "Custom Favicon",
					"desc" => "Upload a 16px x 16px <a href='http://www.faviconr.com/'>ico image</a> that will represent your website's favicon.",
					"id" => $shortname."_custom_favicon",
					"std" => "",
					"type" => "upload" );

$options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea" );

$options[] = array( "name" => "RSS URL",
					"desc" => "Enter your preferred RSS URL. (Feedburner or other)",
					"id" => $shortname."_feed_url",
					"std" => "",
					"type" => "text" );

$options[] = array( "name" => "E-Mail Subscription URL",
					"desc" => "Enter your preferred E-mail subscription URL. (Feedburner or other)",
					"id" => $shortname."_subscribe_email",
					"std" => "",
					"type" => "text" );

$options[] = array( "name" => "Contact Form E-Mail",
					"desc" => "Enter your E-mail address to use on the Contact Form Page Template. Add the contact form by adding a new page and selecting 'Contact Form' as page template.",
					"id" => $shortname."_contactform_email",
					"std" => "",
					"type" => "text" );

$options[] = array( "name" => "Custom CSS",
                    "desc" => "Quickly add some CSS to your theme by adding it to this block.",
                    "id" => $shortname."_custom_css",
                    "std" => "",
                    "type" => "textarea" );
                    
$options[] = array( "name" => "Search scope",
					"desc" => "Select whether you want the search in the header to search for products or posts ",
					"id" => $shortname."_header_search_scope",
					"type" => "select2",
					"options" => array( "products" => "Products", "posts" => "Posts" ) );

$options[] = array( "name" => "Post/Page Comments",
					"desc" => "Select if you want to enable/disable comments on posts and/or pages. ",
					"id" => $shortname."_comments",
					"type" => "select2",
					"options" => array( "post" => "Posts Only", "page" => "Pages Only", "both" => "Pages / Posts", "none" => "None") );

$options[] = array( "name" => "Post Content",
					"desc" => "Select if you want to show the full content or the excerpt on posts. ",
					"id" => $shortname."_post_content",
					"type" => "select2",
					"options" => array( "excerpt" => "The Excerpt", "content" => "Full Content" ) );

$options[] = array( "name" => "Post Author Box",
					"desc" => "This will enable the post author box on the single posts page. Edit description in <a href='".home_url()."/wp-admin/profile.php'>Profile</a>.",
					"id" => $shortname."_post_author",
					"std" => "true",
					"type" => "checkbox" );

$options[] = array( "name" => "Display Breadcrumbs",
					"desc" => "Display dynamic breadcrumbs on each page of your website.",
					"id" => $shortname."_breadcrumbs_show",
					"std" => "false",
					"type" => "checkbox" );

$options[] = array( "name" => "Pagination Style",
					"desc" => "Select the style of pagination you would like to use on the blog.",
					"id" => $shortname."_pagination_type",
					"type" => "select2",
					"options" => array( "paginated_links" => "Numbers", "simple" => "Next/Previous" ) );

// Styling

$options[] = array( "name" => "Styling Options",
					"type" => "heading",
					"icon" => "styling" );

$options[] = array( "name" =>  "Background Color",
					"desc" => "Pick a custom color for background color of the theme e.g. #697e09",
					"id" => "woo_body_color",
					"std" => "",
					"type" => "color" );

$options[] = array( "name" => "Background Image",
					"desc" => "Upload an image for the theme's background",
					"id" => $shortname."_body_img",
					"std" => "",
					"type" => "upload" );

$options[] = array( "name" => "Background Image Repeat",
                    "desc" => "Select how you would like to repeat the background-image",
                    "id" => $shortname."_body_repeat",
                    "std" => "no-repeat",
                    "type" => "select",
                    "options" => array( "no-repeat","repeat-x","repeat-y","repeat"));

$options[] = array( "name" => "Background Image Position",
                    "desc" => "Select how you would like to position the background",
                    "id" => $shortname."_body_pos",
                    "std" => "top",
                    "type" => "select",
                    "options" => array( "top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right"));

$options[] = array( "name" =>  "Link Color",
					"desc" => "Pick a custom color for links or add a hex color code e.g. #697e09",
					"id" => "woo_link_color",
					"std" => "",
					"type" => "color" );

$options[] = array( "name" =>  "Link Hover Color",
					"desc" => "Pick a custom color for links hover or add a hex color code e.g. #697e09",
					"id" => "woo_link_hover_color",
					"std" => "",
					"type" => "color" );

$options[] = array( "name" =>  "Button Color",
					"desc" => "Pick a custom color for buttons or add a hex color code e.g. #697e09",
					"id" => "woo_button_color",
					"std" => "",
					"type" => "color" );

/* Typography */

$options[] = array( "name" => "Typography",
					"type" => "heading",
					"icon" => "typography" );

$options[] = array( "name" => "Enable Custom Typography",
					"desc" => "Enable the use of custom typography for your site. Custom styling will be output in your sites HEAD.",
					"id" => $shortname."_typography",
					"std" => "false",
					"type" => "checkbox" );

$options[] = array( "name" => "General Typography",
					"desc" => "Change the general font.",
					"id" => $shortname."_font_body",
					"std" => array( 'size' => '12','unit' => 'px','face' => 'Arial','style' => '','color' => '#555555'),
					"type" => "typography" );

$options[] = array( "name" => "Navigation",
					"desc" => "Change the navigation font.",
					"id" => $shortname."_font_nav",
					"std" => array( 'size' => '14','unit' => 'px','face' => 'Arial','style' => '','color' => '#555555'),
					"type" => "typography" );

$options[] = array( "name" => "Page Title",
					"desc" => "Change the page title.",
					"id" => $shortname."_font_page_title",
					"std" => array( 'size' => '24','unit' => 'px','face' => 'Arial','style' => 'bold','color' => '#222222'),
					"type" => "typography" );

$options[] = array( "name" => "Post Title",
					"desc" => "Change the post title.",
					"id" => $shortname."_font_post_title",
					"std" => array( 'size' => '24','unit' => 'px','face' => 'Arial','style' => 'bold','color' => '#222222'),
					"type" => "typography" );

$options[] = array( "name" => "Post Meta",
					"desc" => "Change the post meta.",
					"id" => $shortname."_font_post_meta",
					"std" => array( 'size' => '12','unit' => 'px','face' => 'Arial','style' => '','color' => '#999999'),
					"type" => "typography" );

$options[] = array( "name" => "Post Entry",
					"desc" => "Change the post entry.",
					"id" => $shortname."_font_post_entry",
					"std" => array( 'size' => '14','unit' => 'px','face' => 'Arial','style' => '','color' => '#555555'),
					"type" => "typography" );

$options[] = array( "name" => "Widget Titles",
					"desc" => "Change the widget titles.",
					"id" => $shortname."_font_widget_titles",
					"std" => array( 'size' => '16','unit' => 'px','face' => 'Arial','style' => 'bold','color' => '#555555'),
					"type" => "typography" );

/* Homepage */

if ( is_woocommerce_activated() ) {

$options[] = array( "name" => "Homepage",
					"icon" => "homepage",
					"type" => "heading");
                 
$options[] = array( "name" => "Featured Products",
					"desc" => "Display featured products on the homepage",
					"id" => $shortname."_homepage_featured_products",
					"std" => "true",
					"type" => "checkbox" );
			
/*$options[] = array( "name" => "Featured Product Thumb Width",
					"desc" => "The width of the images in the featured slider",
					"id" => $shortname."_featured_image_width",
					"std" => "192",
					"type" => "text" );*/
			
$options[] = array( "name" => "Featured Products Height",
					"desc" => "The height of the images in the featured slider (width is set at 192)",
					"id" => $shortname."_featured_image_height",
					"std" => "375",
					"type" => "text" );
					
$options[] = array( "name" => "Hard Crop Featured Images?",
					"desc" => "Hard crop featured images to specific dimensions",
					"id" => $shortname."_featured_image_crop",
					"std" => "false",
					"type" => "checkbox" );

$options[] = array( "name" => "Number Of Featured Products",
                    "desc" => "Select how many featured products you'd like to display on the slider",
                    "id" => $shortname."_homepage_featured_products_number",
                    "std" => "5",
                    "type" => "select",
                    "options" => array("5","10","15","20","25"));

$options[] = array( "name" => "Recent Products",
					"desc" => "Display recent products on the homepage",
					"id" => $shortname."_homepage_recent_products",
					"std" => "true",
					"type" => "checkbox" );
                 
$options[] = array( "name" => "Number Of Recent Products",
                    "desc" => "Select how many recent products you'd like to display on the homepage",
                    "id" => $shortname."_homepage_recent_products_number",
                    "std" => "10",
                    "type" => "select",
                    "options" => array("10","15","20","25","30"));
                    
$options[] = array( "name" => "Best Sellers",
					"desc" => "Display best sellers on the homepage",
					"id" => $shortname."_homepage_best_selling_products",
					"std" => "true",
					"type" => "checkbox" );
	
$options[] = array( "name" => "Number Of Best Sellers",
                    "desc" => "Select how many best sellers you'd like to display on the homepage",
                    "id" => $shortname."_homepage_best_selling_products_number",
                    "std" => "10",
                    "type" => "select",
                    "options" => array("10","15","20","25","30"));
}

/* Layout */

$options[] = array( "name" => "Layout Options",
					"type" => "heading",
					"icon" => "layout" );

$url =  get_template_directory_uri() . '/functions/images/';
$options[] = array( "name" => "Main Layout",
					"desc" => "Select which layout you want for your site.",
					"id" => $shortname."_site_layout",
					"std" => "layout-right-content",
					"type" => "images",
					"options" => array(
						'layout-left-content' => $url . '2cl.png',
						'layout-right-content' => $url . '2cr.png')
					);


$options[] = array( "name" => "Category Exclude - Homepage",
					"desc" => "Specify a comma seperated list of category IDs or slugs that you'd like to exclude from your homepage (eg: uncategorized).",
					"id" => $shortname."_exclude_cats_home",
					"std" => "",
					"type" => "text" );

$options[] = array( "name" => "Category Exclude - Blog Page Template",
					"desc" => "Specify a comma seperated list of category IDs or slugs that you'd like to exclude from your 'Blog' page template (eg: uncategorized).",
					"id" => $shortname."_exclude_cats_blog",
					"std" => "",
					"type" => "text" );

$options[] = array( 'name' => __( 'Business Template', 'woothemes' ),
					'type' => 'heading',
					'icon' => 'layout' );
$options[] = array( 'name' => __( 'Display WooSlider', 'woothemes' ),
					'desc' => sprintf( __( 'Display a slider above the page content? Requires %sWooSlider%s plugin.', 'woothemes' ), '<a href="http://www.woothemes.com/products/wooslider/" title="' . __( 'Purchase WooSlider from WooThemes.com', 'woothemes' ) . '" target="_blank">', '</a>' ),
					'id' => $shortname . '_business_display_slider',
					'std' => 'true',
					'type' => 'checkbox' );
$options[] = array( 'name' => __( 'Display Features', 'woothemes' ),
					'desc' => sprintf( __( 'Display Features beneath the page content? Requires %sFeatures%s plugin.', 'woothemes' ), '<a href="http://wordpress.org/extend/plugins/features-by-woothemes/" title="' . __( 'Download \'Features by WooThemes\' from WordPress.org', 'woothemes' ) . '" target="_blank">', '</a>' ),
					'id' => $shortname . '_business_display_features',
					'std' => 'true',
					'type' => 'checkbox' );
$options[] = array( 'name' => __( 'Display Testimonials', 'woothemes' ),
					'desc' => sprintf( __( 'Display testimonials beneath the page content? Requires %sTestimonials%s plugin.', 'woothemes' ), '<a href="http://wordpress.org/extend/plugins/testimonials-by-woothemes/" title="' . __( 'Download \'Testimonials by WooThemes\' from WordPress.org', 'woothemes' ) . '" target="_blank">', '</a>' ),
					'id' => $shortname . '_business_display_testimonials',
					'std' => 'true',
					'type' => 'checkbox' );
$options[] = array( 'name' => __( 'Display latest blog posts and sidebar', 'woothemes' ),
					'desc' => __( 'Display your latest blog posts and primary sidebar beneath the business template content', 'woothemes' ),
					'id' => $shortname . '_business_display_blog',
					'std' => 'true',
					'type' => 'checkbox' );

/* Dynamic Images */
$options[] = array( "name" => "Dynamic Images",
					"type" => "heading",
					"icon" => "image" );
					
$options[] = array( "name" => 'Dynamic Image Resizing',
					"desc" => "",
					"id" => $shortname."_wpthumb_notice",
					"std" => 'There are two alternative methods of dynamically resizing the thumbnails in the theme, <strong>WP Post Thumbnail</strong> or <strong>TimThumb - Custom Settings panel</strong>. We recommend using WP Post Thumbnail option.',
					"type" => "info");					

$options[] = array( "name" => "WP Post Thumbnail",
					"desc" => "Use WordPress post thumbnail to assign a post thumbnail. Will enable the <strong>Featured Image panel</strong> in your post sidebar where you can assign a post thumbnail.",
					"id" => $shortname."_post_image_support",
					"std" => "true",
					"class" => "collapsed",
					"type" => "checkbox" );

$options[] = array( "name" => "WP Post Thumbnail - Dynamic Image Resizing",
					"desc" => "The post thumbnail will be dynamically resized using native WP resize functionality. <em>(Requires PHP 5.2+)</em>",
					"id" => $shortname."_pis_resize",
					"std" => "true",
					"class" => "hidden",
					"type" => "checkbox" );

$options[] = array( "name" => "WP Post Thumbnail - Hard Crop",
					"desc" => "The post thumbnail will be cropped to match the target aspect ratio (only used if 'Dynamic Image Resizing' is enabled).",
					"id" => $shortname."_pis_hard_crop",
					"std" => "true",
					"class" => "hidden last",
					"type" => "checkbox" );

$options[] = array( "name" => "TimThumb - Custom Settings Panel",
					"desc" => "This will enable the <a href='http://code.google.com/p/timthumb/'>TimThumb</a> (thumb.php) script which dynamically resizes images added through the <strong>custom settings panel below the post</strong>. Make sure your themes <em>cache</em> folder is writable. <a href='http://www.woothemes.com/2008/10/troubleshooting-image-resizer-thumbphp/'>Need help?</a>",
					"id" => $shortname."_resize",
					"std" => "true",
					"type" => "checkbox" );

$options[] = array( "name" => "Automatic Image Thumbnail",
					"desc" => "If no thumbnail is specifified then the first uploaded image in the post is used.",
					"id" => $shortname."_auto_img",
					"std" => "false",
					"type" => "checkbox" );

$options[] = array( "name" => "Thumbnail Image Dimensions",
					"desc" => "Enter an integer value i.e. 250 for the desired size which will be used when dynamically creating the images.",
					"id" => $shortname."_image_dimensions",
					"std" => "",
					"type" => array(
									array(  'id' => $shortname. '_thumb_w',
											'type' => 'text',
											'std' => 100,
											'meta' => 'Width'),
									array(  'id' => $shortname. '_thumb_h',
											'type' => 'text',
											'std' => 100,
											'meta' => 'Height')
								  ));

$options[] = array( "name" => "Thumbnail Alignment",
					"desc" => "Select how to align your thumbnails with posts.",
					"id" => $shortname."_thumb_align",
					"std" => "alignleft",
					"type" => "select2",
					"options" => array( "alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"));

$options[] = array( "name" => "Single Post - Show Thumbnail",
					"desc" => "Show the thumbnail in the single post page.",
					"id" => $shortname."_thumb_single",
					"class" => "collapsed",
					"std" => "false",
					"type" => "checkbox" );

$options[] = array( "name" => "Single Post - Thumbnail Dimensions",
					"desc" => "Enter an integer value i.e. 250 for the image size. Max width is 576.",
					"id" => $shortname."_image_dimensions",
					"std" => "",
					"class" => "hidden last",
					"type" => array(
									array(  'id' => $shortname. '_single_w',
											'type' => 'text',
											'std' => 200,
											'meta' => 'Width'),
									array(  'id' => $shortname. '_single_h',
											'type' => 'text',
											'std' => 200,
											'meta' => 'Height')
								  ));

$options[] = array( "name" => "Single Post - Thumbnail Alignment",
					"desc" => "Select how to align your thumbnail with single posts.",
					"id" => $shortname."_thumb_single_align",
					"std" => "alignright",
					"type" => "select2",
					"class" => "hidden",
					"options" => array( "alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"));

$options[] = array( "name" => "Add thumbnail to RSS feed",
					"desc" => "Add the the image uploaded via your Custom Settings panel to your RSS feed",
					"id" => $shortname."_rss_thumb",
					"std" => "false",
					"type" => "checkbox" );

/* Footer */
$options[] = array( "name" => "Footer Customization",
					"type" => "heading",
					"icon" => "footer" );


$url =  get_template_directory_uri() . '/functions/images/';
$options[] = array( "name" => "Footer Widget Areas",
					"desc" => "Select how many footer widget areas you want to display.",
					"id" => $shortname."_footer_sidebars",
					"std" => "4",
					"type" => "images",
					"options" => array(
						'0' => $url . 'layout-off.png',
						'1' => $url . 'footer-widgets-1.png',
						'2' => $url . 'footer-widgets-2.png',
						'3' => $url . 'footer-widgets-3.png',
						'4' => $url . 'footer-widgets-4.png')
					);

$options[] = array( "name" => "Custom Affiliate Link",
					"desc" => "Add an affiliate link to the WooThemes logo in the footer of the theme.",
					"id" => $shortname."_footer_aff_link",
					"std" => "",
					"type" => "text" );

$options[] = array( "name" => "Enable Custom Footer (Left)",
					"desc" => "Activate to add the custom text below to the theme footer.",
					"id" => $shortname."_footer_left",
					"std" => "false",
					"type" => "checkbox" );

$options[] = array( "name" => "Custom Text (Left)",
					"desc" => "Custom HTML and Text that will appear in the footer of your theme.",
					"id" => $shortname."_footer_left_text",
					"std" => "",
					"type" => "textarea" );

$options[] = array( "name" => "Enable Custom Footer (Right)",
					"desc" => "Activate to add the custom text below to the theme footer.",
					"id" => $shortname."_footer_right",
					"std" => "false",
					"type" => "checkbox" );

$options[] = array( "name" => "Custom Text (Right)",
					"desc" => "Custom HTML and Text that will appear in the footer of your theme.",
					"id" => $shortname."_footer_right_text",
					"std" => "",
					"type" => "textarea" );

/* Subscribe & Connect */
$options[] = array( "name" => "Subscribe & Connect",
					"type" => "heading",
					"icon" => "connect" );

$options[] = array( "name" => "Enable Subscribe & Connect - Single Post",
					"desc" => "Enable the subscribe & connect area on single posts. You can also add this as a <a href='".home_url()."/wp-admin/widgets.php'>widget</a> in your sidebar.",
					"id" => $shortname."_connect",
					"std" => 'false',
					"type" => "checkbox" );

$options[] = array( "name" => "Subscribe Title",
					"desc" => "Enter the title to show in your subscribe & connect area.",
					"id" => $shortname."_connect_title",
					"std" => '',
					"type" => "text" );

$options[] = array( "name" => "Text",
					"desc" => "Change the default text in this area.",
					"id" => $shortname."_connect_content",
					"std" => '',
					"type" => "textarea" );

$options[] = array( "name" => "Subscribe By E-mail ID (Feedburner)",
					"desc" => "Enter your <a href='http://www.woothemes.com/tutorials/how-to-find-your-feedburner-id-for-email-subscription/'>Feedburner ID</a> for the e-mail subscription form.",
					"id" => $shortname."_connect_newsletter_id",
					"std" => '',
					"type" => "text" );

$options[] = array( "name" => 'Subscribe By E-mail to MailChimp', 'woothemes',
					"desc" => 'If you have a MailChimp account you can enter the <a href="http://woochimp.heroku.com" target="_blank">MailChimp List Subscribe URL</a> to allow your users to subscribe to a MailChimp List.',
					"id" => $shortname."_connect_mailchimp_list_url",
					"std" => '',
					"type" => "text");

$options[] = array( "name" => "Enable RSS",
					"desc" => "Enable the subscribe and RSS icon.",
					"id" => $shortname."_connect_rss",
					"std" => 'true',
					"type" => "checkbox" );

$options[] = array( "name" => "Twitter URL",
					"desc" => "Enter your  <a href='http://www.twitter.com/'>Twitter</a> URL e.g. http://www.twitter.com/woothemes",
					"id" => $shortname."_connect_twitter",
					"std" => '',
					"type" => "text" );

$options[] = array( "name" => "Facebook URL",
					"desc" => "Enter your  <a href='http://www.facebook.com/'>Facebook</a> URL e.g. http://www.facebook.com/woothemes",
					"id" => $shortname."_connect_facebook",
					"std" => '',
					"type" => "text" );

$options[] = array( "name" => "YouTube URL",
					"desc" => "Enter your  <a href='http://www.youtube.com/'>YouTube</a> URL e.g. http://www.youtube.com/woothemes",
					"id" => $shortname."_connect_youtube",
					"std" => '',
					"type" => "text" );

$options[] = array( "name" => "Flickr URL",
					"desc" => "Enter your  <a href='http://www.flickr.com/'>Flickr</a> URL e.g. http://www.flickr.com/woothemes",
					"id" => $shortname."_connect_flickr",
					"std" => '',
					"type" => "text" );

$options[] = array( "name" => "LinkedIn URL",
					"desc" => "Enter your  <a href='http://www.www.linkedin.com.com/'>LinkedIn</a> URL e.g. http://www.linkedin.com/in/woothemes",
					"id" => $shortname."_connect_linkedin",
					"std" => '',
					"type" => "text" );

$options[] = array( "name" => "Delicious URL",
					"desc" => "Enter your <a href='http://www.delicious.com/'>Delicious</a> URL e.g. http://www.delicious.com/woothemes",
					"id" => $shortname."_connect_delicious",
					"std" => '',
					"type" => "text" );

$options[] = array( "name" => "Google+ URL",
					"desc" => "Enter your <a href='http://plus.google.com/'>Google+</a> URL e.g. https://plus.google.com/104560124403688998123/",
					"id" => $shortname."_connect_googleplus",
					"std" => '',
					"type" => "text" );

$options[] = array( "name" => "Enable Related Posts",
					"desc" => "Enable related posts in the subscribe area. Uses posts with the same <strong>tags</strong> to find related posts. Note: Will not show in the Subscribe widget.",
					"id" => $shortname."_connect_related",
					"std" => 'true',
					"type" => "checkbox" );

/* Advertising */
/*$options[] = array( "name" => "Top Ad (468x60px)",
					"type" => "heading",
					"icon" => "ads" );

$options[] = array( "name" => "Enable Ad",
					"desc" => "Enable the ad space",
					"id" => $shortname."_ad_top",
					"std" => "false",
					"type" => "checkbox" );

$options[] = array( "name" => "Adsense code",
					"desc" => "Enter your adsense code (or other ad network code) here.",
					"id" => $shortname."_ad_top_adsense",
					"std" => "",
					"type" => "textarea" );

$options[] = array( "name" => "Image Location",
					"desc" => "Enter the URL to the banner ad image location.",
					"id" => $shortname."_ad_top_image",
					"std" => "http://www.woothemes.com/ads/468x60b.jpg",
					"type" => "upload" );

$options[] = array( "name" => "Destination URL",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_top_url",
					"std" => "http://www.woothemes.com",
					"type" => "text" );*/

// Add extra options through function
if ( function_exists( "woo_options_add") )
	$options = woo_options_add($options);

if ( get_option( 'woo_template') != $options) update_option( 'woo_template',$options);
if ( get_option( 'woo_themename') != $themename) update_option( 'woo_themename',$themename);
if ( get_option( 'woo_shortname') != $shortname) update_option( 'woo_shortname',$shortname);
if ( get_option( 'woo_manual') != $manualurl) update_option( 'woo_manual',$manualurl);

// Woo Metabox Options
// Start name with underscore to hide custom key from the user
$woo_metaboxes = array();

global $post;

if ( ( get_post_type() == 'post') || ( !get_post_type() ) ) {

	$woo_metaboxes[] = array (	"name" => "image",
								"label" => "Image",
								"type" => "upload",
								"desc" => "Upload an image or enter an URL." );

	if ( get_option( 'woo_resize') == "true" ) {
		$woo_metaboxes[] = array (	"name" => "_image_alignment",
									"std" => "Center",
									"label" => "Image Crop Alignment",
									"type" => "select2",
									"desc" => "Select crop alignment for resized image",
									"options" => array(	"c" => "Center",
														"t" => "Top",
														"b" => "Bottom",
														"l" => "Left",
														"r" => "Right"));
	}

	$woo_metaboxes[] = array (  "name"  => "embed",
					            "std"  => "",
					            "label" => "Embed Code",
					            "type" => "textarea",
					            "desc" => "Enter the video embed code for your video (YouTube, Vimeo or similar)" );

} // End post

$woo_metaboxes[] = array (	"name" => "_layout",
							"std" => "normal",
							"label" => "Layout",
							"type" => "images",
							"desc" => "Select the layout you want on this specific post/page.",
							"options" => array(
										'layout-default' => $url . 'layout-off.png',
										'layout-full' => get_template_directory_uri() . '/functions/images/' . '1c.png',
										'layout-left-content' => get_template_directory_uri() . '/functions/images/' . '2cl.png',
										'layout-right-content' => get_template_directory_uri() . '/functions/images/' . '2cr.png'));


/*

These are tests only and must be removed

*/

/*
$woo_metaboxes[] = array (	"name"  => "_calendar",
							"label" => "Date",
							"type" => "calendar",
							"desc" => "Select a date" );

$woo_metaboxes[] = array (	"name" => "_imagetest",
							"label" => "Imagetest",
							"type" => "upload",
							"desc" => "Upload file here..." );

$woo_metaboxes[] = array (	"name" => "_caption",
							"std" => "Default Caption",
							"label" => "Caption",
							"type" => "text",
							"desc" => "Should have text..." );

$woo_metaboxes[] = array (	"name" => "_post_select",
							"std" => "one",
							"label" => "Select (one)",
							"type" => "select",
							"desc" => "Schelect",
							"options" => array( "One", "Two", "Three"));

$woo_metaboxes[] = array (	"name" => "_post_checkbox_true",
							"std" => "true",
							"label" => "Checkbox (true)",
							"type" => "checkbox",
							"desc" => "Select something" );

$woo_metaboxes[] = array (	"name" => "_post_checkbox_false",
							"std" => "false",
							"label" => "Checkbox (false)",
							"type" => "checkbox",
							"desc" => "Select something" );

$woo_metaboxes[] = array (	"name" => "_post_radio",
							"std" => "two",
							"label" => "Radio (two)",
							"type" => "radio",
							"desc" => "Select something",
							"options" => array( "one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"));

$woo_metaboxes[] = array (	"name"  => "embed",
							"std"  => "This is the default text",
							"label" => "Text Area",
							"type" => "textarea",
							"desc" => "Text Area" );

$woo_metaboxes[] = array (	"name" => "_layout",
				//			"std" => "3-col-middle",
							"label" => "Layout",
							"type" => "images",
							"desc" => "Select an image",
							"options" => array(
										'fullwidth' => get_template_directory_uri() . '/functions/images/' . '1c.png',
										'2-col-left' => get_template_directory_uri() . '/functions/images/' . '2cl.png',
										'2-col-right' => get_template_directory_uri() . '/functions/images/' . '2cr.png',
										'3-col-left' => get_template_directory_uri() . '/functions/images/' . '3cl.png',
										'3-col-middle' => get_template_directory_uri() . '/functions/images/' . '3cm.png',
										'3-col-right' => get_template_directory_uri() . '/functions/images/' . '3cr.png'));
*/

// Add extra metaboxes through function
if ( function_exists( "woo_metaboxes_add") )
	$woo_metaboxes = woo_metaboxes_add($woo_metaboxes);

if ( get_option( 'woo_custom_template' ) != $woo_metaboxes) update_option( 'woo_custom_template', $woo_metaboxes );

} // END woo_options()
} // END function_exists()

// Add options to admin_head
add_action( 'admin_head','woo_options' );

//Enable WooSEO on these Post types
$seo_post_types = array( 'post','page' );
define( "SEOPOSTTYPES", serialize($seo_post_types));

//Global options setup
add_action( 'init','woo_global_options' );
function woo_global_options(){
	// Populate WooThemes option in array for use in theme
	global $woo_options;
	$woo_options = get_option( 'woo_options' );
}

?>
