<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
if (isset($_GET['id'])) {
$id = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
$archivingquery2 = "INSERT INTO `tbl_orderarchive` SELECT * FROM `tbl_order` WHERE `fooditemID` = '$id'";
$deletingquery2 = "DELETE FROM `tbl_order` WHERE `tbl_order`.`orderID` = '$id'";



	// $message = "Success Moving Program";
	// echo "<script type='text/javascript'>alert('$message');</script>";	
	
	
		// $message = "Success Deleting";
		// echo "<script type='text/javascript'>alert('$message');</script>";

		if (mysqli_query($connect, $archivingquery2))
		{
			// $message = "Success Moving Program Category";
			// echo "<script type='text/javascript'>alert('$message');</script>";
			if (mysqli_query($connect, $deletingquery2))
			{
				$message = "Successfully Archived Food Classification ";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<script type='text/javascript'>location.href = 'NecOrder.php';</script>";
			}
			else
			{
				$message = "Error Deleting Food Classification";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<script type='text/javascript'>location.href = 'NecOrder.php';</script>";
			}
		}
		else
		{
			$message = "Query Error Moving Food Classification";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script type='text/javascript'>location.href = 'NecOrder.php';</script>";
		}

	


}
else
{
	echo "<script type='text/javascript'>location.href = 'NecOrder.php';</script>";
}
//Clearing Tour Package dependencies 




//redirecting to the display page (index.php in our case)

?>

