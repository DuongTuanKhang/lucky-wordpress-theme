<?php
/**
 * Fallback template for the Lucky theme.
 *
 * @package Lucky
 */
get_header();
?>
<main class="container">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="entry-content"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e( 'No content found.', 'lucky' ); ?></p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>