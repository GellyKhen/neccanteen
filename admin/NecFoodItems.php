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

    <title>Food Items</title>
    <link rel="shortcut icon" href = "images/tigerVisionIcon.ico">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="admincss/TVAdminSideBar.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php
        include 'NecSidebar.php';
        ?>
        <!-- Page Content Holder -->
        <div id="content">
            <!--TABLE VIEW-->
            <!--CONNECTION STRING-->
            <?php

            include("connectionString.php");  
            $query = "SELECT * FROM tbl_fooditem ORDER BY fooditemAvailability ASC";
            $result = mysqli_query($connect, $query);  

            ?>
            <!--TABLE-->

            <div style="padding:70px;">
                <form method="post" action="NecFoodItemsAdd.php"> 
                    <p style="font-size: 35px; color: #000;">
                        <strong>Food Items</strong> 
                        <button title="Add" type="submit" name="btnAdd" class="btn btn-info btn-lg pull-right" ><span class="glyphicon glyphicon-plus"></button>
                            <a href="NecFoodItemsArchived.php" class="btn btn-info" role="button">Archived Food Items</a>
                            <input type="text" id="txtbxSearch" onkeyup="SearchBar()" placeholder="Search" style="height:30px;font-size:14pt; ">
                        </p>
                        <script>
                            function SearchBar() {
                        // Declare variables 
                        var input, filter, table, tr, td, i;
                        input = document.getElementById("txtbxSearch");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("destination");
                        tr = table.getElementsByTagName("tr");

                        // Loop through all table rows, and hide those who don't match the search query
                        for (i = 0; i < tr.length; i++) {
                          td = tr[i].getElementsByTagName("td")[0];
                          if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                              tr[i].style.display = "";
                          } else {
                              tr[i].style.display = "none";
                          }
                      } 
                  }
              }
          </script>
          <div class="table-responsive" id="destination_table">  
            <table style="width: 2000px;" id="destination" class="table table-hover" style="width:1500px">  
                <tr>  
                    <a title="Print" class="btn btn-info" href="NecFoodItemsPrint.php"><span class="glyphicon glyphicon-print"></span> Print Food Items</a>
                    <th style="width: 10px;"></th>
                    <th>Food Item Name</th>
                    <th>Availability</th>
                    <th>Food Classification</th>
                    
                    <th>Food Item Price</th>
                    <th>Food Item Description</th>

                    <th>Food Picture</th>
                    
                </tr>  
                <?php  
                while($row = mysqli_fetch_array($result))  
                {  
                    $fooditemAvailability = $row['fooditemAvailability'];
                    if ($fooditemAvailability = 0) {
                        $fooditemAvailability = "Available";
                    }
                    else if ($fooditemAvailability = 1) {
                        $fooditemAvailability = "Not Available";
                    }
                    ?>  
                    <tr>
                        <td>
                            <a title="Edit" class="btn btn-success" href="NecFoodItemsEdit.php?id=<?php echo$row['fooditemID']; ?>"><span class="glyphicon glyphicon-pencil"></span></a> 



                            <a title="Delete" class="btn btn-danger" href="NecFoodItemsArchive.php?id=<?php echo$row['fooditemID']; ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                        <td> <?php echo $row['fooditemName'];?> </td>
                        <td> <?php echo $fooditemAvailability ;?> </td>
                        <td> <?php echo $row['foodclassName'];?> </td>
                        <td> <?php echo $row['fooditemPrice'];?> </td>
                        
                        <td> <?php echo $row['fooditemDescription'];?> </td>
                        <td> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['fooditemPicture'] ).'"width="200" />';?> </td>
                    </tr>  
                    <?php
                }
                ?> 
            </table>
        </div>
    </form>
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
</html>
