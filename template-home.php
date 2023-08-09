<?php
/*
Template Name: Home
*/


get_header(); ?>
<style type="text/css">
    .hiring {
        position: fixed;
        top: 80%;
        right: 20px;
        width: 100px;
        z-index: 99;
    }
</style>
<div class="hiring"><a href="mailto:precisionlocating.arizona@gmail.com" target="_blank"><img
            src="/wp-content/uploads/2023/07/hiring.png"></a></div>
<section class="headerHero" id="hero">


    <?php if (have_rows('slider')): ?>
        <?php while (have_rows('slider')):
            the_row(); ?>
            <?php if (have_rows('slides')): ?>
                <?php while (have_rows('slides')):
                    the_row(); ?>
                    <div class="hslide" style="background: url('<?php the_sub_field('background_image'); ?>');">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x grid-padding-y align-right">
                                <div class="cell large-7 show-for-large text-center align-self-middle">
                                    <img src="<?php the_sub_field('image'); ?>" class="sliderChart" />
                                </div>
                                <div class="cell large-5">
                                    <h2>
                                        <?php the_sub_field('title'); ?>
                                    </h2>
                                    <span>
                                        <?php the_sub_field('text'); ?>
                                    </span>
                                    <a href="<?php the_sub_field('button_link'); ?>" class="button btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</section>






<?php if (have_rows('section_2')): ?>
    <?php while (have_rows('section_2')):
        the_row(); ?>
        <section class="grid-container">
            <div class="grid-x grid-padding-x grid-padding-y align-middle">

                <div class="cell large-4 wow slideInLeft" data-wow-duration=".8s">
                    <h2>
                        <?php the_sub_field('title'); ?>
                    </h2>
                </div>
                <div class="cell large-8 wow slideInRight" data-wow-duration=".8s">
                    <?php the_sub_field('text'); ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<section class="bubble">
    <div class="grid-container">
        <div class="grid-x grid-padding-x grid-padding-y align-spaced">
            <div class="cell large-4">
                <a href="/leaks/water-leaks/" class="fcard text-center wow zoomIn" data-wow-duration=".8s">
                    <i class="fa-solid fa-faucet-drip"></i>
                    <span>Water Leaks</span>
                </a>
            </div>
            <div class="cell large-4">
                <a href="/services/post-tension-cables-and-slab/" class="fcard text-center wow zoomIn"
                    data-wow-duration=".8s">
                    <i class="fa-regular fa-table-cells"></i>
                    <span>Post Tension Locating</span>
                </a>
            </div>
            <div class="cell large-4">
                <a href="/services/video-inspection-and-sewer-locating/" class="fcard text-center wow zoomIn"
                    data-wow-duration=".8s">
                    <i class="fa-solid fa-pipe-valve"></i>
                    <span>Sewer/Drain Inspections</span>
                </a>
            </div>
        </div>
    </div>
