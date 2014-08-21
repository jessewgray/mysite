<?php get_header(); ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">

    <div class="porfolioArchiveWrapper">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      	<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<?php the_field('short_desc'); ?>

		<div class="images">
			<?php while( has_sub_field('images') ): ?>

				<div class="image">	
					<p><?php the_sub_field('caption'); ?></p>
					<?php $image = get_sub_field('image'); ?>
					<!-- <pre><?php print_r($image);?></pre> -->
  					<img src="<?php echo $image['sizes']['medium'] ?>">
				</div> <!-- image -->
			<?php endwhile; ?>
		</div> <!-- images -->

		
        
      <?php endwhile; // end of the loop. ?>
     </div> <!-- portfolioArchiveWrapper  -->
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>