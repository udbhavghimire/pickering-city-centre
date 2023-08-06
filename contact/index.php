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

    <title> Pre construction homes for sale in Durham Region | Register Today</title>

    <meta name="title" content="Pre construction homes for sale in Pickering | Register Today">
    <meta name="description" content="New Construction Homes & Condos in Pickering | Find Pre construction Detached, Townhomes & condos in Pickering. Plans & pricing available">
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
   
    <link rel="manifest" href="/site.webmanifest">

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

<?php require '../header.php' ?>

    <section>
        <div class="pt-5 " id="Contact">
            <div class="pt-5 mt-5 " data-aos="fade-up" data-aos-duration="2000" data-aos-delay="50">
                <div class="row mx-0 " >
                    <!-- <div class="text-center pt-3 ">
                        <img src="images/empire-logo.png " class="img-fluid regoimg " alt="Empire Communities Logo ">
                    </div> -->
                    <h6 class="text-center fs-1 fw-bold pt-3 register "> Send me latest update on Pickering </h6>
                    <div class="registertext px-4 d-flex justify-content-center align-items-center text-center ">
                        <p>Register today and get the latest update on Durham Region Pre Construction Condos & Homes
                        </p>
                    </div>

                </div>
                <div class="row row-cols-1 row-cols-md-3 mx-0 g-5 pb-md-5 ">
                    <div class="col-md-3 "></div>
                    <div class="col-md-6 px-md-5 ">

                        <form action="../contactForm.php" method="POST">
                            <div class="row ">
                                <div class="mb-3 "><input type="text" placeholder="Name" name="name" id="name" class="fields" required></div>

                            </div>
                            <div class="row row-cols-1 row-cols-sm-2 ">
                                <div class="col ">
                                    <div class="mb-3 "><input type="text" aria-describedby="emailHelp" placeholder="Phone" name="phone" id="phone" class="fields" required></div>
                                </div>
                                <div class="col ">
                                    <div class="mb-3 "><input type="text" aria-describedby="emailHelp" placeholder="Email" name="email" id="email" class="fields" required></div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class=" "><textarea name="message" id="message" placeholder="Enter your message" class="fields mess" required></textarea></div>
                            </div>
                            <div class="row ">
                                <p class=" text-muted sm-text text-center mt-0 ">*I consent to receive future communications about Pickering City Centre Homes. I understand I can opt out at anytime by sending an email.</p>
                            </div>
                            <div class="row ">
                                <div class="col text-center ">
                                    <!-- <input type="submit " onclick="sendMail() " value="Send " class="btn call-btn btn-sm p-2 px-4 btn-lg "> -->
                                    <Button class="btn call-btn  p-2 px-4 btn-lg">Send</Button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="row-cols-md-3 "></div>
                </div>
            </div>
        </div>
    </section>

  


<?php require '../footer.php'; ?>


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