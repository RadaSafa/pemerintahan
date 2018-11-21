<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>portal website lampung selatan</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css">
  <!-- Google fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet'>
  <!-- Bootstrap Select-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap-select/css/bootstrap-select.min.css">
  <!-- owl carousel-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/owl.carousel/assets/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/owl.carousel/assets/owl.theme.default.css">
  <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" type="image/x-icon">

  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/kecamatan.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="<?php echo base_url();?>css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/front/style.amber-500.min.css">

  <link href="dist/vanillaCalendar.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>css/calender/calender.css">
  <!--
  <link rel="stylesheet" href="<?php echo base_url();?>css/carousel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css">
  -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/icon.ico" type="image/x-icon">
</head>

<body>
  <div id="all">
    <div class="top-bar">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 d-md-block d-none">
            <p>Portal Informasi Kabupaten Lampung Selatan</p>
          </div>
        <div class="col-md-6">
          <div class="d-flex justify-content-md-end justify-content-between">
            <ul class="social-custom list-inline">
              <li class="list-inline-item"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar Start-->
<header class="nav-holder make-sticky" >
    <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
      <div class="container-fluid"><a href="<?php echo base_url();?>" class="navbar-brand home"><img src="assets/img/logo1.png" class="d-none d-md-inline-block"><img src="assets/img/logo1.png" class="d-inline-block d-md-none"><span class="sr-only"></span></a>
        <h1>Pemerintah Lampung Selatan</h1>
          <button type="button" data-target="#navigation" class="navbar-toggler btn-template-outlined" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown"><a href="<?php echo base_url();?>home" data-toggle="text" class="text">Beranda</a>
                </li>
                <li  class="nav-item dropdown"><a href="<?php echo base_url();?>" data-toggle="faq">Layanan Publik</a>
                </li>

                <li class="nav-item dropdown active menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Wilayah</a>
                  <ul class="dropdown-menu megamenu">
                      <div class="md-8">
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="<?php echo site_url();?>kabupaten" class="nav-link">Kabupaten</a></li>
                            <li class="nav-item"><a href="<?php echo base_url();?>kecamatan" class="nav-link">Kecamatan</a></li>
                          </ul>
                        </div>
                  </ul>
                </li>

                <li class="nav-item dropdown"><a href="<?php echo base_url();?>" data-toggle="faq">Berita Terbaru</a>
                </li>

                <li class="nav-item dropdown menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">E-Goverment</a>
                  <ul class="dropdown-menu megamenu">
                      <div class="md-8">
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="<?php echo site_url();?>perangkat_daerah" class="nav-link">Perangkat Derah</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>daftar_pejabat" class="nav-link">Daftar Pejabat</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>rpmd_kabupaten" class="nav-link">RPJMD Kabupaten</a></li>
                          </ul>
                        </div>
                  </ul>
                </li>

                <li class="nav-item dropdown"><a href="<?php echo base_url();?>" data-toggle="faq">Informasi Pariwisata</a>
                </li>

                <li class="nav-item dropdown menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Profil Daerah</a>
                  <ul class="dropdown-menu megamenu">
                      <div class="md-8">
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="<?php echo base_url();?>progcon" class="nav-link">Selayang Pandang</a></li>
                            <li class="nav-item"><a href="<?php echo base_url();?>bisnistik" class="nav-link">Visi Misi</a></li>
                            <li class="nav-item"><a href="<?php echo base_url();?>bisnistik" class="nav-link">Arti Lambang</a></li>
                            <li class="nav-item"><a href="<?php echo base_url();?>bisnistik" class="nav-link">Profil</a></li>
                          </ul>
                        </div>
                  </ul>
                </li>

                <li class="nav-item dropdown"><a href="<?php echo site_url('login')?>" data-toggle="faq">Account</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
  </header>
  <!-- Navbar End-->
<div class="wrapper">
  <div class="container">

  <div id="core">

  <div class="blogger">

      <div id="content" class="eightcol first ghost blogger">

  		<div class="item_inn p-border post-5613 page type-page status-publish hentry">

              <div class="entry">

                      <h1 class="post entry-title">Kecamatan Bakauheni</h1>

                      <div class="hrlineB p-border"></div>

                      <div class="su-gmap su-responsive-media-yes"><iframe width="100%" height="500" src="//maps.google.com/maps?q=Bakauheni&amp;output=embed"></iframe></div>



                  </div>

                  <div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>

