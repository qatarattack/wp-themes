  <div class="grid_8">
    <?php if (strpos($post->post_content,'[gallery') === true) : ?>
      <?php echo do_shortcode( '[gallery]' ); ?>
    <?php else : ?>
      <?php the_post_thumbnail('novidades-thumb-big') ?>
      <div  class="social-sharing-buttons">
        <div class="fb-button" style="width: 75px; float: left; margin-right:15px;">
        <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="<?php echo get_permalink($post->id); ?>" layout="button_count"></fb:like>
        </div>
        <div id="tweet-button" style="width: 90px; float: left; margin-right:15px;"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a></div>
        <div class="plusone" style="width: 75px; float: left; margin-right:15px;"><g:plusone size="medium" annotation="bubble" href="'.get_permalink().'"></g:plusone></div>
        <div id="pinterest-wrapper" style="width: 70px; float: left; margin-right:15px;"><a href="http://pinterest.com/pin/create/button/?url=<?php echo get_permalink($post->id); ?>&media='. $catch_thumb.'&description=' . $yasptitle . ' on ' . $yasplink . '" class="pin-it-button" count-layout="horizontal">Pin It</a></div>
      </div>
	  
    <?php endif; ?>
			
		<?php
		$categories = get_the_category($post->ID);
		if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

			$args=array(
				'category__in' => $category_ids,
				'post__not_in' => array($post->ID),
				'showposts'=>3, // Quantidade de itens na lista
				'caller_get_posts'=>1
			);
			$my_query = new wp_query($args);
			if( $my_query->have_posts() ) {
				echo '<hr style="border: 2px solid #ebebeb;"><h3 style="font-family: Open Sans Semibold, sans-serif; font-weight: bold; color: #5c521e;">NOT&Iacute;CIAS RELACIONADAS</h3><hr style="border: 2px solid #ebebeb;"><ul style="list-style-image: none;">';
				while ($my_query->have_posts()) {
					$my_query->the_post();
				?>
					<li id="font-not-rel"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
				<?php
				}
				echo '</ul>';
			}
		}
	?>
	
	<?php
		$tags = wp_get_post_tags($post->ID);
		if ($tags) {
			$tag_ids = array();
			foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

			$args=array(
				'tag__in' => $tag_ids,
				'post__not_in' => array($post->ID),
				'showposts'=>3, // Quantidade de itens na lista
				'caller_get_posts'=>1
			);
			$my_query = new wp_query($args);
			if( $my_query->have_posts() ) {
				echo '<hr style="border: 2px solid #ebebeb;"><h3 style="font-family: Open Sans Semibold, sans-serif; font-weight: bold; color: #5c521e;">MAIS NOT&Iacute;CIAS</h3><hr style="border: 2px solid #ebebeb;"><ul style="list-style-image: none;">';
				while ($my_query->have_posts()) {
					$my_query->the_post();
				?>
					<li id="font-not-rel"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
				<?php
				}
				echo '</ul>';
			}
		}
	?>
	
  </div>
  <div class="grid_8">
    <h2 style="font-size: 30px; line-height: 35px;"><?php the_title(); ?></h2>
    <div style="display: none;" class="post-meta">
      <em><?php theresina_shopping_posted_on(); ?></em>
    </div>
    <?php the_content(); ?>
    <div>
      <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'theresina_shopping' ), 'after' => '</div>' ) ); ?>
    </div>
  </div>
  <div class="clear"></div>