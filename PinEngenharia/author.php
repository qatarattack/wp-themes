<?php get_header(); ?>
<?php get_sidebar(); ?>
		<section class="posts archive">
			<?php if ( have_posts() ) : ?>
				<?php the_post(); ?>
					<h1><?php printf( __( 'Todos os posts escritos pelo autor %s', 'twentyeleven' ), get_the_author() ); ?></h1>

				<?php rewind_posts(); ?>
				<?php $no_post = 1; while ( have_posts() ) : the_post(); ?>
					
					<?php if ($no_post == 1) : ?>
					<div class="couple-post">
						<article class="post">
	          	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
	          	<?php echo the_excerpt(); ?>
		        </article>
		      <?php $no_post++; else : ?>
		      	<article class="post">
	          	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
	          	<?php echo the_excerpt(); ?>
		        </article>
		      </div>
		      <?php $no_post--; endif; ?>

				<?php endwhile; child_content_nav( 'nav-below' ); else : ?>
					<div>
            <h1 class="entry-title"><?php _e( 'Invisibilidade total', 'twentyeleven' ); ?></h1>
						<p><?php _e( 'Os agentes não foram capazes de encontrar aquilo que você pediu. Talvez tenham escondido com alguma barreira invisível, magia da invisibilidade ou levaram para algum lugar que não pudemos encontrar. Volte daqui alguns dias ou faça uma busca mais precisa, você mesmo', 'twentyeleven' ); ?><br/></p>
            <p><?php get_search_form(); ?></p>
					</div><!-- #post-0 -->

			<?php endif; ?>
		</section>

<?php get_footer(); ?>