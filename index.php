<!DOCTYPE html>
<html lang="en"><head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="shortcut icon" href="//cdn.sstatic.net/stackoverflow/img/favicon.ico?v=6cd6089ee7f6">
          <title>
			khg|project
		</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
<!-- maher -->

        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link href="css/prettify-1.css" rel="stylesheet">
        <link href="css/base.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">


<!-- end maher -->



	</head>
	<body
	<!-- tabs start here -->
	<div class="demo-aera">
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#text-1" data-toggle="tab">insert</a></li>
				<li><a href="#text-2" data-toggle="tab">view</a></li>
				<li><a href="#text-3" data-toggle="tab">Search</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane  fade in active" id="text-1">
					<div>
					<br>
						<center>
							<p><b>Insert Form</b></p>
						</center>
					</div>

				<!-- insert start -->
				<div class="container">
					<form action="save1.php" role="form" method="save">
							<div class="col-lg-4 col-lg-offset-4">
									<div class="form-control col-lg-offset4 has-feedback">
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
										<select class="combobox " name="cmbx1">
										  <option value="nm">select name</option>
										  <option value="mohammed">mohammed</option>
										  <option value="osama">osama</option>
										  <option value="ahmed">ahmed</option>
										  <option value="maher">maher</option>
										  <option value="mohammed">mohammed</option>
										  <option value="mohammed osama ahmed abdel salam">mohammed osama ahmed abdel salam </option>
										</select>
								<!-- 	</div> -->
								</div>
								<br>
								<div class="form-group col-lg-offset4 has-feedback">
									<label for="text" class="sr-only">Scan</label>
									<input type="text" name="Scan" class="form-control" placeholder="Scan">
									<span class="glyphicon glyphicon-camera form-control-feedback"></span>
								</div>
								<div class="form-group col-lg-offset4 has-feedback">
									<label for="text" class="sr-only">DataEntry</label>
									<input type="text" name="DataEntry" class="form-control" placeholder="DataEntry">
									<span class="glyphicon glyphicon-pencil form-control-feedback"></span>
								</div>
								<div class="form-group col-lg-offset4 has-feedback">
									<label for="text" class="sr-only">DataReview</label>
									<input type="text" name="DataReview" class="form-control" placeholder="DataReview">
									<span class="glyphicon glyphicon-search form-control-feedback"></span>
								</div>
								<div class="form-group col-lg-offset4 has-feedback">
									<label for="text" class="sr-only">Check</label>
									<input type="text" name="Check" class="form-control" placeholder="Check">
									<span class="glyphicon glyphicon glyphicon-ok-circle form-control-feedback"></span>
								</div>
								<div class="form-group col-lg-offset4 has-feedback">
									<label for="text" class="sr-only">ApproveOK</label>
									<input type="text" name="ApproveOK" class="form-control" placeholder="ApproveOK">
									<span class="glyphicon glyphicon-floppy-saved form-control-feedback"></span>
								</div>
								<!-- calendar -->
								
								<div class="form-control col-lg-offset4 has-feedback">
									<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
										<!-- Day -->
										<select class="combobox " name="xday">
										  <option value="day">Day</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										  <option value="7">7</option>
										  <option value="8">8</option>
										  <option value="9">9</option>
										  <option value="10">10</option>
										  <option value="11">11</option>
										  <option value="12">12</option>
										  <option value="13">13</option>
										  <option value="14">14</option>
										  <option value="15">15</option>
										  <option value="16">16</option>
										  <option value="17">17</option>
										  <option value="18">18</option>
										  <option value="19">19</option>
										  <option value="20">20</option>
										  <option value="21">21</option>
										  <option value="22">22</option>
										  <option value="23">23</option>
										  <option value="24">24</option>
										  <option value="25">25</option>
										  <option value="26">26</option>
										  <option value="27">27</option>
										  <option value="28">28</option>
										  <option value="29">29</option>
										  <option value="30">30</option>
										  <option value="31">31</option>
										</select>
										<!-- Day end -->
										<!-- month -->
										<select class="combobox " name="xm">
										  <option value="month">Month</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										  <option value="7">7</option>
										  <option value="8">8</option>
										  <option value="9">9</option>
										  <option value="10">10</option>
										  <option value="11">11</option>
										  <option value="12">12</option>
										  </select>
										  <!-- month end  -->
										  <!-- year -->
										<select class="combobox " name="xm">
										  <option value="year">Year</option>
										  <option value="2014">2014</option>
										  <option value="2015">2015</option>
										  <option value="2016">2016</option>
										  </select>
										  <!-- year end  -->
										</div>
								<!-- calendar end -->
								<br>
								<button id="sub1" type="Submit" class="btn btn-info btn-center">submit</button>
								
										<div class="form-group col-lg-offset5">
											<?php
											if($_REQUEST['status']==2){print '<font color="green"><b>Form Submit successfully</b></font>';}
											if($_REQUEST['status']==3){print '<font color="red"><b>Form Submit error</b></font>';}
									      	?>
								      </div>				
								</div>

						</form>
					</div>

		<!-- insert end  -->

				
				</div>
				<div class="tab-pane fade " id="text-2">
					<center>
					<p><b><i class="icon-spinner icon-spin icon-large"></i>View Form</b></p>
					<i class="icon-spinner icon-spin icon-large"></i>
					</center>
				</div>
				<div class="tab-pane fade " id="text-3">
					<p>mohammed osama3</p>
					<div class="mosama">
						<!-- search start by maher-->
				<div class="container">
					<form action="search1.php" role="form" method="se">
							<div class="col-lg-4 col-lg-offset-4">
									<div class="form-control col-lg-offset4 has-feedback">
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
										<select class="combobox " name="cmbx1">
										  <option value="nm">select name</option>
										  <option value="mohammed">mohammed</option>
										  <option value="osama">osama</option>
										  <option value="ahmed">ahmed</option>
										  <option value="maher">maher</option>
										  <option value="mohammed">mohammed</option>
										  <option value="mohammed osama ahmed abdel salam">mohammed osama ahmed abdel salam </option>
										</select>
								<!-- 	</div> -->
								</div>
								<br>
								<!-- calendar -->
								
								<div class="form-control col-lg-offset4 has-feedback">
									<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
										<!-- Day -->
										<select class="combobox " name="xday">
										  <option value="day">Day</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										  <option value="7">7</option>
										  <option value="8">8</option>
										  <option value="9">9</option>
										  <option value="10">10</option>
										  <option value="11">11</option>
										  <option value="12">12</option>
										  <option value="13">13</option>
										  <option value="14">14</option>
										  <option value="15">15</option>
										  <option value="16">16</option>
										  <option value="17">17</option>
										  <option value="18">18</option>
										  <option value="19">19</option>
										  <option value="20">20</option>
										  <option value="21">21</option>
										  <option value="22">22</option>
										  <option value="23">23</option>
										  <option value="24">24</option>
										  <option value="25">25</option>
										  <option value="26">26</option>
										  <option value="27">27</option>
										  <option value="28">28</option>
										  <option value="29">29</option>
										  <option value="30">30</option>
										  <option value="31">31</option>
										</select>
										<!-- Day end -->
										<!-- month -->
										<select class="combobox " name="xm">
										  <option value="month">Month</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										  <option value="7">7</option>
										  <option value="8">8</option>
										  <option value="9">9</option>
										  <option value="10">10</option>
										  <option value="11">11</option>
										  <option value="12">12</option>
										  </select>
										  <!-- month end  -->
										  <!-- year -->
										<select class="combobox " name="xm">
										  <option value="year">Year</option>
										  <option value="2014">2014</option>
										  <option value="2015">2015</option>
										  <option value="2016">2016</option>
										  </select>
										  <!-- year end  -->
										</div>
								<!-- calendar end -->
								<br>
								<button id="sub1" type="Submit" class="btn btn-info btn-center">submit</button>
								
										<div class="form-group col-lg-offset5">
											<?php
											if($_REQUEST['status']==2){print '<font color="green"><b>Form Submit successfully</b></font>';}
											if($_REQUEST['status']==3){print '<font color="red"><b>Form Submit error</b></font>';}
									      	?>
								      </div>				
								</div>
