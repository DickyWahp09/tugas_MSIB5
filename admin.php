<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Dicky Wahyu Pratama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('image/BG.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
        }

        .profile-pic {
            max-width: 200px;
            display: block;
            margin: 0 auto;
            border-radius: 50%;
        }

        .icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .info {
            margin-top: 20px;
        }

        .logout-menu {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .logout-icon {
            font-size: 24px;
            color: red; 
        }

        .confirmation-dialog {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 2;
            align-items: center;
            justify-content: center;
        }

        .confirmation-box {
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            text-align: center;
        }

        .confirmation-text {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .confirmation-button {
            padding: 10px 20px;
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }

        .cancel-button {
            padding: 10px 20px;
            background-color: #ccc;
            color: black;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="logout-menu" id="logoutMenu">
    <img class="logout-icon" src="image/icon_keluar.png" alt="Keluar" onclick="showConfirmationDialog()">
    </div>

    <div class="header">
        <h1>Biodata Dicky Wahyu Pratama</h1>
    </div>

    <div class="container">
        <img class="profile-pic" src="image/pas_foto.jpg" alt="Foto Profil">

        <div class="info">
            <p><span class="icon">&#128100;</span>Nama: Dicky Wahyu Pratama</p>
            <p><span class="icon">&#128222;</span>Nomor HP: 085230921101</p>
            <p><span class="icon">&#127968;</span>Alamat: Ds.Woro, Kec.Kepohbaru, Kab.Bojonegoro, Jawa Timur</p>
            <p><span class="icon">&#9794;</span>Jenis Kelamin: Laki-laki</p>
            <p><span class="icon">&#128197;</span>Umur: 19</p>
            <p><span class="icon">&#9881;</span>Keahlian: Web Development</p>
            <p><span class="icon">&#9993;</span>Email: dickywahyu358@gmail.com</p>
        </div>

        <div class="confirmation-dialog" id="confirmationDialog">
            <div class="confirmation-box">
                <p class="confirmation-text">Apakah Anda yakin ingin keluar?</p>
                <button class="confirmation-button" onclick="logout()">Iya</button>
                <button class="cancel-button" onclick="cancelLogout()">Batal</button>
            </div>
        </div>
    </div>

    <script>
        function showConfirmationDialog() {
            var dialog = document.getElementById("confirmationDialog");
            dialog.style.display = "flex";
        }

        function cancelLogout() {
            var dialog = document.getElementById("confirmationDialog");
            dialog.style.display = "none";
        }

        function logout() {
            window.location.href = "logout.php";
        }
    </script>
</body>
</html>
