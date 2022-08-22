

    <!-- This is Navbar Section i have include navbar Here -->
    <?php
   require_once('./includes/navbar.php');
   require_once('./includes/db_connection.php');
   require_once('database.php');
   
   ?>






                    <div class="row">
                        <div class="col-lg-3">
                           
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-8">
                           
                        <div class="card">
                                <div class="card-title">
                                    <h4>Add Movie</h4>
                                    <?php
                                       if(isset($_POST['add_movie']))
                                       {
                                        $movie_name = $_POST['name'];
                                        $language = $_POST['language'];
                                        $duration = $_POST['duration'];
                                        $director = $_POST['director'];
                                        $rating = $_POST['rating'];
                              
                                        $date = strtotime($_POST['date']);
                                        $discount = $_POST['discount'];
                                        $price = $_POST['price'];
                                        $seat = $_POST['seat'];
                                        $category_id = $_POST['category'];
                                        
                                        
                                        $file=$_FILES['file'];
                                        $size=$_FILES['file']['size'];

                                        $file_name=pathinfo($file['name'],PATHINFO_BASENAME);
                                        $dir='images';
                                        $file_tmp=$_FILES['file']['tmp_name'];
                                        $size=$_FILES['file']['size']."<br>";
                                        $path=$dir."/".rand(100,10000).$file_name;
                                        move_uploaded_file($file_tmp, $path);


                                        //   $add = new database();
                                          

                                         require_once('database.php');
                                         $sql="INSERT INTO films(film_name,language,duration,rating,image,director,category_id,discount,movie_time,price,total_seats)VALUES('".$movie_name."','".$language."','".$duration."','".$rating."','".$path."','".$director."','".$category_id."','".$discount."','".$date."','".$price."','".$seat."')";
                                         $result=mysqli_query($conn,$sql);
                                         if($result)
                                        {?>
                                        <h1 class="text-center text-success">Movie Added Successfully</h1>
                                        <?php

                                        }
                                        else
                                        {?>
                                                <h1 class="text-center text-success">Movie Not Added Tray Again Later</h1>
                                                <?php
                                        }

                                        //   $result = $hhh->category($movie_name,$language,$duration,$category,$director,$rating,$time,$date,$discount,$path);
                                       }
                                    ?>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control input-default " placeholder="Enter Movie Name">
                                                <p class="fw-bold text-dark">Movie Name</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="language" class="form-control input-default " placeholder="Enter Movie Language">
                                                <p class="fw-bold text-dark">Movie Language</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="duration" class="form-control input-default " placeholder="Movie Duration">
                                                <p class="fw-bold text-dark">Movie Duration</p>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="price" class="form-control input-default " placeholder="Movie Price">
                                                <p class="fw-bold text-dark">Movie Price</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rating" class="form-control input-default " placeholder="Movie Rating">
                                                <p class="fw-bold text-dark">Movie Rating</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="director" class="form-control flatpickr flatpickr-input" placeholder="Movie Director">
                                                <p class="fw-bold text-dark">Movie Director</p>
                                            </div>
                                            <div class="form-group">


                                          <select class="form-select form-control input-default " name="category" aria-label="Default select example" >
                                                        <option selected>--Select Movie category--</option>
                                                <?php 
                                                    $obj=new database();
                                                    $result=$obj->show_categories();
                                                    if($result->num_rows)
                                                    {?>
                                                    <?php
                                                        while($row=mysqli_fetch_assoc($result))
                                                        {?>
                                                        <option value="<?php echo $row['category_id'] ?>"><?php echo $row['name'] ?></option>
                                                        <?php
                                                        }
                                                    }
                                                ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <input type="datetime-local" name="date" class="form-control input-default " placeholder="Movie Director">
                                                <p class="fw-bold text-dark">Movie Date and Time</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="discount" class="form-control input-default " placeholder="Discount">
                                                <p class="fw-bold text-dark">Discount For Member Customer</p>
                                            </div>

                                            <div class="form-group">
                                                <input type="file" name="file" class="form-control input-default " placeholder="Discount">
                                                <p class="fw-bold text-dark">Movie Image</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="seat" class="form-control input-default " placeholder="Total Seats">
                                                <p class="fw-bold text-dark">Total Seats</p>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" name="add_movie" class="btn btn-success">Add Movie</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>