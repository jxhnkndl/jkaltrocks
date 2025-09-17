<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<?php 

// Hero Section
$hero_subtitle = get_field('hero_subheading');
$hero_heading_top = get_field('hero_heading_top');
$hero_heading_middle = get_field('hero_heading_middle');
$hero_heading_bottom = get_field('hero_heading_bottom');
$hero_image = get_field('hero_image');
$cta_btn_text = get_field('cta_button_text');

// Discography Section
$discography_heading = get_field('discography_section_heading');
$discography_args = array(
    'post_type' => 'album',
    'orderby' => 'order',
    'order' => 'desc'
);
$discography_query = new WP_Query($discography_args);

// Contact Section
$contact_heading = get_field('contact_section_heading');

// Footer
$footer_heading = get_field('footer_heading');
$footer_location = get_field('footer_location');
$footer_copyright = get_field('footer_copyright');
$footer_rights_reserved = get_field('footer_rights_reserved');

?>

<main>
    <div class="hero-section">
        <div class="hero-section-bg-image" style="background-image: url(<?php echo $hero_image['url']; ?>); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
        <div class="hero-section-gradient"></div>
        <div class="hero-section-content-wrapper">
            <div class="hero-content side-padding">
                <h1>
                    <span><?= esc_html($hero_heading_top); ?></span>
                    <span><?= esc_html($hero_heading_middle); ?></span>
                    <span><?= esc_html($hero_heading_bottom); ?></span>
                </h1>
                <h2><?= esc_html($hero_subtitle); ?></h2>
                <a href="#contact" class="cta-btn">
                    <?= esc_html($cta_btn_text); ?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-btn-arrow.svg'; ?>" alt="Arrow">
                </a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>