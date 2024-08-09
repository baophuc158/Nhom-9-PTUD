
 <ul class="nav navbar-nav side-nav">
 <li>
<a href="admin.php?page=home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
</li>
<li>
<a id=demo1 href="javascript:void(0)" data-toggle="collapse" data-target="#masterlistCollapse"><i class="fa fa-fw fa-files-o"></i> Danh sách chính <i class="fa fa-fw fa-caret-down"></i></a>
<ul id="masterlistCollapse" class="collapse">
        <li>
            <a href="admin.php?page=list_quanlicth"><i class="fa fa-book fa-fw"></i> Chương trình học các khối</a>
        </li>
        <li>
            <a href="admin.php?page=list_gv"><i class="glyphicon glyphicon-briefcase"></i> Quản lí danh sách giáo viên</a>
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

                