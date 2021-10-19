<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">

    <title>Tropsianimal</title>
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
                <h1>Hewan<br> Tropis di Dunia</h1>
            </div>
            <div class="sub text font-biasa">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure assumenda quo distinctio debitis sunt, nesciunt quis, cupiditate veniam reprehenderit, animi deserunt? Quos dolorem quia tempora distinctio doloribus aperiam, labore atque!</p>
            </div>
        </div>
    </div>

    <!-- konten tentang -->
    <div class="container">
        <div class="tentang d-flex justify-content-evenly">
            <div class="subjudul-htm kiri pe-5">
                <a class="tautan digital" href="#">TENTANG KAMI</a>
                <h2 class="digital">Membangun<br> Komunitas Hewan</h2>
                <p class="text tebal font-biasa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deserunt repudiandae officiis soluta autem molestiae nobis sunt veniam voluptas ut cupiditate labore quos, nemo rerum alias explicabo eligendi exercitationem ex.</p>
                <p class="text font-biasa kecil">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium non quasi sed rerum dicta, facere culpa delectus laborum enim aspernatur neque. Similique architecto, expedita unde id quod consequuntur pariatur?</p>
                <button type="button" class="tombol font-tipis btn btn-success px-4 py-2">baca selengkapnya
                    <img class="ms-2" src="{{ ('../../assets/icon/arrow-right (1).svg') }}" alt="">
                </button>
            </div>
            <div class="kanan">
                <img class="p-1" src="{{ ('../../assets/images/home/alessandro-desantis-9_9hzZVjV8s-unsplash.png') }}" alt="">
                <img class="p-1" src="{{ ('../../assets/images/home/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') }}" alt="">
                <img class="p-1" src="{{ ('../../assets/images/home/kyle-nieber-3ryX0ShTMWg-unsplash.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- konten background -->
    <div class="banner-dua w-100 vh-100 text-center text-xl-start">
        <div class="container">
            <div class="subjudul-pth">
                <h2 class="digital pt-5">Kami Membawa Anda <br> Untuk Mengetahui Lebih Dalam</h2>
            </div>
            <div class="text d-flex justify-content-evenly">
                <div class="card p-4 ms-5 mt-4" style="width: 15rem; height: 15rem;">
                    <div class="paw">
                        <img style="width: 30px;" src="{{ ('../../assets/icon/pawprint.svg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="font-biasa fw-bold card-title">Lorem Ipsum Dolor Sit Amet.</h5>
                        <p class="font-biasa card-text text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card p-4 mt-4" style="width: 15rem; height: 15rem;">
                    <div class="paw">
                        <img style="width: 30px;" src="{{ ('../../assets/icon/pawprint.svg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="font-biasa fw-bold card-title">Lorem Ipsum Dolor Sit Amet.</h5>
                        <p class="font-biasa card-text text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card p-4 mt-4" style="width: 15rem; height: 15rem;">
                    <div class="paw">
                        <img style="width: 30px;" src="{{ ('../../assets/icon/pawprint.svg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="font-biasa fw-bold card-title">Lorem Ipsum Dolor Sit Amet.</h5>
                        <p class="font-biasa  card-text text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="card p-4 mt-4 me-5" style="width: 15rem; height: 15rem;">
                    <div class="paw">
                        <img style="width: 30px;" src="{{ ('../../assets/icon/pawprint.svg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="font-biasa fw-bold card-title">Lorem Ipsum Dolor Sit Amet.</h5>
                        <p class="font-biasa card-text text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- konten berita -->
    <div class="container">
        <div class="subjudul-htm">
            <a class="tautan digital" href="#">BERITA</a>
            <h2 class="digital">Baca Berita Terbaru Kami<br> Dalam Tropsianimal</h2>
        </div>
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

    <!-- konten gambar -->
    <div class="container">
        <div class="subjudul-htm">
            <a class="tautan digital" href="#">GALERI</a>
            <h2 class="digital">Lihat Lebih Banyak Hewan Tropis<br> Pada Galeri Kami</h2>
        </div>
    </div>
    <div class="gambar d-flex justify-content-between mt-5">
        <img src="{{ ('../../assets/images/home/kyaw-tun-_YIX48_4hgs-unsplash.png') }}" alt="">
        <div class="square-left">
            <img src="{{ ('../../assets/icon/arrow-right (1).svg') }}" alt="">
        </div>
        <img src="{{ ('../../assets/images/home/dawn-armfield-84n7c9cLEKM-unsplash.png') }}" alt="">
        <img src="{{ ('../../assets/images/home/oscar-merchant-sCt1TLNIxFw-unsplash.png') }}" alt="">
        <img src="{{ ('../../assets/images/home/david-clode-0lwa8Dprrzs-unsplash.png') }}" alt="">
        <div class="square-right">
            <img src="{{ ('../../assets/icon/arrow-right (1).svg') }}" alt="">
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

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>