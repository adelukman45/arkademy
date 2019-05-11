<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content=
    "text/html; charset=iso-8859-1" />
    
	<title>Dasar Pengurutan Array</title>
  </head>
<body>

<table border="0" cellspacing="3" cellpadding="3" align="center">
  <tr>
    <td><h2>Pengurutan</h2></td>
    <td><h2>Nilai</h2></td>
  </tr>

<?php # dasar_urut_array.php

// Menciptakan array:
$arrayFilm = array (
  10 => 'a',
  9 => 'c',
  2 => 'v',
  8 => 'b',
  5 => 'x',
  7 => 'z'
);

// Menampilkan data array dengan urutan asli
echo '<tr><td colspan="2"><b>Urutan asli:</b></td></tr>';
foreach ($arrayFilm as $kunci => $nilai) {
    echo "<tr><td>$kunci</td>
          <td>$nilai</td></tr>\n";
}

// Menampilkan data array diurutkan berdasarkan rating:
krsort($arrayFilm);

echo '<tr><td colspan="2"><b>Diurutkan berdasarkan nilai tertinggi:</b></td></tr>';
foreach ($arrayFilm as $kunci => $nilai) {
    echo "<tr><td>$kunci</td>
          <td>$nilai</td></tr>\n";
}

?>
  </table>
</body>
</html>