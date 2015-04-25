<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
      <title>Karma HTML5 Template</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="" />
      <!--
      Karma Template
      http://www.templatemo.com/preview/templatemo_403_karma
      -->
      <meta name="author" content="templatemo">
      <meta charset="UTF-8">

      <link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700' rel='stylesheet' type='text/css'>

      <!-- CSS Bootstrap & Custom -->


      <!-- Modernizr -->
      <!-- HTML 5 shim for IE backwards compatibility -->
      <!-- [if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
      <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="row">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="col-md-2 col-sm-2 col-xs-12">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a href="/" class="navbar-brand"><img src="/images/logo_with_name.jpg" alt="Twintog"></a>
                  </div>
              </div>

              <div class="col-md-10 col-sm-10 col-xs-12">
                  <div class="navbar-collapse collapse menu">
                      <ul class="nav navbar-nav navbar-right">
                          <li><a href="#home"><i class="fa fa-home"></i>Home</a></li>
                          <li><a href="#about"><i class="fa fa-user"></i>About Us</a></li>
                          <li><a href="#services"><i class="fa fa-cogs"></i>Services</a></li>
                          <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
                          <!--<li><a href="#blog"><i class="fa fa-pencil"></i>Blog</a></li>-->
                          <li><a href="#contact"><i class="fa fa-envelope"></i>Contact</a></li>
                      </ul>
                  </div><!-- /.navbar-collapse -->
              </div>
          </div><!-- /.row -->
      </div>
  </nav>
    <?php echo $sf_content ?>
  </body>
  <footer>
      <div class="container">
          <div class="row footer_logo">
              <div class="col col-md-6 col-sm-6 col-xs-6 col-xxs">
<!--                  <img src="/images/logo.jpg" alt="karma">-->
                  <div id="templatemo_copyright">
                      Copyright © 2084 <a href="#">TwinTog</a>
                  </div>
              </div>
              <div class="col col-md-6 col-sm-6 col-xs-6 col-xxs">
                  <div class="pull-right">
                      <div class="social_buttons">
                          <a href="#" rel="nofollow" class="icon-button facebook"><i class="fa fa-facebook"></i></a>
                          <a href="#" rel="nofollow" class="icon-button twitter"><i class="fa fa-twitter"></i></a>
                          <a href="#" rel="nofollow" class="icon-button youtube"><i class="fa fa-youtube"></i></a>
                      </div>
                      <a href="#" id="go-top"><div class="back_to_top">Back To Top</div></a>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <script type="text/javascript">

      $(window).load(function(){
          $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider){
                  $('body').removeClass('loading');
                  $('.menu').singlePageNav();
              }
          });
      });

      $('#go-top').click(function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, 1000);
          return false;
      });
var map = '';

function initialize() {
    var mapOptions = {
      zoom: 14,
      center: new google.maps.LatLng(13.0827,80.2707)
    };
    
    map = new google.maps.Map(document.getElementById('google_map'),  mapOptions);
    var myLatlng = new google.maps.LatLng(13.0827,80.2707);
    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'T!'
  });
}

// load google map
var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
        'callback=initialize';
    document.body.appendChild(script);
    
  </script>
<!--    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=API_KEY">
    </script>-->
</html>
