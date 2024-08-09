
 <?php
    include 'db.php';
    if($_POST['id']){
      $id = $_POST['id'];
    $sql=  mysqli_query($conn, "SELECT * FROM cau_hoi  where id_cauhoi = '$id'");
    while($row = mysqli_fetch_assoc($sql)) {


    ?>
       <div class="form-group">
        <label class="control-label col-xs-1" for="cauhoi">Câu hỏi</label>
      <div class="col-xs-4">  
              <input type="hidden" class="form-control" name="id" value="<?php echo $row['id_cauhoi'] ?>" required >
        
          <input type="text" class="form-control" id="cauhoi" name="cauhoi" value="<?php echo $row['cau_hoi'] ?> "required >
      </div>
    </div> 
    <br>
    <br>
    <br>
    <br>
    <div class="form-group">
      <label class="control-label col-xs-1" for="da_1">Đáp án A</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" id="da_1" name="da_1" value="<?php echo $row['da_1'] ?> "required >
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
      <label class="control-label col-xs-1" for="da_2">Đáp án B</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" id="da_2" name="da_2" value="<?php echo $row['da_2'] ?> "required >
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
      <label class="control-label col-xs-1" for="da_3">Đáp án C</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" id="da_3" name="da_3" value="<?php echo $row['da_3'] ?> "required >
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
      <label class="control-label col-xs-1" for="da_4">Đáp án D</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" id="da_4" name="da_4" value="<?php echo $row['da_4'] ?> "required >
      </div>
    </div>
    <br>
    <br>
    <br>

    <div class="form-group">
      <label class="control-label col-xs-1" for="da_dung">Đáp án đúng</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" id="da_dung" name="da_dung" value="<?php echo $row['da_dung'] ?> "required >
      </div>
    </div>
    <br>
    <br>
    <br>

    
    

    
   

   


<?php } }
mysqli_close($conn); ?>