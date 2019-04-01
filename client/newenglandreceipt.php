<?php
require('fpdf181/fpdf.php');
require('connection.php');

if ($_SESSION['orderID']==NULL or $_SESSION['orderID']=='') {
  echo "<script>window.location='delivery.php'</script>";
}
  
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo

    $this->Image('images/neclogo.png',10,6,37);
    // Arial bold 15
    $this->SetFont('helvetica','B',11);
    // Move to the right
    $this->Cell(40);
    // Title
    $this->Cell(89,5,'Metro Manila Philippines',0,1,'');
    $this->SetFont('helvetica','B',13);
    $this->Cell(40);
    $this->Cell(129,5,'New England College',0,1,'l');
    $this->Cell(40);
    $this->Cell(89,5,'Canteen of the College',0,1,'l');
    $this->Cell(40);
    $this->Cell(89,5,'Cordillera Street Quezon Ave',0,1,'l');
    $this->Cell(40);
    $this->Cell(89,5,'Quezon City',0,1,'l');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
      $pdf = new PDF();
      $pdf->AliasNbPages();
      $pdf->AddPage();


      $pdf->SetFont('helvetica','B','19');
      $pdf->Cell(80);
    // Title
      $orderID=$_SESSION['orderID'];
      date_default_timezone_set('Asia/Manila');
      $dateToday=date("Y-m-d");

                          $stmt = $con->prepare("SELECT orderID,orderFirstName,orderMiddleName,orderLastName,orderPhoneNumber,orderTelephoneNumber,
orderEmailAddress,orderAddress,orderAffliation,orderType,orderPaidStatus,DATE_FORMAT(orderDate, '%Y-%m-%d') as orderDate,DATE_FORMAT(orderDate,'%H:%i') as orderTime FROM tbl_order WHERE orderID = ?");
                          $stmt->bindValue(1, $orderID, PDO::PARAM_STR);
                          $stmt->execute();
                          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                          foreach($result as $output) {
                            $orderID = $output["orderID"];
                            $ID = str_pad($orderID, 4,'0', STR_PAD_LEFT);
                            $orderFirstName = $output["orderFirstName"];
                            $orderMiddleName = $output["orderMiddleName"];
                            $orderLastName = $output["orderLastName"];
                            $name=''.$orderFirstName.' '.$orderMiddleName.' '.$orderLastName;
                            $orderPhoneNumber = $output["orderPhoneNumber"];
                            if($orderPhoneNumber=='' or $orderPhoneNumber==NULL)
                              $orderPhoneNumber='N/A';
                            
                            $orderTelephoneNumber = $output["orderTelephoneNumber"];
                            if($orderTelephoneNumber=='' or $orderTelephoneNumber==NULL)
                              $orderTelephoneNumber='N/A';
                            
                            $orderEmailAddress = $output["orderEmailAddress"];
                            if($orderEmailAddress=='' or $orderEmailAddress==NULL)
                              $orderEmailAddress='N/A';
                            
                            $orderAddress = $output["orderAddress"];
                            $orderAffliation = $output["orderAffliation"];
                            $orderType = $output["orderType"];
                            $orderPaidStatus = $output["orderPaidStatus"];
                            $orderDate = $output["orderDate"];
                            $orderTime = $output["orderTime"];
}

      $pdf->Cell(30,10,'Order of Payment',0,1,'C');
      

      $pdf->SetFont('helvetica','','14');
      $pdf->Cell(41,10,'O.R. Control no. - ',0,0);
      $pdf->Cell(25,10,$ID,0,0);

      $pdf->SetFont('Arial','','12');
      $pdf->CELL(189    ,10,'',0,1);
      $pdf->Cell(130    ,5,'30 Cordillera Street Quezon Avenue Quezon City',0,0);
      $pdf->Cell(59     ,5,'',0,1);

      $pdf->Cell(130    ,5, 'Metro Manila',0,0);
      $pdf->Cell(21     ,5,'Bill Date Issued:',0,0);
      $pdf->Cell(38     ,5,$orderDate,0,1,'R');

      $pdf->CELL(189    ,10,'',0,1);
      $pdf->SetFont('Arial','B','12');
      $pdf->CELL(100    ,5,'BILL TO:',0,1);
      $pdf->SetFont('Arial','','12');


      $pdf->CELL(10 ,5,'',0,1);
      $pdf->CELL(10 ,5,'',0,0);
      $pdf->CELL(30 ,5,'Name:',0,0);
      $pdf->CELL(90 ,5,$name,0,1);

      $pdf->CELL(10 ,5,'',0,0);
      $pdf->CELL(30 ,5,'Phone Number:',0,0);
      $pdf->CELL(90 ,5,$descactivity,0,1);

      $pdf->CELL(10 ,5,'',0,0);
      $pdf->CELL(40 ,5,'Telephone Number:',0,0);
      $pdf->CELL(90 ,5,$date,0,1);

      $pdf->CELL(10 ,5,'',0,0);
      $pdf->CELL(30 ,5,'Email:',0,0);
      $pdf->CELL(90 ,5,$orderEmailAddress,0,1);

      $pdf->CELL(10 ,5,'',0,0);
      $pdf->CELL(30 ,5,'Address:',0,0);
      $pdf->CELL(90 ,5,$orderAddress,0,1);

      $pdf->CELL(10 ,5,'',0,0);
      $pdf->CELL(30 ,5,'Affliation:',0,0);
      $pdf->CELL(90 ,5,$orderAffliation,0,1);

      $pdf->CELL(10 ,5,'',0,0);
      $pdf->CELL(30 ,5,'Order Type:',0,0);
      $pdf->CELL(90 ,5,$orderType,0,1);

      $pdf->CELL(10 ,5,'',0,1);
      $pdf->SetFont('Arial','B','12');
      $pdf->CELL(100    ,5,'ORDERS:',0,1);
      $pdf->SetFont('Arial','','12');
      $pdf->CELL(10 ,5,'',0,1);


    $stmt = $con->prepare("SELECT foodorderID,fooditemID,orderID FROM tbl_foodorder where orderID = ? GROUP by fooditemID");
                          $stmt->bindValue(1, $orderID, PDO::PARAM_STR);
                          $stmt->execute();
                          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                          foreach($result as $output) {
                            $foodorderID = $output["foodorderID"];
                            $fooditemID = $output["fooditemID"];
                            $orderID = $output["orderID"];


                          $stmt2 = $con->prepare("SELECT COUNT(foodorderID) as foodorder FROM tbl_foodorder WHERE fooditemID = ? AND orderID = ?");
                          $stmt2->bindValue(1, $fooditemID, PDO::PARAM_STR);
                          $stmt2->bindValue(2, $orderID, PDO::PARAM_STR);
                          $stmt2->execute();
                          $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                          foreach($result2 as $output2) {
                            $foodorder = $output2["foodorder"];



                          $stmt3 = $con->prepare("SELECT fooditemName,fooditemPrice FROM tbl_fooditem WHERE fooditemID = ?");
                          $stmt3->bindValue(1, $fooditemID, PDO::PARAM_STR);
                          $stmt3->execute();
                          $result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
                          foreach($result3 as $output3) {
                            $fooditemName = $output3["fooditemName"];
                            $fooditemPrice = $output3["fooditemPrice"];

                            $pdf->CELL(10 ,5,'',0,0);
                            $pdf->CELL(30 ,5,$fooditemName,0,0);
                            $pdf->CELL(15 ,5,'('.$foodorder.')',0,0);
                            $pdf->CELL(10 ,5,' = ',0,0);

                            $foodprice = $fooditemPrice * $foodorder;
                            $pdf->CELL(15 ,5,$foodprice.'PHP',0,1);
                                                        
                            $totalfoodprice += $foodprice;
                              }
                    }
            }

      $pdf->SetFont('Arial','B','12');
      $pdf->CELL(189  ,10,'',0,1);
      $pdf->Cell(130  ,5,'',0,0);
      $pdf->Cell(25     ,5,'TOTAL DUE:',0,0);

      $pdf->SetFont('Arial','','12');
      $pdf->Cell(34     ,5,'PHP '.$totalfoodprice,0,1,'R');


      $pdf->SetFont('Arial','B','12');
      $pdf->Cell(130  ,5,'',0,0);
      $pdf->Cell(25     ,5,'REMARKS:',0,0);

      $pdf->SetFont('Arial','B','12');
      $pdf->Cell(34     ,5,$orderPaidStatus,0,1,'R');

      $pdf->CELL(189    ,10,'',0,1);
      $pdf->Cell(130    ,5, 'Noted By:',0,0);
      $pdf->CELL(189    ,10,'',0,1);
      $pdf->CELL(189    ,10,'',0,1);

      $pdf->Cell(155    ,5, 'Administrator In-charge:',0,1);
      $pdf->CELL(189    ,10,'',0,1);
      $pdf->Cell(130    ,5, '________________________',0,0);


    $pdf->Output();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Transient Bill</title>
  <link rel='icon' href='../img/puplogo.ico' type='image/ico'>  
</head>
<body>

</body>
</html>