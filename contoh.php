<?php 

$db = array(
    "host" => "localhost",
    "nama" => "root",
    "password" => "",
    "database" => "perpustakaan2_vanno"
);

$koneksi = mysqli_connect($db["host"], $db["nama"], $db["password"], $db["database"]);
$tables = $koneksi->query("show tables")->fetch_all();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Tabel dan Isi Tab</title>
    <link rel="stylesheet" href="gaya index.css">
    <style>
        /* Gaya Umum */
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #443C68;
            margin: 0;
            padding: 0;
        }

        /* Judul Halaman */
        h2 {
            margin-top: 20px;
            margin-left: 250px;
            margin-right: 250px;
            background-color: #1A120B;
            color: #F8DE22;
            padding: 10px;
            text-align: center;
        }

        /* Kotak Pencarian */
        .search-container {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 50%;
            padding: 10px;
            margin-right: 10px;
            border: 7px solid #FFBB5C;
            border-radius: 20px;
        }

        /* Tabel */
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 0 auto;
            background-color: #EC53B0;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 20px;
            text-align: center;
        }

        th {
            background-color: #0E21A0;
            color: #F8DE22;
            width: 20px;
        }

        tr:nth-child(even) {
            background-color: #9D44C0;
        }

        /* Tab Style */
        .tab {
            overflow: hidden;
            margin: 30px;
        }

        .tab button {
            background-color: #61677A;
            float: center;
            border: navy;
            outline: navy;
            cursor: pointer;
            padding: 20px 20px;
            transition: 1.0s;
            border-radius: 10px;
        }

        .tab button:hover {
            background-color: #8BE8E5;
            color: #070808;
            border-radius: 1000px;
        }

        .tab button.active {
            background-color: #333;
            color: white;
            border-radius: 25px;
        }

        a {
            background-color: #871c1c00;
            color: #000000;
        }

        button {
            padding: 5px 10px;
            margin: 5px 5px 5px 5px;
            background-color: #0004ff;
            border: 1px solid black;
            border-radius: 5px;
        }

        #updatetable {
            background-color: #4CAF50; /* Hijau */
            border: 1px solid black;
            border-radius: 10px;
            color: black;
            text-align: center;
            display: inline;
            cursor: pointer;
        }

        #deletetable {
            background-color: #fe0000; /* Hijau */
            border: 1px solid black;
            border-radius: 10px;
            color: black;
            text-align: center;
            display: inline;
            cursor: pointer;
        }

        .tambah {
            margin-left: 90%;
        }
    </style>
