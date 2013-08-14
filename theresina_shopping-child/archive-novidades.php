  <?php if ($$my_counter_page == 1) : ?>
  <div class="grid_10">
    <?php the_post_thumbnail('novidades-thumb-big') ?>
  </div>
  <div class="grid_6">
    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <p><a href="<?php the_permalink() ?>"><?php the_excerpt() ?></a></p>
  </div>
  <div class="clear"></div>
  <?php else : ?>
  <div class="grid_4">
    <div class="overSpan">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('novidades-thumb'); ?></a>
      <span style="display: none;"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span>
    </div>
  </div>
  <?php endif; ?>