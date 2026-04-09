<?php
/**
 * Footer template.
 *
 * @package VereschaginPhotoPremium
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
</main>

<footer class="site-footer">
    <div class="container site-footer__inner">
        <p>© <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('Все права защищены.', 'vereschagin-photo-premium'); ?></p>
        <a href="#top" class="back-to-top"><?php esc_html_e('Наверх', 'vereschagin-photo-premium'); ?></a>
    </div>
</footer>

<a class="mobile-contact-btn" href="#contacts">
    <?php esc_html_e('Связаться со мной', 'vereschagin-photo-premium'); ?>
</a>

<?php wp_footer(); ?>
</body>
</html>
