// Website Scripts

$(document).ready(function(){

<!----  logo & appstore glow ---->
$("a.appstore_button, a.logo, .mobile_navigation_icon").fadeTo("fast", 1.0); 
$("a.appstore_button, a.logo, .mobile_navigation_icon").hover(function(){
$(this).fadeTo("fast", 0.7); 
},function(){
$(this).fadeTo("fast", 1.0); 
});
});

<!----  fadein header ---->
$(window).bind("load", function() {
	
	
$(".header_loading_icon").addClass('animated bounceOut').fadeOut(400);;

$(".header_left_column, .header_iphone_half, .header_iphone_full").delay(500).fadeIn(300);

});

<!----  Trailer toggle button  ---->
$("a.features_button").click(function () {
$("a.features_button").addClass('active');
$("a.trailer_button").removeClass('active');
$(".trailer_wrapper").fadeOut(300);
$(".home_page_sections_wrapper").delay(300).fadeIn(300);
$(".section_right p, .section_right h2").show().addClass('animated fadeInRight');
setTimeout(function(){
$(".iphone_one_section_one").show().addClass('animated fadeInLeft');
}, 400)
setTimeout(function(){
$(".iphone_two_section_one").show().addClass('animated fadeInLeft');
}, 600)
});
$("a.trailer_button").click(function () {
$("a.trailer_button").addClass('active');
$("a.features_button").removeClass('active');
$(".home_page_sections_wrapper").fadeOut(300);
$(".trailer_wrapper").delay(300).fadeIn(300);
$(".iphone_one_section_one").removeClass('animated fadeInLeft').hide();
$(".section_right p, .section_right h2").removeClass('animated fadeInRight').hide();
});




<!----  mobile navigation  ---->
$(".mobile_navigation_icon").click(function () {
$(".mobile_navigation_spacer").slideToggle(300);
$(".navigation ul").fadeToggle(400);
$(".mobile_navigation_icon").toggleClass('active');


});




<!----  Waypoints (scroll animations)  ---->
$('.inner_page').waypoint(function(direction) {
$(".section_right p, .section_right h2").show().addClass('animated fadeInLeft');
$(".iphone_one_section_one").show().addClass('animated fadeInRight');
}, { offset: 0 })


$('.home_page_section_two_waypoint').waypoint(function(direction) {
$(".section_left p, .section_left h2").show().addClass('animated fadeInRight');
$(".iphone_section_two").show().addClass('animated fadeInLeft');
}, { offset: 0 })


$('.home_page_section_three_waypoint').waypoint(function(direction) {
$(".section_full_width").fadeIn(600);
$(".home_page_sections_wrapper .home_page_section.three .section_full_width h2").delay(600).fadeIn(600);
setTimeout(function(){
$(".iphone_section_three").show().addClass('animated bounceInUp');
}, 1200)
}, { offset: 0 })


