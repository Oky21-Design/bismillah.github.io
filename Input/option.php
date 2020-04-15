<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data ID pesawat yang dikirim via ajax post
$id_pesawat = $_POST['pesawat'];

// Buat query untuk menampilkan data kode dengan pesawat tertentu (sesuai yang dipilih user pada form)
$sql = mysqli_query($connect, "SELECT * FROM kode WHERE id_pesawat='".$id_pesawat."' ORDER BY nama");

// Buat variabel untuk menampung tag-tag option nya
// Set defaultnya dengan tag option Please Selected!
$html = "<option value=''> Please Select </option>";


while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$html .= "<option value='".$data['nama']."'>".$data['nama']."</option>"; // Tambahkan tag option ke variabel $html
}

$callback = array('data_kode'=>$html); // Masukan variabel html tadi ke dalam array $callback dengan index array : data_kode

echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>