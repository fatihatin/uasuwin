 <?php
 $name ="";
 $jenis_obat ="";
 $harga ="";

 $errorMessage ="";
 $successMessage ="";

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $jenis_obat =$_POST['jenis_obat'];
    $harga = $_POST['harga'];

    do{ 
        if (empty($name) || empty($jenis_obat) || empty($harga)){
            $errorMessage = "All the fields are required";
            break;
        }

        // add new client to database
        $name ="";
        $jenis_obat ="";
        $harga ="";

        $successMessage ="Client added correctly";



    } while(false);
 }
 ?>

 <!DOCTYPE html>
 <html lang="en">


 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Apotik</title>
     <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

 </head>

 <body>
     <div class="container my-5">
         <h2></h2>
         <form method="post">
             <div class="row mb-3">
                 <label class="col-sm-3 col-form-label">Nama</label>
                 <div class="col-sm-6">
                     <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
                 </div>
             </div>
             <div class="row mb-3">
                 <label class="col-sm-3 col-form-label">jenis</label>
                 <div class="col-sm-6">
                     <input type="text" class="form-control" name="jenis_obat" value="<?php echo $jenis_obat;?>">
                 </div>
             </div>
             <div class="row mb-3">
                 <label class="col-sm-3 col-form-label">harga</label>
                 <div class="col-sm-6">
                     <input type="text" class="form-control" name="harga" value="<?php echo $harga;?>">
                 </div>
             </div>
             <div class="row mb-3">
                 <div class="offset-sm-3 col-sm-3 d-grid">
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                 <div class="col-sm-3 d-grid">
                     <a class="btn btn-outline-primary" href="/crud/index.php" role="button">Cancel</a>
                 </div>
             </div>
         </form>
     </div>
 </body>

 </html>