<?php
session_start();

//$cusEmail=$_SESSION['cusEmail'];
  //DB connection
include ('../config.php');


if (isset($_POST['submit-search'])) {
      # code...
      $search = mysqli_real_escape_string ($conn, $_POST['search']);
      $sql = " SELECT * FROM salon_info WHERE location1 LIKE '%$search%' or salonName LIKE '%$search%' ORDER BY rand() LIMIT 20";
      $result = mysqli_query($conn , $sql);
      $queryResults = mysqli_num_rows($result);

    }
    else{
      echo "no results found";
    }

    /*$result = $mysqli->query (" SELECT * FROM tbl_salon_description WHERE sl_city LIKE '%$search%' or sl_salon_name LIKE '%$search%' ORDER BY rand() LIMIT 20")
    or die($mysqli->error);*/

?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../../assets/css/style.css">  
    <link rel="stylesheet" href="css/style.css">    
      <link rel="stylesheet" href="../../../assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/animate.css">
    
    <link rel="stylesheet" href="../../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../assets/css/magnific-popup.css">

    <link rel="stylesheet" href="../../../assets/css/aos.css">

    <link rel="stylesheet" href="../../../assets/css/ionicons.min.css">

    <link rel="stylesheet" href="../../../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../../assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../../../assets/css/flaticon.css">
    <link rel="stylesheet" href="../../../assets/css/icomoon.css">
  </head>

  
  <body >

  <style>
body {
  background-image: url("./images/salon8.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>



 <div class="main-container">
     
     <!-- css cange needed -->
     
     <?php include('../../headFoot/headfile.php'); ?>
     
     
    <?php  
      while ($salonList = $result->fetch_assoc()): 
    ?>

      <div class='salon-container'>
        <div class='content'><!-- Detail  -->
          <div class='left-column'><!-- Image and ratings -->
              <?php $image1 = $salonList['image1']; ?>
             <img class='imgid'  src="uploads/<?php echo $image1; ?>">
        <!--    <img class='imgid' src='./images/salonimage2.jpg' > -->
            <div id='rateView'>
                
                
            <?php $totalRate = $salonList['totalRate'];
                  $totalCount = $salonList['totalCount'];
                if($totalCount==0){
                  $percentage=0;    
                }else{
                  $percentage=(int) ($totalRate /$totalCount)*2;
                }
                
                ?>    
              <div id='rateid' class='rates'><?php echo $percentage;echo ".0";?></div>
             <div id= 'viewid' class='views'><?= $salonList['totalCount'] ?> Rated</div>
            </div>
          </div>
          <div class="right-column">
          <span class="content name">
            <!-- <div class='header'> --><!-- Salon Name -->
              <h3><?= $salonList['salonName'] ?></h3>
            <!-- </div> -->
          </span>
          <?php echo $salonList['salonName'] ? '' : ''?><!-- Only print the SPACE not hte salon name -->
          <span class="content star">
            
            <div class="mr-auto float-left">
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </div>
          </span>

          <div class="content details">
            <span class="content city">
            <!-- <div class='header'> --><!-- Salon Name -->
              <?= $salonList['location1'] ?>
            <!-- </div> -->
          </span>
          <?php echo $salonList['location1'] ? ' |' : ''?><!-- Only print the SPACE not hte salon name -->

          <span class="content map">
            <a href="">Show on a map</a>
          </span>
          </div>
          <div class="content description" style="font-size: 13px;"><?= $salonList['about'] ?></div><!-- description -->
         <!--  <div class="button"><a href = '#'>See availability</a></div> -->
        
         <div>
          
          <form method="POST" action="takeSalonId.php" style="margin-top:1px">
          <input type="hidden" name="salonId" value=" <?= $salonList['salonId'] ?>">
          <input name="salonInfo" type="submit" value="Salon Info"  >

          <style> 
              input[type=submit] {

                background-color: #1569C7; /* Green */
                border: none;
                color: white;
                line-height: 10px;
                padding: 10px 25px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 13px;
                border-radius: 10px;
                }
                </style>
           </form>
         </div>
          
          </div>
        </div>
      </div>
     
     
    

  </div>
  <?php endwhile; ?>
      
  </body>
  </html>
