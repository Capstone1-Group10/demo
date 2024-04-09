<?php
   function check_user($user_name,$pass){
      $sql="select * from user where user_name='$user_name' and pass='$pass' ";
      $result= pdo_query_one($sql);
      return $result;
  }





    
     function into_user($user_name,$email,$pass,$name,$gender,$phone) {
        $sql="insert into user (user_name,email,pass,name,gender,phone) values('$user_name','$email','$pass','$name','$gender','$phone')";
        pdo_execute($sql);
     }

     function load_user(){
      $sql= "Select * from user order by id_user desc";
        $result= pdo_query( $sql );
        return $result;
     }
     function load_user_email($email){
      $sql= "Select * from user order by email='$email' desc";
        $result= pdo_query_one( $sql );
        return $result;
     }

     function kiemTraMatKhau($matKhau) {
      // Kiểm tra xem mật khẩu có ít nhất một kí tự và một số không
      if (preg_match('/[A-Za-z]/', $matKhau) && preg_match('/\d/', $matKhau)) {
          return true; // Mật khẩu hợp lệ
      } else {
          return false; // Mật khẩu không hợp lệ
      }
  }

     function check_user_admin($email,$pass){
        $sql= "SELECT * from user where email='$email' and pass='$pass' ";
        $resul= pdo_query_one($sql);
        return $resul;  
     }
    
     function check_gamil($email){
      $sql= "SELECT * from user where email='$email' ";
      $resul= pdo_query_one($sql);
      return $resul;  
   }
   function generateRandomCode($length = 6) {
      return sprintf('%06d', mt_rand(0, 999999));
  }
     function suaid_user(){
      $sql="select * from user where id_user=".$_GET['id_user'];
      $result=pdo_query_one($sql);
      return $result;
  }
     function update_user($user_name,$email,$pass,$name,$gender,$id_user){
        $sql= "update user set user_name='".$user_name."', email='".$email."', pass='".$pass."',name='".$name."',gender='".$gender."' where id_user=".$id_user;
        pdo_execute($sql);
         }
         function update_user_kh($user_name,$email,$pass,$name,$gender,$id_user){
            $sql= "update user set user_name='".$user_name."', email='".$email."', pass='".$pass."',name='".$name."',gender='".$gender."' where id_user=".$id_user;
            pdo_execute($sql);
             }

         function delete_user() {
            $sql = "delete from user where id_user=".$_GET['id_user'];
            pdo_execute($sql);
         }


?>