@extends('puplicUser.layout.master')
@section('contact')
   
@endsection
@section('css')
    
@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url(img/contactus.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  {{-- <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p> --}}
                  <h1 class="probootstrap-heading probootstrap-animate">Contact</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap"></div>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
</section>
  
  <section class="probootstrap-section">
    <div class="container">
      <div class="row probootstrap-gutter60">
        <div class="col-md-8">
          <h2 class="mt0">We can do this together, let’s try.</h2>
          <form action="#" method="post" class="probootstrap-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <h2 class="mt0">Get In Touch</h2>
          <ul class="probootstrap-contact-info">
            <li><i class="icon-location2"></i> <span>Aqaba,Jordan</span></li>
            <li><i class="icon-mail"></i><span>info@fieldsCorner.com</span></li>
            <li><i class="icon-phone2"></i><span>+962 03247814<span></li>
          </ul>
          <h2>Feedback</h2>
          <p>At fields corner Stadium we welcome your feedback at all times. Your comments and suggestions are greatly appreciated and help us to continually improve our operation. All comments received will be treated in confidence as per our. </p>
          
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-half">
    <div class="image" style="background-image: url(img/slider_2.jpg);"></div>
    <div class="text">
      <div class="probootstrap-animate fadeInUp probootstrap-animated">
        <h2 class="mt0">Best 5 Star hotel</h2>
        <p><img src="img/curve_white.svg" class="seperator" alt="Free HTML5 Bootstrap Template"></p>
        <div class="row">
          <div class="col-md-6">
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>    
          </div>
          <div class="col-md-6">
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>    
          </div>
        </div>
        <p><a href="#" class="link-with-icon white">Learn More <i class=" icon-chevron-right"></i></a></p>
      </div>
    </div>
  </section>
@endsection

