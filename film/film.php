<?php
  include "../database/connection.php";
  $koneksi = mysqli_query($conn, "SELECT * FROM film"); 
  
  $datas = [];
  while($row = mysqli_fetch_assoc($koneksi)){
    $datas[] = $row;
  }
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
                    <h2>Film</h2>
                    <?php
              if (isset($_GET['message'])) {
                  $message = $_GET['message'];
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                  echo  $message;
                  echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                  echo '</div>';
              }
              ?>
                </div>
                <div class="data">
                    <div class="text-end">
                        <a href="add_film.php" class="btn btn-success">
                            Tambah Data
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Tahun Rilis</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Sinopsis</th>
                                    <th scope="col">Aktor</th>
                                    <th scope="col">Sturadara</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1; foreach ($datas as $data) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><img src="<?= "../assets/img/".$data['gambar']; ?> " width="100"></td>
                                    <td><?= $data['judul']; ?></td>
                                    <td><?= $data['tahun_rilis']; ?></td>
                                    <td><?= $data['rating']; ?></td>
                                    <td><?= $data['genre']; ?></td>
                                    <td><?= $data['sinopsis']; ?></td>
                                    <td><?= $data['aktor']; ?></td>
                                    <td><?= $data['sutradara']; ?></td>
                                    <td><?= $data['penulis']; ?></td>
                                    <td>
                                        <a href="edit_film.php?id_film=<?=$data['id_film']?>"
                                            class="btn btn-warning">Update</a>
                                        <a href="proses.php?id_film=<?= $data['id_film']?>"
                                            onclick="return confirm('yakin ingin dihapus?')"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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