<!DOCTYPE html>
<html lang="en">

<head> 
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A GEOGRAPHICAL INFORMATION SYSTEM FOR BURNT KENYAN HIGH SCHOOLS">
    <meta name="author" content="Muriga Muchiri">
<title>BURNT KENYAN HIGH SCHOOLS USING GIS</title><link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/giser.css" rel="stylesheet">
     <link href="css/immersive-slider.css" rel="stylesheet">
<link rel="stylesheet" href="lib/leaflet/leaflet.css" />
 <script src="lib/leaflet/leaflet.js"></script>
  <script src="data/burnt.geojson"></script>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82682322-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a><nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="#top" onclick=$("#menu-close").click();>MENU</a> </li>
            <li><a href="#top" onclick=$("#menu-close").click();>Home</a></li><li>
                <a href="#services" onclick=$("#menu-close").click();>OUR TEAM</a> </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>WHAT WE DO</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>VIEW MAP</a></li></ul>
    </nav>
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>KENYA ~ BURNT HIGH SCHOOLS</h1>
            <h3>Mapping burnt schools using GIS</h3>
            <br>
            <a href="#contact" class="btn btn-dark btn-lg">SHOW ME!</a>
        </div>
    </header>

<section id="contact" class="map"> </section>
    
    <section id="services" class="services bg-danger">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1>WHO ARE WE?</h1>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                              <div>
                                <img src="img/mo.jpg"  class="img-responsive img-circle" height="300px" width="300px">
                          </div>
                                <h4>
                                    <strong>KEMUNTO MAUREEN</strong>
                                </h4>
                                <p>GIS SPECIALIST</p>
                            <p> A compassionate supporter of GIS and dedicated  to informing those around me of the good which can be done using GIS. I think positively and can execute tasks when given and figure out the best ways to  solve the problem in an autonomous manner.I’m modest and adheres to ethical code.
</p>
                                <a href="https://www.facebook.com/mauryn.shontelkemmy" target="blank"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                                <a href="https://twitter.com/mkaysteven" target="blank"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                                <a href="https://plus.google.com/u/0/111975101739034634423" target="blank"><i class="fa fa-google fa-fw fa-3x"></i></a>

                            </div>
                        </div><div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <span>
                               <div class="rotate">
                                 <img src="img/peet4.jpg"  class="img-responsive img-circle" height="300px" width="300px">
                              </div>
                                 </span><h4>
                             <strong>MURIGA MUCHIRI</strong> </h4>
                                <p>GIS SPECIALIST</p>
                                <p>Someone who demonstrates an unwavering resolve to do whatever must be done to produce the best long-term results, no matter how difficult. I am committed to building something larger and I put aside personal gain for the well-being of the clients and services.
Every day,I work to improve myself and my skills—that’s part of becoming better at what I do.</p>
                               <a href="https://www.facebook.com/alvessilva.peetason" target="blank"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                                <a href="https://twitter.com/muriga_P" target="blank"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                                <a href="https://plus.google.com/u/0/109752362211861862332" target="blank"><i class="fa fa-google fa-fw fa-3x"></i></a>
                            </div>
                        </div> </div></div>
            </div>
           
        </div>
      
    </section><aside class="callout"><div id="immersive_slider">
          <div class="slide" data-blurred="img/.png">
            <div class="content">
              <h2><a >WISE QUOTES</a></h2>
              <p>A map is the greatest of all epic poems. Its lines and colors show the realization of great dreams.</p></div>
            <div class="image">
              <a >
                <img src="img/giser.png" alt="Slider 1">
              </a>
            </div>
          </div>
          <div class="slide" data-blurred="img/portfolio-1.jpg">
            <div class="content">
              <h2><a >GIS QUOTES</a></h2>
              <p>Maps are like campfires – everyone gathers around them, because they allow people to understand complex issues at a glance, and find agreement about how to help the land</p>
            </div>
            <div class="image">
             <a > <img src="img/graph.png" alt="Slider 1"></a>
            </div>
          </div>
          <div class="slide" data-blurred="img/portfolio-1.jpg">
            <div class="content">
              <h2><a href="http://www.bucketlistly.com/apps" target="_blank">WISE WORDS</a></h2>
              <p>If you’re going to change the world, you might as well do it at the world scale</p>
            </div>
            <div class="image">
             <a > <img src="img/mapper.gif" alt="Slider 1"></a>
            </div>
          </div>
         <div class="slide" data-blurred="img/portfolio-1.jpg">
            <div class="content">
              <h2><a >GIS MEMES</a></h2>
              <p>Geography is Destiny in Medicine</p>
            </div>
            <div class="image">
             <a > <img src="img/geomats.png" alt="Slider 1"></a></div>
          </div><a href="#" class="is-prev">&laquo;</a>
          <a href="#" class="is-next">&raquo;</a>
        </div></aside>
    <section id="portfolio" class="portfolio">
        <div class="container"> <div class="row"><div class="col-lg-10 col-lg-offset-1 text-center"><h2>WHAT WE DO!!</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#"><img class="img-portfolio img-responsive" src="img/qgis.jpg"> </a> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/leaflet.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/fire.png">
                                </a>
                            </div></div><div class="col-md-6"><div class="portfolio-item">
 <a href="#">
