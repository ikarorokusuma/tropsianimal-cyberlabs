<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/kontak.css') !!}">

    <title>Kontak</title>
</head>

<body>
    <!-- navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a class="navbar-brand ps-5 font-biasa" href="#">Tropsianimal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav font-biasa">
                    <li class="nav-item px-2">
                        <a class="text nav-link text-black" href="#">HOME</a>
                    </li>
                    <li class="nav-item px-2 ">
                        <a class="text nav-link text-black" href="tentang.blade.php">TENTANG</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="text nav-link text-black" href="galeri.blade.php">GALERI</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="text nav-link text-black" href="berita.blade.php">BERITA</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="text nav-link text-black" href="kontak.blade.php">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- banner image  -->
    <div class="banner-image w-100 vh-100 d-flex text-center text-xl-start">
        <div class="container">
            <div class="judul digital">
                <h1>Kontak</h1>
            </div>
        </div>
    </div>

    <!-- form kontak -->
    <div class="container">
        <div class="banner">
            <img src="{{ ('../../assets/images/home/1_qYUvh-EtES8dtgKiBRiLsA.png') }}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="form">
            <h2 class="digital mb-3">Kontak Kami</h2>
            <div class="d-flex justify-content-between">
                <div class="form-floating">
                    <textarea class="text-area form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 280px; width: 650px;"></textarea>
                    <label for="floatingTextarea2" class="isi text-muted font-biasa">Deskripsi</label>
                </div>
                <div class="kolom">
                    <div class="formulir form-floating mb-3">
                        <input type="email" class="text-area form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="isi font-biasa">Subject</label>
                    </div>
                    <div class="formulir form-floating mb-3">
                        <input type="email" class="text-area form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="isi font-biasa">Nama</label>
                    </div>
                    <div class="formulir form-floating mb-3">
                        <input type="email" class="text-area form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="isi font-biasa">Email</label>
                    </div>
                    <button type="button" class="tombol font-tipis btn btn-success mb-3 py-3">Kirim
                        <img class="ms-2" src="{{ ('../../assets/icon/send.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- konten menu -->
    <div class="container">
        <div class="opsi d-flex justify-content-around mt-5">
            <div class="menu">
                <div class="paw">
                    <img style="width: 20px;" src="{{ ('../../assets/icon/mail.svg') }}" alt="">
                </div>
                <h6 class="digital">Email</h6>
                <p class="text font-biasa text-muted">tropsianimal@gmail.com</p>
            </div>
            <div class="menu">
                <div class="paw">
                    <img style="width: 20px;" src="{{ ('../../assets/icon/phone.svg') }}" alt="">
                </div>
                <h6 class="digital">Phone</h6>
                <p class="text font-biasa text-muted">+62 812 3456 7890</p>
            </div>
            <div class="menu">
                <div class="paw">
                    <img style="width: 20px;" src="{{ ('../../assets/icon/map-pin.svg') }}" alt="">
                </div>
                <h6 class="digital">Location</h6>
                <p class="text font-biasa text-muted">Kota Bandung, Jawa Barat<br> Indonesia</p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="d-flex justify-content-around">
                <div class="about">
                    <h5 class="digital mb-3">Tropsianimal</h5>
                    <p class="font-biasa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aperiam iure aut error cum sint totam repellendus qui consequatur quo? Pariatur, inventore corporis ab sint error maxime asperiores cumque quasi.</p>
                    <img src="{{ ('../../assets/images/home/001-facebook.png') }}" alt="">
                    <img src="{{ ('../../assets/images/home/002-twitter.png') }}" alt="">
                </div>
                <div class="link font-biasa">
                    <h6 class="mb-3 fw-bold">Useful links</h6>
                    <p>Blog</p>
                    <p>Hewan</p>
                    <p>Galeri</p>
                    <p>Testimonial</p>
                </div>
                <div class="privacy font-biasa">
                    <h6 class="mb-3 fw-bold">Privacy</h6>
                    <p>Karir</p>
                    <p>Tentang Kami</p>
                    <p>Kontak Kami</p>
                    <p>Servis</p>
                </div>
                <div class="contact font-biasa">
                    <h6 class="mb-3 fw-bold">Contact Info</h6>
                    <p>
                        <img src="{{ ('../../assets/icon/mail.svg') }}" alt="">
                        tropsianimal@gmail.com
                    </p>
                    <p>
                        <img src="{{ ('../../assets/icon/phone.svg') }}" alt="">
                        +62 812 3456 7890
                    </p>
                    <p>
                        <img src="{{ ('../../assets/icon/map-pin.svg') }}" alt="">
                        Kota Bandung, Jawa Barat
                    </p>
                </div>
            </div>
            <p class="copyright text-muted font-biasa">
                Copyright 2020 All right reserved
            </p>
        </div>
    </div>

    <!-- javascript -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>

</body>

</html>