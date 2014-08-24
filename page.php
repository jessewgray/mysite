<?php get_header();  ?>

<div class="contactSection">
<div class="contactWrapper">

  <div class="innerWrapper">
    <div class="left">

      
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        
       	<div class="contactText"> 
			<?php the_content(); ?>
		</div> <!-- contactText -->
      <?php endwhile; // end the loop?>
    </div>
    <!-- <?php get_sidebar(); ?> -->
  </div> <!-- /.innerWrapper -->

</div> <!-- contactWrapper -->
</div> <!-- /.contactSection -->
<?php get_footer(); ?>