<?php 
 require_once'functions.php';
  $id = $_GET['id'];
  if (isset($id)) {
  $query = mysqli_query($konek, "SELECT *
                                 FROM users INNER JOIN skills USING (id) WHERE id = '$id'");
    
   
  }
  else
  {
    header("Location:index.php");
  }


// tambah
 if (isset($_POST['simpan'])) {
    if ( edit($_POST) > 0 ) {
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
              <h3 class="display-4 mx-auto">Edit Data Programmer</h3>      
      </nav>
    </div>

     


    <div class="container mt-3 mb-5 py-5">
      <div class="row"> 
            <?php while ( $pest = mysqli_fetch_assoc($query) ): ?>
        <div class="col-6"> 
        <div class="card mb-3">
              <h4 class="card-header bg-success"><?= $pest['name']; ?></h4>
          <div class="card-body row">
            <div class="col-7">
               <h4 class="card-title"><?= $pest['Name']; ?></h4>
             </div>
             <div class="col-4">
             	 <form action="" method="post" class="form-inline container">
			        <div class="form-group mx-sm-3">
                      <input name="id" type="hidden" value="<?= $pest['id']; ?>" required>

			          <input type="text" class="form-control" name="skill" autocomplete="off" placeholder="Masukan Keahlian !!!">
			        </div>
             </div>
             <div class="col-1">  
			      <button type="submit" class="btn btn-danger" name="simpan">+</button>
			      </form>
             </div>
          </div>
        </div>
      </div>
            <?php endwhile ?>

            <div class="col-6">
            	
            <div class="card text-center">
			  <div class="card-header bg-success">
			    Quote
			  </div>
			  <div class="card-body">
			    <blockquote class="blockquote mb-0">
			      <p>Semua mudah jika kita benar berusaha untuk menggapainya...</p>
			      <footer class="blockquote-footer">Keahlianmu akan berguna jika digunakan dengan bijak <cite title="Source Title">AL Creatice</cite></footer>
			    </blockquote>
			  </div>
			</div>
            </div>
    </div> 
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


