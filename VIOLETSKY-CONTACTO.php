<?php include 'VIOLETSKY-HEADER.php';?>

<!-- ///////////////////// VIOLETSKY Navigation bar //////////////////////// -->

<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="index.php"><img src="img/Logo_VS.png"></a>
		<button class="navbar-toggler float-sm-right" type="button" data-toggle="collapse" data-target="#navVIOLETSKY">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navVIOLETSKY">
			<ul class="navbar-nav ml-auto pr-0 mr-0 mt-0 pt-0">
				<li class="nav-item dropdown" >
					<a class="nav-link dropdown-toogle" id="navbardrop" href="index.php" data-toggle="dropdown">Who we are</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="index.php#whowearecont">Who we are</a>
        				<a class="dropdown-item" href="index.php#whatweoffer">What we offer</a>
        				<a class="dropdown-item" href="index.php#aboutus">About us</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toogle" id="navbardrop2" href="index.php" data-toggle="dropdown">Current Projects</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="VIOLETSKY-SELLOVIOLETA.php">Sello Violeta</a>
        				<a class="dropdown-item" href="VIOLETSKY-PETRI.php">Petri</a>
					</div>
				</li>
				<li class="nav-item active">
					<a class="nav-link active" href="VIOLETSKY-CONTACTO.php">Contact Us</a>
				</li>
				<li class="nav-item">
					<p>    </p>
				</li>

			</ul>		
		</div>
</nav>

<!-- ***** Hero Container ***** -->

<div class="container-fluid violetskyhero">
    <div class="row pt-5 pb-5">
        <div class="col-md-8">
            <h1 class="p-5" data-aos="zoom-in" data-aos-duration="3000">We'll show you what reality is.</h1>
        </div>
    </div>
</div>


<!-- Email Contact Form -->
<div class="container-fluid formacorreo">
	<div class="row">
		<div class="col-md-6">
			<div class="container-fluid p-sm-3 p-md-5">	
				<h5>Contact Us</h5>
				  <form action="mail.php" method="post" class="needs-validation" novalidate>
				    <div class="form-group">
				      <label for="nombre">Name:</label>
				      <input type="text" class="form-control" id="nombre" placeholder="Type your name" name="nombre" required>
				      <div class="valid-feedback">Thank you</div>
				      <div class="invalid-feedback">Please type your name</div>
				    </div>
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Type your eMail" name="email" required>
				      <div class="valid-feedback">Thank you</div>
				      <div class="invalid-feedback">Please type your email</div>
				    </div>
				    <div class="form-group">
				      <label for="tel">Phone:</label>
				      <input type="tel" class="form-control" id="phone" placeholder="Type your phone" name="phone" required>
				      <div class="valid-feedback">Thank you</div>
				      <div class="invalid-feedback">Please type your phone</div>
				    </div>
				    <div class="form-group">
				      <label for="mensaje">Message:</label>
				      <textarea class="form-control" rows="5" id="mensaje" name="mensaje" required></textarea>
				      <div class="valid-feedback">Thank you</div>
				      <div class="invalid-feedback">Please type your message</div>
				    </div>
				
				    <button type="submit" class="btn btn-secondary">SEND</button>
				  </form>
			</div>
		</div>
		<div class="col-md-1">
			
		</div>

		<div class="col-md-4 my-auto">
			<img src="img/icono_vs_Ok.png" class="img-fluid">
			<div class="container-fluid p-sm-1 p-md-4">
				<h5 class="mb-0 pt-4">Our Numbers:</h5>
				<p class="mb-0">+1 872 215 1719</p>
    			<p class="mb-0">+52 81 3403 5583</p>
    			<a href="mailto:info@violetskytech.com" class="pb-4">info@violetskytech.com</a>
    		</div>
		</div>
		<div class="col-md-1">
			
		</div>
	</div>	  
</div>

<?php include 'VIOLETSKY-FOOTER.php';?>










