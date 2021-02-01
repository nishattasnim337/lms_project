<?php
include "navbar.php";
include "link.php";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Book Request </title>

     <!--................slide navigaton style  -->
     <style>
 body {
   font-family: "Lato", sans-serif;

 }

 .sidenav {
   height: 100%;
   width: 0;
   position: fixed;
   z-index: 1;
   margin-top: 70px;
   top: 0;
   left: 0;
   background-color: #000;
   overflow-x: hidden;
   transition: 0.5s;
   padding-top: 60px;
 }

 .sidenav a {
   padding: 8px 8px 8px 32px;
   text-decoration: none;
   font-size: 25px;
   color: #818181;
   display: block;
   transition: 0.3s;
 }

 .sidenav a:hover {
   color: #f1f1f1;
 }

 .sidenav .closebtn {
   position: absolute;
   top: 0;
   right: 25px;
   font-size: 36px;
   margin-left: 50px;
 }

 #main {
   transition: margin-left .5s;
   padding: 16px;
 }

 @media screen and (max-height: 450px) {
   .sidenav {padding-top: 15px;}
   .sidenav a {font-size: 18px;}
 }
 </style>
   </head>
   <body>
     <!--...............................side nav...............................-->

       <div id="mySidenav" class="sidenav">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <a href="profile.php">My Profile</a>
       <a href="books.php">Books</a>
       <a href="book_request.php">Book Request</a>
       <a href="#">Issue Information</a>
       </div>

       <div id="main">

       <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; More option</span>

       <script>
       function openNav() {
       document.getElementById("mySidenav").style.width = "250px";
       document.getElementById("main").style.marginLeft = "250px";
       }

       function closeNav() {
       document.getElementById("mySidenav").style.width = "0";
       document.getElementById("main").style.marginLeft= "0";
       }
       </script>
       <div class="container" style="min-height: 800px;">

       <?php

       if(isset($_SESSION['login_user']))
       {
         $sql="select * from issue_book where username='$_SESSION[login_user]';";
         $query=mysqli_query($dblink,$sql);
         if(mysqli_num_rows($query)==0)
         {
           echo "<h2 class='display-5 py-5'>";
           echo "Sorry...! There is no pending book request";
           echo "</h2>";
         }
         else{
         echo "<table class='table table-bordered table-hover'>";
           echo "<tr style='background-color:gray;'>";
           echo "<th>"; echo "Book_ID"; echo "</th>";
           echo "<th>"; echo "Approve Status"; echo "</th>";
           echo "<th>"; echo "Issue Date"; echo "</th>";
           echo "<th>"; echo "Return Date"; echo "</th>";
           echo "</tr>";

           while($row=mysqli_fetch_assoc($query))
           {


             echo "<tr>";
             echo "<td>";echo $row['b_id']; echo "</td>";
             echo "<td>";echo $row['approve']; echo "</td>";
             echo "<td>";echo $row['issue']; echo "</td>";
             echo "<td>";echo $row['returnbook']; echo "</td>";
             echo "</tr>";


           }
           echo "</table>";



         }
       }
else{
  //echo "<h2 class='display-3'>";
  //echo "Please Login first";
  //echo "</h2>";
}
       ?>
</div>

<footer class="bg-dark text-light text-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <p>Copyright 2021 &copy; library</p>
      </div>
   </body>
 </html>
