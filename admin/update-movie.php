

    <!-- This is Navbar Section i have include navbar Here -->
    <?php
   require_once('./includes/navbar.php');
   require_once('./includes/db_connection.php');
   require_once('database.php');
   
   
   
   if(isset($_GET['film_id']))
   {
    $id=$_GET['film_id'];
   
   }
   
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
                                       if(isset($_POST['update_movie']))
                                       {
                                        $movie_name = $_POST['name'];
                                        $language = $_POST['language'];
                                        $duration = $_POST['duration'];
                                        $director = $_POST['director'];
                                        $rating = $_POST['rating'];
                                        $date= strtotime($_POST['date']);
                                    
                                        $discount = $_POST['discount'];
                                        $price = $_POST['price'];
                                        $category_id = $_POST['category'];

                                        if($date=="")
                                        {
                                                $edit =  new database();
                                                
                                           
                                                
                                                $result=$edit->selected_movie($id);
                                                if($result)
                                                {
                                                    $row=mysqli_fetch_assoc($result);
                                                    $date=$row['movie_time'];
                                                }
                                            

                                        }
                                        $id=$_POST['id'];  

                                         require_once('database.php');
                                         $sql="UPDATE films SET film_name='".$movie_name."',price='".$price."',language='".$language."',duration='".$duration."',rating='".$rating."',director='".$director."',category_id='".$category_id."',discount='".$discount."',movie_time='".$date."' WHERE film_id=".$id;
                                         $result=mysqli_query($conn,$sql);
                                         if($result)
                                        {?>
                                        <h1 class="text-center text-success">Movie Update Successfully</h1>
                                        <?php

                                        }
                                        else
                                        {?>
                                                <h1 class="text-center text-success">Movie Not Update Tray Again Later</h1>
                                                <?php
                                        }

                                        //   $result = $hhh->category($movie_name,$language,$duration,$category,$director,$rating,$time,$date,$discount,$path);
                                       }
                                    ?>
                                    
                                </div>
                                <div class="card-body">
                                    <?php
                                    if(isset($_GET['film_id']))
                                    {
                                        $edit =  new database();
                                        $id=$_GET['film_id'];
                                        
                                        $result=$edit->selected_movie($id);
                                        if($result)
                                        {
                                            $row=mysqli_fetch_assoc($result);
                                            ?>
                                              <div class="basic-form">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" name="name" value="<?php echo $row['film_name']?>" class="form-control input-default " placeholder="Enter Movie Name">
                                                  <input type="hidden" name="id" value="<?php echo $row['film_id']?>">
                                                <p class="fw-bold text-dark">Movie Name</p>

                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="language" value="<?php echo $row['language']?>" class="form-control input-default " placeholder="Enter Movie Language">
                                                <p class="fw-bold text-dark">Movie Language</p>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="price" value="<?php echo $row['price']?>" class="form-control input-default " placeholder="Enter Movie Language">
                                                <p class="fw-bold text-dark">Movie Price</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="duration" value="<?php echo $row['duration']?>" class="form-control input-default " placeholder="Movie Duration">
                                                <p class="fw-bold text-dark">Movie Duration</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="rating" value="<?php echo $row['rating']?>" class="form-control input-default " placeholder="Movie Rating">
                                                <p class="fw-bold text-dark">Movie Rating</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="director" value="<?php echo $row['director']?>" class="form-control input-default " placeholder="Movie Director">
                                                <p class="fw-bold text-dark">Movie Director</p>
                                            </div>
                                            
                                            <div class="form-group">


                                          <select class="form-select form-control input-default " name="category" aria-label="Default select example" >
                                                        <option ><?php echo $row['category_id']?></option>
                                                <?php 
                                                    $obj=new database();
                                                    $result=$obj->show_categories();
                                                    if($result->num_rows)
                                                    {?>
                                                    <?php
                                                        while($val=mysqli_fetch_assoc($result))
                                                        {?>
                                                        <option value="<?php echo $val['category_id'] ?>"><?php echo $val['name'] ?></option>
                                                        <?php
                                                        }
                                                    }
                                                ?>
                                                </select>
                                            </div>

                                        

                                            <div class="form-group">
                                                <input type="datetime-local" name="date"  value="<?=$row['category_id']?>" class="form-control input-default " placeholder="Movie Director">
                                                <p class="fw-bold text-dark">Movie Date</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="discount" value="<?=$row['category_id']?>" class="form-control input-default " placeholder="Discount">
                                                <p class="fw-bold text-dark">Discount For Member Customer</p>
                                            </div>

                                           
                                            <div class="text-center">
                                                <button type="submit" name="update_movie" class="btn btn-success">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>


<?php

                                        }
                                
                                    }
                                    
                                    ?>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>