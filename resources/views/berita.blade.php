<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/berita.css') !!}">

    <title>Berita</title>
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
                <h1>Berita</h1>
            </div>
        </div>
    </div>

    <!-- konten tentang -->
    <div class="container">
        <div class="d-flex justify-content-evenly">
            <div class="kiri d-flex justify-content-evenly">
                <img class="img-gajah py-1" src="{{ ('../../assets/images/home/zoe-reeve-9hSejnboeTY-unsplash.png') }}" alt="">
                <div class="atas-bawah">
                    <img class="img-badak py-1" src="{{ ('../../assets/images/home/ronald-gijezen-7h06P9UKhYY-unsplash.png') }}" alt="">
                    <img class="img-hippo py-1" src="{{ ('../../assets/images/home/david-clode-AtCChdVhAmA-unsplash.png') }}" alt="">
                </div>
            </div>
            <div class="kiri subjudul-htm">
                <h2 class="digital">10 Hewan Herbivora<br> Yang Berbahaya</h2>
                <p class="text tebal font-biasa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deserunt repudiandae officiis soluta autem molestiae nobis sunt veniam voluptas ut cupiditate labore quos, nemo rerum alias explicabo eligendi exercitationem ex.</p>
                <p class="text kecil">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium non quasi sed rerum dicta, facere culpa delectus laborum enim aspernatur neque. Similique architecto, expedita unde id quod consequuntur pariatur?</p>
                <button type="button" class="tombol font-tipis btn btn-success px-4 py-2">baca selengkapnya
                    <img class="ms-2" src="{{ ('../../assets/icon/arrow-right (1).svg') }}" alt="">
                </button>
            </div>
        </div>
    </div>

    <!-- berita lainnya -->
    <div class="container">
        <div class="subjudul-htm">
            <h2 class="digital">Berita Lainnya</h2>
        </div>
    </div>

    <!-- konten berita -->
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <div class="kartu card" style="width: 20rem;">
                <img src="{{ ('../../assets/images/home/rick-l-037fCBgZB10-unsplash.png') }}" class="card-img-top" alt="harimau">
                <div class="card-body">
                    <h5 class="text card-title font-berita font-biasa fs-6 fw-bold">Apa Kabar Kebun Binatang<br> Saat Wabah Covid-19?</h5>
                    <p class="text card-text text-muted font-biasa">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="kartu card" style="width: 20rem;">
                <img src="{{ ('../../assets/images/home/hans-veth-o33FMDaXJS8-unsplash.png') }}" class="card-img-top" alt="harimau">
                <div class="card-body">
                    <h5 class="text card-title font-berita font-biasa fs-6 fw-bold">Anugerah Dari Hutan<br> Indonesia</h5>
                    <p class="text card-text text-muted font-biasa">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="kartu card" style="width: 20rem;">
                <img src="{{ ('../../assets/images/home/ronald-gijezen-7h06P9UKhYY-unsplash.png') }}" class="card-img-top" alt="harimau">
                <div class="card-body">
                    <h5 class="text card-title font-berita font-biasa fs-6 fw-bold">10 Hewan Herbivora<br> Yang Berbahaya</h5>
                    <p class="text card-text text-muted font-biasa">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="kartu card" style="width: 20rem;">
                <img src="{{ ('../../assets/images/home/smit-patel-dGMcpbzcq1I-unsplash.png') }}" class="card-img-top" alt="harimau">
                <div class="card-body">
                    <h5 class="text card-title font-berita font-biasa fs-6 fw-bold">4 Penyakit Yang Ditularkan<br> Hewan ke Manusia</h5>
                    <p class="text card-text text-muted font-biasa">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="kartu card" style="width: 20rem;">
                <img src="{{ ('../../assets/images/home/TERUMBU-KARANG (1).png') }}" class="card-img-top" alt="harimau">
                <div class="card-body">
                    <h5 class="text card-title font-berita font-biasa fs-6 fw-bold">Terumbu Karang: Pengertian,<br> Jenis, Sebaran, dan Masalah</h5>
                    <p class="text card-text text-muted font-biasa">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="kartu card" style="width: 20rem;">
                <img src="{{ ('../../assets/images/home/vladimir-kudinov-vmlJcey6HEU-unsplash.png') }}" class="card-img-top" alt="harimau">
                <div class="card-body">
                    <h5 class="text card-title font-biasa fs-6 fw-bold">Ternyata, Tanduk Rusa Berasal dari Sel Kanker Tulang</h5>
                    <p class="text card-text text-muted font-biasa">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="d-flex justify-content-around">
                <div class="about">
                    <h5 class="digital mb-3">Tropsianimal</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aperiam iure aut error cum sint totam repellendus qui consequatur quo? Pariatur, inventore corporis ab sint error maxime asperiores cumque quasi.</p>
                    <img src="{{ ('../../assets/images/home/001-facebook.png') }}" alt="">
                    <img src="{{ ('../../assets/images/home/002-twitter.png') }}" alt="">
                </div>
                <div class="font-biasa link">
                    <h6 class="mb-3 fw-bold">Useful links</h6>
                    <p>Blog</p>
                    <p>Hewan</p>
                    <p>Galeri</p>
                    <p>Testimonial</p>
                </div>
                <div class="font-biasa privacy">
                    <h6 class="mb-3 fw-bold">Privacy</h6>
                    <p>Karir</p>
                    <p>Tentang Kami</p>
                    <p>Kontak Kami</p>
                    <p>Servis</p>
                </div>
                <div class="font-biasa contact">
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