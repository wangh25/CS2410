<!DOCTYPE html>
<html >
<head>
<title>List Vehicles </title>
</head>
<body>
<?php
include("connectdb.php");
?>
<h2> All Vehicles in the Database</h2>
<!-- HTML table to  display  the vehicle records -->
	<table cellspacing="0"  cellpadding="5">
	<tr><th>Reg_no</th> <th >Category</th><th >Brand</th> <th >Description</th><th >Daily rate</th><th >Photo</th><th ></tr>
<?php	
	try{
	// Run a SQL query
		$sqlstr = "SELECT * FROM vehicles";
		$rows=$db->query($sqlstr);
	//loop through all the returned records and display them in a table
		foreach ($rows as $row) { 
			echo  "<tr><td >" . $row['reg_no'] . "</td><td >" . $row['category'] . "</td><td >" . $row['brand'];
			echo "</td><td >" . $row['description'] . "</td><td >" . $row['dailyrate']. "</td></tr>\n";
		}

		echo "</table> <br>";
	} catch (PDOException $ex){
		//this catches the exception when the query is thrown
		echo "Sorry, a database error occurred when querying the vehicle records. Please try again.<br> ";
		echo "Error details:". $ex->getMessage();
	}

?>

</body>
</html>