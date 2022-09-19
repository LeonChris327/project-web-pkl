<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
       <div class="card">
           <div class="card-header bg-success">
               <h4 class="text-white">
                   Hasil Pencarian
               </h4>
           </div>

           <div class="card-body">
               <form action="daftar-mobil.php" method="get">
                   <input type="text" name="search"
                   class="form-control mb-2"
                   placeholder="Masukkan Keyword Pencarian" />
               </form>

               <ul class="list-group">
                   <?php
                   include "connection.php";
                   if(isset($_GET["search"])){
                       $cari = $_GET["search"];
                       $sql = "select * from home 
                       where produk like '%$cari%' 
                       or gender like '%$cari%'
                       or penempatan like '%$cari%'";
                   }else{
                       $sql = "select * from home";
                   }

                   # eksekusi SQL
                   $hasil = mysqli_query($conn, $sql);
                   while ($produk = mysqli_fetch_array($hasil)) {
                       ?>
      
                       <li class="list-group-item">
                           <div class="row">
                               <div class="col-lg-4">
                                   <!-- untuk gambar -->
                                   <img src="data:img/jpeg;base64,<?php echo base64_encode($produk["img"]);?>" width="300" height="300" alt="">
                               </div>
                               <div class="col-lg-6">
                                   <!-- untuk deskripsi mobil -->
                                   <h5>Nama: <?=$produk["nama"]?></h5>
                                   <h6>Produk : <?=$produk["produk"]?></h6>
                               </div>
                               <div class="col-lg-2">
                               <a href="form-mobil.php?id=<?=$produk["id"]?>">
                                    <button class="btn btn-info btn-block">
                                        Edit
                                    </button>
                                </a>
                                <br>
                                <div>
                                <a href="delete-mobil.php?id=<?=$produk["id"]?>"
                                onclick="return confirm('Apakah Anda yakin?')">
                                </div>
                                <button class="btn btn-danger btn-block">
                                    Hapus
                                </button>
              
                            </a>
                                <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#<?php echo "modal-".$produk["id"];?>">
                                    Detail
                                </button>

                                <!-- pop up -->
                                <div class="modal centered-modal fade" id="<?php echo "modal-".$produk["id"];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $produk["nama"];?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-info">Save changes</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                           <!-- end pop up -->
                                   
                               </div>
                           </div>
                       </li>
                       <?php
                   }
                   ?>
               </ul>
           </div>
       </div> 
    </div>
</body>
</html>