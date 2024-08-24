<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian Buku</title>
    <link rel="stylesheet" href="gaya form.css">
</head>
<body>
    <form name="data_pengembalianbuku" method="POST" action="simpan_datapengembalianbukumd.php">
    <center>
    <h1>INPUT PENGEMBALIAN BUKU</h1>
    <h2>Isi data dengan benar!</h2>
    <table width="40%" border ="5" cellspacing="0" cellpadding="0">
      <tr> 
        <th>kode_peminjamanbuku</th>
        <td><input type="number" name="kode_peminjamanbuku" min="1" max="100" size="60"></td>
      </tr>
      <tr> 
        <th>tanggal_pengembalianbuku</th>
        <td><input type="date" name="tanggal_pengembalianbuku" size="60"></td>
      </tr>
      <tr> 
        <th>jumlah</th>
        <td><input type="number" name="jumlah" min="0" max="2" size=60></td>
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