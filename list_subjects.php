
<?php session_start(); ?>
     <style type="text/css">
         	@media print {  
		@page {
			size:8.5in 14in;
			max-width:8.5in;
		}
		}
		#stud{
			width:8.5in;
			height:104in;
			overflow:hidden;
			margin:auto;
			border:2px solid #000;
			background-color:white;
		}
         </style>

          <h1 class="page-header">Danh sách bài tập      <button type="text" class="btn btn-info" onclick="printContent('stud')" >
    <i class="glyphicon glyphicon-print"></i>PRINT</button>
</h1>

            
          <div class="container">
         
          <div class="row">
          	<div class="col-sm-3">
        <div class="input-group">
    </div>
    </div>

		<br> <br>
       <div class="col-md-8" id="stud" style="padding:50px">   
       <div style="margin-left:.5in;margin-right:.5in;margin-top:.1in;margin-bottom:.1in;line-height:1mm;">
       <table>
	<tr>
		<td style="width:20%;">
		
		</td>
		<td style="width:800px;font-size:12px;line-height:1mm;text-align:center" >
		<b><p>Danh sách bài tập</p></b>
		<i style="font-size:12px;";><p><?php echo $_POST['tenmon'] ?> </p></i>
		</td>
		<td style="width:20%;">
			<br>
		</td>
	</tr>
</table>
  <table id="students" class="table table-bordered" >
    <thead>
      <tr id="heads">
        <td style="width:30%">Họ và tên</th>
        <td style="width:10%">Lớp</th>
        <td style="width:10%">Bài làm</th>
        <td style="width:30%">Câu hỏi</th>
        <td style="width:10%">Điểm</th>
        <td style="width:10%"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';
    $tenmon = $_POST['tenmon'];
    $user = $_SESSION['ID'];
    mysqli_query($conn, "INSERT into history_log (transaction,user_id,date_added) 
    VALUES ('printed danh sách bài tập môn $tenmon','$user',NOW() )");
    $sql=  mysqli_query($conn, "SELECT * FROM hocsinh left join baitaptl on hocsinh.ma_bt = baitaptl.BAITAPTL_ID WHERE monhoc = '$tenmon'");
     while($row = mysqli_fetch_assoc($sql)) {
        $sql2=  mysqli_query($conn, "SELECT * FROM bailambttl left join hocsinh on bailambttl.mahs=hocsinh.STUDENT_ID WHERE STUDENT_ID = '".$row['STUDENT_ID']."'");
            while($row2 = mysqli_fetch_assoc($sql2)) {

    ?>
    <form method="post" action="update_diem.php">
      <tr>
      <input type="hidden" name="id" value="<?php echo $row2['BAILAMBT_ID'] ?>">
        <td><?php echo $row['LASTNAME']?></td>
        <td><?php echo $row['CLASS'] ?></td>
        <td><?php echo $row2['bailam'] ?></td>
        <td><?php echo $row['cauhoi'] ?></td>
        <td><input  name="diemm" type="text" style="border:0px" value="<?php echo $row2['diem'] ?>"></td>
        <td><center><button type="submit" style="border:0px;background:white" >
        <i class="fa fa-pencil-square" aria-hidden="true"></i> Nhập điểm</button></center></td>
      </tr>
    </form>
      <?php
    }
    } mysqli_close($conn);
      ?>
      
    </tbody>
  </table>
</div>
</div>
</div>         
 </div>

    <script>
function Search() {
  var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("Search");
    filter = input.value.toUpperCase();
    table = document.getElementById("students");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
             if (tr[i].id != 'heads'){tr[i].style.display = "none";}
        }
    }
}
</script>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
