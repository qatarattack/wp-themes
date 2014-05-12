<div class="blog-moda-search">
	<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Buscar &hellip;', 'theresina_shopping' ); ?>" />
		<input type="hidden" name="cat" value="209">
	</form>
</div>
<div class="blog-moda-archive">
	<h5>Arquivos</h5>
	<ul class="blog-moda-archive-list">
		<?php wp_get_archives( array( 'cat' => 209 ) ); ?>
	</ul>
</div>
<div style="display: none;" class="blog-moda-list">
	<h5>Categorias</h5>
	<?php
		$args = array(
			'show_option_all'    => '',
			'orderby'            => 'name',
			'order'              => 'ASC',
			'style'              => 'none',
			'show_count'         => 0,
			'hide_empty'         => 1,
			'use_desc_for_title' => 1,
			'child_of'           => 32,
			'hierarchical'       => 1,
			'title_li'           => __( 'Categorias' ),
			'show_option_none'   => __('Não há categorias :('),
			'number'             => null,
			'echo'               => 1,
			'depth'              => 0,
			'current_category'   => 0,
			'pad_counts'         => 0,
			'taxonomy'           => 'category',
			'walker'             => null
		);
		wp_list_categories( $args );
	?>
</div>
<!-- <div class="blog-moda-facebook">
	<h5>Facebook</h5>
        <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTeresinaShopping&amp;width=292&amp;height=440&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true&amp;appId=149952021779775" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:440px;" allowTransparency="true"></iframe>
</div>
<div class="blog-moda-twitter">
	<h5>Twitter</h5>
        <?php if ( dynamic_sidebar('index-widget-twitter') ) : ?>
        <? else : ?>
        <?php endif; ?>
</div>
<div class="blog-moda-instagram">
	<h5>Instagram</h5>
        <div class="instagram-widget">
            <?php if ( dynamic_sidebar('index-widget-instagram') ) : ?>
            <? else : ?>
            <?php endif; ?>
		</div> -->
</div>