<?php
/*
Template Name: Sitemap
*/

get_header(); ?>
<div class="titleBar">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-padding-x">
            <div class="large-12 cell">
                <span>
                    <?php
                    $parent_title = get_the_title($post->post_parent);
                    echo $parent_title; ?>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="content grid-container">
    <div class="inner-content grid-x grid-margin-x grid-padding-x grid-padding-y">
        <main class="main large-12 cell" role="main">
            <section>
                <div class="inner-content grid-x  grid-padding-x">
                    <div class="large-12 cell servicepad">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <?php get_template_part('parts/loop', 'page'); ?>

                        <?php endwhile;
                        endif; ?>
                    </div>
            </section>
        </main> <!-- end #main -->
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php include 'includes/cta.php' ?>
<?php get_footer(); ?>