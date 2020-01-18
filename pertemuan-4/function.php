<?php 
	// Function adalah potongan pogram atau baris code yang dapat di ulang
		// built in function fungsi bawaan php cek https://www.php.net/manual/en/funcref.php
		// User definition function
	
	// BUILTIN FUNCTION
	/*function Date
		date(format);
		time();
		mktime();
		strtotime();
	*/
		echo "Date";
		echo date('l, d/M/Y');

	// function Date

		echo "<br>Time<br>";
		echo time();
		// yang tampil disebut UNIX TIMESTAMP/ EPOCH TIME, ini adalah jumlah detik yang telah berlalu sejak 1 januari 1970

	// Make Time mktime(jam, menit, detik, bulan, tanggal, tahun)
		echo "<br>Hari tahun<br>";
		echo date("l", mktime(0, 0, 0, 10, 15, 1997));

	// strtotime
		echo  date("l", strtotime("06 jul 1996")) . "<br>";

	/*Function string
		strlen(); -> menghitung banyaknya string
		strcmp(); -> mengabungkan dua string
		explode(delimiter, string); -> memecag string menjadi array
		htmlspecialchars(string); -> menjaga dari orang iseng/ hacker

	fungction utility
		var_dump(expression);
		isset(var); -> mengecek apakah sebuah vriabel sudah dibuat atau belum
		empty(var); -> apakah variabel yang ada apakah kosong atau tidak
		die(); -> memberhentikan pogram
		sleep(seconds); -> untuk berhenti sementara

	*/

	// USER DIFINED FUNCTION
		//Definisikan fungsi

		function salam($waktu = "Pagi", $nama = "Ira"){
			return "Selamat $waktu, $nama";
		}

		echo salam("siang");



 ?>