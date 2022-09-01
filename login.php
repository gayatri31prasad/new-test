<html>
<head>
<title> One Page WebSite </title>
</head>
<style >
*{
font-style:san-serif;
}
input{

}
div{
background-color:yellow;
height:200px
width:200px
}
</style>
<body>
<div align="center">
<h1> Login Form </h1>

<form method="post" action="login.php">
	<p>User Name : <input type="email" name="uname">
	<p>User Password : <input type="password" name="pass">
	<p><input type="submit" value="login">
</form>
</div>
<?php
if(isset($_POST['uname'])){
	$name=$_POST['uname'];
	$pass=$_POST['pass'];
	if(!empty($name) && preg_match("/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/",$name)){
		if(!empty($pass) && preg_match("/^[a-zA-Z0-9]{8,16}/",$pass)){
			?>
			<script type="text/javaScript">
				alert("Login Sucess");
			</script>
			<?php	
			
		}else{
			?>
			<script type="text/javaScript">
				alert("Enter Correct Password");
			</script>
			<?php	
		}
	}else{
		?>
		<script type="text/javaScript">
			alert("Enter Correct info of The User");
		</script>
		<?php	
	}
}
?>
</body>
</head>