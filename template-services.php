<?php 
/*
Template Name: Services
*/

get_header(); ?>
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
<div class="content grid-container">
    <div class="inner-content grid-x grid-margin-x grid-padding-x grid-padding-y">
        <main class="main large-12 cell services" role="main">
            <section>
                <div class="grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y large-up-3 align-center">
                    <div class="cell serviceBox">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/water_leak.jpg'; ?>" />
                            <h5>Water Leak Detection</h5>
                            Precision Locating has extensive experience and state-of-the-art electronic line and leak detection equipment to locate subsurface leaks or leaks hidden in walls and ceilings.
                        </div>
                        <a href="/leaks/water-leaks/" class="button">Learn More</a>
                    </div>
                    <div class="cell serviceBox">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/smokemachines.jpg'; ?>" />
                            <h5>Smoke Testing</h5>
                            Smoke testing is used when the source of the leak is concealed or cannot be located by any electronic means.
                        </div>
                        <a href="/services/smoke-testing/" class="button">Learn More</a>
                    </div>
                    <div class="cell serviceBox">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/sewer.jpg'; ?>" />
                            <h5>Video Inspection and Sewer Locating</h5>
                            Precision Locating provides our customers with unbiased diagnostic information as to the condition of sewer and drain lines.
                        </div>
                        <a href="/services/video-inspection-and-sewer-locating/" class="button">Learn More</a>
                    </div>
                    <div class="cell serviceBox">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/thermal.jpg'; ?>" />
                            <h5>Thermal Imaging</h5>
                            Thermal imaging is an efficient, non-destructive testing method for performing money-saving energy audits and detecting problems.
                        </div>
                        <a href="/services/thermal-imaging/" class="button">Learn More</a>
                    </div>
                    <div class="cell serviceBox">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posttension.jpg'; ?>" />
                            <h5>Post Tension Cable Locating</h5>
                            Precision Locating accurately locates post tension cables using ground penetrating radar. 
                        </div>
                        <a href="/services/post-tension-cables-and-slab/" class="button">Learn More</a>
                    </div>
                </div>
            </section>
        </main> <!-- end #main -->
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php include 'includes/cta.php' ?>
<?php get_footer(); ?>


