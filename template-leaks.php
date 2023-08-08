<?php
/*
Template Name: Leaks
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
                            <h5><i class="fa-solid fa-faucet-drip"></i> Water Leaks</h5>
                            Precision Locating has extensive experience and state-of-the-art electronic line and leak
                            detection equipment to locate subsurface leaks or leaks hidden in walls and ceilings.
                        </div>
                        <a href="/leaks/water-leaks/" class="button">Learn More</a>
                    </div>
                    <div class="cell serviceBox">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/gasleak2.jpg'; ?>" />
                            <h5><i class="fa-solid fa-fire-flame-simple"></i> Gas Leaks</h5>
                            Precision Locating locates gas leaks (above and below ground).Below ground gas leaks are
                            located by introducing helium into the system.
                        </div>
                        <a href="/leaks/gas-leaks/" class="button">Learn More</a>
                    </div>
                    <div class="cell serviceBox">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/sewer1.jpg'; ?>" />
                            <h5><i class="fa-solid fa-pipe-valve"></i> Sewer and Drain Leaks</h5>
                            Precision Locating can locate leaks in the sewer and drain system in residential and
                            commercial buildings, in any phase of construction or in occupied homes or buildings.
                        </div>
                        <a href="/leaks/sewer-and-drain-leaks/" class="button">Learn More</a>
                    </div>
                </div>
            </section>
        </main> <!-- end #main -->
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php include 'includes/cta.php' ?>
<?php get_footer(); ?>