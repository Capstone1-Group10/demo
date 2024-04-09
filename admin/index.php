<?php 
   include './layouts/header.php';
   include '../model/config.php';
   include '../model/khoahoc.php';
   include '../model/login.php';
   include '../model/product.php';
   include '../model/thongtin_dk.php';
   

   if(isset($_GET["adm"])){ 
    $action = $_GET["adm"];
    switch ($action) {
        case 'add_kh':
            if(isset($_POST['add_name_kh'])){
                $name_kh=$_POST['name_kh'];
                into_dm_phong($name_kh);
            }
            include './view/khoahoc/add_khoahoc.php';
            break;

            case 'ds_khoahoc':
                $load_kh=load_all_dm_phong();
                include './view/khoahoc/ds_khoahoc.php';
                break;

                case 'delete_khoahoc':
                     if(isset($_GET['id_menu'])){
                      
                        delete_dm_phong();
                     }
                    $load_kh=load_all_dm_phong();
                    include './view/khoahoc/ds_khoahoc.php';
                    break;

                    case 'sua_khoahoc':
                        if(isset($_GET['id_menu'])){
                            $load_kh_id=suaid_menu();
                         }
                       include './view/khoahoc/up_khoahoc.php';
                       break;
                       case 'up_khoahoc':
                         if(isset($_POST['up_khoahoc'])){
                            $name_kh=$_POST['name_khoahoc'];
                            $id_khoahoc=$_POST['id_khoahoc'];
                            up_menu($name_kh,$id_khoahoc);
                         }
                         $load_kh=load_all_dm_phong();
                    include './view/khoahoc/ds_khoahoc.php';
                        
                       break;

                       case 'ds_user':

                        $load_user=load_user();
                       
                        include './view/user/ds_user.php';
                        break;
                        case 'sua_user':
                            if(isset($_GET['id_user'])){
                                $load_user_id=suaid_user();
                             }
                           include './view/user/up_user.php';
                           break;


                           case 'up_user':
                            if(isset($_POST['up_user'])){
                                $user_name = $_POST["user_name"];
                                $pass = $_POST["pass"];
                                $name = $_POST["name"];
                                $email = $_POST["email"];
                                $id_user=$_POST['id_user'];
                                $gender=$_POST['gender'];
                                update_user($user_name, $email,$pass,$name,$gender,$id_user);
                            }
                            $load_user=load_user();
                       
                        include './view/user/ds_user.php';
                           
                          break;

                          case 'thongke':

                          
                            include './view/thongke/thongke.php';
                            break;

                          case 'delete_user':
                            if(isset($_GET['id_user'])){
                             
                               delete_user();
                            }
                            $load_user=load_user();
                       
                            include './view/user/ds_user.php';
                           
                           break;

                        case 'add_product':
                            if(isset($_POST['add_product'])){
                                $name_product = $_POST['name_product'];
                                $price_product = $_POST['price_product'];
                                $img=basename($_FILES['img']['name']);
                        $target_dir="../uploads/";
                        $target_file = $target_dir . $img;
                        if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
                          
                        }
                        $content=$_POST['content'];
                                $level = $_POST['level'];
                                $total_lessons = $_POST['total_lessons'];
                                $time_cource = $_POST['time_cource'];
                                $FK_id_khoahoc = $_POST['FK_id_khoahoc'];
                                into_product($name_product,$price_product,$img,$level,$total_lessons,$time_cource,$FK_id_khoahoc, $content);
                            }
                            $load_kh=load_all_dm_phong();
                            include './view/product/add_product.php';
                            break;


                            case 'ds_product':
                               $load_product=load_product();
                               
                                include './view/product/ds_product.php';
                                break;

                                case 'sua_product':
                                    if(isset($_GET['id_product'])){
                                        $load_id_product=suaid_product();
                                     }
                                   include './view/product/up_product.php';
                                   break;


                                   case 'up_product':
                                    if(isset($_POST['up_product'])){
                                        $id_product=$_POST['id_product'];
                                        $name_product = $_POST['name_product'];
                                $price_product = $_POST['price_product'];
                                $img=basename($_FILES['img']['name']);
                        $target_dir="../uploads/";
                        $target_file = $target_dir . $img;
                        if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
                          
                        }
                                $content=$_POST['content'];
                                $level = $_POST['level'];
                                $total_lessons = $_POST['total_lessons'];
                                $time_cource = $_POST['time_cource'];
                                up_product($name_product,$price_product,$img,$level,$total_lessons,$time_cource,$id_product, $content);
                                    
                               }
                               $load_product=load_product();
                               
                                include './view/product/ds_product.php';
                                  
                                  break;

                                  case 'delete_product':
                                    if(isset($_GET['id_product'])){
                                     
                                      delete_product();
                                    }
                                    $load_product=load_product();
                               
                                include './view/product/ds_product.php';
                                break;
                                case 'ds_dk':
                                      $load_tt_dk=load_tt_dk();
                                    include './view/thongtin_dk/thongtin_dk.php';
                                    break;

                                    case 'delete_da_dk':
                                        if(isset($_GET['id_da_dk'])){
                                         
                                         delete_dk();
                                        }

                                        $load_tt_dk=load_tt_dk();
                                        include './view/thongtin_dk/thongtin_dk.php';
                                        break;
    
                         

                       
   


            
      
    }
} else{
    include './layouts/home.php';
}

include './layouts/footer.php';
   

   ?>