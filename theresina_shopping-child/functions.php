<?php

function hasgallery(){
  global $post;
  return (strpos($post->post_content,'[gallery') !== false);
}

function index_widgets_init() {
  register_sidebar( array(
    'id'            => 'index-widget-twitter',
    'name'          => __( 'Twitter Widget', $text_domain ),
    'before_widget' => '<div>',
    'after_widget'  => '</div>'
  ) );
  register_sidebar( array(
    'id'            => 'index-widget-instagram',
    'name'          => __( 'Instagram widget', $text_domain ),
    'before_widget' => '<div>',
    'after_widget'  => '</div>'
  ) );
  register_sidebar( array(
    'id'            => 'index-widget-countdown',
    'name'          => __( 'Countdown widget', $text_domain ),
    'before_widget' => '<div>',
    'after_widget'  => '</div>'
  ) );
}

add_action( 'widgets_init', 'index_widgets_init' );

if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'blog-moda-thumb', 420, 320, true );
  add_image_size( 'novidades-thumb', 600, 450, true );
  add_image_size( 'promocoes-thumb', 450, 360, true );
}

function excerpt($excerpt, $nChar) {
    return strlen($excerpt) > $nChar ? substr($excerpt, 0, $nChar) : $excerpt;
}

function get_first_page_content($id){
$page_id = $id;
$page_data = get_page($page_id);
return $page_data->post_content;
}

function my_related_posts() {
	if (is_single()) {
		global $post;
		$current_post = $post->ID;
		$categories = get_the_category();
	foreach ($categories as $category) :
		?>
	<div class="related_posts"><h4>Post Relacionado</h4><ul>
		<?php
		$posts = get_posts('numberposts=3&category='. $category->term_id . '&exclude=' . $current_post);
	foreach($posts as $post) :
		?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endforeach; ?><?php endforeach; ?>
	</ul>
	</div>
		<?php
			}
		wp_reset_query();
	}
	add_action('thesis_hook_after_post','my_related_posts');
	?>