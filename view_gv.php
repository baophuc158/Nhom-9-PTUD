
 <?php
    include 'db.php';
    if($_POST['id']){
      $id = $_POST['id'];
    $sql=  mysqli_query($conn, "SELECT * FROM giaovien  where GV_ID = '$id'");
    while($row = mysqli_fetch_assoc($sql)) {


    ?>
       <div class="form-group">
        <label class="control-label col-xs-1" for="tengv">Tên giáo viên</label>
      <div class="col-xs-4">  
              <input type="hidden" class="form-control" name="id" value="<?php echo $row['GV_ID'] ?>" required >
        
          <input type="text" class="form-control" id="tengv" name="tengv" value="<?php echo $row['tengv'] ?> "required >
      </div>
    </div> 
    <br>
    <br>
    <br>
    <br>
    <div class="form-group">
      <label class="control-label col-xs-1" for="sdt">Số điện thoại</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" id="sdt" name="sdt" value="<?php echo $row['sdt'] ?> "required >
      </div>
    </div>
    <br>
    <br>
    <br>

    <div class="form-group">
      <label class="control-label col-xs-1" for="email">Email</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email'] ?> "required >
      </div>
    </div>
    <br>
    <br>
    <br>

    <div class="form-group">
      <label class="control-label col-xs-1" for="lpt">Lớp phụ trách</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" id="lpt" name="lpt" value="<?php echo $row['lopphutrach'] ?> "required >
      </div>
    </div>
    <br>
    <br>
    <br>
    

    
   

   


<?php } }
mysqli_close($conn); ?>