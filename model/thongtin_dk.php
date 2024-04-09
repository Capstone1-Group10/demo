<?php 
   function load_tt_dk(){
    $sql = "SELECT * FROM register_cource order by  id_register_coure desc";
    $resutl=pdo_query($sql);
    return $resutl;

   }

   function delete_dk() {
    $sql = "delete from register_cource where 	id_register_coure =".$_GET['id_da_dk'];
    pdo_execute($sql);
 }



?>