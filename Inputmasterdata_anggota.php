<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Anggota</title>
    <link rel="stylesheet" href="gaya form.css">
</head>
<body>
    <form name="data_anggota" method="POST" action="simpan_dataanggotamd.php">
        <center>
          <h1>INPUT DATA ANGGOTA</h1>
          <h2>Isi data dengan benar!</h2>
          <table width="50%" cellspacing="30" cellpadding= "5">
            <tr> 
              <th>nama_anggota</th>
              <td><input type="text" name="nama_anggota" size="60"></td>
            </tr>
            <tr> 
              <th>alamat_anggota</th>
              <td><input type="text" name="alamat_anggota" size=60></td>
            </tr>
            <tr> 
              <th>kode_pendaftarananggota</th>
              <td><input type="number" name="kode_pendaftarananggota" min="1" max="100" size=60></td>
            </tr>
            <tr> 
              <th>kode_petugas</th>
              <td><input type="number" name="kode_petugas" min="1" max="100" size=60></td>
            </tr>
            <tr> 
              <th>tanggal_bergabung</th>
              <td><input type="date" name="tanggal_bergabung" size="60"></td>
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