
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Flickity CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>e-wak</title>
      <link rel="icon" type="image/x-icon" href="{{asset('template')}}/dist/img/splash-fish.svg">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <!-- Whatsapp Button -->
    <a href="" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- Navbar Kompleks -->
    <nav class="navbar-top navbar navbar-expand-lg navbar-light bg-light shadow">
        <a class="nav-link i-kan i-kan-utama navbar-brand" href="/"><b><i>e</i>-wak</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons mr-2">category</i>Kategori
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons mr-2">help</i>Cara Belanja
                </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/ewak/lokasi">
                        <i class="material-icons mr-2">map</i>Lokasi Penangkapan
                    </a>
                </li>
          </ul>
          <form>
                <div class="form-inline" >
                    <input class="flex-fill form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search" >
                </div>
          </form>
          <div class="d-flex flex-row-revers">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/ewak/keranjang">
                        <i class="material-icons mr-2">shopping_cart</i>Keranjang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="material-icons mr-2">person</i>Akun
                    </a>
                </li>
            </ul>
          </div>

        </div>
    </nav>

    <!-- Content -->

    <!-- Hero -->
    <div class="container">
        <div class="hero">
            <div class="carousel"
            data-flickity='{ "imagesLoaded": true, "percentPosition": false, "autoPlay": true}'>
                <img src="assets/1.svg"/>
                <img src="assets/2.svg"/>
                <img src="assets/3.svg"/>
            </div>
        </div>
    </div>

    <!-- Kategori -->
    <div class="container">
        <div class="my-5">
            <h5><b>Kategori</b></h5>

            <div class="row">
                <div class="mt-5 mt-md-0 col-6 col-md-2">
                    <!-- Card Category -->
                    <a href="/ewak/kategori_satuan" class="card border-light shadow card-category ">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="assets/cat_satuan.svg" class="img-category my-4 " alt="">
                            </div>
                            <h5 style="text-align: center;">Satuan</h5>
                        </div>
                    </a>
                </div>
                <div class="mt-5 mt-md-0 col-6 col-md-2">
                    <!-- Card Category -->
                    <a href="/ewak/kategori_olahan" class="card border-light shadow card-category ">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="assets/cat_olahan.svg" class="img-category my-4 " alt="">
                            </div>
                            <h5 style="text-align: center;">Olahan</h5>
                        </div>
                    </a>
                </div>
                <div class="mt-5 mt-md-0 col-6 col-md-2">
                    <!-- Card Category -->
                    <a href="/ewak/kategori_paket" class="card border-light shadow card-category ">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="assets/cat_paket.svg" class="img-category my-4 " alt="">
                            </div>
                            <h5 style="text-align: center;">Paket</h5>
                        </div>
                    </a>
                </div>
                <div class="mt-5 mt-md-0 col-6 col-md-2">
                    <!-- Card Category -->
                    <a href="/ewak/kategori_promo" class="card border-light shadow card-category ">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="assets/cat_promo.svg" class="img-category my-4 " alt="">
                            </div>
                            <h5 style="text-align: center;">Promo</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

