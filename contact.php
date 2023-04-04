<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Contact</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg sticky-top">
			<div class="container">
				<a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="post.php">Post</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<section class="kitchen-section" id="section-contact">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12">
						<h2 class="display-4">Contact</h2>
					</div>
				</div>
				<div class="row justify-content-center text-center m-3">
					<div class="col-lg-8">
						<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Enim odit asperiores hic assumenda laudantium et a laboriosam nulla. </p>
					</div>
				</div>
				<div class="row my-3">
					<div class="col-lg-4">
						<h3 class="text-center">Contact Details</h3>
						<div class="row my-3">
							<div class="col-lg-12">
								<div class="address">
									<h4><i class="fa-solid fa-house-flag"></i> Address</h4>
									<p>7th Floor, 13/B, Block-C, Uttara Dhaka-1208</p>
								</div>
							</div>
						</div>
						<div class="row my-3">
							<div class="col-lg-12">
								<div class="address">
									<h4><i class="fa-solid fa-mobile-retro"></i> Phone</h4>
									<p>+880 17xxxxxxx</p>
								</div>
							</div>
						</div>
						<div class="row my-3">
							<div class="col-lg-12">
								<div class="address">
									<h4><i class="fa-solid fa-envelope-circle-check"></i> Email</h4>
									<p>info@company.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<h3 class="text-center">Leave A Message</h3>
						<form action="prosess.php" method="POST">
							<div class="mb-4">
								<input type="text" class="form-control" name="name" placeholder="Input Your name">
							</div>
							<div class="mb-4">
								<input type="text" class="form-control" name="email" placeholder="Input Your email">
							</div>
							<div class="mb-4">
								<input type="text" class="form-control" name="subject" placeholder="Input Your Subject">
							</div>
							<div class="mb-4">
								<textarea class="form-control" name="content" placeholder="Type Message"></textarea>
							</div>
							<div class="mb-4">
								<input type="submit" class="btn btn-success form-control" value="Send Message">
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>