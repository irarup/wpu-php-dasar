<?php 
	// CONTROL FLOW adalah bagaimana alur pembacaan program ketika di esekusi
		// Pengulangan for, while, do while, foreach

	//PENGULANGAN FOR
	// Yang ada didalam FOR -> inisalisasi, kondisi/terminasi, increment/decrement
		echo "Pengulangan FOR <br>";
		for ($i=0; $i < 5 ; $i++) { 
			echo ".....Ini adalah pengulangan menggunakan FOR $i <br>";
		}
		
		echo "Pengulangan WHILE <br>";

		$j = 0;
		$k = 0;
		
		while ($j < 5) {
			echo ".....Ini adalah pengulangan menggunakan WHILE $j <br>";
			$j++;
		}

		echo "Pengulangan DO WHILE <br>";

		do {
			echo ".....Ini adalah pengulangan menggunakan DO WHILE $k <br>";
			$k++;
		} while ( $k < 5);

?> 