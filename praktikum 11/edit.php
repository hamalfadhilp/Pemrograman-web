<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h1>UPDATE DATA KARYAWAN</h1>
    <br>
    <a href="index.php">kembali</a>

    
    <form action="post" action="function.php">
    <?php
        include 'function.php';
        $id = $_GET['id'];
        $data = mysqli_query($function, "SELECT * FROM karyawan WHERE id='$id");
        while($d = mysqli_fetch_array($data)){
        
    ?>
    <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name = "id" value="<?php echo $d['id']?>">
                    <input type="text" name="name" value="<?php echo $d['name']?>">
                </td>
                <td>Alamat</td>
                <td>
                    <input type="text" name="address" value="<?php echo $d['address'] ?>">
                    <td></td>
                    <td>
                        <button type="submit" name="simpan">SIMPAN</button>
                    </td>
                </td>
            </tr>
        </table>
    <?php
        }
    ?>
    </form>
        
</body>
</html>