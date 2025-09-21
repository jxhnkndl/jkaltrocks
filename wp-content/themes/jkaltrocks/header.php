<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header side-padding">
        <div class="header-container container-lg">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-waveform-light.svg'; ?>" alt="Waveform" class="icon-waveform-light">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-waveform-primary.svg'; ?>" alt="Waveform" class="icon-waveform-primary">
                jkaltrocks
            </div>
            <!-- <nav class="desktop-nav">
                <ul class="desktop-nav-links">
                    <li class="desktop-nav-link-container desktop-nav-link-container-1">
                        <a href="#services" class="desktop-nav-link">Services</a>
                    </li>
                    <li class="desktop-nav-link-container desktop-nav-link-container-2">
                        <a href="#about" class="desktop-nav-link">Purpose</a>
                    </li>
                    <li class="desktop-nav-link-container desktop-nav-link-container-3">
                        <a href="#discography" class="desktop-nav-link">Discography</a>
                    </li>
                    <li class="desktop-nav-link-container desktop-nav-link-container-4">
                        <a href="https://www.instagram.com/jkaltrocks" target="_blank" class="desktop-nav-link">Content</a>
                    </li>
                    <li class="desktop-nav-link-container desktop-nav-link-container-5">
                        <a href="#contact" class="desktop-nav-link">Request Quote</a>
                    </li>
                </ul>
            </nav> -->
            <div class="menu-icon-container" aria-expanded="false" aria-label="Navigation Menu Icon">
                <div class="menu-icon">
                    <div class="menu-bar menu-bar-top"></div>
                    <div class="menu-bar menu-bar-bottom"></div>
                </div>
            </div>
        </div>
        <nav class="mobile-nav side-padding">
            <ul class="mobile-nav-links container-md">
                <li class="mobile-nav-link-container">
                    <a href="#services" class="mobile-nav-link mobile-nav-link-end">
                        <div class="color-bar"></div>
                        Services
                    </a>
                </li>
                <li class="mobile-nav-link-container">
                    <a href="#purpose" class="mobile-nav-link mobile-nav-link-start">
                        Purpose
                        <div class="color-bar"></div>
                    </a>
                </li>
                <li class="mobile-nav-link-container">
                    <a href="#discography" class="mobile-nav-link mobile-nav-link-end">
                        <div class="color-bar"></div>
                        Discography
                    </a>
                </li>
                <li class="mobile-nav-link-container">
                    <a href="http://www.instagram.com/jkaltrocks" target="_blank" class="mobile-nav-link mobile-nav-link-start">
                        Content
                        <div class="color-bar"></div>
                    </a>
                </li>
                <li class="mobile-nav-link-container">
                    <a href="#contact" class="mobile-nav-link mobile-nav-link-end">
                        <div class="color-bar"></div>
                        Request Quote
                    </a>
                </li>
            </ul>
            <div class="mobile-nav-footer">
                <a href="#contact" class="mobile-nav-footer-cta">Request Quote</a>
                <p>
                    <span>jkaltrocks</span> is an alternative rock and pop songwriter, producer, and educator based out of Richmond, Virginia.
                </p>
            </div>
        </nav>
    </header>