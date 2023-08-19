<?php
/*
Template Name: Apply Job
*/

get_header();
$applyTitle = $_GET['title'];
?>

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
          <main class="main large-12 cell contact apply" role="main">
               <section>
                    <h1 class="alt">
                         <?php echo $applyTitle; ?>
                    </h1>
                    <?php the_content(); ?>
               </section>
          </main> <!-- end #main -->
     </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>