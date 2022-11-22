<footer>
    <?php $footer = get_field('footer', 7); ?>
    <div class="back-to-top">
        <a href="/">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 15.5L12 8.5L19 15.5" stroke="#200E32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
    </div>
    <div class="footer-top">
        <div class="icon-description-container">
            <div class="icon-container">
                <?php foreach ($footer['icons'] as $icons) : ?>
                    <a href="<?php echo $icons['link']; ?>" target="_blank">
                        <?php echo $icons['icon']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="description">
                <?php echo $footer['description']; ?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="copyright-menu">
            <div class="copyright">
                <?php echo $footer['copyright']; ?>
            </div>
            <div class="footer-menu">
                <?php echo wp_nav_menu(array('menu' => 'Footer menu')); ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>




