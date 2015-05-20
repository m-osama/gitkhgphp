    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Marks Sheet</title>
    <script type="text/javascript">
    function mess()
    {
    window.alert("First row must be used for Column Heading");
    }
    </script>
    </head>
    <body onLoad="mess()">
    <?php
	require("Db.class.php");
	$db = new Db();
    // $exam=$_POST['exam'];
    // $sub=$_POST['sub'];
    // $col=$_POST['col'];
    // $row=$_POST['row'];
    /*echo $exam; echo "<br>";
    echo $sub; echo "<br>";
    echo $col; echo "<br>";*/
    // echo "<p align='center'<b><font size='+2'>". $exam . "</font></b></p>";
    // echo "<p align='center'<b><font size='+1'>". $sub . "</font></b></p>";
	$result =  $db->query("SELECT * FROM `khgphp`.`employee_data`");
	if ($result = null)	{	echo "errrrrrrr";	}
	echo $result;
    while($row = mysql_fetch_array($result))
    {
    echo $row['1'];
    echo "<br />";
    }
    echo"<div align='center'";
    echo "<form name='sheet' action='csheet.php' onsubmit='return check()' method='post'>";
    echo"<table width='200' border='1'>";
    for($a=1;$a<=$row;$a++)
    {
    echo"<tr bgcolor='#0099FF'>";
    for($b=1;$b<=$col;$b++)
    {
    echo"<td><input type='text' name='' size='8' /></td>";
    }
    echo"</tr>";
    }
    echo"</table>";
    echo "<input type='submit' value='Submit'>";
    echo "</form></div>";
    ?>
    </body>
    </html>