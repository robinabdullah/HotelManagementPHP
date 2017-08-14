
<?php 
	if(!isset($_SESSION['login_id'])){
		include_once("app/error.php");
		die;
	}
	
	if(!isset($_COOKIE['time_limit'])) {
		include_once("app/error.php");
		die;
	} 
 ?>
<html>
	<head>
	<title>Admin MainPage</title>
	
	</head>
	
	<body>
	<table  align="center" border="5" cellpadding="10" cellspacing="10">
	<form name ="show_room" action="app/view/person_roombook_view.php" method="post">
	<tr>
		<td><input type="Submit" value="Show Room Booking Options" onclick="RoomBook()"/></td>
		
	</tr>
	</form>
	
	<form name = "details" action = "app/view/person_add_view.php">
	<tr>
		<td><input type="Submit" value="Employee Details" onclick = "detailsFunc()"/></td>
		
	</tr>
	</form>
	<form name = "hel" action="NewOffers.php">
	<tr>
		<td><input type="Submit" value="Post New Offer" onclick="Newoffer()"/></td>
		
	</tr>
	</form>
	
	
	
		
		</table>
		
		</table>
		<script type="text/javascript">
			function RoomBook(){
				var form = document.forms["show_room"];
				form.submit();
			}
			
			function Newoffer(){
				var form = document.forms["hel"];
				form.submit();
			}
			function detailsFunc(){
				var form = document.forms["details"];
				form.submit();
			}
			
			</script>
		
	
	</body>

</html>
<?php
	
?>
