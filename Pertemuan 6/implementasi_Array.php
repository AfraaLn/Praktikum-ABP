<?php
$arrJurusan = [
    "Afra Lintang Maharani" => "Teknik Informatika",
    "Wafiq" => "Teknik Industri",
    "Loisa" => "data Science"
];

echo $arrJurusan["Afra Lintang Maharani"] . "<br>";
echo $arrJurusan['Wafiq'] . "<br>";

$arrEmail = [];
$arrEmail["Afra Lintang Maharani"] = "Afralintang@gmail.com";
$arrEmail["Wafiq"] = "Wafiq123@example.com";
$arrEmail["Loisa"] = "loisa45@example.com";

echo $arrEmail["Afra Lintang Maharani"] . "<br>";
echo $arrEmail['Wafiq'] . "<br>";
?>
