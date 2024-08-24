<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghapus Anggota</title>
    <link rel="stylesheet" href="gaya form.css">
</head>
<body>
    <form name="delete_anggota" method="POST" action="simpan_deleteanggotamd.php">
    <center>
    <h1>DELETE DATA ANGGOTA</h1>
    <h2>Isi data dengan benar untuk mengidentifikasi anggota yang akan dihapus!</h2>
    <table width="40%" cellspacing="20" cellpadding="5">
      <tr> 
        <th>nama_anggota</th>
        <td><input type="text" name="nama_anggota" size="60"></td>
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