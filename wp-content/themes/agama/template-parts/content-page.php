<?php
/**
 * The template used for displaying page content in page.php
 *
 * @author  Theme Vision <support@theme-vision.com>
 * @package Agama
 * @since   1.0.0
 */

// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

$options = array( 'titles' => esc_attr( get_theme_mod( 'agama_page_title', false ) )
); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( ! is_page_template( 'templates/front-page.php' ) ) : ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <?php if( ! is_front_page() && ! get_theme_mod( 'agama_breadcrumb', false ) ): ?>
        <?php if( $options['titles'] ): ?>
            <h1 class="entry-title">
                <?php the_title(); ?>
            </h1>
        <?php endif; ?>
        <?php endif; ?>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'agama' ), 'after' => '</div>' ) ); ?>
    </div>

    <?php do_action( 'agama_social_share' ); ?>

    <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'agama' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>
</article>
