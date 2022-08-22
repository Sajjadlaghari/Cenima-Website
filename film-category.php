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
        <div class="container">
        <h2  style="color:red"><?php if(isset($_GET['catagory_name']))
		{
			echo $_GET['catagory_name'];
		}
		?> </h2>
            <div class="row mt-3 text-center ">
	                    <?php
						if(isset($_GET['category_id']))
						{
							$id=$_GET['category_id'];
							
							$film=new database();
							$selected=$film->select_films($id);
							
							if($selected->num_rows >0)
							{
								while($row=mysqli_fetch_assoc($selected))
								{
									?>
								 <div class="col-lg-3 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                        		 <div class="card" style="overflow:hidden">
	                            		 <img src="admin/<?php echo $row['image']?>" class="card-img img-fluid img" alt="">
	                            	 <div class="car-body">
	                        			</div>
	                       		  </div>
	                     		 </div>

								<?php
								}
							}else{
								?>
							     <h1 style="color:red">This Category Not Found</h1>
							   <?php
							}
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


