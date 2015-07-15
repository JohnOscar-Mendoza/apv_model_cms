<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Press Blog Theme - Gallery</title>
<meta name="keywords" content="press blog theme, gallery, free css template, blogger, templatemo" />
<meta name="description" content="Press Theme Gallery Page - Free Blog Template for everyone" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">

<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $("#myTable").DataTable();
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->

</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    
    	<div id="site_title">
            <h1><a href="http://www.templatemo.com" target="_parent"><span>MODEL CMS</span></a></h1>
      	</div> <!-- end of site_title -->
        
        <div id="templatemo_menu">
            <ul>
                <li><a href="login.php">Log-in</a></li>
                <li><a href="gallery.php" class="current">Gallery</a></li>
                
            </ul>    	
        </div> <!-- end of templatemo_menu -->
    
    </div>
</div> <!-- end of templatemo_header -->

<div id="templatemo_middle_wrapper">
	<div id="templatemo_middle">
    	
        <div id="templatemo_content">
        
            <div id="content_box_wrapper">
                <table id="myTable">

                    <th>#</th><th>Name</th><th>Address</th><th>Facebook</th><th>Twitter</th><th>Instagram</th><th>Image</th><th>&nbsp;</th>

                </table>

            </div> <!-- content_box_wrapper -->
                    
        </div> <!-- end of templatemo_content -->
            
		
        
        <div class="cleaner"></div>    
    </div> <!-- end of templatemo_content -->
    
    <div id="templatemo_footer">
    
        <div class="col_w210">
            <h4>Follow Us</h4>
            <p>Social Networks<a href="aboutus.html"></a></p>
            
            <ul id="social_box">
                <li><a href="#"><img src="images/facebook.png" alt="facebook" /></a></li>
                <li><a href="#"><img src="images/twitter.png" alt="twitter" /></a></li>
                <li><a href="#"><img src="images/linkedin.png" alt="linkin" /></a></li>
                <li><a href="#"><img src="images/technorati.png" alt="technorati" /></a></li>
                <li><a href="#"><img src="images/myspace.png" alt="myspace" /></a></li>                
            </ul>
            
        </div>
        
        <div class="col_w210">
            <h4>Our Pages</h4>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog_post.html">Blog</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html" class="last">Contact</a></li>
            </ul>  
 
        </div>
        
        
        
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
    
    <div id="templatemo_copyright">
        Copyright © 2048 <a href="#">Your Company Name</a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </div>
    
</div> <!-- end of templatemo_content_wrapper -->

<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
