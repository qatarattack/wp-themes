    <?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <div id="nav-below">
    	<span class="meta-nav-older alignleft"><?php next_posts_link( __( '&larr; Posts mais antigos' ) ); ?></span>
    	<span class="meta-nav-newer alignright"><?php previous_posts_link( __( 'Posts mais recentes &rarr;') ); ?></span>
    </div>
<?php endif; ?>
<?php $number = 1; while ( have_posts() ) : the_post(); ?>
    <article class="quad <?php if (($number % 3) == 0) : echo 'nmrg'; endif; ?>">
        <section class="fp-meta">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo PHP ?>/thumbnail.php?image=<?php echo catch_that_image(); ?>&width=306&height=200" width="306" height="200" alt="<?php echo get_the_title(); ?>" /></a>
            <div class="fp-meta-values"><span class="comment-count"><?php comments_popup_link( ( '00' ), __( '01' ), __( '%' ) ); ?></span></div>
        </section>
        <h4 class="nmrg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php new_the_excerpt(get_the_excerpt(),150); ?>
    </article>
    <?php if (($number % 3) == 0) : ?>
    <div class="clear-both"></div>
    <?php endif; ?>
<?php $number++; endwhile; ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <div class="clear-both"></div>
    <div id="nav-below">
    	<span class="meta-nav-older alignleft"><?php next_posts_link( __( '&larr; Posts mais antigos' ) ); ?></span>
    	<span class="meta-nav-newer alignright"><?php previous_posts_link( __( 'Posts mais recentes &rarr;') ); ?></span>
    </div>
<?php endif; ?>