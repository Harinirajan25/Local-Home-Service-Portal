<?php include_once "./includes/header.php"; ?> 
<style> 
body{ 
background-image: url('images/feeds.jpg'); /* Replace 'path_to_your_image.jpg' with 
the actual path to your background image */ 
background-size: cover; 
background-position: center; 
background-repeat: no-repeat; 
} 
</style> 
<!-- Site Wrapper --> 
<div id="app" class="nt-theme-wrapper"> 
<main role="main"> 
<?include_once "msgemp.php";?> 
<div class="agro-section-wrapper"><div class="nt_clearfix"></div><div class="agro
section-wrapper vc_custom_1624359769953"><div class="nt-column"><div 
class="nt-shortcode-wrapper "><div class="section section--no-pb about--1 md-hide
bg item_65ccdbac2017b" data-res-css="  .section.item_65ccdbac2017b .section
heading .__title {font-size:36px;}            "><div class="container"><div 
class="row"><div class="col-12 col-lg-6 col-xl-8"><!--noptimize--><script 
type="text/javascript"> 

var captainformCustomVars = {}; 
var captainformThemeStyle = {}; 
var append_element = append_element || function(e){if(void 
0==e)return!1;if(!("elementType"in e))return!1;var 
n=null;if(n=e.following?e.following.parentElement:e.inside?e.inside:e.replacing?e.rep
lacing.parentElement:"script"==e.elementType?document.head:document.body,null=
=n)return!1;var l=document.createElement(e.elementType);delete 
e.elementType,l=jQuery.extend(l,e),e.replacing?n.replaceChild(l,e.replacing):n.appen
dChild(l)}; 
var captainformDomReady = captainformDomReady || function(e){var 
t=!1,n=function(){document.addEventListener?(document.removeEventListener("DO
MContentLoaded",d),window.removeEventListener("load",d)):(document.detachEve
nt("onreadystatechange",d),window.detachEvent("onload",d))},d=function(){t||!docu
ment.addEventListener&&"load"!==event.type&&"complete"!==document.readyStat
e||(t=!0,n(),e())};if("complete"===document.readyState)e();else 
if(document.addEventListener)document.addEventListener("DOMContentLoaded",d)
,window.addEventListener("load",d);else{document.attachEvent("onreadystatechange
",d),window.attachEvent("onload",d);var 
o=!1;try{o=null==window.frameElement&&document.documentElement}catch(a){}
o&&o.doScroll&&!function c(){if(!t){try{o.doScroll("left")}catch(d){return 
setTimeout(c,50)}t=!0,n(),e()}}()}}; 
var readyStateOverflowInterval; 
</script> 
<!--/noptimize--><div id="1328691"> 
<div class="container" style="margin-top: 100px; max-width: 800px;margin-bottom: 
60px;"><div class="card-title"> 
<h3 class="text-center" style="color: #ffffff;">FEEDBACK FORM</h3> 
</div> 
<hr> 
<form action="feedadd.php" method="post" enctype="multipart/form-data"> 
<div class="form-group"> 
 
<label for="" style="color: #ffffff;">1. Does this website fulfill your needs ? 
</label><br> 
<input type="radio" id="feed1" name="feed1" value="Yes"> Yes 
<input type="radio" id="feed1" name="feed1" value="No"> No 
</div><br> 
<div class="form-group"> 
<label for="" style="color: #ffffff;">2. How is the presentation of this website 
?</label><br> 
<input type="radio" id="feed2" name="feed2" value="Yes"> Yes 
<input type="radio" id="feed2" name="feed2" value="No"> No 
</div><br> 
<div class="form-group"> 
<label for="experience" style="color: #ffffff;">3.Overall Experience:</label> 
<select id="experience" name="experience" required> 
<option value="" disabled selected>Select an option</option> 
<option value="excellent">Excellent</option> 
<option value="good">Good</option> 
<option value="average">Average</option> 
<option value="poor">Poor</option> 
</select> 
</div><br> 
<div class="form-group"> 
<label for=""style="color: #ffffff;">4.Name</label> 
<input id="name" name="name" type="text" class="form-control" 
placeholder="Name" required> 
</div><br> 
<div class="form-group"> 
<label for="" style="color: #ffffff;">5.Contact No.</label> 
<input id="contact" 
oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
name="contact" type="text" class="form-control" placeholder="Contact" 
minlength="10" 
maxlength="10" required><br> 

<div class="form-group"> 
<label for=""style="color: #ffffff;">6.email </label> 
<input id="email" name="email" type="email" class="form-control" 
placeholder="Enter email" 
required><br> 
</div> 
<div class="control-group"> 
<label class=""style="color: #ffffff;">11. For any suggestion and comments please 
you can write to us.</label><br> 
<textarea type="text" rows="7" style="height:100px;"  
name="feedback_suggestion"></textarea> 
</div><br> 
<div class="form-group"> 
<button style="margin-top: 20px;" class="btn btn-block btn-primary" type="submit" 
name="submit" 
id="submit">SUBMIT</button> 
</form></div> 
</div> 
<!--noptimize--><!--/noptimize--></div></div></div></div></div></div></div><div 
class="nt_clearfix"></div> 
</main><?php include_once "./includes/footer.php"; ?>