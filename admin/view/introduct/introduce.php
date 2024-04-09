<div class="col-mb-9 my-5">
    <div class="row my-5">
        <div class="col-12">
            <h2>Thêm mới Chi tiết phòng</h2>
        </div>

    </div>
    <div class="row">
        <div class="col-12  ">
            <form action="process_form.php" method="post">
                <div class="form-group">
                    <label for="tilde_cource">Tilde Cource:</label>
                    <input type="text" class="form-control" id="tilde_cource" name="tilde_cource" required>
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="FK_id_product">FK ID Product:</label>
                    <select class="form-control" name="FK_id_khoahoc" aria-label="Default select example">
                        <?php if(isset($load_product) ) foreach ($load_product as $load) {
                        extract($load);
                    ?>

                        <option value="<?=$id_product?>">
                            <?=$name_product?>
                        </option>';

                        <?php }?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>