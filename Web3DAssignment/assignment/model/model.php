<?php
class Model {


	public $dbhandle;

	public function __construct()
	{
		// $dsn = 'sqlite:./db/test1.db';
		// try {	
		// 	$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    	// 												PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
    	// 												PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
		// 												));
		// }
		// catch (PDOEXception $e) {
		// 	echo "Can't connect to the database!";
        // 	print new Exception($e->getMessage());
    	// }
	}

	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT, x3dModelTitle TEXT ,x3dCreationMethod TEXT, modelTitle TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbCreateBrandsTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Brands (Id INTEGER PRIMARY KEY, brand TEXT, brandDesc TEXT)");
			return "Brands table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
				"INSERT INTO Brands (Id, brand, x3dModelTitle) 
					VALUES (1, 'Coke', 'X3D Coke Model', 'Blender', 'Coca Cola Bottle');".
				"INSERT INTO Model_3D (Id, brand, x3dModelTitle ,x3dCreationMethod, modelTitle)
			 		VALUES (2, 'Sprite', 'X3D Sprite Model', 'Blender', 'Sprite Bottle'); ". 
				"INSERT INTO Model_3D (Id, brand, x3dModelTitle ,x3dCreationMethod, modelTitle) 
			 		VALUES (3, 'Fanta', 'X3D Fanta Model', 'Blender', 'Fanta Bottle'); " .
				"INSERT INTO Model_3D (Id, brand, x3dModelTitle ,x3dCreationMethod, modelTitle)
					VALUES (4, 'Coke Can', 'X3D Coke Can Model', 'Blender', 'Coca Cola Can'); ".
				"INSERT INTO Model_3D (Id, brand, x3dModelTitle ,x3dCreationMethod, modelTitle)
					VALUES (5, 'Dr Pepper Can', 'X3D Dr Pepper Can', 'Blender', 'Dr Pepper Can'); ".
				"INSERT INTO Brands (Id, brand, brandDesc)
					VALUES (1, 'Coca Cola', 'It was 1886, John Pemberton, an Atxlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!');" .
				"INSERT INTO Brands (Id, brand, brandDesc)
					VALUES (2, 'Sprite' , 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.');".
				"INSERT INTO Brands (Id, brand, brandDesc)
				 	VALUES (3, 'Fanta' ,'Fanta is an American-owned German brand of fruit-flavored carbonated soft drinks created by Coca-Cola Deutschland under the leadership of German businessman Max Keith..');".
				"INSERT INTO Brands(Id, brand, brandDesc)
					VALUES (4, 'Dr Pepper' ,'Dr Peppers unique, sparkling blend of 23 fruit flavours has been around for well over a century and its still the same, with that distinctive flavour you just cant quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.');"				
		
			);
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function getJSONData(){
		try {
			$dsn = 'sqlite:./db/test1.db';
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
		exit();
	}

}
?>