<section class="octa">
    <?php $firstpost = 1; while ( have_posts() ) : the_post(); ?>
        <?php
          $args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
          $attachments = get_posts($args);
          $attach_size = count($attachments) - 1;
        ?>
        <?php if ($firstpost == 1) : ?>
            <article id="first-post">
                <section class="fp-meta">
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $attachments[$attach_size]->guid; ?>" width="642" height="250" alt="teste" /></a>
                    <div class="fp-meta-values"><span class="comment-count"><?php comments_popup_link( ( '0' ), __( '1' ), __( '%' ) ); ?></span></div>
                </section>
                <h1 class="nmrg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php new_the_excerpt(get_the_excerpt(),350); ?>
            </article>
        <?php $firstpost++; else : ?>
            <article class="quad <?php if (($firstpost % 2) != 0) : echo 'nmrg'; endif; ?>">
                <section class="fp-meta">
                    <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $attachments[$attach_size]->ID, "thumb", false ); ?></a>
                    <div class="fp-meta-values"><span class="comment-count"><?php comments_popup_link( ( '0' ), __( '1' ), __( '%' ) ); ?></span></div>
                </section>
                <h4 class="nmrg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php new_the_excerpt(get_the_excerpt(),150); ?>
            </article>
            <?php if (($firstpost % 2) != 0) : ?>
            <div class="clear-both"></div>
            <?php endif; $firstpost++; ?>
        <?php endif; ?>
    <?php endwhile; ?>
    <?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-below">
		<span class="meta-nav-older alignleft"><?php next_posts_link( __( '&larr; Posts mais antigos' ) ); ?></span>
		<span class="meta-nav-newer alignright"><?php previous_posts_link( __( 'Posts mais recentes &rarr;') ); ?></span>
	</div>
    <?php endif; ?>
</section>