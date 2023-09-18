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
            <div class="box-form1">
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">DAFTAR OBAT</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Data Obat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Merk Obat</th>
                                            <th>Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 1; ?>
                                        @foreach ($data as $index => $dt)
                                        <tr>
                                            <td>{{ $index + $data->firstItem() }}</td>
                                            <td>{{ $dt->nama_obat }}</td>
                                            <td>{{ $dt->harga }}</td>
                                            <td>
                                                <a href="/obat-edit/{{ $dt->id }}" class="btn btn-warning">Edit</a>
                                                <a href="/delete/{{ $dt->id }}" class="btn btn-danger m-1">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $counter++; ?>
                                        @endforeach

                                    </tbody>
                                    <a href="/obat-add" class="btn btn-success">Tambah</a>
                                    <div class="mb-3 mt-3">
                                        <form action="/obat-view" method="GET">
                                            <div class="col-2">
                                                <input type="search" class="form-control" id="search" name="search" placeholder="Search">
                                            </div>
                                        </form>

                                    </div>
                                    <h2></h2>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="box-form2">
                        <ul class="pagination" style="margin-top: 20px; margin-left: 20px;">
                            <li class="page-item">
                                <a style="color: #00a136;" class="page-link" href="{{ $data->previousPageUrl() }}">Previous</a>
                            </li>
                            <li class="page-item">
                                <a style="color: #00a136;" class="page-link" href="{{ $data->nextPageUrl() }}">Next</a>
                            </li>
                        </ul>
                    </div>
                    <div class="box-form3">
                        <p style="text-align: center; margin-top:15px; font-size:small; color: white;">Apotik.Ku &copy; Copyright 2023. All Right Reserved by <a href="https://wa.link/cdxna0">@AdnanWahabi-1462100077</a></p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>