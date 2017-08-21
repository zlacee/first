<html>
<title>
</title>
<head>
<script src="jquery-3.2.1.min.js"> </script>
<script>
$(document).ready(function(){
	$("#subb").click(function(e){
			e.preventDefault();
			var name = $("input#fname").val();

			var lname = $("#lname").val();
			
			var age = $("#age").val();
			
			var clas = $("#clas").val();
			
			var gender = $('input[name=Gender]:checked').val();
			 
			
			if(name!="" && lname!="" && age!="" && clas!="" && gender!="" ){
				checkName(name);
				checkAge(age);
				
			}
			
			else{
				alert ("ERROR:111")
			}
	});
	
	function checkName(name){
		if(name.length < 3){
			$("span#fnameError").text('fname vayena');
			$("span#fnameError").css('color',"red");
			return false;
		}else{
			$("span#fnameError").hide();
		}
	}
	function checkAge(age){
		if(age<22){
			alert ("not allowed!")
			return false;
		}
}
})


</script>

</head>

<body>



<form action = "fieldconn.php" method="Post">

<fieldset>
<legend>Student info</legend>
<table>

<tr> 
<td>First name: </td>
<td> <input type='text' name='Fname' id="fname" >
	<span id="fnameError"></span>
</tr>

<tr> 
<td>Middle name: </td>
<td> <input type='text' name='Mname'id="mname" >
</tr>

<tr> 
<td> Last name: </td>
<td> <input type='text' name='Lname' id="lname">

</tr>

<tr> 
<td >Gender </td>

<td> 
<input type='radio' name='Gender' value='Male'> Male <br>
<input type='radio' name = 'Gender' value= 'Female'> Female
</td>

</tr>

<tr> 
<td >Age </td>

<td> <input type='number' name='Age' min='1' max='30' id="age">
</tr>
<tr> 
<td id="class">Class </td>

<td>
 <select name= 'Class' id="clas">
 <option>1 </option>
 <option>2 </option>
 <option>3 </option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
 
 
 </select>

</td>
</tr>

<tr>
<td></td>
<td><input id="subb" type= 'submit' value='Submit'></td>
</tr>

</table>
</fieldset>


</form>

</body>
</html>