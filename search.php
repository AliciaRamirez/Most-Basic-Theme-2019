<?php get_header(); ?>
<h1>search.php</h1>

<h1>Search results for: <?php the_search_query(); ?></h1>
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
    else : ?>
    <p>Sorry couldn't find any posts that match your search</p>
<?php endif; ?>

<?php the_posts_navigation(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>