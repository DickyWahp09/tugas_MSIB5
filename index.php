<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Konversi Suhu Dicky Wahyu Pratama</title>
    <style>
        body {
            background-image: url('image/BG.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #333;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Konversi Suhu Dicky Wahyu Pratama</h1>
        <table>
            <tr>
                <th>Satuan Suhu Awal</th>
                <th>Besaran Suhu</th>
                <th>Satuan Suhu Tujuan</th>
                <th>Hasil Konversi Suhu</th>
            </tr>
            <?php
            require_once('KonversiSuhu.php');

            // Berisi Objek KonveksiSuhu
            $dataKonversiSuhu1 = new KonversiSuhu("Celcius", 22, "Fahrenheit");
            $dataKonversiSuhu2 = new KonversiSuhu("Fahrenheit", 90, "Celcius");
            $dataKonversiSuhu3 = new KonversiSuhu("Celcius", 21, "Rheamur");
            $dataKonversiSuhu4 = new KonversiSuhu("Rheamur", 30, "Celcius");
            $dataKonversiSuhu5 = new KonversiSuhu("Celcius", 18, "Fahrenheit");
            $dataKonversiSuhu6 = new KonversiSuhu("Celcius", 28, "Rheamur");
            $dataKonversiSuhu7 = new KonversiSuhu("Fahrenheit", 120, "Celcius");
            $dataKonversiSuhu8 = new KonversiSuhu("Rheamur", 50, "Celcius");

            // Pemanggilan fungsi cetakHasil untuk objek di atas
            $dataKonversiSuhu1->cetakHasil();
            $dataKonversiSuhu2->cetakHasil();
            $dataKonversiSuhu3->cetakHasil();
            $dataKonversiSuhu4->cetakHasil();
            $dataKonversiSuhu5->cetakHasil();
            $dataKonversiSuhu6->cetakHasil();
            $dataKonversiSuhu7->cetakHasil();
            $dataKonversiSuhu8->cetakHasil();
            ?>
        </table>
    </div>
</body>
</html>
