<?php

$cname=$_GET['cname'];
$desc=$_GET['desc'];
$reqfund=$_GET['reqfund'];
$currprofit=$_GET['currprofit'];
$noofcof=$_GET['noofcof'];
$noofadv=$_GET['noofadv'];
$tsize=$_GET['tsize'];
$noofrep=$_GET['noofrep'];
$avgsize=$_GET['avgsize'];
$base=$_GET['base'];
$focus=$_GET['focus'];
$mob=$_GET['mob'];
$reach=$_GET['reach'];
$workcomp=$_GET['workcomp'];
$foconsdata=$_GET['foconsdata'];
$crowdfund=$_GET['crowdfund'];
$mlbusiness=$_GET['mlbusiness'];


$result=exec('python prediction.py '.$cname. ' '.$desc. ' '.$reqfund. ' '.$noofcof ' '.$noofadv ' '.$tsize. ' '.$noofrep. ' '.$avgsize. ' '.$base. ' '.$focus. ' '.$mob. ' '.$reach. ' '.$workcomp. ' '.$foconsdata. ' '.$crowdfund ' '.$mlbusiness);
	

?>