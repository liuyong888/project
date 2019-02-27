<!DOCTYPE html>
<html>
 <head> 
  <!-- Basic --> 
  <meta charset="utf-8" /> 
  <title>首页</title> 
  <meta name="keywords" content="HTML5 Template" /> 
  <meta name="description" content="Porto - Responsive HTML5 Template" /> 
  <meta name="author" content="okler.net" /> 
  <!-- Mobile Metas --> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <!-- Web Fonts  --> 
  <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css" /> --> 
  <!-- Vendor CSS --> 
  <link rel="stylesheet" href="/static/homes/vendor/bootstrap/bootstrap.css" /> 
  <link rel="stylesheet" href="/static/homes/vendor/fontawesome//static/homes/css/font-awesome.css" /> 
  <link rel="stylesheet" href="/static/homes/vendor/owlcarousel/owl.carousel.css" media="screen" /> 
  <link rel="stylesheet" href="/static/homes/vendor/owlcarousel/owl.theme.css" media="screen" /> 
  <link rel="stylesheet" href="/static/homes/vendor/magnific-popup/magnific-popup.css" media="screen" /> 
  <!-- Theme CSS --> 
  <link rel="stylesheet" href="/static/homes/css/theme.css" /> 
  <link rel="stylesheet" href="/static/homes/css/theme-elements.css" /> 
  <link rel="stylesheet" href="/static/homes/css/theme-blog.css" /> 
  <link rel="stylesheet" href="/static/homes/css/theme-shop.css" /> 
  <link rel="stylesheet" href="/static/homes/css/theme-animate.css" /> 
  <!-- Skin CSS --> 
  <link rel="stylesheet" href="/static/homes/css/skins/default.css" /> 
  <!-- Theme Custom CSS --> 
  <link rel="stylesheet" href="/static/homes/css/custom.css" /> 
  <!-- Head Libs --> 
  <script src="/static/homes/vendor/modernizr/modernizr.js"></script> 
  <!--[if IE]>
			<link rel="stylesheet" href="/static/homes/css/ie.css">
		<![endif]--> 
  <!--[if lte IE 8]>
			<script src="/static/homes/vendor/respond/respond.js"></script>
			<script src="/static/homes/vendor/excanvas/excanvas.js"></script>
		<![endif]--> 
 </head> 
 <body> 
  <div class="body"> 
   <header id="header"> 
    <div class="container"> 
     <h1 class="logo"> <a href="index.html"> <img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" src="/static/homes/img/logo.png" /> </a> </h1> 
     <div class="search"> 
      <form id="searchForm" action="page-search-results.html" method="get"> 
       <div class="input-group"> 
        <input type="text" class="form-control search" name="q" id="q" placeholder="Search..." required="" /> 
        <span class="input-group-btn"> <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button> </span> 
       </div> 
      </form> 
     </div> 
     <nav> 
      <ul class="nav nav-pills nav-top"> 
       <li> <a href="about-us.html"><i class="fa fa-angle-right"></i>About Us</a> </li> 
       <li> <a href="contact-us.html"><i class="fa fa-angle-right"></i>Contact Us</a> </li> 
       <li class="phone"> <span><i class="fa fa-phone"></i>(123) 456-7890</span> </li> 
      </ul> 
     </nav> 
     <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse"> <i class="fa fa-bars"></i> </button> 
    </div> 
    <div class="navbar-collapse nav-main-collapse collapse"> 
     <div class="container"> 
      <ul class="social-icons"> 
       <li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li> 
       <li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li> 
       <li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li> 
      </ul>


      <nav class="nav-main mega-menu"> 
       <ul class="nav nav-pills nav-main" id="mainMenu">
          @foreach($cate as $row) 
          <li class="dropdown"> <a class="dropdown-toggle" href="#">{{$row->name}}<i class="fa fa-angle-down"></i> </a>
          @if(count($row->suv)) 
           <ul class="dropdown-menu">
              @foreach($row->suv as $rows) 
              <li class="dropdown-submenu"> <a href="#">{{$rows->name}}</a>
                @if($rows->suv) 
                 <ul class="dropdown-menu">
                    @foreach($rows->suv as $r) 
                    <li><a href="index.html">{{$r->name}}</a></li>
                    @endforeach
                 </ul>
                 @endif 
              </li>
              @endforeach 
           </ul>
           @endif 
         </li>
         @endforeach  
       </ul> 
      </nav> 



     </div> 
    </div> 
   </header> 
   <div role="main" class="main"> 
    <section class="page-top"> 
     <div class="container"> 
      <div class="row"> 
       <div class="col-md-12"> 
        <ul class="breadcrumb"> 
         <li><a href="#">Home</a></li> 
         <li class="active">About Us</li> 
        </ul> 
       </div> 
      </div> 
      <div class="row"> 
       <div class="col-md-12"> 
        <h2>About Us</h2> 
       </div> 
      </div> 
     </div> 
    </section> 
    <div class="container"> 
     <div class="row center"> 
      <div class="col-md-12"> 
       <h2 class="short word-rotator-title">The New Way to <strong class="inverted" data-appear-animation="bounceIn"> <span class="word-rotate" data-plugin-options="{&quot;delay&quot;: 2000}"> <span class="word-rotate-items"> <span>success.</span> <span>advance.</span> <span>progress.</span> </span> </span> </strong> </h2> 
       <p class="featured lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh. </p> 
      </div> 
     </div> 
     <hr class="tall" /> 
    </div> 
    <div class="container"> 
     <div class="row"> 
      <div class="col-md-12"> 
       <div class="row"> 
        <div class="col-md-4"> 
         <div class="feature-box secundary"> 
          <div class="feature-box-icon"> 
           <i class="fa fa-group"></i> 
          </div> 
          <div class="feature-box-info"> 
           <h4 class="shorter">Customer Support</h4> 
           <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p> 
          </div> 
         </div> 
         <div class="feature-box secundary"> 
          <div class="feature-box-icon"> 
           <i class="fa fa-file"></i> 
          </div> 
          <div class="feature-box-info"> 
           <h4 class="shorter">HTML5 / CSS3 / JS</h4> 
           <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p> 
          </div> 
         </div> 
        </div> 
        <div class="col-md-4"> 
         <div class="feature-box secundary"> 
          <div class="feature-box-icon"> 
           <i class="fa fa-film"></i> 
          </div> 
          <div class="feature-box-info"> 
           <h4 class="shorter">Sliders</h4> 
           <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p> 
          </div> 
         </div> 
         <div class="feature-box secundary"> 
          <div class="feature-box-icon"> 
           <i class="fa fa-check"></i> 
          </div> 
          <div class="feature-box-info"> 
           <h4 class="shorter">Icons</h4> 
           <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p> 
          </div> 
         </div> 
        </div> 
        <div class="col-md-4"> 
         <div class="feature-box secundary"> 
          <div class="feature-box-icon"> 
           <i class="fa fa-bars"></i> 
          </div> 
          <div class="feature-box-info"> 
           <h4 class="shorter">Buttons</h4> 
           <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p> 
          </div> 
         </div> 
         <div class="feature-box secundary"> 
          <div class="feature-box-icon"> 
           <i class="fa fa-desktop"></i> 
          </div> 
          <div class="feature-box-info"> 
           <h4 class="shorter">Lightbox</h4> 
           <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <section class="featured highlight footer"> 
     <div class="container"> 
      <div class="row center counters"> 
       <div class="col-md-3 col-sm-6"> 
        <strong data-to="7000" data-append="+">0</strong> 
        <label>Happy Clients</label> 
       </div> 
       <div class="col-md-3 col-sm-6"> 
        <strong data-to="15">0</strong> 
        <label>Years in Business</label> 
       </div> 
       <div class="col-md-3 col-sm-6"> 
        <strong data-to="352">0</strong> 
        <label>Cups of Coffee</label> 
       </div> 
       <div class="col-md-3 col-sm-6"> 
        <strong data-to="159">0</strong> 
        <label>High Score</label> 
       </div> 
      </div> 
     </div> 
    </section> 
    <section class="video" data-video-path="video/dark" data-plugin-video-background="" data-plugin-options="{&quot;posterType&quot;: &quot;jpg&quot;, &quot;position&quot;: &quot;50% 50%&quot;}"> 
     <div class="container"> 
      <div class="row center"> 
       <div class="col-md-6"> 
        <div class="row"> 
         <div class="owl-carousel" data-plugin-options="{&quot;items&quot;: 1}"> 
          <div> 
           <blockquote> 
            <p><i class="fa fa-quote-left"></i> Hello, I want to thank you for creating a great template and for the excellent and quick support and help that you have been providing to me as I begin to work with it.</p> 
            <span>- Joe Doe</span> 
           </blockquote> 
          </div> 
          <div> 
           <blockquote> 
            <p><i class="fa fa-quote-left"></i> Just want to say Okler RULES. Provide great tech service for each template and allows me to become more knowledgeable as a designer.</p> 
            <span>- Edward Chelton</span> 
           </blockquote> 
          </div> 
          <div> 
           <blockquote> 
            <p><i class="fa fa-quote-left"></i> Just came here to say a big thank you to the author of this template. It works amazingly well, the documentation is top-notch, and the theme looks beautiful.</p> 
            <span>- Bruce Ericson</span> 
           </blockquote> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </section> 
    <div class="container"> 
     <div class="row"> 
      <div class="col-md-5"> 
       <h2><strong>Who</strong> We Are</h2> 
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. </p> 
      </div> 
      <div class="col-md-7"> 
       <div class="progress-bars"> 
        <div class="progress-label"> 
         <span>HTML/CSS</span> 
        </div> 
        <div class="progress"> 
         <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%"> 
          <span class="progress-bar-tooltip">100%</span> 
         </div> 
        </div> 
        <div class="progress-label"> 
         <span>Design</span> 
        </div> 
        <div class="progress"> 
         <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="300"> 
          <span class="progress-bar-tooltip">85%</span> 
         </div> 
        </div> 
        <div class="progress-label"> 
         <span>WordPress</span> 
        </div> 
        <div class="progress"> 
         <div class="progress-bar progress-bar-primary" data-appear-progress-animation="75%" data-appear-animation-delay="600"> 
          <span class="progress-bar-tooltip">75%</span> 
         </div> 
        </div> 
        <div class="progress-label"> 
         <span>Photoshop</span> 
        </div> 
        <div class="progress"> 
         <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="900"> 
          <span class="progress-bar-tooltip">85%</span> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
     <hr class="tall" /> 
    </div> 
    <div class="container"> 
     <div class="row" id="team"> 
      <div class="col-md-12"> 
       <div class="row"> 
        <ul class="team-list"> 
         <li class="col-md-3 col-sm-6 col-xs-12"> 
          <div class="team-item thumbnail"> 
           <a href="about-me.html" class="thumb-info team"> <img alt="" height="270" src="/static/homes/img/team/team-1.jpg" /> <span class="thumb-info-title"> <span class="thumb-info-inner">John Doe</span> <span class="thumb-info-type">CEO</span> </span> </a> 
           <span class="thumb-info-caption"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p> <span class="thumb-info-social-icons"> <a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a> <a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a> <a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a> </span> </span> 
          </div> </li> 
         <li class="col-md-3 col-sm-6 col-xs-12"> 
          <div class="team-item thumbnail"> 
           <a href="about-me.html" class="thumb-info team"> <img alt="" height="270" src="/static/homes/img/team/team-2.jpg" /> <span class="thumb-info-title"> <span class="thumb-info-inner">Jessica Doe</span> <span class="thumb-info-type">Marketing</span> </span> </a> 
           <span class="thumb-info-caption"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p> <span class="thumb-info-social-icons"> <a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a> <a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a> <a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a> </span> </span> 
          </div> </li> 
         <li class="col-md-3 col-sm-6 col-xs-12"> 
          <div class="team-item thumbnail"> 
           <a href="about-me.html" class="thumb-info team"> <img alt="" height="270" src="/static/homes/img/team/team-3.jpg" /> <span class="thumb-info-title"> <span class="thumb-info-inner">Rick Edward Doe</span> <span class="thumb-info-type">Developer</span> </span> </a> 
           <span class="thumb-info-caption"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p> <span class="thumb-info-social-icons"> <a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a> <a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a> <a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a> </span> </span> 
          </div> </li> 
         <li class="col-md-3 col-sm-6 col-xs-12"> 
          <div class="team-item thumbnail"> 
           <a href="about-me.html" class="thumb-info team"> <img alt="" height="270" src="/static/homes/img/team/team-4.jpg" /> <span class="thumb-info-title"> <span class="thumb-info-inner">Melinda Wolosky</span> <span class="thumb-info-type">Design</span> </span> </a> 
           <span class="thumb-info-caption"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p> <span class="thumb-info-social-icons"> <a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a> <a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a> <a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a> </span> </span> 
          </div> </li> 
        </ul> 
       </div> 
      </div> 
     </div> 
    </div> 
    <section class="call-to-action featured footer"> 
     <div class="container"> 
      <div class="row"> 
       <div class="center"> 
        <h3>Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website! <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary" data-appear-animation="bounceIn">Buy Now!</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3> 
       </div> 
      </div> 
     </div> 
    </section> 
   </div> 
   <footer id="footer"> 
    <div class="container"> 
     <div class="row"> 
      <div class="footer-ribbon"> 
       <span>Get in Touch</span> 
      </div> 
      <div class="col-md-3"> 
       <div class="newsletter"> 
        <h4>Newsletter</h4> 
        <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p> 
        <div class="alert alert-success hidden" id="newsletterSuccess"> 
         <strong>Success!</strong> You've been added to our email list. 
        </div> 
        <div class="alert alert-danger hidden" id="newsletterError"></div> 
        <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST"> 
         <div class="input-group"> 
          <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text" /> 
          <span class="input-group-btn"> <button class="btn btn-default" type="submit">Go!</button> </span> 
         </div> 
        </form> 
       </div> 
      </div> 
      <div class="col-md-3"> 
       <h4>Latest Tweets</h4> 
       <div id="tweet" class="twitter" data-plugin-tweets="" data-plugin-options="{&quot;username&quot;: &quot;&quot;, &quot;count&quot;: 2}"> 
        <p>Please wait...</p> 
       </div> 
      </div> 
      <div class="col-md-4"> 
       <div class="contact-details"> 
        <h4>Contact Us</h4> 
        <ul class="contact"> 
         <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li> 
         <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-7890</p></li> 
         <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li> 
        </ul> 
       </div> 
      </div> 
      <div class="col-md-2"> 
       <h4>Follow Us</h4> 
       <div class="social-icons"> 
        <ul class="social-icons"> 
         <li class="facebook"><a href="http://www.facebook.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li> 
         <li class="twitter"><a href="http://www.twitter.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li> 
         <li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li> 
        </ul> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div class="footer-copyright"> 
     <div class="container"> 
      <div class="row"> 
       <div class="col-md-1"> 
        <a href="index.html" class="logo"> <img alt="Porto Website Template" class="img-responsive" src="/static/homes/img/logo-footer.png" /> </a> 
       </div> 
       <div class="col-md-7"> 
        <p>漏 Copyright 2014. All Rights Reserved.</p> 
       </div> 
       <div class="col-md-4"> 
        <nav id="sub-menu"> 
         <ul> 
          <li><a href="page-faq.html">FAQ's</a></li> 
          <li><a href="sitemap.html">Sitemap</a></li> 
          <li><a href="contact-us.html">Contact</a></li> 
         </ul> 
        </nav> 
       </div> 
      </div> 
     </div> 
    </div> 
   </footer> 
  </div> 
  <!-- Vendor --> 
  <script src="/static/homes/vendor/jquery/jquery.js"></script> 
  <script src="/static/homes/vendor/jquery.appear/jquery.appear.js"></script> 
  <script src="/static/homes/vendor/jquery.easing/jquery.easing.js"></script> 
  <script src="/static/homes/vendor/jquery-cookie/jquery-cookie.js"></script> 
  <script src="/static/homes/vendor/bootstrap/bootstrap.js"></script> 
  <script src="/static/homes/vendor/common/common.js"></script> 
  <script src="/static/homes/vendor/jquery.validation/jquery.validation.js"></script> 
  <script src="/static/homes/vendor/jquery.stellar/jquery.stellar.js"></script> 
  <script src="/static/homes/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script> 
  <script src="/static/homes/vendor/jquery.gmap/jquery.gmap.js"></script> 
  <script src="/static/homes/vendor/twitterjs/twitter.js"></script> 
  <script src="/static/homes/vendor/isotope/jquery.isotope.js"></script> 
  <script src="/static/homes/vendor/owlcarousel/owl.carousel.js"></script> 
  <script src="/static/homes/vendor/jflickrfeed/jflickrfeed.js"></script> 
  <script src="/static/homes/vendor/magnific-popup/jquery.magnific-popup.js"></script> 
  <script src="/static/homes/vendor/vide/vide.js"></script> 
  <!-- Theme Base, Components and Settings --> 
  <script src="/static/homes/js/theme.js"></script> 
  <!-- Theme Custom --> 
  <script src="/static/homes/js/custom.js"></script> 
  <!-- Theme Initialization Files --> 
  <script src="/static/homes/js/theme.init.js"></script> 
  <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
		 -->   
 </body>
</html>