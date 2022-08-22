
<?php
 session_start();

 if(isset($_SESSION['user']))
 {
  header('location:admin');
 }

?>
    <!-- This is Navbar Section i have include navbar Here -->
    <?php
       require_once('./includes/navbar.php');
     ?>



   <!-- ABOUT US MAIN SECTION START HERE  -->
<div class="container-fluid  mb-5" style="margin-top: 9%;">
   <div class="container">
     <h1 class="fw-bold mb-4 p-2 footer-color  mt-4" >ABOUT US</h1>
     </div>
      
      <div class="row "     >
       <div class="col-md-1 "></div>
        <div class="col-md-5 shadow p-3 mb-5 bg-body rounded m-2">
          <img src="./assets/images/slider2.jpg" class="img-fluid rounded">
        </div>
        <div class="col-md-5 shadow p-3 mb-5 bg-body rounded m-2">
          <p class="text-secondary">
           <h4 class="fw-bold">ABOUT</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
       <div class="col-md-1"></div>
      </div>
    </div>
    <!-- ABOUT MAIN END HERE -->



    <!-- OFFICE ADDRESS SECTION START  HERE -->
    
    <div class="container mt-5">

<div class="row">
<h1 class="text-center fw-bold mb-4 p-2 text-white" style="background-color:#4682B4">Direction</h1>
  <div class="col-md-6">

   <ul>
     <li style="list-style: none;margin: 5px;color:white" class="m-1"><i class="fa-solid fa-location-dot"></i>&nbsp;Gulshan E Isql Road Karachi</li>
     <li style="list-style: none;margin: 5px; color:white" class="m-1"><i class="fa-solid fa-envelope"></i>&nbsp;onblogapp.org.pk</li>
     <li style="list-style: none;margin: 5px;color:white" class="m-1"><i class="fa-solid fa-phone"></i></i>&nbsp;(0220)-353427</li>
   </ul>

  </div>
  <div class="col-md-6">
    
     <img src="https://www.pngall.com/wp-content/uploads/2016/05/Man-PNG-File.png" class="img-fluid">
  </div>
</div>
</div>
<br><br><br><br>

    




<!-- This is Footer Section i have include Footer Here -->
   <?php
    require_once('./includes/footer.php');
     ?>
