<!DOCTYPE html>
<html>
<head>
	<title>Corona</title>
	<link rel='stylesheet' type='text/css' href=css/style.css' />
	<?php include'link/link.php' ?>
	<?php include'css/style.php' ?>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'>
    </script><script src='https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js'></script>
</head>
<body>
	<a class="content" id="button"></a>
<nav class="navbar navbar-expand-lg nav-style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptoms">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#prevention">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Contact">contact</a>
      </li>
    </ul>
    
  </div>
</nav>
<div class="main-header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="left-side w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="corona-images/coronavirus.jpg" width="300" height="300">
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="right-side w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's stay save fight thogether agains coro<span>
					<img src="corona-images/images__4_-removebg-preview.png" width="100" height="100">
				</span>na virus</h1>
			</div>
		</div>
	</div>
	
</div>
<!-- ******************Corona update **************-->
<section class="corona_update">
	<div class="mb-3">
		<h3 class="text-upercase text-center">COVID-19 updates</h3>
	</div>
	<div class="d-flex justify-content-around align-items-center">
		<div>
			<h1 class="count">1,562,348</h1>
			<p>Passengers screened at airport</p>
		</div>
		<div>
			<h1 class="count">1,562,348</h1>
			<p>Active COVID-19 case</p>
		</div>
		<div>
			<h1 class="count">5,62,348</h1>
			<p>Cured/Discharged case</p>
		</div>
		<div>
			<h1 class="count">562</h1>
			<p>Death case</p>
		</div>
	</div>
	<!--******* About section******* -->
</section>
<div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
		<div class="section-header text-center mb-5 mt-4">
			<h1>About COVID-19</h1>
		</div>
		<div class="row pd-5">
			<div class="col-lg-5 col-md-6 col-12 ml-5">
				<img src="corona-images/about1.jpg" height="400" width="400" class="img-fluid">
				
			</div>
			<div class="col-lg-5 col-md-6 col-12 pr-5">
				<h2>What is coronavirus (COVID-19)</h2>
				<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
				<p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
				<p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>
			</div>
		</div>
	</div>

	<!--Symptoms Section -->


	<div class="container-fluid  pt-5 pb-5" id="symptoms">
		<div class="section-header text-center mb-5 mt-4">
			<h1>COVID-19 Symptoms</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5" >
					<figure class="text-center">
					<img src="corona-images/3411516.png" class="img-fluid" height="100" width="100">
					<figcaption>Cough</figcaption>
					</figure>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5" >
					<figure class="text-center">
					<img src="corona-images/runny-nose.png" class="img-fluid" height="100" width="100">
					<figcaption>Runny nose</figcaption>
					</figure>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5" >
					<figure class="text-center">
					<img src="corona-images/fever.png" class="img-fluid" height="100" width="100">
					<figcaption>Fever</figcaption>
					</figure>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5" >
					<figure class="text-center">
					<img src="corona-images/sore-throat.png" class="img-fluid" height="100" width="100">
					<figcaption>Sore throat</figcaption>
					</figure>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5" >
					<figure class="text-center">
					<img src="corona-images/asleep.png" class="img-fluid" height="100" width="100">
					<figcaption>Tiredness</figcaption>
					</figure>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5" >
					<figure class="text-center">
					<img src="corona-images/respiratory-system.png" class="img-fluid" height="100" width="100">
					<figcaption>Difficulty breathing or shortness of breath</figcaption>
					</figure>
				</div>
				
			</div>
		</div>
	</div>
</body>

