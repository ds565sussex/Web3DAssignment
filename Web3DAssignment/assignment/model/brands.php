<?php

	try {
		$dsn = 'sqlite:../db/test1.db';
		$dbhandle = new PDO($dsn, 'user', 'password', array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
			PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
			));
		$sql = "SELECT * FROM Brands";
		$stmt = $dbhandle->query($sql);
		$result = null;
		$i = 0;

		while ($data = $stmt->fetch()) {
			
			// Write the database contents to the results array for sending back to the view
			$result[$i]['brand'] = $data['brand'];
			$result[$i]['desc'] = $data['brandDesc'];
			
			// increment the row index
			$i++;
		}
	} catch (PDOEXception $e) {
		print new Exception($e->getMessage());
	}

	$dbhandle = NULL;

	header("Content-Type: application/json");
	echo json_encode($result);


 ?>