<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// ob_start();
// session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="nav.css">
    <title>Responsive Navbar</title>
<meta name="description" content="Try our best 24 hours food delivery service in Gwalior.  Order Indian, South Indian, Chinese food in Gwalior city. We also deliver the best quality of food in Train.">
<meta name="keywords" content="24 hours online food delivery services in Gwalior, Food delivery in the train, Online food in the train, online food delivery in Gwalior, food delivery in Gwalior, food in train, order food in the train, online food delivery in the train, railway food delivery, food delivery at Gwalior railway station.">
<style>
body
{
/* background-image : url('https://1.bp.blogspot.com/-o3vdO5nOwFU/XlFviZAB_LI/AAAAAAAAARE/681CriNh4Ow4BaTFQap4BxCGr3okfHIkwCNcBGAsYHQ/s640/signup.jpeg'); */
background-color: rgb(240, 216, 184);

background-repeat : no-repeat;
background-attachment: fixed; 
background-size: cover;
height: 100%;
}
.signup
{
    width: 30%;
	min-width: 350px;
	background: rgb(90, 9, 9);
	color: #fff;
	top:50%;
	left:50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 40px 30px;
	border-radius:20px;
	margin-bottom: 30px;
	display: flex;
	flex-direction: column;
}

.signup label{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.signup input{
	margin-bottom: 20px;
}
.signup input[type="text"],input[type="email"], input[type="password"] 
{
    border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
	width: 100%;

}
.signup button
{
    border: none;
	outline: none;
	height: 40px;
	background: #189ec7;
	color: #fff;
	font-size: 18px;
	border-radius: 30px;
}
.signup button:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
</style>
<script>

// function validation()
// {
// 	var result=true;
// 	var i=document.getElementsByTagName("input");
// 	if(i[5].value.length<=6 ||){
// 		result=false;
// 		alert("password must be greater than 6 digit");
// 	}
// 	else if(i[5].value!=i[6].value)
// 	{
// 	var result=false;
// 	alert("password must be same to conform password");
	
// 	}
// 	return(result);
	
// }

// 	function validation()
// {
// 	var result=true;
// 	var i=document.getElementsByTagName("input");
// 	if(i[0].value.length==0 || i[1].value.length<=6)
// 	{
// 	var result=false;
// 	alert("Please fill the form correctly");
//     }
// 	return(result);
// }


</script>
</head>

<body>
<header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
                <!-- <h3 class="logo">Brand<span>Name</span></h3> -->
                <a href="index.html" class="logo"><img src="img/food1.png" alt="logo"></a>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="/index.html">Home</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">Menu<i class=""></i></a>
                            <!-- fas fa-caret-down -->
                            <div class="dropdown">
                                <ul>
                                  <!-- <li class="dropdown-link">
                                        <a href="#">Link 1</a> -->
                                    </li>
                                    <!-- <li class="dropdown-link">
                                        <a href="#">Link 2</a> -->
                                    </li> 
                                     <!-- <li class="dropdown-link">
                                        <a href="#">Link 3<i class="fas fa-caret-down"></i></a> -->
                                        <div class="dropdown second">
                                            <ul>
                                                <!-- <li class="dropdown-link">
                                                    <a href="#">Link 1</a>
                                                </li> -->
                                                <!-- <li class="dropdown-link">
                                                    <a href="#">Link 2</a>
                                                </li>  -->
                                                 <!-- <li class="dropdown-link">
                                                    <a href="#">Link 3</a>
                                                </li>  -->
                                                <li class="dropdown-link">
                                                    <!-- <a href="#">More<i class="fas fa-caret-down"></i></a> -->
                                                    <div class="dropdown second">
                                                        <ul>
                                                            <!-- <li class="dropdown-link">
                                                                <a href="#">Link 1</a>
                                                            </li>
                                                            <li class="dropdown-link">
                                                                <a href="#">Link 2</a>
                                                            </li>
                                                            <li class="dropdown-link">
                                                                <a href="#">Link 3</a>
                                                            </li>
                                                            <div class="arrow"></div> -->
                                                        </ul>
                                                    </div>
                                                </li>
                                                <div class="arrow"></div>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- <li class="dropdown-link">
                                        <a href="#">Link 4</a>
                                    </li> -->
                                    <!-- <div class="arrow"></div> -->
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#">Services<i class=""></i></a>
                            <div class="dropdown">
                                <ul>
                                    <!-- <li class="dropdown-link">
                                        <a href="#">Link 1</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Link 2</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Link 3<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second"> -->
                                            <ul>
                                                <!-- <li class="dropdown-link">
                                                    <a href="#">Link 1</a>
                                                </li> -->
                                                <!-- <li class="dropdown-link">
                                                    <a href="#">Link 2</a>
                                                </li> -->
                                                <!-- <li class="dropdown-link">
                                                    <a href="#">Link 3</a>
                                                </li> -->
                                                <li class="dropdown-link">
                                                    <!-- <a href="#">More<i class="fas fa-caret-down"></i></a> -->
                                                    <div class="dropdown second">
                                                        <ul>
                                                            <!-- <li class="dropdown-link">
                                                                <a href="#">Link 1</a>
                                                            </li> -->
                                                            <!-- <li class="dropdown-link">
                                                                <a href="#">Link 2</a>
                                                            </li>
                                                            <li class="dropdown-link">
                                                                <a href="#">Link 3</a>
                                                            </li>
                                                            <div class="arrow"></div> -->
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- <div class="arrow"></div> -->
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- <li class="dropdown-link">
                                        <a href="#">Link 4</a>
                                    </li> -->
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="nav-link" style="--i: 1.35s"> -->
                            <!-- <a href="#">About</a> -->
                        </li>
                    </ul>
                </div>

                <div class="log-sign" style="--i: 1.8s">
                    <a href="/login.php" class="btn transparent">Log in</a>
                    <a href="/signup.php" class="btn solid">Sign up</a>
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="overlay"></div>
        </section>
    </main>
	
<!-- connectinon of db -->
<!-- <?php include_once('db_connect.php');  ?> -->

<!-- <div dir="ltr" style="text-align: left;" trbidi="on">
<div class="separator" style="clear: both; text-align: center; position: absolute;">
<a href="index.html"><img border="0" data-original-height="424" data-original-width="520" height="162" src="/img/food1.png" style=" margin:10px; height : 60px; width : 150px;  ;"/></a></div> -->
<!-- <center><h1 style=" color: rgb(238, 238, 16); text-align: center;">
&nbsp; <span style="font-size:70px;">&nbsp; WELCOME TO LANGAR</span></h1></center> -->
<!-- <h2 style="text-align: center; color:rgb(21, 180, 34);">
<span style="font-size:25px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ZOMATO SE ACHHA, SWIGGY SE BEHTAR</span></h2> -->
<?php
// error massage printing.
if(isset($_SESSION['insert'])){
echo $_SESSION['insert'];
session_destroy();
}
?>
<!-- <div style=" text-align: right; margin-right: 50px;">
<span style="font-size: 15px;  margin-right:50px; font-size: 30px;  ">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="index.html" style="color: rgb(32, 176, 233); text-decoration: none;">HOME</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;<a href="login.php" style="color: rgb(18, 182, 223);  text-decoration: none;">LOGIN</a></span></div> -->
</div>
    <form method="post" action="lo.php"  onsubmit="return validation()">
		<div class="signup">
		<h1 style="text-align: center;">LOGIN</h1>
	
			<label>name :
                <br><br>
                <input type="text" name="name" placeholder="Enter Username" required >
            </label><br>

            <!-- <label>Email :
                <br><br>
                <input type="email" name="email" placeholder="Enter Email" required >
            </label><br> -->

            <!-- <label>Gender : 
                <br><br>
               <input type="radio" name="gender" value="male" checked> Male
               <input type="radio" name="gender" value="female"> Female<br>
            </label> -->
			
			<label>Password :
                <br><br>
                <input type="Password" name="password" placeholder="Enter Password Greater than 6 digits" required id="pass" >
            </label><br>
			
			<!-- <label>Confirm Password :
                <br><br>
                <input type="Password" name="confirm" placeholder="Re-enter Password" required>
            </label><br>
			<label>Contact Number :<br><br>
            <input type="text" name="contact" placeholder="Enter Your Phone Number" required> -->
        </label><br>
			<button type="submit">submit</button>
			
			<!-- <input type="submit"> -->
		
</div>
<?php
// error massage printing.
if(isset($_SESSION['error'])){
echo  $_SESSION['error'];
session_destroy();
}

//newcode





// endnew



?>



<?php
$login = false;
// $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    
    $name = $_POST["name"];
    $pass = $_POST["pass"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from tasty where name='$name'AND pass='$pass'";
    $result=mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $login=true;
    }
    else{
        $showError="Invalid credentials";
    }





//     $result = mysqli_query($conn, $sql);
//     $num = mysqli_num_rows($result);
//     if ($num == 1){
//         while($row=mysqli_fetch_assoc($result)){
//             if (password_verify($pass, $row['pass'])){ 
//                 $login = true;
//                 session_start();
//                 $_SESSION['loggedin'] = true;
//                 $_SESSION['name'] = $name;
//                 header("location: index.php");
//             } 
//             else{
//                 $showError = "Invalid Credentials";
//             }
//         }
        
//     } 
//     else{
//         $showError = "Invalid Credentials";
//     }
}
    
?>
<?php
    // if($login){
    // echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    //     <strong>Success!</strong> You are logged in
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //     </button>
    // </div> ';
    // }
    // if($showError){
    // echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    //     <strong>Error!</strong> '. $showError.'
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //     </button>
    // </div> ';
    // }
    ?>

</form>
</div>
</body>
</html>