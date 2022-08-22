
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
        
        $sql="DELETE from user WHERE id=".$id;
        $res=mysqli_query($conn,$sql);
        if($res)
        {?>
        <h6>Data Deleted</h6>
        <?php            
        }
      }?>

    
<?php

if(isset($_GET['active']))
   {
    $id=$_GET['active'];

    $sql="UPDATE user SET is_active='InActive' WHERE id=".$id;
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "<script>alert('User InActivated')</script>";
    }
    else
    {
        echo "<script>alert('User Not InActivated')</script>";
    }
   }

   if(isset($_GET['inactive']))
   {
      $id=$_GET['inactive'];

    $sql="UPDATE user SET is_active='active' WHERE id=".$id;
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "<script>alert('User Activated')</script>";
    }
    else
    {
        echo "<script>alert('User Not Activated')</script>";
    }
   }
   ?>
                                    <h4>Table </h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Contact No</th>
                                                    <th>is_active</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $sql="SELECT * FROM user";
                                                $selected=mysqli_query($conn,$sql);
                                                
                                                if($selected->num_rows >0)
                                                {
                                                    while($row=mysqli_fetch_assoc($selected))
                                                    {
                                                        ?>
                                                     <tr>
                                                        <td><?=$row['name']?></td>
                                                        <td><?=$row['email']?></td>
                                                        <td><?=$row['password']?></td>
                                                        <td><?=$row['contact_no']?></td>
                                                        <td>
                                                            
                                                            <?php
                                                            if($row['is_active']=="active")
                                                            {?>
                                                            <a href="?active=<?php echo $row['id']?>" class="btn btn-danger" style="color:white">Active</a>
                                                            <?php

                                                            }
                                                            elseif($row['is_active']=="InActive")
                                                            {?>
                                                            <a href="?inactive=<?php echo $row['id']?>" class="btn btn-success" style="color:white">InActive</a>
                                                            <?php

                                                            }
                                                            ?>
                                                        </td>

                                                        <td>
                                                            <button class="btn btn-danger"><a href="?id=<?php echo $row['id']?>" style="color:white" calss="btn btn-danger text-white"> Delete</a></button>
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