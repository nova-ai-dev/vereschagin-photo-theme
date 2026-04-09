<?php
/**
 * Main index template fallback.
 *
 * @package VereschaginPhotoPremium
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <h1>Контент не найден</h1>
            <p>Добавьте страницу и назначьте её главной в настройках WordPress.</p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
