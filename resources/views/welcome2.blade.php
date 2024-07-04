<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Onion Cafe</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ url('images/fevicon.png') }}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ url('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="#"><img src="{{ url('images/logo2.png') }}" width="125px"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/onioncaferesto?igsh=djNubXoyYmluOGNs">Hubungi Kami</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <li><a href="{{ route('login') }}"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Onion <br>Cafe and Resto</h1>
                                 <p class="banner_text">Jl. Rajawali No.440, 9 Ilir, Kec. Ilir Tim. II, Kota Palembang, Sumatera Selatan 30114</p>
                                 <div class="btn_main">
                                    <div class="about_bt active"><a href="#">Tentang Kami</a></div>
                                    <div class="callnow_bt"><a href="https://www.instagram.com/onioncaferesto?igsh=djNubXoyYmluOGNs">Hubungi Kami</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Onion<br>Cafe and Resto</h1>
                                 <p class="banner_text">Jl. Rajawali No.440, 9 Ilir, Kec. Ilir Tim. II, Kota Palembang, Sumatera Selatan 30114</p>
                                 <div class="btn_main">
                                    <div class="about_bt active"><a href="#">Tentang Kami</a></div>
                                    <div class="callnow_bt"><a href="https://www.instagram.com/onioncaferesto?igsh=djNubXoyYmluOGNs">Hubungi kami</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- Javascript files-->
      <script src="{{ url('js/jquery.min.js') }}"></script>
      <script src="{{ url('js/popper.min.js') }}"></script>
      <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ url('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ url('js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ url('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ url('js/custom.js') }}"></script>
   </body>
</html>