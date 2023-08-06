<?php
// $mahasiswa = [
//     [
//         "nama" => "riza febrian",
//         "nim" => "20146009",
//         "email" => "riza.febrian.rf45@gmail.com"
//     ],
//     [
//         "nama" => "febrian",
//         "nim" => "20146021",
//         "email" => "febrian.rf45@gmail.com"
//     ]
// ];
$dbh = new PDO('mysql:host=localhost;dbname=e-shop', 'root');
$db = $dbh->prepare('SELECT * FROM brands');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


$data = json_encode($mahasiswa);
echo $data;
