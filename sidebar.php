
 <ul class="nav navbar-nav side-nav">
 <li>
<a href="admin.php?page=home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
</li>
<li>
    <a href="javascript:void(0)" data-toggle="collapse" data-target="#recordsCollapse"><i class="fa fa-fw fa-file"></i> Hồ sơ       <i class="fa fa-fw fa-caret-down"></i></a>
    <ul class="collapse" id="recordsCollapse">
        <li>
            <a href="admin.php?page=records"><i class="fa fa-fw fa-files-o"></i> Hồ sơ học tập </a>
        </li>
        <li>
            <a href="admin.php?page=candidates&sy=<?php echo $school_year ?>"><i class="fa fa-fw fa-users"></i> Thúc đẩy ứng cử viên </a>
        </li>
        <li>
            <a href="admin.php?page=candidates_list&sy=<?php echo $school_year ?>"><i class="fa fa-fw fa-file-o"></i> Danh sách ứng viên </a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0)" data-toggle="collapse" data-target="#reportsCollapse"><i class="fa fa-fw fa-file"></i> Báo cáo       <i class="fa fa-fw fa-caret-down"></i></a>
    <ul id="reportsCollapse" class="collapse">
        <li>
            <a href="admin.php?page=report"><i class="fa fa-fw fa-files-o"></i> Mẫu 137</a>
        </li>
        <li>
            <a href="#" data-toggle="modal" data-target="#s_report"><i class="fa fa-fw fa-files-o"></i> Danh sách sinh viên</a>
        </li>
        <li>
            <a href="admin.php?page=candidates_report&school_year=<?php echo $school_year ?>" ><i class="fa fa-fw fa-file-text-o"></i> Báo cáo ứng viên</a>
        </li>
    </ul>
</li>
<li>
    <a href="admin.php?page=users"><i class="fa fa-users"></i> Người dùng</a>
</li>
<li>
    <a href="javascript:void(0)" data-toggle="collapse" data-target="#maintenanceCollapse"><i class="fa fa-fw fa-gears"></i> Bảo trì       <i class="fa fa-fw fa-caret-down"></i></a>
    <ul id="maintenanceCollapse" class="collapse">
        <li>
            <a href="admin.php?page=school_year"><i class="fa fa-fw fa-calendar"></i> Năm học</a>
        </li>
        <li>
            <a href="admin.php?page=grade"><i class="fa fa-fw fa-file-text-o"></i> Danh sách điểm</a>
        </li>
    </ul>
</li>

<li>
    <a href="admin.php?page=capquyen"><i class="fa fa-user"></i> Cấp quyền cho quản trị trường</a>
</li>



</ul>
<script>
    $('.side-nav li a').each(function(){
        if((location.href).includes($(this).attr('href')) == true){
            $(this).closest('li').addClass("active")
            console.log($(this).closest('li').parent('ul').attr('id'))
            if($(this).closest('li').parent('ul').hasClass('collapse') == true){
                $('[data-target="#'+$(this).closest('li').parent('ul').attr('id')+'"]').click()
            }
        }
    })
</script>

                