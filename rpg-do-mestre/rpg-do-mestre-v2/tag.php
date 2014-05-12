<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
	<h3 class="search-title"><?php printf( __( 'Todos os posts da coluna: %s' ), '<span class="tag-title">' . single_tag_title( '', false ) . '</span>' ); ?></h3>
	<?php include ('loop-paged.php'); ?>
<?php else : ?>
    <?php include ('loope-404.php'); ?>
<?php endif; ?>
<?php get_footer(); ?>