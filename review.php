<!DOCTYPE html>
<html>
<style>
#myProgress {
  width: 100%;
  background-color: red;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #4CAF50;
}
</style>
<body onload="move()">
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
$result= exec('python sentiment.py '. $val);
echo "<br><br><br>The Trust level is : " . $result. "%";
?>


<div id="myProgress">
  <div id="myBar"></div>
</div>

<script>
function move() {
	  var elem = document.getElementById("myBar");   
	  var width = <?php echo $result?>;
	  elem.style.width = width + '%';
	}
</script>

</body>
</html>