<?php 
	// ARRAY NUMERIK
		// Penulisan Array cara Lama
			$array  = array("ira", "lukman", 11);
		// Cara Baru
			$angka = [1, 2,5, 6, 7, 10];
			// menambah data


		// Menampilkan array
				var_dump($array);
			echo "<br>";

				$array[] = "April";
				$array[] = 2016;

				print_r($array);
			echo "<br>";


			for ($i=0; $i < count($angka); $i++) { 
				echo $angka[$i] . "<br>";
			}

			echo "<br> Dengan foreach <br>";

			foreach ($array as $key) {
				echo $key . "<br>";
			}

	// ARRAY ASOSIATIF
		//
 ?>