<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("image.jpeg");
  background-size: cover;
  padding: 0px 500px;
  font-size: 10px;
  
}
    
form {border: 6x solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: maroon;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: blue;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
 
}

img.avatar {
  width: 50%;
  border-radius: 50%;
}


.container {
  padding: 0px;
  color: black;
  font-size: 14px;
}

.div1 {
  width: 300px;
  height: 350px;  
  padding: 50px;
  border: 2px solid whitesmoke;
  border-radius: 1%;
  background-color:whitesmoke;
}


span.psw {
  float: right;
  padding-top: 16px;
}


/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  
  <body class="samarata">
  
    <header>
      <div class="jumbotron">
      <title>Login </title>  
               
      <div class="container" >
      <center><h1>Sistem Informasi</h1> </center>
      <center><h1>Pengaduan Masyarakat</h1> </center>
      </div>

      <form action="" method="post">
			<div class="form-header">
      </div>	
      
  <div class="imgcontainer">
    <img src="HalakHita.jpeg" alt="Avatar" class="avatar">
  </div>

  <div class="container" >
    <center><p>Sampaikan SuaraMU</p> </center></div>
      <div class="div1">
  <div class="container">
    <center><h2>Suara Anda adalah Perubahan</h2> </center>
    <hr>
    <h1></h1>

	<?php if (isset($error) == true) :?>
		<p style="color: white; font-style: italic;"><fieldset style="background-color: hsl(0, 80%, 50%)"><center>Username atau password salah</center></fieldset></p>
	<?php endif ; ?>
	
	<form action="" method="post">
			<div class="form-header">
				
			</div>	
    <table>
		<tr>
			<div class="form-group" style="margin-bottom: 20px;">
				<td>Username</td>
				<td></td>
				<td><input type="text" name="username" id="username" class="form-control" placeholder="Username"></td>
			</div>
		</tr>
		<tr>
			<div class="form-group">
				<td>Password&nbsp&nbsp&nbsp&nbsp</td>
				<td></td>
				<td><input type="password" name="password" id="pasword" class="form-control" placeholder="password" autocomplete="off" style="margin-top: 20px;" required></td>
			</div><br>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="login" class="btn btn-primary btn-block btn-lg" placeholder="Password" autocomplete="off" style="margin-top: 20px;">Login</button></td>
		</tr>
	</table>
	</form>
	</div>
    <p>Belum punya akun?<a href="Signup.php">Register</p>
</body>
</html>