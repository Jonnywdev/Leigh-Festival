<!DOCTYPE html>
<html lang="en">
<?php 
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        echo'<script>console.log("posted");</script>';
        $email = $_POST['emailAddress'];
        $subject = $_POST['emailSubject'];
        $message = $_POST['emailMessage'];
    
        // the message
        $msg = "Message From " ."Email address: " . $emailSubject . "\n" . $emailMessage;
    
        // use wordwrap() if lines are longer than 70 characters
        //$msg = wordwrap($msg,70);
    
       // send email
        if(mail("jonny.whittle@sky.com",$emailSubject,$msg)){
            //echo'<script>hidecontactform();</script>'
            echo"<h1>email has been sent</h1>";
        }
        else{
            echo'<script>console.log("email not sent");</script>';
        }
    
    }else{
        echo'<script>console.log("not posted");</script>';
    }
?>
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MLXXTR4');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Leigh RUFC are proud to bring back our annual festival as the Leigh Festival on the 2nd to the 5th June 2022. The aim for the event is to provide a great social experience for all attending to enjoy the jubilee weekend together through music, entertainment, sport and drink. 
    All of us here at the club are looking forward and working hard to create a truly enjoyable experience for all. Entrance to the family fun day and sporting events are completely free. We are working in partnership with charitable causes throughout the event with the aim of leaving a lasting impact as well as an enjoyable memory for all.">
    <meta name="keywords" content="Festival, Leigh, Live Music, Beer festival, Queens jubilee, Leigh Festival, 
    Funfair, Fun day, Family, North West, Community,  Sevens Rugby, Tryit Rugby, Rugby, Sports, Leigh RUFC, Leigh Works, 
    DJ, Summer bank holiday, Brass band, beer, wine, cocktails, cider, camera, Charities, Andy's man club, food trucks, great weekend, spirits, fun for all">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab972f586c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/azh5fcf.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css" media="screen" type="text/css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Contact Us</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLXXTR4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- header -->
<nav class="navbar navbar-expand-lg navbar-light bg-blue">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Leigh Festival Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link navl-left" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="btn dropdown-toggle nav-link navl-left" type="button" data-toggle="dropdown" aria-expanded="false">
                        Sponsorship    
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item b-btm" href="beer-sponsor.html">Beer Barrel</a>
                        <a class="dropdown-item b-btm" href="glassware-sponsor.html">Glassware</a>
                        <a class="dropdown-item b-btm" href="music-sponsor.html">Music</a>
                        <a class="dropdown-item b-btm" href="main-event-sponsor.html">Main Event</a>
                        <a class="dropdown-item b-btm" href="bar-sponsor.html">Bar</a>
                        <a class="dropdown-item b-btm" href="rugby-sponsor.html">Rugby</a>
                        <a class="dropdown-item" href="beer-token-sponsor.html">Beer Token</a>
                    </div>
                  </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.html">Contact Us</a>
            </li>
        </div>
    </div>
</nav>

