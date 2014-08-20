<?php

/*
	Template Name: Full Page, No Sidebar
*/ 

get_header();  ?>

<div class="section clearfix">
  <div class="innerWrapper" >
    <div class="full" >
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class="about">
          <h2><?php the_title(); ?></h2>


          <div class="aboutHead"> 
            <?php if ( has_post_thumbnail() ) {
             the_post_thumbnail('full');
           }  ?>
          </div> <!-- aboutHead --> 
        
          <div class="aboutText">
            <?php the_content(); ?>
          </div> <!-- aboutText -->

       </div> <!-- about --> 

      <?php endwhile; // end the loop?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>