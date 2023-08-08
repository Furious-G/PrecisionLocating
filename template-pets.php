<?php
/*
Template Name: Pets
*/

get_header(); ?>
<div class="titleBar">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-padding-x">
            <div class="large-12 cell">
                <h1>
                    <i class="fa-solid fa-paw"></i>
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : '1';
query_posts(
    array(
        'nopaging' => false,
        'paged' => $paged,
        'posts_per_page' => '15',
        'post_type' => 'pet',
    )
); ?>
<div class="content grid-container testimonials">
    <div class="inner-content grid-x grid-margin-x grid-padding-x grid-padding-y">
        <main class="main large-12 cell services" role="main">
            <div class="mb-20 large-12">
                <?php the_content(); ?>
            </div>
            <section>
                <div class="grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y large-up-3  petGrid">
                    <?php
                    // $count = $_GET['count'];
                    
                    // if (isset($count)) {
                    // $i = $count;
                    // } else {
                    $i = 0;
                    // }
                    // echo $_GET['count'];
                    ?>
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <?php $i++; ?>
                            <?php $post_date = get_the_date('F j, Y'); ?>
                            <div class="cell petbox click" data-open="Modal<?php echo $i; ?>">
                                <div>
                                    <img src="<?php the_field('pet_image'); ?>" /><?php echo esc_attr($alt); ?>
                                </div>
                                <span>
                                    <?php the_field('pet_name'); ?><i>
                                        <?php echo $post_date; ?>
                                    </i>
                                </span>

                                <div class="blurb">
                                    <?php the_field('blurb'); ?>
                                </div>
                            </div>
                            <div class="reveal small pet-modal" data-index="<?php echo $i; ?>" id="Modal<?php echo $i; ?>"
                                data-reveal>
                                <img src="<?php the_field('pet_image'); ?>" />
                                <span>
                                    <?php the_field('pet_name'); ?>
                                </span>
                                <i>
                                    <?php echo $post_date; ?>
                                </i>
                                <div class="blurb">
                                    <?php the_field('blurb'); ?>
                                </div>
                                <button class="close-button" data-close aria-label="Close modal" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endwhile ?>
                    <?php endif ?>
                </div>
                <!--                     <div class="page-load-status text-center" style="padding:40px;">
                        <p class="infinite-scroll-request">Loading...</p>
                    </div> -->
                <div class="pagi text-center">
                    <?php joints_page_navi(); ?>
                </div>
            </section>
        </main> <!-- end #main -->
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php include 'includes/cta.php' ?>
<?php get_footer(); ?>
<script>
    jQuery(document).ready(function ($) {




        // jQuery
        // $('.petGrid').infiniteScroll({
        //     path: '.next',
        //     append: '.petbox',
        //     status: '.scroller-status',
        //     status: '.page-load-status',
        //     history: false,
        //     status: '.page-load-status',
        //     hideNav: '.pagi',
        // });



        // jQuery
        $('.petGrid').on('append.infiniteScroll', function (event, body, path, items, response) {
            // myfunction();
            Foundation.reInit(['reveal']);

        });

        // $('.petGrid').infiniteScroll({
        //     // Configure the Infinite Scroll options here
        //     // For example:
        //     path: '.next',
        //     append: '.petbox',
        //     history: false,
        // });

        function myfunction() {
            var type = $('.pet-modal').last().attr('data-index');
            var oldURL = window.location.protocol + "//" + window.location.host + window.location.pathname;
            var newUrl = oldURL + "?count=" + type;
            if (window.history != 'undefined' && window.history.pushState != 'undefined') {
                window.history.pushState({ path: newUrl }, '', newUrl);
            }
            return false;
        }

    });
</script>