<?php

	// Print "Your information";
	require("Db.class.php");
	// Creates the instance
	$db = new Db();

	// 		if ($_REQUEST[cmbx1]== "nm")
	// {
	// 	// header('refresh:0;url= index.php?status=3');
	//      	// if($_REQUEST['status']==2){print '<font color="green"><b>Form Submit successfully</b></font>';}
	// }
	 // else 	 {	 	$select		=  $db->query("select id,emp_name,scan,dataentry,review,check,approve,date from `khgphp`.`Employee_Data` where emp_name = '$_REQUEST[cmbx1]' and date between '$_REQUEST[datetimepicker1]' and '$_REQUEST[datetimepicker2]'"); 
	// else 	 {	 	
		$select		=  $db->query("select * from `khgphp`.`Employee_Data`");
	 $result = ($select);
	 echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($select)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";  //$row['index'] the index here is a field name
// }

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection
      // header('refresh:0;url= index.php?status=2');
	}
?>
						</form>
					</div>
					
		<!-- insert end by maher -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- tabs end here -->
		<hr>

 


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
        <script src="css/analytics.js" async=""></script><script type="text/javascript" src="css/jquery-2.js"></script>
		<script type="text/javascript" src="css/bootstrap.js"></script>
		<script src="js/moment-with-locales.js"></script>
		<script src="js/bootstrap-datetimepicker.js"></script>

</body>
</html>


