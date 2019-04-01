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
<?php
	// incwluding the database connection file
	include_once("connectionString.php");

	if(isset($_POST['btnUpdate']))
	{	
		$varcharDestinationID = mysqli_real_escape_string($connect, $_POST['DestinationID']);
		$varcharDestinationName = mysqli_real_escape_string($connect, $_POST['txtbxDestinationName']);
	
		if(empty($varcharDestinationName))
		{
			$message = "Name field is empty!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
		
		else 
		{	
			//updating the table
			$queryEdit = "UPDATE `tbl_foodclassification` SET `foodclassName` = '$varcharDestinationName'  WHERE `tbl_foodclassification`.`foodclassID` = '$varcharDestinationID'";
			if(mysqli_query($connect, $queryEdit))
			{
				$message = "Food Classification updated successfully!";
            	echo "<script type='text/javascript'>alert('$message');</script>";
            	//redirectig to the display page. In our case, it is index.php
				echo "<script type='text/javascript'>location.href = 'NecFoodClass.php';</script>";
			}
		}
	}
?>
<?php
//getting id from url
$DestinationID = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($connect, "SELECT * FROM tbl_foodclassification WHERE foodclassID= '$DestinationID'");

while($res = mysqli_fetch_array($result))
{
	$txtbxDestinationName = $res['foodclassName'];
}
?>
<!DOCTYPE html>
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
            <div id="content" class="modal-body" style="padding:70px;">
				<form name="form1" method="post" enctype="multipart/form-data">
						<p style="font-size: 35px; color: #000;">
                            <strong>Edit Food Classification</strong> 
                        </p>
						<table border="0">
						<div class="form-group">
							<tr> 
								<label>Food Classification Name</label>
								<input required
                                style="text-transform:capitalize;"
                                type="text"
                                name="txtbxDestinationName"
                                value="<?php echo $txtbxDestinationName;?>"
                                class="form-control">
							</tr>
						</div>
						<div class="form-group">
							<tr>
								<input type="hidden" name="DestinationID" value=<?php echo $_GET['id'];?>>
								<a href="NecFoodClass.php" type="btn" name="btnCancel" class="form-control pull-right btn-danger" style="width:25%; margin:5px";><center>Cancel</center></a>
								<input type="submit" name="btnUpdate" value="Update" class="form-control pull-right btn-success" style="width:25%; margin: 5px";>
							</tr>
						</div>
						</table>
				</form>
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
