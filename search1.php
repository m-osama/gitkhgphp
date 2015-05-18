<?php
	// Print "Your information";
	require("Db.class.php");
	// Creates the instance
	$db = new Db();

			if ($_REQUEST[cmbx1]== "nm")
	{
		header('refresh:0;url= index.php?status=3');
	     	// if($_REQUEST['status']==2){print '<font color="green"><b>Form Submit successfully</b></font>';}
	}
	 // else 	 {	 	$select		=  $db->query("select id,emp_name,scan,dataentry,review,check,approve,date from `khgphp`.`Employee_Data` where emp_name = '$_REQUEST[cmbx1]' and date between '$_REQUEST[datetimepicker1]' and '$_REQUEST[datetimepicker2]'"); 
	else 	 {	 	$select		=  $db->query("select * from `khgphp`.`Employee_Data`");
	 $result = ($select);
	 echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection
      // header('refresh:0;url= index.php?status=2');
	}
?>