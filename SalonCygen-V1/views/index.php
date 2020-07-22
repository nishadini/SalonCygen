
<?php
session_start();

include ('./dbConnection/dbConnection.php');

if(isset($_SESSION['cusUsername'])) {
    
$role=$_SESSION['role'];
$cusUsername=$_SESSION['cusUsername'];

    
}
else if(isset($_SESSION['salonUsername'])){
    $role=$_SESSION['role'];
    $salonUsername=$_SESSION['salonUsername'];

}else{
    
    $_SESSION['cusUsername'] ="";
    $_SESSION['role']=1; // Unregisterd user
    
}



    $result = $conn->query
                            ("SELECT * FROM salon_info WHERE totalRate BETWEEN 50 AND 100 ORDER BY 
                            rand() LIMIT 4") or die($conn->error);

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Salon Cygen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <link rel="stylesheet" href="../assets/css/aos.css">

    <link rel="stylesheet" href="../assets/css/ionicons.min.css">

    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/icomoon.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href=../"css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
      
    
      
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span>SalonCygen</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
        
                <?php
                if ($_SESSION['role']==1){
                    ?>
         <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item active"><a href="login/login1/index.php" class="nav-link">Customer</a></li>        
         <li class="nav-item active"><a href="salonOwnerAccount/login/login1/index.php" class="nav-link">Salon Owner</a></li>  
         <li class="nav-item active"><a href="salonowner.php" class="nav-link">Admin</a></li>
                <?php
                }else if ($_SESSION['role']==2){
                    ?>
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="profile/profile.php" class="nav-link"><?php echo "$cusUsername";?></a></li>
                <li class="nav-item active"><a href="logout/logout.php" class="nav-link">Sign out</a></li>
                <?php
                }else if ($_SESSION['role']==3){
                    ?>
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="salonOwnerAccount/login/login1/index.php" class="nav-link">Salon Owner - <?php echo $_SESSION['salonUsername'];?></a></li>
                <li class="nav-item active"><a href="logout/logout.php" class="nav-link">Sign out</a></li>
                <?php
                }else if ($_SESSION['role']==4){
                  ?>
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="profile/profile.php" class="nav-link">Admin</a></li>
                <li class="nav-item active"><a href="logout/logout.php" class="nav-link">Sign out</a></li>
                <?php  
                }
                ?>
            </ul>
	      </div>
	    </div>
	  </nav>
 
    <div class="hero-wrap js-fullheight" style="background-image: url('../assets/images/Background2.jpg');" data-stellar-background-ratio="0.5">
        
      <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> SALONCYGEN</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Where beauty meets Quality</p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate p-4">
              <!-- Search form -->
               <form action="./salonPage/salonListView/page_list_result.php"  class="search-property-1" method = "POST" enctype="multipart/form-data"> 
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#"></label> 
		          				<div class="form-field">
		          					<div class="icon"><span class="ion-ios-search"></span></div>
                         <input type="text" name ="search" class="form-control" placeholder="Search place">
				              </div>
			              </div>
		        			</div>
		        			<!-- <div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Date</label>
		        					<div class="form-field">
		          					<div class="icon"><span class="ion-ios-calendar"></span></div>
				                <input type="text" class="form-control checkin_date" placeholder="Check In Date">
				              </div>
			              </div>
		        			</div> -->
		        		<!-- 	<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Time</label>
		        					<div class="form-field">
		          					<div class="icon"><span class="ion-ios-calendar"></span></div>
				                <input type="text" class="form-control checkout_date" placeholder="Check Out Date">
				              </div>
			              </div>
		        			</div>
		        			 -->
		        			<div class="col-lg align-self-end">
		        				<div class="form-group">
		        					<div class="form-field">
				                <input type="submit" value="Search" class="form-control btn btn-primary" name = "submit-search">
				              </div>
			              </div>
		        			</div>
		        		</div>
                     
                        
		        	</form>
		        </div>
                </div>
	    	</div>
        </div>    
    </section>


    <!-- Submit search for city -->

<!-- //Submit search for city -->

<!-- Rated salons -->
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Dream Salon For You</h2>
            
          </div>
        </div>
        



<div class="SalonList-container" id="salonList">
 <table width="100%" cellspacing="0" cellpadding="2" border="0" style="overflow: wrap"> 
 <tr> 
<?php  
      while ($salonList = $result->fetch_assoc()): 
    ?>



        <div class="row" >
        <!-- first card -->
        <td  >
          <div class="col-md-6 col-lg-3 ftco-animate" >


            <div class="project" style="width:250px;">
              <div class="img">

                <img src="./salonPage/images/destination-1.jpg" class="img-fluid" alt="Colorlib Template">

              </div>
              <div class="text">
              <!-- Salon name -->
                <h4 class="price"> <?= $salonList['salonName'] ?></h4>
                 
                <h3 style="font-size: 14px;"><?= $salonList['location'] ?></h3>

                <?php  $pos=strpos($salonList['about'], ' ', 32); ?>
                 <span style="font-size: 10px; color: #C6C2C1; "><?php echo substr($salonList['about'],0,$pos ); ?>...</span> 
                <div class="star d-flex clearfix">
                  <div class="mr-auto float-left">
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </div>
                  <div class="float-right">
                    <!-- <span class="rate"><a href="#">(120)</a></span> -->

                    <form method="POST" action="./salonPage/index.php">
          <input type="hidden" name="salonId" value=" <?= $salonList['salonId'] ?>">
          <input name="salonInfo" type="submit" value="More" >

          <style> 
              input[type=submit] {

                background-color: #1569C7; /* Green */
                border: none;
                color: white;
                height: 30px;
                padding: 3px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                border-radius: 5px;
                }
                </style>
           </form>
                  </div>
                </div>
              </div>
               <a href="../images/destination-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="icon-expand"></span>
              </a> 
             </div>
          </div>
<!-- //first card -->
           
         </td>  
          
        </div>
        <?php endwhile; ?>
          </tr>
        </table> 
        
      </div>

    </section>
<!-- //Ratedsalons -->
   
 <!-- Recommendation salons -->
    <section class="ftco-section" >
        
        <!-- <button onclick="window.location.href='salonOwnerAccount/login/login1/index.php'">Continue</button> -->
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Recommendations For You</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="project">
              <div class="img">
                <img src="images/destination-1.jpg" class="img-fluid" alt="Colorlib Template">
              </div>
              <div class="text">
                <h4 class="price"> Wev should load salons from here</h4>
                <span>15 Days Tour</span>
                <h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
                <div class="star d-flex clearfix">
                  <div class="mr-auto float-left">
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </div>
                  <div class="float-right">
                    <span class="rate"><a href="#">(120)</a></span>
                  </div>
                </div>
              </div>
              <a href="images/destination-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="icon-expand"></span>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="project">
              <div class="img">
                <img src="images/destination-2.jpg" class="img-fluid" alt="Colorlib Template">
              </div>
              <div class="text">
                <h4 class="price">$400</h4>
                <span>15 Days Tour</span>
                <h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
                <div class="star d-flex clearfix">
                  <div class="mr-auto float-left">
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </div>
                  <div class="float-right">
                    <span class="rate"><a href="#">(120)</a></span>
                  </div>
                </div>
              </div>
              <a href="images/destination-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="icon-expand"></span>
              </a>
            </div>
          </div>
          
          
        </div>
        
      </div>
    </section>
<!-- //recommendation salons -->   
   
      </section>
<?php include('headFoot/footfile.php'); ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery.easing.1.3.js"></script>
  <script src="../assets/js/jquery.waypoints.min.js"></script>
  <script src="../assets/js/jquery.stellar.min.js"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/jquery.magnific-popup.min.js"></script>
  <script src="../assets/js/aos.js"></script>
  <script src="../assets/js/jquery.animateNumber.min.js"></script>
  <script src="../assets/js/bootstrap-datepicker.js"></script>
  <script src="../assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../assets/js/google-map.js"></script>
  <script src="../assets/js/main.js"></script>
    
  </body>
</html>