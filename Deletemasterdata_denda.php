<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Denda</title>
    <link rel="stylesheet" href="gaya form.css">
</head>
<body>
    <form name="delete_denda" method="POST" action="simpan_deletedendamd.php">
    <center>
    <h1>DELETE DATA DENDA</h1>
    <h2>Isi data dengan benar untuk mengidentifikasi denda yang akan dihapus!</h2>
    <table width="40%" border ="5" cellspacing="0" cellpadding="0">
      <tr> 
        <th>keterangan_denda</th>
        <td><input type="text" name="keterangan_denda" size="60"></td>
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
