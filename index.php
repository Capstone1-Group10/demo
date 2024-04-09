   <?php 
   ob_start();
   session_start();
   include './pages/home.php';
   include './model/config.php';
   include './model/khoahoc.php';
   include './model/login.php';
   include './model/product.php';


   if(isset($_GET["action"])){ 
    $action = $_GET["action"];
    switch ($action) {
        case 'ctkhoahoc':
             if(isset($_GET['id_product'])){
                 $load_ct_product_id=suaid_product();
                 
             }

             if(isset($_SESSION['user_name'])){
                extract($_SESSION['user_name']);}
                if(isset($_POST['dangki_kh'])){
                    $date=date('Y-m-d H:i:s');
                    $name_product=$_POST['name_product'];
                    $price_product=$_POST['price_product'];
                    $id_product=$_POST['id_product'];
                    $id_khoahoc=$_POST['id_khoahoc'];
                    if(isset($_SESSION['user_name'])){
                    $sql = "INSERT INTO register_cource (name_kh,email,phone,name_khoahoc,price,date,id_user,id_product,id_khoahocc) VALUES ('$name','$email','$phone','$name_product', '$price_product', '$date','$id_user','$id_product','$id_khoahoc')";
                     pdo_execute($sql);
                    if(true){
                        $link="index.php?action=dangki_kh"."&id_product=".urlencode($id_product)."&id_user=".urlencode($id_user);
                        header('Location:'.$link);
                    }
                }else{
                    echo '<script> alert("Bạn chưa đăng nhập, Vui lòng đăng nhập để đăng ký") </script>';
                }
                   
                
             }

             include './layout/ctkhoahoc.php';
            break;


            case 'dangki_kh':
                if(isset($_GET['id_user']) && $_GET['id_product']){
                      $sql="select * from register_cource where id_user='".$_GET['id_user']."' and id_product='".$_GET['id_product']."' ORDER BY id_register_coure DESC " ;
                      $load_tt_dkok=pdo_query_one($sql);
                }

                if(isset($_POST['thtt'])){
                     header('location: index.php?action=thongbao');
                }
                //   include './layout/thanhtoan.php';
                break;
                
                case 'khoahoc':
                    $sql="select * from product_kh order by id_product desc";
                    
                    $load=pdo_query($sql);
                    include './layout/khoahoc.php';
                   break;
                   case 'gioithieu':
                    include './layout/gioithieu.php';
                    break;
                case 'thongbao':
                     include './layout/thongbao.php';
                    break;

                    case 'lienhe':
                        include './layout/lienhe.php';
                        break;

                        case 'khachhang':
                            include './layout/khachhang.php';
                            break;

                            case 'suaid_user':
                                if($_GET['id_user']){
                                    $sua_user=suaid_user();
                                 }
                                   include './layout/up_user.php';
                                break;

                                case 'up_user':
                                    if(isset($_POST['up_user'])){
                                        $id_user=$_POST['is_user'];
                                        $user_name = $_POST["user_name"];
                                        $pass = $_POST["pass"];
                                        $name = $_POST["name"];
                                        $email = $_POST["email"];
                                        $id_user=$_POST['id_user'];
                                        update_user_kh($user_name,$email,$pass,$name,$gender,$id_user);

                                        header('location: index.php?action=khachhang');
                                     }
                                       include './layout/up_user.php';
                                    break;

                case 'dangki':
                    if(isset($_POST['dangki'])){
                        $user_name = $_POST["user_name"];
                        $pass = $_POST["pass"];
                        $name = $_POST["name"];
                        $phone = $_POST["phone"];
                        $email = $_POST["email"];
                       $gender=$_POST['gender'];
                       into_user($user_name,$email,$pass,$name,$gender,$phone);
                       if(true){
                        echo '<script>
                        alert("Đăng ký tài khoản thành công");
                        window.onload = function() {
                            setTimeout(function() {
                                window.location.href = "./layout/login.php"; 
                            }, 1000); 
                        };
                    </scrip?>';
                    exit(); 
   }


   }
   include './layout/login.php';
   break;

   case 'thoat':
   session_unset();

   header('location: index.php');
   break;

   }
   } else{
   include './pages/home.php';
   }

//    include './layout/footer.php';
//    ob_end_flush();
//    ?>