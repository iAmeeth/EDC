<!DOCTYPE html>
<html>
<head>
	<title>Our Entrepreneurs</title>

	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php
    	//include the link file here
    		
		include $_SERVER['DOCUMENT_ROOT'].'\backend-php\link.php';
	?>




</head>

<body class = "blue-grey lighten-4"> 

	<!--Navigation Bar-->
	<div class="navbar">
		<nav>	
		
			<div class="nav-wrapper blue-grey darken-3 z-depth-0">

				<a href="" class="brand-logo center">Our Entrepreneurs</a>
				
			</div>
		</nav>	
	</div>

	<div class="blue-grey lighten-4 row">
		<div class="card col l2">
			<!-- Left Hand Side coloumn-->

		</div>

		<div class="col l8">
			<ul class="collapsible popout" data-collapsible="accordion">
				<?php
					$limit = $reader->noOfItems(); 	
					for($itr = 1; $itr <= $limit; $itr = $itr + 1) { ?>
						<li>
							<div class="collapsible-header z-depth-4">
								<div class="row"> 
									<div class="col l3">
										<div class="card z-depth-2">
											<div class="card-image">
												<img src= <?php echo "images/Companies/".$reader->getfield($itr,name); ?> height="150px">
											</div>
										</div>
									</div>
									<div class="col l9">
										<h3> <strong> <?php  echo $reader->getfield($itr,name);?> </strong> </h3>
										<p class="flow-text" style="color: ;">
											<?php echo $reader->getfield($itr, tagline); ?>
										</p> 
									</div> 
								</div>
							</div>

					      	<div class="collapsible-body">
					      		<div class="section blue-grey lighten-3">
									<div class="row">
										<div class="col l10 offset-l1">
											<h4 class="">Vision</h4>
											<?php echo $reader->getfield($itr, vision); ?>						
										</div>	
									</div>	
								</div>
						
								<div class="section white">
									<div class="row">
										<div class="col l10 offset-l1">
											
											<h4 class="">Founders</h4>
											<?php 
												$Founders = $reader->getfield($itr, founders); 
												foreach ($Founders as $people) { ?>
														
													<div class="card-panel deep-purple lighten-5 z-depth-1">
														<div class="row">
															<div class="col l3">	
																<img src= <?php echo "images/Founders/".$people->photoid; ?> height="100px;" class="circle">
															</div>
																
															<div class="col l8">
																<p> 
																	<strong><?php echo $people->name;?> </strong> <br>
																	<?php echo "`".$people->post."`"; ?> <br>
																	<a href=<?php echo "https://twitter.com/".$people->twitter; ?> > <?php echo $people->twitter; ?> </a>
																</p>
															</div>
														
														</div>
													</div>
											<?php } ?>
										</div>	
									</div>	
								</div>

								<div class="section blue-grey lighten-3">
									<div class="row">
										<div class="col l10 offset-l1">
											<h4 class="">About Us</h4>
											<?php echo $reader->getfield($itr, aboutUs); ?>						
										</div>	
									</div>	
								</div>

					      	</div>
					    </li>
				<?php } ?>

			</ul>
		</div>

		<div class="card col l2">
		<!-- Right Hand Side coloumn-->

		</div>
	    	
			     
	</div>
</div>





	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

</body>

</html>
