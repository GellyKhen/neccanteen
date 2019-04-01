<?php
	$error=0;
	include('connection.php');
	$id=$_REQUEST['id'];

                    $stmt = $con->prepare("SELECT fooditemPicture FROM tbl_fooditem WHERE fooditemID = ?");
                    $stmt->bindValue(1, $id, PDO::PARAM_STR);
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($result as $output) {
                            $fooditemPicture = $output['fooditemPicture'];
                            header("Content-type: 'jpeg'");
                            echo $fooditemPicture;
                    }                                
?>
