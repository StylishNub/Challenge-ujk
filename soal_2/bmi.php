<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    <h1>Calculator BMI</h1>

    <form action="bmi.php" method="post">
    <label for="">Pilih jenis kelamin :</label>
    <input type="radio" name="gender" value="Laki-Laki"> Laki-Laki
    <input type="radio" name="gender" value="Perempuan"> Perempuan
    <br><br>
    <label for="">masukan Berat Badan :</label>
    <input type="number" name="berat"> <br><br>
    <label for="">masukan Tinggi Badan :</label>
    <input type="number" name="tinggi"> <br><br>

    <input type="submit" name="submit" value="Hitung"> <br>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $a = $_POST['berat'];
        $b = $_POST['tinggi'];
        $gender = $_POST['gender'];
        // perhitungan bmi
        $hasil = $a / (($b/100) * ($b/100));
        // perhitungan bmi ideal
        $pria = ($b-100)-(($b-100)*0.1);
        $wanita = ($b-100)-(($b-100)*0.15);
        $kategori = 0;
        
        if($gender == 'Laki-Laki'){
            // buat if bersarang untuk kategori
            if($hasil < 17){
                $kategori = 'kurus';
            }elseif($hasil >= 17 && $hasil < 23){
                $kategori = 'normal';
            }elseif($hasil >= 23 && $hasil < 27){
                $kategori = 'kegemukan';
            }else{
                $kategori = 'obesitas';
            }
            // output
            echo "<br>"."jenis kelamin anda adalah : Laki-Laki<br>";
            echo "Nilai BMI anda adalah : ".$hasil. "<br>";
            echo "kategori Berat badan anda adalah : ".$kategori. "<br>";
            echo "Berat Badan Ideal Anda adalah : ".$pria. "<br>";
        } elseif($gender == 'Perempuan'){
            // buat if bersarang untuk kategori
            if($hasil < 17){
                $kategori = 'kurus';
            }elseif($hasil >= 17 && $hasil < 23){
                $kategori = 'normal';
            }elseif($hasil >= 23 && $hasil < 27){
                $kategori = 'kegemukan';
            }else{
                $kategori = 'obesitas';
            }
            // output
            echo "<br>"."jenis kelamin anda adalah : Perempuan". "<br>";
            echo "Nilai BMI anda adalah : ".$hasil. "<br>";
            echo "kategori Berat badan anda adalah : ".$kategori. "<br>";
            echo "Berat Badan Ideal Anda adalah : ".$wanita. "<br>";
        }else{
            echo "invalid bos";
        }
        

    }
    ?>