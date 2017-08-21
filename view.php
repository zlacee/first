<html>
	<title>
		View
	</title>
	<head>
	
	
	</head>
	
	<body>
		<?php
		
		//connection to database and server
		//include ('connection-db.php');
			$dbname='test';
				$conn=mysqli_connect('localhost','root','');
	
	if(!$conn){
	die ('No Connection localhost<br>');
	}
	echo 'Connected <br>';
			
		//connect database;
		mysqli_select_db($conn,$dbname);	

		$result =mysqli_query ($conn,"Select * from customers")
		or die (mysqli_error($conn));
		echo 'Connection to database';
		//display data in table
		


?>
<table border='1' cellpadding='10'>

<tr>
		
		<th>Name</th>
		<th>Gender</th> 
		<th>Age</th>
		<th>Class</th>
		<th>Action </th>
	</tr>

	
		

<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array($result))
	{
	?>
<tr>
	
	<td><?php echo $row['Fname'].' '.$row['Mname'].' '.$row['Lname']; ?></td>
	<td><?php echo $row['Gender']; ?></td>
	<td><?php echo $row['Age']; ?></td>
	<td><?php echo $row['Class']; ?></td>
	<td> <a href = ''>Edit</a><br><a href = 'delete.php?ID= echo $row['ID'];'>Delete</a> </td>
</tr>
		
<?php

}


?>

</table>
		

	</body>

</html>