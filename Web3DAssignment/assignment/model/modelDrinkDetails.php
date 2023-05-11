<?php

	try {
		$dsn = 'sqlite:../db/test1.db';
		$dbhandle = new PDO($dsn, 'user', 'password', array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
			PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
			));
		$sql = "SELECT * FROM Model_3D";
		$stmt = $dbhandle->query($sql);
		$result = null;
		$i = 0;

		while ($data = $stmt->fetch()) {
			
			// Write the database contents to the results array for sending back to the view
			$result[$i]['brand'] = $data['brand'];
			$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
			$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
			$result[$i]['modelTitle'] = $data['modelTitle'];
			
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