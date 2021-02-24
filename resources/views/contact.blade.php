<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/contactMail.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/app.css">

</head>
<nav class="navbar navbar-expand-lg navbar-light  navbar__menu">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="#">
            <h1><b>NAHUEL MARTINEZ</b></h1>
            <h3>PHOTOGRAPHER</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">SKATEBOARDING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PORTRAIT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">STORE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<body>

    <section id="contact" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-8">
                    <!-- CONTACT INFO -->
                    <div id="paddingContactImage" class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                        <div class="section-title">
                            <img src="https://d2s22rn0thm1js.cloudfront.net/bT19YiUmtg7z-v0EcpAyidRkQqU=/958x1440/smart/http%3A%2F%2Fd2hl4mfiesch9e.cloudfront.net%2Ffreedombmx%2Fwp-content%2Fuploads%2F2019%2F07%2Fnahuel-martinez-photographer.jpg" width="70%">
                        </div>
                        <div id=PaddingDescription>
                            <p><i class="fa fa-map-marker"></i>Nahuel Martinez</p>
                            <p><i class="fa fa-comment"></i> <a href="mailto:info@company.com">nahuel@nahuelmartinez</a></p>
                            <p><i class="fa fa-phone"></i>+49 (0)1637000359</p>
                            <a href="https://www.instagram.com/nahhuelmarttinezphoto/"><img src="https://image.flaticon.com/icons/png/512/87/87390.png" width="10%"></a>
                            <a href="https://www.instagram.com/nahhuelmarttinezphoto/"><img src="https://www.flaticon.es/svg/vstatic/svg/20/20673.svg?token=exp=1614154193~hmac=c339a2877ed73f4579d8cfbfe7d0df06" width="10%"></a>
                        </div>
                    </div>
                </div>


                <div id="paddingContact" class="col-md-7 col-sm-10">


                    <!-- CONTACT FORM HERE -->
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <form id="contact-form" action="#" method="POST" action="{{ route('contact')}}">
                            {{ csrf_field() }} 
                            <!-- verificacion para ataques de identidad (419) -->

                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="form-control" rows="5" name="message" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
                                <button id="submit" type="submit" class="form-control" name="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </section>













</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>