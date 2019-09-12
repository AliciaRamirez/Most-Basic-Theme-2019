<?php get_header(); ?>
<h1>single.php</h1>
<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>
        <article <?php post_class(); ?>>
            <h2>
                <?php the_title(); ?>
            </h2>
            <p>by <?php the_author(); ?></p>
            <p><?php the_time('F j, Y, g:i a'); ?></p>

            <?php the_content(); ?>

            <p>Categories: <?php the_category(", "); ?></p>
            <p><?php the_tags(); ?></p>

        </article>
<?php endwhile;
endif; ?>

<?php the_post_navigation(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>