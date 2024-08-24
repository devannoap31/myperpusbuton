<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Petugas</title>
    <link rel="stylesheet" href="gaya form.css">
</head>
<body>
    <form name="up_petugas" method="POST" action="saveup_petugasmd.php">
    <center>
    <h1>EDIT DATA PETUGAS</h1>
    <h2>Isi data dengan benar!</h2>
    <table width="40%" border ="5" cellspacing="0" cellpadding="0">
        <tr> 
            <th>kode_petugas</th>
            <td><input type="number" name="kode_petugas" min="0" max="100" size=60></td>
        </tr>
        <tr> 
            <th>nama_petugas</th>
            <td><input type="text" name="nama_petugas" size="60"></td>
        </tr>
        <tr> 
            <th>alamat_petugas</th>
            <td><input type="text" name="alamat_petugas" size=60></td>
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