<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta name="description" content=" "><!-- <<<<   Add a brief decription of your app -->

<meta name="copyright" content="<?php echo date("Y") ?>, Name" />

<title>Spring - Screenshots</title>

<!----  User-Scalable = NO  ---->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

<!----  Web  ---->
<link href="../site/css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../site/js/swipebox/swipebox.css">

</head>


<body>
<div class="mobile_navigation_spacer"></div>

<div class="wrapper">


<!----  header  ---->
<div class="header">

<a href="/" class="logo"></a>

<div class="navigation">

<? include '../site/includes/navigation.php' ?>

</div>
</div>
<!----  header end  ---->


<!----  support page header  ---->
<div class="screenshots_page_header">

<h1>App Screenshots</h1>

</div>
<!----  support page header end ---->


<div class="inner_page screenshots_page">

<!----  screenshot heading text ---->

<div class="screenshots_page_inner_text">
<p>Curabitur vel hendrerit nisi. Integer tellus leo, consectetur et vestibulum ut, tincidunt eget nisi. Praesent nec risus eu lacus posuere accumsan eget eu diam. In impeestrius in auctor tellus ultrices. Suspendisse tempus pellentesque malesuada. Donec at egestas diam. Nulla facilisi. Vivamus porta malesuada neque, ut mollis lacus mollis eget.</p>
</div>

<!----  screenshot heading text end ---->



<div class="screenshots">

<!----  screenshots ---->


<ul>




<!----  screenshot 1 ---->
<li>
<a href="../site/images/screenshots/screens/1.png" class="swipebox" title="Contacts"><img src="../site/images/screenshots/screens_preview/1.png" width="228" height="405" /><p class="screenshot_image_overlay"><p class="screenshot_overlay_icon"></p></p></a>

<h2>Contacts</h2>
</li>







<!----  screenshot 2 ---->
<li>
<a href="../site/images/screenshots/screesn/2.png" class="swipebox" title="Messages"><img src="../site/images/screenshots/screens_preview/2.png" width="228" height="405" /><p class="screenshot_image_overlay"><p class="screenshot_overlay_icon"></p></p></a>

<h2>Messages</h2>
</li>






<!----  screenshot 3 ---->
<li>
<a href="../site/images/screenshots/screens/3.png" class="swipebox" title="Call Screen"><img src="../site/images/screenshots/screens_preview/3.png" width="228" height="405" /><p class="screenshot_image_overlay"><p class="screenshot_overlay_icon"></p></p></a>

<h2>Call Screen</h2>
</li>






<!----  screenshot 4 ---->
<li>
<a href="../site/images/screenshots/screens/4.png" class="swipebox" title="Home Screen"><img src="../site/images/screenshots/screens_preview/4.png" width="228" height="405" /><p class="screenshot_image_overlay"><p class="screenshot_overlay_icon"></p></p></a>

<h2>Home Screen</h2>
</li>





<!----  screenshot 5 ---->
<li>
<a href="../site/images/screenshots/screens/5.png" class="swipebox" title="Your Profile"><img src="../site/images/screenshots/screens_preview/5.png" width="228" height="405" /><p class="screenshot_image_overlay"><p class="screenshot_overlay_icon"></p></p></a>

<h2>Your Profile</h2>
</li>





<!----  screenshot 6 ---->
<li>
<a href="../site/images/screenshots/screens/6.png" class="swipebox" title="Contacts List"><img src="../site/images/screenshots/screens_preview/6.png" width="228" height="405" /><p class="screenshot_image_overlay"><p class="screenshot_overlay_icon"></p></p></a>
<h2>Contacts List</h2>
</li>


</ul>

<!----  screenshots end ---->


</div>
</div>


<!----  footer ---->

<? include '../site/includes/footer.php' ?>

<!----  footer end ---->

</div>


<!----  scripts ---->
<script src="../site/js/jquery-1.9.1.min.js"></script>
<script src="../site/js/site.js"></script>
<script src="../site/js/swipebox/ios-orientationchange-fix.js"></script>
<script src="../site/js/swipebox/jquery.swipebox.min.js"></script>

<!----  swipebox images & screenshots overlay---->
<script type="text/javascript">
jQuery(function($) {
$(".swipebox").swipebox();
});

$('.screenshots ul li a').hover(

function(){

$(".screenshot_image_overlay",this).fadeIn(200);
$(".screenshot_overlay_icon",this).fadeIn(200);
},
function() {
$(".screenshot_image_overlay",this).fadeOut(200);
$(".screenshot_overlay_icon",this).fadeOut(200);

});

</script>

</body>
</html>