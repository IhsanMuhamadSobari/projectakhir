<?php
    include "../database/connection.php";
    $id = $_GET['id_film'];
    $sql = mysqli_query($conn, "SELECT * FROM film where id_film = $id");
    $data = mysqli_fetch_array($sql);
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
                            <a class="nav-link" href="film.php">Film</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../cinema/cinema.php">Cinema</a>
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
                    <h2>Edit Film</h2>
                </div>
                <div class="data">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="text-end">
                                <a href="film.php" class="btn btn-warning">
                                    Kembali
                                </a>
                            </div>
                            <form class="form-container" action="proses.php" method="POST"
                                enctype="multipart/form-data">
                                <div class="mb-2">
                                    <input type="text" class="form-control" hidden id="id" name="id_film"
                                        value="<?= $data['id_film'] ?>" placeholder="Masukkan id">
                                    <input type="file" class="form-control" hidden id="id" name="gambarLama"
                                        value="<?= $data['gambar'] ?>" placeholder="Masukkan id">
                                </div>
                                <div class="mb-2">
                                    <label for="gambar" class="form-label">Gambar : </label><br>
                                    <img src="../assets/img/<?= $data['gambar'] ?>" width="100" alt=""
                                        class="img-fluid mb-2">
                                    <input type="file" class="form-control" id="gambar" name="gambar"
                                        placeholder="Masukkan Gambar" />
                                </div>
                                <div class="mb-2">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Masukkan Judul" value="<?= $data['judul'] ?>" />
                                </div>
                                <div class="mb-2">
                                    <label for="tahun_rilis" class="form-label">Tahun Rilis</label>
                                    <input type="text" class="form-control" id="tahun_rilis" name="tahun_rilis"
                                        placeholder="Masukkan Tahun Rilis" value="<?= $data['tahun_rilis'] ?>" />
                                </div>
                                <div class="mb-2">
                                    <label for="rating" class="form-label">Rating</label>
                                    <input type="text" class="form-control" id="rating" name="rating"
                                        placeholder="Masukkan rating" value="<?= $data['rating'] ?>" />
                                </div>
                                <div class="mb-2">
                                    <label for="genre" class="form-label">Genre</label>
                                    <select class="form-select" name="genre" id="genre"
                                        aria-label="Default select example">
                                        <option <?php if( $data['genre']=='action'){echo "selected"; } ?>
                                            value='action'>Action</option>
                                        <option <?php if( $data['genre']=='horor'){echo "selected"; } ?> value='horor'>
                                            Horor</option>
                                        <option <?php if( $data['genre']=='animation'){echo "selected"; } ?>
                                            value='animation'>Animation</option>
                                        <option <?php if( $data['genre']=='romance'){echo "selected"; } ?>
                                            value='romance'>Romance</option>
                                        <option <?php if( $data['genre']=='comedy'){echo "selected"; } ?>
                                            value='comedy'>Comedy</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="sinopsis" class="form-label">sinopsis</label>
                                    <textarea class="form-control" id="sinopsis" name="sinopsis"
                                        aria-label="With textarea"
                                        placeholder="Masukkan Sinopsis"><?= $data['sinopsis']?></textarea>
                                </div>
                                <div class="mb-2">
                                    <label for="aktor" class="form-label">Aktor</label>
                                    <input type="text" class="form-control" id="aktor" name="aktor"
                                        placeholder="Masukkan Aktor" value="<?= $data['aktor'] ?>" />
                                </div>
                                <div class="mb-2">
                                    <label for="sutradara" class="form-label">Sutradara</label>
                                    <input type="text" class="form-control" id="sutradara" name="sutradara"
                                        placeholder="Masukkan Sutradara" value="<?= $data['sutradara'] ?>" />
                                </div>
                                <div class="mb-2">
                                    <label for="penulis" class="form-label">Penulis</label>
                                    <input type="text" class="form-control" id="penulis" name="penulis"
                                        placeholder="Masukkan Penulis" value="<?= $data['penulis'] ?>" />
                                </div>
                                <div class="text-end mb-3">
                                    <button type="submit" class="btn btn-success btn-block" name="edit">
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