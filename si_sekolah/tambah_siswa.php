<?php
include_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>SI Sekolah</title>
        <a href="index.php">Kembali Ke Halaman Utama</a><br/><br/>
    </head>

    <body>
        <h2>Tambah Data Siswa</h2>
        <form action="tambah_siswa.php" method="post" name="form1">
            <table width="25%" border="0">
			    <tr>
			        <td>Nama</td>
			        <td><input type="text" name="nama_siswa"></td>
			    </tr>
                <tr>
			        <td>Alamat</td>
			        <td><input type="text" name="alamat_siswa"></td>
			    </tr>
			    <tr>
			        <td>Jenis Kelamin</td>
			        <td><input type="text" name="jk_siswa"></td>
			    </tr>
                <tr>
                    <td>Agama</td>
                    <td><input type="text" name="agama_siswa"></td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td><input type="text" name="asal_sekolah"></td>
                </tr>
			    <tr>
			        <td></td>
			        <td><input type="submit" name="Submit" value="Tambah"></td>
			    </tr>
		    </table>
	    </form>

	<?php
        if(isset($_POST['Submit'])) {
            $nama = $_POST['nama_siswa'];
            $alamat = $_POST['alamat_siswa'];
            $jenis_kelamin = $_POST['jk_siswa'];
            $agama = $_POST['agama_siswa'];
            $asal_sekolah = $_POST['asal_sekolah'];
        
            $query = "INSERT INTO data_siswa (nama_siswa, alamat_siswa, jk_siswa, agama_siswa, asal_sekolah) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$asal_sekolah')";
            $result = mysqli_query($konek, $query);
        
            if($result) {
                echo "Data siswa berhasil ditambahkan";
            } else {
                echo "Data siswa gagal ditambahkan";
            }
        }
	?>
    </body>