</head>
<body>
    <h2>Daftar Tabel dalam Database:</h2>
    
    <div class="search-container">
        <input type="text" id="search" placeholder="search here..." onkeyup="searchTable()">
    </div>
    
    <div class="tab">
        <?php foreach ($tables as $table) { ;?>
        <button 
            class="tablinks<?php echo $table == $tables[0] ? ' active' : ''; ?>"
            id="<?php echo $table[0]; ?>btn"
            onclick="openTable('<?php echo $table[0]; ?>')">
                <?php echo $table[0]; ?>
        </button>
        <?php } ?>
    </div>
    
    

    <?php foreach ($tables as $table) {
        $table = $table[0];
        $result = $koneksi->query("SELECT * FROM $table");
        if ($result->num_rows > 0){
        ?>
        <div class="tabcontent" id="<?php echo $table; ?>content">
            <h2><?php echo $table; ?></h2>
            <table>
                <tr> 
                    <?php foreach ($result->fetch_fields() as $value){
                    echo "<th>$value->name</th>";
                    } ?>
                    <th>PERBARUI</th>
                </tr>
                
                <?php foreach ($result->fetch_all() as $row){ ?>
                <tr>
                    <?php foreach ($row as $value){
                    echo "<td>$value</td>";
                    }?>
                    <td>
                        <a href="Update<?php echo $table; ?>.php?id=<?php echo $row[0]; ?>"><button id="updatetable">Update</button></a>
                        <a href="Delete<?php echo $table; ?>.php?id=<?php echo $row[0]; ?>"><button id="deletetable">Delete</button></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <?php } else { 
            echo "<p>Tabel $table kosong.<p>"; 
        }
    } ?>

    <br><br>
    <div class="tambah">
        <a href="Inputmasterdata_anggota.php"><button id="anggotaBtn">Input Anggota</button></a>
        <a href="Inputmasterdata_buku.php"><button id="bukuBtn">Input Buku</button></a>
        <a href="Inputmasterdata_denda.php"><button id="dendaBtn">Input Denda</button></a>
        <a href="Inputmasterdata_petugas.php"><button id="petugasBtn">Input Petugas</button></a>
        <a href="Inputtransaksi_peminjamanbuku.php"><button id="pinjamBtn">Input Pinjam</button></a>
        <a href="Inputtransaksi_pengembalianbuku.php"><button id="pengembalianBtn">Input kembali</button></a>
        <a href="Inputtransaksi_pembayarandenda.php"><button id="pembayaranBtn">Input Bayar</button></a>
    </div>

    <script>
        function openTable(table) {
            // Menghapus kelas "active" dari semua elemen tablinks
            var tablinks = document.getElementsByClassName('tablinks');
            for (var i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            
            for (let tabcontent of document.getElementsByClassName('tabcontent')) {
                tabcontent.style.display = "none"
            }

            document.getElementById(table + "btn").classList.add("active");
            document.getElementById(table + "content").style.display = "block"
            
            // Mengatur tampilan tombol berdasarkan tab yang diklik
            document.getElementById('anggotaBtn').style.display = (table === 'masterdata_anggota') ? 'block' : 'none';
            document.getElementById('bukuBtn').style.display = (table === 'masterdata_buku') ? 'block' : 'none';
            document.getElementById('dendaBtn').style.display = (table === 'masterdata_denda') ? 'block' : 'none';
            document.getElementById('petugasBtn').style.display = (table === 'masterdata_petugas') ? 'block' : 'none';
            document.getElementById('pinjamBtn').style.display = (table === 'transaksi_peminjamanbuku') ? 'block' : 'none';
            document.getElementById('pengembalianBtn').style.display = (table === 'transaksi_pengembalianbuku') ? 'block' : 'none';
            document.getElementById('pembayaranBtn').style.display = (table === 'transaksi_pembayarandenda') ? 'block' : 'none';
            document.getElementById('del_anggotaBtn').style.display = (table === 'masterdata_anggota') ? 'block' : 'none';
            document.getElementById('del_bukuBtn').style.display = (table === 'masterdata_buku') ? 'block' : 'none';
            document.getElementById('del_dendaBtn').style.display = (table === 'masterdata_denda') ? 'block' : 'none';
            document.getElementById('del_petugasBtn').style.display = (table === 'masterdata_petugas') ? 'block' : 'none';
            document.getElementById('del_trpinjam').style.display = (table === 'transaksi_peminjamanbuku') ? 'block' : 'none';
            document.getElementById('del_trkembali').style.display = (table === 'transaksi_pengembalianbuku') ? 'block' : 'none';
            document.getElementById('del_trbayar').style.display = (table === 'transaksi_pembayarandenda') ? 'block' : 'none';
            document.getElementById('up_anggotaBtn').style.display = (table === 'masterdata_anggota') ? 'block' : 'none';
            document.getElementById('up_bukuBtn').style.display = (table === 'masterdata_buku') ? 'block' : 'none';
            document.getElementById('up_dendaBtn').style.display = (table === 'masterdata_denda') ? 'block' : 'none';
            document.getElementById('up_petugasBtn').style.display = (table === 'masterdata_petugas') ? 'block' : 'none';
            document.getElementById('up_trpinjam').style.display = (table === 'transaksi_peminjamanbuku') ? 'block' : 'none';
            document.getElementById('up_trkembali').style.display = (table === 'transaksi_pengembalianbuku') ? 'block' : 'none';
            document.getElementById('up_trbayar').style.display = (table === 'transaksi_pembayarandenda') ? 'block' : 'none';
        
        }
        
        openTable(<?php echo json_encode($tables[0][0]); ?>);

        function searchTable() {
            var input, filter, table, tr, td, i, j, txtValue;
            input = document.getElementById('search');
            filter = input.value.toUpperCase();
            table = document.getElementsByClassName('tabcontent');

            for (i = 0; i < table.length; i++) {
                tr = table[i].getElementsByTagName('tr');

                for (j = 0; j < tr.length; j++) {
                    td = tr[j].getElementsByTagName('td');

                    var found = false;

                    for (var k = 0; k < td.length; k++) {
                        txtValue = td[k].textContent || td[k].innerText;

                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            found = true;
                            break;
                        }
                    }

                    if (found) {
                        tr[j].style.display = '';
                    } else {
                        tr[j].style.display = 'none';
                    }
                }
            }
        }
    </script>
</body>
</html>