<?php
$data_mahasiswa = [
    "2311102258" => [
        "nama" => "Afra Lintang Maharani",
        "jurusan" => "Teknik Informatika",
        "email" => "Afralintang@gmail.com"
    ],
    "2311102280" => [
        "nama" => "Wafiq",
        "jurusan" => "Teknik Industri",
        "email" => "Wafiq123@example.com"
    ],
    "2311102290" => [
        "nama" => "Loisa",
        "jurusan" => "Data Science",
        "email" => "Loisa45@example.com"
    ]
];

if (isset($_POST['nim'])) {
    $nim = $_POST['nim'];
    if (array_key_exists($nim, $data_mahasiswa)) {
        echo json_encode($data_mahasiswa[$nim]);
    } else {
        echo json_encode([
            "nama" => "Tidak ditemukan",
            "jurusan" => "-",
            "email" => "-"
        ]);
    }
}
?>
