<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<div class="sticky" id="top-bar-menu">
    <div class="grid-container">
        <div class="top-bar">
            <div>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/header_logo.png" class="headerLogo" alt="<?php bloginfo('name'); ?>"></a>
            </div>
            <div class="show-for-large text-center">
                <?php joints_top_nav(); ?>
            </div>
            <div class="show-for-large text-center">
                <span class="headerPhone"><a href="tel:<?php the_field('phone_number', 'options'); ?>"><i class="fa-solid fa-phone"></i> <?php the_field('phone_number', 'options'); ?></a></span>
            </div>
            <div class="hide-for-large">
                <ul class="menu">
                    <!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
                    <li><a data-toggle="off-canvas">
                            <?php _e( '<i class="fa-solid fa-bars"></i>', 'jointswp' ); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>