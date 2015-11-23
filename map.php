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

 	 	 	

				<?php

					if ($error) {
						
						echo '<div  class="alert alert-danger">'.addslashes($error).'</div>';

					}


					if ($message) {
						
						echo '<div  class="alert alert-success">'.addslashes($message).'</div>';

					}




				?>



				<div id="map_div"></div>

				<div>

									<?php


								//	include("login.php");
					//include("connection.php");

			//	for ($i = 1; $i<22; $i++) {

					// $query = "SELECT * FROM myclients WHERE id =".$i;
					//$result =mysqli_query($link, $query);
				//		if ($results=mysqli_fetch_array($result)) {
							# code...
				//			$encodePlace=urlencode($results['postalcode']);
						

                //Use Google API
               // $url = 'http://maps.googleapis.com/maps/api/geocode/json?address='.$encodePlace.'&sensor=false';
                //Use Curl to send the request
               

              //   $resp_json = file_get_contents($url);
             //   $obj = json_decode($resp_json, true);

              //  echo $obj["results"][0]["geometry"]["location"]["lat"];
              //  echo $obj["results"][0]["geometry"]["location"]["lng"];


              //  $updateSql = "UPDATE  `myclients` SET `latitude` =  '".$obj["results"][0]["geometry"]["location"]["lat"]."', `longitude` =  '".$obj["results"][0]["geometry"]["location"]["lng"]."' WHERE `id` =".$i;

              //  mysqli_query($link, $updateSql);

                

              //  sleep(1);
              //  }
            //}
           
        ?>

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
				       	 <button type="button" class="btn btn-info">See Map</button>
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

 </div>


<!-- -*************************************************-->





 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["map"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Lat', 'Long', 'Name'],
          <?php
					$servername = "localhost";
								$username = "cl55-mysalon";
								$password = "WUz-qdW.m";
								$dbname = "cl55-mysalon";
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
					    die("Connection failed: " . mysqli_connect_error());
					}

					$sql = "SELECT latitude, longitude, Name FROM myclients";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					        echo "[ " . $row["latitude"]. ", ".$row["longitude"]. ", '" . $row["Name"]. "'],"."\n";
					    }
					} 
				

					mysqli_close($conn);
					?>  

        ]);

        var map = new google.visualization.Map(document.getElementById('map_div'));
        map.draw(data, {showTip: true});
      }

    </script>

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


