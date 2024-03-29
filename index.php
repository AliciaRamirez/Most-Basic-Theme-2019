<?php get_header(); ?>
<h1>index.php</h1>
<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>
        <article <?php post_class(); ?>>
            <h2>
                <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p>by <?php the_author(); ?></p>
            <p><?php the_time('F j, Y, g:i a'); ?></p>

            <?php //the_content("more..."); 
                    ?>
            <?php the_excerpt(); ?>

        </article>
<?php endwhile;
endif; ?>

<?php the_posts_navigation(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>