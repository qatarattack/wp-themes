<?php get_header(); ?>
<?php if (in_category('moda')) : ?>
  <a href="<?php home_url('/') ?>/category/blog/moda/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog-moda.jpg" width="100%" height="auto" alt="Banner Blog de Moda do Teresina Shopping"></a>
<?php endif; ?>
<div class="content <?php echo (in_category(array('novidades', 'promocoes')))?'content-background':''; ?>">
  <div class="container_16">
    <?php if ( is_category() ) : ?>
      <?php if ( in_category(array('novidades', 'eventos', 'promocoes')) ) : ?>
        <h2 class="post-title-archive grid_12"><?php echo single_cat_title( '', false ); ?></h2>
        <aside class="grid_4">
          <form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
            <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Buscar &hellip;', 'theresina_shopping' ); ?>" />
            <input type="hidden" name="cat" value="24">
          </form>
        </aside>
        <div class="clear"></div>
            <?php $args = array(
              'show_option_all'    => '',
              'orderby'            => 'name',
              'order'              => 'ASC',
              'style'              => 'list',
              'show_count'         => 0,
              'hide_empty'         => 1,
              'use_desc_for_title' => 1,
              'hierarchical'       => 0,
              'title_li'           => __( '' ),
              'show_option_none'   => __(''),
              'number'             => null,
              'echo'               => 0,
              'depth'              => 9,
              'current_category'   => 0,
              'pad_counts'         => 0,
              'taxonomy'           => 'category',
              'walker'             => null
            );
            if (is_category('eventos')) :
              $args['child_of'] = 8;
              $name_c = 'novidades/eventos';
            elseif (is_category('geral')) :
              $args['child_of'] = 330;
              $name_c = 'novidades/geral';
            elseif (is_category('promocoes')) :
              $args['child_of'] = 329;
              $name_c = 'novidades/promocoes';
            elseif (is_category('novidades')) :
              $args['child_of'] = 4;
              $name_c = 'novidades/';
              $args['exclude'] = '148,147,146,79,66,11';
            elseif (is_category('ampliacao-novidades')) :
              $args['child_of'] = 328;
              $name_c = 'novidades/ampliacao-novidades';
            else :
              $args['child_of'] = 4;
              $args['exclude'] = '148,147,146,79,66,11';
              $name_c = 'novidades/';
            endif;
            $navs = wp_list_categories( $args );
            ?>
            <?php if (!empty($navs)) : ?>
              <ul class="ampliacao-menu">
              <?php echo $navs ?>
              <li><a href="http://www.teresinashopping.com.br/category/<?php echo $name_c; ?>">Todas</a></li>
              </ul>
            <?php endif; ?>
          </ul>
      <?php elseif (is_category('moda')): ?>
      <?php else: ?>
      <h2 class="post-title-archive">Arquivos para <?php echo single_cat_title( '', false ); ?></h2>
      <?php endif; ?>
    <?php elseif ( is_month() ) : ?>
      <h2 class="post-title-archive">Arquivos do mês de <?php echo  get_the_date( 'F Y' ); ?></h2>
    <?php endif; ?>
    <article class="<?php echo (in_category('moda'))?'grid_12':''?>" id="post">
      <?php $my_counter_page = 1; while ( have_posts() ) : the_post(); ?>
        <?php if (in_category('moda')) : ?>
          <!--<?php get_template_part( 'archive', 'moda' ); ?>-->
        <?php else : ?>
          <?php if ($my_counter_page == 1) : ?>
            <div class="grid_9" style="margin-bottom: 40px;">
              <?php the_post_thumbnail('novidades-thumb-big') ?>
            </div>
            <div class="grid_7">
              <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
              <p><?php the_excerpt() ?></p>
            </div>
            <div class="clear"></div>
            <?php else : ?>
            <div class="grid_4" style="float: none; display: table;">
              <div class="overSpan">
                <div style="width:100%; height: auto;">
					<div style="display: table;"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('novidades-thumb'); ?></a></div>
					<div style="float: left; margin-left: 184px; margin-top: -130px;">
						<a style="font-family: Open Sans, Helvetica Neue, Arial, sans-serif; color: #000; font-size: 24px; font-weight: bold; text-transform: uppercase; color: #4b4e11;" href="<?php the_permalink() ?>"><?php the_title() ?></a>
					</div>
					<div style="float: left; margin-left: 184px; margin-top: -90px; width: 700px;"><a style="font-family: Open Sans, Helvetica Neue, Arial, sans-serif; color: #4b4e11; font-size: 21px;" href="<?php the_permalink() ?>"><?php echo excerpt(get_the_excerpt(), 80); ?>...</a></div>
					<div style="float: left; margin-left: 184px; margin-top: -34px; width: 700px;"><a style="font-family: Open Sans, Helvetica Neue, Arial, sans-serif; color: #4b4e11; font-size: 18px;" href="<?php the_permalink() ?>">LEIA MAIS</a></div>
				</div>
				<hr>
                <div style="display: none;>"<span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></div>
              </div>
			 
            </div>
            <?php if (in_array($my_counter_page, array( 5, 9 ))) : ?>
            <div class="clear"></div>
            <?php endif; ?>
          <?php endif; ?>
        <?php endif; ?>
      <?php $my_counter_page++; endwhile; // end of the loop. ?>
    </article>
    <aside class="grid_4">
      <?php if (in_category('moda')) : ?>
        <?php get_template_part( 'sidebar', 'moda' ); ?>
      <?php /*elseif (in_category('novidades')):*/ ?>
      <?php /*else:*/ ?>
        <?php /*get_sidebar();*/ ?>
      <?php endif; ?>
    </aside>
    <div class="clear"></div>
    <?php theresina_shopping_content_nav( 'nav-below' ); ?>
    <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>