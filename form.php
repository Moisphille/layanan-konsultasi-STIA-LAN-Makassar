<?php 
require_once "db-connect.php";

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulir Layanan</title>
</head>
<body>
    <div class="header-form">
        <h2>Formulir Layanan Unit Teknologi Informasi</h2>
        <p>silahkan mengisi form yang tersedia <br><br>jika ada 
        kendala dalam pengisian form silahkan menghubungi kami tim unit 
        teknologi <br> informasi di nomor 08114631983 - 085299116580 - 089522446399<br><br>
        </p>
        <p class="salam">Salam dari kami Tim Unit TI. Terima kasih</p>

        <span class="answer-require">* indicates answer is required</span><br>
        <br>
    </div>

    <form action="form-handling.php" method="POST">
        <div class="form-nama">
            <label for="name">Name:</label><br>
            <input type="text" name="namamu" required>
            <br>
        </div>
    
        <div class="identitas-form">
            <label for="identitas" >NIP/NPM/Nomor Identitas<span>*</span></label><br>
            <input type="text" name="identitasmu" required><br>
        </div>

        <div class="jenis-layanan-form">
            <label for="jenis-layanan">Jenis Layanan<span>*</span></label><br>
            <select name="layanan" id="layanan" required><br>
                <option value="pilih-layanan">Pilih Layanan</option>
                <option value="Layanan-Akses-Internet-Berbasis-Wireless" required>Layanan Akses Internet Berbasis Wireless</option>
                <option value="Layanan-Akses-Internet-Berbasis-Kabel" required>Layanan Akses Internet Berbasis Kabel</option>
                <option value="Layanan-Permohonan-Email-Institusi(Google Education)" required>Layanan Permohonan Email Institusi (Google Education)</option>
                <option value="Layanan-Pembuatan-Aplikasi(Internal)" required>Layanan Pembuatan Aplikasi (Internal)</option>
                <option value="Layanan-Maintenance-Upgrade-Aplikasi(Internal)" required>Layanan Maintenance-Upgrade Aplikasi(Internal)</option>
                <option value="Layanan-Kegiatan-Daring(Internal)" required>Layanan Kegiatan Daring (Zoom)</option>
                <option value="Layanan-Maintenance-Perbaikan-Printer-Leptop-Pc" required>Layanan Maintenance-Perbaikan Printer-Leptop-Pc</option>
                <option value="Layanan-Maintenance-Pemeliharaan Sarana Penunjang Akses Jaringan Internet" required>Layanan Maintenance-Pemeliharaan Sarana Penunjang Akses Jaringan Internet</option>
                <option value="Layanan-Pembuatan-Website" required>Layanan Pembuatan Website</option>
                <option value="Layanan-Maintenance-Perbaikan-Website" required>Layanan Maintenance-Perbaikan Website</option>
                <option value="Layanan-Domain-dan-Hosting (Internal)" required>Layanan Domain dan Hosting (Internal)</option>
                <option value="Layanan-Permintaan-Canva-For-Education" required>Layanan Permintaan Canva For Education</option>
                <option value="Layanan-Instalasi-Aplikasi-Server-Internal" required>Layanan Instalasi Aplikasi Server Internal</option>
                <option value="Layanan-CCTV">Layanan CCTV</option>
            </select><br>
        </div>

        <div class="status-permohonan-form">
            <label for="status-permohonan">Status Permohonan<span>*</span></label><br>
            <select name="status-permohonan" id="choose-status-permohonan" required><br>
                <option value="pilih-status" required>Pilih Status</option>
                <option value="pegawai" required>Pegawai</option>
                <option value="mahasiswa" required>Mahasiswa</option>
                <option value="tamu" required>Tamu</option>
            </select><br>
        </div>

        <div class="unit-kerja-permohonan-form">
            <label for="unitKkerja">Unit Kerja Pemohon<span>*</span></label><br>
            <input type="text" name="unitKerja" required><br>
        </div>

        <div class="nomor-aktif-wa-form">
            <label for="nomor-wa">Nomor Aktif WA<span>*</span></label><br>
            <input type="text" name="nomorwamu" required><br>
        </div>

        <div class="tanggal-mulai-kegiatan-form">
            <label for="tanggal-mulai">Tanggal Mulai Kegiatan</label><br>
            <input type="date" name="tanggalmulai"><br>
        </div>

        <div class="tanggal-akhir-kegiatan-form">
            <label for="tanggal-akhir">Tanggal Akhir Kegiatan</label><br>
            <input type="date" name="tanggalakhir"><br>
        </div>

        <div class="waktu-jam">
            <label for="waktu-jam">Waktu/Jam (khusus layanan daring zoom)</label><br>
            <input type="time" name="waktujam"><br>
        </div>

        <div class="sampai-jam">
            <label for="sampai-jam">Sampai Jam (khusus layanan daring zoom)</label><br>
            <input type="time" name="sampaijam"><br>
        </div>

        <div class="keterangan">
            <label for="keterangan">Keterangan (tulis jika ada pesan yang ingin disampaikan) informasi selanjutnya akan kami kirim lewat whatsapp</label><br>
            <input type="text" name="keteranganmu"><br>
        </div>
        
        <div class="submit">
            <input type="submit" value="submit" id="submit">
        </div>
    </form>
</body>
</html>