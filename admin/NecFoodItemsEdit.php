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

	<title>Food Menu</title>
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
		<?php
//getting id from url
		$ID = $_GET['id'];

//selecting data associated with this particular id
		$result = mysqli_query($connect, "SELECT * FROM tbl_fooditem WHERE fooditemID= '$ID'");

		while($res = mysqli_fetch_array($result))
		{
			$txtbxFoodItemID = $res['fooditemID'];
			$txtbxFoodItemName = $res['fooditemName'];
			$txtbxFoodItemDescription = $res['fooditemDescription'];
			$txtbxFoodItemAvailability = $res['fooditemAvailability'];
			$txtbxFoodItemPicture = $res['fooditemPicture'];
			$txtbxFoodClassName = $res['foodclassName'];
			$txtbxFoodItemPrice = $res['fooditemPrice'];
		}
		?>
		<!-- Page Content Holder -->
		<div id="content">
			<div class="modal-body" style="padding:70px;">
				<form method="post" enctype="multipart/form-data">
					<p style="font-size: 35px; color: #000;">
						<strong>Edit a Food Item</strong> 
					</p>
					<div class="form-group">
						<label>Name</label>
						<input required
						style="text-transform:capitalize;"
						type="text"
						name="txtbxName"
						value="<?php echo $txtbxFoodItemName; ?>" 
						class="form-control">
					</div>
					<div class="form-group"> 
						<label>Description</label>
						<textarea required
						rows=5
						style="resize:none"
						id="text" 
						name="txtbxDescription" 
						class="form-control"><?php echo $txtbxFoodItemDescription; ?></textarea>
					</div>
					<div class="form-group"> 
						<label>Image</label>
						<input type="file" name="imgDestinationImage" accept="image/x-png,image/gif,image/jpeg" required>
					</div>
					<div class="form-group"> 
						<label>Price(Php)</label>
						<input type="number" placeholder="0.00" required step="0.01" pattern="^\d+(?:\.\d{1,2})?$" name="txtbxPrice" value="<?php echo $txtbxFoodItemPrice; ?>"  class="form-control">
					</div>
					<?php 
					$query = "SELECT * FROM `tbl_foodclassification`";

        // for method 1/
					$result1 = mysqli_query($connect, $query);
					
					$fooditemAvailability = $txtbxFoodItemAvailability;
                    if ($fooditemAvailability = 0) {
                        $fooditemAvailability = "Available";
                    }
                    else if ($fooditemAvailability = 1) {
                        $fooditemAvailability = "Not Available";
                    }
					?>
					<div class="form-group">
						<select name = "availability" class="form-control"> 
							<option value="<?php echo $txtbxFoodItemAvailability ?>"><?php echo $fooditemAvailability; ?></option>
							<option value="0">Not Available</option>
							<option value="1">Available</option>
						</select>
					</div>
					<div class="form-group">
						<select name="Select1" class="form-control">
							<option value="<?php echo $txtbxFoodClassName; ?>"  selected><?php echo $txtbxFoodClassName; ?></option>
							<?php while($row = mysqli_fetch_array($result1)):;?>
								<option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
							<?php endwhile;?>
						</select>
						<input type="hidden" name="FoodItemID" value="<?php echo '$txtbxFoodItemID'; ?>">
					</div>
					<tr>
						<a href="NecFoodItems.php" type="btn" name="btnCancel" class="form-control pull-right btn-danger" style="width:18%; text-align:center; margin:5px;">Cancel</a>
						<input type="submit" name="btnUpdate" value="Update" class="form-control pull-right btn-success" style="width:18%;  margin:5px;">
					</tr>
				</div>			  
			</form>
			<?php
	// incwluding the database connection file
			include_once("connectionString.php");

			if(isset($_POST['btnUpdate']))
			{	
				$varcharFoodItemID = mysqli_real_escape_string($connect, $_POST['FoodItemID']);
				$varcharFoodItemName = mysqli_real_escape_string($connect, $_POST['txtbxName']);
				$varcharFoodItemDescription = mysqli_real_escape_string($connect, $_POST['txtbxDescription']);
				$varcharFoodItemAvailability = mysqli_real_escape_string($connect, $_POST['availability']);
				$varcharFoodItemPrice = mysqli_real_escape_string($connect,$_POST['txtbxPrice']);
				$varcharFoodClassName = mysqli_real_escape_string($connect,$_POST['Select1']);
				$varcharFoodItemImage = addslashes(file_get_contents($_FILES["imgDestinationImage"]["tmp_name"]));
				if(empty($varcharDestinationName))
				{
					$message = "Name field is empty!";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}

				else 
				{	
			//updating the table
					$queryEdit = "UPDATE `tbl_fooditem` SET `fooditemName` = '$varcharFoodItemName', `fooditemDescription` = '$varcharFoodItemDescription', `fooditemAvailability` = '$varcharFoodItemAvailability', `fooditemPrice` = '$varcharFoodItemPrice', `fooditemPicture` = '$varcharFoodItemImage', `foodclassName` = '$varcharFoodClassName' WHERE `tbl_fooditem`.`fooditemID` = '$varcharFoodItemID'";
					if(mysqli_query($connect, $queryEdit))
					{
						$message = "Food Item updated successfully!";
						echo "<script type='text/javascript'>alert('$message');</script>";
            	//redirectig to the display page. In our case, it is index.php
						echo "<script type='text/javascript'>location.href = 'NecFoodItems.php';</script>";
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



