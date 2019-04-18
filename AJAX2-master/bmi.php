<?php
	$gewicht = $_GET["gewicht"];
	$lengte = $_GET["lengte_cm"];
	BMIcalc($gewicht,$lengte);
	function BMIcalc($gewicht,$lengte){
		$lengte = $lengte / 100;
		$BMI = $gewicht / ($lengte * $lengte);
		echo "uw BMI is: " . $BMI . "<br>";
		if($BMI > 40){
			echo "obesitas type 3.";
		}
		if($BMI > 35){
			echo "obesitas type 2.";
		}
		if($BMI > 30){
			echo "obesitas type 1.";
		}
		if ($BMI > 25) {
			echo "overgewicht.";
		}
		if ($BMI  > 18) {
			echo "gezond gewicht.";
		}
		if ($BMI < 18) {
			echo "ondergewicht.";
		}
	}
?>
