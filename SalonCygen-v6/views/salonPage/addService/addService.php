<?php

session_start();

require_once '../config.php';

$salonId=$_SESSION['salonId'];
$salon=$_SESSION['salon'];
$location1=$_SESSION['location1'];   

?>
<!DOCTYPE html>
<html>
<title>SalonCygen &#8482;</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/cc.css">
<link rel="stylesheet" href="../css/cc1.css">
<link rel="stylesheet" href="../css/formcss.css">
    <link rel="icon" href="../favicon.png" sizes="16x16" type="image/png">
<link rel="stylesheet" href="../../createAcc/fonts/material-icon/css/material-design-iconic-font.min.css">
    
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
       
.container{
          position: absolute;
          width: 1000px;
          
          z-index: 15;
          top: 30%;
          left:450px;
          margin-top:30px; 
          margin-bottom: 50px;
         }
    
.discount{
          position: absolute;
          width: 1000px;
          height: 100px;
          z-index: 15;
          background-color: #FFB6C1;
          margin: -100px 0 0 -150px;    
         }
    
.discounttext{
            font-weight: 900;
            color:#DB7093;
            font-size: 35px;
            align-content: center;
            padding-left: 350px;
          }
        
.form{
            padding-top: 25px;
            padding-left: 30px;
            width: 400px;
            height: 300px;
            margin-left: 250px;
          }
    
.form1{
            padding-top: 1px;
            width: 400px;  
        }
    
.form2{
            padding-top: 5px;
            width: 300px;   
        }
    
.text1{
            padding-left: 10px;
            height: 50px;
            padding-right: 10px;
            background-color: floralwhite;
        }
        
.button{
            padding-left: 50px;
            padding-right: 50px;
            font-size: 20px;
            background-color: #da2c43;
            border:none;
            border-radius: 4px;
            cursor: pointer;
            float: left;
            height: 50px;
            margin-left: 120px;
        }
    
.portfolio{
            margin-left: 300px;
            margin-top: 20px;
            background-color: darkgray;
            height: 100px;
          }
    
#records {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 80%;
            margin-left: 10%;
            margin-top: 40px;
        }
    
#records td, #records th {
            border: 1px solid #ddd;
            padding: 8px;
        }
    
#records tr:nth-child(even){background-color: #f2f2f2;}
#records tr:hover {background-color: #ddd;}
    
#records th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #da2c43;
            /*background-color: #2874A6;*/
            color: white;
         }
    

input[type=submit] {
            background-color: #FFC0CB;
            color: black;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

.current{
            margin-left: 400px;
            font-weight: 800;
            margin-top:  60px;
        }
    
    
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="../Images/beauty.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b><?php  echo $salon;  ?></b></h4>
    <p> <?php  echo $location1;?> </p>
  </div>
  <div class="w3-bar-block">
      <a href="../Salon-Admin1.php" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i><?php  echo $salon;  ?></a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>

</nav>
    
<header id="portfolio" class="portfolio">
    <a href="#"><img src="../Images/12-hair3.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><?php  echo $salon;?></h1>
    </div>
</header>
    
<div class=container>
        <div class="discount">
          <p class="discounttext">Add Your Services</p>
            
           <form class="form" method="POST" action="addServiceDb.php">
                <div class="form2">
                <label for="serviceName"><i class="zmdi zmdi-brush"></i></label>
                </div>
              
                <div class="form1">
                <input class="text1" type="text"  name="serviceName" required placeholder="Service Name" />
                </div>
              
                <div class="form2">
                <label for="serviceAmount"><i class="zmdi zmdi-money"></i></label>
                </div>
              
                <div class="form1">
                <input class="text1" type="text"  name="serviceAmount" required placeholder="Service Amount" />
                </div>
              
                <div class="form1">
                <input type="submit" name="submit" id="submit" class="form-submit" value=" Add"/>
                </div>          
            </form>
            
             <div class="hh" style="height:10px; background-color:#4d414a;"></div> 
             <div class="hh" style="height:20px;"></div>    
            
             <?php   
            
                $sql = "SELECT service,serviceId,salonId,amount
                        FROM services
                        WHERE status='1' " ;
                            echo "<br>";
                            echo "<span class='current'>Current Services</span>";
                            echo "<br>";
                        $result= mysqli_query($conn, $sql);
                        echo  "<table id = 'records'>"; 
                        echo "<tr>";
                              echo  "<th>Service Name</th>";
                              echo  "<th>Amount</th>";
                              echo  "<th>Change Amount</th>";
                              echo  "<th>Status</th>";

                          echo "</tr>";  

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                               if($row['salonId']==$salonId){

                                $username =$row['serviceId'];

                                echo "<tr><td>", $row['service'] , "</td>
                                <td>" , $row['amount'] , "</td>
                                <td><form action = 'view1AddService.php' method = 'post'>
                                <input type = 'number' required name = 'amount' placeholder ='Amount'>
                                <input type = 'hidden' name = 'username' value = ", $username, ">
                                <input type = 'submit' value = 'Edit'>
                                </form></td>

                                <td><form action = 'view2AddService.php' method = 'post'>
                                <input type = 'hidden' name = 'username' value = ", $username, ">
                                <input type = 'submit' value = 'Remove'>
                                </form></td>
                                </tr>";
                                }
                         }

                        }else{
                                echo "<tr><td> <span> No Services</span></td>
                                <td><span>No Services</span></td>
                                <td><span>No Services</span></td>
                                <td><span>No Services</span></td>
                                </tr>"; 
                        } 
                                echo "</table>";
        ?>            
                <div style="height:60px;"></div>     
        </div>
</div>   
        
</body>
</html>