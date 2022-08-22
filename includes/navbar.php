<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>ZOOM CINEMA</title>
        <!-- Bootstrap -->
        <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Animate.css -->
        <link href="./animate.css/animate.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome iconic font -->
        <link href="./fontawesome/css/fontawesome-all.css" rel="stylesheet" type="text/css" />
        <!-- Magnific Popup -->
        <link href="./magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <!-- Slick carousel -->
        <link href="./slick/slick.css" rel="stylesheet" type="text/css" />
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <!-- Theme styles -->
        <link href="./css/style.css" rel="stylesheet" type="text/css">
        

    </head>
    <body style="background-image:url('./assets/images/bg-body.jpg')">
 <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #000">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="width:92px,font-weight: bold;"></a>
    <a class="navbar-brand" href="index.php" style="width:102px;font-weight:bold; font-size:35px; bold;color:red">ZOOM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item p-2">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>

    
  		  <li class="nav-item p-2">
        	<a class="nav-link active" aria-current="page" href="movies.php">MOVIES</a>
        </li>

        <li class="nav-item dropdown p-2 " >
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false " >
            CATEGORIES
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 

              require_once('includes/db_connection.php');

             $sql="SELECT * FROM category";
             $result=mysqli_query($conn,$sql);

             if($result)
             {
               while($category=mysqli_fetch_assoc($result))
               {?>
                <li><a class="dropdown-item" href="film-category.php?category_id=<?php echo $category['category_id']?>&catagory_name=<?php echo $category['name']?>"><?php echo $category['name']?></a></li>
                <?php
               }
             }
             ?>
           </ul>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link active" aria-current="page" href="about-us.php">ABOUT US</a>
        </li>

        <li class="nav-item p-2">
          <a class="nav-link active" aria-current="page" href="contact-us.php">CONTACT US</a>
        </li>

      </ul>

      <span class="float-end text-white">
        <ul>     
          <div class="d-flex " >
              <a href="login.php" class="nav-link text-white fw-bold mt-2"><i class="fa-solid fa-user"></i>&nbsp;LOGIN</a>
              <a href="registration.php" class="nav-link text-white fw-bold mt-2"><i class="fa-solid fa-user-plus"></i>&nbsp;REGISTRATION</a> 
          </div>
        </ul>
      </span>
      
    </div>
  </div>
</nav>
