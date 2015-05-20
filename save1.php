<?php
	// Print "Your information";
	require("Db.class.php");
// 	class save1
// {
	// Creates the instance
	$db = new Db();
// private function save()
// 		{
		if ($_REQUEST[cmbx1]== "nm") //or ($_REQUEST[cmbx1] not exist)
	{
		header('refresh:0;url= index.php?status=3');
	     	// if($_REQUEST['status']==2){print '<font color="green"><b>Form Submit successfully</b></font>';}
	}
	 else 	 {	 	$insert		=  $db->query("INSERT INTO `khgphp`.`Employee_Data` (`id`, `emp_name`, `scan`, `dataentry`, `review`, `check`, `approve`, `date`, `created`) VALUES (NULL, '$_REQUEST[cmbx1]', '$_REQUEST[Scan]', '$_REQUEST[DataEntry]', '$_REQUEST[DataReview]', '$_REQUEST[Check]', '$_REQUEST[ApproveOK]', '$_REQUEST[datetimepicker1]', CURRENT_TIMESTAMP)"); 
      header('refresh:0;url= index.php?status=2');
	}
			// $query = trim($query);
			// $this->Init($query,$params);
			// $rawStatement = explode(" ", $query);
			
			# Which SQL statement is used 
			// $statement = strtolower($rawStatement[0]);
			
			// if ($statement === 'select' || $statement === 'show') {
			// 	return $this->sQuery->fetchAll($fetchmode);
			// }
			// elseif ( $statement === 'insert' ||  $statement === 'update' || $statement === 'delete' ) {
			// 	return $this->sQuery->rowCount();	
			// }	
			// else {
			// 	return NULL;
			// }
		// }
// if (isset($_REQUEST['save'])) {
//     insert();
// } elseif (isset($_REQUEST['calc'])) {
//     calc();
// }

// function save()
// {
   //do something 
	// $name=$_REQUEST[cmbx1];
	// $scan=$_REQUEST[Scan];  
	// $de=$_REQUEST[DataEntry];  
	// $dr=$_REQUEST[DataReview];  
	// $check=$_REQUEST[Check];  
	// $approve=$_REQUEST[ApproveOK];  

	
// }
?>