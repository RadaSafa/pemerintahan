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

  <div class="container">

  <div id="core">

  <div class="blogger">

      <div id="content" class="eightcol first ghost blogger">

  		<div class="item_inn p-border post-5645 page type-page status-publish hentry">

              <div class="entry">

                      <h1 class="post entry-title">Kecamatan Jati Agung</h1>

                      <div class="hrlineB p-border"></div>

                      <div class="su-gmap su-responsive-media-yes"><iframe width="100%" height="500" src="//maps.google.com/maps?q=Jati+Agung%2C+South+Lampung+Regency%2C+Lampung&amp;output=embed"></iframe></div>



                  </div>

                  <div class="clearfix"></div>
                  </div> </div> </div> </div></div>

                  <div class="container">
                  <p>&nbsp;</p>
                  <ul type="1">
                      <li><b>Letak Geografis Kecamatan Jati Agung</b>
                          <p align="justify">
                            kecamatan Jati Agung merupakan salah satu bagian dari wilayah Kabupaten  Lampung  Selatan  dengan  membawahi  21  Desa
                            dengan  luas wilayah 164,47 Km2, dan dihuni oleh berbagai etnis/suku baik penduduk
                            asli maupun pendatang.
                            Kecamatan Jati Agung berbatasan dengan :
                              <ul type="a">
                              <li>Sebelah Utara berbatasan dengan Kabupaten Lampung Timur</li>
                              <li>Sebelah  Selatan  berbatasan  dengan  Kota  Bandar  Lampung  dan Kecamaan Tanjung Bintang.</li>
                              <li>Sebelah Barat berbatasan dengan Kecamatan Natar.</li>
                              <li>Sebelah Timur berbatasan dengan Kabupaten Lampung Timur.</li>
                            </ul>
                          </p>
                      </li>
                      <li><b>Topografis</b>
                        <p align="justify">
                          Secara topografis  wilayah Kecamatan Jati Agung sebagian besar bentuk permukaan  tanah  adalah  dataran  rendah  dengan  ketinggian  dari permukaan laut kurang dari 110 m.
                          </p>
                      </li>
                      <li><b>Administrasi Pemerintahan</b>
                        <p align="justify">
                          Kecamatan  Jati  Agung  terbentuk  berdasarkan  UU  No.22 Tahun  1999,
                          Surat Menteri Dalam Negeri nomor : 188.138/1737/PUOD
                          tanggal 17 Juni 1999.  ibukota  kecamatan  Jati  Agung  adalah  Marga  Agung,  secara
                          adminitratif  berdasarkan  surat  keputusan  Gubernur  Kepala  Daerah  Tk.I
                          lampung tanggal, 13 Agustus 1999 nomor: 81 tahun 1999 Kecamatan Jati
                          Agung diadakan pemekaran Desa, dari 20 Desa menjadi 21 desa .
                          Untuk   mewujudkan   pelaksanaan   Pemerintah   berdasarkan surat
                          keputusan  MENDAGRI  Nomor  :  82/83  tahun  1984    tentang Susunan
                          Organisasi dan Tatakerja Wilayah Kecamatan :
                          <ul type="1">
                          <li>Camat selaku kepala wilayah kecamatan </li>
                          <li>Sekertariat Wilayah Kecamatan / Sekwilcam</li>
                          <li>Kepala urusan Adminitrasi</li>
                          <li>Kepala urusan pemerintahan</li>
                          <li>Kepala urusan kemasarakatan</li>
                          <li>Kepala urusan pembangunan desa</li>
                          <li>Mawil hansip </li>
                          <li>Mantri polisi pamongpraja </li>
                          <li>Kepala kantor perwakilan Kecamatan /Kapercam</li>
                        </ul>
                        </p>
                      </li>
                    <ul>
                  <p>Berikut nama Camat yang pernah menjabat di Jati Agung :</p>
                  <table class="table table-bordered table-hover table-condensed">
                  <thead>
                  <tr>
                  <th title="Field #1" width="10"><strong><p align="center">No</p></strong></th>
                  <th width="250" align="center" title="Field #2"><strong>Nama Camat</strong></th>
                  <th width="250" align="center" title="Field #3"><strong>Tahun Menjabat</strong></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td align="center">1</td>
                  <td><strong>Drs.Ikhsan Rifai</strong></td>
                  <td>1990 - 1991</td>
                  </tr>
                  <tr>
                  <td align="center">2</td>
                  <td><strong>Akmal Hakim,BA</strong></td>
                  <td>1991 – 1995 </td>
                  </tr>
                  <tr>
                  <td align="center">3</td>
                  <td><strong>Sigit,BA</strong></td>
                  <td>1995 – 1997</td>
                  </tr>
                  <tr>
                  <td align="center">4</td>
                  <td><strong>TotoSumedi,S.Sos</strong></td>
                  <td>1997 – 1999</td>
                  </tr>
                  <tr>
                  <td align="center">5</td>
                  <td><strong>Aminudin,BA</strong></td>
                  <td>1999 – 2003</td>
                  </tr>
                  <tr>
                  <td align="center">6</td>
                  <td><strong>Hasyim,S.Sos</strong></td>
                  <td>2003 – 2007</td>
                  </tr>
                  <tr>
                  <td align="center">7</td>
                  <td><strong>Abdullah Sani,S.Sos</strong></td>
                  <td>2007 – 2010</td>
                  </tr>
                  <tr>
                  <td align="center">8</td>
                  <td><strong>Drs.Sumardi</strong></td>
                  <td>2010</td>
                  </tr>
                  <tr>
                  <td align="center">9</td>
                  <td><strong>Drs.Aswarodi,M.Si</strong></td>
                  <td>2010 – 2012</td>
                  </tr>
                  <tr>
                  <td align="center">10</td>
                  <td><strong>Drs.Hery Sadli</strong></td>
                  <td>2012 – 2013</td>
                  </tr>
                  <tr>
                  <td align="center">11</td>
                  <td><strong>Laila Soraya,MM,M.Si</strong></td>
                  <td>2013-s.d Sekarang</td>
                  </tr>
                  </tbody>
                  </table>
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
      </div>

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
