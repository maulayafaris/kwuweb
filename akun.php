<?php
    session_start();
    include "config.php";
    if (isset($_SESSION["email"])) {
        $email = $_SESSION["email"];
        $q = $con->query("SELECT * FROM akun WHERE email='$email'");
        $data = $q->fetch_array();
        $nama = $data["nama"];
        $jenis_kelamin = $data["jenis_kelamin"];
        $alamat = $data["alamat"];
        $email = $data["email"];
        $notelp = $data["notelp"];
        $saldo = $data["saldo"];
        $desc = $data["description"];
        $avatar = $data["avatar"];
    } else {
        echo "<script>alert('Login terlebih dahulu!');window.location.href='login.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="bootstrap/css/akun.css">
    <link rel="stylesheet" href="bootstrap/css/univstyle.css">
    <link rel="stylesheet" href="bootstrap/css/allmobileview.css">

    <title>Account Page &mdash; namanya</title>
</head>
<body>
    <?php include "static/header.php" ?>


    <!-- 
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Puma Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="akun.php"><span class="sr-only">(current)</span>Account</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    -->
    
    <div class="container mt-4">
        <button class="btn btn-success" onclick="window.location.href = 'edit-profil.php'">Edit Profile</button>
    </div>
    
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-4">
                <!-- data cardnya diambil dari database -->
                <div class="card">
                    <div class="card-header img-header">
                        <img src="<?php if($avatar == null) { echo 'img/default-avatar.png'; } else { echo $avatar; }?>" alt="profil" class="img-responsive img-fluid img-profile">
                    </div>
                    <div class="card-body">
                        <div class="nama">Nama : <?php echo $nama?></div>
                        <div class="sex">Jenis Kelamin : <?php echo $jenis_kelamin; ?></div>
                        <div class="email">Email : <?php echo $email; ?></div>
                        <div class="alamat">Alamat : <?php echo $alamat; ?></div>
                        <div class="telp">Nomor HP : <?php echo $notelp; ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <!-- data diambil dari bentuk angka di convert jadi ada angka dan huruf bulan -->
                        <div class="bergabung"><p class="bergabung">Bergabung Sejak : 31 july 2012</p></div>
                        <div class="info">Info</div>
                    </div>
                    <div class="card-body">
                        <div class="saldo">
                            <label id="title-saldo">Saldo</label>
                            <div class="total-saldo">
                                <?php
                                    if ($saldo <= 0) {
                                        echo "Rp.0";
                                    } else {
                                        echo 'Rp.'.$saldo;
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="description pt-4">
                            <label id="title-desc">Description</label>
                            <div class="isi-description"><?php echo $desc; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include "static/footer.php"; ?>
    

    <!-- BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>