<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aston Carwash</title>
    <meta charset="UTF-8">
    <meta name="description" content="Your one stop car wash">
    <meta name="keywords" content="arcade, architecture, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon1.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section start -->
    <header class="header-area">
        <a href="home.html" class="logo-area">
            <img src="img/logo.png" alt="">
        </a>
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </header>
    <!-- Header section end -->


    <!-- Page header section start -->
    <section class="page-header-section set-bg" data-setbg="img/header-bg-1.jpg">
        <div class="container">
            <h1 class="header-title">Welcome, <span>Admin.</span></h1>
        </div>
    </section>
    <!-- Page header section end -->


    <!-- Page section start -->
    <section class="page-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Blog post -->
                    <div class="blog-post">
                        <div class="thumb">
                            <!-- atas ------------------- -->
                        </div>
                        @if(session('Sukses'))
                        <div class="alert alert-success" role="alert">
                            {{session('Sukses')}}
                        </div>
                        @endif
                        <div class="blog-content"">
                            <form action="/admin/{{$transaksi_customer->id}}/update" method="POST">
                                {{csrf_field()}}
                                <table class="table table-hover col-md12">
                                    <tr>
                                        <th>Plat Nomor</th>
                                        <th><input required type="text" class="form-control" id="exampleInputEmail1" name="plat_nomor" value="{{$transaksi_customer->plat_nomor}}"></th>
                                    </tr>
                                    <tr>
                                        <th>Mobil</th>
                                        <th><input required type="text" class="form-control" id="exampleInputEmail1" name="nama_mobil" value="{{$transaksi_customer->nama_mobil}}""></th>
                                    </tr>
                                    <tr>
                                        <th>Warna Mobil</th>
                                        <th><input required type="text" class="form-control" id="exampleInputEmail1" name="warna_mobil" value="{{$transaksi_customer->warna_mobil}}""></th>
                                    </tr>
                                    <tr>
                                        <th>Jenis Pelayanan</th>
                                        <th>
                                            <select id="exampleFormControlSelect1" name="jenis_pelayanan" class="form-control dropdown btn btn-success dropdown-toggle">
                                                <option value="Cuci Biasa" @if($transaksi_customer->jenis_pelayanan == 'Cuci Biasa') selected @endif>Cuci Biasa</option>
                                                <option value="Cuci + Salon" @if($transaksi_customer->jenis_pelayanan == 'Cuci + Salon') selected @endif>Cuci + Salon</option>
                                                <option value="Engine Bay Cleaning" @if($transaksi_customer->jenis_pelayanan == 'Engine Bay Cleaning') selected @endif>Engine Bay Cleaning</option>
                                                <option value="Detailing" @if($transaksi_customer->jenis_pelayanan == 'Detailing') selected @endif>Detailing</option>
                                                <option value="Salon" @if($transaksi_customer->jenis_pelayanan == 'Salon') selected @endif>Salon</option>
                                                <option value="Nano Coating" @if($transaksi_customer->jenis_pelayanan == 'Nano Coating') selected @endif>Nano Coating</option>
                                            </select>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Uang Bayar</th>
                                        <th><input required type="text" class="form-control" id="exampleInputEmail1" name="uang_bayar" value="{{$transaksi_customer->uang_bayar}}""></th>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <th><textarea name="keterangan" id="exampleFormControlTextArea1" class="form-control" value="{{$transaksi_customer->keterangan}}">-</textarea></th>
                                    </tr>
                                    <tr>
                                        <th><button type="submit" class="btn btn-warning">Update</button></th> 
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page section end -->


    <!-- Footer section start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-item">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-item">
                                <ul>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Help Desk</a></li>
                                    <li><a href="#">Job Aplications</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-item">
                                <ul>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                    <li><a href="#">Clients Testimonials</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <div class="copyright">Copyright &copy;
            <script>
                document.write(new Date().getFullYear());
            </script> All rights reserved. <br>This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></div>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </footer>
    <!-- Footer section end -->



    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.owl-filter.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>