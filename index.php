<?php   

include("login.php");
include("connection.php");


	$query= "SELECT * FROM myclients";


	$result = mysqli_query($link, $query);

	$page = mysqli_fetch_assoc($result);



?>


<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>My Salon</title>
 <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></
script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/
respond.min.js"></script>
 <![endif]-->

 <style>

 .navbar-brand {
 	 	 font-size:1.8em;
 }
 	 	
 #topContainer {
 	 	 background-image:url("img/unsplash.jpg");
 	 	 height:400px;
 	 	 width:100%;
 	 	 background-size:cover;
 	 	 padding-right:25px; 
 	 	 padding-left:25px;
 	 	 }
 	 	 	
 #topRow {
 	
 	 	 margin-top: 100px;
 	 	 border-radius: 25px;
 	 	 text-align:center;
 	 	 background-color: rgba(255,105,180,0.75);
 	 	 padding: 20px;
 	 	 color: white;
 	 	 

 }	
 	 	
 #topRow h1 {
 	 	 font-size:300%;
 }
 	 	
 #emailSignup {
 	 	 margin-top:50px;
 }
 	 	
 .bold {
 	 	 font-weight:bold;
 }
 	 	
 .marginTop {
 	 	 margin-top:30px;
 }
 	 	
 .center {
 	 	 text-align:center;
 }
 	 	
 .title {
 	 	 margin-top:100px;
 	 	 font-size:300%;
 }
 	 	
 #footer {
 	 	 background-color:#B0D1FB;
 	 	 padding-top:70px;
 	 	 width:100%;
 }
 	 	
 .marginBottom {
 	 	 margin-bottom:30px;
 }
 .appstoreImage {
 	 	 width:250px;
 }
 </style>
 <script src="js/sorttable.js"></script>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["map"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Lat', 'Long', 'Name'],
          [37.4232, -122.0853, 'Work'],
          [37.4289, -122.1697, 'University'],
          [37.6153, -122.3900, 'Airport'],
          [37.4422, -122.1731, 'Shopping']
        ]);

        var map = new google.visualization.Map(document.getElementById('map_div'));
        map.draw(data, {showTip: true});
      }

    </script>
 </head>
 <body>
 
 <div class="navbar navbar-default navbar-fixed-top">
 <div class="container">
 	 
 	 	 	
 	 	 
 	 	 	 
 	 	 	 <form class="navbar-form" method="post">
 	 	 	 	<a href="http://217.199.187.196/basilstestdomains.com/MySalon/index.php"><button type="button" class="btn btn-success">HOME</button></a>
 	 	 	 	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Sign Up</button>
 	 	 	 	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#salonLoginModal">Salon Login</button>
 	 	 	 </form>

 	 	 	 	
 	 	
			 </div>
			 </div>






 <div class="container contentContainer" id="topContainer">

 <div class="row">
 	 	
 	 	 <div class="col-md-6 col-md-offset-3" id="topRow">

 	 	 	<h1 class="marginTop">My Salon Loyalty Rewards App</h1>

				<p class="lead">Enter your email during your visits and we will give you $10 gift on your tenth.</p>


				<p > Interested? Enter your email below.</p>



				<?php

					if ($error) {
						
						echo '<div  class="alert alert-danger">'.addslashes($error).'</div>';

					}


					if ($message) {
						
						echo '<div  class="alert alert-success">'.addslashes($message).'</div>';

					}




				?>

						

				
 	 	 <form method="post">

		<div class="form-group center">

		<label for="email">Email</label>

	<input class="form-control" type="email" name="email" id="email" placeholder="Your Email" value="<?php echo addslashes($_POST['email']); ?>"/>

	</div>


	<div class="form-group center">


	</div>

	<input id="getpoints" class="btn btn-success btn-lg marginTop" type="submit" name="submit" value="Get Points"/>


	</form>



					      


					     
 	 	 	
					     



 	 	 	
 	 	 	
 	 	 	
 	 	 </div>


						<div class="modal fade" id="myModal" role="dialog">
    								<div class="modal-dialog">
									<div class="modal-content">
				        	<div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Sign Up for our Loyalty Program</h4>
				       	 </div>

				        	<div class="modal-body">
				         	<form method="post">

				         	<div class="form-group center">
			 	 	 	 	 	 <input class="form-control" type="text" name="name" id="name" value="<?php echo addslashes($_POST['name']); ?>" placeholder="Your Name"/>
			 	 	 	 	 </div>
			 	 	 	 	 <div class="form-group center">
			 	 	 	 	 	 <input class="form-control" type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>" placeholder="Your Email"/>
			 	 	 	 	 </div>
			 	 	 	 	 <div class="form-group center">
			 	 	 	 	 	 <input class="form-control" type="text" name="postalcode" id="postalcode" value="<?php echo addslashes($_POST['postalcode']); ?>" placeholder="Your Postal Code"/>
			 	 	 	 	 </div>

			 	 	 	 	 <?php

					if ($modalerror) {
						
						echo '<div  class="alert alert-danger">'.addslashes($modalerror).'<button type="button" class="close" data-dismiss="modal">RETURN</button></div>';

					}




				?>
			 	 	 	 	 
			 	 	 	 	 	 
			 	 	 	 	 <input id="signup" class="btn btn-success" type="submit" name="submit" value="Sign Up"/>
			 	 	 	 	 
			 	 	 	 </form>



				       	 </div>
				       	 <div class="modal-footer">
				         
				       	 </div>
					      </div>
					      </div>
					      </div>
					      
 	 	
					      <div class="modal fade" id="salonLoginModal" role="dialog">
    								<div class="modal-dialog">
									<div class="modal-content">
				        	<div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Salon Login</h4>
				       	 </div>

				       	 <form class="navbar-form" method="post">
				       	 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myResultsModal">See Client Details</button>
				       	 <a href="map.php"><button type="button" class="btn btn-info">See Map</button></a>
				       	</form>


				       	 <div class="modal-footer">
				         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				       	 </div>
					      </div>
					      </div>
					      </div>

					      <div class="modal fade" id="myResultsModal" role="dialog">
    								<div class="modal-dialog">
									<div class="modal-content">
				        	<div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Client Profiles</h4>
				       	 </div>

				        	<div class="modal-body">

				        		<p>Click on the column headers to sort the tables. </p>
				         						<?php
						echo "<table class=\"sortable\" style='border: solid 2px black;'>";
						  echo "<tr style='text-align:center;'><th>Id</th><th>Last Visited</th><th>Name</th><th>email</th><th>postalcode</th><th>Redeemed offers</th></tr>";

						class TableRows extends RecursiveIteratorIterator {
						     function __construct($it) {
						         parent::__construct($it, self::LEAVES_ONLY);
						     }

						     function current() {
						         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
						     }

						     function beginChildren() {
						         echo "<tr>";
						     }

						     function endChildren() {
						         echo "</tr>" . "\n";
						     }
						}

						
								$servername = "localhost";
								$username = "cl55-mysalon";
								$password = "WUz-qdW.m";
								$dbname = "cl55-mysalon";
								
						try {
						     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						     $stmt = $conn->prepare("SELECT id, `timestamp`, Name, email, postalcode, offercounter FROM myclients");
						     $stmt->execute();

						     // set the resulting array to associative
						     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

						     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
						         echo $v;
						     }
						}
						catch(PDOException $e) {
						     echo "Error: " . $e->getMessage();
						}
						$conn = null;
						echo "</table>";
								?>  	



				       	 </div>
				       	 <div class="modal-footer">
				         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				       	 </div>
					      </div>
					      </div>
					      </div>


 	 	
 </div>

 </div>


<!-- -*************************************************-->







 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as
needed -->
 <script src="js/bootstrap.min.js"></script>

 <script>

 $(".contentContainer").css("min-height",$(window).height());
 
 </script>

</body>
</html>


