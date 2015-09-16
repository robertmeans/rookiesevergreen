<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Rookies - Batting Cages in Evergreen, Colorado</title>
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
     function initialize() {
    var map_canvas = document.getElementById('map');
    var map_options = {
        center: new google.maps.LatLng(39.636833, -105.316211),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(map_canvas, map_options);
    var i=new google.maps.Marker({
        position:new google.maps.LatLng(39.636833, -105.316211),
        map:map // <------------------ needs to be a google.maps.Map object
        })
  }
  google.maps.event.addDomListener(window, 'load', initialize);
    </script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<nav>
	<ul>
		<li><a href="#instructions" class="main-nav no-active-nav">Get Started</a></li>
		<li><a href="#contact" class="main-nav">Contact</a></li>
	</ul>
</nav>

<section id="intro">
	<img src="_images/rookies-logo.png">
	<h2>Evergreen, Colorado<br>Batting Cages</h2>
	<nav>
		<ul>
			<li><a href="#">Join</a></li>
			<li><a href="#">Book</a></li>
		</ul>
	</nav>
</section><!-- #intro -->



<article id="instructions">



<div class="instruction-wrap cf">

	<p class="easy-as">Getting started is as easy as...</p>



	<div id="easy-as" class="cf">

          <div class="container">
            
            <a href="#" class="click no-default">1. Select a membership level and join <i class="fa fa-angle-down"></i></a>

			<div class="expand">
              <h2>Levels of Membership:</h2>

              <p class="membership-level-left">&quot;The Show&quot;</p>
              <p class="membership-level-right">$150/month includes 4/1hr Peak Time &amp; 4/1hr Non-Peak Time rentals of 1 tunnel (6 month minimum) *$18.75/hr</p>

              <p class="membership-level-left">&quot;Triple A&quot;</p>
              <p class="membership-level-right">Purchase 9 innings and get the 10<sup>th</sup> free. This is the punch card option which allows you to purchase a block of 9/1hr rentals of 1 tunnel and receive the 10<sup>th</sup> free. The cost for Triple A is $360.00 and there are no restrictions between Peak &amp; Non-Peak hours. *$36/hr</p>

              <p class="membership-level-left">&quot;Double A&quot;</p>
              <p class="membership-level-right">Rent time as you need it. The cost is $40/hr rental of 1 tunnel.</p>

              <span class="h-bar">&nbsp;</span>

              <h2>Hours of Operation:</h2>
              
              <p class="membership-level-left">Peak Hours:</p>
              <p class="membership-level-right">4:00pm-9:00pm Monday - Friday<br>
              10:00am - 3:00pm Saturday &amp; Sunday</p>
              
              <p class="membership-level-left">Non-Peak Hours:</p>
              <p class="membership-level-right">6:00am-4:00pm Monday - Friday<br>
              6:00am-10:00am &amp; 3:00pm-11:00pm Saturday &amp; Sunday</p>

              <a href="#" class="join-now-btn no-default">Join Now!</a>


            </div><!-- .expand !-->
          </div><!-- #container -->

          <div class="container">
             <a href="#" class="click no-default">2. Obtain your personal building access code <i class="fa fa-angle-down"></i></a>
            <div class="expand">
              <p>how, when, where</p>
            </div><!-- .expand !-->
          </div><!-- #container2 -->


          <div class="container">
             <a href="#" class="click no-default">3. Book reservations online anytime <i class="fa fa-angle-down"></i></a>
            <div class="expand">
              <p>Our automated booking process lets you reserve a time and pay online whenever the mood <span class="strikethrough">strikes</span> ...wrong choice of words - whenever the mood hits!</p>

              <a href="#" class="join-now-btn no-default">Book Now!</a>
            </div><!-- .expand !-->
          </div><!-- #container2 -->

	</div><!-- #easy-as -->

	<div class="add-resource cf">
		<h2>Rookies - Where Hight Altitude Ball Players Come to Train</h2>
		<p class="full-width">Rookies LLC was established to provide an indoor pitching and hitting facility to the young baseball and softball players of Evergreen and the surrounding area.  Registered members are allowed to reserve time in the tunnels between 6:00am and 11:00pm 7 days a week, including holidays.  The reservations will be made in 1 hour blocks.  We require all members to straighten up their rented tunnel and vacate within the 60 minute time limit.  The training tunnels are equipped with pitching mounds/mats, batting tees, L-screens and pitching machines.  Tunnel 1 measures 14’W x 64’L and Tunnel 2 measures 12’W by 64’.</p>

		<span class="h-bar">&nbsp;</span>

		<h2>Additional Resources</h2>

		<p class="half">
			Tom's Sandlot - Tom Peterson<br>
			12150 W. 44<sup>th</sup> Avenue #102<br>
			Wheat Ridge, CO 80033<br>
			(303) 883-0474
		</p>
		<p class="half">
			Catalyst Sport LLC<br>
			15864 W. 6<sup>th</sup> Avenue Service Road<br>
			Golden, CO 80401<br>
			(303) 284-2191
		</p>


	</div><!-- .add-resource -->

</div><!-- .instruction-wrap -->

</article><!-- #instructions -->



<footer id="contact" class="cf">
	<div id="map"></div>

	<div class="location">
		<p><i class="fa fa-map-marker"></i>27888 Meadow Drive, Evergreen, Colorado 80439</p>
		<p><i class="fa fa-phone-square"></i>(626) 253-0449</p>
	</div>
	<div class="contact-form">
		
    <form action="formmail.php" method="post" id="contactForm" onSubmit="return validateEmail(document.forms[0].email.value);">
        
	    <ul>
	        <li>
	          <label class="text" for="name">Name</label>
	          <input name="name" type="text" id="name" tabindex="10" />
	        </li>
	        <li>
	          <label class="text" for="email">Email</label>
	          <input name="email" type="email" id="email" tabindex="20" />
	        </li>
	        <li>
	          <label class="text" for="comments">Comments</label>
	          <textarea name="comments" id="comments" tabindex="30"></textarea>
	        </li>
	        <li>
	            <input id="send" type="submit" value="Send" tabindex="40" />
	        </li>
	        
	    </ul> 
    
    </form>







	</div>
	<div class="copyright cf">
		<p>&copy;2015 Rookies LLC | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>
	</div>
</footer>

<section id="h-space"></section>

<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>