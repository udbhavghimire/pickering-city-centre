<?php session_start();?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/silverBox.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title> Clarehaven Estates for sale in Pickering | Register Today</title>

    <meta name="title" content="Clarehaven Estates for sale in Pickering | Register Today">
    <meta name="description" content="Clarehaven Estates for sale in Pickering | Register Today">
    <meta name="keywords" content="Pickering City Centre, Pickering City Centre, Pickering City Centre Condos, CentreCourt Developments, Pre construction condos in pickering,  condo in pickering">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta property="og:image" content="https://thepickering.ca/Pickering-City-Centre-Condos-Coming-Soon--1-v9-full.jpg"> 
    <meta property="og:site_name" content="Pickering City Centre" />

    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="icon" type="image/ico" sizes="16x16" href="../favicon.ico">
   
    <link rel="manifest" href="../site.webmanifest">

    <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Pickering City Centre",
  "url": "https://thepickering.ca/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
</head>

<body>

<?php include '../header.php' ?>

<section>
        <div class="">
            <div class="container pt-3 ">
                <div class="my-md-5 my-3"></div>
                <div class="py-5">
                   <h1 class="fw-bold fs-1  mx-1 ps-md-0   brand-color ">
                    Clarehaven Estates
                    </h1>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../pre-construction-homes-pickering/">Pre Construction Homes Pickering</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Clarehaven Estates</li>
                        </ol>
                        </nav>
                </div>

                <div class="rounded-3">
               
                <div class="d-flex justify-content-between pb-3">
                    <div class="row  g-4 ">
                    
                    <div class="col">
                        <div class="afte">
                            <img loading="lazy" src="../images/Clarehaven Estates/1.jpg" alt="Mary Street Towns" class="img-fluid rounded-3">
                        </div>
                    </div>
                    
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
   <div class="container">
  <div class="d-flex center-sm">
  <div class=" pt-5">
   <p class="mb-0 fs-1 fw-bold">Clarehaven Estates</p>
        <p class="mb-0 card-price fs-3">Pricing not available</p>
        <p class="mb-0 fs-3">5033 Brock Road, Pickering, ON</p>
        <p class="mb-0 fs-3">Move in TBD</p>
        <p class="mb-0 fs-3">Developed by: Geranium</p>
        <p class="mb-0 fs-3"> No of units: 70</p>
    </div> 
  </div> 

  <div class="pt-5 row">
        <p class ="textt d-flex justify-content-center">
        Clarehaven Estates is a new single family home community by Geranium currently in preconstruction at 5033 Brock Road, Pickering. Clarehaven Estates has a total of 70 units. Sizes range from 2500 to 5000 square feet.
<br> <br>
Your Haven Awaits<br>
Experience the best of the country living at Clarehaven Estates – an exquisite community of spacious Bungalow, Bungalow with Lofts, and Two-Storey residences nestled in the heart of the Hamlet of Claremont. Surround yourself with lush natural landscapes, abundant wildlife, and breathtaking scenery, and savour the joys of quality time with your loved ones in an environment that promotes relaxation and well-being.
<br> <br>

Source: Geranium Homes<br>

Builder's website - http://www.geranium.com/
    </div>
   </div>                  
    </section>



<?php include '../footer.php'; ?>


<!-- 
    <script>
        // Change navbar background color on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 0) {
                navbar.classList.remove('transparent-navbar');
                navbar.classList.add('solid-navbar', 'navbar-brand-sm');


            } else {
                navbar.classList.remove('navbar-brand-sm');
                navbar.classList.remove('solid-navbar');
                navbar.classList.add('transparent-navbar');

            }
        });
    </script> -->
     <script src="js/silverBox.min.js" ></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
            
            <?php
        if(
        isset($_SESSION['success'])
        ){
            ?>
    <script type="text/javascript" async>
       silverBox({
	title: {
		text: "Success",
		alertIcon: "success",
	},
	text: "Your Message has been received.\n We'll get back to you soon.",
});
    </script>
    <?php
            unset($_SESSION['success']);
        }

        if(
            isset($_SESSION['error'])
            ){
                ?>
    <script type="text/javascript" async>
           silverBox({
	title: {
		text: "Error",
		alertIcon: "error",
	},
	text: "Your Message has not been received.",
});
    </script>
    <?php
                unset($_SESSION['error']);
            }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>