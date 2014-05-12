<?php global $post; ?>
<aside class="quad nmrg">
    <div class="columns">
        <h3>Autor do post</h3>
    	<span class="alignleft"><?php echo get_avatar( get_the_author_meta('user_email', $my_post_ID), '80', '' ); ?></span>
            <h4 class="nmrg"><a href="mailto:<?php the_author_meta('user_email', $my_post_ID); ?>"><?php the_author_meta('nickname', $my_post_ID); ?></a></h4>
            <p class="nmrg"><?php the_author_meta('description', $my_post_ID); ?></p>
    </div>
    <div class="clear-both"></div>
    <div class="columns">
        <?php if(function_exists('echo_ald_crp')) echo_ald_crp(); ?>
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
            <li><a href="http://twitter.com/vsdemigod">Vinícius SemiGod</a></li>
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
        <script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script></div>
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