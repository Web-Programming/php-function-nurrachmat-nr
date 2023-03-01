<?php
//cara membuat fungsi/function
function salam()
{
    echo "Selamat Siang";
}

//cara memanggil fungsi
salam();
echo "<br/>";
//membuat fungsi dengan parameter
function getProdi($kodeprodi = null)
{
    $array_prodi = [
        11 => "Manajemen Informatika",
        24 => "Sistem Informasi",
        25 => "Informatika"
    ];

    echo isset($array_prodi[$kodeprodi]) ? $array_prodi[$kodeprodi] : "Prodi Tidak Dikenal";
}
//memanggil fungsi dengan mengirim parameter
getProdi(25);
echo "<br/>";
getProdi(23);

echo "<br/>";
getProdi();

echo "<br/>";
//fungsi return
function sum($a, $b){
    return $a + $b;
}
$c = sum(10, 3); //13

//membuat anonimous function
//pengurangan
$d = function ($a) use ($c){
    return $a - $c;
};

//cara panggil anonimous function
echo $d(20); //7
echo "<br/>";

//Arrow Function
$d2 = fn($a) => $a * $c; //untuk perkalian
echo $d2(2); //26

//arrow function tidak bisa untuk multi line expression
//jika ingin membuat multi line expression, lebih baik gunakan anonimous function
?>