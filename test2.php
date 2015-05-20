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
    // $exam=$_POST['exam'];
    // $sub=$_POST['sub'];
    // $col=$_POST['col'];
    // $row=$_POST['row'];
    /*echo $exam; echo "<br>";
    echo $sub; echo "<br>";
    echo $col; echo "<br>";*/
    // echo "<p align='center'<b><font size='+2'>". $exam . "</font></b></p>";
    // echo "<p align='center'<b><font size='+1'>". $sub . "</font></b></p>";
    $con = mysql_connect("localhost","khgphpuser","khgphppswd");
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("khgphp", $con);
    $result = mysql_query("SELECT `id`,`emp_name`,sum(`scan`),sum(`dataentry`),sum(`review`),sum(`check`),sum(`approve`) FROM `employee_data` where Date(date) between '2015-05-01' and '2015-05-29' group by `emp_name`");
    while($row = mysql_fetch_array($result))
    {
    echo "<br />";
	echo "User:   ";
    echo $row['1'];
    echo "<br />";
	echo "Total Scan:   ";
    echo $row['2'];
    echo "<br />";
	echo "Total Entry:   ";
    echo $row['3'];
    echo "<br />";
	echo "Total Review:   ";
    echo $row['4'];
    echo "<br />";
	echo "Total check:   ";
    echo $row['5'];
    echo "<br />";
	echo "Total approve:   ";
    echo $row['6'];
    echo "<br />";
	echo "Total :  ";
	echo $row['2'] + $row['3']+ $row['4']+ $row['5'] + $row['6'] ;
    echo "<br />";
    }
    mysql_close($con);
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
    // echo "<input type='submit' value='Submit'>";
    echo "</form></div>";
    ?>
    </body>
    </html>