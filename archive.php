<?php get_header(); ?>
<h1>archive.php</h1>

<?php if (is_category()) : ?>
    <h2>Browsing category: <?php single_cat_title() ?></h2>
<?php elseif (is_tag()) : ?>
    <h2>Browsing tag: <?php single_tag_title() ?></h2>
<?php elseif (is_year()) : ?>
    <h2> Browsing <?php the_time('Y'); ?></h2>
<?php endif; ?>

<!-- 
    <?php if (is_category()) { ?>
    <h2>Browsing category: <?php single_cat_title() ?></h2>
<?php } elseif (is_tag()) { ?>
    <h2>Browsing tag: <?php single_tag_title() ?></h2>
<?php } ?> 
-->

<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>
        <article <?php post_class(); ?>>
            <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p>by <?php the_author(); ?></p>
            <p><?php the_time('F j, Y, g:i a'); ?></p>

            <?php the_post_thumbnail("large"); ?>

            <?php //the_content(); 
                    ?>

            <p>Categories: <?php the_category(", "); ?></p>
            <p><?php the_tags(); ?></p>

        </article>

<?php endwhile;
endif; ?>

<?php the_posts_navigation(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>