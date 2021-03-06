<!DOCTYPE html>
<html>
<head>
	<title>PICT Entrepreneurship Cell</title>

	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<!--Navigation Bar-->
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper" style="background-color: #0b2233;">
				<a href="#start" class="brand-logo center">PICT Business Cell</a>

				<a data-activates="mobile-demo" style="cursor: pointer;" class="button-collapse"> 
					<i class="material-icons">menu</i> 
				</a>

				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#Entrepreneurship">Entre</a> </li>
					<li><a href="#WordFromHead">Word from Head</a></li>
					<li><a href="#Pict">PICT</a></li>
					<li><a href="#AboutUs">About Us</a></li>		
				</ul>

				<ul id="mobile-demo" class="side-nav">
					<li><a href="#Entrepreneurship" class="flow-text">Entre</a> </li>
					<li><a href="#WordFromHead" class="flow-text">Word from Head</a></li>
					<li><a href="#Pict" class="flow-text">PICT</a></li>
					<li><a href="#AboutUs" class="flow-text">About Us</a></li>		
				</ul>
			</div>
		</nav>	
	</div>
	

	<!--This is the actual content of the Page-->

	<!--Slider to display quick links-->
	<div id="start" class="slider scrollspy z-depth-4" style="background-color: black;">
		<ul class="slides">
			<li>
				<img src="images/jobs4.jpg" style="opacity: 1.0" class="responsive-img">
				<div class="caption left-align">
					<h3>LOVE WHAT YOU DO</h3>
				</div>
			</li>
			
			<li>
				<img src="images/exp.png">
				<div class="caption right-align" style="opacity: 1.0">
					<h3>Learn</h3>
					<h5>From other's experience</h5>
				</div>
			</li>

			<li>
				<img src="images/act.png">
				<div class="caption right-align" style="opacity: 1.0">
					<font color="black"><h3>Constantly take action</h3>
					</font>
				</div>
			</li>

			<li>
				<img src="images/plan.png">
				<div class="caption left-align" style="opacity: 1.0">
					<font color="white"><h3>Make a plan</h3>
					</font>
				</div>
			</li>

			<li>
				<img src="images/rep.png">
				<div class="caption right-align" style="opacity: 1.0">
					<h3 style="color: white;">Build a reputation</h3>
					
				</div>
			</li>

			<li>
				<img src="images/late.png">
				<div class="caption right-align" style="opacity: 1.0">
					<font color="black"><h4>It's never too late to start</h4>
					</font>
				</div>
			</li>

			<li>
				<img src="images/ateam.png">
				<div class="caption left-align" style="opacity: 1.0">
					<font color="darkblue"><h3>Build your 'A' team</h3>
					</font>
				</div>
			</li>
 
           	<li>
				<img src="images/att.png">
				<div class="caption left-align" style="opacity: 1.0">
					<font color="black"><h4>Be mindful of your attitude</h4>
					</font>
				</div>
			</li>

	        <li>
				<img src="images/ph.png">
				<div class="caption right-align" style="opacity: 1.0">
					<font color="black"><h3>Patience And Hardwork</h3><h5>The keys to success</h5>
					</font>
				</div>
			</li>

		</ul>
	</div>

	<!--Section 1-->
	<div id="Entrepreneurship" class="parallax-container scrollspy" style="height: 400px; background-attachment: fixed;">
		<div class="parallax"><img src="images/startup.jpg" style="opacity: 0.3;"></div>
		<div class="row container">
			<h2 class="header">Entre</h2>
      		<p class="grey-text text-darken-3 lighten-3"> Details	</p>
		
			<a class="waves-effect waves-light btn-large center" style="background-color: #0b2233;" href="Entrepreneur.php">View</a>
		</div>
	</div>


	<!--Section 2-->
	<div id="WordFromHead" class="section scrollspy white" style="height: 400px;">
		<div class="row container">
			<h2 class="header">Word From Head</h2>
      		<p class="grey-text text-darken-3 lighten-3"> Details</p>
		</div>
	</div>


	<!--Section 3-->
	<div id="Pict" class="parallax-container scrollspy" style="height: 400px; background-attachment: fixed;">
		<div class="parallax"><img src="images/pict.jpg" style="opacity: 0.3;"></div>
		<div class="row container">
			<h2 class="header">PICT</h2>
      		<p class="grey-text text-darken-3 lighten-3"> Details</p>
		</div>
	</div>

	<!--Section 4-->
	<div id="AboutUs" class="section white scrollspy" style="height: 500px;">
		<div class="row container">
			<h2 class="header">About Us</h2>
      		<p class="grey-text text-darken-3 lighten-3">Developers: Ameeth Kanawaday</p>
      		<p class="grey-text text-darken-3 lighten-3">Developers: Animesh Karnewar</p>
      		<p class="grey-text text-darken-3 lighten-3">Developers: Rushab Shah</p>
      		<p class="grey-text text-darken-3 lighten-3">Developers: Mausam Yede</p>

		</div>
	</div>




	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

    <!--Initialization for the slider-->
    <script type="text/javascript">
		
    	$(document).ready(function(){
    		//initialize the scrollSpy Effect
    		$('.scrollspy').scrollSpy();
			
			//Initialize the side navigation bar
    		$('.button-collapse').sideNav();    	

    	});

    	$(document).ready(function(){
    		//initialize the Parallax effect
    		$('.parallax').parallax();

    		//Initialize the slider
      		$('.slider').slider({
      			full_width: true,
      			indicators: true,
      			height: 441,
      			transition: 1200,
      			interval: 5000
      		});
    	});

  //   	$(window).scroll(function(){
  //   		if($(document).scrollTop() > 600 && $(document).scrollTop() < 2500) {
  //   			var temp =  100 - ($(document).scrollTop() - 1200) / 8;
  //   			var bonus = '50% ' + temp*-1 + '%';
  //   			document.getElementById('div').style.backgroundPosition = bonus;
		//     }
		// });
        
    </script>
</body>

</html>
