<div class="col-md-9 my-5">
    <div class="row mt-3">
        <div class="col-12">
            <h2>Cập nhật user</h2>
        </div>
    </div>
    <div class="row ">
        <div class="col-8 m-auto">
            <form id="registrationForm" method="post" action="index.php?adm=up_user">
                <?php if(is_array( $load_user_id)) extract( $load_user_id)?>
                <div class="form-group">
                    <label for="user_name">Username:</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" value="<?=$user_name?>"
                        required>
                </div>
                <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="password" class="form-control" value="<?=$pass?>" id="pass" name="pass" required>
                </div>
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" value="<?=$name?>" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" value="<?=$email?>" name="email" required>
                </div>
                <div class="form-group">
                    <label for="role">Giới tính:</label>
                    <select class="form-control" id="role" name="gender" required>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </div>
                <input type="hidden" name="id_user" value="<?=$id_user?>">
                <button type="submit" name="up_user" class="btn btn-primary btn-block">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
</div>