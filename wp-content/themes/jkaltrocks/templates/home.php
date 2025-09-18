<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<?php 

// Hero Section
$hero_subtitle = get_field('hero_subheading');
$hero_heading_top = get_field('hero_heading_top');
$hero_heading_middle = get_field('hero_heading_middle');
$hero_heading_bottom = get_field('hero_heading_bottom');
$hero_image = get_field('hero_image');
$cta_btn_label   = get_field('cta_button_label');

// Services Section
$services_heading = get_field('services_section_heading');
$services = get_field('services');

// About Section
$about_heading = get_field('about_section_heading');
$about_body = get_field('about_section_body');
$about_image = get_field('about_section_image');

// Discography Section
$discography_heading = get_field('discography_section_heading');
$credits_key = get_field('credits_key');
$albums = get_field('albums');

// Contact Section
$contact_heading = get_field('contact_section_heading');
$contact_description = get_field('contact_section_description');

// Footer
$footer_heading = get_field('footer_heading');
$footer_location = get_field('footer_location');
$footer_copyright = get_field('footer_copyright');
$footer_rights_reserved = get_field('footer_rights_reserved');

?>

<main>
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-section-bg-image" style="background-image: url(<?= $hero_image['url']; ?>); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
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
                    <?= esc_html($cta_btn_label); ?>
                    <img src="<?= get_template_directory_uri() . '/assets/images/icon-btn-arrow.svg'; ?>" alt="Arrow">
                </a>
            </div>
        </div>
    </div>
    <!-- Services Section -->
    <section class="services-section side-padding">
        <div class="services-section-container container-lg">
            <h2><?= esc_html($services_heading) ?></h2>
            <div class="services-grid">
                <?php
                    if (!empty($services)) {
                        foreach ($services as $service) { 
                            echo '<div class="service-cell">';
                            echo '<figure>';
                            echo '<img src="' . esc_url($service['service_icon']['url']) . '" alt="' . esc_attr($service['service_icon']['alt']) . '">';
                            echo '</figure>';
                            echo '<h3>' . esc_html($service['service_heading']) . '</h3>';
                            echo '<div class="service-divider"></div>';
                            echo '<p>' . esc_html($service['service_description']) . '</p>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="about-section side-padding">
        <div class="about-section-container container-lg">
            <h2><?= esc_html($about_heading); ?></h2>
            <div class="about-grid">
                <div class="about-section-text">
                    <?= wp_kses_post($about_body); ?>
                </div>
                <div class="about-section-image">
                    <figure>
                        <img src="<?= esc_url($about_image['url']) ?>" alt="<?= esc_attr($about_image['alt']); ?>">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Discography Section -->
    <section class="discography-section side-padding">
        <div class="discography-section-container container-lg">
            <h2><?= esc_html($discography_heading); ?></h2>
            <p class="credits-key"><?= esc_html($credits_key); ?></p>
            <div class="album-grid">
                <?php
                    if (!empty($albums)) {
                        foreach ($albums as $album) { 
                            echo '<a class="album-link" href="' . esc_url($album['listen_link']) . '" target="_blank">';
                            echo '<div class="album-cell">';
                            echo '<figure>';
                            echo '<img src="' . esc_url($album['cover_art']['url']) . '" alt="' . esc_attr($album['cover_art']['alt']) . '">';
                            echo '<div class="button-overlay">';
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/icon-play-button.svg" alt="Play Button" />"';
                            echo '</div>';
                            echo '</figure>';
                            echo '<p>' . esc_html($album['credits']) . '</p>';
                            echo '</div>';
                            echo '</a>';
                        }
                    }
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>