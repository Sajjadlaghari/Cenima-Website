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

<style>
      input
      {
        margin: 10px;
      }
      input[type='submit']
      {
        width: 100px;
      }
    </style>

      <div class="container" style="margin-top:6%">
        <div class="row justify-content-center" >
          <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <div class="row" >
                  <div class="col-lg-6 d-none d-lg-block" >
                    <img style="margin:30px; border-radius:20px;" src="https://thumbs.dreamstime.com/b/login-illustration-letter-cubes-forming-word-36025252.jpg " class="img-fluid" height='300px' alt="">        
                  </div>
                  <div class="col-lg-6">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4 fw-bold">Login Here!</h1>
                         <?php if(isset($_REQUEST['error_msg']))
                         {
                           ?>
                              <?=$_REQUEST['error_msg']?>
                            <?php
                          }
                       ?>
                      </div>
                       <form class="user" method="post" action="login-process.php" autocomplete="off">
                         <div class="form-group" >         
                            <input type="email" class="form-control form-control-user" id="email" name="email" required="true" placeholder="User Email ...">
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required="true">
                          </div>
                          <p> <input type="submit" class="btn btn-primary btn-user btn-block" name="login" value="login"></p>
                            <hr>
                        </form>
                          <p align="center" class="fw-bold"><a href="forgotpassword.php" style="text-decoration: none;">Forget Password</a></p>
                          <p align="center" class="fw-bold">Don't Have Account Yet <a href="registration.php" style="text-decoration: none;">Register</a></p>
                          <hr>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br><br><br>
      <?php
    require_once('./includes/footer.php');
     ?>