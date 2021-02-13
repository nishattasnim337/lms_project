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
   <body>
     <section id="profile" class="bg-info" style="
     position:relative;
     min-height: 220px;">
       <div class="darkoverlay" style="background: rgba(0,0,0,0.5);
       position: absolute;
       top:0;
       left:0;
       height:100%;
       width:100%;

       ">
         <div class="container">
           <div class="row">
             <div class="col">
             </div>
           </div>
         </div>
       </div>

     </section>

     <!--.............................................profile page.................................-->
     <section id="card" style="min-height:500px;font-size:18px;">
      <div class="row my-5 row justify-content-center">
      <div class="col-lg-6 col-md-6 col-sm-4 m-2">
        <div class="card">
          <div class="card-body">

            <button class="btn btn-primary mt-5 mr-4"
            style="
            position: absolute;
            bottom: 20;
            right: 0;"

            ><a href="edit_profile.php" class="text-light"style="text-decoration: none">Edit Profile</a></button>

            <?php echo "<img style='
            margin-top: -160px;'
             src='../img/avater.png' alt='Nmae1' class='img-fluid  lg-w-25 sm-w-20  rounded-circle '>"?>
            <?php
            $sql="select * from student where username='$_SESSION[login_user]';";
            $result=mysqli_query($dblink,$sql);

            $row=mysqli_fetch_assoc($result);
            ?>
            <div>
              <form action="" method="POST">
              <span> <button class="btn btn-inline-block" ><i class="fa fa-camera  ml-4 d-inline-block " style="font-size:20px;""></i></button></span>
              <span> <button type="submit" name="pass_btn" class="btn btn-inline-block"><i class="fa fa-key  ml-2 d-inline-block" style="font-size:20px;"></i></button></span>
              </form>
            </div>
            <h3 class="text-dark display-5 pl-4"><?php  echo $_SESSION['login_user'];?></h3>

            <ul class="list-group">
                <li class="list-group-item inline-block input-group ">
                  <span> <i class="fa fa-address-card mr-5 d-inline-block " style=""><?php echo "&nbsp Full Name  ";?></i></span>
                  <span class="d-inline-block "><h5 class="display-5 ml-4"><?php echo $row["f_name"].' '.$row['l_name'];?></h5></span>
                </li>

                <li class="list-group-item inline-block input-group ">
                  <span> <i class="fa fa-calendar mr-5 d-inline-block " style=""><?php echo "&nbsp Session  ";?></i></span>
                  <span class="d-inline-block "><h5 class="display-5 ml-5"><?php echo $row["session_year"];?></h5></span>
                </li>

                <li class="list-group-item inline-block input-group ">
                  <span> <i class="fa fa-address-card mr-5 d-inline-block " style=""><?php echo "&nbsp Roll No  ";?></i></span>
                  <span class="d-inline-block "><h5 class="display-5 ml-5"><?php echo $row["roll"];?></h5></span>
                </li>

                <li class="list-group-item inline-block input-group ">
                  <span> <i class="fa fa-user mr-5 d-inline-block " style=""><?php echo "&nbsp Username ";?></i></span>
                  <span class="d-inline-block "><h5 class="display-5 ml-4"><?php echo $row["username"];?></h5></span>
                </li>

                <li class="list-group-item inline-block input-group ">
                  <span> <i class="fa fa-envelope mr-5 d-inline-block " style=""><?php echo "&nbsp Email ";?></i></span>
                  <span class="d-inline-block "><h5 class="display-5 ml-5"><?php echo $row["email"];?></h5></span>
                </li>

                <li class="list-group-item inline-block input-group ">
                  <span> <i class="fa fa-phone mr-5 d-inline-block " style=""><?php echo "&nbsp Contract";?></i></span>
                  <span class="d-inline-block "><h5 class="display-5 ml-5"><?php echo $row["contract"];?></h5></span>
                </li>
                <?php
                if(isset($_POST['pass_btn']))
                {?>
                  <li class="list-group-item inline-block input-group ">
                    <span> <i class="fa fa-key mr-5 d-inline-block " style=""><?php echo "&nbsp Password";?></i></span>
                    <span class="d-inline-block "><h5 class="display-5 ml-5"><?php echo $row["password"];?></h5></span>
                  </li>

                  <?php
                }

                 ?>

              </ul>

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
