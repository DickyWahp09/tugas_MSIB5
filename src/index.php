<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Website Biodata</title>

    <meta name="description" content="Biodata Saya">
    <meta name="author" content="Dicky Wahyu Pratama">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            background-image: url('image/BG.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
        }
        .content-box {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }
        .content-box img {
            max-width: 200px;
            margin: 0 auto;
            display: block;
            margin-top: 20px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/pemandangan1.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="image/pemandangan2.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="image/pemandangan3.jpg" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="content-box text-left">
        <ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Kontak</a>
				</li>
			</ul>
            <img src="image/pasfoto.jpg" alt="Pas Foto" class="img-fluid rounded-circle">
            <h3>Biodata Diri Saya</h3>
            <?php
                $nama = "Dicky Wahyu Pratama";
                $nomor_hp = "085230921101";
                $alamat = "Ds.Woro, Kec.Kepohbaru, Kab.Bojonegoro, Jawa Timur";
                $jenis_kelamin = "Laki-laki";
                $umur = "19 Tahun";
                $keahlian = "Web Development";
                $email = "dickywahyu358@gmail.com";
            ?>
            <ul>
                <li><strong>Nama:</strong> <?php echo $nama; ?></li>
                <li><strong>Nomor HP:</strong> <?php echo $nomor_hp; ?></li>
                <li><strong>Alamat:</strong> <?php echo $alamat; ?></li>
                <li><strong>Jenis Kelamin:</strong> <?php echo $jenis_kelamin; ?></li>
                <li><strong>Umur:</strong> <?php echo $umur; ?></li>
                <li><strong>Keahlian:</strong> <?php echo $keahlian; ?></li>
                <li><strong>Email:</strong> <?php echo $email; ?></li>
            </ul>
            <h3>Tentang Saya</h3>
            <p>
            Saya adalah seorang individu yang penuh semangat dalam dunia teknologi dan pengembangan perangkat lunak. Nama saya Dicky Wahyu Pratama, dan saya biasanya dipanggil Dicky. Saya berasal dari Kabupaten Bojonegoro dan saat ini saya adalah seorang mahasiswa di salah satu Universitas Negeri yang terletak di Madura, yaitu Universitas Trunojoyo Madura. Saya memiliki minat yang besar dalam dunia teknologi informasi, terutama dalam pengembangan perangkat lunak. Saya memilih untuk mengejar pendidikan di bidang Pendidikan Informatika di Fakultas Ilmu Pendidikan. Saya memulai perjalahan akademik saya pada tahun 2021, dan saat ini saya telah mencapai semester 5. Selama perjalanan pendidikan saya, saya telah terlibat dalam berbagai proyek dan peluang pembelajaran tambahan. Salah satu pencapaian yang signifikan adalah partisipasi saya dalam program MBKM (Merdeka Belajar Kampus Merdeka) dengan memilih program Studi Independen di PT. Hendevane Indonesia. Di sana, saya mendalami kelas Full Stack Developer Web. Saya memiliki tekad untuk terus belajar dan berkembang dalam dunia teknologi. Saya percaya bahwa dunia digital memberikan banyak peluang dan tantangan yang menarik, dan saya siap untuk menghadapinya dengan pengetahuan dan keterampilan yang saya peroleh selama perjalanan pendidikan dan pengembangan saya. Saat ini, saya memiliki minat khusus dalam pengembangan web, pemrograman berorientasi objek, dan desain perangkat lunak. Selain itu, saya juga senang berbagi pengetahuan saya dengan orang lain dan berkolaborasi dalam proyek-proyek yang memerlukan pemikiran kreatif dan solusi inovatif. Saya sangat antusias untuk terus mengejar impian dan tujuan saya di dunia teknologi, dan saya percaya bahwa setiap langkah kecil dalam perjalanan ini akan membawa saya lebih dekat ke kesuksesan.
            </p>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
