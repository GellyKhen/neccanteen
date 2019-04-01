<?php
  include("connection.php");
  if(($_SESSION['fooditems']==NULL or $_SESSION['fooditems']=='') AND ($_SESSION['nooffoods']==NULL or $_SESSION['nooffoods']=='')){
    echo "<script>window.location='delivery.php'</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/neclogo.png" type="image/ico">
  <title>New England Canteen</title><!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    
    <title>New England Canteen</title>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- banner slider -->
    <link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
    <!--gallery -->
    <link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
    <!-- //gallery -->
    <script src="js/jquery-2.2.3.min.js"></script>
     <!-- numscroller -->
     <script type="text/javascript" src="js/numscroller-1.0.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="icon" href="images/neclogo.png" type="image/ico">
    <!-- //Custom Theme files -->
    <!-- //web-fonts -->
</head>

<body>
<script src='ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script src="m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
  if(typeof _bsa !== 'undefined' && _bsa) {
      // format, zoneKey, segment:value, options
      _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
    }
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
  // format, zoneKey, segment:value, options
  _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
  if(typeof _bsa !== 'undefined' && _bsa) {
      // format, zoneKey, segment:value, options
      _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
    }
})();
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <img class="img-circle" src="images/home.jpg" alt="User Avatar" style="width: 59px;height: 59px;"></img>
              <p>
                &nbsp&nbsp&nbsp Home
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li><li class="nav-item">
            <a href="delivery.php" class="nav-link">
              <img class="img-circle" src="images/delivery.jpg" alt="User Avatar" style="width: 59px;height: 59px;"></img>
              <p>
                &nbsp&nbsp&nbsp Delivery
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li><li class="nav-item">
            <a href="pickup.php" class="nav-link">
              <img class="img-circle" src="images/pickup.jpg" alt="User Avatar" style="width: 59px;height: 59px;"></img>
              <p>
                &nbsp&nbsp&nbsp Pick - Up
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div id="demo-1" style="height: 12px" data-zs-src='["images/g1.jpg","images/g2.jpg","images/g3.jpg","images/g4.jpg","images/g5.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content" >
            <!--/banner-info-->
            <div class="baner-info">
            <center>
                <h4>          
                 <?php $transactiontype=$_SESSION['transactiontype'];
                    if($transactiontype==1)
                      echo "<img src='images/delivericon.png' style='height: 152px;width: 152px;' alt='' />";
                    else
                      echo "<img src='images/pickuplogo.png' style='height: 152px;width: 152px;' alt='' />";
                      
                ?>
                      
               </h4>
                <h4> Delivery </h4>
              </center>
            </div>
            <!--/banner-ingo-->
        </div>
    </div>
    <!--/banner-section-->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h3 class="mt-4 mb-4">Available Dishes</h3>
        <h6 class="mt-4 mb-4">Check Dishes you want to choose</h6>
        <h6 class="mt-4 mb-4">* Required Fields</h6>

        <script type="text/javascript">
            function foods(fooditemID){
              var z = 'input'+fooditemID;

              var x = document.getElementById(fooditemID);
              var w =x.hasAttribute("hidden");
              if (w) {
                    x.removeAttribute("hidden");
                    var y = document.getElementById(z);
                    y.required='true'
                    
                } else {
                    x.setAttribute("hidden", "true");
                    var y = document.getElementById(z);
                    y.removeAttribute("required");
                }

            }
        </script>

        <form method="post">

        <div class="row">

          <div class='col-md-4'>
                  First Name: *<input type="text" name="orderFN" placeholder="First Name" class="form-control" pattern="[a-zA-Z0-9-.\s]+" required="true" maxlength="54">  
          </div>

          
          <div class='col-md-4'>
                  Middle Name:<input type="text" name="orderMN" placeholder="Middle Name" class="form-control" pattern="[a-zA-Z0-9-.\s]+" maxlength="54">  
          </div>


          <div class='col-md-4'>
                  Last Name: *<input type="text" name="orderLN" placeholder="Last Name" class="form-control" pattern="[a-zA-Z0-9-.\s]+" required="true" maxlength="54">  
          </div>

          <div class='col-md-4'>
                  Contact Number: *<input type="Number" class="form-control" name="orderContactNo" required="true" placeholder="Contact" min="1" max="99999999999">  
          </div>

          <div class='col-md-4'>
                  Telephone Number:<input type="tel" name="orderTelephoneNo" placeholder="Telephone" class="form-control" min="1" max="99999999">  
          </div>

          <div class='col-md-4'>
                  Email:<input type="email" name="orderEmail" class="form-control" pattern="[a-zA-Z0-9-.-@\s]+" placeholder="Email" maxlength="54">  
          </div>

          <div class='col-md-4'>
                  Address of Delivery: *<input type="tel" name="orderAddress" placeholder="Address" class="form-control" pattern="[a-zA-Z0-9-.\s]+" required="true" maxlength="129">  
          </div>

          <div class='col-md-4'>
                  Order Affliation: *<input type="tel" name="orderAffliation" placeholder="Order Affliation" placeholder="Address" class="form-control" pattern="[a-zA-Z0-9-.\s]+" required="true" maxlength="129">  
          </div>
        </div>

        <div>
          <br><br>
          <div>
              <p align="right">
                <a href='index.php' class='btn btn-secondary'>Cancel</a>
                <input type="submit" class='btn btn-success' name="orderfood" value="Proceed">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <br><br>  
              </p> 
          </div>
        </div>


        </form>
        <!-- /.row -->


