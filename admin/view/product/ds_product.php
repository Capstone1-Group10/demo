<div class="col-md-9 my-5">
    <div class="row my-5">
        <div class="col-6">
            <h2>Danh sách khóa học</h2>
        </div>
        <div class="col-6">
            <a href="index.php?adm=add_product"> <button type="submit" name="add_product" class="btn btn-primary">Thêm
                    Sản phẩm</button></a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID </th>
                <th>Tên K_Học</th>
                <th>Tiền K_học</th>
                <th>Hình ảnh</th>
                <th>Level</th>
                <th>Tổng số couce</th>
                <th>Thời lượng K_học</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>

            <?php 
               $load_product_pro=load_product();
               foreach ( $load_product_pro as $load) {
                    $img_path="../uploads/";
                  extract($load) ; 
                  $imgh=$img_path.$img;  
                  $suaid_product="index.php?adm=sua_product&id_product=".$id_product;
                  $delete_dm="index.php?adm=delete_product&id_product=".$id_product;         
            ?>
            <tr>

                <td><?=$id_product?></td>
                <td><?=$name_product?></td>
                <td><?=$price_product?></td>
                <td><img style="width:100px; height:50px" src="<?=$imgh?>" alt=""></td>
                <td><?=$level?></td>
                <td>Tổng <?=$total_lessons?> bài học</td>
                <td><?=$time_cource?></td>
                <td class=" d-flex justify-content-between ">
                    <a href="<?=$suaid_product?>"> <button type="button" class="btn btn-primary btn-sm">Sửa</button></a>
                    <a href="<?=$delete_dm?>"> <button type="button" class="btn btn-danger btn-sm">Xóa</button></a>
                </td>
            </tr>

            <?php }?>
            <!-- Thêm hàng cho các sản phẩm khác nếu cần -->
        </tbody>
    </table>

</div>
</div>