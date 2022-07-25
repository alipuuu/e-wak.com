
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
    <link rel="stylesheet" href="/css/styles.css">

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

    <!-- Lokasi -->
    <div class="container lokasi">
        <div class="my-5">
            <h5><b>Lokasi Penangkapan</b></h5>

            <div class="row">
                <div class="col">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="698" id="gmap_canvas" src="https://maps.google.com/maps?q=-7.208161689163977,%20112.7615287159409&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:698px;width:1080px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:698px;width:1080px;}</style></div></div>
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
        </a>
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
