<?php 
 require_once'functions.php';
  session_start();
 $konek = mysqli_connect('localhost','root','','arkademy');
	global $konek;
  $query = mysqli_query($konek, "SELECT *
                                 FROM users INNER JOIN skills USING (id)");

// tambah
 if (isset($_POST['simpan'])) {
    if ( tambah($_POST) > 0 ) {
      $query1 = "INSERT INTO skills VALUES (
              '', '', ''
            )";

        mysqli_query($konek, $query1);

        echo "
            <script>
              alert('data berhasil ditambahkan!');
              document.location.href='index.php';
            </script>
        ";
    }
    else
    {
      echo "
            <script>
              alert('data gagal ditambahkan!');
              document.location.href='index.php';
            </script>
        ";
    }
 }


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Nomor Enam</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">


    <!-- this css -->
    <style type="text/css">
      .jumbotron {
        margin-bottom: 0px;
        background-color: rgba(0,0,0,0);
      }
      .container , .card {
        background-color: rgba(255,255,255,0.2) !important;
      }
      h1 {
        font-family: sans serif;
      }
    </style>

  </head>
  <body>
    

    <section id="pilih">
      <div class="container my-5">
      <nav class="navbar navbar-expand-lg navbar-light mt-5 bg-info rounded shadow">
              <h3 class="display-4 mx-auto">Data Programmer</h3>      
      </nav>
    </div>

      <form action="" method="post" class="form-inline container">
        <div class="form-group">
          <h3>Tambah Programmer</h3>
        </div>
        <div class="form-group mx-sm-3">
          <input type="text" class="form-control" name="nama" placeholder="Masukan Nama !!!">
        </div>
        <button type="submit" class="btn btn-success" name="simpan">Tambah</button>
      </form>


    <div class="container mt-3 mb-5 py-5">

      <table class="table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th>Nama Programmer</th>
            <th>Keahlian Programmer</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
                  <?php while ( $pest = mysqli_fetch_assoc($query) ): ?>
            <th scope="row">
                      <?= $pest['id']; ?>
            </th>
            <td>
                      <?= $pest['name']; ?>
            </td>
            <td>
                      <?= $pest['Name']; ?>
            </td>
            <td>
               <a href="edit.php?id=<?= $pest['id']; ?>" class="btn btn-danger ">+</a>
            </td>
          </tr>
                  <?php endwhile ?>
        </tbody>
      </table>
  </div>


          <center><span class="mt-5">&copy; 2019 Build With &hearts; By AL Creative</span></center>
      </div>
    </section>






  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jQuery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swal/sweetalert2.all.min.js"></script>
    <script src="js/myindex.js"></script>
  </body>
</html>


<!-- <div class="row">
      <div class="col-sm-6">
        <div class="card mt-2">
                <div class="form-group">
                   <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    <a href="tambah.php?id=<?= $pest['id']; ?>" class="btn btn-danger float-right btn-lg">Tambah</a>
                </div>
          <div class="card-body">
                </h2>
                  <h1 class=" display-1 text-center"><?= $pest['earned_vote'];?></h1>
          </div>
        </div>
      </div>
    </div> -->