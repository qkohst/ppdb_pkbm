<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>PPDB Online PKBM Nurul Jadid</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/template/css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="/template/css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="/template/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/template/css/responsive.css" rel="stylesheet" />

 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="/template/fontawesome-free/css/all.min.css">


  <link rel="stylesheet" href="/template/css/css-circular-prog-bar.css">


</head>

<body>
  <div class="top_container sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <img src="/template/images/logo.png" alt="">
            <span>
              PKBM Nurul Jadid
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" href="/"> Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/pesdik/alur_pendaftaran"> Alur Pendaftaran </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="/pesdik/form_daftar"> Daftar </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/pesdik/lihat_pendaftar"> Lihat Pendaftar </a>
                </li>

        </nav>
      </div>
      @yield('judul')
    </header>
  
  </div>
  <!-- end header section -->

    @yield('content')

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2020 PKBM Nurul Jadid Tambakboyo | 
      <a href="https://www.youtube.com/channel/UCHO5t3O1satYKfGnlxGDVsg/playlists?view_as=subscriber">Developed By : Qkoh St.</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="/template/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="/template/js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = '/template/images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>