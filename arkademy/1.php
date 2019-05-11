<?php 
	function nomorsatu() {
		$data = [
			'name' => 'Ade Lukman',
			'address' => 'Sumedang',
			'hobbies' => 'travelling, tracking',
			'is_married' => 'belum' , 'sudah',
			'school' => 'smk informatika sumedang',
			'skills' => 'desain web'
		];
		return json_encode($data);
	}

	$tampil = nomorsatu();
	echo $tampil;
 ?>