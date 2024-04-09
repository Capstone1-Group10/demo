<div class="col-md-9 my-5">
    <div class="row my-5">
        <h2>Thêm mới Khóa học</h2>
    </div>
    <form action="" method="post">
        <label for="inputPassword5" class="form-label"></label>
        <input type="button" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
            style="background-color:yellowgreen;">
        <label for="inputPassword5" class="form-label"></label>
        <input required type="text" id="inputPassword5" name="name_kh" class="form-control"
            aria-describedby="passwordHelpBlock" placeholder="Nhập danh mục...">
        <div class="row">
            <div class="col pt-3">
                <span><?php  if(isset($tb) && ($tb!='') ) echo $tb?></span>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="add_name_kh">Thêm mới</button>
        <a href="index.php?adm=ds_khoahoc"> <button type="button" name="ds_phong" class="btn btn-warning">Danh
                sách</button></a>
        <button type="submit" class="btn btn-secondary">Nhập lại</button>
    </form>

</div>
</div>