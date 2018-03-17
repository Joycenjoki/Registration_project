<?php
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="registration";


// $username="";
// $email="";
// $password_1="";
// $password_2="";
$errors= array();

// include_once 'Register.php';
$conn= mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (isset($POST['register']))
print_r($post);
{
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password_1=mysqli_real_escape_string($conn,$_POST['Password_1']);
    $Password_2=mysqli_real_escape_string($conn,$_POST['Password_2']);
}    
if (empty($username))
{
    array_push($errors, "username is required");
}
if (empty($email))
{
    array_push($errors, "email is required");
}
if (empty($password_1))
{
    array_push($errors, "password_1 is required");
}
if ($password_1 != $password_2)
{
    array_push($error, "The two passwords do not match");
}
if(count($errors)==0)
			{
				$password=md5($password);
				$query= "SELECT * FROM users WHERE username='$username' AND
				password='$password'";
				$result= mysqli_query($db, $query);
				if(mysqli_num_rows($results)==1)
				{
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "you are now logged in";
					header('location:index.php');

				}
				else
				{
					array_push($errors, "wrong username/password combination");
?>