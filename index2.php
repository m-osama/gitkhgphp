<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<title>
			khg|project
		</title>
	</head>
	<body>
		<form>
			<div class="form-group">
				<label for="text">Name</label>
				<input type="text" name="Name">
			</div>
			<div class="form-group">
				<label for="text">Scan</label>
				<input type="text" name="Scan">
			</div>
			<div class="form-group">
				<label for="text">DataReview</label>
				<input type="text" name="DataReview">
			</div>
			<div class="form-group">
				<label for="text">Check</label>
				<input type="text" name="Check">
			</div>
			<div class="form-group">
				<label for="text">ApproveOK</label>
				<input type="text" name="ApproveOK">
			</div>									
					<button id="sub1" type="Submit" class="btn btn-default">submit</button>
			// hi osama your site is very bad fuck to github solution
		</form>
<br /><br /><br /><br />
<?php
	require("Db.class.php");
	// Creates the instance
	$db = new Db();
	?>
<form action="$db->query("INSERT INTO `khgphp`.`Employee_Data` (`id`, `emp_name`, `scan`, `dataentry`, `review`, `check`, `approve`, `date`, `created`) VALUES (NULL, $_Name, $_Scan, '232', '232', '22', '23', '2015-05-01 00:00:00', CURRENT_TIMESTAMP)")" method="post" action="post">
    Name: <input type="text" name="Name" /><br />
    Scan: <input type="text" name="Scan" /><br />
    DataReview: <input type="text" name="DataReview" /><br />
    Check: <input type="text" name="Check" /><br />
    ApproveOK: <input type="text" name="ApproveOK" /><br />
    First Row: <input type="text" name="rowone" /><br />
    Second Row: <input type="text" name="rowtwo" /><br />
    Third Row: <input type="text" name="rowthree" /><br />
    <input type="submit" value="Go" />
    </form>

// <?php
// 	require("Db.class.php");
// 	// Creates the instance
// 	$db = new Db();

	// Draw table from text file
$lines = preg_split('~\s*[\r\n]+\s*~', file_get_contents('prod.txt'));

foreach($lines as $i => $line) {
    $pairs = explode(';', $line);
    foreach($pairs as $pair) {
        list($column, $value) = explode('=', $pair, 2);
        $columns[$column] = true;
        $rows[$i][$column] = $value;
    }
}

$columns = array_keys($columns);


echo '<table><thead><tr>';

foreach($columns as $column) {
    echo '<th>'.$column.'</th>';
}

echo '</tr></thead><tbody>';

foreach($rows as $row) {
    echo '<tr>';
    foreach($columns as $column) {
        echo '<td>'.$row[$column].'</td>';
    }
    echo '</tr>';
}
echo '</tbody></table>';
	// end draw

	// // 3 ways to bind parameters :		
	
	// // 1. Read friendly method	
	// $db->bind("firstname","John");
	// $db->bind("age","19");
	// // 2. Bind more parameters
	// $db->bindMore(array("firstname"=>"John","age"=>"19"));		
	// // 3. Or just give the parameters to the method
	// $db->query("SELECT * FROM Persons WHERE firstname = :firstname AND age = :age", array("firstname"=>"John","age"=>"19"));
	// //  Fetching data
	// $person 	 =     $db->query("SELECT * FROM Persons");
	// // If you want another fetchmode just give it as parameter
	// $persons_num =     $db->query("SELECT * FROM Persons", null, PDO::FETCH_NUM);
	
	// // Fetching single value
	// $firstname	 =     $db->single("SELECT firstname FROM Persons WHERE Id = :id ", array('id' => '3' ) );
	
	// // Single Row
	// $id_age 	 =     $db->row("SELECT Id, Age FROM Persons WHERE firstname = :f", array("f"=>"Zoe"));
		
	// // Single Row with numeric index
	// $id_age_num  =     $db->row("SELECT Id, Age FROM Persons WHERE firstname = :f", array("f"=>"Zoe"),PDO::FETCH_NUM);
	
	// // Column, numeric index
	// $ages  		 =     $db->column("SELECT age FROM Persons");
	// // The following statemens will return the affected rows
	
	// // Update statement tozzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz
	// $update		=  $db->query("UPDATE Persons SET firstname = :f WHERE Id = :id",array("f"=>"Johny","id"=>"1"));

	// insert		=  $db->query("INSERT INTO `khgphp`.`Employee_Data` (`id`, `emp_name`, `scan`, `dataentry`, `review`, `check`, `approve`, `date`, `created`) VALUES (NULL, 'mosama1', '12', '232', '232', '22', '23', '2015-05-01 00:00:00', CURRENT_TIMESTAMP)"); 
    
	// Insert statement
//	$insert	 	=  $db->query("INSERT INTO Persons(Firstname,Age) 	VALUES(:f,:age)",array("f"=>"Vivek","age"=>"20"));
	
	// Delete statement
//	$delete	 	=  $db->query("DELETE FROM Persons WHERE Id = :id",array("id"=>"6")); 
	
	// function d($v,$t) 
	// {
	// 	echo '<pre>';
	// 	echo '<h1>' . $t. '</h1>';
	// 	var_dump($v);
	// 	echo '</pre>';
	// }
	// d($person, "All persons");
	// d($firstname, "Fetch Single value, The firstname");
	// d($id_age, "Single Row, Id and Age");
	// d($ages, "Fetch Column, Numeric Index");
?>
</body>
</html>


