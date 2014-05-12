  <?php if (is_page(array('o-shopping'))) : ?>
  <?php elseif (is_page(array('novas-lojas'))) : ?>
    <h2 class="post-title">Ampliação</h2>
  <?php else : ?>
    <h2 class="post-title"><?php the_title(); ?></h2>
  <?php endif; ?>
  <?php if (is_page(array('ampliacao-the', 'novas-lojas'))) : ?>
  <div class="ampliacao-menu">
    <a href="<?php echo get_site_url('/') ?>/ampliacao-the/" class="<?php if (is_page('ampliacao-the')) : ?>active<?php endif; ?>">Início</a>
    <a href="<?php echo get_site_url('/') ?>/category/ampliacao-novidades/">Novidades</a>
    <a href="<?php echo get_site_url('/') ?>/ampliacao-the/novas-lojas/" class="<?php if (is_page('novas-lojas')) : ?>active<?php endif; ?>">Novas Lojas</a>
  </div>
  <?php endif; ?>
  <div class="post-<?php the_ID(); ?>">
    <?php the_content(); ?>
  </div>