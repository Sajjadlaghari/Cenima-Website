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
       require_once('./includes/db_connection.php');
       require_once('database.php');

     ?>

      <div class="container  registration-form" >
    <h1 class="fw-bold mb-4 p-2 footer-color text-center  mt-4" >Register Your Accout Here</h1>

          <div class="row ">
        
            <div class="col-lg-6 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                  <?php
                    if(isset($_POST['register'])&& $_POST['name'] && $_POST['email'] && $_POST['phone_number'] && $_POST['role'] && $_POST['password']!="")
                    {
                      $name=$_POST['name'];
                      $email=$_POST['email'];
                      $role=$_POST['role'];
                      $phone_number=$_POST['phone_number'];
                      $password=$_POST['password'];
                      $cpassword=$_POST['cpassword'];

                      if($cpassword != $password)
                      {?>
                       <h6 class="text-center pt-3 text-danger">Password and confirm Password Not Match</h6>

                      <?php
                      }
                      else
                      {
                        $sql="INSERT INTO user(role_id,name,email,contact_no,password,is_active)VALUES('".$role."','".$name."','".$email."','".$phone_number."','".$password."','active')";
                        $result=mysqli_query($conn,$sql);
                        if($result)
                        {?>
                          <h4 class="text-center text-success">Your Account Created  Successfully</h4>
                        <?php              
                        }
                        else
                        {?>
                          <h4 class="text-center text-danger pt-3">Account Not Created try Agin Later </h4>
                         <?php
                        }
                        ?>

                        <?php
                      }
                    }
                    else
                    {
                      ?>
                     <?php          
                    }
                  ?>
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                      <form class="user" method="post" action="" autocomplete="off">
                      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example1c" name="name" placeholder="Name" class="form-control" />
                            <label class="form-label" for="form3Example1c">Your Name</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="form3Example3c" name="email" placeholder="Email" class="form-control" />
                            <label class="form-label" for="form3Example3c">Your Email</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="number" name="phone_number" id="form3Example3c" placeholder="Phone Number" class="form-control" />
                            <label class="form-label" for="form3Example3c">Phone Number</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <select class="form-control" name="role" id="">
                              <option value="3" class="form-control p-4">Gues Customer</option>
                              <option value="2">Member Customer</option>
                            </select>
                          <label class="form-label" for="form3Example3c">Role</label>
                          </div>
                        </div>


                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" name="password" id="form3Example4c" placeholder="Password" class="form-control" />
                            <label class="form-label" for="form3Example4c">Password</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" name="cpassword" placeholder="Repeate Password" id="form3Example4cd" class="form-control" />
                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                          </div>
                        </div>



                        <div class="form-check mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label" for="form2Example3">
                            I agree all statements in <a href="#!">Terms of service</a>
                          </label>
                        </div>

                          <button  name="register" class="btn btn-primary btn-lg">Register</button>
                      </form>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-7 col-xs-12 order-lg-2">
                      <img src="./assets/images/regis.jpg"
                        class="img-fluid" alt="Sample image">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
<br><br><br><br>



<!-- This is Footer Section i have include Footer Here -->
   <?php
    require_once('./includes/footer.php');
     ?>
