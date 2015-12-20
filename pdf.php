<?php
require('fpdf.php');

$name=$_POST['name'];
$admno=$_POST['admno'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$sex=$_POST['sex'];
$nationality=$_POST['nationality'];
$religion=$_POST['religion'];
$caste=$_POST['caste'];
$dob=$_POST['dob'];
$reason=$_POST['reason'];
#$rownclude 'config.inc.php';
#$conn = mysql_connect($db_host, $db_user, $db_pass) or die('Error connecting to mysql');
#mysql_select_db($db_name);

                                
#$adno=$_POST['admno'];

#$qry="select * from registration where admno='$adno'"; 
#$qry="select * from registration where admno='100/10'"; 
#$st=mysql_query($qry) ;

#if(mysql_num_rows($st)==0) { 

 
# echo " <br>";
# echo "<br>";
# echo "<br>";
# echo "<br>";
# echo " <script>
#       alert(\"You have not Applied for Semester Registration\") 
#       window.location.assign(\"http://www.mec.ac.in/semreg-2016/index.html\")
#       </script>";        
       
#  }
                                                                                      
#else {                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                          

                                                                                                              


# $rs=mysql_fetch_row($st);

# $nam=$rs[1];
# $adn=$rs[2];
# $roll=$rs[3];
# $br=$rs[4];
# $batch=$rs[5];
# $sem=$rs[6];
# $cat=$rs[7];
# $crdate=$rs[8];
# $crdts=$rs[9];
# $hosteller=$rs[10];
# $hosteldues=$rs[11];
# $scst=$rs[12];
# $presentad=$rs[13];
# $phonepresent=$rs[14];
# $permad=$rs[15];
# $phoneparent=$rs[16];
                     
                                                                                                                                                                                                             
                                                                                                                                                                                                                                                                                     
                                                                                                                                                                                                                                                                                     
                                                                                                                                                                                                                                                                                     

# $conn = mysql_close($conn);
                                                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                                                    
                                                                                                                





$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf-> SetTitle("Model Engineering College - Semester Registration");
$pdf->SetFont('Arial','',12);
$pdf->Text(70,15,' Model Engineering College');
$pdf->SetFont('Arial','',10);
#$pdf->Text(75,15,'Cochin, Kerala, India, Pin: 682 021');
#$pdf->SetFont('Arial','',10);
#$pdf->Text(65,20,'Request for Transfer Certificate / Course & Conduct Certificate');
###$pdf->Rect(10,10,35,10);
$pdf->SetFont('Arial','U',10);
$pdf->Text(55,25,'Request for Transfer Certificate / Course & Conduct Certificate');

$pdf->SetFont('Arial','',10);

$row=40;
$col=25;

$pdf->Text($col,$row,'From ');
$pdf->Text($col+5,$row+=5,$name);
$pdf->Text($col+5,$row+=5,$admno.', '.$branch);
$pdf->Text($col+5,$row+=5,$course);

$pdf->Text($col,$row+=10,'To');
$pdf->Text($col+5,$row+=5,'The Principal ');

$pdf->Text($col,$row+=15,'Respected Sir,');
$pdf->Text($col+5,$row+=7,'As I have completed / am discontinuing my course of study, I request you to issue my ');
$pdf->Text($col,$row+=5,'Transfer Certificate / Course & Conduct Certificate at the earliest. The Liability clearance ');
$pdf->Text($col,$row+=5,'certificate is attached herewith / was submitted at the office on ...................................');
$pdf->Text($col,$row+=5,'My Personal details as per college records are given below.');


$pdf->Text($col+20,$row+=10,'Name ');

$pdf->SetFont('Arial','B',10);
$pdf->Text($col+100,$row,$name);
$pdf->SetFont('Arial','',10);

$pdf->Text($col+20,$row+=9,'Date of Birth ');

$pdf->SetFont('Arial','B',10);
$pdf->Text($col+100,$row,$dob);
$pdf->SetFont('Arial','',10);

$pdf->Text($col+20,$row+=9,'Sex');

$pdf->SetFont('Arial','B',10);
$pdf->Text($col+100,$row,$sex);
$pdf->SetFont('Arial','',10);

$pdf->Text($col+20,$row+=9,'Nationality ');

$pdf->SetFont('Arial','B',10);
$pdf->Text($col+100,$row,$nationality);
$pdf->SetFont('Arial','',10);

$pdf->Text($col+20,$row+=9,'Religion & Caste ');

$pdf->SetFont('Arial','B',10);
$pdf->Text($col+100,$row,$religion);
$pdf->Text($col+125,$row,$caste);


$pdf->SetFont('Arial','',10);

$pdf->Text($col+20,$row+=9,'Admission No.');

$pdf->SetFont('Arial','B',10);
$pdf->Text($col+100,$row,$admno);
$pdf->SetFont('Arial','',10);

$pdf->Text($col+20,$row+=9,'Course to which Admitted ');

$pdf->SetFont('Arial','B',10);
$pdf->Text($col+100,$row,$course);
$pdf->SetFont('Arial','',10);

$pdf->Text($col+20,$row+=9,'Branch of Study / Specialisation');

$pdf->SetFont('Arial','B',10);
$pdf->Text($col+100,$row,$branch);

$pdf->SetFont('Arial','',10);
$pdf->Text($col+20,$row+=9,'Reason for Leaving');

$pdf->SetFont('Arial','B',10);
$pdf->Text($col+100,$row,$reason);

$pdf->SetFont('Arial','',10);
$pdf->Text($col,$row+=15,'Signature of Student  ');
$pdf->Text($col+125,$row,'Date : ');

$pdf->Line($col, $row+=5, 230-50, $row);

$pdf->SetFont('Arial','',10);
$pdf->Text($col,$row+=9,'Last date of attendance :');
$pdf->Text($col+100,$row,'All liabilities cleared. TC may be issued');
$pdf->Text($col+100,$row+=9,'Character & Conduct ..........................');
$pdf->Text($col+100,$row+=9,'HOD :                     Date:');

$pdf->Text($col,$row+=15,'T.C No.................issued on .............');
$pdf->Text($col,$row+=10,'C.C No.................issued on .............');

$pdf->SetFont('Arial','B',10);
$pdf->Text($col+140,$row+=10,'PRINCIPAL');

$pdf->SetFont('Arial','B',10);


$pdf->Output('TC-Application-'.$name.'.pdf','D');


#}

?>