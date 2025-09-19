<?php 
$footer_location = get_field('footer_location');
$footer_copyright = get_field('footer_copyright');
$footer_rights_reserved = get_field('footer_rights_reserved');
?>

<footer class="footer">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-waveform-primary.svg'; ?>" alt="Waveform" class="icon-waveform-primary">
            jkaltrocks
        </div>
        <div class="footer-content">
            <p><?= esc_html($footer_location); ?></p>
            <p><?= esc_html($footer_copyright); ?></p>
            <p><?= esc_html($footer_rights_reserved); ?></p>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>