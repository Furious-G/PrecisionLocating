<?php 
/*
Template Name: Submit Testimonial
*/

get_header(); ?>
<div class="titleBar">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-padding-x">
            <div class="large-12 cell">
                <h1>
                    <?php
         $parent_title = get_the_title($post->post_parent);
         echo $parent_title;?>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="content grid-container">
    <div class="inner-content grid-x grid-margin-x grid-padding-x grid-padding-y">
        <main class="main large-12 cell" role="main">
            <section class="contact">
                <div class="inner-content grid-x  grid-padding-x">
                    <div class="large-8 cell">
                        <h1 class="alt">
                            Submit a Testimonial
                        </h1>
                        <?php echo do_shortcode( '[contact-form-7 id="234" title="Testimonial"]' ); ?>
                    </div>
                    <div class="large-4 cell photoside">
                        <div class="sideBox">
                            <h5>Contact Information</h5>
                            <br>
<!--                             Address:
                            <br>
                            <?php the_field('address', 'options'); ?><br>
                            <?php the_field('city', 'options'); ?>,
                            <?php the_field('state', 'options'); ?>
                            <?php the_field('zip_code', 'options'); ?>
                            <br><br> -->
                            Phone:
                            <?php the_field('phone_number', 'options'); ?><br>
                            FAX:
                            <?php the_field('fax', 'options'); ?>
                            <br><br>
                            Email: <a href="mailto:<?php the_field('contact_email', 'options'); ?>">
                                <?php the_field('contact_email', 'options'); ?>
                            </a>
                        </div>
                    </div>
            </section>
        </main> <!-- end #main -->
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>