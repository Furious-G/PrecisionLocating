<?php 
/*
Template Name: Testimonials
*/



get_header(); ?>
<style type="text/css">
.visi {
    visibility: hidden;
}
</style>
<div class="titleBar">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-padding-x">
            <div class="large-12 cell">
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<?php 
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
                        query_posts( array(
                                'nopaging'               => false,
                                 'paged'                  => $paged,
                                'posts_per_page'         => '20',
                                'post_type'              => 'testimonial',
)); ?>
<div class="content grid-container testimonials">
    <div class="inner-content grid-x grid-margin-x grid-padding-x grid-padding-y">
        <main class="main large-12 cell services" role="main">
            <section>
                <div class="grid-x grid-padding-x mb-40">
                    <div class="cell large-9">
                        <?php the_content(); ?>
                    </div>
                    <div class="cell large-3 text-right align-self-middle">
                        <a href="/contact/submit-a-testimonial" style="margin:0" class="button">Submit a Testimonial</a>
                    </div>
                </div>
                <div class="grid-x large-up-3 align-center testbox ">
                    <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
                    <div class="cell item">
                        <div class="itemBox">
                            <div>
                                &ldquo;
                                <?php the_field( 'testimonial', false, false ); ?>&rdquo;
                            </div>
                            <span class="auth">
                                <?php the_field( 'name' ); ?>
                                <?php if( get_field('titlecompany') ): ?>
                                <i>,
                                    <?php the_field( 'titlecompany' ); ?></i>
                            </span>
                            <?php endif ?>
                        </div>
                    </div>
                    <?php endwhile ?>
                    <?php endif?>
                    <div class="page-load-status text-center">
                        <p class="infinite-scroll-request">Loading...</p>
                    </div>
                    <div class="pagi">
                        <?php joints_page_navi(); ?>
                    </div>
                </div>
            </section>
        </main> <!-- end #main -->
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php include 'includes/cta.php' ?>
<?php get_footer(); ?>
<script>
jQuery(document).ready(function($) {




    var $grid = $('.testbox').isotope({
        itemSelector: '.item',
        masonry: {

        }
    });

    // get Isotope instance
    let iso = $grid.data('isotope');

    // init Infinite Scroll

    $('.testbox').infiniteScroll({
        path: 'ul.pagination a:last-child', // hack
        append: '.item',
        outlayer: iso,
        history: 'push',
        status: '.page-load-status',
        hideNav: '.pagi',
    });



    setTimeout(function() {

        $grid.isotope('layout');

    }, 600);



});
</script>