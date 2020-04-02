<?php
$arrayNum = array('1','2','3','4','5','6','10','20','30','40');
echo "The sum is:".array_sum($arrayNum);

echo "<br> The count is:".count($arrayNum);
function newAverage ($arrayNum) {
  $average = array_sum($arrayNum) / count($arrayNum);
  echo "<br>This is the average:".$average ;
}
  newAverage($arrayNum);
 ?>
