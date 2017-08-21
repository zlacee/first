<?php
	$firstname = $_POST['Fname'];
	$middlename = $_POST['Mname'];
	$lastname = $_POST['Lname'];
	$gender = $_POST['Gender'];
	$age = $_POST['Age'];
	$class = $_POST['Class'];
	
	//to prevent from mysql injection 
	//$username = stripcslashes($username);
	//$password = stripcslashes($password);
	
	//print_r ($username);
	//print_r ($password);
	//exit;
	
	//connect to the server amd select database
	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"test");
	
	// Query the database for user
	$result = "Insert into customers(Fname,Mname,Lname,Gender,Age,Class) VALUES ('$firstname','$middlename','$lastname','$gender','$age','$class')"
				or die("Failed to inser into  database");
	if ($conn->query($result) === TRUE){
		echo "new record created";
	} else {
		echo "ERROR" .$result. "<br>". $conn->error;
	}

/*
$view ="SELECT * FROM 'customers'"; //or die(mysqli_error())// 
$abc = $conn->query($view);	
	// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array($abc)) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['Fname'] . '</td>';

echo '<td>' . $row['Mname'] . '</td>';

echo '<td>' . $row['Lname'] . '</td>';

echo '<td>' . $row['Gender'] . '</td>';

echo '<td>' . $row['Age'] . '</td>';

echo '<td>' . $row['Class'] . '</td>';

echo "</tr>";

}

*/

	
	
	?>