
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


      <!-- Carousel section Start Here -->
<div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
	     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active" data-bs-interval="10000">
	      <img src="./assets/images/cenima.jpg" class="d-block w-100" alt="..." height="500">
	      <div class="carousel-caption d-none d-md-block">
	        <h5 class="text-white">Enroll Now</h5>
	        <p class="text-white">Course Enrollments for Batch-02 of Graphic Design Training Program 2.0</p>
	      </div>
	    </div>
	    <div class="carousel-item" data-bs-interval="2000">
	      <img src="./assets/images/spider-man-no-way-home.jpg" class="d-block w-100" alt="..." height="500">
	      <div class="carousel-caption d-none d-md-block">
	        <h5 class="text-white">Practical Work</h5>
	        <p class="text-white">Our Center Focous On Practical More Than Theory.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="./assets/images/spider-man-no-way-home.jpg" class="d-block w-100 " height="500" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5 class="" style=" font-size: 35px; font-family: arial;color: black; font-weight: bold;">Come and Learn</h5>
	        <p class="" style="color: black; font-weight: bold;">We Have Profession Engineers.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="./assets/images/godzilla.jpeg" class="d-block w-100 " height="500" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5 class="text-white">NEW MOVIE</h5>
	      	<p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est facere qui necessitatibus officiis, tenetur, consequuntur saepe excepturi architecto obcaecati nemo repellat veniam a exercitationem aperiam repellendus aliquid cum distinctio inventore.</p>
	      </div>
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>

      <!-- Carousel section End Here -->

   
       <!--------------------You have Selected category Movies MOVIE SECTION START------------------- -->


    <div class="movie-types">
       <div class="container mt-3" style="display:flex">
        <form action="" method="post" >
            <input type="hidden" name="now">
            <button class="btn btn-dark"><h2>NOW PLAYING</h2></button>
        </form>
         &nbsp;&nbsp;
        <form action="" method="post" style="margin-left:10">
            <input type="hidden" name="comming">
        <button class="btn btn-dark"><h2>COMMING SOON</h2></button>
        </form>
       </div>    
    <div class="container">

        <h2  style="color:red">Movies</h2>
            <div class="row mt-3 " style="background-color:#fff">
				
	                    <?php
					
							
							$film=new database();
							$selected=$film->select_movies();
							
							if($selected->num_rows >0)
							{
								$row=mysqli_fetch_assoc($selected);
								
									?>
									<div class="row" style="padding:10px">
										<div class="col-md-5">
											<img src="./admin/<?php echo $row['image']?>" class="card-img-top" alt="..." class="img-fluid" style="height:350px">
                                    </div>
									<div class="col-md-6">
									<div class="card-body">
										<h5>Time ::&nbsp;<?php $time =strtotime($row['time']);
										  echo date("D-m-Y:h:i",$time);
										?> </h5>
                                        <h5 class="card-title">Film Name:<?php echo $row['film_name']?></h5>
                                        <p class="card-text">Language :<?php echo $row['language']?></p>
                                        <p class="card-text">Duration : <br> <?php echo $row['duration']?></p>
                                        <p class="card-text">Rating : &nbsp;<?php echo $row['rating']?></p>
                                        <p class="card-text">Director : &nbsp;<?php echo $row['director']?></p>
                                        <p class="card-text">Discount : &nbsp; <?php echo $row['discount']?></p>
                                        <p class="card-text">Time : &nbsp; <?php echo $row['movie_date']?></p>
                                        <p class="card-text">Date : &nbsp;<?php echo date("Y-M-D",$row['movie_time'])?></p>
										<p class="card-text" ><button class="btn btn-success" style="color:white"> Ticket Price <?php echo $row['price']?></button></p>
										<p class="card-text" ><button class="btn btn-primary" style="color:white">Total Seats <?php echo $row['price']?></button></p>
                                        <?php

										$sqll="SELECT * from payments";
										$res=mysqli_query($conn,$sqll);
										if($res->num_rows)
										{
											$time=mysqli_fetch_assoc($res);
                                            
											$sql="SELECT COUNT(movie_id) AS booked 
											FROM payments INNER JOIN films 
											ON films.film_id=payments.movie_id
											WHERE movie_time<payments.time";
										$res=mysqli_query($conn,$sql);



											if($res)
											{
												$booked=mysqli_fetch_assoc($res);


											}
											
										}

										?>
										<p class="card-text" ><button class="btn btn-primary" style="color:white">Booked Seats <?php echo $booked['booked']?></button></p>

										<p>We have Special Discount For Member Customer</p>
										<a href="payment.php?id=<?php echo $row['film_id']?>" class="btn btn-danger" >Buy Ticket</a>
                                    </div>

									</div>
										</div>
									</div>
								</div>
									<?php
								
							}else{
								?>
							     <h1 style="color:red">This Category Not Found</h1>
							   <?php
							}
						?>
        		</div>
    	</div>
    <hr style="color:red;height:2px">

       <!--------------------You have Selected category Movies MOVIE SECTION END------------------- -->

    

    <!-- This is Footer Section i have include Footer Here -->
    <?php
    require_once('./includes/footer.php');
     ?>


