<?php 
//associative array
$nilaiSiswa = [
  ['nama' => 'Andi', 'nilai' => 80],
  ['nama' => 'Budi', 'nilai' => 40],
  ['nama' => 'Candra', 'nilai' => 20]
];

//echo count($nilaiSiswa);
$databaru = ['nama' => "Deni", "nilai" => 100];
array_push($nilaiSiswa, $databaru); //menyisipkan array di akhir
//var_dump($nilaiSiswa); 
//echo count($nilaiSiswa);
//print_r($nilaiSiswa);

foreach ($nilaiSiswa as $key => $value) {
    echo "Nama : ". $value['nama']."<br/>";
    echo "Nilai : ". $value['nilai']."<br/>";
    echo "<hr/>";
}
