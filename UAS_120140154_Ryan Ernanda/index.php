<?php
include_once("koneksi.php");
 
$sql = mysqli_query($mysqli, "SELECT * FROM tb_mhs ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>120140154</title>
</head>
 <script>
    function searh() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("Input");
        filter = input.value.toUpperCase();
        table = document.getElementById("mhs");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
 </script>
 <link rel="stylesheet" href="style.css">
<body>
<a href="tambah.php">Tambah Data</a><br/><br/>
<form action="" method="post">
    <label for="entries">show</label>
    <select name="entries">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    <label for="entries">entries</label>

    <input style="float:right;" id="input" type="text" onkeyup="search()" placeholder="search">
</form>
 
    <table width='100%' border=1 id=mhs>
 
    <tr>
        <th>Name</th> <th>NIM</th> <th>Program Studi</th> <th>Semester</th> <th>Indeks Prestasi</th> <th>Aksi</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($sql)) {         
        echo "<tr>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['nim']."</td>";
        echo "<td>".$data['prodi']."</td>";  
        echo "<td>".$data['semester']."</td>"; 
        echo "<td>".$data['ip']."</td>";
        echo "<td> <a href='detail.php?id=$data[id]'>Detail Mahasiswa</a> </button> &emsp;  <a href='edit.php?id=$data[id]'>Edit</a></button>&emsp;  <a href='hapus.php?id=$data[id]'>hapus</a></button></td></tr>";          
    }
    ?>
    </table>
</body>
</html>