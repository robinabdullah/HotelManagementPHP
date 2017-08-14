<!DOCTYPE html>
<html>
<body style="background-color: #0066cc;">
<table align="center">
	<tr>
	<td> <?php include("slider.html")?> </td>
	</tr>
</table>

<form action="Upload.php" method="post" enctype="multipart/form-data">
 <table align="center" cellspacing="10">  
  <h1> Select image to upload:</h1>
  <tr>
    <td><input type="file" name="fileToUpload" id="fileToUpload" multiple></td>
	</tr>
	<tr>
    <td><input type="submit" value="Upload Image" name="submit"></td>
    <td><a href="AdminPage.php">Go to Admin Page</a></td>
	</tr>
	</table>
</form>

</body>
</html>
