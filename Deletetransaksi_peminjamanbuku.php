<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Transaksi Peminjaman Buku</title>
    <link rel="stylesheet" href="gaya form.css">
</head>
<body>
    <form name="delete_pinjam" method="POST" action="simpan_deletepinjamtr.php">
    <center>
    <h1>DELETE DATA PEMINJAMAN</h1>
    <h2>Isi data dengan benar untuk mengidentifikasi Peminjaman yang akan dihapus!</h2>
    <table width="40%" border ="5" cellspacing="0" cellpadding="0">
      <tr> 
        <th>kode_peminjamanbuku</th>
        <td><input type="number" name="kode_peminjamanbuku" min="0" max="100" size="60"></td>
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
