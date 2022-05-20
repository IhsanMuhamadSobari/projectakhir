<?php
include "../database/connection.php";
if(isset($_POST['submit'])){
    
    $id_film = $_POST['id_film'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tiket_sun_mon = $_POST['tiket_sun_mon'];
    $tiket_sat_sun = $_POST['tiket_sat_sun'];

    $query = mysqli_query($conn, "insert into cinema set id_film = '$id_film', nama = '$nama', alamat = '$alamat', tiket_sun_mon = '$tiket_sun_mon', tiket_sat_sun = '$tiket_sat_sun'");



    if ($query) {
    $message = "Data berhasil ditambahkan!";
    $message = urlencode($message);
    header("Location:cinema.php?message={$message}");
    } else {
        $message = "Data gagal ditambahkan!";
        $message = urlencode($message);
        header("Location:cinema.php?message={$message}");
    }
}elseif (isset($_POST['edit'])) {

    $id_film = $_POST['id_film'];
    $gambarLama = $_POST['gambarLama'];

    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    }else{
    $gambar = upload();
        
    }

    $judul = $_POST['judul'];
    $tahun_rilis = $_POST['tahun_rilis'];
    $rating = $_POST['rating'];
    $genre = $_POST['genre'];
    $sinopsis = $_POST['sinopsis'];
    $aktor = $_POST['aktor'];
    $sutradara = $_POST['sutradara'];
    $penulis = $_POST['penulis'];
    // var_dump($_POST['edit']);
    // die;

    $query = mysqli_query($conn, "update film set id_film = '$id_film', gambar = '$gambar', judul = '$judul', tahun_rilis = '$tahun_rilis', rating = '$rating', genre = '$genre', sinopsis = '$sinopsis', aktor = '$aktor', sutradara = '$sutradara', penulis = '$penulis' where id_film = '$id_film'");

    if ($query) {
    $message = "Data berhasil diubah!";
    $message = urlencode($message);
    header("Location:film.php?message={$message}");
    } else {
        $message = "Data gagal diubah!";
        $message = urlencode($message);
        header("Location:film.php?message={$message}");
    }
}else if(isset($_GET['id_film'])){
    $id_film = $_GET['id_film'];
    $query = mysqli_query($conn, "delete from film where id_film=$id_film");
    if ($query) {
        $message = "Data berhasil dihapus!";
        $message = urlencode($message);
        header("Location:film.php?message={$message}");
        } else {
            $message = "Data gagal dihapus!";
            $message = urlencode($message);
            header("Location:film.php?message={$message}");
    }
}






// Function Upload Gambar
function upload()
    {
        $nameFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
        // Mengecek apakah file gambar yg di uplload
        $ekstensiGambarCek = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $nameFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar, $ekstensiGambarCek)){
            echo "<script>
                    alert('Anda Upload bukan gambar!');
                    </script>";
            return false;
        }

        if($ukuranFile > 10000000){
             echo "<script>
                    alert('Ukuran Gambar terlalu besar!');
                    </script>";
            return false;
        }

        move_uploaded_file($tmpName, '../assets/img/' . $nameFile);
        return $nameFile;
        
    }

?>