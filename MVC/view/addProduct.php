
<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới Sản Phẩm</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Loại sản phẩm</label>
                    <input type="text" class="form-control" name="category" required>
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="price" required>
                </div>
                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="text" class="form-control" name="amount" required>
                </div>
                <div class="form-group">
                    <label>Ngày Nhập</label>
                    <required type="text" class="form-control" name="date"></required>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a href="./index.php">Cancel</a>
            </form>
        </div>
    </div>
</div>