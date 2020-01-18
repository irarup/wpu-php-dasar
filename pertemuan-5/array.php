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

	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Belajar Array</title>
 	<style type="text/css">
 		.data{
 			border: 1px solid pink;
 			background-color: pink;
 			transition: 1s;
 			margin: 10px;
 			height: 150px;
 			width: 300px;
 			float: left;
 		}
 		.data:hover{
 			transform: rotate(360deg);
 			border-radius: 20%;
 		}
 	</style>
 </head>
 <body>
 	<h3>Array Asosiatif</h3>
 	<?php 
 		function umur($tgl_lahir){
	
			// ubah ke format Ke Date Time
			$lahir = new DateTime($tgl_lahir);
			$hari_ini = new DateTime();
				
			$diff = $hari_ini->diff($lahir);
				
			echo $diff->y ." Tahun";
			echo " ". $diff->m ." Bulan";
			echo " ". $diff->d ." Hari";
		}

 		$data = [
 			[
 				"nama" => "Ira Rupaida",
 				"alamat" => "Bandung",
 				"ttl" => "1997-10-15"
 			],
 			[
 				"nama" => "Lukman Hakim",
 				"alamat" => "Ciamis",
 				"ttl" => "1996-06-06"
 			],
 		];
 	 ?>
 	 
 	 	<?php foreach ($data as $bio) : ?>
 	 		<div class="data">
	 	 		<ul type="none">
	 	 			<li>Nama : <?= $bio["nama"]; ?></li>
	 	 			<li>Alamat : <?= $bio["alamat"]; ?></li>
	 	 			<li>Tanggal : <?= date("l, d M Y", strtotime($bio["ttl"])); ?></li>
	 	 			<li>Umur : <?= umur($bio["ttl"]); ?></li>
	 	 		</ul>
 	 		</div>
 	 	<?php endforeach; ?>
 </body>
 </html> 