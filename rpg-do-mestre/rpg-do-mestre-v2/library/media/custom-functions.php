<?php

if ( function_exists('register_sidebar') ) register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
        'before_title' => '<h3 id="h3-comments">',
        'after_title' => '</h3>',
    ));

function catch_that_image($cont = null) {
    global $post;
    
    if ($cont) :
        $o_post = $cont;
    else :
        $o_post = $post->post_content;
    endif;
    
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/\< *[img][^\>]*[src] *= *[\"\']{0,1}([^\"\'\ >]*)/i', $o_post, $matches);
    $first_img = $matches [1] [0];
    
    if(empty($first_img)) :
        $first_img = "http://rpgdm.erickpatrick.com/wp-content/themes/nrpgdm/images/default-post.jpg";
    endif;
    
    return $first_img;
} 

function new_the_excerpt($excerpt, $quant) {
    if (strlen($excerpt) > $quant) :
        $newexcerpt = substr($excerpt, 0, $quant);
        $last_space = strrpos($newexcerpt, ' ');
        echo substr($newexcerpt, 0, $last_space) . '…';
    else :
        echo $excerpt;
    endif;
}

function new_excerpt_length($length) {
	return 80;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
	return '…';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>