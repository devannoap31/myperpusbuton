<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="gaya form.css">
</head>
<body>
    <form name="data_buku" method="POST" action="simpan_databukumd.php">
    <center>
    <h1>INPUT DATA BUKU</h1>
    <h2>Isi data dengan benar!</h2>
    <table width="50%" cellspacing="30" cellpadding="5">
      <tr> 
        <th>judul_buku</th>
        <td><input type="text" name="judul_buku" size="60"></td>
      </tr>
      <tr> 
        <th>pengarang_buku</th>
        <td><input type="text" name="pengarang_buku" size=60></td>
      </tr>
      <tr> 
        <th>stok_buku</th>
        <td><input type="number" name="stok_buku" min="0" max="2" size=60></td>
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