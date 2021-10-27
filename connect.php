
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegan Store </title>
    <link rel="stylesheet" href="/homepage.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> -->
    <!-- for icons -->
    <!-- <script src="https://use.fontawesome.com/7f7313b4f4.js"></script> -->
    <script src="https://kit.fontawesome.com/3e06f91e1f.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<style>
		
    
* {
    margin: 0px;
    font-family: 'Roboto', sans-serif;
    scroll-behavior: smooth;
}

nav {
    background-color: white;
    /* border: 2px solid green; */
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 11px;
    flex-wrap: wrap;
}

.nav-ul {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    list-style-type: none;
}

.nav-ul li a {
    display: inline-block;
    padding: 10px 20px;
    color: black;
    font-weight: bolder;
    text-decoration: none;
}

.hamburger {
    background-color: transparent;
    border: none;
    color: black;
    font-size: 20px;
    cursor: pointer;
    display: none;
}

.hamburger:focus {
    outline: none;
}
	</style>
</head>

<nav id="navigation">
    <img src="./logo1.jpg" alt="logo">
    <button class="hamburger" id="hamburger">
        <i class="fas fa-bars"></i>

    </button>

    <ul class="nav-ul" id="nav-ul">
        <li><a href="#contact-us-section">Contact Us</a></li>
        <li><a href="#video-section">Watch Video </a></li>
        <li> <a href="#testimonials-section">Testimonials</a></li>

    </ul>


</nav>



<?php
$servename="localhost";
$username="root";
$password="";
$database_name="vegan_store123";

// connection ode
$conn = mysqli_connect($servename ,$username, $password,$database_name);
if(!$conn)
{
    die('Connection Failed:' .mysqli_connect_error());
}
if(isset($_POST['save']))
{	
	 $name1 = $_POST['name1'];
	 $phone = $_POST['phone'];
	 $sub = $_POST['sub'];
	 $email = $_POST['email'];
	 $msg = $_POST['msg'];

	 $sql= "INSERT INTO contactus (db_name1 ,db_phone,db_sub,db_email,db_msg)
	 VALUES ('$name1' ,'$phone','$sub' ,'$email','$msg')";
$result=mysqli_query($conn,$sql);

// Check for the insertion of record success
if($result){
// 	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
// 	<strong>Success!</strong>rat Your entry has been submitted successfully!
// 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
// 	  <span aria-hidden="true">×</span>
// 	</button>
//   </div>';

  echo'<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">congratulations</h5>
    <p class="card-text"> Your entry has been submitted successfully!</p>
    <a href="../vegan/Home-page.html" class="btn btn-primary">Go to Homepage</a>
  </div>
 
</div>';
  }
  else{
	  // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
	  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">×</span>
	</button>
  </div>';
  }
}
?>


