<div class="blog-moda-search">
  <form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Buscar &hellip;', 'theresina_shopping' ); ?>" />
  </form>
</div>
<div class="blog-moda-archive">
  <h5>Arquivo Geral</h5>
  <ul class="blog-moda-archive-list">
    <?php wp_get_archives( array() ); ?>
  </ul>
</div>