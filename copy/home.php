<?php  
//index.php
$connect = mysqli_connect("localhost", "root", "", "bossnanny");
$query = "SELECT * FROM home ORDER BY id DESC";
$result = mysqli_query($connect, $query);
 ?>  
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Tutorial Popup Input Data Dengan PHP | www.sistemit.com </title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>  
 <body>  
  
  <div class="container" style="width:700px;"> 
   <h3 align="center">Input Data Dengan Menggunakan Popup Modal Bootstrap</h3>  
   <br />  
   <div class="table-responsive">
    <div align="right">
     <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Tambah Data Karyawan</button>
    </div>
    <br />
    <div id="employee_table">
     <table class="table table-bordered">
      <tr>
       <th width="55%">Nama Karyawan</th>  
       <th width="15%">Lihat Detail</th>

      </tr>
      <?php
      while($row = mysqli_fetch_array($result))
      {
      ?>
      <tr>
       <td><?php echo $row["nama"]; ?></td>
       <td><input type="button" name="view" value="Lihat Detail" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
      </tr>
      <?php
      }
      ?>
     </table>
    </div>
   </div> 
  </div>
 </body>  
</html>  
 
<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Masuk</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
     <label>Nama Perawat</label>
     <input type="text" name="nama" id="nama" class="form-control" />
     <br />
     <label>Jenis Layanan</label>
     <select name="perawat" id="perawat" class="form-control">
      <option value="ART">Asisten Rumah Tangga</option>  
      <option value="Nanny">Nanny</option>
      <option value="Perawat_Lansia">Perawat Lansia</option>
     </select>
     <br />  
     <label>Jenis Kelamin</label>
     <select name="gender" id="gender" class="form-control">
      <option value="Pria">Laki-Laki</option>  
      <option value="Wanita">Perempuan</option>
     </select>
     <br />  
     <label>Agama</label>
     <select name="agama" id="agama" class="form-control">
      <option value="Islam">Islam</option>  
      <option value="Kristen">Kristen</option>
      <option value="Katolik">Katolik</option>  
      <option value="Hindu">Hindu</option>  
      <option value="Buddha">Buddha</option>
      <option value="Kong_Hu_Cu">Kong Hu Cu</option>
     </select>
     <br />  
     <label>Tinggi Badan</label>
     <input type="number" name="tinggi" id="Tinggi" class="form-control" min="100" max="200"/>
     <br />
     <label>Berat Badan</label>
     <input type="number" name="berat" id="Berat" class="form-control" min="30" max="100" />
     <br />
     <label>Alamat Karyawan</label>
     <textarea name="alamat" id="alamat" class="form-control"></textarea>
     <br />
     <label>Lokasi Penempatan</label>
     <select name="lokasi" id="lokasi" class="form-control">
      <option value="Banten">Banten</option>  
      <option value="Jabodetabek">JABODETABEK</option>
      <option value="Jawa_Barat">Jawa Barat</option>  
      <option value="Jawa_Tengah">Jawa Tengah</option>  
      <option value="Jawa_Timur">Jawa Timur</option>
      <option value="Bali">Bali</option>
      <option value="Luar_Jawa_Bali">Luar Jawa-Bali</option>
     </select>
     <br /> 
     <label>Foto</label>
     <<img src="img/<?=$row["img"]?>" width="50%" alt="">
        <input type="file" name="img" class="form-control">
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
 
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
 
<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Detail Data Karyawan</h4>
   </div>
   <div class="modal-body" id="detail_karyawan">
     
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
 
 
<div id="editModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Edit Data Karyawan</h4>
   </div>
   <div class="modal-body" id="form_edit">
     
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
 
<script>  
$(document).ready(function(){
// Begin Aksi Insert
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#nama').val() == "")  
  {  
   alert("Mohon Isi Nama ");  
  }  
  else if($('#alamat').val() == '')  
  {  
   alert("Mohon Isi Alamat");  
  }  
  
  else 
  {  
   $.ajax({  
    url:"insert.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data);  
    }  
   });  
  }  
 });
//END Aksi Insert
 
//Begin Tampil Detail Karyawan
 $(document).on('click', '.view_data', function(){
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#detail_karyawan').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
//End Tampil Detail Karyawan
  
//Begin Tampil Form Edit
  $(document).on('click', '.edit_data', function(){
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"edit.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#form_edit').html(data);
    $('#editModal').modal('show');
   }
  });
 });
//End Tampil Form Edit
 
//Begin Aksi Delete Data
 $(document).on('click', '.hapus_data', function(){
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"delete.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
   $('#employee_table').html(data);  
   }
  });
 });
}); 
//End Aksi Delete Data
 </script>