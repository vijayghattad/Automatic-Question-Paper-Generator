<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Question Paper Generator</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<style>
	@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic);

body {
    font-family: 'Source Sans Pro', sans-serif;
    line-height: 1.5;
    color: #323232;
    font-size: 15px;
    font-weight: 400;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}
.heading-title {
    margin-bottom: 100px;
}
.text-center {
    text-align: center;
}
.heading-title h3 {
    margin-bottom: 0;
    letter-spacing: 2px;
    font-weight: normal;
}
.p-top-30 {
    padding-top: 30px;
}
.half-txt {
    width: 60%;
    margin: 0 auto;
    display: inline-block;
    line-height: 25px;
    color: #7e7e7e;
}
.text-uppercase {
    text-transform: uppercase;
}

.team-member, .team-member .team-img {
    position: relative;
}
.team-member {
    overflow: hidden;
}
.team-member, .team-member .team-img {
    position: relative;
}

.team-hover {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: 0;
    border: 5px solid rgba(0, 0, 0, 0.1);
    background-color: rgba(255, 255, 255, 0.90);
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
.team-member:hover .team-hover .desk {
    top: 35%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .desk {
    position: absolute;
    top: 0%;
    width: 100%;
    opacity: 0;
    -webkit-transform: translateY(-55%);
    -ms-transform: translateY(-55%);
    transform: translateY(-55%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    padding: 0 10px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member:hover .team-hover .s-link {
    bottom: 10%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .s-link {
    position: absolute;
    bottom: 0;
    width: 100%;
    opacity: 0;
    text-align: center;
    -webkit-transform: translateY(45%);
    -ms-transform: translateY(45%);
    transform: translateY(45%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    font-size: 35px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member .s-link a {
    margin: 0 10px;
    color: #333;
    font-size: 16px;
}
.team-title {
    position: static;
    padding: 20px 0;
    display: inline-block;
    letter-spacing: 2px;
    width: 100%;
}
.team-title h5 {
    margin-bottom: 0px;
    display: block;
    text-transform: uppercase;
}
.team-title span {
    font-size: 12px;
    text-transform: uppercase;
    color: #a5a5a5;
    letter-spacing: 1px;
}

	</style>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	
</head>

<body>
	<div class="d-flex">
			<header>
			<nav class="nav-top">
					<div class="logo">
					<h1><b>QPGS</b></h1>
				</div>
				<ul class="nav_links list-unstyled">
					<li class="nav-link-list"><a href="index.php"><span class="fa fa-home"></span><p>Home</p></a></li>
					<li><a href="#about" style="margin-top:10px;"><span class="fa fa-question"></span><p>About</p></a></li>
					<li><a href="#team" style="margin-top:20px;"><span class="fa fa-users"></span><p>Team</p></a></li><br>
					<li><a href="#contact"><span class="fa fa-map-marker"></span><p>Contact</p></a></li><br>
					<li><a href="admin/login.php"><span class="	fa fa-television"></span><p>Login</p></a></li><br>
					<li><a href="faculty/registration.php"><span class="far fa-address-card"></span><p>Registration</p></a></li><br>

				</ul>
			</nav>
		</header>
		<div id="main-content">
			<!-- home -->
			<div id="home">
				<!-- banner -->
				<div class="banner_w3lspvt">
					<div class="banner-top1">
						<div class="container">
							<div class="banner-text text-center">
							
								<h3 class="my-md-4 my-3">Question Paper Generator System</h3>
								<p class="movetxt text-bl">Change is the end result of all true learning</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //banner -->
			</div>
			<!-- //home -->

			<!-- about -->
			<div class="welcome py-5" id="about">
				<div class="container py-xl-5 py-lg-3">
					<div class="row py-xl-4">
						<div class="col-lg-6 welcome-left pr-lg-5">
							<h3>Story About QPGS</h3>
							<h4 class="mt-2 mb-3">Welcome To Question Paper Generator System</h4>
							<h6 style="text-align:justify;">Examination process is an important activity for educational institutions to assess student performance. Thus the nature of the exam questions would determine the quality of the students produced by the institutions.
							Preparing the exam questions is very challenging, tedious and time consuming for the instructors. <br><br>
							Thus with the help of this system we present the solution in form Question Paper Generator System(QGS) which makes use of shuffling algorithm as a randomization technique.
							This system includes several modules like user administration, subject selection, difficulty level specification, question entry, question management, paper generation and paper management.</h6>
						</div>
						<div class="col-lg-6 welcome-right text-center mt-lg-0 mt-5">
							<div class="row">
								<img src="images/q2.jpg" height="250px" width="270px" style="border-radius:15px">
								<img src="images/q3.jpg" height="250px" width="270px" style="margin-left:15px; border-radius:15px">
								<img src="images/q1.jpg" height="250px" width="280px" style="margin-top:15px; margin-left:135px;  border-radius:15px">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //about -->
			
			<!-- team -->
			<section class="team py-5" id="team">
            <h3 class="title text-uppercase text-center text-bl mb-5 pb-xl-3">OUR TEAM</h3>
				<div class="container py-xl-5 py-lg-3">
				<div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="images/mana.jpg" alt="team member" class="img-responsive" height="300px">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Architecture and Backend Designer</h4>
                                    </div>
                                    <div class="s-link">
                                        <a href="https://github.com/Mahananda1234567890"><i class="fab fa-github"></i></a>
                                        <a href="https://www.linkedin.com/in/mahananda-matadawar-7a315716b"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 style="margin-left:15%;">MAHANANDA M</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="images/pinky.jpg" alt="team member" height="300px" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Report and Documentation</h4>
                                    </div>
                                    <div class="s-link">
										<a href="https://github.com/samsu7603"><i class="fab fa-github"></i></a>
                                        <a href="https://www.linkedin.com/in/priyanka-patil/8488b4170"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 style="margin-left:20%;">PRIYANKA P</h5>
                            </div>
                        </div>
						<div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="images/r.jpg" height="300px" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Database Developer</h4>
                                    </div>
                                    <div class="s-link">
								 		<a href="https://github.com/Usernamerohit"><i class="fab fa-github"></i></a>
                                        <a href="https://www.linkedin.com/in/rohitkumar-j-011a4b169"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5  style="margin-left:15%;">ROHITKUMAR J</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="images/vijay.jpg" alt="team member" height="300px"class="img-responsive" style="transform: rotate(0deg);">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Full-Stack Web Developer</h4>
                                    </div>
                                    <div class="s-link">
										<a href="https://github.com/vijayghattad"><i class="fab fa-github"></i></a>
                                        <a href="https://www.linkedin.com/in/vijaykumar-ghattad-5aa738156"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5  style="margin-left:15%;">VIJAYKUMAR G</h5>
                            </div>
                        </div>

                    </div>

                </div>
				</div>
			</section>
			<!-- team -->

			<!-- contact -->
			<section class="contact py-5" id="contact">
				<div class="container py-xl-5 py-lg-3">
					<h3 class="title text-uppercase text-center text-bl mb-5 pb-xl-3">Contact Us</h3>
					<div class="row mail-w3l-w3pvt-web pt-xl-4">
						<div class="col-md-5 contact-left-w3ls">
							<h3>Contact Info</h3>
							<div class="row visit">
								<div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
									<span class="fa fa-home" aria-hidden="true"></span>
								</div>
								<div class="col-md-10 col-sm-10 col-10 contact-text-w3pvt-webinf0">
									<h4>Visit us</h4>
									<p>K.L.E.Institute Of Technology</p>
									<p>Hubli.</p>
								</div>
							</div>
							<div class="row mail-w3 my-4">
								<div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
									<span class="fa fa-envelope" aria-hidden="true"></span>
								</div>
								<div class="col-md-10 col-sm-10 col-10 contact-text-w3pvt-webinf0">
									<h4>Mail us</h4>
									<p><a href="mailto:info@example.com">Vijaybghattad@gmail.com</a></p>
								</div>
							</div>
							<div class="row call">
								<div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
									<span class="fa fa-phone" aria-hidden="true"></span>
								</div>
								<div class="col-md-10 col-sm-10 col-10 contact-text-w3pvt-webinf0">
									<h4>Call us</h4>
									<p>9535470585</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 w3pvt-webinfo_mail_grid_right mt-md-0 mt-5">
							<form action="#" method="post">
								<div class="form-group">
									<input type="text" name="Name" class="form-control" placeholder="Name" required="">
								</div>
								<div class="form-group">
									<input type="email" name="Email" class="form-control" placeholder="Email" required="">
								</div>
								<div class="form-group">
									<textarea name="Message" placeholder="Message......." required=""></textarea>
								</div>
								<button type="submit" class="btn">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- //contact -->
			<!-- move top icon -->
			<a href="#home" class="move-top text-center"></a>
			<!-- //move top icon -->
		</div>
		<!-- //left content -->
	</div>
	<!-- //main -->

</body>

</html>