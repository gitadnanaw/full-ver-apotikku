<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="image/logo1.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Apotik.ku</title>
</head>

<body>
    <div>
        <header></header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <img onclick="window.location.href='/'" src="image/logo2.png" alt="logo-farmasi" style="width: 150px;">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/" style="margin-left: 10px;">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Obat</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/obat-add">Catat Obat</a></li>
                                <li><a class="dropdown-item" href="/obat-view">Data Obat</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Transaksi</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/jual-add">Catat Penjulan</a></li>
                                <li><a class="dropdown-item" href="/jual-view">Data Penjualan</a></li>
                            </ul>
                    </ul>
                    <div class="nama-nav" style="margin-top:10px;">
                            <p>UAS PAW (1462100077)</p>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <!--INI CONTENT-->
            <div class="box1">
                <div class="apel1">
                    <h1 style="color: white;">Sayangi tubuhmu, jangan vaksin setiap hari</h1>
                    <p>Vaksin setiap hari memberikan sejumlah manfaat yang tak ternilai. Dengan mengasihi tubuhnya, seseorang akan memiliki 
                    <br>kesadaran yang lebih tinggi tentang pentingnya menjaga kesehatan. Melalui vaksinasi harian, individu dapat meningkatkan 
                    <br>kekebalan tubuh mereka terhadap penyakit dan melindungi diri serta orang-orang di sekitarnya.</p>
                    <button onclick="location.href='https://wa.link/cdxna0'" type="button" class="btn btn-bm " style=" border-radius: 100px; background-color: white;">Klik Daftar</button>
                </div>
            </div>

            <div class="box2">
                <div class="nanas1">
                    <hr>
                    <h3>Promo dan Tips Sehat</h3>
                    <hr>
                    <img src="image/card1.png" alt="tips-1" width="400px">
                    <img src="image/card2.png" alt="tips-1" width="400px">
                    <img src="image/card3.png" alt="tips-1" width="400px">
                </div>
            </div>

            <br><br><br><br><br><br><br>
        </main>
        <footer>
            <p>Apotik.Ku &copy; Copyright 2023. All Right Reserved by <a href="https://wa.link/cdxna0">@AdnanWahabi-1462100077</a></p>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>