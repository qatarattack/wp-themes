<?php get_header(); ?>
<?php get_sidebar(); ?>
      <section class="posts">
      <?php if (have_posts()) : $post_number = 0; while (have_posts()) : the_post(); ?>
        <article class="post">
          <h1><?php the_title(); ?></h1>
          <?php if (is_page('autores')) : get_template_part( 'loop', 'page' ); ?>
          <?php else : echo the_content(); endif; ?>
        </article>
      <?php endwhile; endif; ?>
      <div class="banner-ads">
        <script type="text/javascript">bb_bid = "1615158"; bb_lang = "en-US"; bb_keywords = "game,eletronic,computer,video,rpg,book"; bb_name = "custom"; bb_limit = "7"; bb_format = "bbc";</script><script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
      </div>
      </section>
<?php get_footer(); ?>