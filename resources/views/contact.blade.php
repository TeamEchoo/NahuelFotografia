<x-head>
<x-navBar />
​
​
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
                        @if (session()->has('flash'))
                            <div class="container">
                                <div class="alert alert-success">{{ session ('flash') }}</div>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
​
</x-head>