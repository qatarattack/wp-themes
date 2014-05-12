<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
	<h3 class="search-title"><?php printf( __( 'Resultados da busca para: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
	<?php include ('loop-paged.php'); ?>
<?php else : ?>
    <?php include ('loop-404.php'); ?>
<?php endif; ?>
<?php get_footer(); ?>