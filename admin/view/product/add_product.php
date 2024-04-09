<div class="col-md-9 my-5">
    <div class="row">
        <div class="col-12 my-5">
            <h2>Thêm mới khóa học</h2>
        </div>
    </div>
    <form action="" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="id_product">ID Sản phẩm:</label>
                    <input type="button" class="form-control" id="id_product" name="id_product" required>
                </div>
                <div class="form-group">
                    <label for="name_product">Tên Sản phẩm:</label>
                    <input type="text" class="form-control" id="name_product" name="name_product" required>
                </div>
                <div class="form-group">
                    <label for="price_product">Giá:</label>
                    <input type="text" class="form-control" id="price_product" name="price_product" required>
                </div>
                <div class="form-group">
                    <label for="img">Link hình ảnh:</label>
                    <input type="file" class="form-control" id="img" name="img" required>
                </div>

            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="level">Level:</label>
                    <input type="text" class="form-control" id="level" name="level" required>
                </div>
                <div class="form-group">
                    <label for="total_lessons">Tổng số bài học:</label>
                    <input type="number" class="form-control" id="total_lessons" min="1" name="total_lessons" required>
                </div>
                <div class="form-group">
                    <label for="time_cource">Thời lượng khóa học:</label>
                    <input type="text" class="form-control" id="time_cource" name="time_cource" required>
                </div>
                <div class="form-group">
                    <label for="time_cource">Khóa học</label>
                    <select class="form-control" name="FK_id_khoahoc" aria-label="Default select example">
                        <?php
                            $load_dm_ud=load_all_dm_phong();
                foreach ( $load_dm_ud as $hello) {
                    extract($hello);
                    $tr='<option  value="'.$id_khoahoc.'">'.$name_khoahoc.'</option>';
                    echo $tr;
                }   
                ?> </select>
                </div>

            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-5 m-auto">
                <button type="submit" name="add_product" class="btn btn-primary">Thêm Sản phẩm</button>
                <a href="index.php?adm=ds_product"> <button type="button" name="ds" class="btn  btn-warning">Danh
                        Sách</button></a>
            </div>

        </div>
    </form>
</div>
</div>