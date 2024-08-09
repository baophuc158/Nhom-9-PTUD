<?php include 'auth.php' ?>
  <script>
      $(document).ready(function(){

      $(document).on('click', '#getcauhoi', function(e){
    
      e.preventDefault();
    
      var uid = $(this).data('id');      
  
      $.ajax({
            url: 'view_cauhoi.php',
            type: 'POST',
            data: 'id='+uid,
            beforeSend:function()
  {
  $("#e_cauhoi").html('Vui lòng chờ hiển thị thông tin ..');
  },
  success:function(data)
  {
    $("#e_cauhoi").html(data);
  },
      })

      });
  })
    </script>
     <?php include 'newcauhoi.php' ?>
       <div class="col-md-8">   
              <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Danh sách câu hỏi</h3>
        </div> 
        <div class="panel-body">  

  <table id="students" class="table table-hover table-bordered">
    <thead>
      <tr id="heads">
        <th style="width:20%">Câu hỏi</th>
        <th style="width:10%">Đáp án A</th>
        <th style="width:10%">Đáp án B</th>
        <th style="width:10%">Đáp án C</th>
        <th style="width:10%">Đáp án D</th>
        <th style="width:10%"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';
    $sql=  mysqli_query($conn, "SELECT * FROM cau_hoi ");
    while($row = mysqli_fetch_assoc($sql)) {


    ?>
    <form method="post" action="">
      <tr>
        <td><?php echo $row['cau_hoi']." ".$row['FIRSTNAME'] ?></td>
        <td><?php echo $row['da_1'] ?></td>
        <td><?php echo $row['da_2'] ?></td>
        <td><?php echo $row['da_3'] ?></td>
        <td><?php echo $row['da_4'] ?></td>
        <td><a data-toggle="modal" data-target="#edit_cauhoi" data-id="<?php echo $row['id_cauhoi'] ?>" id="getcauhoi"><i class="fa fa-pencil-square" aria-hidden="true"></i> edit</a></td>
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

<!----------------------------Ra ngân hàng câu hỏi------------------------>
<div class="col-md-4">
        
  <div class="container frm-new">
      <div class="row main">
        <div class="main-login main-center">
        <h3>Ra ngân hàng câu hỏi</h3>
          <form class="" method="post">
            
            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Câu hỏi </label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <textarea class="form-control" name="cauhoi" id="cauhoi" cols="30" rows="10" require>Câu hỏi</textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Đáp án A</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="text" class="form-control" style="text-transform: capitalize;" id="da_1" name="da_1" placeholder="Đáp án A" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Đáp án B</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="text" class="form-control" id="da_2" name="da_2" placeholder="Đáp án B" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Đáp án C</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="text" class="form-control" id="da_3" name="da_3" placeholder="Đáp án C" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Đáp án D</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="text" class="form-control" id="da_4" name="da_4" placeholder="Đáp án D" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Đáp án đúng</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="text" class="form-control" id="da_d" name="da_d" placeholder="Đáp án đúng" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Chọn khối</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <select class="form-control" name="type" id="sel1" required>
        <option></option>
          <option value="1">Khối 6</option>
          <option value="2">Khối 7</option>
          <option value="3">Khối 8</option>
          <option value="4">Khối 9</option>

          
        </select>                
      </div>
              </div>
            </div>
            

          
            



            <div class="form-group ">
              <button style="margin-right: 10px;" class="btn btn-info">Thêm</button>
              <input style="margin-top: 0;" type="reset" class="btn btn-info " id="reset" name="reset" value="Hủy bỏ">

            </div>
            
          </form>
        </div>
      </div>

    </div>
</div>
<div class="col-md-8"><a href="admin.php?page=list_file" class="btn btn-primary btn-block">Thêm file

</a></div>



      <!---------------------------- Modal EDIT câu hỏi------------------------------->
  <div class="modal fade" id="edit_cauhoi" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Chỉnh sửa ngân hàng câu hỏi</h4>
        </div>
        <div class="modal-body"> 
                  <form class="form-group" method="POST" action="edit_cauhoi.php"> 
                      <div class="container">                 
                     <div id="e_cauhoi">
                      
                      </div>
                     </div>
        </div> 
                                  
                  <div class="modal-footer">
                   
                  <button type="submit" class="btn btn-default btn-success">Lưu</button>
                  </form>
                      <button type="button" class="btn btn-default btn-success" data-dismiss="modal">Thoát</button>  
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
