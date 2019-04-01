<?php
include("connectionString.php");
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Rigel
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('TCPDF/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('NEC Canteen Dev Team');
$pdf->SetTitle('NEC Food Items');
$pdf->SetSubject('Significant Notes Printable');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');


// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetPrintHeader(false);
// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
//set image scale factor 
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  


// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);
$pdf->Image('images/GCTS_LOGO1.png', 70, 5, 73, 20, '', '', '', true, 100);
// add a page
$pdf->AddPage();

// $pdf->Image('', 0, 0, 50, 50, 'PNG', 'https://image.ibb.co/fwB5qz/GCTS_LOGO1.png', '', true, 150, '', false, false, 1, false, false, false);

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// create some HTML content

$html = '<h3 style="text-align:center">New England College</h3><h3 style="text-align:center" >NEC Canteen</h3><h2 style="text-align:center" >Significant Notes</h2><img src="https://image.ibb.co/iNkFqz/PUPLogo88x88.png" style="position:absolute; top:0px; right:0;" /><br><h3></h3>
<h3></h3>
';
$query = "SELECT * FROM tbl_fooditem ORDER BY fooditemAvailability ASC";
$result = mysqli_query($connect, $query);  

while($row = mysqli_fetch_array($result))  
{  
    $fooditemAvailability = $row['fooditemAvailability'];
    if ($fooditemAvailability = 0) {
        $fooditemAvailability = "Available";
    }
    else if ($fooditemAvailability = 1) {
        $fooditemAvailability = "Not Available";
    }


    $html .='

    Food Item #'.$row['fooditemID'].'

    <table>
    <tr>
    <th></th>
    <td></td>
    </tr>
    <tr>
    <th><b>Food Item Name</b></th>
    <td><b>'.$row['fooditemName'].'</b></td>
    </tr>
    <tr>
    <th><b>Description</b></th>
    <td>'.$row['fooditemDescription'].'</td>
    </tr>
    <tr>
    <th><b>Price</b></th>
    <td>'.$row['fooditemPrice'].'</td>
    </tr>
    <tr>
    <th><b>Food Classification</b></th>
    <td>'.$row['foodclassName'].'</td>
    </tr>
    </table>
    <div style="text-align:center"><br />
    </div>';
}

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


// output some RTL HTML content
$html = '<div style="text-align:center"></div>';
$pdf->writeHTML($html, true, false, true, false, '');

// test some inline CSS
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table

// add a page

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------
ob_end_clean();
//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
