<?php
include("koneksi.php");
 
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ip = $_POST['ip'];
        
    $sql = mysqli_query($mysqli, "UPDATE tb_mhs SET nama='$nama',nim='$nim',prodi='$prodi', semester='$semester', ip='$ip' WHERE id=$id");
    
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
 
$sql = mysqli_query($mysqli, "SELECT * FROM tb_mhs WHERE id=$id");
 
while($data = mysqli_fetch_array($sql))
{
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Lihat Data</a>
    <br/><br/>
    
    <form method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']?>"></td>
            </tr>
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $data['nim']?>"></td>
            </tr>
            <tr> 
                <td>Prodi</td>
                <td><input type="text" name="prodi" value="<?php echo $data['prodi']?>"></td>
            </tr>
            <tr> 
                <td>Semester</td>
                <td><input type="text" name="semester" value="<?php echo $data['semester']?>"></td>
            </tr>
            <tr> 
                <td>Indeks Prestasi</td>
                <td><input type="text" name="ip" value="<?php echo $data['ip']?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Edit"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>