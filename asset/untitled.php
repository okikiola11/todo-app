<?php

$skill_intr				=	'1,2,3,4,5,6,7,8,9,';

$trmskillintr 	   		= 	rtrim($skill_intr, ",");
$intr_vaccine_array		= 	explode(',', $trmskillintr);

foreach($intr_vaccine_array as $intr)
{
	
	echo $intr."<br />";	
}
															
?>