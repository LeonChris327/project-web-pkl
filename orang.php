<?php include "connection.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="row ml-5 mr-5">
  
  <div class="card  col-lg-3 " style="width: 16rem;">
      <img src="data:img/jpeg;base64,<?php echo base64_encode($produk["img"]);?>" width="300" height="300" alt="">
      <div class="card-body">
      <h5 class="card-title"><?=$produk["nama"]?></h5>
      <p class="card-text"><?=$produk["produk"]?></p>

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
      
  </div>
</div>
</body>
</html>