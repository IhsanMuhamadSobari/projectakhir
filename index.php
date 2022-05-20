<?php
  include "database/connection.php";
  $koneksi = mysqli_query($conn, "SELECT * FROM film"); 
  
  $datas = [];
  while($row = mysqli_fetch_assoc($koneksi)){
    $datas[] = $row;
  }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">

    <title>DutaFilm</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo.svg" class="img-fluid pb-2 px-2" width="122"
                    alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#carouselExampleInterval">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#genre">Genre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#movie">Movies</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- EndNavbar -->


    <!-- Carousel -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/slider/slider1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="row ms-lg-5 me-lg-5 align-self-center  justify-content-between  ">
                    <div class="col-sm-12 col-lg-6">
                        <h2>KKN DI DESA PENARI (UNCUT)</h2>
                        <p>KKN Di Desa Penari diadaptasi dari salah satu cerita horror yang telah
                            viral di
                            tahun 2019 melalui Twitter, menurut sang
                            penulis, cerita ini diambil dari sebuah kisah nyata sekelompok mahasiswa
                            yang
                            tengah melakukan program KKN (Kuliah Kerja
                            Nyata) di Desa Penari. Tak berjalan mulus, serentetan pengalaman horror
                            pun
                            menghantui mereka hingga program KKN
                            tersebut berakhir tragis.
                        </p>
                        <a href="detail-film1.html" class="watch-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                    <div class="col-sm-12 col-lg-5 ">
                        <img src="img/poster/poster-1.png" alt=""
                            class="img-fluid rounded d-none d-lg-block" />
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/slider/slider2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="row ms-lg-5 me-lg-5 align-self-center  justify-content-between  ">
                    <div class="col-sm-12 col-lg-6">
                        <h2>DOCTOR STRANGE IN THE MULTIVERSE OF MADNESS</h2>
                        <p>Multiverse of Madness adalah sebuah sekuel dari film Doctor Strange
                            pertama yang
                            tayang 2016 silam sekaligus kelanjutan
                            dari film Spider-Man: No Way Home yang hadir bulan Desember lalu. Kali
                            ini,
                            fokus utama cerita kembali berpindah pada
                            Stephen Strange; si dokter bedah yang mendapatkan kekuatan magis setelah
                            kecelakaan.
                        </p>
                        <a href="detail-film2.html" class="watch-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                    <div class="col-sm-12 col-lg-5">
                        <img src="img/poster/poster-2.png" alt=""
                            class="img-fluid rounded d-none d-lg-block" />
                    </div>
                </div>
            </div>
            
          </div>
          <div class="carousel-item">
            <img src="img/slider/slider3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="row ms-lg-5 me-lg-5 align-self-center  justify-content-between  ">
                    <div class="col-sm-12 col-lg-6">
                        <h2>GARA-GARA WARISAN</h2>
                        <p>Tiga bersaudara yang tidak pernah akur terpaksa bersaing memperebutkan
                            warisan
                            berupa sebuah
                            guest house milik Dahlan,
                            ayah mereka. Adam, anak sulung yang menyalahkan sikap keras ayahnya
                            untuk
                            kegagalan-kegagalan hidupnya. Laras, anak
                            tengah yang berjiwa independen dan idealis. Dan Dicky, anak bungsu
                            kesayangan
                            ayahnya yang
                            dimanja sejak kecil dan
                            tumbuh sebagai pemuda yang bengal. Siapakah yang akan menjadi ahli waris
                            pilihan?
                        </p>
                        <a href="detail-film3.html" class="watch-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                    <div class="col-sm-12 col-lg-5 ">
                        <img src="img/poster/poster-3.png" alt=""
                            class="img-fluid rounded d-none d-lg-block" />
                    </div>
                </div>
            </div>
            
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- EndCarousel -->

    <!-- Genre -->
    <div id="genre">
        <div class="genre wrapper">
            <div class="container">
                <div class="top-alert">
                    <h2 class="ms-3">Genre</h2>
                </div>
                <div class="row justify-content-between mt-3">
                    <div class="col-lg-2 col-md-6 mt-3">
                        <img src="img/genre/action.png" class="card-img-top" alt="...">
                    </div>
                    <div class="col-lg-2 col-md-6 mt-3">
                        <img src="img/genre/horor.png" class="card-img-top" alt="...">
                    </div>
                    <div class="col-lg-2 col-md-6 mt-3">
                        <img src="img/genre/family.png" class="card-img-top" alt="...">
                    </div>
                    <div class="col-lg-2 col-md-6 mt-3">
                        <img src="img/genre/romance.png" class="card-img-top" alt="...">
                    </div>
                    <div class="col-lg-2 col-md-6 mt-3">
                        <img src="img/genre/comedy.png" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- EndGenre -->

    <!-- Movie -->
    <section id="movie">
        <div class="movie">
            <div class="container">
                <div class="top-alert">
                    <h2 class="ms-3">Movies</h2>
                </div>
                <div class="row justify-content-between mt-3">
                    <?php foreach ($datas as $data) : ?>
                    <div class="col-lg-2 col-md-4 mt-3">
                        <a href="detail-film.php?id_film=<?=$data['id_film']?>">
                            <img src="assets/img/<?= $data['gambar'];?>" class="card-img-top" alt="...">
                            <p class="mt-2"><small class="fa fa-star text-warning me-1"></small><?= $data['rating'];?>
                            </p>
                            <h4><?= $data['judul'];?></h4>
                        </a>
                    </div>
                    <?php endforeach; ?>
                    <div class="col-lg-2 col-md-4 mt-3">
                        <a href="detail-film1.html">
                            <img src="img/poster/poster-1.png" class="card-img-top" alt="...">
                            <p class="mt-2"><small class="fa fa-star text-warning me-1"></small>8.9 </p>
                            <h4>KKN di Desa Penari (Uncut)</h4>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 mt-3">
                        <a href="detail-film2.html">
                            <img src="img/poster/poster-2.png" class="card-img-top" alt="...">
                            <p class="mt-2"><small class="fa fa-star text-warning me-1"></small>8.9 </p>
                            <h4>Doctor Strange in the Multiverse of Madness</h4>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 mt-3">
                        <a href="detail-film3.html">
                            <img src="img/poster/poster-3.png" class="card-img-top" alt="...">
                            <p class="mt-2"><small class="fa fa-star text-warning me-1"></small>8.9 </p>
                            <h4>Gara-Gara Warisan</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- EndMovie -->

    <!-- Footer -->
    <section id="footer">
        <div class="footer pt-5">
            <div class="container">
                <div class="row justify-content-evenly align-self-center">
                    <div class="col-lg-4 col-md-6 ">
                        <img src="img/logo.svg" class="img-fluid mt-5 w-50" alt="" />
                    </div>
                    <div class="col-lg-2 d-none d-lg-block garis_verikal"></div>
                    <div class="col-lg-4 col-md-6">
                        <p class="footer_text">
                            <a href="#carouselExampleInterval" class="footer_social_media_icon">
                                Home</a><br><br>
                            <a href="about-us.html" class="footer_social_media_icon">
                                About Us</a><br><br>
                            <a href="contact-us.html" class="footer_social_media_icon">
                                Contact Us</a>
                        </p>
                    </div>

                </div>
                <hr>
                <div class="col-12 text-center pb-2">
                    <span>DutaFilm &copy; 2022. All rights reserved.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- EndFooter -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>
</body>

</html>