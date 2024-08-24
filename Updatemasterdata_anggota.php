<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
    <link rel="stylesheet" href="gaya form.css">
</head>
<body>
    
    <?php 
    include 'koneksi.php';
    $id = $_GET['id'];
    $sql =  "SELECT * FROM masterdata_anggota WHERE kode_anggota = '$id'";
    $exe = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($exe);
    ?>

    <form name="up_anggota" method="POST" action="saveup_anggotamd.php">
    <center>
    <h1>UPDATE DATA ANGGOTA</h1>
    <h2>Isi data dengan benar!</h2>
    <table width="40%" cellspacing="30" cellpadding="0">
        <tr> 
            <th>kode_anggota</th>
            <td><input type="number" name="kode_anggota" value="<?= $data['kode_anggota'] ?>" min="1" max="100" size=60></td>
        </tr>
        <tr> 
            <th>nama_anggota</th>
            <td><input type="text" name="nama_anggota" value="<?= $data['nama_anggota'] ?>" size="60"></td>
        </tr>
        <tr> 
            <th>alamat_anggota</th>
            <td><input type="text" name="alamat_anggota" value="<?= $data['alamat_anggota'] ?>" size=60></td>
        </tr>
        <tr> 
            <th>kode_pendaftarananggota</th>
            <td><input type="number" name="kode_pendaftarananggota" value="<?= $data['kode_pendaftarananggota'] ?>" min="1" max="100" size=60></td>
        </tr>
        <tr> 
            <th>kode_petugas</th>
            <td><input type="number" name="kode_petugas" value="<?= $data['kode_petugas'] ?>" min="1" max="100" size=60></td>
        </tr>
        <tr> 
            <th>tanggal_bergabung</th>
            <td><input type="date" name="tanggal_bergabung" value="<?= $data['tanggal_bergabung'] ?>" size="60"></td>
        </tr>
        <tr> 
            <td colspan="2"><center><input type="submit" name="Submit" value="Submit">
            <input type="reset" name="reset" value="Reset"></center></td>
        </tr>
    </table>
    <p>&nbsp; </p>
    </center>
    </form>
</body>
</html>