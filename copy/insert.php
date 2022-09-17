<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bossnanny");
if(!empty($_POST))
{
 $output = '';
    $nama = mysqli_real_escape_string($conn, $_POST["nama"]);  
    $produk = mysqli_real_escape_string($conn, $_POST["produk"]);  
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);  
    $agama = mysqli_real_escape_string($conn, $_POST["agama"]);
    $tinggi = mysqli_real_escape_string($conn, $_POST["tinggi"]);  
    $berat = mysqli_real_escape_string($conn, $_POST["berat"]);  
    $alamat = mysqli_real_escape_string($conn, $_POST["alamat"]);  
    $lokasi = mysqli_real_escape_string($conn, $_POST["lokasi"]);
    // $img = mysqli_real_escape_string($conn, $_POST["img"]);
    $query = "
    INSERT INTO home(nama, produk, gender, agama, tinggi, berat, alamat, lokasi, img)  
     VALUES('$nama', '$produk', '$gender', '$agama', '$tinggi', '$berat', '$alamat', '$lokasi')
    ";
    if(mysqli_query($conn, $query))
    {
     $output .= '<label class="text-success">Data Berhasil Masuk</label>';
     $select_query = "SELECT * FROM home ORDER BY id DESC";
     $result = mysqli_query($conn, $select_query);
     $output .= '
      <table class="table table-bordered">  
                    <tr>  
                         <th width="55%">Nama Karyawan</th>  
                         <th width="15%">Lihat</th>  
                         <th width="15%">Foto</th>  
                         
                    </tr>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>  
                         <td>' . $row["nama"] . '</td>  
                         <td><input type="button" name="view" value="Lihat Detail" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                         <td><input type="button" name="view" value="Lihat Foto" id="' . $row["id"] . '" class="btn btn-primary btn-xs view_foto" /></td>       
                  
                    </tr>
      ';
     }
     $output .= '</table>';
    }else{
        $output .= mysqli_error($conn);
    }
    echo $output;
}
?>