<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/tentang.css') !!}">

    <title>Tentang</title>
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
                <h1>Tentang Kami</h1>
            </div>
        </div>
    </div>

    <!-- konten tentang -->
    <div class="container">
        <div class="tentang d-flex justify-content-evenly">
            <div class="subjudul-htm kiri pe-5 mt-5 me-5 ">
                <h2 class="digital mb-3">Tropsianimal</h2>
                <p class="text tebal font-biasa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deserunt repudiandae officiis soluta autem molestiae nobis sunt veniam voluptas ut cupiditate labore quos, nemo rerum alias explicabo eligendi exercitationem.</p>
                <p class="text kecil font-biasa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium non quasi sed rerum dicta, facere culpa delectus laborum enim aspernatur neque. Similique architecto, expedita unde id quod consequuntur pariatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur ratione illo quidem dolores praesentium architecto recusandae quaerat molestias deserunt autem inventore, illum eius ex rem, optio veniam quas temporibus? </p>
            </div>
            <div class="kanan">
                <img class="p-1" src="{{ ('../../assets/images/home/kyaw-tun-_YIX48_4hgs-unsplash.png') }}" alt="">
                <img class="p-1" src="{{ ('../../assets/images/home/dawn-armfield-84n7c9cLEKM-unsplash.png') }}" alt="">
                <img class="p-1" src="{{ ('../../assets/images/home/smit-patel-dGMcpbzcq1I-unsplash.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="subjudul-htm kiri pe-5 mt-5 me-5">
            <h2 class="digital mb-3">Visi</h2>
            <p class="text font-biasa">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque suscipit recusandae deleniti. Dicta molestiae sunt fugit magni earum vitae voluptates quod sit illum consectetur quia suscipit eligendi, delectus velit voluptatem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quaerat expedita laborum saepe autem tenetur hic non magni, delectus culpa modi optio impedit, illum placeat. Officia, reiciendis! Autem, debitis aut!</p>
        </div>
        <div class="subjudul-htm kiri pe-5 mt-5 me-5">
            <h2 class="digital mb-3">Misi</h2>
            <p class="text font-biasa">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque suscipit recusandae deleniti. Dicta molestiae sunt fugit magni earum vitae voluptates quod sit illum consectetur quia suscipit eligendi, delectus velit voluptatem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quaerat expedita laborum saepe autem tenetur hic non magni, delectus culpa modi optio impedit, illum placeat. Officia, reiciendis! Autem, debitis aut!</p>
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