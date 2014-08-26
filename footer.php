
<div class="footer">
	<div class="innerWrapper">
    <p><!-- &copy; --> jessewgray.com <?php echo date('Y'); ?></p>

	<div class="socialIcons">
		<a href="https://github.com/jessewgray"><div class="iconOne">

		</div></a> <!-- iconOne -->
		<a href="https://www.linkedin.com/profile/view?id=31735569&trk=nav_responsive_tab_profile"><div class="iconTwo">

		</div></a> <!-- iconTwo -->
		<a href="https://twitter.com/jessewgray"><div class="iconThree">

		</div></a> <!-- iconThree -->


	</div> <!-- socialIcons -->

    <?php wp_footer(); ?>
  </div>
</div>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID 
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>

$(document).ready(function(){
 

$('.menuWrapper').hover(function(){
    $('.dropDown ul').slideDown("slow")
}, function(){
    $('.dropDown ul').slideUp()
});


$('article.portfolio').hover(function(){
    $(this).find('.entry-content p').slideDown('slow');
    $(this).find('.image p').slideDown('slow');
}, function(){
    $(this).find('.entry-content p').slideUp('slow');
    $(this).find('.image p').slideUp('slow');

});



});

</script>


</body>
</html>