<?php
$val = $_GET['comp'];
$result=json_decode(exec('python load_review.py '.$val),true);
#echo $result[2];
echo "<b><h2>Reviews</h2></b>";
foreach($result as &$value)
{
    $by = 'A User';
    list($id,$cid,$rid,$uid,$expert,$text)=explode("#",$value);
    if ($rid == '1')
    {
      $by = 'A market expert';
    }

    echo "<br>$text<br><br>By: $by<br><hr><br><br>";
    
}