<?php
/*
 * Template Name: dealer page
*/

get_header();
wp_enqueue_style('dealer', get_template_directory_uri() . '/template-page/dealer/assets/dist/app.css', array(), false);
wp_enqueue_script('dealer', get_template_directory_uri() . '/template-page/dealer/assets/dist/app.js', array(), false, array());
?>


<main class="overflow-x-hidden" id="primary">

    <!-- Hero Video -->
    <?php if(get_field('hero')['video'] || get_field('hero')['video_thumbnail']) : ?>
    <?php $hero = get_field('hero') ?>
    <div class="section position-relative" style="background-color:#000000;">
        <div class="media-ratio ratio-56">
            <div class="play-button" data-for="HunterVideo-16">
                <img src="https://www.huntermotorcycles.co.id/wp-content/uploads/2023/05/play-button.png" class="img-fluid">
            </div>
            <video loop="" playsinline="" autoplay muted id="HunterVideo" data-id="HunterVideo-16" poster="<?= $hero['video_thumbnail']['url'] ?>">
                <source src="<?= $hero['video']['url'] ?>" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
        <div class="text-wrapper lg:absolute relative bottom-0 end-0 start-0 p-lg-5 bg-[rgba(0,0,0,.6)] text-white">
                <div class="inner p-4">
                    <div class="row gx-4 gy-4 gy-lg-0 align-items-center">
                        <div class="col-lg-8 col-12">
                            <?php if($hero['title']) : ?>
                            <div class="title text-title">
                                <?= $hero['title'] ?>
                            </div>
                            <?php endif; ?>
                            <?php if($hero['description']) : ?>
                            <div class="description text-body text-white">
                                <?= $hero['description'] ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-4 col-12 lg:text-center">
                            <?php if($hero['button']) : ?>
                            <div class="button">
                                <a href="<?= $hero['button']['url'] ?>" class="btn-style"><?= $hero['button']['title'] ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php endif; ?>


    <!-- Slider introduction -->

    <?php if(get_field('slider_introduction')['gallery'] || get_field('slider_introduction')['text']) : ?>
        <?php $sliderIntro = get_field('slider_introduction') ?>
        <div class="section bg-secondary text-white" id="slider-introduction">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <?php if($sliderIntro['gallery']) : ?>
                        <div class="swiper slider-introduction position-relative">
                            <div class="swiper-wrapper">
                                <?php foreach($sliderIntro['gallery'] as $image) : ?>
                                <div class="swiper-slide">
                                    <div class="image-wrapper image-ratio ratio-62">
                                        <img src="<?= $image['image']['url'] ?>" alt="">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5472 55C19.8812 55 13.0967 51.899 8.04379 46.9562C3.10103 42.0134 5.55277e-06 35.1188 6.21332e-06 27.563C6.87387e-06 20.0071 3.10103 13.1125 8.04379 8.07527C13.0967 3.13251 19.8812 0.0157364 27.5472 0.015737C35.2132 0.0157377 41.9977 3.11677 46.9405 8.07527C51.899 13.0967 55 19.8812 55 27.5472C55 35.2132 51.899 41.9977 46.9562 46.9562C41.9977 51.899 35.1188 55 27.5472 55ZM30.7427 39.0856L19.3932 27.7361C19.2988 27.6417 19.2988 27.4528 19.3932 27.2481L30.7427 15.8987C30.8372 15.8042 31.0418 15.8042 31.2307 15.8987L33.6548 18.4173L24.824 27.2481C24.7295 27.437 24.7295 27.6417 24.824 27.7361L33.6548 36.567L31.2307 39.0856C31.0418 39.18 30.8372 39.18 30.7427 39.0856Z" fill="white" fill-opacity="0.4"/>
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.4528 0C35.1188 0 41.9033 3.10103 46.9562 8.04379C51.899 12.9865 55 19.8812 55 27.437C55 34.9928 51.899 41.8875 46.9562 46.9247C41.9033 51.8675 35.1188 54.9843 27.4528 54.9843C19.7868 54.9843 13.0023 51.8832 8.05953 46.9247C3.10103 41.9033 0 35.1188 0 27.4528C0 19.7868 3.10103 13.0023 8.04379 8.04379C13.0023 3.10103 19.8812 0 27.4528 0ZM24.2573 15.9144L35.6068 27.2639C35.7012 27.3583 35.7012 27.5472 35.6068 27.7519L24.2573 39.1013C24.1629 39.1958 23.9582 39.1958 23.7693 39.1013L21.3452 36.5827L30.176 27.7519C30.2705 27.563 30.2705 27.3583 30.176 27.2639L21.3452 18.433L23.7693 15.9144C23.9582 15.82 24.1629 15.82 24.2573 15.9144Z" fill="white" fill-opacity="0.4"/>
                                </svg>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 col-12">
                    <?php if($sliderIntro['text']) : ?>
                    <div class="text-wrapper p-4">
                        <div class="inner text-body p-lg-5 text-white">
                            <?= $sliderIntro['text'] ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>



    <!-- Bike Showcase -->


    <?php if(get_field('bike_showcase')) : ?>
    <?php $bikeShow = get_field('bike_showcase') ?>
        <div class="section" id="bike-showcase">
            <div class="container py-5 px-mobile-4 ">
                <div class="text-wrapper mb-5">
                    <?= $bikeShow['text'] ?>
                </div>

                <div class="gallery-wrapper mb-lg-5 mb-4">
                    <div class="swiper bike-gallery">
                        <div class="swiper-wrapper">
                            <?php foreach($bikeShow['gallery'] as $image) : ?>
                                <div class="swiper-slide">
                                    <div class="image-wrapper image-ratio ratio-62 mb-3">
                                        <a href="<?= get_permalink($image['link']->ID) ?>">
                                            <img src="<?= $image['gallery']['url'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="text-wrapper text-center">
                                        <a href="<?= get_permalink($image['link']->ID) ?>" class="text-white text-body">
                                            <p class="text-body"><?= $image['title'] ?></p>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="scrollbar position-relative w-3/4 mx-auto">
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>

    <?php endif; ?>


    <!-- Slider Details -->

    <?php if(get_field('slider_detail')['sections']) : ?>
    <?php $sectionDetails = get_field('slider_detail') ?>

    <div class="section bg-secondary" id="slider-detail">
        <?php foreach($sectionDetails['sections'] as $index => $sliderDetail) : ?>
        <div class="row align-items-center gx-0">
            <div class="col-lg-6 col-12 <?= $index % 2 ? '' : 'order-lg-1' ?>">
                <?php if($sliderDetail['text']) : ?>
                <div class="text-wrapper p-lg-5 p-4">
                    <?= $sliderDetail['text'] ?>
                </div>
                <?php endif ?>
            </div>
            <div class="col-lg-6 col-12">
                <?php if($sliderDetail['gallery']) : ?>
                <div class="swiper slider-detail position-relative">
                    <div class="swiper-wrapper">
                        <?php foreach($sliderDetail['gallery'] as $image) : ?>
                        <div class="swiper-slide">
                            <div class="image-wrapper image-ratio ratio-62">
                                <img src="<?= $image['image']['url'] ?>" alt="">
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5472 55C19.8812 55 13.0967 51.899 8.04379 46.9562C3.10103 42.0134 5.55277e-06 35.1188 6.21332e-06 27.563C6.87387e-06 20.0071 3.10103 13.1125 8.04379 8.07527C13.0967 3.13251 19.8812 0.0157364 27.5472 0.015737C35.2132 0.0157377 41.9977 3.11677 46.9405 8.07527C51.899 13.0967 55 19.8812 55 27.5472C55 35.2132 51.899 41.9977 46.9562 46.9562C41.9977 51.899 35.1188 55 27.5472 55ZM30.7427 39.0856L19.3932 27.7361C19.2988 27.6417 19.2988 27.4528 19.3932 27.2481L30.7427 15.8987C30.8372 15.8042 31.0418 15.8042 31.2307 15.8987L33.6548 18.4173L24.824 27.2481C24.7295 27.437 24.7295 27.6417 24.824 27.7361L33.6548 36.567L31.2307 39.0856C31.0418 39.18 30.8372 39.18 30.7427 39.0856Z" fill="white" fill-opacity="0.4"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.4528 0C35.1188 0 41.9033 3.10103 46.9562 8.04379C51.899 12.9865 55 19.8812 55 27.437C55 34.9928 51.899 41.8875 46.9562 46.9247C41.9033 51.8675 35.1188 54.9843 27.4528 54.9843C19.7868 54.9843 13.0023 51.8832 8.05953 46.9247C3.10103 41.9033 0 35.1188 0 27.4528C0 19.7868 3.10103 13.0023 8.04379 8.04379C13.0023 3.10103 19.8812 0 27.4528 0ZM24.2573 15.9144L35.6068 27.2639C35.7012 27.3583 35.7012 27.5472 35.6068 27.7519L24.2573 39.1013C24.1629 39.1958 23.9582 39.1958 23.7693 39.1013L21.3452 36.5827L30.176 27.7519C30.2705 27.563 30.2705 27.3583 30.176 27.2639L21.3452 18.433L23.7693 15.9144C23.9582 15.82 24.1629 15.82 24.2573 15.9144Z" fill="white" fill-opacity="0.4"/>
                        </svg>
                    </div>
                </div>
                <?php endif ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <?php endif; ?>



    <!-- Text Section -->
    <?php if(get_field('text_section')['text'] || get_field('text_section')['image']) : ?>
    <?php $textSection = get_field('text_section') ?>
    <div class="section position-relative" id="text-section">
        <div class="image-wrapper">
            <img src="<?= $textSection['image']['url'] ?>" class="position-absolute top-0 end-0 bottom-0 start-0 w-100 h-100" style="object-fit: cover;" alt="">
        </div>
        <div class="inner p-lg-5 py-5 position-relative">
            <div class="text-wrapper p-4 p-lg-5 md:w-1/2 mx-auto">
                <?= $textSection['text'] ?>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <!-- Community slider -->
    <?php if(get_field('community_slider')['text'] || get_field('community_slider')['content']) : ?>
    <?php $content = get_field('community_slider') ?>
    <div class="section py-5" id="community">
        <div class="container py-lg-3 px-mobile-4">
            <?php if($content) : ?>
            <div class="title-wrapper mb-5">
                <?= $content['text']; ?>
            </div>
            <?php endif; ?>
            <?php if($content['content']) : ?>
            <div class="slider-wrapper mb-lg-5 mb-3">
                <div class="community-slider swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($content['content'] as $single) : ?>
                            <div class="swiper-slide">
                                <div class="inner px-12 mb-3">
                                    <div class="image-wrapper mx-auto image-ratio w-24 h-24 rounded-circle">
                                        <img src="<?= $single['image']['url'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="title-wrapper text-center">
                                    <?= $single['title'] ?>
                                </div>
                                <div class="description-wrapper text-center px-3">
                                    <?= $single['description'] ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="scrollbar position-relative w-3/4 mx-auto">
                <div class="swiper-scrollbar"></div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- Contact Form -->
    <?php if(get_field('contact')['form']) : ?>
    <?php $contact = get_field('contact') ?>
        <div class="section py-5 bg-secondary" id="contact">
            <div class="container py-lg-3 px-mobile-4">
                <div class="title-wrapper md:w-1/2 mx-auto">
                    <?= $contact['text'] ?>
                </div>
                <div class="form-wrapper mb-5">
                    <?= do_shortcode($contact['form']) ?>
                </div>
                <div class="additional-wrapper text-body text-center">
                    <?= $contact['additional'] ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

</main>


<?php get_footer() ?>