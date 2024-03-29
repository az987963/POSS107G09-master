<!DOCTYPE html>
<html lang="en-us">

  <head>
    <title>TKU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/TypeGame.json", {onProgress: UnityProgress});
    </script>
	
  </head>
  <body>
  
    <section class="hero-wrap js-fullheight">
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-baseline justify-content-end">
          <div class="col-md-12 text-center ftco-animate">
            <h1 class="mt-5" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">TKU</h1>
            <h2>Multimedia</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
				
			<div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="index.html" class="tag-cloud-link">Home</a>
                <a href="#" class="tag-cloud-link">Picture</a>
                <a href="#" class="tag-cloud-link">Voice</a>
                <a href="model.php" class="tag-cloud-link">Word</a>
				<a href="Prjectintro.html" class="tag-cloud-link">Projectintro</a>
                <a href="Development.html" class="tag-cloud-link">Development introduction</a>
              </div>
            </div>
			</div>
		</div>
	</section>	 
	
	<section class="ftco-section">
	<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate ">
            <h2 class="mb-3">Game Rank</h2>
            <?php
			$conn = mysqli_connect("localhost", "multimedia", "7788", "rank");
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
			$sql = "SELECT id, studentnumber, name ,score FROM list";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["id"]. "</td><td>" . $row["studentnumber"] . "</td><td>"
			. $row["name"]."</td><td>". $row["score"] . "</td></tr>";
			}
			echo "</table>";
			} else { echo "0 results"; }
			$conn->close();
			?>
          </div>
		  
		 </div>
    </section>


    <footer class="ftco-footer ftco-section img"> 	
		<section class="ftco-section">
		<div class="row justify-content-center mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5 ">
            <div class="ftco-footer-widget mb-4">
            	<div class="block-23 mb-3">
				  <!-- game -->
					<div class="webgl-content" >
						<div id="gameContainer" style="width: 960px; height: 600px"></div>
							<div class="footer">
							<div class="webgl-logo"></div>
							<div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
							<div class="title">TypeGame</div>
						</div>
					</div>
	            </div>
            </div>
          </div>
		 </div>
		</section>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
 <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>-->
  <script src="js/main.js"></script>
    
  </body>
</html>