<?php  
session_start();
$_accessLevel = $_SESSION['loggedin'];
if ($_accessLevel=='yes'){
} else {
    header("Location: NecLogout.php");
}
 //$connect = mysqli_connect("localhost", "root", "", "testing");  
 include("connectionString.php");                    
      ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Edit Order</title>
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
		$result = mysqli_query($connect, "SELECT * FROM tbl_order WHERE orderID= '$ID'");

		while($res = mysqli_fetch_array($result))
		{
			$txtbxOrderID = $res['orderID'];
			$txtbxOrderFirstName = $res['orderFirstName'];
			$txtbxOrderMiddleName = $res['orderMiddleName'];
			$txtbxOrderLastName = $res['orderLastName'];
			$txtbxOrderPhoneNumber = $res['orderPhoneNumber'];
			$txtbxOrderTelephoneNumber = $res['orderTelephoneNumber'];
			$txtbxOrderEmailAddress = $res['orderEmailAddress'];
			$txtbxOrderAddress = $res['orderAddress'];
			$txtbxOrderAffliation = $res['orderAffliation'];
			$txtbxOrderPaidStatus = $res['orderPaidStatus'];
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
						<label><?php echo $txtbxOrderID; ?></label>
						
						<label><?php echo ''.$txtbxOrderFirstName.' '.$txtbxOrderMiddleName.' '.$txtbxOrderLastName.''; ?></label>
						<br>
						<label><?php echo $txtbxOrderPhoneNumber; ?></label>
						<br>
						<label><?php echo $txtbxOrderTelephoneNumber; ?></label>
						<br>
						<label><?php echo $txtbxOrderAddress; ?></label>
						<br>
						<label><?php echo $txtbxOrderEmailAddress; ?></label>
						<br>
						<label><?php echo $txtbxOrderAddress; ?></label>
						<br>
						<label><?php echo $txtbxOrderAffliation; ?></label>
						<br>
						<label><?php echo $txtbxOrderPaidStatus; ?></label>
						<br>
					</div>



					<?php
					$result2 = mysqli_query($connect, "SELECT * FROM tbl_foodorder WHERE orderID = '$txtbxOrderID'");
					while ($res = mysqli_fetch_array($result2)) {
						$foodItemID = $res['fooditemID'];

						$result3 = mysqli_query($connect, "SELECT * FROM tbl_fooditem WHERE fooditemID = '$foodItemID'");
						while ($res2 = mysqli_fetch_array($result3)) {
							$foodItemName = $res2['fooditemName'];

							?>
							<div class="form-group">
								<label><?php echo $foodItemName; ?></label>
							</div>
							<?php
						}
					}
					?>
					
					<?php
					?>
					<div class="form-group">
						<select name = "selectPaidStatus" class="form-control"> 
							<option><?php echo $txtbxOrderPaidStatus; ?></option>
							<option value="Paid">Paid</option>
							<option value="Not Paid">Not Paid</option>
							<option value="Cancelled">Cancelled</option>
						</select>
					</div>
					
					<tr>
						<a href="NecOrder.php" type="btn" name="btnCancel" class="form-control pull-right btn-danger" style="width:18%; text-align:center; margin:5px;">Cancel</a>
						<input type="submit" name="btnUpdate" value="Update" class="form-control pull-right btn-success" style="width:18%;  margin:5px;">
					</tr>
				</div>			  
			</form>
			<?php
			include_once("connectionString.php");

			if(isset($_POST['btnUpdate']))
			{	
				$varcharOrderPaidStatus = mysqli_real_escape_string($connect, $_POST['selectPaidStatus']);
				if(empty($varcharOrderPaidStatus))
				{
					$message = "Name field is empty!";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}

				else 
				{	
			//updating the table
					$queryEdit = "UPDATE `tbl_order` SET `orderPaidStatus` = '$varcharOrderPaidStatus' WHERE `tbl_order`.`orderID` = '$txtbxOrderID'";
					if(mysqli_query($connect, $queryEdit))
					{
						$message = "Food Item updated successfully!";
						echo "<script type='text/javascript'>alert('$message');</script>";
            	//redirectig to the display page. In our case, it is index.php
						echo "<script type='text/javascript'>location.href = 'NecOrder.php';</script>";
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



