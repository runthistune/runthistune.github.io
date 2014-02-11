<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta name="description" content=" "><!-- <<<<   Add a brief decription of your app -->

<meta name="copyright" content="<?php echo date("Y") ?>, Name" />

<title>Spring - iPhone App Template</title>

<!----  User-Scalable = NO  ---->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

<!----  Web  ---->
<link href="site/css/styles.css" rel="stylesheet" type="text/css" />

</head>


<body>

<div class="mobile_navigation_spacer"></div>



<div class="wrapper">
  
  
  <!----  header  ---->
  <div class="header">

<a href="/" class="logo"></a>

<div class="navigation">

<? include 'site/includes/navigation.php' ?>

</div>
</div>
<!----  header end  ---->


<!----  home page header  ---->
<div class="home_page_header">
  <div class="header_loading_icon"></div>

<div class="header_left_column">

<h1>Introducing our <strong>super duper</strong> iOS App, available now!</h1>
<a href="#" class="appstore_button"></a>

</div>

<div class="header_iphone_full"></div>
<div class="header_iphone_half"></div> 

</div>
<!----  home page header end ---->


<div class="inner_page">

<!----  toggle button  ---->

<div class="toggle_button_outer"><a href="javascript:;" class="features_button active">Some Great Features</a><a href="javascript:;" class="trailer_button">Watch our trailer</a></div>

<!----  toggle button end ---->

<div class="home_page_sections_wrapper">






<!----  home page section one ---->

<div class="home_page_section one">

<div class="section_left">
<div class="iphone_one_section_one"></div>

</div>

<div class="section_right">

<h2>Log your location & share it with others</h2>
<p>Explain this fearure in a bit more deatail with this sub-heading</p>

</div>

</div>

<!----  home page section one End ---->







<!----  home page section two ---->

<div class="home_page_section two">
<div class="home_page_section_two_waypoint"></div>

<div class="section_left">

<h2>Log your location & share it with others</h2>
<p>Explain this fearure in a bit more deatail with this sub-heading</p>

</div>

<div class="section_right">

<div class="iphone_section_two"></div>

</div>

</div>

<!----  home page section two end ---->







<!----  home page section three ---->

<div class="home_page_section three">
<div class="home_page_section_three_waypoint"></div>

<div class="section_full_width">

<h2>Take it with you every step of the way...</h2>

<div class="iphone_section_three"></div>

</div>

</div>

<!----  home page section three end ---->







<!----  home page section four ---->

<div class="home_page_section four">

<h3>Download this super awesome app now!</h3>

<a href="#" class="appstore_button"></a>

</div>

<!----  home page section four end ---->



</div>


<!----  youtube trailer ---->

<div class="trailer_wrapper">

<iframe width="100%" height="100%"  src="http://www.youtube.com/embed/kQxl8fuwrgs?feature=player_detailpage&showinfo=0&theme=light&color=red&vq=hd1080" frameborder="0" allowfullscreen></iframe>

</div>

<!----  youtube trailer  end ---->

</div>




<!----  footer ---->

<? include 'site/includes/footer.php' ?>

<!----  footer end ---->

</div>




<!----  scripts ---->
<script src="site/js/jquery-1.9.1.min.js"></script>
<script src="site/js/waypoints.min.js"></script>
<script src="site/js/site.js"></script>


</body>
</html>