<?php get_header(); ?>
<?php if ( has_post_thumbnail() ) : ?>
<div class="featured-slider">
  <?php the_post_thumbnail(); ?>
</div>
<?php endif; ?>

<div class="content <?php echo (is_page(array('o-shopping'))) ?'':'content-background'; ?>">

  <div class="container_16" id="post-<?php the_ID(); ?>">
  
	<!--<?php if (is_page('ampliacao-the')) : ?>
		<div style="width: 700px; height: 300px; margin-left: auto; margin-right: auto; border: 1px solid;">Testando.</div>
	<?php endif; ?>-->
  
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'page' ); ?>
	  
    <?php endwhile; // end of the loop. ?>
	
  </div>
</div>

<?php if (is_page('cinemas')) : ?>
		
<?php endif; ?>

<?php get_footer(); ?>