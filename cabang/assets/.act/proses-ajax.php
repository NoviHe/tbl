<?php
session_start();
include '../config.php';

$no_resi = $_POST['id'];
if ($no_resi !== "") {
    $query = mysqli_query($koneksi, "SELECT * FROM laporan_resi WHERE no_resi = '$no_resi'");
    $d = mysqli_fetch_array($query);
    $data = [
        'id' => $d['no_resi'],
        'username_agen' => $d['username_agen'],
        'tanggal_resi' => $d['tanggal'],
        'total_harga' => $d['total_harga'],
        'nama' => $d['nama_penerima'],
        'alamat' => $d['alamat_penerima'],
        'nama_barang' => $d['jenis_barang'],
        'jenis_barang' => $d['jenis_barang'],
        'qty' => $d['jumlah_barang'],
        'berat' => $d['berat_kiriman'],
    ];
} else {
    $data = [
        'id' => "",
        'username_agen' => "",
        'tanggal_resi' => "",
        'total_harga' => "",
        'nama' => "",
        'alamat' => "",
        'nama_barang' => "",
        'jenis_barang' => "",
        'qty' => '',
        'berat' => "",
    ];
}
echo json_encode($data);
