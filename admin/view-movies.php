
  <?php
       require_once('includes/navbar.php');
       require_once('database.php');
       require_once('includes/db_connection.php');

    ?>
<style>
    .form-inline{
        display:block;
    }
    .pagination{
        float:right;
        padding:0px;
    }
    .pagination li{
        padding:10px;
    }
    .row{
        margin:0px!important;;
    }
</style>
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Row-Select</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <?php
                                if(isset($_GET['msg']))
                                {
                                    echo $_GET['msg'];
                                }
                                ?>
                                <div class="card-title">
                                    <?php
                                                                    
                                    if(isset($_GET['film_id']))
                                    {
                                        echo $id=$_GET['film_id'];
                                        
                                        $sql="DELETE from films WHERE film_id=".$id;
                                        $res=mysqli_query($conn,$sql);
                                        if($res)
                                        {?>
                                        <h6>Data Deleted</h6>
                                        <?php

                                            
                                        }

                                    }?>
                                    <h4>Table </h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Movie Name</th>
                                                    <th>Image</th>
                                                    <th>Movie language</th>
                                                    <th>Duration</th>
                                                    <th>Rating</th>
                                                    <th>Director</th>
                                                    <th>Discount</th>
                                                    <th>Price</th>
                                                    <th>Time</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $movie=new database();
                                                $selected=$movie->select_movies();
                                                
                                                if($selected->num_rows >0)
                                                {
                                                    while($row=mysqli_fetch_assoc($selected))
                                                    {
                                                        ?>
                                                     <tr>
                                                        <td><?=$row['film_name']?></td>
                                                        <td><img src="<?=$row['image']?>" style="height:50px;" alt=""></td>
                                                        <td><?=$row['language']?></td>
                                                        <td><?=$row['duration']?></td>
                                                        <td><?=$row['rating']?></td>
                                                        <td><?=$row['director']?></td>
                                                        <td><?=$row['discount']?></td>
                                                        <td><?=$row['price']?></td>
                                                        <td><?php $time = strtotime($row['time']); echo date("m-D-y,  h:i A",$time);?></td>
                                                        <td>
                                                            <?php 
                                                             if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] =="1")
                                                             {?>
                                                             <button class="btn btn-info"> <a style="color:white" href="update-movie.php?film_id=<?php echo $row['film_id']?>" calss="btn btn-info text-white"> edit</a></button>
                                                             <button class="btn btn-danger"><a style="color:white" href="?film_id=<?php echo $row['film_id']?>" calss="btn btn-danger text-white"> Delete</a></button>
                                                            

                                                             <?php
                                                             }
                                                             else
                                                             {?>
                                                             <a href="ticket.php?movie_id=<?php echo $row['film_id']?>"><button class="btn btn-danger">Buy Ticket</button></a>

                                                             <?php

                                                             }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                }else{
                                                    ?>
                                                     <h1 style="color:red">This Category Not Found</h1>
                                                   <?php
                                                }
                                                ?>
                                                
                                               
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>



 <!-- jquery vendor -->
 <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="js/lib/bootstrap.min.js"></script><script src="js/scripts.js"></script>
    <!-- scripit init-->
    <script src="js/lib/data-table/datatables.min.js"></script>
    <script src="js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="js/lib/data-table/jszip.min.js"></script>
    <script src="js/lib/data-table/pdfmake.min.js"></script>
    <script src="js/lib/data-table/vfs_fonts.js"></script>
    <script src="js/lib/data-table/buttons.html5.min.js"></script>
    <script src="js/lib/data-table/buttons.print.min.js"></script>
    <script src="js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="js/lib/data-table/datatables-init.js"></script>








</body>

</html>