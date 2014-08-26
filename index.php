<?php get_header();?>
<div class="blogSection clearfix">
  <div class="innerWrapper">
    <div class="left">
    <div class="blogWrapper";>

        
    	   <div class="titleBlog">
    		  <h2>blog</h2>
    	   </div> <!-- titleBlog -->
        <div class="blogArchive clearfix">  	
    	   
			 <?php get_template_part('loop', 'index');?>

		  

        </div> <!-- blogArchive  -->
	</div> <!-- blogWrapper -->
</div> <!--/left-->
<!-- <?php get_sidebar();?>-->
</div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer();?>
