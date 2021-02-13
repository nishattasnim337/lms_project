<?php
include "link.php";
include "navbar.php";


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon1.png">
</head>
<body>
 <!--Navigation
 <nav class="navbar navbar-dark navbar-expand-md">
   <div class="container-fluid">
     <a href="index.html"  class="navbar-brand display-1 font-weight-bold"><img src="img/icon1.png" alt="icon"> Library Management System</a>
     <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" >
       <span class="navbar-toggler-icon"></span>
     </button>
     <div id="navbarNav" class="collapse navbar-collapse">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a href="index.html" class="nav-link">Home</a>
         </li>
         <li class="nav-item">
           <a href="books.html" class="nav-link">Books</a>
         </li>
         <li class="nav-item">
           <a href="student_login.html" class="nav-link ">Student_Login</a>
         </li>
         <li class="nav-item">
           <a href="registration.html" class="nav-link active">Registration</a>
         </li>
         <li class="nav-item">
           <a href="feedback.html" class="nav-link">Feedback</a>
         </li>

       </ul>
     </div>
   </div>
 </nav>

-->



<!--Index home section-->

<section id="regsection" class="my-0">
  <div class="darkoverlay">
    <div class="container">
      <div class="row text-center text-light d-flex justify-content-center">
        <div class="col">
          <div class="regbox ">
            <h1 class="display-5  ">Registration page </h1>

          <form class="px-5 py-3" id="registration" action="" method="POST">
        					<input class="form-control" type="text" name="f_name" placeholder="First Name" required=""/><br>
        					<input  class="form-control" type="text" name="l_name" placeholder="Last Name" required=""/><br>
        					<select  class="form-control" style="text-align:center;" name="dept_name">
        					<option value="session">Department Name</option>
                  <option value="IIT">IIT</option>
        					<!--<option value="CSTE">CSTE</option>

        					<option value="ACCE">ACCE</option>
        					<option value="EEE">EEE</option>
        					<option value="ICE">ICE</option>
        					<option value="MATH">Math</option>
        					<option value="Pharmacy">Pharmacy</option>
        					<option value="Microbiology">Microbiology</option>
        					<option value="BGE">BGE</option>
        					<option value="English">English</option>
        					<option value="LAW">LAW</option>-->

        					</select><br>
        					<select  class="form-control" style="text-align:center;"name="year">
        					<option value="session">Select session</option>
        					<option value="2017-18">2017-18</option>
        					<option value="2018-19">2018-19</option>
        					<option value="2019-20">2019-20</option>
        					</select><br>
        					<input  class="form-control" type="text" name="roll" placeholder="Roll No" required=""/><br>
                <!--  <input  class="form-control" type="text" name="contact" placeholder="contract" required=""/><br>-->
        					<input  class="form-control"  type="text" name="username" placeholder="Username" required=""/><br>
        					<input class="form-control"  type="text" name="email" placeholder="Email" required=""/><br>
        					<input  class="form-control" type="password" name="password" placeholder="Password" required=""/><br>
        					<input  class="form-control" type="password" name="password2" placeholder="Retype Password" required=""/><br>

        					<input  class="btn btn-primary" type="submit" name="submit" value="Sign Up"/>

        </form>



          </div>
        </div>
      </div>
    </div>
  </div>
  </section>




<footer class="bg-dark text-light text-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <p>Copyright 2021 &copy; library</p>
      </div>
    </div>
  </div>
</footer>

  <!-- JS FILES -->
    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php
require_once("link.php");

if(isset($_POST["submit"]))
{
	$count=0;
	$sql="SELECT username from student";
	$result=mysqli_query($dblink,$sql);
	while($row=mysqli_fetch_assoc($result))
	{

		if($row['username']==$_POST['username'])
		{
			$count=$count+1;
		}
	}

	if($count==0)
	{
$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$dept=$_POST["dept_name"];
$year=$_POST["year"];
$roll=$_POST["roll"];
$username=$_POST["username"];
$email=$_POST["email"];
$pass=$_POST["password"];
$pass2=$_POST["password2"];



              $insert_query="insert into student(f_name,l_name,department,session_year,roll,username,email,password,pic) values
              	('$f_name','$l_name','$dept','$year','$roll','$username','$email','$pass','pic.jpg')";
              $run_query=mysqli_query($dblink,$insert_query);
              ?>
              <script type="text/javascript">
              alert("Registration successful");
              </script>


<?php

}


else {
	?>
<script type="text/javascript">
alert("The username already exit");
</script>

<?php
}
}
?>
