<div class="row">
    <div class="col-2">
        <a href="./index.php?page=add" class="btn btn-success btn-xl">Thêm mới</a>
    </div>
    <div class="col-6">
        <form class="form-inline my-2 my-lg-0" method="get">
            <input class="form-control mr-sm-2" type="text" name="key">
            <a href="./index.php?page=search" class="btn btn-danger btn-sm">search</a>
        </form>
    </div>
</div>
<h2>Danh sách khách hàng</h2>

<br>
<br>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Tên hàng</th>
        <th>Loại hàng</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Ngày Tạo</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products

    as $key => $product): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $product->name ?></td>
        <td><?php echo $product->category ?></td>
        <td><?php echo $product->price ?></td>
        <td><?php echo $product->quantity ?></td>
        <td><a href="./index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Chỉnh sửa</a>
            <a href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-danger btn-sm">Xóa</a></td>
        <?php endforeach; ?>
    </tbody>
</table>