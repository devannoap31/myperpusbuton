<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Transaksi Pengembalian Buku</title>
    <link rel="stylesheet" href="gaya form.css">
</head>
<body>
    <form name="delete_kembali" method="POST" action="simpan_deletekembalitr.php">
    <center>
    <h1>DELETE DATA PENGEMBALIAN</h1>
    <h2>Isi data dengan benar untuk mengidentifikasi Pengembalian yang akan dihapus!</h2>
    <table width="40%" border ="5" cellspacing="0" cellpadding="0">
      <tr> 
        <th>kode_pengembalianbuku</th>
        <td><input type="number" name="kode_pengembalianbuku" min="0" max="100" size="60"></td>
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
