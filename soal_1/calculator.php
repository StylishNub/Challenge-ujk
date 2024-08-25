<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator Sederhana</h1>

    <form action="calculator.php" method="post">
    <label for="">Pilih jenis perhitungan :</label>
    <select name="operasi" id="">
        <option value="penjumlahan">penjumlahan</option>
        <option value="pengurangan">pengurangan</option>
        <option value="perkalian">perkalian</option>
        <option value="pembagian">pembagian</option>
    </select> <br><br>
    <label for="">masukan angka 1 :</label>
    <input type="number" name="angka1"> <br><br>
    <label for="">masukan angka 2 :</label>
    <input type="number" name="angka2"> <br><br>

    <input type="submit" name="submit" value="Hitung"> <br>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $a = $_POST['angka1'];
        $b = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;

        if($operasi == 'penjumlahan'){
            $hasil = $a + $b;
            echo "<br>Hasil dari ".$a." + ".$b." = ".$hasil;
        } elseif($operasi == 'pengurangan'){
            $hasil = $a - $b;
            echo "<br>Hasil dari ".$a." - ".$b." = ".$hasil;
        }elseif($operasi == 'perkalian'){
            $hasil = $a * $b;
            echo "<br>Hasil dari ".$a." * ".$b." = ".$hasil;
        }elseif($operasi == 'pembagian'){
            $hasil = $a / $b;
            echo "<br>Hasil dari ".$a." : ".$b." = ".$hasil;
        }
        if($hasil % 2 != 0){
            echo "<br>".$hasil. "merupakan bilangan ganjil ";
        }else{
            echo "<br>".$hasil. "  merupakan bilangan genap ";
        }
    }
?>