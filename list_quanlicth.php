<script>
      $(document).ready(function(){

      $(document).on('click', '#getcth', function(e){
    
      e.preventDefault();
    
      var uid = $(this).data('id');      
  
      $.ajax({
            url: 'view_cth.php',
            type: 'POST',
            data: 'id='+uid,
            beforeSend:function()
  {
  $("#e_cth").html('Vui lòng chờ hiển thị thông tin ..');
  },
  success:function(data)
  {
    $("#e_cth").html(data);
  },
      })

      });
  })
    </script>

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
			height:14in;
			overflow:hidden;
			margin:auto;
			border:2px solid #000;
			background-color:white;
		}
         </style>

          <h1 class="page-header">Danh sách chương trình học các khối      <button type="text" class="btn btn-info" onclick="printContent('stud')" >
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
		<b><p>Danh sách chương trình học các khối</p></b>
		</td>
		<td style="width:20%;">
			<br>
		</td>
	</tr>
</table>
  <table id="cth" class="table table-bordered" >
    <thead>
      <tr id="heads">
        <td style="width:5%; font-weight: bold;">Khối</th>
        <td style="width:5%; text-align: center; font-weight: bold;">Tên môn</th>
        <td style="width:5%; text-align: center; font-weight: bold;"> Điều chỉnh</th>

      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';
    $sql=  mysqli_query($conn, "SELECT * FROM chuongtrinhhoc ");
    while($row = mysqli_fetch_assoc($sql)) {


    ?>
      <tr>

        <td><?php echo $row['khoi']?></td>
        <td ><?php echo $row['tenmon'] ?></td>
        <td style="font-size:25px;"><a data-toggle="modal" data-target="#edit_cth" data-id="<?php echo $row['CTH_ID'] ?>" id="getcth">
        <i class="fa fa-pencil-square" aria-hidden="true"></i> edit</a></td>

     
      </tr>
      <?php
    
    } mysqli_close($conn);
      ?>
      
    </tbody>
  </table>
</div>
</div>
</div>         
 </div>


<!---------------------MODAL----------->
<div class="modal fade" id="edit_cth" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Quản lí chương trình học</h4>
        </div>
        <div class="modal-body"> 
                  <form class="form-group" method="POST" action="edit_cth.php"> 
                      <div class="container">                 
                    <div id="e_cth">
                      
                    </div>
                     </div>
        </div> 
                                  
                  <div class="modal-footer">
                   
                  <button type="submit" class="btn btn-default btn-success">Lưu</button>
                  </form>
                      <button type="button" class="btn btn-default btn-success" data-dismiss="modal">Thoát</button>  
                  </div> 
    </div>


    <script>
function Search() {
  var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("Search");
    filter = input.value.toUpperCase();
    table = document.getElementById("cth");
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
