<?php

	function calculate($money,$years,$rente) {
		static $aantal = 0;

		if ($years <> 0) {
			$money *= 1 + $rente/100;
			$aantal++;
			echo "na " . $aantal . " jaar heb ik " . floor($money) . " euro <br>";
			$years--;
			calculate($money,$years,$rente);
		}

	}

	calculate(100000,10,8);
?>