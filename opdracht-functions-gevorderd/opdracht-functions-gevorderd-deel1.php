<?php

	$md5HashKey = "d1fa402db91a7a93c4f414b8278ce073";

	function argumentfunction_1 ($HashKey,$arg1) {
	   $total = strlen($HashKey);
	   $amount = substr_count($HashKey, $arg1);
	   return "Functie 1: De needle " . $arg1 . " komt " . $amount / $total * 100 . "%" . " voor in de hash key '" . $HashKey . "'";
	}

	function argumentfunction_2 ($arg2) {
		global $md5HashKey;
		$HashKey = $md5HashKey;
		$total = strlen($HashKey);
	   	$amount	 = substr_count($HashKey, $arg2);
	   return "Functie 2: De needle " . $arg2 . " komt " . $amount / $total * 100 . "%" . " voor in de hash key '" . $HashKey . "'";
		
	}

	function argumentfunction_3 ($arg3) {
		$HashKey = $GLOBALS["md5HashKey"];
		$total = strlen($HashKey);
	   	$amount	 = substr_count($HashKey, $arg3);
	   return "Functie 3: De needle " . $arg3 . " komt " . $amount / $total * 100 . "%" . " voor in de hash key '" . $HashKey . "'";
	}
	
?>
<html>
<head>
</head>
<BODY>
	<p><?= argumentfunction_1($md5HashKey,"2"); ?></p>
	<p><?= argumentfunction_2("8"); ?></p>
	<p><?= argumentfunction_3("a"); ?></p>
</BODY>
</html>

