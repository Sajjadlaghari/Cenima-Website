
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
        padding:10px
    }
    ..row{
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
                                    
      if(isset($_GET['id']))
      {
        echo $id=$_GET['id'];
        
        $sql="DELETE from payments WHERE id=".$id;
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
                                                    <th>Owner Name</th>
                                                    <th>Card number</th>
                                                    <th>CCV</th>
                                                    <th>Movie ID</th>
                                                    <th>Time</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $sql="SELECT * FROM payments";
                                                $selected=mysqli_query($conn,$sql);
                                                
                                                if($selected->num_rows >0)
                                                {
                                                    while($row=mysqli_fetch_assoc($selected))
                                                    {
                                                        ?>
                                                     <tr>
                                                        <td><?=$row['card_owner']?></td>
                                                        <td><?=$row['card_number']?></td>
                                                        <td><?=$row['ccv']?></td>

                                                        <td><?php echo $row['movie_id']?></td>
                                                        <td><?php $time = strtotime($row['time']); echo date("Y-M-D,H:m;I",$time);?></td>
                                                        <td>
                                                            <button class="btn btn-danger text-white"><a href="?id=<?php echo $row['id']?>" calss="btn btn-danger text-white" style="color:white"> Delete</a></button>
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