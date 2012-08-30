    <aside>
      <a href="<?php bloginfo('url'); ?>" title="RPG do Mestre — Onde o mestre ensina RPG" class="logo"></a>

      <div class="social-icons">
        <a href="http://feeds.feedburner.com/RPGdoMestre" title="Assine o feed RSS do RPG do Mestre"></a>
        <a class="social-middle" href="https://www.facebook.com/rpgdomestre" title="Curta o perfil do RPG do Mestre no Facebook"></a>
        <a class="social-last" href="https://twitter.com/#!/rpgdm" title="Siga o @rpgdm no Twitter"></a>
      </div><!-- /Social Icons -->

      <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Pesquisar', 'twentyeleven' ); ?>" />
      </form>

      <ul class="nav">
        <li><a class="<?php if ( is_home() OR is_front_page() ) : echo 'active'; endif; ?>" href="http://rpgdomestre.com/" title="Leia os posts do #RPGdM">home</a></li>
        <li><a class="<?php if ( in_category('blog') AND ( ! is_home() ) ) : echo 'active'; endif; ?>" href="http://rpgdomestre.com/category/blog/" title="Leia os posts do #RPGdM">blog</a></li>
        <!--<li><a class="<?php if ( in_category('ebooks') ) : echo 'active'; endif; ?>" href="http://rpgdomestre.com/category/ebooks/" title="E-books criados pelo #RPGdoMestre">ebooks</a></li>-->
        <li><a class="<?php if ( is_page('autores') ) : echo 'active'; endif; ?>" href="http://rpgdomestre.com/autores/" title="Os escritores do #rpgdm">autores</a></li>
        <li><a class="<?php if ( is_page('contato') ) : echo 'active'; endif; ?>" href="http://rpgdomestre.com/contato/" title="Meios de contato com o site RPGdM">contato</a></li>
        <li><a class="<?php if ( is_page('midiakit') ) : echo 'active'; endif; ?>" href="http://rpgdomestre.com/midiakit/" title="Midiakit do RPG do Mestre">midiakit</a></li>
        <li><a class="<?php if ( is_page('rpgosfera') ) : echo 'active'; endif; ?>" href="http://rpgdomestre.com/rpgosfera/" title="Os blogs de RPG pelo Brasil e mundo">RPGosfera</a></li>
        <li><a href="<?php echo get_random_posts(); ?>" title="Explore o RPG do Mestre">Explorar</a></li>
      </ul><!-- /Navigation -->
    </aside><!-- /Aside -->
    <?php flush(); ?>

    