<?php

/*
	Template Name: Full Page, No Sidebar
*/ 

get_header();  ?>

<div class="mainBlurb">
      <p>Jesse W Gray</p>
      <p>Front-End Web Developer</p>
      <p>Toronto, Canada</p>
    </div> <!-- mainBlurb --> 
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

<div class="newBackground">

</div> <!-- newBackground -->

<div class="skillsOuterWrapper">
  <div class="skillsWrapper clearfix">

   <div class="skillsDevelopment">
     <h1>Development</h1>
      <p>HTML5</p>
      <p>CSS3 / Sass</p>
      <p>Wordpress</p>
      <p>Responsive Design</p>
      <h4>Familiar with:</h4>
      <p>JavaScript / jQuery</p>
      <p>APIs</p>
      <p>Ajax</p>
      
    </div> <!-- skillsDevelopment -->

    <div class="skillsWorkflow">
      <h1>Workflow</h1>
      <p>Command Line</p>
      <p>Sublime Text</p>
      <p>Grunt</p>
      <p>Cross Browser Testing</p>

    </div> <!-- skillsWorkflow -->

    <div class="skillsOther">
     <h1>Other</h1> 
     <p>Final Cut Pro</p>
     <h4>Familiar with:</h4>
     <p>Photoshop</p>
    </div> <!-- skillsOther -->
  </div> <!-- skillsWrapper -->
 </div> <!-- skillsOuterWrapper  -->
<?php get_footer(); ?>