<?php
$args = array();
$wp_user_search = new WP_User_Query( array( 'fields' => 'all_with_meta', 'orderby' => 'display_name', 'order' => 'ASC' ) );
$authors = $wp_user_search->get_results();
?>
<?php foreach ($authors as $author) : ?>
  <div class="authors-page">
    <a class="image-author" href="<?php echo get_author_posts_url($author->data->ID); ?>" title=""><?php echo get_avatar( $author->data->user_email, $size = '100'); ?></a>
    <div class="description-author">
      <h3><a href="<?php echo $author->data->user_url; ?>" title="Visitar site de <?php echo $author->data->display_name; ?>"><?php echo $author->data->display_name; ?></a></h3>
      <p><?php echo $author->data->user_description; ?></p>
      <p><a href="<?php echo get_author_posts_url($author->data->ID); ?>" title="">Ver arquivo de posts</a></p>
    </div>
  </div>
<?php endforeach; ?>