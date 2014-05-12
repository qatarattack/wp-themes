<?php get_header(); ?>
<?php if (in_category('moda')) : ?>
  <a href="http://www.teresinashopping.com.br/category/blog/moda/">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog-moda.jpg" width="100%" height="auto" alt="Banner Blog de Moda do Teresina Shopping">
  </a>
<?php endif; ?>
<div class="content <?php echo (in_category(array('blog', 'moda'))) ? '' : 'content-background' ?> content-single">
  <div class="container_16">
    <?php if (in_category('ampliacao-novidades')) : ?>
      <h2 class="post-title">Ampliação</h2>
    <?php elseif (in_category('promocoes')) : ?>
      <h2 class="post-title">Promoções</h2>
    <?php elseif (in_category('geral')) : ?>
      <h2 class="post-title">Geral</h2>
    <?php elseif (in_category('eventos')) : ?>
      <h2 class="post-title">Eventos</h2>
	<?php elseif (in_category('cinema')) : ?>
      <h2 class="post-title">Cinemas</h2>
    <?php elseif (in_category(array('blog', 'moda'))) : ?>
    <?php else : ?>
      <h2 class="post-title">Novidades</h2>
    <?php endif; ?>

    <?php if (in_category('moda')) : ?>
    <article class="grid_12" id="post-<?php the_ID(); ?>">
    <?php else : ?>
    <article id="post-<?php the_ID(); ?>" class="single-post">
    <?php endif; ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php if (in_category('moda')) : ?>
        <?php get_template_part( 'content', 'moda' ); ?>
        <?php else : ?>
        <?php get_template_part( 'content', 'single' ); ?>
        <?php endif; ?>
      <?php endwhile; // end of the loop. ?>
    </article>
    <aside class="grid_4">
      <?php if (in_category('moda')) : ?>
        <?php get_template_part( 'sidebar', 'moda' ); ?>
      <?php else: ?>
      <?php endif; ?>
    </aside>
  </div>
</div>
<?php get_footer(); ?>