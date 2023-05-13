@extends('layout')

@section('content')
  <!-- SUB BANNER -->
  <section class="section-sub-banner bg-9">
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>CONTACT WITH US</h2>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
            </div>
        </div>

    </div>

</section>
<!-- END / SUB BANNER -->

<!-- CONTACT -->
<section class="section-contact">
    <div class="container">
        <div class="contact">
            <div class="row">

                <div class="col-md-6 col-lg-5">

                    <div class="text">
                        <h2>Contact</h2>
                        
                        <ul>
                            <li><i class="icon lotus-icon-location"></i>11 Chirokchi Street, Uzbekistan</li>
                            <li><i class="icon lotus-icon-phone"></i> +998 91 313 69 95</li>
                            <li><i class="icon fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f09c9f848583989f84959cb097">[email&#160;protected]</a>mail.com</li>
                        </ul>
                    </div>

                    <div class="contact-location">
                        <a class="btn-collapse" data-toggle="collapse" href="#location">OTHER LOCATION <span class="fa fa-angle-down"></span></a>
                        <div class="collapse" id="location">
                            <div class="location-group">
                                <h6>Jahongir Guest House</h6>
                                <span>4 Chirokchi Street, Samarkand</span>

                                <!-- ITEM -->
                                <div class="location-item" data-location="39.65311360207339, 66.97792772872127">
                                    <div class="img">
                                        <img src="images/contact/img-1.jpg" alt="">
                                        <i class="fa  fa-map-marker"></i>
                                    </div>
                                    <div class="text">
                                        <address>4 Chirokchi Street, Samarkand</address>
                                        <p>
                                            Tel: +998 91 313 69 95 <br>
                                            Fax: +998 66 235 78 99
                                        </p>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                               

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-lg-6 col-lg-offset-1">
                    <div class="contact-form">
                        <form id="send-contact-form" action="https://landing.engotheme.com/html/lotus/demo/send_mail_contact.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="field-text"  name="name" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="field-text" name="email" placeholder="Email">
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" class="field-text" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-sm-12">
                                    <textarea cols="30" rows="10" name="message"  class="field-textarea" placeholder="Write what do you want"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="awe-btn awe-btn-13">SEND</button>
                                </div>
                            </div>
                            <div id="contact-content"></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END / CONTACT -->

<!-- MAP -->
<section class="section-map">
    <h1 class="element-invisible">Map</h1>
    <div class="contact-map">
        
        <div id="map" ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49129.039776260215!2d66.91357818048805!3d39.68199907745851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18b454a40ec5%3A0x975a59209af77710!2sJahongir%20Hotel!5e0!3m2!1sen!2s!4v1683637219366!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
</section>
<!-- END / MAP -->
@endsection


