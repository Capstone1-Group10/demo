 <style>
.dthu {
    padding-left: 50px;
    line-height: 50px;
    text-align: center;
    color: black;
    font-size: 20px;
    font-weight: 700;
}
 </style>

 <div class="col-md-9 my-5">
     <?php 


                            
$sql="Select khoahoc.id_khoahoc as id_khoahoc, khoahoc.name_khoahoc as name_khoahoc , sum(register_cource.price) as sum ";
$sql.="from register_cource left join khoahoc on khoahoc.id_khoahoc=register_cource.id_khoahocc ";
$sql.="group by khoahoc.id_khoahoc asc ";

 $result=pdo_query($sql);
 
?>
     <div class="container my-5">
         <h2>Bảng Thống Kê Danh Thu</h2>
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <th scope="col">Số thứ tự</th>
                     <th scope="col">Tên Khóa Học</th>
                     <th scope="col">Giá Tiền (VNĐ)</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $tong=0; foreach ($result as $load) {
                    
                 extract($load);
                    $tong+=$sum;
                   ?>
                 <tr>
                     <th scope="row"><?=$id_khoahoc?></th>
                     <td><?=$name_khoahoc?></td>
                     <td><?=number_format($sum,0,'.',',')?></td>

                 </tr>
                 <?php }                    ?>
                 <!-- <tr>
                    <th scope="row">2</th>
                    <td>Học Machine Learning</td>
                    <td>$149</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Tiếng Anh Giao Tiếp</td>
                    <td>$79</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Digital Marketing</td>
                    <td>$129</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Photoshop Cơ Bản</td>
                    <td>$89</td>
                </tr> -->
             </tbody>
         </table>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-5 m-auto">
                 <p style="width:100%; height:50px; background-color: orange; ">
                     <span class="dthu">Tổng danh thu :
                         <?=number_format($tong,0,'.',',')?> VNĐ</span>
                 </p>
             </div>
         </div>
     </div>

 </div>
 </div>