<aside class="quad nmrg">
    <div class="columns">
        <h3>Colunas</h3>
        <ul class="doub">
            <li><a href="<?php bloginfo("url"); ?>/tag/enganche-se/">Enganche-se</a></li>
            <li><a href="<?php bloginfo("url"); ?>/tag/bau-do-tesouro/">Baú do tesouro</a></li>
            <li><a href="<?php bloginfo("url"); ?>/tag/mal-em-pessoa/">Mal em pessoa</a></li>
            <li><a href="<?php bloginfo("url"); ?>/tag/desenvolva-a-ideia/">Desenvolva a ideia</a></li>
            <li><a href="<?php bloginfo("url"); ?>/tag/tataturugue/">Tataturugue</a></li>
        </ul>
        <ul class="doub nmrg">
            <li><a href="<?php bloginfo("url"); ?>/tag/missao-do-dia/">Missão do dia</a></li>
            <li><a href="<?php bloginfo("url"); ?>/tag/obstaculos/">Obstáculos</a></li>
            <li><a href="<?php bloginfo("url"); ?>/tag/ilustre-quem/">Ilustre quem?</a></li>
            <li><a href="<?php bloginfo("url"); ?>/tag/rascunhos-do-mestre/">Rascunhos mestre</a></li>
            <li><a href="<?php bloginfo("url"); ?>/tag/encontro-aleatorio/">Encontro aleatorio</a></li>
        </ul>
    </div>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
    <?php endif; ?>
    <div class="columns nmrg">
        <h3 id="h3-starred">Destaques</h3>
        <ul id="ul-starred">
            <?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 10"); foreach ($result as $post) : setup_postdata($post); $postid = $post->ID; $title = $post->post_title; $commentcount = $post->comment_count; if ($commentcount != 0) : ?>
            <li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>"><?php echo $title ?>&nbsp;<em>[<?php echo $commentcount ?>]</em></a></li>
            <?php endif; endforeach; ?>
        </ul>
    </div>
    <div class="columns">
        <h3 id="h3-comments">Comentários</h3>
        <ul id="ul-comments">
            <?php $result = $wpdb->get_results("SELECT comment_approved, comment_ID, comment_post_ID, comment_author, ID FROM $wpdb->comments JOIN $wpdb->posts ON comment_post_ID = ID WHERE comment_approved = 1 ORDER BY comment_ID DESC LIMIT 10");       foreach ($result as $comms) : ?>
            <li><a href="<?php echo get_comment_link( $comms->comment_ID ); ?>"><?php echo $comms->comment_author; ?> comentou em <em>'<?php echo get_the_title( $comms->ID ); ?>'</em></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="columns">
      <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/rpgdomestre" width="306" show_faces="true" stream="false" header="false"></fb:like-box>
    </div>
    <div class="columns doub">
        <h3>Twitter</h3>
        <ul>
            <li><a href="http://twitter.com/RPGdM">RPG do Mestre</a></li>
            <li><a href="http://twitter.com/erickpatrick">Erick Patrick</a></li>
            <li><a href="http://twitter.com/delAngeles">Fernando</a></li>
            <li><a href="http://twitter.com/fabiosilva86">Fábio Silva</a></li>
            <li><a href="http://twitter.com/vsdemigod">Vinícius DemiGod</a></li>
            <li><a href="http://twitter.com/escocesvoador">Escocês Voador</a></li>
        </ul>
    </div>
    <div class="columns doub nmrg">
        <h3>Aleatório</h3>
        <?php $result = $wpdb->get_results("SELECT ID, post_content FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY rand() LIMIT 1"); foreach ($result as $comms) : ?>
        <a href="<?php echo get_permalink( $comms->ID ); ?>"><img src="<?php echo PHP ?>/thumbnail.php?image=<?php echo catch_that_image($comms->post_content); ?>&width=138&height=80" width="138" height="80" alt="<?php echo get_the_title( $comms->ID ); ?>" /></a>
        <p id="randtitle" class="nmrg"><a href="<?php echo get_permalink( $comms->ID ); ?>"><?php echo get_the_title( $comms->ID ); ?></a></p>
        <?php endforeach; ?>
    </div>
    <div class="quad sponsors">
        <h3 style="text-align:left;">Propaganda</h3>
        <script type="text/javascript">
        	bb_bid = "1615158";
        	bb_lang = "pt-BR";
        	bb_keywords = "jogo,game,rpg,computador,notebook,video,dvd";
        	bb_name = "custom";
        	bb_limit = "6";
        	bb_format = "bbn";
        </script>
        <script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
    </div>
   <div class="quad sponsors">
     <script type="text/javascript">
	bb_bid = "1615158";
	bb_lang = "pt-BR";
	bb_keywords = "game,jogo,eletronico,internet,celular,computador";
	bb_name = "custom";
	bb_limit = "4";
	bb_format = "bbd";
     </script>
     <script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
   </div>
    
</aside>