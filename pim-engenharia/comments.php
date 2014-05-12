<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>   
  <?php die('Você não pode acessar essa página diretamente!'); ?>  
<?php endif; ?>

<?php if(!empty($post->post_password)) : ?>
    <?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
    <p>Esse post é protegido por senha. Faça seu login para poder visualizá-lo</p>
    <?php endif; ?>
<?php endif; ?>

<?php if($comments) : ?>
    <h3>Comentários para “<?php the_title(); ?>”</h3>
    <ol class="comments">
      <?php foreach($comments as $comment) : ?>
      <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
        <?php if ($comment->comment_approved == '0') : ?>
        <p class="moderation">Seu comentário precisa ser aprovado, antes de aparecer para todos. Aguarde mais um pouco, por favor.</p>
        <?php endif; ?>
        <div class="comment-proper">
          <div class="comment-meta">
            <div class="comment-avatar"><?php echo get_avatar( $comment, 50 ); ?></div>
            <div class="comment-meta-text"><span><?php comment_author_link(); ?></span><br/><?php comment_date(); ?> às <?php comment_time(); ?></div>
          </div>
          <div class="comment-text">
            <?php comment_text(); ?>
          </div>
        </div>
      </li>
    <?php endforeach; ?>
  </ol>
<?php else : ?>
  <h3>Parece que os bardos não estão muito inpirados, hoje. Ninguém apareceu para contar ou cantarolar algo por aqui, ainda :(</h3>
<?php endif; ?>

<?php if(comments_open()) : ?>
  <?php if(get_option('comment_registration') && !$user_ID) : ?>
    <p>Você precisa <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logar</a> para comentar.</p><?php else : ?>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <legend>Deixe o seu comentário, também:</legend>
      <?php if($user_ID) : ?>
        <div class="comment-form-inputs">
          <p>Você está logado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.<br/><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Fazer logout &raquo;</a></p>
        </div>
      <?php else : ?>
        <div class="comment-form-inputs">
          <p><label for="author"><small>Nome <?php if($req) echo "(obrigatório)"; ?></small></label><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="50" tabindex="1" /></p>
          <p><label for="email"><small>E-Mail <?php if($req) echo "(obrigatório)"; ?></small></label><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="50" tabindex="2" /></p>
          <p><label for="url"><small>URL</small></label><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="50" tabindex="3" /></p>
        </div>
      <?php endif; ?>
        <div class="comment-form-textarea">
          <p><textarea name="comment" id="comment" cols="50%" rows="17" tabindex="4"></textarea></p>
          <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
        </div>
        <p class="clearboth"><?php do_action('comment_form', $post->ID); ?><input name="submit" class="alignright awesomebutton" type="submit" id="submit" tabindex="5" value="Enviar comentário" /></p>
    </form>
  <?php endif; ?>
<?php else : ?>
  <p>O dragão que mora além das montanhas pediu pagamento de tributos, como não tínhamos o que oferecer, ele nos obrigou a fechar os comentários :(.</p>
<?php endif; ?>