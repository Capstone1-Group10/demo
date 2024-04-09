<div class="col-md-9 my-5">
    <div class="row my-5">
        <div class="col-6">
            <h2>Danh sách Khóa học</h2>
        </div>
        <div class="col-6">
            <a href="index.php?adm=add_kh"> <button type="submit" class="btn btn-primary" name="add_name_kh">Thêm
                    mới</button></a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID Khóa học</th>
                <th scope="col">Tên Khóa học</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>

            <?php              foreach ($load_kh as $dm_phong) {
                extract($dm_phong);
                $suaid_menu="index.php?adm=sua_khoahoc&id_menu=".$id_khoahoc;
                $delete_dm="index.php?adm=delete_khoahoc&id_menu=".$id_khoahoc;
                 ?>
            <tr>
                <th scope="row"><?=$id_khoahoc?></th>
                <td><?=$name_khoahoc?></td>
                <td>
                    <a href="<?=$suaid_menu?>"> <button type="submit" class="btn btn-primary btn-sm">Sửa</button></a>
                    <a href="<?=$delete_dm?>"><button type="submit" class="btn btn-danger btn-sm">Xóa</button></a>
                </td>
            </tr>

            <?php }?>

            <!-- Thêm hàng cho các khóa học khác nếu cần -->
        </tbody>
    </table>
</div>

</div>
</div>