<?php
require('fpdf17/fpdf.php');
session_start();

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$event_title = $_GET["event_title"];
$event_id = $_GET["event_id"];
$event_venue = $_GET["event_venue"];
$event_date = $_GET["event_date"];
$first_name = $_GET["first_name"];
$last_name = $_GET["last_name"];
$student_id = $_GET["student_id"];
$phone_number = $_GET["phone_number"];
$email_address = $_GET["email_address"];
$department = $_GET["department"];
$courses = $_GET["courses"];

$pdf = new FPDF('P','mm','A4');

$pdf->SetTitle($student_id . " Attendance Sheet", true);

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Image("images/New_Era_University.png", 10, 10, 25, 25);
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,30,'',0,1);//end of line

$pdf->Cell(189	,5,'New Era University',0,0);
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(189	,5,'Event ID:' . " " . $event_id, 0,1);

$pdf->Cell(189	,5,'Event:' . " " . $event_title, 0,1);

$pdf->Cell(189	,5,'Event Venue:' . " " . $event_venue, 0,1);
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

$pdf->Cell(189	,5,'Student ID:' . " " . $student_id, 0,1);
$pdf->Cell(189	,5,'Name:' . " " . $first_name . " " . $last_name, 0,1);
$pdf->Cell(189	,5,'Phone Number:' . " " . $phone_number, 0,1);
$pdf->Cell(189	,5,'Email Address:' . " " . $email_address, 0,1);
$pdf->Cell(189	,5,'Department:' . " " . $department, 0,1);
$pdf->Cell(189	,5,'Course:' . " " . $courses, 0,1);

$pdf->Cell(189	,50,$pdf->Image("http://localhost/NEU%20Event%20Attendance/generate.php?student_id=$student_id", 10, 120, 50, 50, "png"),0,1);//end of line


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,20,'',0,1);//end of line
$pdf->SetFont('Arial', 'i', 12);
$pdf->Cell(189	,5,'Please print this pdf and present it to the Officer at the event venue.', 0,0);




$pdf->Output($student_id . " Attendance Sheet.pdf", "i");
?>