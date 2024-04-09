<div class="col-md-9 my-5">
    <div class="row">
        <div class="col-12 my-5">
            <h2>Cập nhập khóa học</h2>
        </div>
    </div>
    <form action="index.php?adm=up_product" enctype="multipart/form-data" method="post">
        <div class="row">
            <?php if(isset($load_id_product)) extract($load_id_product)?>
            <div class="col-4">
                <div class="form-group">
                    <label for="id_product">ID Sản phẩm:</label>
                    <input type="button" class="form-control" id="id_product" name="id_product" required>
                </div>
                <div class="form-group">
                    <label for="name_product">Tên Sản phẩm:</label>
                    <input type="text" class="form-control" value="<?=$name_product?>" id="name_product"
                        name="name_product" required>
                </div>
                <div class="form-group">
                    <label for="price_product">Giá:</label>
                    <input type="text" class="form-control" value="<?=$price_product?>" id="price_product"
                        name="price_product" required>
                </div>
                <div class="form-group">
                    <label for="img">Link hình ảnh:</label>
                    <input type="file" class="form-control" id="img" name="img" required>
                </div>

            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="level">Level:</label>
                    <input type="text" class="form-control" value="<?=$level?>" id="level" name="level" required>
                </div>
                <div class="form-group">
                    <label for="total_lessons">Tổng số bài học:</label>
                    <input type="number" class="form-control" value="<?=$total_lessons?>" id="total_lessons" min="1"
                        name="total_lessons" required>
                </div>
                <div class="form-group">
                    <label for="time_cource">Thời lượng khóa học:</label>
                    <input type="text" class="form-control" value="<?=$time_cource?>" id="time_cource"
                        name="time_cource" required>
                </div>
                <div class="form-group">
                    <label for="time_cource">Khóa học</label>
                    <select class="form-control" name="FK_id_khoahoc" aria-label="Default select example">
                        <option value="<?=$FK_id_khoahoc?>">
                            <?=$FK_id_khoahoc?>
                        </option>';
                    </select>
                </div>

            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="content">Content:</label>
                    <label for="inputPassword5" class="form-label">Nội dung:</label>
                    <textarea class="form-control" required id="largeTextBox" name="content"
                        placeholder="Type your content here..."> <?php if(isset($content)&& ($content!='')) echo htmlspecialchars($content)?></textarea>

                </div>
            </div>
        </div>
        <input type="hidden" name="id_product" value="<?=$id_product?>">
        <div class="row my-3">
            <div class="col-5 m-auto">
                <button type="submit" name="up_product" class="btn btn-primary">Cập nhật</button>
                <a href="index.php?adm=ds_product"> <button type="button" name="ds" class="btn  btn-warning">Danh
                        Sách</button></a>
            </div>

        </div>
    </form>
</div>
</div>