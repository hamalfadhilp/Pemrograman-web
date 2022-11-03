<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Kokoh Hamal</title>
</head>
<body>
    <h1>Toko Koko Hamal</h1>
    <table border>
        <tr>
            <th colspan="6">Stok Barang</th>
        </tr>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Berat(Kg)</th>
            <th>Berat(gram)</th>
            <th>Berat (miligram)</th>
            <td>Stock</td>
        </tr>

        <?php
        $barang = array("Mangga", "Babi", "Sapi", "Bakso", "Teman");
        $kilo = array(1,3,4,8,9);
        for ($i=0; $i <=5 ; $i++) { 
            echo $i;
            echo $barang[$i];
            echo $kilo[$i];
        }

        ?>
        <tr>
            <td>
                <?php
                        echo $i. "<br/>";
                ?>
            </td>
        </tr>
        
            
    </table>
</body>
</html>

