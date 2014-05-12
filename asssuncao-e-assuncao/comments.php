<?php
/* Comment Form */
$args = array(
	'id_form' => 'comment-form-container',
	'id_submit' => 'submit-btn',
	'title_reply' => __( '','textdomain_finale' ),
	'title_reply_to' => __( 'Deixar uma resposta para %s','textdomain_finale' ),
	'cancel_reply_link' => __( 'Cancelar Resposta','textdomain_finale' ),
	'label_submit' => __( 'Enviar','textdomain_finale' ),
			   
	'comment_field' => '
		<div class="column_360 last">
		<textarea name="message" rows="11" cols="20" class="message rounded" placeholder="Message"></textarea>
		</div>
		<div class="clear"></div>',
		   
	'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'Você deve estar <a href="%s">logado</a> para postar comentários.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		
	'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logado como <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Sair?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		
	'comment_notes_before' => '<p class="comment-notes"></p>',
		
	'comment_notes_after' => '<p class="form-allowed-tags"></p>',
	
	'fields' => apply_filters( 'comment_form_default_fields', array(
		
	'author' => '<div class="column_300">
				 <input type="text" name="author" class="name rounded" placeholder="Digite o nome" ' . $aria_req . ' />',
			
	'email' => '<input type="text" name="email" class="email rounded" placeholder="Digite o e-mail" ' . $aria_req . ' />',
		
	'url' => '<input type="text" name="url" class="subject rounded" placeholder="Digite uma URL" />
			 </div>'

		)
			)
				);
?>




<!-- Start Comments -->
<div class="post_comment m_right_40">
<h2 class="m_top_40">Comentários</h2>

<ol class="commentlist">
<?php wp_list_comments('type=comment&callback=theme_comment'); ?>
</ol><br />

</div>
<!--end post_comment-->



<div class="add_post_comment">
    <h2 class="m_top_25">Adicionar Comentário</h2>               
        <div class="post_comment_form m_top_20 m_bottom_170">
        
        	<?php comment_form( $args ); ?>
        
        </div><!--end post_comment_form-->             
</div><!--end post-->