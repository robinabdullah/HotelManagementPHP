<html>
	<head>
	<title>Employee MainPage</title>
	
	</head>
	<body style="background-color: #4dffff;">
	<table  align="center" border="5" cellpadding="10" cellspacing="10">
	<form action="RoomBook.php">
	<tr>
		<td><input type="Submit" value="Room Booking Options" onclick="RoomBook()"/></td>
		
	</tr>
	</form>
	
	
	
	<tr>
		<td><input type="Submit" value="Notices"/></td>
		
		
	</tr>
	
	<tr>
		<td ><input type="Submit" value="Back"/></td>
		
	</tr>
			
		</table>
		
		</table>
		<script type="text/javascript">
			function RoomBook(){
				var form = document.getElementsByTagName("form");
				form.submit();
			}
			
			function notice()
			{
				
				 document.getElementById("name").innerHTML="Nothing";
			}
			
			</script>
		
	
	</body>

</html>