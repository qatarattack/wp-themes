<?php get_header(); ?>
<?php get_sidebar(); ?>
      <section class="posts archive">
      <?php if (have_posts()) : $post_number = 0; while (have_posts()) : the_post(); if ( ! $post_number) :?>
        <div class="excerpt-first">
          <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
          <div class="excerpt-first"><?php echo the_excerpt(); ?></div>
        </div>
      <?php $post_number++; else : ?> 
        <?php if ($post_number == 1) : ?>
          <div class="couple-post">
            <article class="post">
              <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
              <?php echo the_excerpt(); ?>
            </article>
          <?php $post_number++; else : ?>
            <article class="post">
              <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
              <?php echo the_excerpt(); ?>
            </article>
          </div>
          <?php $post_number--; endif; ?>
      <?php endif; endwhile; child_content_nav( 'nav-below' ); else : ?>
        <div class="excerpt">
          <p>error</p>
        </div>
      <?php endif; ?>
      </section>
<?php get_footer(); ?>