</section>
<?php if (have_rows('section_3')): ?>
    <?php while (have_rows('section_3')):
        the_row(); ?>
        <section>
            <div class="grid-container">
                <div class="grid-x grid-padding-x grid-padding-y">
                    <div class="cell large-7 wow fadeIn" data-wow-duration=".8s" data-wow-delay=".4s">
                        <h2>
                            <?php the_sub_field('title'); ?>
                        </h2>
                        <ul class="speclist fa-ul">
                            <?php if (have_rows('list')): ?>
                                <?php while (have_rows('list')):
                                    the_row(); ?>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fa-solid fa-check-square"></i>
                                        </span>
                                        <?php the_sub_field('list_item'); ?>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <span class="call">
                            <?php if (get_sub_field('display_call_now')): ?>
                                <span class='call'>Call Now
                                    <?php the_field('phone_number', 'options'); ?>
                                </span>
                            <?php endif; ?>
                    </div>
                    <div class="cell large-5 pipesBg wow fadeIn" data-wow-duration=".8s" data-wow-delay=".4s">
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!-- Query testimonials -->
<?php
$args = array(
    'numberposts' => -1,
    'post_type' => 'testimonial',
    'meta_key' => 'homepage',
    'meta_value' => '1'
);
$the_query = new WP_Query($args);
?>
<!-- End query -->
<section class="pipesPat whiteText">
    <div class="grid-container">
        <div class="grid-x grid-padding-x grid-padding-y align-center">
            <div class="cell large-10 text-center wow zoomIn" data-wow-duration=".8s" data-wow-delay=".4s">
                <h2>What Our Customers Say</h2>
                <div class="quote" id="quote">
                    <!-- Loop testimonials -->
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):
                            $the_query->the_post(); ?>
                            <div>
                                &ldquo;
                                <?php the_field('testimonial', false, false); ?>&rdquo;
                                <span class="auth">
                                    <?php the_field('name'); ?>
                                    <?php if (get_field('titlecompany')): ?>
                                        <i>,
                                            <?php the_field('titlecompany'); ?>
                                        </i>
                                    <?php endif ?>
                                </span>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    <?php endif; ?>
                    <!-- End loop -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (have_rows('section_5')): ?>
    <?php while (have_rows('section_5')):
        the_row(); ?>
        <section>
            <div class="grid-container">
                <div class="grid-x grid-padding-x grid-padding-y">
                    <div class="cell large-6 wow fadeIn" data-wow-duration=".8s" data-wow-delay=".4s">
                        <h2>
                            <?php the_sub_field('title'); ?>
                        </h2>
                        <h4>
                            <?php the_sub_field('sub_title'); ?>
                        </h4>
                        <span class="textBlock">
                            <?php the_sub_field('text'); ?>
                        </span>
                        <a href="<?php the_sub_field('buttom_link'); ?>" class="button btn">Learn More</a>
                    </div>
                    <div class="cell large-6 wow fadeIn" data-wow-duration=".8s" data-wow-delay=".4s">
                        <img src="<?php the_sub_field('image'); ?>" />
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<section class="refine cta">
    <div class="grid-container">
        <div class="grid-x grid-padding-x grid-padding-y align-spaced">
            <div class="cell large-12 text-center">
                <span>Call Now
                    <?php the_field('phone_number', 'options'); ?>
                </span>
                <a href="/contact" target="_blank" class="button contact">Send Us an Email</a>
            </div>
        </div>
    </div>
</section>
<?php
$pets = array(
    'post_type' => 'pet',
    'posts_per_page' => 3
);
$pet_query = new WP_Query($pets); ?>
<section>
    <div class="grid-container text-center">
        <h2 class="pet text-center"><i class="fa-solid fa-paw"></i> Precision Pets</h2>
        <div class="grid-x grid-padding-x grid-padding-y grid-margin-x  align-center">
            <?php if ($pet_query->have_posts()): ?>
                <?php while ($pet_query->have_posts()):
                    $pet_query->the_post(); ?>
                    <?php $post_date = get_the_date('F j, Y'); ?>
                    <div class="cell large-4 petbox">
                        <div>
                            <img src="<?php the_field('pet_image'); ?>" />
                            <span>
                                <?php the_field('pet_name'); ?><i>
                                    <?php echo $post_date; ?>
                                </i>
                            </span>
                            <div class="blurb text-left">
                                <?php the_field('blurb'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <a href="about/precision-pets" class="button">See all Pets!</a>
    </div>
    </div>
</section>

<script type="text/javascript">
    jQuery(document).ready(function ($) {



        // $('#quote').owlCarousel({
        //     loop:true,
        //     margin:10,
        //     nav:true,
        //     items:1,
        //     autoplay:true,
        //     navText : ["<i class='fal fa-chevron-circle-left'></i>","<i class='fal fa-chevron-circle-right'></i>"]
        // });

        $('#quote').slick({
            dots: true,
            infinite: true,
            speed: 600,
            fade: false,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 5000

        });

        // $('#hero').owlCarousel({
        //     loop:true,
        //     margin:0,
        //     nav:true,
        //     items:1,
        //     // autoplayTimeout:8000,
        //     // autoplay:true,
        //     navText : ["<i class='fal fa-chevron-circle-left'></i>","<i class='fal fa-chevron-circle-right'></i>"]
        // });

        $('#hero').slick({
            dots: false,
            infinite: true,
            speed: 600,
            fade: false,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 5000
        });

        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 50, // default
            mobile: false, // default
            live: true // default
        })
        wow.init();
    });
</script>
<?php get_footer(); ?>



<!--             </div>
            <?php if ($pet_query->have_posts()): ?>
            <?php while ($pet_query->have_posts()):
                $pet_query->the_post(); ?>
            <div class="cell large-6 brad click">
                <img src="<?php the_field('pet_image'); ?>" />
            </div>
            <div class="cell large-4 text-center">
                <div class="petname">
                    <div class="pet">
                        <?php the_field('pet_name'); ?>
                    </div>
                </div>
                <a href="/about/precision-pets/" class="petlink">See all Precision Pets</a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div> -->