<?php
  if(isset($_POST['orderfood'])){

      date_default_timezone_set('Asia/Manila');
      $dateToday=date("Y-m-d");
    
     $orderFN=$_POST['orderFN'];
     $orderMN=$_POST['orderMN'];
     $orderLN=$_POST['orderLN'];
     $contactNumber=$_POST['orderContactNo'];
     $orderTelephoneNo=$_POST['orderTelephoneNo'];
     $orderEmail=$_POST['orderEmail'];
     $orderAddress=$_POST['orderAddress'];
     $orderAffliation=$_POST['orderAffliation'];
     $transactiontype=$_SESSION['transactiontype'];
     if($transactiontype==1)
        $transactiontype='Delivery';
      else
        $transactiontype='Pick Up';

     $orderPaidStatus='Not Paid';

    $stmt = $con->prepare("INSERT INTO tbl_order(orderFirstName,orderMiddleName,orderLastName,orderPhoneNumber,orderTelephoneNumber,orderEmailAddress,orderAddress,orderAffliation,orderType,orderPaidStatus,orderDate) 
    VALUES(?,?,?,?,?,?,?,?,?,?,?)");

    $stmt->bindParam(1, $orderFN);
    $stmt->bindParam(2, $orderMN);
    $stmt->bindParam(3, $orderLN);
    $stmt->bindParam(4, $contactNumber);
    $stmt->bindParam(5, $orderTelephoneNo);
    $stmt->bindParam(6, $orderEmail);
    $stmt->bindParam(7, $orderAddress);
    $stmt->bindParam(8, $orderAffliation);
    $stmt->bindParam(9, $transactiontype);
    $stmt->bindParam(10, $orderPaidStatus);
    $stmt->bindParam(11, $dateToday);
    $stmt->execute();

    $adminID=$_SESSION['adminID'];
    $stmt = $con->prepare("SELECT LAST_INSERT_ID(orderID) AS orderID FROM tbl_order ORDER BY orderID DESC LIMIT 1");
    $stmt->bindValue(1, $adminID, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as $output) {           
          $orderID= $output["orderID"];
          $_SESSION['orderID']=$orderID;
      }



    for($i = 0 ; $i < count($_SESSION['fooditems']) ; $i++){
     $fooditems=$_SESSION['fooditems'][$i];
     $nooffoods=$_SESSION['nooffoods'][$i];
    
         $num = $nooffoods;
         while( $num > 0) {
            $num--;  
            $stmt = $con->prepare("INSERT INTO tbl_foodorder(fooditemID,orderID) VALUES(?,?)");

            $stmt->bindParam(1, $fooditems);
            $stmt->bindParam(2, $orderID);
            $stmt->execute();            
         }
     
     };

     echo "<script>window.location='deliveryreceipt.php'</script>";
  }
?>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
    <!-- banner slider -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery.zoomslider.min.js"></script>
    <!-- //banner slider -->
    <!-- //gallery -->
    <script src="js/jquery.tools.min.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/jquery.cm-overlay.js"></script>

    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
    <!-- //gallery -->
    <!-- testimonials -->
    <!-- required-js-files-->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoPlay: false,
                navigation: true,
                navigationText: true,
                pagination: true,
            });
        });
    </script>
    <!--//required-js-files-->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
         var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear' 
         };
         */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- navigation  -->
    <script src="js/main.js"></script>
    <!-- //navigation -->
    <!-- newsletter modal -->

</body>
</html>
