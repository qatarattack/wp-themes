<?php get_header(); ?>
    <div class="featured-slider">
      <?php echo do_shortcode( '[responsive_slider]' ); ?>
    </div><!-- :featured-slider -->
    <div class="clear"></div>
	<div class="container_16 promo-news"><!-- NOVIDADES new -->
      <h4 class="promos_title"><a href="<?php home_url('/') ?>/category/novidades/promocoes">Novidades</a></h4>
      <div class="grid_16 alpha promos"></div>
      <div>
         <ul id="mycarousel" class="jcarousel-skin-tango">
		<?php $my_query = new WP_Query('category_name=geral&posts_per_page=6'); $my_start = 1; ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); $customs = get_post_custom(); ?>
        <?php if ($my_start == 1) : ?>
         <li><div style="height: auto; width: 108%;" class="grid_4 alpha">
            <div class="overSpan">
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('novidades-thumb'); ?></a>
              <div><span style="width: 367px; height: 45px; top: -61px;"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></div>
              <?php if ($customs['encerramento'][0]) : ?>
                <img class="tarja" src="<?php echo get_stylesheet_directory_uri() ?>/img/tarja.png" width="93" height="93" alt="" />
              <?php endif; ?>
            </div>
          </div></li>
        <?php elseif ($my_start == 4) : ?>
          <li><div style="height: auto; width: 108%;" class="grid_4 omega">
            <div class="overSpan">
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('novidades-thumb'); ?></a>
              <div><span style="width: 367px; height: 45px; top: -61px;"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></div>
              <?php if ($customs['encerramento'][0]) : ?>
                <img class="tarja" src="<?php echo get_stylesheet_directory_uri() ?>/img/tarja.png" width="93" height="93" alt="" />
              <?php endif; ?>
            </div>
          </div></li>
        <?php else : ?>
          <li><div style="height: auto; width: 108%;" class="grid_4">
            <div class="overSpan">
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('novidades-thumb'); ?></a>
              <div><span style="width: 367px; height: 45px; top: -61px;"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></div>
              <?php if ($customs['encerramento'][0]) : ?>
                <img class="tarja" src="http://teresinashopping.com.br/wp-content/themes/theresina_shopping-child/img/tarja.png" width="93" height="93" alt="" />
              <?php endif; ?>
            </div>
          </div></li>
        <?php endif; ?>
        <?php $my_start++; endwhile; ?>
		</ul>
      </div>
    </div><!-- fim NOVIDADES new -->
	
	
    <!-- Novidades antiga <div class="container_16">
      <div class="grid_8 alpha">
        <h4><a href="<?php home_url('/') ?>/category/novidades/">Novidades</a></h4>
        <div class="main-news">
          <?php $my_query = new WP_Query('category_name=geral&posts_per_page=5');
                $my_start = 1; ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php if ($my_start == 1) : ?>
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail($post->ID, 'novidades-thumb'); ?></a>
              <div>
                <h6><a href="<?php the_permalink() ?>" title="Texto alternativo"><?php the_title(); ?></a></h6>
                <?php the_excerpt(); ?>
              </div>
              <div class="clear"></div>
            <?php elseif ($my_start == 2) : ?>
              <ul class="list_of_links">
                <li><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></li>
            <?php elseif ($my_start == 5) : ?>
                <li><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></li>
              </ul>
            <?php else : ?>
              <li><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></li>
            <?php endif; ?>
          <?php $my_start++; endwhile; ?>
        </div> novidades fim -->
      </div><!-- :news -->
      <!-- ampliacao <div class="grid_8 omega">
        <h4><a href="<?php home_url('/') ?>/category/novidades/ampliacao-novidades/">Ampliação</a></h4>
        <div class="main-news ampliation">
          <?php $my_query = new WP_Query('category_name=ampliacao-novidades&posts_per_page=5');
                $my_start = 1; ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php if ($my_start == 1) : ?>
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail($post->ID, 'novidades-thumb'); ?></a>
              <div>
                <h6><a href="<?php the_permalink() ?>" title="Texto alternativo"><?php the_title(); ?></a></h6>
                <p><?php the_excerpt(); ?></p>
              </div>
              <div class="clear"></div>
            <?php elseif ($my_start == 2) : ?>
              <ul class="list_of_links">
                <li><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></li>
            <?php elseif ($my_start == 5) : ?>
                <li><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></li>
              </ul>
            <?php else : ?>
              <li><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></li>
            <?php endif; ?>
          <?php $my_start++; endwhile; ?>
        </div>
      </div> fim ampliacao -->
    </div><!-- : -->
	
	<div class="container_16 container-movie" style="width: 94%;">
		<div class="grid_8 alpha">
			<div style="margin-left: 0%; width: 98%;" class="container_16 promo-news">
			  <h4 class="promos_title"><a href="<?php home_url('/') ?>/category/novidades/promocoes">Promoções</a></h4>
			  <div style="width: 95%;" class="grid_16 alpha promos"></div>
			  <div>
				<?php $my_query = new WP_Query('category_name=promocoes&posts_per_page=2'); $my_start = 1; ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); $customs = get_post_custom(); ?>
				<?php if ($my_start == 1) : ?>
				  <div style="height: 238px; width: 46.0%;" class="grid_4">
					<div class="overSpan" style="height: auto;">
					  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('promocoes-thumb'); ?></a>
					  <div style="display: none;"><span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></div>
					  <?php if ($customs['encerramento'][0]) : ?>
						<img class="tarja" src="<?php echo get_stylesheet_directory_uri() ?>/img/tarja.png" width="93" height="93" alt="" />
					  <?php endif; ?>
					</div>
				  </div>
				<?php elseif ($my_start == 4) : ?>
				  <div style="height: 238px; width: 46.0%;" class="grid_4" class="grid_4">
					<div class="overSpan" style="height: auto;">
					  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('promocoes-thumb'); ?></a>
					  <div style="display: none;"><span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></div>
					  <?php if ($customs['encerramento'][0]) : ?>
						<img class="tarja" src="<?php echo get_stylesheet_directory_uri() ?>/img/tarja.png" width="93" height="93" alt="" />
					  <?php endif; ?>
					</div>
				  </div>
				<?php else : ?>
				  <div style="height: 238px; width: 46.0%;" class="grid_4">
					<div class="overSpan" style="height: auto;">
					  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('promocoes-thumb'); ?></a>
					  <div style="display: none;"><span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></div>
					  <?php if ($customs['encerramento'][0]) : ?>
						<img class="tarja" src="http://teresinashopping.com.br/wp-content/themes/theresina_shopping-child/img/tarja.png" width="93" height="93" alt="" />
					  <?php endif; ?>
					</div>
				  </div>
				<?php endif; ?>
				<?php $my_start++; endwhile; ?>
			  </div>
			</div><!-- :promotions -->
		</div>
		
		<div class="grid_8 omega">
			<div style="margin-left: 0%;  width: 98%;" class="container_16 eventos-news">
			  <h4 class="event_title"><a href="<?php home_url('/') ?>/category/novidades/eventos/">Eventos</a></h4>
			  <div style="width: 94%;" class="grid_16 omega promos"></div>
			  <div>
				<div style="display: none;">
					<?php $my_query = new WP_Query('category_name=artes-de-marco-eventos&posts_per_page=1'); ?>
					<?php while ($my_query->have_posts()) : $my_query->the_post(); $customs = get_post_custom(); ?>
					<div style="height: 238px; width: 46.0%;" class="grid_4">
						<div class="overSpan" style="height: auto;">
						  <a href="<?php echo home_url('/') ?>/category/novidades/eventos/artes-de-marco-eventos/"><?php the_post_thumbnail('promocoes-thumb'); ?></a>
						  <div style="display: none;"><span><a href="<?php echo home_url('/') ?>/category/novidades/eventos/artes-de-marco-eventos/"><?php the_title() ?></a></span></div>
						  <?php if ($customs['encerramento'][0]) : ?>
							<img class="tarja" src="http://teresinashopping.com.br/wp-content/themes/theresina_shopping-child/img/tarja.png" width="93" height="93" alt="" />
						  <?php endif; ?>
						</div>
					  </div>
					<?php endwhile; ?>
				</div>
				<?php // cat=-79 >> todos os eventos menos a categoria de artes de março ?>
				<?php $my_query = new WP_Query('cat=8,-79&posts_per_page=2'); $my_start = 1; ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); $customs = get_post_custom(); ?>
				<?php if (($my_start == 1) || ($my_start == 2)) : ?>
				  <div style="height: 238px; width: 46.0%;" class="grid_4">
					<div class="overSpan" style="height: auto;">
					  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('promocoes-thumb'); ?></a>
					  <div style="display: none;"><span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></div>
					  <?php if ($customs['encerramento'][0]) : ?>
						<img class="tarja" src="http://teresinashopping.com.br/wp-content/themes/theresina_shopping-child/img/tarja.png" width="93" height="93" alt="" />
					  <?php endif; ?>
					</div>
				  </div>
				<?php else : ?>
				  <div style="height: 238px; width: 46.0%;" class="grid_4">
					<div class="overSpan" style="height: auto;">
					  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('promocoes-thumb'); ?></a>
					  <div style="display: none;>"<span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span></div>
					  <?php if ($customs['encerramento'][0]) : ?>
						<img class="tarja" src="http://teresinashopping.com.br/wp-content/themes/theresina_shopping-child/img/tarja.png" width="93" height="93" alt="" />
					  <?php endif; ?>
					</div>
				  </div>
				<?php endif; ?>
				<?php $my_start++; endwhile; ?>
			  </div>
			</div><!-- :eventos -->
		</div>
	</div>
	
    
    
	
	<div class="clear"></div>
    
	
    <div class="clear"></div>
    <div class="container_16 container-movie">
      <h4 class="movie_title"><a href="<?php echo home_url('/cinemas/') ?>">Cinemas</a></h4>
      <div class="grid_16 alpha movies"></div>
      <div>
        <div class="grid_8 alpha movie-slide imageflow" id="imageFlowSlider" style="height:100%;">
          <?php
          $the_query = new WP_Query( array( 'cat' => 333, 'posts_per_page' => 10 ) ); $super_counter = 1;
          while ( $the_query->have_posts() ) :
            $the_query->the_post();
            $customs = get_post_custom();
          ?>
          <!-- wp_get_attachment_image_src($image_id,’large’, true); -->
          <?php $myImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' ); ?>
          <img src="<?php echo $myImage[0]; ?>" class="moviesImg" data-trailer="<?php echo $super_counter; ?> " width="300" height="444" /><!-- longdesc="<?php echo get_permalink() ?>" -->
          <?php
            $my_movies[] = array(
              'id' => $super_counter,
              'title' => get_the_title(),
              'excerpt' => get_the_excerpt(),
              'embedYoutube' => $customs['embedYoutube'][0],
              'categorias' => $customs['categorias'][0],
              'classificacao-indicativa' => $customs['classificacao-indicativa'][0],
              'sessoes' => $customs['sessoes'][0]
            );
            $super_counter++;
            endwhile;
          ?>
        </div><!-- :posters -->
        <div class="grid_8 omega movie-trailer">
          <div class="trailer" data-trailer="<?php echo $my_movies[0]['id'] ?>" style="display:block;">
            <?php echo $my_movies[0]['embedYoutube'] ?>
            <h5><?php echo $my_movies[0]['title'] ?></h5>
            <p class="movie-meta">
              <span class="movie-meta-type"><?php echo $my_movies[0]['categorias'] ?></span>
              <span class="movie-meta-rating"><?php echo $my_movies[0]['classificacao-indicativa'] ?></span>
              <span class="movie-meta-schedule">SESSÕES: <?php echo $my_movies[0]['sessoes'] ?></span>
            </p>
            <p class="movie-description"><?php echo $my_movies[0]['excerpt'] ?></p>
          </div>
          <?php foreach ($my_movies as $m) : ?>
          <?php if ($m['id'] == 1) : continue; endif; ?>
          <div class="trailer" data-trailer="<?php echo $m['id'] ?>">
            <?php echo $m['embedYoutube'] ?>
            <h5><?php echo $m['title'] ?></h5>
            <p class="movie-meta">
              <span class="movie-meta-type"><?php echo $m['categorias'] ?></span>
              <span class="movie-meta-rating"><?php echo $m['classificacao-indicativa'] ?></span>
              <span class="movie-meta-schedule">SESSÕES: <?php echo $m['sessoes'] ?></span>
            </p>
            <p class="movie-description"><?php echo $m['excerpt'] ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div><!-- :trailers -->
    </div><!-- :movie-theater -->
    
    <div class="clear"></div>
    <div class="fashion-blog">
      <div class="container_16">
        <h4><a href="<?php home_url('/') ?>/category/blog/moda/">Blog de Moda</a></h4>
        <div>
        <?php $my_query = new WP_Query('category_name=moda&posts_per_page=4'); $my_start = 1; ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <?php if ($my_start == 1) : ?>
          <div class="grid_4 alpha">
            <div>
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('promocoes-thumb'); ?></a>
              <span id="blog-moda-span"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span>
            </div>
          </div>
        <?php elseif ($my_start == 4) : ?>
          <div class="grid_4 omega">
            <div>
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('promocoes-thumb'); ?></a>
              <span id="blog-moda-span"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span>
            </div>
          </div>
        <?php else : ?>
          <div class="grid_4">
            <div>
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('promocoes-thumb'); ?></a>
              <span id="blog-moda-span"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span>
            </div>
          </div>
        <?php endif; ?>
        <?php $my_start++; endwhile; ?>
        </div>
      </div><!-- :blog-de-moda -->
    </div>
    <div class="clear"></div>
    <div class="container_16">
      <h4 class="shop_guide_title"><a href="<?php home_url('/') ?>/category/novidades/">Guia de Lojas</a></h4>
      <div class="grid_16 alpha guides"></div>
      <div class="shop-guide">
        <div class="grid_4 alpha">
          <div>
            <a class="icon" href="http://www.teresinashopping.com.br/lojas/lojas-acessorios/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-acessorios/">Acessórios</a></p>
          </div>
          <div>
            <a class="icon shoes" href="http://www.teresinashopping.com.br/lojas/lojas-calcados/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-calcados/">Calçados</a></p>
          </div>
          <div>
            <a class="icon nursery" href="http://www.teresinashopping.com.br/lojas/lojas-farmaciasdrogarias/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-farmaciasdrogarias/">Farmácias /<br/> Drogarias</a></p>
          </div>
          <div>
            <a class="icon jewel" href="http://www.teresinashopping.com.br/lojas/lojas-joias-e-relogios-oticas/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-joias-e-relogios-oticas/">Jóias e Relógios /<br/> Óticas</a></p>
          </div>
          <div>
            <a class="icon perfume" href="http://www.teresinashopping.com.br/lojas/lojas-perfumariacosmeticos/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-perfumariacosmeticos/">Perfumaria /<br/> Cosméticos /<br/> Beleza</a></p>
          </div>
          <div>
            <a class="icon phone" href="http://www.teresinashopping.com.br/lojas/lojas-telefoneacessorios/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-telefoneacessorios/">Telefone /<br/> Acessórios</a></p>
          </div>
        </div>
		
			
        <div class="grid_4">
          <div>
            <a class="icon food" href="http://www.teresinashopping.com.br/lojas/lojas-alimentacao/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-alimentacao/">Alimentação</a></p>
          </div>
          <div>
            <a class="icon cd" href="http://www.teresinashopping.com.br/lojas/lojas-cdsdvds/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-cdsdvds/"><a href="">CDs / DVDs</a></p>
          </div>
          <div>
            <a class="icon photo" href="http://www.teresinashopping.com.br/lojas/lojas-fotografia/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-fotografia/">Fotografia</a></p>
          </div>
          <div>
            <a class="icon fashion" href="http://www.teresinashopping.com.br/lojas/lojas-moda-intima/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-moda-intima/">Moda Íntima</a></p>
          </div>
          <div>
            <a class="icon pet" href="http://www.teresinashopping.com.br/lojas/lojas-pet-shop/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-pet-shop/">Pet Shop</a></p>
          </div>
          <div>
            <a class="icon travel" href="http://www.teresinashopping.com.br/lojas/lojas-viagensturismo/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-viagensturismo/">Viagens / Turismo</a></p>
          </div>
        </div>
        <div class="grid_4">
          <div>
            <a class="icon sport" href="http://www.teresinashopping.com.br/lojas/lojas-artigos-esportivos/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-artigos-esportivos/">Artigos<br/>Esportivos</a></p>
          </div>
          <div>
            <a class="icon cinema" href="http://www.teresinashopping.com.br/lojas/lojas-cinema/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-cinema/">Cinema</a></p>
          </div>
          <div>
            <a class="icon clothes" href="http://www.teresinashopping.com.br/lojas/lojas-roupas/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-roupas/">Roupas</a></p>
          </div>
		  <div>
            <a class="icon services" href="http://www.teresinashopping.com.br/lojas/lojas-servicos-financeiros/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-servicos-financeiros/">Serviços<br/>Financeiros</a></p>
          </div>
		  <div>
            <a class="icon hipermercado" href="http://www.teresinashopping.com.br/lojas/lojas-hipermercado/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-hipermercado/">Hipermercado</a></p>
          </div>
		  <div>
            <a class="icon livrarias" href="http://www.teresinashopping.com.br/lojas/lojas-livrarias-bancas-de-revistas/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-livrarias-bancas-de-revistas/">Livrarias /<br/>Bancas de Revistas</a></p>
          </div>
        </div>
        <div class="grid_4 omega">
          <div>
            <a class="icon mail" href="http://www.teresinashopping.com.br/lojas/lojas-correios/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-correios/">Correios</a></p>
          </div>
          <div>
            <a class="icon child" href="http://www.teresinashopping.com.br/lojas/lojas-infantil/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-infantil/">Infantil</a></p>
          </div>
          <div>
            <a class="icon park" href="http://www.teresinashopping.com.br/lojas/lojas-parquegames/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-parquegames/">Parque / Games</a></p>
          </div>
		  <div style="display: none;">
            <a class="icon beach" href="http://www.teresinashopping.com.br/lojas/lojas-moda-praia/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-moda-praia/">Moda Praia</a></p>
          </div>
		  <div style="display: none;">
            <a class="icon import" href="http://www.teresinashopping.com.br/lojas/lojas-importado/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-importado/">Importados</a></p>
          </div>
		  <div style="display: none;">
            <a class="icon toy" href="http://www.teresinashopping.com.br/lojas/lojas-brinquedos/" title=""></a>
            <p><a href="http://www.teresinashopping.com.br/lojas/lojas-brinquedos/">Brinquedos</a></p>
          </div>
        </div>
      </div>
    </div><!-- :guia-de-lojas -->
<?php get_footer(); ?>

