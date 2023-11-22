<?php
function sum_upto_limit($n)
	{
	$sum=0;
	   for($i=1;$i<=$n;$i++)
	      {
	        $sum+=$i;
	        
	      }
	 return $sum;
	}
$n=10;
echo "sum of numbers upto ",$n,"is",sum_upto_limit($n);
?>
