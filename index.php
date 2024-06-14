<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
<title>IS Society - Diskusi</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!---BS IS SOCIETY , HRS BGT DISINI!!!!!-->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

<!--DONT DELETE THIS, JS, BS FORUM!!!!!-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="main.js"></script>

    <!-- Favicons -->
    <link href="img/logo2.png" rel="icon">
      <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  

</head>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>

          <!-- navbar -->
          <nav id="navbar" class="navbar">
            <!-- list tombol navbar -->
            <ul>
              <li><a href="index.html" >Beranda</a></li>
              <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                <!-- dropdown menu tentang -->
                <ul>
                  <li><a href="tentang.html">Program Studi</a></li>
                  <li><a href="angkatan.html">Angkatan</a></li>
                  <li><a href="ormawa.html">Organisasi Mahasiswa</a></li>    
                </ul>
              </li>
              <!-- akhir dropdown menu tentang -->
              <li class="dropdown"><a href="#" class="active"><span>Forum</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="index.php">Diskusi</a></li>
                <li><a href="menfess.html">Menfess</a></li>
              </ul>
              <li><a href="blog.html">Berita</a></li>
              <li><a href="galeri.html">Galeri</a></li>
              <li><a href="publikasi.html">Publikasi</a></li>
              <li><a href="alumni.html">Alumni</a></li>
              <li><a href="logout.php" class="getstarted">Logout</a></li>
            </ul>
            <!-- list tombol navbar -->
          </nav>
          <!--navbar end-->
    </div>
  </header>
  <!-- End Header -->


<!-- box reply - overlay -->
<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>
<!-- end box reply - overlay -->



<!--community forum box-->
<section id="faq" class="faq section-bg">
<div class="container">

<div class="panel panel-default" style="margin-top:100px">
  <div class="panel-body">
    <h3>Community forum</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name:</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your question:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
<!--end community forum--> 


<!--recent question-->
<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>

</div>
</section>
<!--end recent question-->


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

</body>
</html>