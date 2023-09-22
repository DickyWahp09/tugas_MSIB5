<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan Perusahaan Dicky Company</title>
    <style>
        body {
            background-image: url('image/BG.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        button[type="submit"] {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Karyawan CV.Dicky Company</h1>
        <form action="" method="post">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required><br><br>

            <label for="pekerjaan">Pekerjaan:</label>
            <select name="pekerjaan" required>
                <option value="">Pilih Pekerjaan</option>
                <option value="Akuntan">Akuntan</option>
                <option value="Analis keamanan informasi">Analis keamanan informasi</option>
                <option value="Analis marketing">Analis marketing</option>
                <option value="Data scientist">Data scientist</option>
                <option value="Insinyur">Insinyur</option>
                <option value="Konsultan keuangan">Konsultan keuangan</option>
                <option value="HRD">HRD</option>
                <option value="Industry kreatif">Industry kreatif</option>
                <option value="Tenaga medis">Tenaga medis</option>
                <option value="Pengacara">Pengacara</option>
            </select><br><br>

            <label>Hobby:</label><br>
            <input type="radio" name="hobby" value="Menulis"> Menulis<br>
            <input type="radio" name="hobby" value="Fotografi"> Fotografi<br>
            <input type="radio" name="hobby" value="Memasak"> Memasak<br>
            <input type="radio" name="hobby" value="Musik"> Musik<br>
            <input type="radio" name="hobby" value="Bermain Game"> Bermain Game<br>
            <input type="radio" name="hobby" value="Menggambar atau Desain"> Menggambar atau Desain<br>
            <input type="radio" name="hobby" value="Olahraga"> Olahraga<br>
            <input type="radio" name="hobby" value="Memancing"> Memancing<br>
            <input type="radio" name="hobby" value="Sepakbola"> Sepakbola<br>
            <input type="radio" name="hobby" value="Voly"> Voly<br><br>

            <button type="submit" name="simpan">Simpan</button>
        </form>

        <?php
        if (isset($_POST['simpan'])) {
            $nama = $_POST['nama'];
            $pekerjaan = $_POST['pekerjaan'];
            $hobby = $_POST['hobby'];

            echo "<h2>Data Diri Anda:</h2>";
            echo "<table>";
            echo "<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>";
            echo "<tr><td>$nama</td><td>$pekerjaan</td><td>$hobby</td></tr>";
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
