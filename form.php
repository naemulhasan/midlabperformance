<!DOCTYPE html>
<html>
<head>
	<title>Personal Profile</title>
</head>
<body>
	<form method="POST" action="test.php" >
	<center>
		<table border = 1 width ="50%"center>
			<tr  width ="100%">
				<td colspan="2"><center>
					<h1><b>PERSONAL PROFILE</b></h1>
					</td>

		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" value=""/></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td> <input type="text" name="email" value=""/></td>
		</tr>
		<tr>
		<td>Gender: </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
			
		
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input type="date" name="" value=""/></td>
		</tr>
	
		<tr>
			<td>BG:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Degree:</td>
			<td>
				<input type="checkbox" name="degree" value="">SSC
				<input type="checkbox" name="degree" value="">HSC
				<input type="checkbox" name="degree" value="">BSC
			</td>
		</tr>
		<tr>
			<td> photo: </td>
			<td>
				<a href="https://github.com/naemulhasan"> Browser </a>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				
				<input type="submit" name="submit" value="Submit">
				<input type="reset" name="" value="Reset">
			</td>
		</tr>
	</table>
</form>
	
	</body>
</html>