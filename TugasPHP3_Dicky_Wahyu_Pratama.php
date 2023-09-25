<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            background-image: url('image/BG.jpg');
            background-size: cover;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tfoot {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Data mahasiswa dan nilai
            $mahasiswa = [
                ["Dicky Wahyu Pratama", 95],
                ["Nina Nariyono Putri", 85],
                ["Muhammad Risky", 55],
                ["Iksan Dwi Rahmawan", 90],
                ["Muhammad Zainuri Hardianto", 70],
                ["Vika Dwi", 65],
                ["Itarani", 80],
                ["Basori", 40],
                ["Wasiul Akmal", 45],
                ["Ahmad Jundi", 55],
                ["Merry Dian K", 90],
                ["Puspita", 65]
            ];

            // Inisialisasi variabel agregat
            $totalNilai = 0;
            $nilaiTertinggi = 0;
            $nilaiTerendah = 100;

            // Nomor urutan
            $nomorUrutan = 1;

            foreach ($mahasiswa as $data) {
                $nama = $data[0];
                $nilai = $data[1];

                // Keterangan (Ternary)
                $keterangan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";

                // Grade (If Multi Kondisi)
                if ($nilai >= 85) {
                    $grade = 'A';
                } elseif ($nilai >= 70) {
                    $grade = 'B';
                } elseif ($nilai >= 60) {
                    $grade = 'C';
                } elseif ($nilai >= 50) {
                    $grade = 'D';
                } else {
                    $grade = 'E';
                }

                // Predikat (Switch Case)
                switch ($grade) {
                    case 'A':
                        $predikat = 'Sangat Baik';
                        break;
                    case 'B':
                        $predikat = 'Baik';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    case 'E':
                        $predikat = 'Sangat Kurang';
                        break;
                    default:
                        $predikat = '-';
                        break;
                }

                // Agregat nilai
                $totalNilai += $nilai;
                if ($nilai > $nilaiTertinggi) {
                    $nilaiTertinggi = $nilai;
                }
                if ($nilai < $nilaiTerendah) {
                    $nilaiTerendah = $nilai;
                }

                echo "<tr>
                        <td>$nomorUrutan</td>
                        <td>$nama</td>
                        <td>$nilai</td>
                        <td>$keterangan</td>
                        <td>$grade</td>
                        <td>$predikat</td>
                    </tr>";
                
                $nomorUrutan++;
            }

            // Hitung rata-rata dan jumlah mahasiswa
            $jumlahMahasiswa = count($mahasiswa);
            $rataRataNilai = ($totalNilai > 0) ? $totalNilai / $jumlahMahasiswa : 0;

            echo "</tbody>
                <tfoot>
                    <tr>
                        <td colspan='1'><!-- Kolom kosong untuk pemisahan --></td>
                        <td colspan='1'>Nilai Tertinggi: $nilaiTertinggi</td>
                        <td colspan='1'>Nilai Terendah: $nilaiTerendah</td>
                        <td colspan='1'>Rata-rata: " . number_format($rataRataNilai, 2) . "</td>
                        <td colspan='1'>Jumlah Mahasiswa: $jumlahMahasiswa</td>
                        <td colspan='1'>Jumlah Keseluruhan Nilai: $totalNilai</td>
                    </tr>
                </tfoot>
            </table>";
            ?>
        </tbody>
    </table>
</body>
</html>
