<section class="octa">
    <?php while ( have_posts() ) : the_post(); ?>
        <header class="single">
            <h1 class="nmrg"><?php the_title(); ?></h1>
            <?php echo get_the_date() ?>
        </header>
        <?php the_content(); ?>
    <?php endwhile; ?>
</section>