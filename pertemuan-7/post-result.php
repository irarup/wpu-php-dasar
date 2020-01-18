<?php 
	if (!isset($_POST['submit'])) {
		header("Location: post.php");
		exit;
	}

	echo "<h3> Selamat Datang, " . $_POST['nama'] . "</h3>";
 ?>