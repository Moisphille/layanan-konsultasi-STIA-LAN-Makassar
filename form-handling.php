<?php
require_once 'db-connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "INSERT INTO requestor (nama, identitas, jenis_layanan, status_permohonan, 
            unit_kerja, nomor_wa, tanggal_awal, tanggal_akhir, waktu_jam, sampai_jam, keterangan) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    
    $stmt = mysqli_prepare($conn, $sql);

    if($stmt){
    
        $nama = htmlentities($_POST['namamu']);
        $identitas = htmlspecialchars($_POST['identitasmu']);
        $layanan = htmlspecialchars($_POST['layanan']);
        $permohonan = htmlspecialchars($_POST['status-permohonan']);
        $unit_kerja = htmlspecialchars($_POST["unitKerja"]);
        $no_wa = htmlspecialchars($_POST["nomorwamu"]);
        $tanggal_mulai = htmlspecialchars($_POST["tanggalmulai"]);
        $tanggal_akhir = htmlspecialchars($_POST["tanggalakhir"]);
        $waktu_jam = htmlspecialchars($_POST["waktujam"]);
        $sampai_jam = htmlspecialchars($_POST["sampaijam"]);
        $keterangan = htmlspecialchars($_POST["keteranganmu"]);

        mysqli_stmt_bind_param($stmt, "sssssssssss", $nama, $identitas, $layanan, $permohonan, $unit_kerja, 
                                $no_wa, $tanggal_mulai, $tanggal_akhir, $waktu_jam, $sampai_jam, $keterangan);
        mysqli_stmt_execute($stmt);

        echo("response added successfully");

        mysqli_stmt_close($stmt);

    }

    else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

mysqli_close($conn);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form.php">kembali ke form</a>
</body>
</html>