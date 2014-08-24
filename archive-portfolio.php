<?php get_header(); ?>
<div class="portfolioSection clearfix">
  <div class="innerWrapper">
    <div class="left">
    
      <div class="portfolioArchiveWrapper clearfix">

      <div class="portfolioArchiveTitle">
            <h2>portfolio</h2> 
          </div> <!-- portfolioArchiveTitle -->
      
        
       
        <div class="portfolioDisplay clearfix">
          <div class="portfolioDisplayCover">


  
            <?php if ( have_posts() ) the_post(); ?>
          
          
             <?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	          rewind_posts();

	/* Run the loop for the archives page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-archives.php and that will be used instead.
	 */
            get_template_part( 'loop', 'portfolio' );
            ?>

          </div> <!-- portfolioDisplayCover -->  
        </div> <!-- portfolioDisplay -->
      </div> <!-- portfolioArchiveWrapper -->

    </div><!--/left-->	
    <?php get_sidebar(); ?>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>