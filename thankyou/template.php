<?php
/*
 * Template Name: thankyou-dealers page
*/

get_header();
wp_enqueue_style('thankyou', get_template_directory_uri() . '/template-page/thankyou/assets/dist/app.css', array(), false);
wp_enqueue_script('thankyou', get_template_directory_uri() . '/template-page/thankyou/assets/dist/app.js', array(), false, array());
?>

<main id="primary">

    <div class="section position-relative" id="thankyou">
        <div class="image-wrapper">
            <img src="<?= get_field('thankyou')['image']['url'] ?>" class="absolute inset-0 w-full h-full object-cover" alt="">
        </div>
        <div class="row relative">
            <div class="col-lg-6 col-12">
                <div class="inner md:bg-[rgba(0,0,0,.6)] bg-[rgba(0,0,0,.8)]">
                    <div class="text-wrapper xl:py-48 xl:px-16 px-8 md:py-24 py-12">
                        <?= get_field('thankyou')['text'] ?>
                    </div>
                </div>
            </div>
            <div class="col-6"></div>
        </div>
    </div>

</main>

<?php
get_footer();