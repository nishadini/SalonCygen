
<?php 




include ('../dbConnection/dbConnection.php');
include ('recommSimilarity.php');


$salons = mysqli_query($conn, " select * from  ratesalon ");


$matrix=array();

while ($salon = mysqli_fetch_array($salons)) {
  # code...
$users = mysqli_query($conn, " select cusUsername from customers where cusId=$salon[userid]");
$cusUsername = mysqli_fetch_array($users);
//img
/*$salonimg = mysqli_query($conn, " select image1 from salon_info where salonId=$salon[salonid]");
$Img = mysqli_fetch_array($salonimg);*/
//name
/*$salonname = mysqli_query($conn, " select salonName from salon_info where salonId=$salon[salonid]");
$name = mysqli_fetch_array($salonname);*/



$matrix[$cusUsername['cusUsername']][$salon['salonName']] = $salon['rate'];

}

$users = mysqli_query($conn, " select cusUsername from customers where cusId=$_GET[cusId]");
$cusUsername = mysqli_fetch_array($users);
/*
$salonlo = mysqli_query($conn, " select location from salon_info where salonId=$salon[salonid]");
$location = mysqli_fetch_array($salonlo);*/

/*var_dump (getRecommendation($matrix, "sahani sineka"));*/
/*var_dump (getRecommendation($matrix, $cusUsername['cusUsername']));*/

/*$sql = mysqli_query($conn, " select * from  salon_info ");
$result = mysqli_query($conn , $sql);
$queryResults = mysqli_num_rows($result);*/



 ?>


 <!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
    <link rel="stylesheet" href="./css/style.css">
  </head>

  
  <body >




 <div class="main-container">

 <table>
    <?php  

      /*while ($salonList = $result->fetch_assoc()): */

    $rec = array();
    $rec = getRecommendation($matrix, $cusUsername['cusUsername']);

    foreach ($rec as $salonName => $ratings) {
  
    ?>


    <tr>
      <td> <?php echo $salonName?></td>
     
    </tr>

    
<?php 
       }
  ?>
</table>

  </div>
 

  </body>
  </html>
