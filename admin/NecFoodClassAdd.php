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
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Food Classification</title>
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
				<div class="modal-body" style="padding:70px;">
		          	<form method="post" enctype="multipart/form-data">
		          		<p style="font-size: 35px; color: #000;">
                            <strong>Add a Food Classification</strong> 
                        </p>
			                <div class="form-group">
			                	<label>Name Of Food Classification</label>
			                	<input required
                                style="text-transform:capitalize;"
                                type="text"
                                name="txtbxName"
                                class="form-control">
							<tr>
								<a href="NecFoodClass.php" type="btn" name="btnCancel" class="form-control pull-right btn-danger" style="width:18%; text-align:center; margin:5px;">Cancel</a>
								<input type="submit" name="btnAddRecord" value="Add" class="form-control pull-right btn-success" style="width:18%;  margin:5px;">
							</tr>
						</div>			  
			      	</form>
			        <?php
						//including the database connection file
						include_once("connectionString.php");

						if(isset($_POST['btnAddRecord'])) 
						{
							$varcharDestinationName = mysqli_real_escape_string($connect, $_POST['txtbxName']);
							// checking empty fields
								
							if(empty($varcharDestinationName))
							{
								$message = "Name field is empty!";
					            echo "<script type='text/javascript'>alert('$message');</script>";
					        }
						 
							else 
							{
								// if all the fields are filled (not empty) 
	
								//insert data to database	
								$queryAdd="INSERT INTO `tbl_foodclassification` (`foodclassID`, `foodclassName`) VALUES (NULL, '$varcharDestinationName')";
								if(mysqli_query($connect, $queryAdd))
								{
									$message = "Food Classification added successfully!";
					            	echo "<script type='text/javascript'>alert('$message');</script>";
					            	//redirectig to the display page. In our case, it is index.php
									echo "<script type='text/javascript'>location.href = 'NecFoodClass.php';</script>";
								}
							}
						}
					?>
		        </div>
            </div>
        </div>

        <!-- jQuery CDN -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    </body>
</html>


		