<div class="container">
<p>&nbsp;</p>
<p align="justify"><b>Kota Bakauheni</b> adalah sebuah kota besar yang berada Kecamatan Bakauheni di Kabupaten Lampung Selatan, Lampung, Indonesia. Kecamatan ini adalah pemekaran Kec. Penengahan.
  Bakauheni adalah sebuah kota pelabuhan dan terpenting di provinsi Lampung, tepatnya di ujung selatan Pulau Sumatera. Terletak di ujung selatan dari Jalan Raya Lintas Sumatera, Pelabuhan Bakauheni menghubungkan Sumatera dengan Jawa lewat perhubungan laut.
  Memiliki luas wilayah sebesar 57,13 km<sup>2 </sup>,Kecamatan Kalianda terdiri dari 5 desa atau kelurahan. Tercatat pada tanggal 08 September 2015 Kecamatan Bakauheni
  dihuni oleh 22,165 jiwa atau 2,33% dari total penduduk Kabupaten Lampung Selatan.</p>
  <ul type="1">
    <li><b>Letak Geografis Kecamatan Bakauheni</b>
        <p align="justify">
          Sejak pertama dibentuk, kecamatan Bakauheni terdiri dari lima desa, yakni desa Bakauheni, Kelawi, Totoharjo, Semanak dan desa Hatta sebagai ibukota kecamatan. Secara geografi, seperti halnya dengan daerah lain di Indonesia,Kecamatan Bakauheni merupakan daerah tropis.
          Pusat Pemerintahan (ibukota) kecamatan Bakauheni terletak di desa Hatta. Secara geografis, kecamatan Bakauheni memiliki batas-batas sebagai berikut :
          <ul type="a">
            <li>Sebelah Utara berbatasan dengan Kecamatan Penengahan</li>
            <li>Sebelah Selatan berbatasan dengan Selat Sunda</li>
            <li>Sebelah Barat berbatasan dengan Kecamatan Rajabasa</li>
            <li>Sebelah Timur berbatasan dengan Kecamatan Ketapang</li>
          </ul>
          Dari lima desa di kecamatan Bakauheni, tiga diantaranya memiliki pantai yakni desa Bakauheni, Kelawi dan Totoharjo. Desa Bakauheni sendiri memiliki beberapa pulau kecil, namun sampai saat ini belum berpenghuni dan hanya sebatas digunakan sebagai lahan perkebunan.
        </p>
    </li>
    <li><b>Topografis</b>
      <p align="justify">
        Kecamatan Bakauheni memiliki garis pantai sepanjang ± 30 km dengan luas daratan 57,13 km2 atau 5713 Ha. Ketinggian rata-rata di wilayah kecamatan Bakauheni ialah 134 mdpl (diukur dari pusat desa dengan GPS : Global Positioning System).
      </p>
    </li>
    <li><b>Administrasi Pemerintahan</b>
      <p align="justify">
        Kecamatan Bakauheni merupakan pemekaran dari kecamatan Penengahan. Berdasarkan hasil musyawarah Panitia Pemekaran
        Kecamatan Penengahan pada tanggal 22 Desember 2005 di Aula Kantor Camat Penengahan, diputuskan bahwa nama kecamatan pemekaran dari kecamatan Penengahan ialah kecamatan Bakauheni.  Nama Bakauheni sendiridiambil dari salah satu nama desa tertua di wilayah tersebut.
        Kecamatan Bakauheni dibentuk berdasarkan Peraturan Daerah Kabupaten Lampung Selatan No. 03 tahun 2006 dan diresmikan pada oleh Zulkifli Anwar.
        Semenjak definitif, kecamatan Bakauheni dipimpin oleh Drs. R. Hardja Kusumah sampai dengan Agustus 2011. Sejak Bupati Lampung Selatan dijabat H. Rycko Menoza SZP, SE, SH, MBA kecamatan Bakauheni mengalami empat kali pergantian pimpinan yakni Dulkahar S.STP yang menjabat pada Agustus 2011 sampai April 2012 (± 9 bulan) dan Dani Wahyudi S.STP yang menjabat sejak April 2012 sampai Februari 2013 serta Darsito, SP yang menjabat sejak Maret 2012 sampai akhir 2015 yang kemudian digantikan Ariswandi SH, MH yang menjabat sampai sekarang.
      </p>
    </li>
  <ul>
