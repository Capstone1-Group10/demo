<div class="col-md-9">

    <?php  if(is_array($load_kh_id)) extract($load_kh_id) ?>
    <form action="index.php?adm=up_khoahoc" method="post">
        <label for="inputPassword5" class="form-label"></label>
        <input type="button" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
            style="background-color:yellowgreen;">
        <label for="inputPassword5" class="form-label"></label>
        <input required type="text" id="inputPassword5" name="name_khoahoc" class="form-control"
            value="<?=$name_khoahoc?>" aria-describedby="passwordHelpBlock" placeholder="Nhập danh mục...">
        <div class="row">
            <div class="col pt-3">
                <span><?php  if(isset($tb) && ($tb!='') ) echo $tb?></span>
            </div>
        </div>
        <br>
        <input type="hidden" name="id_khoahoc" value="<?=$id_khoahoc?>">
        <button type="submit" class="btn btn-primary" name="up_khoahoc">Cập nhật</button>
        <a href="index.php?adm=ds_khoahoc"> <button type="button" name="ds_phong" class="btn btn-warning">Danh
                sách</button></a>

    </form>

</div>
</div>