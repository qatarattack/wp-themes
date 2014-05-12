<?php
  remove_all_actions('wp_head', 10);
  remove_all_actions('wp_footer', 10);

  /*
   * This changes the excerpt lenght to 20 words
   */
  function new_excerpt_length($length) {
    return 20;
  }
  add_filter('excerpt_length', 'new_excerpt_length');

  /*
   * Print the <title> tag based on what is being viewed.
   */
  function super_get_title() {
    global $page, $paged;

    wp_title( '|', true, 'right' );
    bloginfo( 'name' );
    $site_description = get_bloginfo( 'description', 'display' );

    if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

    if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Página %s', 'twentyeleven' ), max( $paged, $page ) );
   }

   /* Navigation through posts */
   function child_content_nav( $nav_id ) {
    global $wp_query;

    if ( $wp_query->max_num_pages > 1 ) : ?>
      <nav id="<?php echo $nav_id; ?>">
        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Posts antigos', 'twentyeleven' ) ); ?></div>
        <div class="nav-next"><?php previous_posts_link( __( 'Posts novos <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></div>
      </nav><!-- #nav-above -->
    <?php endif;
  }

  function remove_more_jump_link($link) { 
    $offset = strpos($link, '#more-');
    if ($offset) :
    $end = strpos($link, '"',$offset);
    endif;
    if ($end) :
    $link = substr_replace($link, '', $offset, $end-$offset);
    endif;
    return $link;
  }
  add_filter('the_content_more_link', 'remove_more_jump_link');

  function twentyeleven_auto_excerpt_more2( $more ) {
    return '…';
  }
  add_filter( 'twentyeleven_auto_excerpt_more', 'twentyeleven_auto_excerpt_more2' );

  // Places Ads in the RSS posts
  function insertAds($content) {
    $content = $content.'<script type="text/javascript">bb_bid = "1615158";bb_lang = "en-US";bb_keywords = "rpg,game,video,tv,sound,audio,internet,computer";bb_name = "custom";bb_limit = "9";bb_format = "bbo";</script><script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>';
    return $content;
  }
  add_filter('the_excerpt_rss', 'insertAds');
  add_filter('the_content_rss', 'insertAds');

  function get_random_posts($qnt = 1) {
    global $wpdb;
    $result = $wpdb->get_results("SELECT ID, post_content FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY rand() LIMIT 1"); 

    return get_permalink( $result[0]->ID );
  }