<p>Berikut nama desa dan kelurahan yang terletak di Kecamatan Bakauheni :</p>
<table class="table table-bordered table-hover table-condensed">
<thead>
<tr>
<th title="Field #1" width="10"><strong><p align="center">No</p></strong></th>
<th width="250" align="center" title="Field #2"><strong>Nama Desa</strong></th>
<th width="250" align="center" title="Field #3"><strong>Kode Pos</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td align="center">1</td>
<td><strong>Desa Bakauheni</strong></td>
<td>35592</td>
</tr>
<tr>
<td align="center">2</td>
<td><strong>Desa Hatta</strong></td>
<td>35592</td>
</tr>
<tr>
<td align="center">3</td>
<td><strong>Desa Kelawi</strong></td>
<td>35592</td>
</tr>
<tr>
<td align="center">4</td>
<td><strong>Desa Semanak</strong></td>
<td>35592</td>
</tr>
<tr>
<td align="center">5</td>
<td><strong>Desa Totoharjo</strong></td>
<td>35592</td>
</tr>
</tbody>
</table>
</div>
<p>&nbsp;</p>
<div class="container">
<span class="su-frame su-frame-align-center su-frame-style-default"><span class="su-frame-inner">
<p>&nbsp;</p>
<img class="alignnone" src="assets/kecamatan/bakauheni.jpg" alt="" width="100%" height="500" /></span></span>
<p>Foto Pelabuhan Bakauheni yang merupakan icon kecamatan tersebut.</p>
<p align="justify"><b>Pelabuhan Bakauheni</b> adalah sebuah pelabuhan penyeberangan yang terletak di Kecamatan Bakauheni, Kabupaten Lampung Selatan. Terletak di ujung selatan dari Jalan Raya Lintas Sumatera, pelabuhan Bakauheni menghubungkan Sumatera dengan Jawa via perhubungan laut.
Ratusan trip feri penyeberangan dengan 24 buah kapal feri dari beberapa operator berlayar mengarungi Selat Sunda yang menghubungkan Bakauheni dengan Merak di Provinsi Banten, Pulau Jawa. Feri-feri penyeberangan ini terutama melayani jasa penyeberangan angkutan darat seperti bus-bus penumpang antar kota antar provinsi, truk-truk barang maupun mobil pribadi.
Rata-rata durasi perjalanan yang diperlukan antara Bakauheni - Merak atau sebaliknya dengan feri ini adalah sekitar 2 jam.
Para pengguna tranportasi umum juga dapat menggunakan kapal kecil untuk mempercepat perjalanan. Waktu tempuh dengan kapal ini sekitar 1 jam. Namun, biaya yang dikeluarkan lebih mahal dan kapal hanya tersedia dari pagi hingga sore hari ketika ombak tidak besar.
</p>
</div>
</div>
   <!-- FOOTER -->
   <footer class="main-footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <p class="text-uppercase"><i class="fa fa-map-marker"></i> <strong>Provinsi Lampung <br>Kabupaten Lampung Selatan</strong>
                <hr class="d-block d-lg-none">
              </div>
              <div class="col-lg-7">
                <p1>Follow us Media Sosial LamSel for more update information </p1>
                <ul class=" list-inline">
                        <li class="list-inline-item"><a href="#" ><i class="fa fa-youtube-play"></i></a></li>
                        <li class="list-inline-item"><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" ><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" ><i class="fa fa-whatsapp"></i></a></li>
                      </ul>
              </div>
            </div>
          </div>

          <div class="copyrights">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 text-center-md">
                  <p>&copy; 2018 PemKab LamSel</p>
                </div>
                <div class="col-lg-8 text-right text-center-md">
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </footer>


          <!-- Javascript files-->
          <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
          <script src="<?php echo base_url();?>vendor/popper.js/umd/popper.min.js"> </script>
          <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
          <script src="<?php echo base_url();?>vendor/jquery.cookie/jquery.cookie.js"> </script>
          <script src="<?php echo base_url();?>vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
          <script src="<?php echo base_url();?>vendor/jquery.counterup/jquery.counterup.min.js"> </script>
          <script src="<?php echo base_url();?>vendor/owl.carousel/owl.carousel.min.js"></script>
          <script src="<?php echo base_url();?>vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
          <script src="<?php echo base_url();?>js/jquery.parallax-1.1.3.js"></script>
          <script src="<?php echo base_url();?>vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
          <script src="<?php echo base_url();?>vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
          <script src="<?php echo base_url();?>js/front.js"></script>
          <script src="http://maps.googleapis.com/maps/api/js"></script>

          <link rel='stylesheet' id='su-galleries-shortcodes-css'  href='https://www.lampungselatankab.go.id/sites/wp-content/plugins/shortcodes-ultimate/assets/css/galleries-shortcodes.css?ver=5.0.3' type='text/css' media='all' />
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/plugins/mastercity/layoutcreator/assets/javascripts/mllc-view.js?ver=1540749417'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.hoverIntent.minified.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.prettyPhoto.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/superfish.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/ownScript.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.flexslider-min.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.flexslider.start.main.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>

</body>
</html>
