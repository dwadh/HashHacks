<?php

$userid=$_POST['userid'];
$cusid=$_POST['cusid'];
$amt=$_POST['amt'];
#echo $userid, $cusid, $amt;

$result=exec('python process_trans.py '.$cusid. ' '.$userid. ' '.$amt);
#echo "dwed";
header('Location: investorCompany.php?val=1');
?>