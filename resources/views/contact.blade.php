<x-head>
<x-nav-bar />
​
​
<section id="contact" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8">


            <div id="paddingContactImage" class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                    <div class="section-title">
                        <img src="contactPhoto.jpg">
                    </div>
                    <div id=PaddingDescription>
                        <p>Nahuel Martinez</p>
                        <p> <a href="mailto:info@nahuelmartinez.com">info@nahuelmartinez.com</a></p>
                        <p>+49 (0)1637000359</p>
                        <a href="https://www.instagram.com/nahhuelmarttinezphoto/"><img src="https://image.flaticon.com/icons/png/512/87/87390.png" width="5%"></a>
                    </div>
                </div>
            </div>
            <div id="paddingContact" class="col-md-7 col-sm-10">


            <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <form id="contact-form" action="#" method="POST" action="{{ route('contact')}}">
                        {{ csrf_field() }}

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