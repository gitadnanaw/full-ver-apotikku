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

<body style="background-color: #f4f4f4;">
    <div>
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
            <div class="box-mk1">
                <div class="box-mk2">
                    <h4 style="margin-top: 120px; text-align:center;">INPUT PENJUALAN</h4>
                </div>
                <form action="/add2">
                    <!-- form text field -->
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Nama Pembeli</label>
                        <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" aria-describedby="emailHelp" style="width: 500px;">
                        <div id="emailHelp" class="form-text">ex.Adnan Wahabi</div>
                    </div>
                    <!-- end form text field -->
                    <!-- form text field -->
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" aria-describedby="emailHelp" style="width: 500px;">
                        <div id="emailHelp" class="form-text">ex.082345678</div>
                    </div>
                    <!-- end form text field -->
                    <!-- form text field -->
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Nama Obat</label>
                        <div class="mb-3">
                            <select class="form-selected" aria-label="Default select example" name="id_layanan">
                                <option selected>silahkan pilih menu</option>
                                @foreach ($datas as $dt)
                                <option value={{$dt->id}}>{{$dt->nama_obat}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
                <div class="box-mk3">
                            <p style="text-align: center; margin-top:15px; font-size:small; color: white;">Apotik.Ku &copy; Copyright 2023. All Right Reserved by <a href="https://wa.link/cdxna0">@AdnanWahabi-1462100077</a></p>
                        </div>
            </div>
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>