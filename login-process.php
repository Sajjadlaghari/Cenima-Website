<?php
     session_start();
     require_once('database.php');
     require_once('includes/db_connection.php');

     if(isset($_SESSION['user']))
    {
	    if($_SESSION['user']['role_id']==1)
    	    {
        		header("location:admin/index.php");
    	    }
    		elseif($_SESSION['user']['role_id']==2)
    		{
        		header("location:admin/index.php");
    		}
			elseif($_SESSION['user']['role_id']==3)
    		{
        		header("location:admin/index.php");
    		}
   	}elseif(isset($_POST['login']))
   	{
   	    	$email=$_POST['email'];
   	    	$password=$_POST['password'];                                     //myleghari@hidayatrust.org,1111111111111
   	    	 
   	    	    $user_obj = new database();
   	         $result=$user_obj->login_process($email,$password);
   	         if($result->num_rows)
   	         {
   	         	$user=mysqli_fetch_assoc($result);
   	         	
   	        		if($user['is_active']=='active')
   	        		{
                         $_SESSION['user']=$user;

   			          if($_SESSION['user']['role_id']==1)
   			         {
   			          	header("location:admin/index.php");
   			          }
   			          elseif ($_SESSION['user']['role_id']==2)
   			         {
   			              header("location:admin/index.php");
   			          }
						 elseif ($_SESSION['user']['role_id']==3)
						 {
							  header("location:admin/index.php");
						  }
   	        		}
   		        	else
   			    	{
   			           	
   			           	header('location:login.php?error_msg='.'<div class="alert alert-danger" role="alert">Your Account Not Actived Contact With Admin!</div>');
   					    die();
   			    	}
   	        }
   		    else
   		    {
   		        header('location:login.php?error_msg='.'<div class="alert alert-danger" role="alert">Invalid Email Or Password!</div>');
   			    die();
   		    }
   	    }
   	else
    {
   		header('location:login.php?error_msg='.'<div class="alert alert-danger" role="alert">Please Login First!</div>');
	     die();
   	}

   
    

   

?>