<?php
include("konfig/koneksi.php");
$query = "SELECT max(id_alternatif) as idMaks FROM alternatif";
$hasil = mysqli_query($k21, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['idMaks'];

//mengatur 6 karakter sebagai jumalh karakter yang tetap
//mengatur 3 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 2, 3);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "A";
//%02s untuk mengatur 2 karakter di belakang 201353
$IDbaru = $char . sprintf("%02s", $noUrut);

?>
<div class="box-header">
	<br><h3 class="box-title">Tambah Alternatif</h3><br>
</div>

<div class="box-body pad">
	<form action="" method="POST">
<<<<<<< HEAD

		<input style="font-size: 15px;" type="text" name="id_alternatif" class="form-control" value="<?php echo $IDbaru; ?>" readonly>
=======
		<input type="text" name="id_alternatif" class="form-control" value="<?php echo $IDbaru; ?>" readonly>
>>>>>>> d04769b1bd5e0051213080a01f1b247144434664
		<br />
		<input style="font-size: 15px;" type="text" name="nama_alternatif" class="form-control" placeholder="Nama Alternatif">
		<br />
		<input style="font-size: 15px;" type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		<br />
	</form>
</div>
<?php
if (isset($_POST['simpan'])) {
	$s = mysqli_query($k21, "insert into alternatif (id_alternatif,nm_alternatif) values('$_POST[id_alternatif]','$_POST[nama_alternatif]')");
	if ($s) {
		echo "<script>alert('Disimpan'); window.open('index.php?a=alternatif&k=alternatif','_self');</script>";
	}
}
?>