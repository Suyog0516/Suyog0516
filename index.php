<!DOCTYPE html>
<html>
<head>
    
	<link rel="shortcut icon" type="png" href="home_page_style/images/icon/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Free Learn</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="home_page_style/style.css">
	<script type="text/javascript" src="home_page_style/script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>
<body>
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="home_page_style\images\icon\logo - Copy.png" alt="logo"></div>
			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#about_section">About</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
			<!-- <a class="get-started" href="D:\New folder\login\index.html">Get Started</a> -->
			
			<select name="cars" id="cars" class="get-started" onChange="window.location.href=this.value;">
					<option value="#">Click to Login</option>
					<option value="/admin/login.php">Login as Admin</option>
					<option value="/student/login.php">Login as Student</option>
					<option value="/faculty/login.php">Login as Teacher</option>
  			</select>
			
			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>The beautiful thing about learning is that nobody can take it away from you</p>
				<h5>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research!</h5>
			</div>
			<div class="svg-image">
				<img src="home_page_style/images/extra/svg1.jpg" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="home_page_style/images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="home_page_style/images/creator/CV1.jpeg" alt="Username">
				<p>Suyog</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedBACK">Feedback</a></li>
			</ul>
		</div>
	</header>
	
<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="home_page_style/images/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2>What you think about us ?</h2>
					<p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research.<br> Educational website can include websites that have games, videos or topic related resources that act as tools to enhance learning and supplement classroom teaching. These websites help make the process of learning entertaining and attractive to the student, especially in today's age. <br>Using HTML(HyperText Markup Language), CSS(Cascading Style Sheet), JavaScript, we can make learning more easier and in a interesting way.</p>
				</div>
		</div>
	</div>

<!-- TEAM -->
	<div class="diffSection" id="team_section">
		<center><p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">We're the Creators</p></center>
		<div class="totalcard">
			<div class="card">
				<center><img src="home_page_style/images/creator/CV1.jpeg"></center>
				<center><div class="card-title">Suyog S Gadhave</div>
				<div id="detail">
					<p>“ You can teach a student a lesson for a day; but if you can teach him to learn by creating curiosity, he will continue the learning process as long as he lives “</p>
					<div class="duty"></div>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="home_page_style/images/creator/DS.jpeg"></center>
				<center><div class="card-title">Dnyneshwar S Kirtane</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>
				</div>
				</center>
			<div class="card">
				<center><img src="home_page_style/images\creator\VK.jpeg"></center>
				<center><div class="card-title">Vaibhav M Kulkarni</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>
				</div>
				</center>
			</div>
		</div>
	</div>

<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center><p style="font-size: 50px; padding: 100px">Contact Us</p></center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
			<form action="mailto:kirtaneds11@gmail.com" method="post" enctype="text/plain">
				<label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name <span class="imp">*</span></label><br>
				<center>
				<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lname" style="width: 175px" required="required"><br>
				</center>
				<label>Email <span class="imp">*</span></label><br>
				<input type="email" name="mail" style="width: 100%" required="required"><br>
				<label>Message <span class="imp">*</span></label><br>
				<input type="text" name="message" style="width: 100%" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
			</div>
		</div>
	</div>


<!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span>Give Feedback</span>
		<div class="shortdesc2">
			<p>Please share your valuable feedback to us</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:gadhavesuyog@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
		</div>
	</div>

<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #000080, #8A2BE2); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”</div></marquee>

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="home_page_style/images/icon/logo - Copy.png" style="width: 150px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="home_page_style/images/icon\fb.png"></a>
					<a href="#"><img src="home_page_style/images/icon\insta.png"></a>
				</div><br><br>
				<p class="rights-text">Created By Suyog S Gadhave, Dnyneshwar S Kirtane, Vaibhav M Kulkarni.</p>
				<br><p><img src="home_page_style/images/icon/location.png"> Fergusson College<br>ShivajiNagar, Pune, Maharashtra 411004</p><br>
				<p><img src="home_page_style/images/icon/phone.png"> +91-020-6765-6000<br><img src="home_page_style/images/icon/mail.png">&nbsp; gadhavesuyog@gmail.com</p>
			</div>
		</div>
	</footer>

</body>
</html>