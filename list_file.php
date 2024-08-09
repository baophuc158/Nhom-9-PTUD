<div class="col-sm-4">
<style>
    body button {
        color: black;
        margin-top: 5px;
    }
    
</style>
<?php
include ('class/cauhoi.php');
?>
<h2>Thêm file</h2>
<span class="title">Tải File Mẫu: <a href="file/mau-them-danh-sach-cau-hoi.xlsx">TẠI ĐÂY</a></span><br />
<span class="title" style="color: red;">Lưu Ý: <br />1, Không sửa file mẫu tránh gây lỗi khi nhập dữ liệu.</span><br><br>

<form action="" method="POST" enctype="multipart/form-data">      
        <input class="btn btn-block bg-info" style="color:black; font-weight:bold ;" type="file" name="file" id="" require><br>

        <button type="submit" class="btn btn-block btn-info" name="btngui";>Gửi</button>
</form>

</div>