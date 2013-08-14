<div class="clear"></div>
    <div class="foursquare">
      <div class="container_16">
        <div class="grid_7 prefix_10">
          <span class="total-checkins"><a href="https://foursquare.com/teresinashopp" style="color:#fff">15.000</a></span>
          <span class="text-checkins"><a href="https://foursquare.com/teresinashopp" style="color:#fff">check-ins no Teresina shopping</a></span>
        </div>
      </div><!-- :four-square -->
    </div>
    <div>
      <div class="container_16 social-timelines">
        <div class="grid_4 alpha">
          <h5>Vídeos</h5>
          <?php
            $the_query = new WP_Query( array( 'cat' => 332, 'posts_per_page' => 3 ) ); $my_count = 1;
            while ( $the_query->have_posts() ) :
              $the_query->the_post();
              $customs = get_post_custom();
            ?>
              <?php if ($my_count == 1) : ?>
              <?php echo $customs['embedYoutube'][0]; $my_count++; ?>
              <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
              <ul class="list_of_links">
              <?php elseif ($my_count == 2) : ?>
              <li class="first-video"><a href="<?php echo $customs['linkYoutube'][0] ?>" title="<?php the_title() ?>" target="_blank"><?php the_title(); ?></a></li>
              <?php else : ?>
              <li><a href="<?php echo $customs['linkYoutube'][0] ?>" title="<?php the_title() ?>" target="_blank"><?php the_title(); ?></a></li>
              <?php endif; ?>
            <?php endwhile; ?>
            </ul>
            <a class="see-more" href="http://www.youtube.com/teresinashopp">ver mais vídeos</a>
        </div><!-- :videos -->
        <div class="grid_4">
          <h5>Instagram</h5>
          <div class="instagram-widget">
            <?php if ( dynamic_sidebar('index-widget-instagram') ) : ?>
            <? else : ?>
            <?php endif; ?>
          </div>
        </div><!-- :instagram-fotos -->
        <div class="grid_4 twitter-widget">
          <h5>Twitter</h5>
          <?php if ( dynamic_sidebar('index-widget-twitter') ) : ?>
          <? else : ?>
          <?php endif; ?>
          <!-- <a class="see-more" href="#">siga o Teresina Shopping</a> -->
        </div><!-- :twitter-stream -->
        <div class="grid_4 omega">
          <h5>Facebook</h5>
          <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTeresinaShopping&amp;width=292&amp;height=440&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true&amp;appId=149952021779775" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:440px;" allowTransparency="true"></iframe>
        </div><!-- :facebook-fans -->
      </div><!-- : -->
    </div><!-- :social-content -->
    <div class="clear"></div>
    <div class="master-footer">
      <div class="shadow">
      </div>
      <footer class="container_16">
        <div class="grid_2 alpha">
          <a href="/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" height="120" alt="Logo Teresina Shopping"></a>
        </div><!-- :logo -->
        <nav class="grid_11">
          <div class="footer_nav_inside">
            <div class="footer-nav hide-desktop">
              <a href="<?php echo home_url('/o-shopping/') ?>">O Shopping</a> |
              <a href="<?php echo home_url('/Lojas/') ?>">Lojas</a> |
              <a href="<?php echo home_url('/servicos/') ?>">Serviços</a> |
              <a href="<?php echo home_url('/category/novidades/') ?>">Novidades</a> |
              <a href="<?php echo home_url('/ampliacao-the/') ?>">Ampliação</a> |
              <a href="<?php echo home_url('/category/novidades/eventos/') ?>">Eventos</a> |
              <a href="<?php echo home_url('/category/novidades/promocoes/') ?>">Promoções</a> |
			  <a href="<?php echo home_url('/revista/') ?>">Revista</a> |
              <a href="<?php echo home_url('/category/blog/moda/') ?>">Blog de Moda</a> |
              <a href="<?php echo home_url('/contato/') ?>">Contato</a>
            </div>
            <form class="hide-mobile">
              <select name="" class="javascript-navigation">
                <option>Menu</option>
                <option value="<?php echo home_url('/o-shopping/') ?>">O Shopping</option>
                <option value="<?php echo home_url('/Lojas/') ?>">Lojas</option>
                <option value="<?php echo home_url('/servicos/') ?>">Serviços</option>
                <option value="<?php echo home_url('/category/novidades/') ?>">Novidades</option>
                <option value="<?php echo home_url('/ampliacao-the/') ?>">Ampliação</option>
                <option value="<?php echo home_url('/category/novidades/eventos/') ?>">Eventos</option>
                <option value="<?php echo home_url('/category/novidades/promocoes/') ?>">Promoções</option>
				<option value="<?php echo home_url('/revista/') ?>">Revista</option>
                <option value="<?php echo home_url('/category/blog/moda/') ?>">Blog de Moda</option>
                <option value="<?php echo home_url('/contato/') ?>">Contato</option>
              </select>
            </form><!-- :navegação-rodapé -->
            <div>
              <h4 class="hide-desktop">Serviços</h4>
              <div class="hide-desktop">
                <a href="<?php echo home_url('/servicos/achados-e-perdidos/') ?>">Achados e Perdidos</a> |
                <a href="<?php echo home_url('/servicos/agencia-dos-correios/') ?>">Agência dos Correios</a> |
                <a href="<?php echo home_url('/servicos/caixas-eletronicos/') ?>">Caixas Eletrônicos</a> |
                <a href="<?php echo home_url('/servicos/carrinhos-de-bebe/') ?>">Carrinhos de Bebê</a> |
                <a href="<?php echo home_url('/servicos/recreacao-infantil/') ?>">Recreação Infantil</a> |
                <a href="<?php echo home_url('/servicos/espaco-crianca/') ?>">Espaço Criança</a> |
                <a href="<?php echo home_url('/servicos/teresina-play/') ?>">Teresina Play</a> |
                <a href="<?php echo home_url('/servicos/estacionamento/') ?>">Estacionamento</a> |
                <a href="<?php echo home_url('/servicos/cadeira-de-rodas/') ?>">Cadeira de Rodas</a> |
                <a href="<?php echo home_url('/servicos/lojas-de-turismo/') ?>">Lojas de Turismo</a> |
                <a href="<?php echo home_url('/servicos/cambio/') ?>">Câmbio</a> |
                <a href="<?php echo home_url('/servicos/loteria/') ?>">Loteria</a> |
                <a href="<?php echo home_url('/servicos/fotografia/') ?>">Fotografia</a>
              </div><!-- :links-serviços -->
			  
			  <br><p style="font-weight: bold;">Horário de funcionamento</p>
				  <p>Segunda a Sábado: 10h às 22h | Domingo: 13h às 19h</p>
			  
            </div>
            <form action="" class="hide-mobile">
              <br/>
              <select name="" class="javascript-navigation">
                <option>Serviços</option>
                <option value="<?php echo home_url('/servicos/achados-e-perdidos/') ?>">Achados e Perdidos</option>
                <option value="<?php echo home_url('/servicos/agencia-dos-correios/') ?>">Agência dos Correios</option>
                <option value="<?php echo home_url('/servicos/caixas-eletronicos/') ?>">Caixas Eletrônicos</option>
                <option value="<?php echo home_url('/servicos/carrinhos-de-bebe/') ?>">Carrinhos de Bebê</option>
                <option value="<?php echo home_url('/servicos/recreacao-infantil/') ?>">Recreação Infantil</option>
                <option value="<?php echo home_url('/servicos/espaco-crianca/') ?>">Espaço Criança</option>
                <option value="<?php echo home_url('/servicos/teresina-play/') ?>">Teresina Play</option>
                <option value="<?php echo home_url('/servicos/estacionamento/') ?>">Estacionamento</option>
                <option value="<?php echo home_url('/servicos/cadeira-de-rodas/') ?>">Cadeira de Rodas</option>
                <option value="<?php echo home_url('/servicos/lojas-de-turismo/') ?>">Lojas de Turismo</option>
                <option value="<?php echo home_url('/servicos/cambio/') ?>">Câmbio</option>
                <option value="<?php echo home_url('/servicos/loteria/') ?>">Loteria</option>
                <option value="<?php echo home_url('/servicos/fotografia/') ?>">Fotografia</option>
              </select>
            </form>
            <div class="footer-address">
              <p>Av. Raul Lopes, 1000 - Teresina Shopping - Bairro dos Noivos. CEP: 64046-902</p>
              <p class="footer-phone">(86) 3230.2000</p>
            </div><!-- endereço -->
			
			<div style="float: right;"><a href="http://www.facebook.com/NexoCom?fref=ts"><img src="http://www.teresinashopping.com.br/wp-content/themes/theresina_shopping-child/img/nexo-logo.png"></a></div>
			
          </div>
        </nav><!-- :navigation -->
        <div class="grid_3 omega">
          <form method="post" action="form">
            <h4>Contato</h4>
            <input type="text" name="nome" placeholder="nome" />
            <input type="text" name="email" placeholder="email" />
            <textarea name="mensagem" rows="5"></textarea>
            <input type="submit" value="Enviar" />
          </form>
        </div><!-- :form-contato -->
      </footer>
    </div>
    <?php wp_footer(); ?>
    <?php if (is_page('cinemas') || is_home()) : ?>
      <script type="text/javascript">
        jQuery(document).ready(function() {
          var imageFlowInstance = new ImageFlow();
          imageFlowInstance.init({ ImageFlowID: 'imageFlowSlider', reflections: false, captions:false, reflectionP: 0.0, slider: false,aspectRatio: 1.1, imagesM: 0.45, imagesHeight: 1 });
        });
      </script>
    <?php endif; ?>
    <script type="text/javascript">
      jQuery(document).ready(function() {
        var overSpan = jQuery('.overSpan'),
            jsNav = jQuery('.javascript-navigation'),
            moviesImg = jQuery('.moviesImg'),
            trailers = jQuery('.trailer'),
            sgl = jQuery('.sgl'),
            sgc = jQuery('.sgc'),
            sgi = jQuery('.sgi'),
            post = jQuery('#post'),
            cdown = jQuery('.countdown-widget'),
            totalCheckins = jQuery('.total-checkins');

        if (cdown) {
          setInterval(function() {
            cdown.find('.fergcorp_countdownTimer_day').html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
          }, 2000)
        }

        if (totalCheckins) {
          jQuery.get('https://api.foursquare.com/v2/venues/4bbe6bab85fbb7135fc77067?oauth_token=XGEZJ4IBSKX2IVBFBAE332VG3WE1IWZMI4MRVZZUG4J4CYHG&v=20130306',function(FSQ) {
            totalCheckins.html(FSQ.response.venue.stats.checkinsCount);
            console.log(FSQ.response.venue.stats.checkinsCount);
          });
        }

        if (sgl) {
          sgl.on('click', function() {
            var link = parseInt(jQuery(this).data('link'));
            sgc.each(function() {
              var clink = parseInt(jQuery(this).data('link'));

              if (link === clink) {
                jQuery(this).show();
              } else {
                jQuery(this).hide();
              }
            });
            sgi.each(function() {
              var ilink = parseInt(jQuery(this).data('link'));

              if (link === ilink) {
                jQuery(this).show();
              } else {
                jQuery(this).hide();
              }
            });

            return false;
          });
        }

        if (overSpan) {
          if (post) {
            overSpan.each(function(){
              jQuery(this).find('span').show();
            });
          } else {
            overSpan.on('mouseover', function() {
              jQuery(this).find('span').show();
            });
            overSpan.on('mouseout', function() {
              jQuery(this).find('span').hide();
            });
          }
        }

        if (moviesImg) {
          moviesImg.on('click', function(e) {
            e.preventDefault();
            var poster = jQuery(this);

            trailers.each(function() {
              var trailer = jQuery(this);

              if (parseInt(poster.data('trailer')) === parseInt(trailer.data('trailer'))) {
                jQuery(this).show();
              } else {
                jQuery(this).hide();
              }
            });
          });
        }

        jsNav.on('change', function() {
          console.log(this);
          window.location.href = jQuery(this).find(':selected').val();
        });
      });
    </script>
  </body>
</html>