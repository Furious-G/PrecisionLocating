<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
<footer class="footer" role="contentinfo">
    <div class="grid-container">
        <div class="inner-footer grid-x align-justify">
            <div class="mobCenter">
                <h5>Precision Locating</h5>
<!--                 <div class="addy">
                    <?php the_field('address', 'options'); ?><br>
                    <?php the_field('city', 'options'); ?>, 
                    <?php the_field('state', 'options'); ?>
                     <?php the_field('zip_code', 'options'); ?><br>
                </div> -->
                    <?php the_field('city', 'options'); ?>, 
                    <?php the_field('state', 'options'); ?>
                     <?php the_field('zip_code', 'options'); ?><br>
                <span class="num" style="margin-top:10px;">
                    Phone: <a href="tel:<?php the_field('phone_number', 'options'); ?>"><?php the_field('phone_number', 'options'); ?></a>
                </span>
<!--                 <span class="num">
                    Fax: <?php the_field('fax', 'options'); ?>
                </span> -->
            </div>
            <div class="mobCenter">
                <h5 class="text-center">Quick Links</h5>
                <nav>
                <?php joints_footer_links(); ?>
            		</nav>
            </div>
            <div class="badges text-center">
            	<a href="https://www.bbb.org/us/az/gilbert/profile/utility-locating/precision-locating-1126-27006038" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/images/bbb.png'; ?>" width="100" /></a>
                
                <div class="text-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/ccards.png'; ?>" width="150" />
            	</div>
            </div>
        </div> <!-- end #inner-footer -->
    </div><!-- end frid container -->
</footer> <!-- end .footer -->
<div class="subFooter">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-padding-x sub-inner">
            <div class="large-6 cell">
                <span class="source-org copyright">&copy;
                    <?php echo date('Y'); ?>
                    <?php bloginfo('name'); ?>.</span> | <a href="sitemap">Sitemap</a> | <a href="privacy-policy">Privacy Policy</a>
            </div>
        </div>
    </div>
</div>
</div> <!-- end .off-canvas-content -->
</div> <!-- end .off-canvas-wrapper -->
<?php wp_footer(); ?>
</body>

</html> <!-- end page -->