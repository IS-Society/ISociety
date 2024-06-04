<?php 
//connecting database
include 'config.php';
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    }
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IS Society - Forum Diskusi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="img/logo2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

 <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" >Home</a></li>

          <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="sejarah.html">Sejarah</a></li>
              <li><a href="dosen.html">Dosen</a></li>
              <li><a href="kurikulum.html">Kurikulum</a></li>
			  <li><a href="matkul.html">Mata Kuliah</a></li>     
            </ul>
          </li>
		  
		  <li><a href="blog.html">Blog</a></li>
          <li><a href="service.html" class="active">Work in Progress</a></li>
          <li><a href="galeri.html">Galeri</a></li>
          <li><a href="publikasi.html">Publikasi</a></li>


          <li><a href="contact.html">Kontak</a></li>
           <li><a href="logout.php" class="getstarted">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
      </div>
    </section><!-- End Breadcrumbs -->


 <!-- ======= widget Section ======= -->
    <section id="widget" class="widget section-bg">
      <div class="container">
	  
	    <div class="section-title">
          <h2>FORUM</h2>
          <p>DISKUSI</p>
        </div>
        
        <div class="search-container">
            <form>
                <div class="search-box">
                    <span class="icon"></span>
                    <input type="text" placeholder="Cari pertanyaan yang serupa">
                </div>
            </form>
            <div class="filter-container">
                <label for="filter">Filter berdasarkan:</label>
                <select id="filter">
                    <option value="all">Semua diskusi</option>
                    <option value="recent">Terbaru</option>
                    <option value="popular">Populer</option>
                </select>
            </div>
            <div class="button-container">
                <button type="button">Mulai Bertanya</button>
            </div>
        </div>
		
        <div class="forum-post">
    <h3>Bagaimana cara menginstall Oracle versi 10?</h3>
    <div class="author">
      <img src="img/meyywglasses.jpg" alt="Author Profile Picture">
      <div class="info">
        <span>Meisya Putri Utami</span>
        <span>Angkatan 2021</span>
      </div>
    </div>
    <div class="content">
      Hallo all, aku bingung nih kenapa tiap install oracle suka gagal terus, disitu sih bentrok sama port Xampp, ada yang bisa bantu ga,
      thank youu
    </div>
    <div class="actions">
      <button>10 Jawaban</button>
      <button><i class="fas fa-heart"></i> 1 Likes</button>
    </div>
  </div>
  <div class="forum-post">
    <h3>Bagaimana cara menginstall Oracle versi 10?</h3>
    <div class="author">
      <img src="https://i.imgur.com/fK0w58t.jpg" alt="Author Profile Picture">
      <div class="info">
        <span>Meisya Putri Utami</span>
        <span>Angkatan 2021</span>
      </div>
    </div>
    <div class="content">
      Hallo all, aku bingung nih kenapa tiap install oracle suka gagal terus, disitu sih bentrok sama port Xampp, ada yang bisa bantu ga,
      thank youu
    </div>
    <div class="actions">
      <button>10 Jawaban</button>
      <button><i class="fas fa-heart"></i> 1 Likes</button>
    </div>
  </div>
  <div class="forum-post">
    <h3>Bagaimana cara menginstall Oracle versi 10?</h3>
    <div class="author">
      <img src="https://i.imgur.com/fK0w58t.jpg" alt="Author Profile Picture">
      <div class="info">
        <span>Meisya Putri Utami</span>
        <span>Angkatan 2021</span>
      </div>
    </div>
    <div class="content">
      Hallo all, aku bingung nih kenapa tiap install oracle suka gagal terus, disitu sih bentrok sama port Xampp, ada yang bisa bantu ga,
      thank youu
    </div>
    <div class="actions">
      <button>10 Jawaban</button>
      <button><i class="fas fa-heart"></i> 1 Likes</button>
    </div>
  </div>
  <div class="forum-post">
    <h3>Bagaimana cara menginstall Oracle versi 10?</h3>
    <div class="author">
      <img src="https://i.imgur.com/fK0w58t.jpg" alt="Author Profile Picture">
      <div class="info">
        <span>Meisya Putri Utami</span>
        <span>Angkatan 2021</span>
      </div>
    </div>
    <div class="content">
      Hallo all, aku bingung nih kenapa tiap install oracle suka gagal terus, disitu sih bentrok sama port Xampp, ada yang bisa bantu ga,
      thank youu
    </div>
    <div class="actions">
      <button>10 Jawaban</button>
      <button><i class="fas fa-heart"></i> 1 Likes</button>
    </div>
        </div>
    </section><!-- End widget Section -->

    <section id="blog" class="blog">
        <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
        </div>
    </section>
	
	

<section id="contact" class="contact section-bg">
    <div class="container">
      <div class="section-title">
        <h2>Input Here</h2>
        <p>Inbox</p> 
      </div>
      <div class="col-lg-8 mt-5 mt-lg-0">
        <form action="simpan3.php" method="post" role="form" onsubmit="showSuccessMessage(event)">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <select class="form-control" name="jenis" id="jenis" required>
                <option value="" selected disabled>Pilih Jenis</option>
                <option value="Menfess">Menfess</option>
                <option value="QNA">QNA</option>
              </select>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
		  
		    <div class="form-group mt-3">
          <label for="photo">Upload Foto:</label>
          <input type="file" name="photo" id="photo" accept="image/*" required>
        </div>
		
          <br>
          <div class="text-center">
            <button type="submit" class="button">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    function showSuccessMessage(event) {
      event.preventDefault(); // Menghentikan submit form secara default

      Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: 'Message berhasil dikirim!',
      }).then(function() {
        event.target.submit(); // Melanjutkan submit form setelah menampilkan notifikasi
      });
    }
  </script>
  
  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>IS Society</h3>
              <p>
                Forum Mahasiswa Prodi<br>
                Sistem Informasi Unjani<br><br>
                <strong>Phone :</strong> 0812 2323 8686<br>
                <strong>Email :</strong> issociety@gmail.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Navbar</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="sejarah.html">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="blog.html">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Q&A</a></li>
			  <li><i class="bx bx-chevron-right"></i> <a href="galeri.html">Galeri</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="publikasi.html">Publikasi</a></li>
			  <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Usefull Link</h4>
            <ul>
				<li><i class="bx bx-chevron-right"></i> <a href="https://elearning.unjani.id/login">E-Learning</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://si.unjani.ac.id/">Sistem Informasi Unjani</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.unjani.ac.id/">Portal Unjani</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://pmb.unjani.ac.id/">PMB Unjani</a></li>
			  
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Media Social</h4>
			 <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
           
            </form>

          </div>

        </div>
      </div>
    </div>


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>IS Society</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Anak Ambis 21, Mostly by Meyy yaa</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

    <script>
        <?php unset($_SESSION['error']);?>;
    </script> 
</body>

</html>