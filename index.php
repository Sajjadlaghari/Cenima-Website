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

       <!--------------------POPULAR MOVIE SECTION------------------- -->

              <div class="container mt-5 mb-5" id="our_portfolio">
	                 <h3  style="color:red">Popular Movies </h3>

	                 <div class="row mt-3 text-center ">
	                     <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/3sLz2yv6vBDWqBbd8rdnNeoJ2kJ.jpeg" class="card-img img-fluid img" alt="">
	                             <div class="car-body">
	                                 <p class="card-title">The Martian</p>
	                                 <p class="card-title">PG13 | Season 4</p>
	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/yAcb58vipewa1BfNit2RjE6boXA.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                               <p class="card-title">Inside Out</p>
	                                 <p class="card-title">PG13 | Season 6</p>

	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/uQWgSRXeYRWCvGIX9LDNBW6XBYD.jpeg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                               <p class="card-title">Jurassic World</p>
	                                 <p class="card-title">PG13 | Season 6</p>

	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/total-recall-2012.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                               <p class="card-title">Mad Max</p>
	                                 <p class="card-title">PG13 | Season 6</p>

	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/dark-knight.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                               <p class="card-title">Star Wars</p>
	                                 <p class="card-title">PG13 | Season 6</p>

	                             </div>
	                         </div>
	                         
	                     </div>
                       <div class="col-lg-2 col-md-3 col-sm-13 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition text=center">
	                             <img src="./assets/images/endgame.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                               <p class="card-title text-center">Avengers</p>
	                                 <p class="card-title text-center">PG13 | Season 6</p>

	                             </div>
	                         </div>
	                         
	                     </div>
	                     
                    </div>
	            </div>
              <hr style="color:red;height:2px">
       <!--------------------POPULAR MOVIE SECTION END------------------- -->



                       <!--------------------Action-Adventure Movies  MOVIE SECTION START------------------- -->
    <div class="movie-types">
        <div class="container">
        <h3  style="color:red">Action-Adventure Movies  </h3>
            <div class="row mt-3 text-center ">
	                     <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/uQWgSRXeYRWCvGIX9LDNBW6XBYD.jpeg" class="card-img img-fluid img" alt="">
	                             <div class="car-body">
	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/total-recall-2012.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                              

	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/uQWgSRXeYRWCvGIX9LDNBW6XBYD.jpeg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/prdFM08mGvVDA6uQxKJh8n8Vek1.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                            

	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/lea5bLww1ZwbNPRVk0RjB34xxVg.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">


	                             </div>
	                         </div>
	                         
	                     </div>
                       <div class="col-lg-2 col-md-3 col-sm-13 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition text=center">
	                             <img src="./assets/images/jGYJyPzVgrVV2bgClI9uvEZgVLE.jpeg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                              

	                             </div>
	                         </div>
	                         
	                     </div>
	                     
                    </div>
        </div>
    </div>
    <hr style="color:red;height:2px">
       <!--------------------Action-Adventure Movies END SECTION ------->



         
       <!--------------------DRAMA MOVIE SECTION START------------------- -->

    <div class="movie-types">
        <div class="container">
        <h3  style="color:red">Drama Movies  </h3>
            <div class="row mt-3 text-center ">
	                     <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/together.jpg" class="card-img img-fluid img" alt="">
	                             <div class="car-body">
	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/the-guilty.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                              

	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/after-we-leave.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/a-scanner-darkly.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                            

	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/i-carry-you-with-me.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">


	                             </div>
	                         </div>
	                         
	                     </div>
                       <div class="col-lg-2 col-md-3 col-sm-13 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition text=center">
	                             <img src="./assets/images/endgame.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                              

	                             </div>
	                         </div>
	                         
	                     </div>
	                     
                    </div>
        </div>
    </div>
    <hr style="color:red;height:2px">

       <!--------------------DRAMA MOVIE SECTION END------------------- -->

        <!--------------------Romantic-Comedy Movies SECTION START------------------- -->

    <div class="movie-types">
        <div class="container">
        <h3  style="color:red">Romantic-Comedy Movies  </h3>
            <div class="row mt-3 text-center ">
	                     <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card" style="overflow:hidden">
	                             <img src="./assets/images/1bkcOEt4zvc5tBl6xFxTbkSqhEQ.jpeg" class="card-img img-fluid img" alt="">
	                             <div class="car-body">
	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card">
	                             <img src="./assets/images/vjnHRySiVM4YcBYzjCxw344y9g.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                              

	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/6ORGBbOA45pfKQXvntPf46NoFGO.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
	                             </div>
	                         </div>                  
	                     </div>
                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/wqnzpJR3PwS4doVkAkt9seSEpoX.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                            

	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/vdSSmzYKqViKH7mkQwgOVSALrOO.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">


	                             </div>
	                         </div>
	                         
	                     </div>
                       <div class="col-lg-2 col-md-3 col-sm-13 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition text=center">
	                             <img src="./assets/images/1bkcOEt4zvc5tBl6xFxTbkSqhEQ.jpeg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                              

	                             </div>
	                         </div>
	                         
	                     </div>
	                     
                    </div>
        </div>
    </div> img-flow
    <hr style="color:red;height:2px">

       <!--------------------Romantic-Comedy Movies MOVIE SECTION END------------------- -->

      






       



         <!--------------------Sci-Fi-Fantasy  MOVIE SECTION START------------------- -->
    <div class="movie-types">
        <div class="container">
        <h3  style="color:red">Sci-Fi-Fantasy Movies  </h3>
            <div class="row mt-3 text-center ">
	                     <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/4oD6VEccFkorEBTEDXtpLAaz0Rl.jpg" class="card-img img-fluid img" alt="">
	                             <div class="car-body">
	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/c0nUX6Q1ZB0P2t1Jo6EeFSVnOGQ.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                              

	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/4oD6VEccFkorEBTEDXtpLAaz0Rl.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/peTl1V04E9ppvhgvNmSX0r2ALqO.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                            

	                             </div>
	                         </div>
	                         
	                     </div>

                       <div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition">
	                             <img src="./assets/images/c0nUX6Q1ZB0P2t1Jo6EeFSVnOGQ.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">


	                             </div>
	                         </div>
	                         
	                     </div>
                       <div class="col-lg-2 col-md-3 col-sm-13 col-10 m-auto d-block shadow-sm img-flow">
	                         <div class="card transition text=center">
	                             <img src="./assets/images/endgame.jpg" class="card-img img-fluid" alt="">
	                             <div class="car-body">
                              

	                             </div>
	                         </div>
	                         
	                     </div>
	                     
                    </div>
        </div>
    </div>
    <hr style="margin-bottom:20px">
       <!--------------------Sci-Fi-Fantasy MOVIE SECTION END------------------- -->

    <!-- This is Footer Section i have include Footer Here -->
    <?php
    require_once('./includes/footer.php');
     ?>


