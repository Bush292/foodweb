<?php 
session_start(); 
// include "dbconnect";
$servername = "localhost";
$username = "root";
$password = "";
$database = "signup1";

$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if ($conn){
    echo "Connection was successful<br>";
}
else{


    die("Error". mysqli_connect_error());
}

// if (isset($_POST['name']) && isset($_POST['pass'])) {

// 	function validate($data){
//        $data = trim($data);
// 	   $data = stripslashes($data);
// 	   $data = htmlspecialchars($data);
// 	   return $data;
// 	}

// 	$name = validate($_POST['name']);
// 	$pass = validate($_POST['pass']);

// 	if (empty($name)) {
// 		header("Location: index.html?error=User Name is required");
// 	    exit();
// 	}
// 	else if(empty($pass)){
//         header("Location: index.php?error=Password is required");
// 	    exit();
// 	}
// 	else{
// 		$sql = "SELECT * FROM tasty WHERE name ='$name' AND pass='$pass'";

// 		$result = mysqli_query($conn,$sql);

// 		if (mysqli_num_rows($result) === 1) {
// 			$row = mysqli_fetch_assoc($result);
//             if ($row['name'] === $name && $row['pass'] === $pass) {
//             	$_SESSION['name'] = $row['name'];
//             	$_SESSION['name'] = $row['name'];
//             	$_SESSION['id'] = $row['id'];
//             	header("Location: index.html");
// 		        exit();
//             }else{
// 				header("Location: login.php?error=Incorect User name or password");
// 		        exit();
// 			}
// 		}else{
// 			header("Location: login.php?error=Incorect User name or password");
// 	        exit();
// 		}
// 	}
	
// }else{
// 	header("Location: index.php");
// 	exit();
// }

if (isset($_POST['name']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$password = validate($_POST['password']);

	if (empty($name)) {
		header("Location: index.html?error=User Name is required");
	    exit();
	}
	else if(empty($password)){
        header("Location: index.html?error=Password is required");
	    exit();
	}
	else{
		$sql = "SELECT * FROM sign WHERE name ='$name' AND password='$password'";

		$result = mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['name'] === $name && $row['password'] === $password) {
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
            }else{
				header("Location: login.html?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: dem.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.html");
	exit();
}