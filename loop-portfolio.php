<?php /* If there are no posts to display, such as an empty archive page */ ?>

<?php if ( ! have_posts() ) : ?>


<?php endif; // end if there are no posts ?>


<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	
			<section class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
			</section><!-- .entry-content -->
			<?php the_field('short_desc'); ?>
			<div class="images">
				<?php while( has_sub_field('images') ): ?>

					<div class="image">	
						<p><?php the_sub_field('caption'); ?></p>
						<?php $image = get_sub_field('image'); ?>
						<!-- <pre><?php print_r($image);?></pre> -->
	  					<img src="<?php echo $image['sizes']['large'] ?>">
					</div> <!-- image -->
				<?php endwhile; ?>
			</div> <!-- images -->


<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <?php /* If we have the wp-pagenavi plugin installed */  ?>
  <?php if(function_exists('wp_pagenavi')) : ?>
     <div class="pnavi"><?php wp_pagenavi(); ?></div>
  <?php /* Otherwise just give me regular next/prev links ?> */ ?>
  
  <?php else : ?>
          <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries')); ?></div>
          <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;')); ?></div>
  <?php endif; ?>

<?php endif; ?>
