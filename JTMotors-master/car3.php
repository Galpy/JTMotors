<!DOCTYPE html>
<html>
<title>
		JT Motors
	</title>
	<link rel="icon" href="Images\IMG_4352.jpg" class="responsive">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="main.css" rel="stylesheet" type="text/css" />
	<link href="car3.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<header>
		<a href="home.html">
		<img src= "Images\IMG_4352.jpg" class="JTMotorsIcon responsive" href="home.html">
	</a>
	</header>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark">
			 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			 </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto ">
			      <li class="nav-item">
			        <a class="nav-link" href="home.html">Home </a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="inventory.html">Inventory<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="aboutus.html">About Us</a>
			      </li>
			    </ul>
			</div>
		</nav>	
	</header>
<img src="Images\FRS.jpg" class="carImage mx-auto d-block img-fluid" width=50% height=auto>
						<p class="carInfo">
						2013 Scion FRS
						<br><br>
						Miles: 120,000 <br>
						Transmission: Manual <br>
						Exterior Color: Red <br>
						</p>
						<div class="container">
  <div style="text-align:center">
    <h2>Let us know you are interested in this car!</h2>
  </div>
  <div class="row">
    <div class="column">
      <form name="contactForm" method="POST" action="Contact.php" data-netlify="true">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="FirstName" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="LastName" placeholder="Your last name..">
        <label for="email">E-mail</label>
        <input type="text" id="email" name="email" placeholder="Your E-mail..">
        <label for="subject">Additional Comments</label>
        <textarea id="subject" name="message" type="text" placeholder="Write something.." style="height:170px"></textarea>
        <input id="submit" name="submit" type="submit" value="Submit" />
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<footer id="footer">
	Phone: (405) 420-2816 <br>
	<a href="mailto: JTMotorsAutoSales@gmail.com" class="emailLink" target="_blank"> E-mail: JTMotorsAutoSales@gmail.com </a><br>
	<a href="https://www.google.com/maps/place/27+W+4th+St,+Edmond,+OK+73003/@35.6516077,-97.4852992,17z/data=!3m1!4b1!4m5!3m4!1s0x87b21e4d1363bd8d:0x90e2d90cb1eeb4ca!8m2!3d35.6516034!4d-97.4831052" class="addressLink" target="_blank"> Address: 27 West 4th Street, Edmond, Oklahoma 73003 </a><br>
	©2020 JT Motors Auto Sales LLC.</footer>
</body>
</html>
