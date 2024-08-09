
 <?php
    include 'db.php';
    if($_POST['id']){
      $id = $_POST['id'];
    $sql=  mysqli_query($conn, "SELECT * FROM chuongtrinhhoc  where CTH_ID = '$id'");
    while($row = mysqli_fetch_assoc($sql)) {


    ?>
       <div class="form-group">
        <label class="control-label col-sm-1" for="khoi">Tên khối</label>
      <div class="col-sm-3">  
              <input type="hidden" class="form-control" name="id" value="<?php echo $row['CTH_ID'] ?>" required >
        
          <input type="text" class="form-control" id="khoi" name="khoi" value="<?php echo $row['khoi'] ?> "required >
      </div>
    </div> 
    <br>
    <br>
    <br>
    <div class="form-group">
      <label class="control-label col-sm-1" for="tenmon">Tên môn:</label>
      <div class="col-sm-3">
          <textarea class="form-control" name="tenmon" id="tenmon" cols="30" rows="10" required ><?php echo $row['tenmon'] ?></textarea>         
      </div>
    </div>
    

    
   

   


<?php } }
mysqli_close($conn); ?>