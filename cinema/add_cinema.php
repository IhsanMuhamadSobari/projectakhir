<?php
include "../database/connection.php";
$id_film = mysqli_query($conn, "SELECT * from film");           
// $data = mysqli_fetch_array($id_film)       
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="../assets/style.css" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous" />

        <title>Tugas-6</title>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img
                        src="https://img.icons8.com/external-flaticons-lineal-flat-icons/64/000000/external-campus-university-flaticons-lineal-flat-icons.png" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../film/film.php">Film</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cinema.php">Cinema</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- EndNavbar -->

        <!-- Content -->
        <section class="content">
            <div class="container">
                <div class="text-center">
                    <h2>Tambah Cinema</h2>
                </div>
                <div class="data">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="text-end">
                                <a href="cinema.php" class="btn btn-warning">
                                    Kembali
                                </a>
                            </div>
                            <form class="form-container" action="proses.php" method="POST"
                                enctype="multipart/form-data">
                                <div class="mb-2">
                                    <label for="judul" class="form-label">Judul</label>
                                    <select class="form-select" name="id_film" id="id_film"
                                        aria-label="Default select example">
                                        <option disabled selected>Pilih Judul</option>
                                        <?php foreach ($id_film as $data) : ?>
                                        <option value="<?= $data['id_film'] ?>"><?= $data['judul']?></option>
                                        <?php endforeach ; ?>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="nama" class="form-label">Nama Studio</label>
                                    <select class="form-select" name="nama" id="nama"
                                        aria-label="Default select example">
                                        <option disabled selected>Pilih Studio</option>
                                        <option value="Cinema XXI">Cinema XXI</option>
                                        <option value="CGV">CGV</option>
                                        <option value="Cinepolis">Cinepolis</option>
                                        <option value="Kota Cinema">Kota Cinema</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" aria-label="With textarea"
                                        placeholder="Masukkan alamat"></textarea>
                                </div>
                                <div class="mb-2">
                                    <label for="tiket_sun_mon" class="form-label">Tiket Sunday-Monday</label>
                                    <input type="number" class="form-control" id="tiket_sun_mon" name="tiket_sun_mon"
                                        placeholder="Masukkan Harga Tiket Sunday-Monday" />
                                </div>
                                <div class="mb-2">
                                    <label for="tiket_sat_sun" class="form-label">Tiket Saturday-Sunday</label>
                                    <input type="number" class="form-control" id="tiket_sat_sun" name="tiket_sat_sun"
                                        placeholder="Masukkan Harga Tiket Saturday-Sunday" />
                                </div>
                                <div class="text-end mb-3">
                                    <button type="submit" class="btn btn-success btn-block" name="submit">
                                        Tambah
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- EndContent -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>

    </html>
</body>

</html>