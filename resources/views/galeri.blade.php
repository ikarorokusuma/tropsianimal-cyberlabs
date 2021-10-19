<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/galeri.css') !!}">

    <title>Galeri</title>
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
                        <a class="text nav-link text-black" href="#">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- banner image  -->
    <div class="banner-image w-100 vh-100 d-flex text-center text-xl-start">
        <div class="container">
            <div class="judul digital">
                <h1>Galeri</h1>
            </div>
        </div>
    </div>

    <!-- konten galeri -->
    <div class="container">
        <div class="banner">
            <div class="square-left">
                <img src="{{ ('../../assets/icon/arrow-right (1).svg') }}" alt="">
            </div>
            <div class="square-right">
                <img src="{{ ('../../assets/icon/arrow-right (1).svg') }}" alt="">
            </div>
            <img src="{{ ('../../assets/images/home/Group 77.png') }}" alt="">
        </div>
        <div class="galeri d-flex justify-content-center mt-5">
            <img class="px-1" src="{{ ('../../assets/images/home/mathew-schwartz-OjQgsR1oyEw-unsplash.png') }}" alt="">
            <img class="px-1" src="{{ ('../../assets/images/home/vladimir-kudinov-vmlJcey6HEU-unsplash.png') }}" alt="">
            <img class="px-1" src="{{ ('../../assets/images/home/alessandro-desantis-9_9hzZVjV8s-unsplash.png') }}" alt="">
            <img class="px-1" src="{{ ('../../assets/images/home/david-clode-0lwa8Dprrzs-unsplash.png') }}" alt="">
        </div>
        <div class="galeri d-flex justify-content-center mt-1">
            <img class="p-1" src="{{ ('../../assets/images/home/david-clode-AtCChdVhAmA-unsplash.png') }}" alt="">
            <img class="p-1" src="{{ ('../../assets/images/home/dawn-armfield-84n7c9cLEKM-unsplash.png') }}" alt="">
            <img class="p-1" src="{{ ('../../assets/images/home/TERUMBU-KARANG (1).png') }}" alt="">
            <img class="p-1" src="{{ ('../../assets/images/home/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') }}" alt="">
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