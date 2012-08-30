<?php get_header(); ?>
    <?php if (is_home()) : ?>
        <?php if (is_paged()) : ?>
            <?php include ('loop-paged.php'); ?>
        <?php else : ?>
            <?php include ('loop-home.php'); ?>
            <?php include ('sidebar-home.php'); ?>
        <?php endif; ?>
    <?php else : if (is_404()) : ?>
        <?php include ('loop-404.php'); ?>
    <?php endif; endif; ?>
<?php get_footer(); ?>