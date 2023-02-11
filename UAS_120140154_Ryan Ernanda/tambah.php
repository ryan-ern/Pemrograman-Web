<html>
<head>
    <title>tambah</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <a href="index.php">Lihat Data</a>
    <br/><br/>
 
    <form action="tambah.php" method="post">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>Prodi</td>
                <td><input type="text" name="prodi"></td>
            </tr>
            <tr> 
                <td>Semester</td>
                <td><input type="text" name="semester"></td>
            </tr>
            <tr> 
                <td>IP</td>
                <td><input type="text" name="ip"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="tambah"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $semester = $_POST['semester'];
        $ip = $_POST['ip'];
        
        include_once("koneksi.php");
                
        $sql = mysqli_query($mysqli, "INSERT INTO tb_mhs(nama,nim,prodi,semester,ip) VALUES('$nama','$nim','$prodi', '$semester', '$ip')");
        
        echo "Data Berhasil Ditambahkan. <a href='index.php'>Lihat Data</a>";
    }
    ?>
</body>
</html>