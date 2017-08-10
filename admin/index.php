<?php 

session_start();

include('../connections/connections.php');

if (isset($_POST['submit'])) {
	# code...
	echo "hi";

$name=$_POST['username'];

$password=$_POST['password'];


$error="";


if(empty($name)||empty($password)){

	$error="Enter Complete details";
}

$name=mysqli_escape_string($connect,filter_var(strip_tags($name),FILTER_SANITIZE_STRIPPED));
$password=mysqli_escape_string($connect,filter_var(strip_tags($password),FILTER_SANITIZE_STRIPPED));


if(empty($error)){
	echo $name,$password;
echo "hihi3";
	$sql="SELECT * FROM admin where username='$name' and password='$password'";
echo "hi";
$result=mysqli_query($connect,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $user = $row['username'];
      echo $user;
      $_SESSION['user'] = $user;
   // echo $_SESSION['user'];
      if ($result) {
	  echo "hhhh";
	   header("location: main.php");
		}
			}
		else {
header("location: index.php");
			echo"Email or password is not correct";
			}
}
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="index.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" name="submit" />
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>