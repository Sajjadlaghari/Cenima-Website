<?php 
   require_once('./includes/db_connection.php');

   class database
   {
      // this method will work when admin will create user account
   	function insert($first_name,$last_name,$email,$password,$gender,$dob,$address,$path)
     {
   	 	global $conn;
         $sql="INSERT INTO USER(role_id,first_name,last_name,email,PASSWORD,gender,date_of_birth,user_image,address,is_approved,is_active)VALUES(2,'".$first_name."','".$last_name."','".$email."','".$password."','".$gender."','".$dob."','".$path."','".$address."','Approved','Active');";
         	return $result=mysqli_query($conn,$sql);
   	}
      // this method will work when user will create account

      function insert_user($name,$email,$phone_number,$role,$password)
     {
         global $conn;
         $sql="INSERT INTO user(role_id,name,email,contact_no,PASSWORD,)VALUES('".$role."','".$name."','".$email."','".$phone_number."','".$password."');";
            return $result=mysqli_query($conn,$sql);
      }

      // fetch users data from user table function
      function select_all_users()
     {
         global $conn;
         $sql="SELECT * FROM user  ORDER BY user_id DESC";
         return $result=mysqli_query($conn,$sql);
      }

      function view_profile($user_id)
     {
         global $conn;
         $sql="SELECT * FROM user Where  user_id=".$user_id;
         return $result=mysqli_query($conn,$sql);
      }

      function show_all_admin_information($user_id)
     {
         global $conn;
         $sql="SELECT * FROM USER WHERE NOT user_id=$user_id AND role_id='1'  ORDER BY user_id DESC";
         return $result=mysqli_query($conn,$sql);
      }

      function login_process($email,$password)
      {
          global $conn;
          $sql="SELECT * FROM user Where email='".$email."' AND password='".$password."'";
          return $result=mysqli_query($conn,$sql);
       }

  
      function active($user_id)
      {
         $time=time();
         global $conn;
         $sql="UPDATE user SET is_active='InActive', updated_at=$time WHERE user_id=".$user_id;
         return $result=mysqli_query($conn,$sql);
      }
      function inactive($user_id)
      {
         $time=time();
         global $conn;
         $sql="UPDATE user SET is_active='Active', updated_at=$time WHERE user_id=".$user_id;
         return $result=mysqli_query($conn,$sql);
      }
  
      function delete_user_record($user_id)
      {
          global $conn;
          $sql="DELETE FROM user WHERE user_id=".$user_id;
          return $result=mysqli_query($conn,$sql);
      }

      function contact_us($name,$email,$subject,$message)
      {
         global $conn;
         $sql="INSERT INTO contact_us (name,email,subject,message)VALUES('".$name."','".$email."','".$subject."','".$message."')";
          return $result=mysqli_query($conn,$sql);
      }
      
        function create_catgeory($category_name,$category_description)
       {
           global $conn;
           $sql="INSERT INTO category(name, description)VALUES('".$category_title."','".$category_description."')";
          return $result=mysqli_query($conn,$sql);             
        }

       function  show_categories()
       {
         global $conn;
         $sql="SELECT * FROM category";
         return $result=mysqli_query($conn,$sql);
       }

        function active_category_status($category_id)
       {
          $time=time();
          global $conn;
          $sql="UPDATE category SET category_status='InActive' , updated_at='$time' WHERE category_id=".$category_id;
          return $result=mysqli_query($conn,$sql);
       }

       function inactive_category($category_id)
       {
          $time=time();
          global $conn;
          $sql="UPDATE category SET category_status='Active' , updated_at='$time' WHERE category_id=".$category_id;
          return $result=mysqli_query($conn,$sql);
       }
        function get_data_for_update_category($category_id)
       {
         $time=time();
          global $conn;
          $sql="SELECT * FROM category WHERE category_id=".$category_id;
          return $result=mysqli_query($conn,$sql);
       }

       function update_catgeory($category_id,$category_title,$category_description)
      {
        $time=time();
         global $conn;
         $sql="UPDATE category SET category_title='".$category_title."',category_description='".$category_description."',updated_at=$time WHERE category_id=".$category_id;
         return $result=mysqli_query($conn,$sql);
      }
       function  delete_category_record($category_id)
      {
        $time=time();
         global $conn;
         $sql="DELETE FROM category WHERE category_id=".$category_id;
         return $result=mysqli_query($conn,$sql);
      }


        function select_films($category_id)
        {
           global $conn;
           $sql="SELECT * FROM films WHERE category_id=".$category_id;
           return $result=mysqli_query($conn,$sql); 
      }

      function payments_customer($owener_name,$number,$expire,$ccv)
      {
         global $conn;
         $sql="INSERT INTO payments(card_owner,card_number,expire_date,ccv )VALUES('".$owener_name."','".$number."','".$expire."','".$ccv."')";
         
         return $result=mysqli_query($conn,$sql); 
    }
      
      function select_movies()
      {
         global $conn;
         $sql="SELECT * FROM films";
         return $result=mysqli_query($conn,$sql); 
      }  

      function add_movie($price,$movie_name,$language,$duration,$director,$rating,$category_id,$time,$date,$discount,$path)
      {
         global $conn;
         $sql="INSERT INTO films(film_name,language,duration,rating,image,director,category_id,discount,movie_date,movie_time,price)VALUES('".$movie_name."','".$language."','".$duration."','".$rating."','".$path."','".$director."','".$category_id."','".$discount."','".$time."','".$date."','".$price."')";
         return $result=mysqli_query($conn,$sql);
      }

      
      function update_movie($id,$movie_name,$language,$price,$duration,$director,$rating,$category_id,$time,$discount)
      {
         global $conn;
         $sql="UPDATE films SET film_name='".$movie_name."',price='".$price."',language='".$language."',duration='".$duration."',rating='".$rating."',director='".$director."',category_id='".$category_id."',discount='".$discount."',movie_date='".$time."' WHERE film_id=".$id;
         return $result=mysqli_query($conn,$sql);
      }

      function selected_movie($id)
      {
         global $conn;
         $sql="SELECT * FROM films where film_id=".$id;
         return $result=mysqli_query($conn,$sql);
      }
   }

   
   function delete_movie($id)
   {
      global $conn;
      $sql="DELETE FROM films where film_id=".$id;
      return $result=mysqli_query($conn,$sql);
   }
   
 ?>