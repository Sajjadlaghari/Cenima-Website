
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
       require_once('database.php');

     ?>


    <!-- OFFICE  Contact  -->
    <div class="container" id="contact_us">
    <h1 class="fw-bold mb-4 p-2 footer-color  mt-4" >CONTACT US</h1>

	          	 <h1 class="mb-3 p-3 " style="margin-top:20px; color: red; font-weight: bold; text-align: center;" >CONTACT US</h1>
	          	<div class="row" style="background-color:white">
	          		<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 ">
		          
	          	   <img src="./assets/images/contact.jpg" class="img-fluid pt-3" alt="">		    
	          		</div>
                <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6 ">
                  <?php
                    if(isset($_POST['send'])&& $_POST['name'] && $_POST['email'] && $_POST['subject'] && $_POST['message']!="")
                    {
                      $name=$_POST['name'];
                      $email=$_POST['email'];
                      $subject=$_POST['subject'];
                      $message=$_POST['message'];
                      $contact=new database();
                      $result=$contact->contact_us($name,$email,$subject,$message);
                      if($result)
                      {?>
                       <h4 class="text-center text-success">Data Inserted Successfully</h4>
                      <?php

                      }
                     ?>
                    <?php
                    }
                  ?>
                         
		          			<form id="" class="form p-3" name="contact-form"  method="POST">
			          	     <div class="mb-3">
                          <input type="text" name="name" placeholder="Enter Name Here" class="form-control">
                       </div>
                       <div class="mb-3">
                          <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                       </div>
                       <div class="mb-3">
                          <input type="text" name="subject" placeholder="Enter Subject" class="form-control">
                       </div>
                       <div class="mb-3">
                         <textarea name="message" class="form-control" id="" cols="15" placeholder="Enter Your Message"  rows="5"></textarea>
                      </div>
		          			  <div class="container text-center">
                        <button class="btn btn-success" name="send">SEND MESSAGE</button>
                      </div>
                    </form>
	          			    
	          		</div>
	          	</div>
	          </div>

    
<br><br><br><br>



<!-- This is Footer Section i have include Footer Here -->
   <?php
    require_once('./includes/footer.php');
     ?>
