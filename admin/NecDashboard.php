<?php  
session_start();
$_accessLevel = $_SESSION['loggedin'];
if ($_accessLevel=='yes'){
} else {
    header("Location: TVAdminLogout.php");
}
 //$connect = mysqli_connect("localhost", "root", "", "testing");  
 include("connectionString.php");                    
      ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dashboard</title>
        <link rel="shortcut icon" href = "images/tigerVisionIcon.ico">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="admincss/TVAdminSideBar.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link href="css/TVDestinationsOffered.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
         <?php
require 'NecSidebar.php';
?>
          

            <!-- Page Content Holder -->
            <div id="content">
                <style type='text/css'>
                  .bold-green-font {
                    font-weight: bold;
                    color: green;
                  }

                  .bold-font {
                    font-weight: bold;
                  }

                  .right-text {
                    text-align: right;
                 }

                  .large-font {
                    font-size: 15px;
                  }

                  .italic-darkblue-font {
                    font-style: italic;
                    color: darkblue;
                  }

                  .italic-purple-font {
                    font-style: italic;
                    color: purple;
                  }

                  .underline-blue-font {
                    text-decoration: underline;
                    color: blue;
                  }
                
                  .gold-border {
                    border: 3px solid gold;
                  }

                  .deeppink-border {
                    border: 3px solid deeppink;
                  }

                  .orange-background {
                    background-color: orange;
                  }

                  .orchid-background {
                    background-color: orchid;
                  }

                  .beige-background {
                   background-color: beige;
                  }

                </style>
 

                </div>
            </div>
            <!--END OF TABLE-->
            <!--END OF TABLE VIEW-->
        </div>
        <!-- jQuery CDN -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>
   <!-- while($res = mysqli_fetch_array($result3))  
  {

    $reservation_ID = $res['reservation_ID'];
    $reservation_firstName = $res['reservation_firstName'];
    $reservation_lastName = $res['reservation_lastName'];
    $reservation_contactNum = $res['reservation_contactNum'];
    $reservation_emailAdd = $res['reservation_emailAdd'];
    $reservation_address = $res['reservation_address'];
    $reservation_dateApplied = $res['reservation_dateApplied'];
    $reservation_plannedDate = $res['reservation_plannedDate'];
    $reservation_packageID = $res['reservation_packageID'];
    $reservation_packageType = $res['reservation_packageType'];
    $reservation_status = $res['reservation_status'];
    $reservation_totalHead = $res['reservation_totalHead'];
    $reservation_totalPrice = $res['reservation_totalPrice'];
    $reservation_pricePerHead = $res['reservation_pricePerHead'];
    $reservation_paid = $res['reservation_paid'];
    $reservation_debt = $res['reservation_debt'];
  
    $dateappliedyear = date('Y', strtotime($reservation_dateApplied));
    $dateappliedday = date('d', strtotime($reservation_dateApplied));
    $dateappliedmonth = date('m', strtotime($reservation_dateApplied));
    $planneddateyear = date('Y', strtotime($reservation_plannedDate));
    $planneddateday = date('d', strtotime($reservation_plannedDate));
    $planneddatemonth = date('m', strtotime($reservation_plannedDate));
  


    echo " ['".$reservation_ID."".$reservation_firstName."', new Date(".$dateappliedyear.",".$dateappliedmonth.",".$dateappliedday."), new Date(".$planneddateyear.",".$planneddatemonth.",".$planneddateday.")], ";
  }-->
</html>