<!-- contact us page -->
<div class="container container-margin-y">
    <div class="row">
        <div class="col">
            <h1 class="main-header">
                Contact Us
            </h1>
            <p>
                Want to sponsor or have a stall / food van you want to be at Leigh Festival? 
                Easily contact us using the form below or contact one of our organisers personally below. 
            </p>
        </div>
    </div>
    <div class="contact-wrapped flex">
        <!-- contact form -->
        <div class="col pl-0">
            <form action="/contact.php" method="post" class="contact-form"> 
                <!-- I want the emails to go to trav - chris@collinsanddarwell.co.uk -->
                <div class="form-group">
                  <input type="email" class="form-control" id="emailAddress" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                  <select class="form-control" id="emailSubject" required>
                    <option value="">-- Email Subject --</option>
                    <option value="beer">Beer Barrel Sponsorship</option>
                    <option value="glassware">Glassware Sponsorship</option>
                    <option value="music">Music Sponsorship</option>
                    <option value="main">Main Event Sponsorship</option>
                    <option value="bar">Bar Sponsorship</option>
                    <option value="rugby">Mixed Ability Rugby Sponsorship</option>
                    <option value="token">Beer Token Sponsorship</option>
                    <option value="foodvan">I have a food van I want to bring</option>
                    <option value="stall">I want to set up a stall</option>
                  </select>
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="emailMessage" rows="3" placeholder="Type your message here..." required></textarea>
                </div>
                <input type="submit" value="Submit" class="contact-submit">
            </form>
            <div class="mt-5">
                <a href="homepage.html" class="p-5 text-white">Go to home</a>

            </div>
        </div>

        <!-- contact cards -->
        <div class="col">
            <div class="card contact-card">
                <div class="card-body">
                    <div class="row">
                        <!-- name and role -->
                        <div class="col">
                            <h5 class="card-title m-0 p-0">Chris Travers <h6 class="m-0 p-0"><small class="m-0 p-0">Sponsorship</small></h6></h5>
                        </div>
                    </div>
                    <!-- email address -->
                    <div class="row pt-3">
                        <div class="col">
                            <p class="card-text">Email:</p>
                        </div>
                        <div class="col">
                            <a href="mailto:chris@collinsanddarwell.co.uk" class="contact-text"><p class="card-text"><b>Chris@collinsanddarwell.co.uk</b></p></a>
                        </div>
                    </div>
                    <!-- phone number -->
                    <div class="row">
                        <div class="col">
                            <p class="card-text">Phone:</p>
                        </div>
                        <div class="col">
                            <a href="tel:07900 404718" class="contact-text"><p class="card-text"><b>07900 404 718</b></p></a>
                        </div>
                    </div>
                </div>
            </div>
              
            <div class="card mt-4 contact-card">
                <div class="card-body">
                    <div class="row">
                        <!-- name and role -->
                        <div class="col">
                            <h5 class="card-title m-0 p-0">Jonny Whittle <h6 class="m-0 p-0"><small class="m-0 p-0">Lead Organiser</small></h6></h5>
                        </div>
                    </div>
                    <!-- email address -->
                    <div class="row pt-3">
                        <div class="col">
                            <p class="card-text">Email:</p>
                        </div>
                        <div class="col">
                            <a href="mailto:Jonny.whittle@sky.com" class="contact-text"><p class="card-text"><b>Jonny.whittle@sky.com</b></p></a>
                        </div>
                    </div>
                </div>
            </div>
              
            <div class="card mt-4 contact-card">
                <div class="card-body">
                    <div class="row">
                        <!-- name and role -->
                        <div class="col">
                            <h5 class="card-title m-0 p-0">Canaan Thomas <h6 class="m-0 p-0"><small class="m-0 p-0">Lead Organiser</small></h6></h5>
                        </div>
                    </div>
                    <!-- email address -->
                    <div class="row pt-3">
                        <div class="col">
                            <p class="card-text">Email:</p>
                        </div>
                        <div class="col">
                            <a href="mailto:canaanth@gmail.com" class="contact-text"><p class="card-text"><b>Canaanth@gmail.com</b></p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<footer class="mt-4">
    <div class="footer-wrapped flex ">
        <div class="row">
            <div class="col flex flex-end">
                <img src="assets/images/footer-logo.png" alt="" class="footer-logo">
            </div>
            <div class="col flex-end">
                <div class="text-right">
                    <p>
                        Leigh RUFC
                        <br>
                        Hand Lane | Round Ash Park
                        <br>
                        WN7 3NA
                        <br>
                        <a href="tel:01942673526" class="color-white">01942 673 526</a>
                    </p>
                </div>
                <div class="icons-wrapped">
                    <a href="https://www.facebook.com/LeighFestival" target="_blank"><i class="fa-brands fa-square-facebook pr-3"></i></a>
                    <a href="https://www.instagram.com/leighfestival/" target="_blank"><i class="fa-brands fa-square-instagram pr-3"></i></a>
                    <a href="https://twitter.com/LeighFestival" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-row">
        <div class="col flex flex-end text-center">
            <div class="row">
                <a href="https://avandor.co.uk/" target="_blank" class="avandor-txt"><small class="mb-0 pb-0">Designed by </small><img src="assets/images/avandor-logo.png" alt="Avandor Logo" class="avandor-logo"></a>
            </div>
        </div>
    </div>
</footer>
<!-- javascript for swiper -->
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/swiper-script.js"></script>
<script src="assets/js/script.js"></script>
<!-- javascript for bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- script for deployment -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init({
    duration: 2000
});
</script>


</body>
</html>



