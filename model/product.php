<?php 
   function into_product($name_product,$price_product,$img,$level,$total_lessons,$time_cource,$FK_id_khoahoc,$content){
    $sql = "INSERT INTO product_kh (name_product, price_product, img, level, total_lessons, time_cource,FK_id_khoahoc,content) VALUES ('$name_product','$price_product','$img','$level','$total_lessons','$time_cource','$FK_id_khoahoc','$content')";
    pdo_execute($sql);

   }
   function load_product_pro(){
      $sql = "SELECT * FROM product_kh where FK_id_khoahoc=2 ";
      $result=pdo_query($sql);
      return $result;
   }

   function up_product($name_product,$price_product,$img,$level,$total_lessons,$time_cource,$id_product,$content){
      $sql="update product_kh set name_product='".$name_product."' , price_product='".$price_product."', img='".$img."', level='".$level."', total_lessons='".$total_lessons."', time_cource='".$time_cource."',content='".$content."' where id_product='".$id_product."'";
     pdo_execute($sql);
   }
   function suaid_product(){
      $sql="select * from product_kh where id_product=".$_GET['id_product'];
      $result=pdo_query_one($sql);
      return $result;
  }

  function delete_product(){
   $sql = "delete from product_kh where id_product=".$_GET['id_product'];
   pdo_execute($sql);
}
   function load_product(){
      $sql = "SELECT * FROM product_kh order by id_product desc";
      $result=pdo_query($sql);
      return $result;
   }
   function load_product_coban(){
      $sql = "SELECT * FROM product_kh where FK_id_khoahoc=1 ";
      $result=pdo_query($sql);
      return $result;
   }

?>