<?php
include "Mahasiswa.php";

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2023.14986 <br>', 'Imanuel <br>', 'Teknik Informatika <br>');

$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A11.2023.14981 <br>', 'Firnanda <br>', 'Sistem Informasi <br>');

echo "DATA MAHASISWA : <br>";
print_r($mahasiswaTI->getData());
echo "<br>";
print_r($mahasiswaSI->getData());
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "DATA MAHASISWA : <br>";
echo"<br>";
$mahasiswaTI->tampilantanpaArray();
echo "<br>";
$mahasiswaSI->tampilantanpaArray();
