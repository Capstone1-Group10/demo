<div class="col-md-9 my-5">
    <div class="row my-5">
        <div class="col-12">
            <h2>Danh sách User</h2>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID User</th>
                <th scope="col">Tên Khách Hàng</th>
                <th scope="col">UserName</th>
                <th scope="col">Password</th>
                <th scope="col">Email</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Vai Trò</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($load_user as $load) {
            extract($load);
            $suaid_user="index.php?adm=sua_user&id_user=".$id_user;
            $delete_dm="index.php?adm=delete_user&id_user=".$id_user;
        ?>
            <tr>

                <th scope="row"><?=$id_user?></th>
                <td><?=$name?></td>
                <td><?=$user_name?></td>
                <td><?=$pass?></td>
                <td><?=$email?></td>
                <td><?=$gender?></td>
                <td><?=$role?></td>
                <td>
                    <a href="<?=$suaid_user?>"> <button type="button" class="btn btn-primary btn-sm">Sửa</button></a>
                    <a href="<?=$delete_dm?>"> <button type="button" class="btn btn-danger btn-sm">Xóa</button></a>
                </td>
            </tr>

            <?php }?>

        </tbody>
    </table>
</div>

</div>
</div>