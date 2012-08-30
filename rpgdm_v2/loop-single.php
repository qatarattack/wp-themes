<section class="octa" id="single-post">
    <?php while ( have_posts() ) : the_post(); ?>
        <header class="single">
            <h1 class="nmrg"><?php the_title(); ?>&nbsp;&nbsp;&nbsp;<a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="rpgdm">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></h1>
            <?php echo get_the_date() ?>
        </header>
        <?php the_content(); ?>
        <?php comments_template( '', true ); ?>
    <?php endwhile; ?>
</section>