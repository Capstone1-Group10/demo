<div class="col-md-9 my-5">

    <div class="row my-5">
        <div class="col-12 mb-4">
            <h2>Danh sách đăng kí khóa học</h2>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên Khách Hàng</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số Điện Thoại</th>
                        <th scope="col">Tên Khóa Học</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Ngày Đăng Ký</th>

                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset( $load_tt_dk) ) foreach ( $load_tt_dk as $load) {
                       extract($load);
                       $delete_dm="index.php?adm=delete_da_dk&id_da_dk=".$id_register_coure;
                    ?>

                    <tr>
                        <td><?=$id_register_coure?></td>
                        <td><?=$name_kh?></td>
                        <td><?=$email?></td>
                        <td><?=$phone?></td>
                        <td><?=$name_khoahoc?></td>
                        <td><?=$price?></td>
                        <td><?=$date?></td>

                        <td class=" d-flex ">

                            <a href="<?=$delete_dm?>"><button type="submit"
                                    class=" btn btn-danger btn-sm">Xóa</button></a>
                        </td>
                    </tr>

                    <?php }?>
                    <!-- Thêm các dòng khác tương ứng -->
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>