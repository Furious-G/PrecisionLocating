<?php
/*
Template Name: Standard
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
                    <div class="large-8 cell servicepad">
                        <h1 class="alt">
                            <?php the_title(); ?>
                        </h1>
                        <?php the_content(); ?>
                    </div>
                    <div class="large-4 cell photoside">
                        <!--                         <?php if ($post->post_parent == '46') : ?>
                        <div class="sideBox">
                            <h5>Leaks</h5>
                            <a href="/leaks/water-leaks/"><i class="fa-solid fa-faucet-drip"></i> Water Leaks</a>
                            <a href="/leaks/gas-leaks/"><i class="fa-solid fa-fire-flame-simple"></i> Gas Leaks</a>
                            <a href="/leaks/sewer-and-drain-leaks/"><i class="fa-solid fa-pipe-valve"></i> Sewer and Drain Leaks</a>
                        </div>
                        <?php endif ?> -->
                        <?php if (have_rows('images')) : ?>
                            <?php while (have_rows('images')) : the_row(); ?>
                                <figure>
                                    <img src="<?php the_sub_field('image'); ?>">
                                    <?php the_sub_field('description'); ?>
                                </figure>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php the_field('other_stuff'); ?>
                    </div>
            </section>
        </main> <!-- end #main -->
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php include 'includes/cta.php' ?>
<?php get_footer(); ?>