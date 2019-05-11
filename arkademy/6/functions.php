<?php 
 $konek = mysqli_connect('localhost','root','','arkademy');

		function tambah($data) {
				global $konek;
				$name = htmlspecialchars($data['nama']);

				$query = "INSERT INTO users VALUES (
							'', '$name'
						)";
				

				mysqli_query($konek, $query);

				return mysqli_affected_rows($konek);
			}

		function edit($data) {
			global $konek;
				$id = $data['id'];
				$skill = htmlspecialchars($data['skill']);
				$data = mysqli_query($konek, "SELECT * FROM skills WHERE Id = $id");
    		       while($d = mysqli_fetch_assoc($data)){

	  			$s = $d['Name'];

				$query1 = "UPDATE skills SET 
							Name = '$s , $skill', user_id = $id
						  WHERE Id = $id
						";
				
				mysqli_query($konek, $query1);

				return mysqli_affected_rows($konek);
				header("Location: index.php");
			}
		}

 ?>