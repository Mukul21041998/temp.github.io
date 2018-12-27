  <?php
Session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboardStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    </link>
	<style>
	.dashdetail{margin:7%;
	padding-left:10%;
	color:lightgrey;}	</style>
  </head>
  <body>
    <div class="row row-nav">
      <div class="col-9 nav col-nav">
        <ul>
          <li><a href="dashboard.php"><i class="fas fa-tachometer-alt icon-padding"></i>Dashboard</a></li>
        </ul>
      </div>
      <div class="col-xl-3 nav-2 col-icons ">
        <ul>
          <li><a href="notice.php"><i class="fas fa-chevron-circle-down icon-size"></i></a></li>
          <li><a href="pdetail.php"><i class="fas fa-user icon-size"></i></a></li>
          <li><a href="logout.php"><i class="fas fa-sign-out-alt icon-padding icon-size"></i></a></li>
        </ul>
      </div>
      <div class="col-3 mobile-icon-col nav cursor">
          <ul>
            <li ><i class="fas fa-bars" data-target="#login-modal" data-toggle="modal" role="button"></i></li>
          </ul>
          <div class="modal fade" id="login-modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header ">
                </div>
     <div class="modal-body">
                    <div class="row">
                    <div class="col col-12 ">
                        <!--<div class="col col-12 side-nav-menubar text-center menu-border hover cursor "><a href="#">MENU</a></div>-->
                        <div class="col col-12 menu-items text-center menu-items-border hover cursor"><a href=""><i class="fas fa-rss-square icon-padding"></i>Fees</a></div>
                        <div class="col col-12 menu-items text-center menu-items-border hover cursor"><a href=""><i class="fas fa-chalkboard icon-padding"></i>Faculty</a></div>
                        <div class="col col-12 menu-items text-center menu-items-border hover cursor"><a href=""><i class="fas fa-users icon-padding"></i>Books</a></div>
                        <div class="col col-12 menu-items text-center menu-items-border hover cursor"><a href=""><i class="fas fa-user-graduate icon-padding"></i>Attendence</a></div>
                       <!-- <div class="col col-12 menu-items text-center menu-items-border hover cursor"><a href=""><i class="fas fa-sign-out-alt icon-padding"></i>Log out</a></div>-->
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
      <div class="row">
        <div class="col col-xl-2 side-nav col-menu">
		<div class="dashdetail">
		<?php
if($_SESSION["enrol"]==true)
{
echo ""." ".$_SESSION['enrol'];
echo "<br>";
echo ""." ".$_SESSION['username'];
echo "<br>";
echo ""." ".$_SESSION['email'];
echo "<br>";	
echo ""." ".$_SESSION['branch'];
}

else
{
header('location:index.html');
}
?></div>
          <!--<div class="col col-12 side-nav-menubar text-center menu-border hover cursor menu-title"><a href="#">MENU</a></div>-->
          <div class="col col-12 menu-items text-center menu-items-border hover cursor menu-list"><a href="fees.php"><i class="fas fa-rss-square icon-padding"></i>Fees</a></div>
          <div class="col col-12 menu-items text-center menu-items-border hover cursor menu-list"><a href="faculty.php"><i class="fas fa-chalkboard icon-padding"></i>Faculty</a></div>
          <div class="col col-12 menu-items text-center menu-items-border hover cursor menu-list"><a href="book.php"><i class="fas fa-users icon-padding"></i>Books</a></div>
          <div class="col col-12 menu-items text-center menu-items-border hover cursor menu-list"><a href="attendance.php"><i class="fas fa-user-graduate icon-padding"></i>Attendence</a></div>
          <!--<div class="col col-12 menu-items text-center menu-items-border hover cursor menu-list"><a href="logout.php"><i class="fas fa-sign-out-alt icon-padding"></i>Log out</a></div>-->
		</div>
        <div class="col col-xl-10 col-images">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                 <img class="d-block w-100" src="images/1.jpg" alt="First slide">   
               </div>
               <div class="carousel-item">
                 <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
              </div>
             <div class="carousel-item">
               <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
             </div>
             <div class="carousel-item">
               <img class="d-block w-100" src="images/4.jpg" alt="Third slide">
             </div>
             <div class="carousel-item">
               <img class="d-block w-100" src="images/5.jpg" alt="Third slide">
             </div>
           </div>
         </div>
        </div>
  </body>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
