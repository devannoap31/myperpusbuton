<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="gaya form.css">
</head>
<body>
    <form name="up_buku" method="POST" action="saveup_bukumd.php">
    <center>
    <h1>EDIT DATA BUKU</h1>
    <h2>Isi data dengan benar!</h2>
    <table width="40%" border ="5" cellspacing="0" cellpadding="0">
      <tr> 
        <th>kode_buku</th>
        <td><input type="number" name="kode_buku" min="0" max="100" size=60></td>
      </tr>
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