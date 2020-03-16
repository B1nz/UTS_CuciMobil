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
        <a class="phone-number" href="{{ route('logout') }}"
            onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
            <font color="black">Logout</font>
        </a>

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
                            <div class="col-12" style="margin-bottom: 30dp">
                                <form class="form-inline my-2 my-lg-0" method="GET" action="/admin">
                                    <input nama="cari" class="form-control mr-sm-2" type="search" placeholder="Search ID" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search ID</button>
                                    <button style="float: right; margin-left: 500px;" type="button" class="site-btn sb-solid-color mr-5 " data-toggle="modal" data-target="#exampleModal">Tambah Transaksi</button>
                                </form>
                            </div>
                            <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Input Transaksi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                            <div class="modal-body">
                                                <form action="/admin/create" method="POST">

                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <label>Plat Nomor</label>
                                                        <input required type="text" class="form-control" id="exampleInputEmail1" name="plat_nomor">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mobil</label>
                                                        <input required type="text" class="form-control" id="exampleInputEmail1" name="nama_mobil">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Warna Mobil</label>
                                                        <input required type="text" class="form-control" id="exampleInputEmail1" name="warna_mobil">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Pelayanan</label>
                                                        <select id="exampleFormControlSelect1" name="jenis_pelayanan" class="form-control dropdown">
                                                            <option value="Cuci Biasa">Cuci Biasa - Rp.100k</option>
                                                            <option value="Cuci + Salon">Cuci + Salon - Rp.250k</option>
                                                            <option value="Engine Bay Cleaning">Engine Bay Cleaning - Rp.500k</option>
                                                            <option value="Detailing">Detailing - Rp.650k</option>
                                                            <option value="Salon">Salon - Rp.750k</option>
                                                            <option value="Nano Coating">Nano Coating - Rp.5000k</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Uang Bayar</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp.</span>
                                                            </div>
                                                            <input required type="number" class="form-control" id="exampleInputEmail1" name="uang_bayar">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Keterangan</label>
                                                        <textarea name="keterangan" id="exampleFormControlTextArea1" class="form-control">-</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>                                      
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-hover col-md12">
                                <tr>
                                    <th>Id Transaksi</th>
                                    <th>Plat Nomor</th>
                                    <th>Mobil</th>
                                    <th>Warna Mobil</th>
                                    <th>Jenis Pelayanan</th>
                                    <th>Keterangan</th>
                                    <th>Waktu</th>
                                    <th>Cetak Nota</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                @foreach ($transaksi_customer ?? '' as $ts)
                                <tr>
                                    <td>{{$ts->id}}</td>
                                    <td>{{$ts->plat_nomor}}</td>
                                    <td>{{$ts->nama_mobil}}</td>
                                    <td>{{$ts->warna_mobil}}</td>
                                    <td>{{$ts->jenis_pelayanan}}</td>
                                    <td>{{$ts->keterangan}}</td>
                                    <td>{{$ts->created_at}}</td>
                                    <td><a href="admin/{{$ts->id}}/cetak" class="btn btn-info btn-sm">Cetak Nota</a></td>
                                    <td><a href="admin/{{$ts->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                    <td><a href="admin/{{$ts->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Delete</a></td>
                                </tr>
                                @endforeach
                            </table>
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