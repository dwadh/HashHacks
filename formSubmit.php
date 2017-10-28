<?php

$cname=$_POST['cname'];
$desc=$_POST['desc'];
$reqfund=$_POST['reqfund'];
$currprofit=$_POST['currprofit'];
$noofcof=$_POST['noofcof'];
$noofadv=$_POST['noofadv'];
$tsize=$_POST['tsize'];
$noofrep=$_POST['noofrep'];
$avgsize=$_POST['avgsize'];
$base=$_POST['base'];
$focus=$_POST['focus'];
$mob=$_POST['mob'];
$reach=$_POST['reach'];
$workcomp=$_POST['workcomp'];
$foconsdata=$_POST['foconsdata'];
$crowdfund=$_POST['crowdfund'];
$mlbusiness=$_POST['mlbusiness'];
echo $mob;

$result=exec('python prediction.py '.$cname. ' '.$desc. ' '.$reqfund. ' '.$noofcof. ' '.$noofadv. ' '.$tsize. ' '.$noofrep. ' '.$avgsize. ' '.$base. ' '.$focus. ' '.$mob. ' '.$reach. ' '.$workcomp. ' '.$foconsdata. ' '.$crowdfund. ' '.$mlbusiness);
	

?>