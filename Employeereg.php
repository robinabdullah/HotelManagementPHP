<html>
  <head>
    <title>Employee Registration page</title> 
  
  </head>
  
   <body style="background-color:#9b9be8;">
		<table border="0" cellspacing="10" cellpadding="10">
		<form name="myform" method="post" >
		 <tr>
			<td>Full Name</td> <td> <input type="text" name="fname"/></td>  
			<td><font  color="red"><div id="name"></div></font></td>
			</tr>
			
			<tr>
			<td>Password</td> <td> <input type="password" name="password"/></td>
			<td><font  color="red"><div id="pass"></div></font</td>
			</tr>
			<tr>
			<td>Address</td> <td> <input type="text" name="add"/></td>
			<td><font  color="red"><div id="add"></div></font</td>
			</tr>
			<tr>
			<td>Phone Number</td> <td> <input type="text" name="pnmbr"/></td>
			<td><font  color="red"><div id="pnmbr"></div></font</td>
			</tr>
			<tr>
			<td>Email</td> <td> <input type="text" name="mail"/></td>
			<td><font  color="red"><div id="mail"></div></font</td>
			</tr>
			<tr>
			<td>Job Post</td> <td> <input type="text" name="jpost"/></td>
			<td><font  color="red"><div id="jpost"></div></font</td>
			</tr>
			<tr>
			<td>Joining Date</td> <td> <input type="text" name="hiredate"/></td>
			<td><font  color="red"><div id="hiredate"></div></font</td>
			</tr>
			<tr>
			<td>Salary</td> <td> <input type="text" name="sal"/></td>
			<td><font  color="red"><div id="sal"></div></font</td>
		 
		 </tr>
		 <tr>
			<td><input type="radio" name="Gender" value="Admin">Male</td>
			<td><input type="radio" name="Gender" value="Employee">Female </td>
		 </tr>
		 <tr>
			<td><input type="radio" name="Employee" value="Admin">Assign Employee as ADMIN</td>
			<td><input type="radio" name="Employee" value="Employee">Employee </td>
		 </tr>
		 <tr>
			<td>  <input type="submit" value="Refresh" onclick="refresh()" ></td>
			<td>  <input type="submit" value="Submit" onclick="validateform()"></td>
		 </tr>
		
		 </form>
		</table>
		<script type="text/javascript">	
			
			function validateform()
			{
				var fname=document.myform.fname.value;  
				//var lname=document.myform.lname.value;  
				var pass=document.myform.password.value;  
				var add=document.myform.add.value;  
				var phone=document.myform.pnmbr.value;
				var mail=document.myform.mail.value;
				var atposition=mail.indexOf("@");  
				var dotposition=mail.lastIndexOf(".");
				var post=document.myform.jpost.value;  
				var hiredate=document.myform.hiredate.value;  
				var salary=document.myform.sal.value;
				 
				//var letters = /^[A-Za-z]+$/;
					if (fname==null || fname=="")
					{
						
						 document.getElementById("name").innerHTML="Enter Name Properly";
						
						
						  
					}
					 if(pass==null || pass=="" || pass.length<6){  
					 
					  document.getElementById("pass").innerHTML="Password must be at least 6 characters long";
						
					   
					  }
					  if(add==null || add=="" ){  
					 
					  document.getElementById("add").innerHTML="Enter Address";
						
					   
					  }
					   if(isNaN(phone) || phone==null){  
					 
					  document.getElementById("pnmbr").innerHTML="Enter Numeric number or Password field must not empty";
						
					   
					  }
					  if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length || mail==null){  
					    
					  document.getElementById("mail").innerHTML="Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition;
					  
					  }  
					  if(post==null){  
					 
					  document.getElementById("jpost").innerHTML="job post must be filled";
					  }
					   if(hiredate==null){  
					 // alert("Password must be at least 6 characters long.");
					  document.getElementById("hiredate").innerHTML="This field required";
					  }
					   if(salary==null){  
					 // alert("Password must be at least 6 characters long.");
					  document.getElementById("sal").innerHTML="This field required";
					  }


					 
					  return false;
					
			}
			function refresh()
			{
				fname=" ";
				pass=" ";
				add=" ";
				phone=" ";
				mail=" ";
				post=" ";
				hiredate=" ";
				salary=" ";
			}
			</script>
			
			
   </body>
   </html>