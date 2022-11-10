<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Koko</title>
</head>
<body>
    <?php
    class Barang {
        private $nama;
        private $beratKg;
        private $beratg;
        private $beratMg;
        private $stok;

        function __construct($nama, $beratKg, $stok){
            $this->nama = $nama;
            $this->beratKg = $beratKg;
            $this->stok = $stok;
        }
        function get_nama(){
            return $this->nama;
        }
        function get_beratKg(){
            return $this->beratKg;
        }
        function get_stok(){
            return $this->stok;
        }    
        function convertberatg($beratKg){
            return $beratg = $beratKg*1000;
        }
        function convertberatMg($beratKg){
            return $beratMg = $beratKg*1000000;
        }
    }
    
    $list = new Barang($_POST["Nama"], $_POST["berat"], $_POST["Stok"]);
    $namaBarang = $list->get_nama();
    $beratKgBarang = $list->get_beratKg();
    $stokBarang = $list->get_stok();
    $beratGBarang = $list->convertberatg($beratKgBarang);
    $beratMgBarang = $list->convertberatMg($beratKgBarang);

    echo "<h1> Toko Koko </h1>";
    $data = array(
        array("No", "Nama Barang", "Berat(Kg)","Berat(g)", "Berat(Mg)", "Stok"),
        array("1", "Beras", 12, 12*1000, 12*1000000, 15),
        array("2", "Tepung", 5, 5*1000, 5*1000000, 20),
        array("3", "Pisang", 4, 4*1000, 4*1000000, 0),
        array("4", "Gendang", 2, 2*1000, 2*1000000, 10),
        array("5", $namaBarang, $beratKgBarang, $beratGBarang, $beratMgBarang, $stokBarang)
    );

    echo '<table border="1">';
    foreach($data as $row){
        echo '<tr>';
        foreach($row as $cell){
            if($cell==0){
                echo '<td style="background-color:red">'.$cell.'</td>';
            }
            else {
                echo '<td>'.$cell.'</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
    echo "<h2>input barang </h2>";
    echo '<form action = "" method = "POST">';
        echo '<from>';
            echo '<div>';
                echo '<label>Nama</label> <br>';
                echo '<input name="Nama" type="text">';
            echo '</div>';
            echo '<div>';
                echo '<label>BeratKg</label> <br>';
                echo "<input type='number' name='berat'>";
            echo '</div>';
            echo '<div>';
                echo '<label>Stok</label> <br>';
                echo "<input type='number' name='Stok'>";
            echo '</div>';
            echo '<div>';
                echo '<input type="submit" value="Submit"';
            echo '</div';
        echo '</from>';
    echo '</from>';
    ?>
</body>
</html>