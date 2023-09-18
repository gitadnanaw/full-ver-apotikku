<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('image/logo1.png') }}">
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Apotik.ku</title>
</head>

<body style="background-color: #f4f4f4;">
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <img onclick="window.location.href='/'" src="{{ asset('image/logo2.png') }}" alt="logo-farmasi" style="width: 150px;">
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
                    <h4 style="margin-top: 120px; text-align:center;">EDIT DATA OBAT</h4>
                </div>
                <form action="/edit">
                        <!-- hidden id -->
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $data->id }}"
                                aria-describedby="emailHelp">
                        <!-- end hidden id -->
                        <!-- form text field -->
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Nama Obat</label>
                            <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ $data->nama_obat }}" style="width: 500px;"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">ex.paramex</div>
                        </div>
                        <!-- end form text field -->
                        <!-- form text field -->
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="{{ $data->harga }}" style="width: 500px;"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">ex.10,000</div>
                        </div>
                        <!-- end form text field -->
                        
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