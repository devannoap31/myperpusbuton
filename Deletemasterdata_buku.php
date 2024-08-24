<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Buku</title>
    <link rel="stylesheet" href="gaya form.css">
</head>
<body>
    <form name="delete_buku" method="POST" action="simpan_deletebukumd.php">
    <center>
    <h1>DELETE DATA BUKU</h1>
    <h2>Isi data dengan benar untuk mengidentifikasi buku yang akan dihapus!</h2>
    <table width="40%" border ="5" cellspacing="0" cellpadding="0">
      <tr> 
        <th>judul_buku</th>
        <td><input type="text" name="judul_buku" size="60"></td>
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