<img class="img-portfolio img-responsive" src="img/geoloc.jpg"></a> </div></div>
  </div><a href="#" class="btn btn-dark">View More Items</a>
</div> </div></div></section>
    <footer> <div class="container"> <div class="row"> <div class="col-lg-10 col-lg-offset-1 text-center"><h4><strong>TALK TO US </strong> </h4><p>657-10100<br><a href="http://www.dkut.ac.ke/">Dedan Kimathi University</a>
                        <br>Institute of Geomatics, GIS and Remote Sensing</p>
                    <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> +254 0707 667640</li>
                        <li><i class="fa fa-phone fa-fw"></i> +254 0729 826620</li><li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:murigap@gmail.com">murigap@gmail.com</a>
                 <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:maureenkay67@gmail.com">maureenkay67@gmail.com</a>
                        </li></ul>
                    <br><ul class="list-inline">
                        <li> <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a></li>
 <li><a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a> </li>
<li><a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a> </li> </ul>
<hr class="small"><p class="text-muted">Copyright &copy;2016 Visor</p>  </div> </div> </div><a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a></footer><script src="js/jquery.js"></script><script src="js/jquery.immersive-slider.js"></script><script src="js/bootstrap.min.js"></script>
<script>var embed= L.map('contact',{center:[5,28],zoom:3,minZoom:2,maxZoom:18});L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(embed);
var moto =L.icon({iconUrl:'img/moto.gif',iconSize: [30, 40],iconAnchor: [2, 4],popupAnchor: [-3, -76],className:'iconer'});function styler(feature,layer){layer.bindPopup(feature.properties.NAME,{className: 'custom-popup'});
layer.setIcon(moto);};L.geoJson(burnt,{onEachFeature:styler}).addTo(embed);</script>
 <script type="text/javascript">$(document).ready( function() {$("#immersive_slider").immersive_slider({container: ".main"});});
</script> <script>
$("#menu-close").click(function(e) {e.preventDefault();$("#sidebar-wrapper").toggleClass("active");});
$("#menu-toggle").click(function(e) {e.preventDefault();$("#sidebar-wrapper").toggleClass("active");});
$(function() {$('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {var target = $(this.hash);target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');if (target.length) {$('html,body').animate({scrollTop: target.offset().top}, 1000);
return false;} }});});
var fixed = false;$(document).scroll(function() {if ($(this).scrollTop() > 250) {if (!fixed) { fixed = true;$('#to-top').show("slow", function() {$('#to-top').css({position: 'fixed',display: 'block'});
 }); }} else {if (fixed) {fixed = false;$('#to-top').hide("slow", function() {$('#to-top').css({display: 'none'});});}}});
var onMapMouseleaveHandler = function(event) {var that = $(this);that.on('click', onMapClickHandler);
that.off('mouseleave', onMapMouseleaveHandler);that.find('iframe').css("pointer-events", "none");}
var onMapClickHandler = function(event) {var that = $(this);that.off('click', onMapClickHandler);that.on('mouseleave',onMapMouseleaveHandler);} $('.map').on('click', onMapClickHandler);</script>
</body>
</html>
