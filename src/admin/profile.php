<?php
include "navbar.php";
include "link.php";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profile</title>

  </head>
   <body >

   <section style="
   background: url('../img/profile.jpg');
    position: relative;
   background-repeat: no-repeat;
   background-size: cover;
   background-attachment: fixed;
   background-position: center;
   min-height: 800px; ">

<div class="darkoverlay" style="
background: rgba(0,0,0,0.5);
position: absolute;
top:0;
left:0;
height:100%;
width:100%;

">
     <div class="container">
       <div class="row ">
         <div class="col">
           <div class="box " style="
width:500px;
margin:0 auto;

font-size: 15px;
           ">
             <form class="" action="" method="">
               <button class="btn btn-outline-primary my-2 float-right px-4 text-light " name="submit1">
                 Edit
               </button>
             </form>

           <?php
           $sql="select * from admin where username='$_SESSION[login_user]';";
           $result=mysqli_query($dblink,$sql);
            ?>
            <div class="text-center mt-3">
              <h2 class="display-5 text-light ">My Profile </h2>


            <?php
            $row=mysqli_fetch_assoc($result);
           echo "<div class='img-fluid img-circle py-1' ><img style='
           border-radius: 50%;
           height:140px;
           weight:140px;

           'src='../img/avater.png' alt='image'  /></div>";
             ?>
<h2 class="text-light display-5">Welcome <?php  echo $_SESSION['login_user'];?></h2>
                <?php


                echo "<table  class='table table-bordered text-light'>";?>


                		<tr>
                <tr>

                		<td><?php echo "First Name  ";?></td>
                		<td><?php echo $row["f_name"];?></td></tr>
                		<tr>
                		<td><?php echo "Last Name  ";?></td>
                		<td><?php echo $row["l_name"];?></td></tr>



                		<tr>
                		<td><?php echo "Username";?></td>
                		<td><?php echo $row["username"];?></td></tr>
                		<tr>
                		<td><?php echo "Email";?></td>
                		<td><?php echo $row["email"];?></td>

                </tr>
                <tr>
                		<td><?php echo "Password ";?></td>
                		<td><?php echo $row["password"];?></td>

                </tr>
                <tr>
                		<td><?php echo "Contract  ";?></td>
                		<td><?php echo $row["contract"];?></td></tr>
                <?php
                echo "</table>";



                ?>
           </div>
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

   </body>
 </html>
