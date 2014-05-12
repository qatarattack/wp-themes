<?php get_header(); ?>
<?php get_sidebar(); ?>
      <section class="posts">
      <?php if (have_posts()) : $post_number = 0; while (have_posts()) : the_post(); ?>
        <article class="post">
          <h1><?php the_title(); ?></h1>
          <?php echo the_content(); ?>
          <div class="post-meta">
            <div><a href="<?php the_author_meta('user_url'); ?>" title="Visite o site do autor!"><?php echo get_avatar(get_the_author_meta('user_email'), 50); ?></a></div>
            <div>
              <p><?php twentyeleven_posted_on(); ?><br/><?php the_author_meta('description'); ?></p>
            </div>
          </div>
          <div class="banner-ads">
            <script type="text/javascript">bb_bid = "1615158"; bb_lang = "en-US"; bb_keywords = "game,eletronic,computer,video,rpg,book"; bb_name = "custom"; bb_limit = "7"; bb_format = "bbc";</script><script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
          </div>
          <?php comments_template('/comments.php'); ?> 
        </article>
      <?php endwhile; endif; ?>
      </section>
<?php get_footer(); ?>