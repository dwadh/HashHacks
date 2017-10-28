<?php

$userid=$_POST['userid'];
$cusid=$_POST['cusid'];
$amt=$_POST['amt'];


$result=exec('python process_trans.py '.$cusid. ' '.$userid. ' '.$amt);

header('Location: investorCompany.php');
?>