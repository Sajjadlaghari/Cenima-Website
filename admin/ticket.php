<?php
  
  session_start();
  require_once('includes/db_connection.php');
       require_once('includes/db_connection.php');
       require_once('../database.php');



?>
<html>
    <head>
        <title>Payment</title>
   
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

        <script>

$(function() {
$('[data-toggle="tooltip"]').tooltip()
})
</script>

   
    <style>
        .rounded
        {border-radius: 1rem
        }
        .nav-pills .nav-link
        {color: #555}.nav-pills .nav-link.active{color: white}input[type="radio"]{margin-right: 5px}.bold{font-weight:bold}
    </style>
</head>

<body style="background-image:url('../assets/images/bg-body.jpg')">
<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6 text-danger fw-bold"> Payment</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">

                        <?php

                    if(isset($_POST['payment']))
                    {

                      $name=$_POST['name'];
                      $number=$_POST['number'];
                      $expire=$_POST['month']." ".$_POST['year'];
                      $ccv=$_POST['ccv'];
                     
                        require_once('../database.php');
                        $payment=new database();


                        $movie_id=$_GET['movie_id'];
                        $sql="SELECT * FROM films WHERE film_id=".$movie_id;
                       $res=mysqli_query($conn,$sql);
                       if($res->num_rows >0)
                       {
                           $dicount=mysqli_fetch_assoc($res);
                           $id=$dicount['film_id'];
                       }

                        $result=$payment->payments_customer($id,$name,$number,$expire,$ccv);
                        echo $result;
                        if($result)
                        {?>
                          <h4 class="text-center text-success">Your Ticket Booked Successfully</h4>
                        <?php                        
                        }
                        else
                        {?>
                          <h4 class="text-center text-danger pt-3">Your Ticket not Booked try again later </h4>
                         <?php
                        }
                        ?>
                        <?php
                      
                    }
                  
                  ?>



                            <form role="form" method="POST">
                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="name" placeholder="Card Owner Name" required class="form-control "> </div>
                                    
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> 
                                        <input type="text" name="number" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> 
                                                <input type="number" placeholder="MM" name="month" class="form-control" required> 
                                                <input type="number" placeholder="YY" name="year" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" name="ccv" required class="form-control"> </div>
                                    </div>

                                    <div class="col-sm-8">

                                    <?php 
                                    
                                       if(isset($_SESSION['user']) && $_SESSION['user']['role_id']=="2")
                                       {
                                         $_SESSION['user']['role_id'];
                                         $movie_id=$_GET['movie_id'];
                                         $sql="SELECT * FROM films WHERE film_id=".$movie_id;
                                        $res=mysqli_query($conn,$sql);
                                        if($res->num_rows >0)
                                        {
                                            $dicount=mysqli_fetch_assoc($res);

                                            $price=$dicount['price'];
                                            $dis=$dicount['discount'];

                                            $cc=$price/100*$dis;
                                            $after_discount=$price-$cc;
                                            ?>
                                            <p style="color:blue,font-weight:bold">After Discount Your Need To Pay Only <?php echo $after_discount?></hp>
                                        <?php
                                        }
                                       }
                                    ?>



                                </div>
                                <div class="card-footer"> <button type="submit" name="payment" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                        </div>
                    </div> <!-- End -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    
    </body>
</html>