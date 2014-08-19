<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<?php // Load Meta ?>
  <meta charset="<?php bloginfo('charset');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />

  <title><?php wp_title('| ', true, 'right');?></title>
<?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css"  href="<?php bloginfo('stylesheet_url');?>" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/mq.css">

<?php	if (is_singular() && get_option('thread_comments')) {wp_enqueue_script('comment-reply');
}

wp_head();
?>

	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

  <!-- Load jQuery and our own scripts file -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory');?>/js/jQuery.js"><\/script>')</script>
	<script src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>
</head>


<body <?php body_class();?>>

<div class="header">
  <div class="innerWrapper">
    <div class="menuWrapper">
      <ul class="dropDown">
        <li class="dropDownLI"><a href="<?php echo home_url('/');?>" title="<?php echo esc_attr(get_bloginfo('name', 'display'));?>" rel="home">
<?php bloginfo('name');?></a>


        <li><?php wp_nav_menu(array('container' => false, 'menu' => 'header'));?></li>

      </ul> <!-- dropDown -->
    </div> <!-- munuWrapper -->




  </div> <!-- /.innerWrapper -->
</div><!--/.header-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>

$(document).ready(function(){
  // $('.dropDownLI').mouseenter(function(){
  //   $('.dropDown ul').slideDown();
  // });

  // $('dropDownLi').mouseout(function(){
  //   $('.dropDown ul').slideUp();
  // });

// $('.dropDownLI').hover(function(){
//     $('.dropDown ul').slideDown()
// }, function(){
//     $('.dropDown ul').slideUp()
// });

$('.menuWrapper').hover(function(){
    $('.dropDown ul').slideDown("slow")
}, function(){
    $('.dropDown ul').slideUp()
});

});

</script>
