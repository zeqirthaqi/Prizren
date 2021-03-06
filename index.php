<?php
session_start();
if(isset($_SEESION['username'])){
	header("location:Login.php");
}else{
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Prizreni im </title>
<!-- CSS FILES -->
<!--Template file default template.css-->
<link rel="stylesheet" href="css/template.css" type="text/css">
<!--Color file default none.css-->
<link rel="stylesheet" href="css/none.css" type="text/css">
<link rel="stylesheet" href="css/menus.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/responsive.css" type="text/css">
<!-- RTL - Right to left languages OFF (default) if you use css/style-rtl.css your site will be in RTL Mode   -->
<link rel="stylesheet" href="css/style-rtl-off.css" type="text/css">

<!-- JS FILES -->
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/responsive.js"></script>
<script type="text/javascript" src="js/uniform.js"></script>
<script type="text/javascript" src="js/script.js"></script>


<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<!-- Slideshow background param -->
<script type="text/javascript">
var slideshowSpeed = 5000;
var slideEffect = "fade";
jQuery(document).ready(function($) {$('headerimgs').bgimgSlideshow({photos : [{ 
			
			
			"image" : "images/slide/1.jpg",
			
		},{ 
				
			
			"image" : "images/slide/2.jpg",
			
		},{ 
			
			
			"image" : "images/slide/3.jpg",
			
		},]});});
		

</script>
<script src="js/jquery.vticker.min.js"></script>
<script>
  $(function() {
    $('#vTicker').vTicker();
  });
</script>
</head>
<body>
<!-- Background slideshow divs-->
<div id="headerimgs">
  <div id="headerimg1" style="z-index:-1" class="headerimg"></div>
  <div id="headerimg2" style="z-index:1" class="headerimg"></div>
</div>

<!-- Slideshow controls -->
<div class="fade">
  <div id="control" class="btn"></div>
</div>
<div id="back" class="btn-back"></div>
<div id="next" class="btn-next"></div>


<!-- end .Slideshow controls -->

<div id="wrap" class="clearfix">
  <div id="header-wrap">
    <div id="pre-header" class="clearfix">
      <div id="logo" class="logo"> 
        
        <!-- logo & slogan --> 
        <a href="#" title="Home"><img src="images/logo.png" alt="Home" /></a> 
        <!-- end. logo & slogan --> 
        
      </div>
      <div class="features_top_div"> 
        <!-- features top -->
	<div class="social_icons">
          <ul>
            <li><a href="http://www.facebook.com/facebook" target="_blank" rel="me"><img src="images/facebook.png" alt="Facebook"/></a></li>
            <li><a href="http://www.twitter.com/twitter" target="_blank" rel="me"><img src="images/twitter.png" alt="Twitter"/></a></li>
            <li><a href="https://plus.google.com/googleplus" target="_blank" rel="me"><img src="images/googleplus.png" alt="Twitter"/></a></li>
          </ul>
        </div>

        
        <!-- end .features top -->
        
        <div class="region region-header-features">
          
          <!-- /.block -->
          <div id="block-search-form" class="block block-search">
            <div class="content">
              <form onSubmit="if(this.search_block_form.value==&#039;Search&#039;){ alert(&#039;Please enter a search&#039;); return false; }" action="#" method="post" id="search-block-form" accept-charset="UTF-8">
                <div>
                  <div class="container-inline">
                    <div class="form-item form-type-textfield form-item-search-block-form">
                      <input title="Enter the terms you wish to search for." onBlur="if (this.value == &#039;&#039;) {this.value = &#039;Search&#039;;}" onFocus="if (this.value == &#039;Search&#039;) {this.value = &#039;&#039;;}" placeholder="K??rko" type="text" id="edit-search-block-form--2" name="search_block_form" value="K??rko" size="16" maxlength="128" class="form-text" />
                      <input alt="Search" type="image" id="edit-submit" name="submit" src="images/search-button.png" class="form-submit" />
                    </div>
                    <input type="hidden" name="form_id" value="search_block_form" />
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /.block --> 
        </div>
        <!-- /.region --> 
      </div>
    </div>
    <div class="top_line_tb"></div>
    <header id="header" class="clearfix">
      <nav id="navigation" role="navigation">
        <div id="main-menu">
          <ul class="menu">
            <li class="first leaf"><a href="index.html" style="width: 46px; padding-left: 21px;" title="Home" class="active">Home</a></li>
            <li class="leaf"><a href="#">Rreth Prizrenit</a>
			<ul class="menu">
			  
              <li class="last expanded"><a title="" href="about-us.html">Historia</a> 
                <li class="last expanded"><a title="" href="about-us-1.html">Gjeografia</a>
				 <li class="first last leaf"><a title="" href="about-us-2.html">Popullata</a></li>
              </ul>
            
            <li class="leaf"><a href="#"style="width: 56px; padding-left: 30px;">Kultura</a>
			<ul class="menu">
			  
              
				 <li class="first last leaf"><a title="" href="portfolio.html">Veshje Tradicionale</a></li>
				 <li class="first last leaf"><a title="" href="news.html">Artizanatet</a></li>
              </ul>
			</li>
            <li class="leaf"><a  href="#">Monumentet</a>
              <ul class="menu">
			  
              <li class="last expanded"><a title="" href="blog.html">Muzet?? dhe Monumentet</a> </li>
                <li class="last expanded"><a title="" href="blog_1.html">Xhamit??</a></li>
				 <li class="first last leaf"><a title="" href="blog_2.html">Kishat</a></li>
                    <li class="first last leaf"><a title="" href="blog_3.html">Teqet</a></li>
                    <li class="first last leaf"><a title="" href="news_1.html">Urat</a></li>
					<li class="first last leaf"><a title="" href="news_2.html">Tyrbet</a></li>
					<li class="last expanded"><a title="" href="news_3.html">T?? tjera</a> </li>
              </ul>
            
            <li class="leaf"><a href="galeria.html"style="width: 64px; padding-left: 26px;">Galeria</a></li>
            <li class="last leaf"><a href="logout.php" title="Contact">Log out</a></li>
          </ul>
        </div>
      </nav>
      <div id="header-right">
        <div id="block-views-latest-news-block">
          <div class="content">
            <div class="view view-latest-news view-id-latest_news view-display-id-block">
              <div class="view-content"> 
                
                <!-- start scroll -->
                <div id="vTicker" class='view view-latest_news'>
                  <ul id='views-ticker-vTicker-list-latest_news'>
                    <li> <span class='views-vTicker-tick-field'> <a href="news_detail.html">Mir?? se erdh??t n?? Prizren</a> <span class="latest-news-body">Qyteti i Prizrenit ??sht?? ngritur n?? hap??sir??n ku dy kultura dhe tri religjione t?? m??dha jan?? takuar gjat?? historis??,</span> e H??ne, Dhjetor 13,2021</span> </li>
                    <li> <span class='views-vTicker-tick-field'> <a href="news_detail.html">Mir?? se erdh??t n?? Prizren</a> <span class="latest-news-body">Monumentet si Kalaja e Prizrenit, kisha e Sh??n Premtes, xhamia e Sinan Pash??s, Hamami i Gazi Mehmet Pash??s, etj.</span> e H??ne, Dhjetor 13, 2021 </span> </li>
                  </ul>
                </div>
                <!-- end scroll --> 
</div>

            </div>
          </div>
          <!-- /.block --> 
        </div>
        <!-- /.region --> 
      </div>
    </header>
  </div>
  <div id="body" class="body" style="height:300px;">
    
  </div>

</div>
</body>
</html>