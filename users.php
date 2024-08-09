<?php include 'auth.php' ?>
  <script>
      $(document).ready(function(){

      $(document).on('click', '#getUser', function(e){
    
      e.preventDefault();
    
      var uid = $(this).data('id');      
  
      $.ajax({
            url: 'view_user.php',
            type: 'POST',
            data: 'id='+uid,
            beforeSend:function()
  {
  $("#e_user").html('Vui lòng chờ hiển thị thông tin ..');
  },
  success:function(data)
  {
    $("#e_user").html(data);
  },
      })

      });
  })
    </script>
     <?php include 'newaccount.php' ?>
       <div class="col-md-8">   
              <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Danh sách người dùng</h3>
        </div> 
        <div class="panel-body">  

  <table id="students" class="table table-hover table-bordered">
    <thead>
      <tr id="heads">
        <th style="width:20%">Họ và tên</th>
        <th style="width:10%">User</th>
        <th style="width:10%">Vai trò</th>
        <th style="width:10%"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';
    $sql=  mysqli_query($conn, "SELECT * FROM user ");
    while($row = mysqli_fetch_assoc($sql)) {


    ?>
    <form method="post" action="">
      <tr>
        <td><?php echo $row['LASTNAME']." ".$row['FIRSTNAME'] ?></td>
        <td><?php echo $row['USER'] ?></td>
        <td><?php echo $row['USER_TYPE'] ?></td>
        <td><a data-toggle="modal" data-target="#edit_user" data-id="<?php echo $row['USER_ID'] ?>" id="getUser"><i class="fa fa-pencil-square" aria-hidden="true"></i> edit</a></td>
      </tr>
      </form>
      <?php
    } mysqli_close($conn);
      ?>
      
    </tbody>
  </table>
</div>
</div>
</div>


<div class="col-md-4">
        
  <div class="container frm-new">
      <div class="row main">
        <div class="main-login main-center">
        <h3>Thêm người dùng mới</h3>
          <form class="" method="post">
            
            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Lastname </label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="text" class="form-control" style="text-transform: capitalize;" id="lname" name="lname" placeholder="Họ" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Firstname</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="text" class="form-control" style="text-transform: capitalize;" id="fname" name="fname" placeholder="Tên" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">User</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="text" class="form-control" id="fname" name="user" placeholder="Enter User" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="password" class="form-control" id="fname" name="pwd" placeholder="Enter Password" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Vai trò</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <select class="form-control" name="type" id="sel1" required>
        <option></option>
          <option value="ADMINISTRATOR">ADMINISTRATOR</option>
          <option value="STAFF">STAFF</option>
          <option value="TEACHER">TEACHER</option>
          <option value="STUDENT">STUDENT</option>

          
        </select>                
      </div>
              </div>
            </div>
            



            <div class="form-group ">
              <button class="btn btn-info">Thêm</button>
              <input type="reset" class="btn btn-info " id="reset" name="reset" value="Hủy bỏ">

            </div>
            
          </form>
        </div>
      </div>

    </div>
</div>

    <div class="modal fade" id="edit_user" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Quản lí người dùng</h4>
        </div>
        <div class="modal-body"> 
                  <form class="form-group" method="POST" action="edit_user.php"> 
                      <div class="container">                 
                     <div id="e_user">
                      
                      </div>
                     </div>
                  </div> 
                                  
                  <div class="modal-footer">
                   
                  <button type="submit" class="btn btn-default">Lưu</button>
                  </form>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>  
                  </div> 
    </div>
        </div>
        </div>
      
 <script type="text/javascript">
        $(function() {
            $("#students").dataTable(
        { "aaSorting": [[ 0, "asc" ]] }
      );
        });
    </script>
