<?php 
header('Content-Type: text/xml');
echo '<?xml version= "1.0" encoding = "UTF-8" standalone= "yes"?>';

echo '<repsonse>';
	$food = $_GET['food'];
	$foodArray = array('loaf','fish', 'ham' );
	if (in_array($food, $foodArray)) {
		echo "We do have".$food.!;
	}
	elseif ($food === "") {
		echo "Enter Food";

	}
	else  {
		echo "We dont sell that shit!";
	}
echo '</response>';	

?>