<!-- Modal Kategori Produk -->
    <!-- Detail Modal 1 -->
    <div class="modal fade" id="detailModal1" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/mujair.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 2 -->
    <div class="modal fade" id="detailModal2" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/mas.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mas</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 3 -->
    <div class="modal fade" id="detailModal3" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer TIGAAA</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 4 -->
    <div class="modal fade" id="detailModal4" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer EMPAAAT</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Kategori Produk -->
    <div class="container">
        <div class="my-5">
            <h5><b>Produk</b></h5>
            <div class="row">
                <!-- detail 1 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/mujair.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Mujaer</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal1">Detail</button>
                </div>
                <!-- detail 2 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/mas.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Mas</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal2">Detail</button>
                </div>
                <!-- detail 3 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak3.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Kakap</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal3">Detail</button>
                </div>
                <!-- detail 4 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak3.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Kakap 4</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal4">Detail</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Kategori Olahan -->
    <!-- Detail Modal 5 -->
    <div class="modal fade" id="detailModal5" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer LIMAAA</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 6 -->
    <div class="modal fade" id="detailModal6" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer ENAMMMM</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 7 -->
    <div class="modal fade" id="detailModal7" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer TUJUHHHH</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 8 -->
    <div class="modal fade" id="detailModal8" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer DELAPANNNN</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Kategori Olahan -->
    <div class="container">
        <div class="my-5">
            <h5><b>Olahan</b></h5>
            <div class="row">
                <!-- detail 5 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak10.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Bawal</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal5">Detail</button>
                </div>
                <!-- detail 6 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak2.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Nila</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal6">Detail</button>
                </div>
                <!-- detail 7 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak16.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Mujaer</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal7">Detail</button>
                </div>
                <!-- detail 8 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak3.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Kakap 8</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal8">Detail</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Kategori Paket -->
    <!-- Detail Modal 9 -->
    <div class="modal fade" id="detailModal9" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 9</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 10 -->
    <div class="modal fade" id="detailModal10" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 10</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 11 -->
    <div class="modal fade" id="detailModal11" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 11</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 12 -->
    <div class="modal fade" id="detailModal12" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 12</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Kategori Paket -->
    <div class="container">
        <div class="my-5">
            <h5><b>Paket</b></h5>
            <div class="row">
                <!-- detail 9 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak10.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Bawal 9</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal9">Detail</button>
                </div>
                <!-- detail 10 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak16.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Mujaer 10</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal10">Detail</button>
                </div>
                <!-- detail 11 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak3.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Kakap 11</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal11">Detail</button>
                </div>
                <!-- detail 12 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak10.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Bawal12</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal12">Detail</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Kategori Promo -->
    <!-- Detail Modal 13 -->
    <div class="modal fade" id="detailModal13" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 13</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 14 -->
    <div class="modal fade" id="detailModal14" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 14</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 15 -->
    <div class="modal fade" id="detailModal15" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 15</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 16 -->
    <div class="modal fade" id="detailModal16" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 16</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kategori Promo -->
    <div class="container">
        <div class="my-5">
            <h5><b>Promo</b></h5>
            <div class="row">
                <!-- detail 13 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak9.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Nila</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal13">Detail</button>
                </div>
                <!-- detail 14 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak16.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Mujaer 17</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal14">Detail</button>
                </div>
                <!-- detail 15 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak3.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Kakap 19</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal15">Detail</button>
                </div>
                <!-- detail 16 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak10.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Bawal 16</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal16">Detail</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Kategori Satuan -->
    <!-- Detail Modal 17 -->
    <div class="modal fade" id="detailModal17" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 13</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 18 -->
    <div class="modal fade" id="detailModal18" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 14</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 19 -->
    <div class="modal fade" id="detailModal19" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 15</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Modal 20 -->
    <div class="modal fade" id="detailModal20" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Deskripsi -->
                    <div class="deskripsi container mt-5">
                        <div class="row">
                            <!-- Gambar Produk large -->
                            <div class="col-md-12 col-12 mb-5">
                                <img src="assets/iwak16.jpeg" class="img-product-description"  alt="">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Ikan Mujaer 20</h4>
                                        <small>Berat</small> 4,20 Kg
                                        <h3>Rp 42.000</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Stok</b> 123
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="row">
                            <div class="col">
                                <h4>Deskripsi Produk</h4>
                                <p>Ikan yang ditangkap di tambak pilihan di daerah Kenjeran, Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/ewak/deskripsi" class="mt-3 btn btn-lg btn-ikan">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Kategori Satuan -->
    <div class="container">
        <div class="my-5">
            <h5><b>Satuan</b></h5>
            <div class="row">
                <!-- detail 17 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak13.jpg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Nila 16</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal17">Detail</button>
                </div>
                <!-- detail 18 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak16.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Mujaer</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal18">Detail</button>
                </div>
                <!-- detail 19 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak3.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Kakap</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal19">Detail</button>
                </div>
                <!-- detail 20 -->
                <div class="col-12 col-md-3 mt-3">
                    <!-- Card Produk -->
                    <div class="produk">
                        <!-- Discount tag -->
                        <div class="discount shadow">
                            -69%
                        </div>
                        <div class="card card-product rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/iwak10.jpeg" class="img-product" alt="">
                                </div>
                                <table class="d-flex justify-content-center mt-2">
                                    <tbody>
                                        <tr class="d-flex justify-content-center">
                                            <td colspan="2"><b>Ikan Bawal 20</b></td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Harga</b></td>
                                            <td>Rp 42.000</td>
                                        </tr>
                                        <tr class="d-flex justify-content-center p">
                                            <td><b>Stok</b></td>
                                            <td>123</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="mt-3 btn btn-ikan" data-toggle="modal" data-target="#detailModal20">Detail</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Subscription -->
    <div class="subscription mt-5">
        <div class="container py-3">
            <div class="row mt-2">
                <div class="col-12 col-md-6 ">
                    <h4>Dapatkan informasi terkini</h4>
                    <p>dengan berlangganan melalui e-mail</p>
                </div>
                <div class="col-12 col-md-6 d-flex flex-row-reverse">
                    <form class="form-inline mr-0">
                        <input class="form-control mr-2 mr-md-0" type="text" placeholder="Masukkan e-mail anda">
                        <button class="btn my-2 my-md-0 my-0 btn-ikan-sub" type="submit">Berlangganan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container py-3">
            <div class="row">
                <div class="col">
                    <h1 style="color: orangered;">
                        <b><i>e</i>-wak</b>
                    </h1>
                    <p>Kami menjual ikan dengan harga sesuai dengan apa yang dijual oleh pembudidaya. Ikan yang kami peroleh diambil dari budidaya ikan dengan kualitas perairan yang mantap</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="row">
                        <div class="col">
                            <b>Tentang Kami</b>
                            <p>Kami menjual ikan secara online dengan pilihan paket pembelian.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Hubungi Kami</b>
                            <p>(031) 123 456 789</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <b>Belanja Produk Kami</b>
                    <p><a href="">Tokopedia</a></p>
                </div>
                <div class="col-md-3 col-6">
                    <div class="row">
                        <div class="col">
                            <b>Customer Service</b>
                            <p>(+123) 456 789</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Alamat Kami</b> <br>
                            Institut Teknologi Sepuluh Nopember, Kampus, Jl. Raya ITS, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <b>Media Sosial</b><br>
                    <a href="">Instagram</a><br>
                    <a href="">Youtube</a><br>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Bottom Navbar -->
    <nav class="navbar-bottom shadow-lg navbar fixed-bottom navbar-light" style="background-color: orangered;">
        <a class="nav-link" href="#" style="color: white">
            <small><i class="material-icons mr-2" style="font-size: 16px">category</i>Kategori</small>
        </a>
        <a class="nav-link" href="/ewak/keranjang" style="color: white">
            <small><i class="material-icons mr-2" style="font-size: 16px">shopping_cart</i>Keranjang</small>
        </a>h b
        <a class="nav-link" href="/ewak/register" style="color: white">
            <small><i class="material-icons mr-2"style="font-size: 16px"> person</i>Akun</small>
        </a>
    </nav> --}}

    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
