<?php
$sql = "SELECT * FROM feedback ";
$query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2 class="col d-flex justify-content-center">Danh sách ý kiến phản hồi của sinh viên</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên Học Sinh</th>
                        <th>Gmail</th>
                        <th>Số Điện Thoại</th>
                        <th>Phản Hồi</th>
                        <th>Ngày Tạo</th>
                        <th>Trạng Thái</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;

                    while ($row = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['sdt']; ?></td>
                        <td><?php echo $row['feedback']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['status']; ?></td>

                    </tr>

                    <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=them">Thêm Phản Hồi</a>
        </div>
    </div>
</div>