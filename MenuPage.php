<html>
	<head>
	
		<title>Menu Page</title>
		<style>
				.button {
				 border-radius: 4px;
			  background-color: #f6511e;
			  border: none;
			  color: #FFFFFF;
			  text-align: center;
			  font-size: 15px;
			  padding: 10px;
			  width: 200px;
			  transition: all 0.5s;
			  cursor: pointer;
			  margin: 0px;
			
				}
				
				.button span {
				  cursor: pointer;
				  display: inline-block;
				  position: relative;
				  transition: 0.5s;
				}

				.button span:after {
				  content: '\00bb';
				  position: absolute;
				  opacity: 0;
				  top: 0;
				  right: -20px;
				  transition: 0.5s;
				}
				.button:hover span {
				  padding-right: 25px;
				}

				.button:hover span:after {
				  opacity: 1;
				  right: 0;
				}

		</style>
	</head>
	<body>
	
		
	<table  align="center" border="0" cellpadding="10" cellspacing="0">
	<form action="About.php">
	<tr>
		<td><font size="6"><button class="button" value="Why Sea Bay Hotel" onclick="About()"><span>Why Sea Bay Hotel </span></button></font></td>       
		</tr>
		</form>
		
		
		<form action="Contacts.php">
		
		<tr>
		<td><font size="6"><button class="button" value="Contacts" onclick="About()"><span>Contacts </span></button></font></td> 
		
		</tr>
		</form>
		
		<form action="Gallery.php">
		<tr>
		<td><font size="6"><button class="button" value="Gallery" onclick="About()"><span>Gallery </span></button></font></td> 
		
		</tr>
		</form>
		
		
		<form action="Dining.php">
		<tr>
		<td><font size="6"><button class="button" value="Dining" onclick="About()"><span>Dining </span></button></font></td> 
		
		</tr>
		</form>
		<form action="RoomBook.php">
		<tr>
		<td><font size="6"><button class="button" value="Reservation" onclick="About()"><span>Reservation </span></button></font></td> 
		
		</tr>
		</form>
		</table>
		
		
	
	<script type="text/javascript">
			function RoomBook(){
				var form = document.getElementsByTagName("form");
				form.submit();
			}
			function Facilities(){
				var form = document.getElementsByTagName("form");
				form.submit();
			}
			function About(){
				var form = document.getElementsByTagName("form");
				form.submit();
			}
			function Dining(){
				var form = document.getElementsByTagName("form");
				form.submit();
			}
			</script>
			
	
	
	</body>

</html>
<html>

</html>