
 <ul class="nav navbar-nav side-nav">
 <li>
<a href="admin.php?page=home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
</li>
<li>
<a id=demo1 href="javascript:void(0)" data-toggle="collapse" data-target="#masterlistCollapse"><i class="fa fa-fw fa-files-o"></i> Danh sách chính <i class="fa fa-fw fa-caret-down"></i></a>
<ul id="masterlistCollapse" class="collapse">
        <li>
            <a href="#" data-toggle="modal" data-target="#s_report"><i class="fa fa-fw fa-files-o"></i> Danh sách học sinh</a>
        </li>
        <li>
            <a href="#" data-toggle="modal" data-target="#subjects"><i class="fa fa-fw fa-book"></i> Chấm điểm bài tập</a>
        </li>
        <li>
            <a href="#" data-toggle="modal" data-target="#kiemtra"><i class="fa fa-fw fa-pencil fa-fw"></i> Chấm điểm bài kiểm tra</a>
        </li>
</ul>
</li>

<li>
    <a href="javascript:void(0)" data-toggle="collapse" data-target="#reportsCollapse"><i class="glyphicon glyphicon-education"></i> Tạo đề       <i class="fa fa-fw fa-caret-down"></i></a>
    <ul id="reportsCollapse" class="collapse">
        <li>
            <a href="admin.php?page=list_cauhoi"><i class="glyphicon glyphicon-question-sign"></i> Ra ngân hàng câu hỏi</a>
        </li>
        
    </ul>
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

                