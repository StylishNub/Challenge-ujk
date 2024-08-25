<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert</title>
</head>
<body>
    <h1>Convert Mata Uang</h1>

    <form action="convert.php" method="post">
    <label for="">Pilih jenis perhitungan :</label>
    <select name="currency" id="">
        <option value="usd">US Dollar</option>
        <option value="yen">Japan Yen</option>
        <option value="pound">Pondsterling</option>
        <option value="euro">EURO</option>
        <option value="riyal">Riyal</option>
    </select> <br><br>
    <label for="">masukan total mata uang asing:</label>
    <input type="number" name="total"> <br><br>

    <input type="submit" name="submit" value="Hitung"> <br>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        // deklarasi variabel
        $currency = $_POST['currency'];
        $change = $_POST['total'];

        // deklarasi nilai tukar
        $tukar = [
        "usd" => 15000,
        "yen" => 112,
        "pound" => 18500,
        "euro" => 16000,
        "riyal" => 4000,
        ];
        // Validasi currency
        if(null === $tukar[$currency] ?? null) {
            echo "nilai tidak valid";
            exit;
        }

        // perhitungan
        $hasil = $change * $tukar[$currency];

        // deklarasi pecahan dalam array
        $pecahan = ['100000', '50000', '20000', '10000', '5000', '2000', '1000', '500', '200', '100'];
        $default = $hasil;
        $result = [];

        // perulangan untuk menghitung setiap pecahan
        $i=0;
        while($i < count($pecahan)){
            $result[$pecahan[$i]] = intdiv($default,$pecahan[$i]);
            $default %= $pecahan[$i];
            $i++;
        }

        // Menampilkan Output
        echo "<br>Banyak uang yang anda terima adalah : ".$hasil."<br>dengan rincian : <br>" ;
        foreach($result as $pecahan => $count)
        echo "pecahan ".$pecahan." = ".$count." lembar <br>";
        if($default > 0){
            echo "sisa : ".$default;

    }
    }
    ?>