<?php
/*
Template Name: Job Listing
*/

get_header(); ?>
<div class="titleBar">
     <div class="grid-container">
          <div class="grid-x grid-margin-x grid-padding-x">
               <div class="large-12 cell">
                    <span>
                         <?php the_title(); ?></span>
               </div>
          </div>
     </div>
</div>
<div class="content grid-container">
     <div class="inner-content grid-x grid-padding-x grid-padding-y">
          <main class="main large-12 cell" role="main">
               <section>
                    <h1 class="alt">
                         <?php the_field('title'); ?>
                    </h1>
                    <?php the_content(); ?>
               </section>
               <a href="apply?title=Utility Infrastructure Technician" class="button large center">Apply Now!</a>
               <br><br>
          </main> <!-- end #main -->
     </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>