<!--Prevention Section -->


	<div class="container-fluid sub-section pt-5 pb-5" id="prevention">
		<div class="section-header text-center mb-5 mt-4">
			<h1>6 Step Prevention Agains Coronavirus</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
					         <img src="corona-images/hand-wash1.png" class="img-fluid" height="80" width="80">
					     
					        </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
					         <img src="corona-images/keep-distance.png" class="img-fluid" height="80" width="80">
					     
					        </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>Maintain at least 1 metre (3 feet) distance between yourself and others. Why? When someone coughs, sneezes, or speaks they spray small liquid droplets from their nose or mouth which may contain virus. If you are too close, you can breathe in the droplets, including the COVID-19 virus if the person has the disease.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
					         <img src="corona-images/peoplehygen.jpg" class="img-fluid" height="80" width="80">
					     
					        </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
					         <img src="corona-images/quarantine.png" class="img-fluid" height="80" width="80">
					     
					        </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover. Have someone bring you supplies. If you need to leave your house, wear a mask to avoid infecting others. Why? Avoiding contact with others will protect them from possible COVID-19 and other viruses.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
					         <img src="corona-images/hospital.jpg" class="img-fluid" height="80" width="80">
					     
					        </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>If you have a fever, cough and difficulty breathing, seek medical attention, but call by telephone in advance if possible and follow the directions of your local health authority. Why? National and local authorities will have the most up to date information on the situation in your area. Calling in advance will allow your health care provider to quickly direct you to the right health facility. This will also protect you and help prevent spread of viruses and other infections.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
					         <img src="corona-images/fever1.png" class="img-fluid" height="80" width="80">
					     
					        </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>If you have a fever, cough and difficulty breathing, seek medical attention, but call by telephone in advance if possible and follow the directions of your local health authority. Why? National and local authorities will have the most up to date information on the situation in your area. Calling in advance will allow your health care provider to quickly direct you to the right health facility. This will also protect you and help prevent spread of viruses and other infections.</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		</div>
		<div class="container-fluid  pt-5 pb-5" id="Contact">
		<div class="section-header text-center mb-5 mt-1">
			<h1>Contact US</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<form action="" method="POST">
  <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control"  name="name" placeholder="user name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Mobile Number</label>
    <input type="number" class="form-control"  name="phone" placeholder="Mobile Number" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
  </div>
  <div class="form-group">
  	<label>Select Symptoms</label><br>
  	<div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" name="Symptoms[]" id="customCheck1" value="Fever">
    <label class="custom-control-label" for="customCheck1">Fever</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline mt-2">
    <input type="checkbox" class="custom-control-input" name="Symptoms[]" id="customCheck2" value="Cough">
    <label class="custom-control-label" for="customCheck2">Cough</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline mt-2">
    <input type="checkbox" class="custom-control-input" name="Symptoms[]" id="customCheck3" value="Runny_noise">
    <label class="custom-control-label" for="customCheck3">Runny Noise</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline mt-2">
    <input type="checkbox" class="custom-control-input" name="Symptoms[]" id="customCheck4" value="Other">
    <label class="custom-control-label" for="customCheck4">Other</label>
</div>
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Explain in Detail(optional)</label>
    <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
				</div>
			</div>
			
		</div>
	</div>
	<!-- footer -->
	<div class="mt-5">
		<div class="footer-style text-white text-center container-fluid ">
			<p>Copyright by Loknath Choudhary</p>
		</div>

	</div>
	<script>
        jQuery(document).ready(function($) {
            $('.count').counterUp({
                delay: 10,
                time: 3000
            });
        });
    </script>
	<script type="text/javascript">
		var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
	</script>
	</body>	
</html>

<?php
include'connection.php';

if (isset($_POST['submit'])) {

	$name=$_POST['name'];
	$email=$_POST['email'];
	$Contact=$_POST['phone'];
	$symtoms=$_POST['Symptoms'];
	$message=$_POST['details'];
	$chk="";
	foreach ($symtoms as $symp) {
		$chk .=$symp.",";
	}

	$sql="insert into coronacase(name,email,contact,symtoms,description) values('$name','$email','$Contact','$chk','$message')";
	if (mysqli_query($conn, $sql)) {
     echo "Record added successfully";
	//header('Location:'.$_SERVER['PHP_SELF']);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

//unset($_POST['submit']);
?>