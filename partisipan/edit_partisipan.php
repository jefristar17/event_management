<?php
    include("../koneksi.php");
    
    $partisipan_id = $_GET['partisipan_id'];

    $query = $db->query("SELECT * FROM partisipan WHERE partisipan_id ='$partisipan_id'");
    // 1 disini salah karena nama nya nama id nya harusnya $event_id
    $partisi = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h3>Edit Data Partisipan</h3>
    <form action="proses_edit.php" method="POST">
      <input type="hidden" name="partisipan_id" value="<?php echo $partisi['partisipan_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td>
                 <input type="text" name="nama"
                 value="<?php echo $partisi['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>email</td>
                <td>
                 <input type="text" name="email"
                 value="<?php echo $partisi['email']; ?>" style="width: 100%">
                </td>
            </tr>
            
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>