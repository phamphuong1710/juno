<?php  
	$sum=0;
	if (isset($cart) && $cart!=NULL) {
		foreach ($cart as $key => $value) {
			$sum=$value->quantity+$sum;
		}
	}
	echo $sum;
?>