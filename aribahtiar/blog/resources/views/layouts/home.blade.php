<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Breed Portfolio - Home</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>


<!-- Registrasi Modal Form HTML 5 -->


<form id="formregister" action="index.html" method="post">

<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


       
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Nama</label>
			    <input name="nama" type="text" class="form-control" 
			     placeholder="Nama" required>
			  </div>

			   <div class="form-group">
			    <label for="exampleInputPassword1">No Hp /WA</label>
			    <input name="no_hp" type="text" class="form-control" 
			     placeholder="No Hp / WA" required>
			  </div>
			


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </div>
  </div>
</div>


</form>
<!-- End Form  -->

		<header class="header_area">

				@include("components.header")
				
		</header>

    @yield('content')

    
	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="img/logo2.png" alt="">
							</a>
							<div class="d-lg-block d-none">
								<nav class="navbar navbar-expand-lg navbar-light justify-content-center">
									<div class="collapse navbar-collapse offset">
										<ul class="nav navbar-nav menu_nav mx-auto">
											<li class="nav-item"><a class="nav-link text-white" href="index.html">Home</a></li>
											<li class="nav-item"><a class="nav-link text-white" href="about.html">About</a></li>
											<li class="nav-item"><a class="nav-link text-white" href="portfolio.html">Portfolio</a></li>
											<li class="nav-item"><a class="nav-link text-white" href="blog.html">BLog</a></li>
											<li class="nav-item"><a class="nav-link text-white" href="services.html">Services </a></li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
						<div class="footer_social mt-lg-0 mt-4">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-skype"></i></a>
							<a href="#"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>





<script type="text/javascript">
	
$( "#formregister" ).on( "submit", function( event ) {

  event.preventDefault();
  
  console.log( $( this ).serialize() );

});

</script>




</body>

</html>