<!DOCTYPE html>
<html>

<body bgcolor="lightblue">
	<center>
	<table border="1" cellspacing="5" bgcolor="white">
		<caption><b>Input Marks</b></caption>
		<tr>
			<th rowspan="2">Name</th>
			<th colspan="4">Score</th>

		</tr>
		<tr>
			<th>Hindi</th>
			<th>English</th>
			<th>Math</th>
			<th>C Programming</th>
		</tr>
		<tr>
			<td><input type="text" id="aname"></td>
			<td><input type="text" id="am"></td>
			<td><input type="text" id="aj"></td>
			<td><input type="text" id="ad"></td>
			<td><input type="text" id="an"></td>
		</tr>
		<tr>
			<th colspan="5" height="30">
			<input type="submit" value="Add To Table" onclick="Sub()"></th>
		</tr> 
	</table>
	<br>
	<table border="1" cellspacing="5" bgcolor="white"
		height="100" width="500" cellpadding="5" id="TableScore">
		<caption><b>Student Data</b></caption>
		<tr>
			<th width="180">Name</th>
			<th>Total</th>
			<th>Average</th>
			<th>Pass Or Fail</th>
		</tr>
		
	</table>
	</center>
	
</body>
</html>