<?php get_header();  ?>

<div class="section">
  <div class="innerWrapper">
    <div class="left">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        
<!-- 
        <div class="aboutPic">
          <?php the_content(); ?>
        </div>

        <div class="aboutText">
         <?php the_content(); ?>

        </div> -->

      <?php endwhile; // end the loop?>
    </div>
    <!-- <?php get_sidebar(); ?> -->
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>