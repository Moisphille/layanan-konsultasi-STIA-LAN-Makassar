START TRANSACTION;

-- Create the database
CREATE DATABASE IF NOT EXISTS stialan_form;

-- Use the newly created database
USE stialan_form;

-- Create the table inside the database
CREATE TABLE requestor (
    reqID int NOT NULL AUTO_INCREMENT,
    nama varchar(100) NOT NULL,
    identitas CHAR(15) NOT NULL,
    jenis_layanan varchar(100) NOT NULL,
    status_permohonan VARCHAR(50) NOT NULL,
    unit_kerja VARCHAR(50) NOT NULL,
    nomor_wa CHAR(15) NOT NULL,
    tanggal_awal DATE,
    tanggal_akhir DATE,
    waktu_jam TIME,
    sampai_jam TIME,
    keterangan VARCHAR(255),
    PRIMARY KEY (reqID)
);

COMMIT;
