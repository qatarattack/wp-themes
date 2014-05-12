  <div>
    <div class="post-meta">
      <em><?php theresina_shopping_posted_on(); ?></em>
    </div>
    <h2><?php the_title(); ?></h2>

  	<?php the_content(); ?>

  	<div>
  		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'theresina_shopping' ), 'after' => '</div>' ) ); ?>
  	</div>
  </div>