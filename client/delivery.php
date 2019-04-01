<?php
  include("connection.php");
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
                <img src="images/delivericon.png" style="height: 152px;width: 152px;" alt="" />
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
        <h6 class="mt-4 mb-4">Meats:</h6>

        <div class="row">
<?php


                      $stmt = $con->prepare("SELECT fooditemID,fooditemName,fooditemDescription,
                                              fooditemAvailability,fooditemPicture,foodclassName,fooditemPrice
                                              FROM tbl_fooditem
                                              WHERE fooditemAvailability > 0 and foodclassName = 'Meat'");
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($result as $output) {           
                            $view=0;
                            $fooditemID= $output["fooditemID"];
                            $fooditemName= $output["fooditemName"];
                            $fooditemDescription= $output["fooditemDescription"];
                            $fooditemAvailability= $output["fooditemAvailability"];
                            $fooditemPicture= $output["fooditemPicture"];
                            $foodclassName= $output["fooditemclassName"];
                            $fooditemPrice= $output["fooditemPrice"];

                          if($fooditemPicture==NULL or $fooditemPicture=='')
                              $foodphotourl = "images/photounavailable.png";
                          else{
                              $foodphotourl = "imgsource.php?id=$fooditemID";}
                            
                          echo "

                                      <div class='col-md-4'>
                                        <!-- Widget: user widget style 1 -->
                                        <div class='card card-widget widget-user'>
                                          <!-- Add the bg color to the header using any of the bg-* classes -->
                                          <div class='widget-user-header bg-info-active' 
                                               style='background: url($foodphotourl) center center;'>
                                            <center>
                                            <h3 class='widget-user-username'><input type='checkbox' name='fooditem[]' value='$fooditemID' onclick='foods($fooditemID)'>$fooditemName</h3>
                                            </center>
                                          </div>

                                          <div class='widget-user-image'>
                                            <img class='img-circle elevation-2' src='$foodphotourl' alt='User Avatar'>
                                          </div>
                                          <div class='card-footer'>
                                                  <center>$fooditemDescription</center>                                 
                                                  <center><p> ₱ $fooditemPrice each</p></center>
                                                  <center><div id='$fooditemID' hidden='true'>No. of Orders: <input id='input$fooditemID' type='number' name='nofood[]' min='1' max='$fooditemAvailability' placeholder='max-$fooditemAvailability'></div></center>
                                          </div>
                                        </div>
                                        <!-- /.widget-user -->
                                      </div>

                          ";


                  }

?>

        </div>

        <h6 class="mt-4 mb-4">Vegetables:</h6>

        <div class="row">
<?php


                      $stmt = $con->prepare("SELECT fooditemID,fooditemName,fooditemDescription,
                                              fooditemAvailability,fooditemPicture,foodclassName,fooditemPrice
                                              FROM tbl_fooditem
                                              WHERE fooditemAvailability > 0 and foodclassName = 'Vegetables'");
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($result as $output) {           
                            $view=0;
                            $fooditemID= $output["fooditemID"];
                            $fooditemName= $output["fooditemName"];
                            $fooditemDescription= $output["fooditemDescription"];
                            $fooditemAvailability= $output["fooditemAvailability"];
                            $fooditemPicture= $output["fooditemPicture"];
                            $foodclassName= $output["fooditemclassName"];
                            $fooditemPrice= $output["fooditemPrice"];

                          if($fooditemPicture==NULL or $fooditemPicture=='')
                              $foodphotourl = "images/photounavailable.png";
                          else{
                              $foodphotourl = "imgsource.php?id=$fooditemID";}
                            
                          echo "

                                      <div class='col-md-4'>
                                        <!-- Widget: user widget style 1 -->
                                        <div class='card card-widget widget-user'>
                                          <!-- Add the bg color to the header using any of the bg-* classes -->
                                          <div class='widget-user-header bg-info-active' 
                                               style='background: url($foodphotourl) center center;'>
                                            <center>
                                            <h3 class='widget-user-username'><input type='checkbox' name='fooditem[]' value='$fooditemID' onclick='foods($fooditemID)'>$fooditemName</h3>
                                            </center>
                                          </div>

                                          <div class='widget-user-image'>
                                            <img class='img-circle elevation-2' src='$foodphotourl' alt='User Avatar'>
                                          </div>
                                          <div class='card-footer'>
                                                  <center>$fooditemDescription</center>                                 
                                                  <center><p> ₱ $fooditemPrice each</p></center>
                                                  <center><div id='$fooditemID' hidden='true'>No. of Orders: <input id='input$fooditemID' type='number' name='nofood[]' min='1' max='$fooditemAvailability' placeholder='max-$fooditemAvailability'></div></center>
                                          </div>
                                        </div>
                                        <!-- /.widget-user -->
                                      </div>

                          ";


                  }

?>

        </div>


        <h6 class="mt-4 mb-4">Rice:</h6>

        <div class="row">
<?php


                      $stmt = $con->prepare("SELECT fooditemID,fooditemName,fooditemDescription,
                                              fooditemAvailability,fooditemPicture,foodclassName,fooditemPrice
                                              FROM tbl_fooditem
                                              WHERE fooditemAvailability > 0 and foodclassName = 'Rice'");
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($result as $output) {           
                            $view=0;
                            $fooditemID= $output["fooditemID"];
                            $fooditemName= $output["fooditemName"];
                            $fooditemDescription= $output["fooditemDescription"];
                            $fooditemAvailability= $output["fooditemAvailability"];
                            $fooditemPicture= $output["fooditemPicture"];
                            $foodclassName= $output["fooditemclassName"];
                            $fooditemPrice= $output["fooditemPrice"];

                          if($fooditemPicture==NULL or $fooditemPicture=='')
                              $foodphotourl = "images/photounavailable.png";
                          else{
                              $foodphotourl = "imgsource.php?id=$fooditemID";}
                            
                          echo "

                                      <div class='col-md-4'>
                                        <!-- Widget: user widget style 1 -->
                                        <div class='card card-widget widget-user'>
                                          <!-- Add the bg color to the header using any of the bg-* classes -->
                                          <div class='widget-user-header bg-info-active' 
                                               style='background: url($foodphotourl) center center;'>
                                            <center>
                                            <h3 class='widget-user-username'><input type='checkbox' name='fooditem[]' value='$fooditemID' onclick='foods($fooditemID)'>$fooditemName</h3>
                                            </center>
                                          </div>

                                          <div class='widget-user-image'>
                                            <img class='img-circle elevation-2' src='$foodphotourl' alt='User Avatar'>
                                          </div>
                                          <div class='card-footer'>
                                                  <center>$fooditemDescription</center>                                 
                                                  <center><p> ₱ $fooditemPrice each</p></center>
                                                  <center><div id='$fooditemID' hidden='true'>No. of Orders: <input id='input$fooditemID' type='number' name='nofood[]' min='1' max='$fooditemAvailability' placeholder='max-$fooditemAvailability'></div></center>
                                          </div>
                                        </div>
                                        <!-- /.widget-user -->
                                      </div>

                          ";


                  }

?>

        </div>

        <h6 class="mt-4 mb-4">Desserts:</h6>

        <div class="row">
<?php


                      $stmt = $con->prepare("SELECT fooditemID,fooditemName,fooditemDescription,
                                              fooditemAvailability,fooditemPicture,foodclassName,fooditemPrice
                                              FROM tbl_fooditem
                                              WHERE fooditemAvailability > 0 and foodclassName = 'Dessert'");
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($result as $output) {           
                            $view=0;
                            $fooditemID= $output["fooditemID"];
                            $fooditemName= $output["fooditemName"];
                            $fooditemDescription= $output["fooditemDescription"];
                            $fooditemAvailability= $output["fooditemAvailability"];
                            $fooditemPicture= $output["fooditemPicture"];
                            $foodclassName= $output["fooditemclassName"];
                            $fooditemPrice= $output["fooditemPrice"];

                          if($fooditemPicture==NULL or $fooditemPicture=='')
                              $foodphotourl = "images/photounavailable.png";
                          else{
                              $foodphotourl = "imgsource.php?id=$fooditemID";}
                            
                          echo "

                                      <div class='col-md-4'>
                                        <!-- Widget: user widget style 1 -->
                                        <div class='card card-widget widget-user'>
                                          <!-- Add the bg color to the header using any of the bg-* classes -->
                                          <div class='widget-user-header bg-info-active' 
                                               style='background: url($foodphotourl) center center;'>
                                            <center>
                                            <h3 class='widget-user-username'><input type='checkbox' name='fooditem[]' value='$fooditemID' onclick='foods($fooditemID)'>$fooditemName</h3>
                                            </center>
                                          </div>

                                          <div class='widget-user-image'>
                                            <img class='img-circle elevation-2' src='$foodphotourl' alt='User Avatar'>
                                          </div>
                                          <div class='card-footer'>
                                                  <center>$fooditemDescription</center>                                          
                                                  <center><p> ₱ $fooditemPrice each</p></center>
                                                  <center><div id='$fooditemID' hidden='true'>No. of Orders: <input id='input$fooditemID' type='number' name='nofood[]' min='1' max='$fooditemAvailability' placeholder='max-$fooditemAvailability'></div></center>
                                          </div>
                                        </div>
                                        <!-- /.widget-user -->
                                      </div>

                          ";


                  }

?>

        </div>



        <div>
          <p align="right">
              <a href='index.php' class='btn btn-secondary'>Cancel</a>
              <input type="submit" class='btn btn-primary' name="foodchose" value="Submit">
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <br><br>  
          </p>
        </div>


        </form>
        <!-- /.row -->


<?php
  if(isset($_POST['foodchose'])){
    foreach ($_POST['fooditem'] as $key => $items) {
            if($items!=NULL or $items!='')
            $fooditems[]=$items;
    }
    foreach ($_POST['nofood'] as $key => $nofood) {
           if($nofood!=NULL or $nofood!='')
           $nooffoods[]=$nofood;
    }

    $_SESSION['fooditems']=array();
    $_SESSION['nooffoods']=array();
    
    for ($i=0; $i < count($fooditems); $i++) {
          $f1=$fooditems[$i];
          $f2=$nooffoods[$i];

          array_push($_SESSION['fooditems'],$f1);
          array_push($_SESSION['nooffoods'],$f2);   
    }

    $_SESSION['transactiontype']=1;
    
    echo "<script>window.location='orderinfo.php'</script>";


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
