@extends('layouts.app')

@section('content')
<h3 class="mb-3">Contact</h3>
<div class="row mb-4">
  <div class="col-12 col-lg-4 my-2 my-lg-0">
    <div class="card border-0 shadow h-100">
      <div class="card-header bg-dark text-white">
        <h5 class="m-0">Muzio Nairobi CBD</h5>
      </div>
      <div class="card-body bg-white">
        <div class="card-text">Main Store</div>
        <div class="card-text">Kimathi Street, Next to Hilton Hotel</div>
        <div class="card-text"><a href="#">+254 720 123 456</a></div>
        <div class="card-text"><a href="#">+254 20 2123456</a></div>
        <div class="card-text">8:00 AM - 6:00 PM</div>
        <div class="card-text"><a href="#">muzio.cbd@muzio.co.ke</a></div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4 my-2 my-lg-0">
    <div class="card border-0 shadow h-100">
      <div class="card-header bg-dark text-white">
        <h5 class="m-0">Muzio Westlands</h5>
      </div>
      <div class="card-body bg-white">
        <div class="card-text">Branch Store</div>
        <div class="card-text">Westgate Mall, 2nd Floor</div>
        <div class="card-text"><a href="#">+254 722 987 654</a></div>
        <div class="card-text"><a href="#">+254 20 2987654</a></div>
        <div class="card-text">9:00 AM - 7:00 PM</div>
        <div class="card-text"><a href="#">muzio.west@muzio.co.ke</a></div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4 my-2 my-lg-0">
    <div class="card border-0 shadow h-100">
      <div class="card-header bg-dark text-white">
        <h5 class="m-0">Muzio Karen</h5>
      </div>
      <div class="card-body bg-white">
        <div class="card-text">Branch Store</div>
        <div class="card-text">The Hub Mall, Karen</div>
        <div class="card-text"><a href="#">+254 733 456 789</a></div>
        <div class="card-text"><a href="#">+254 20 2456789</a></div>
        <div class="card-text">9:00 AM - 7:00 PM</div>
        <div class="card-text"><a href="#">muzio.karen@muzio.co.ke</a></div>
      </div>
    </div>
  </div>
</div>

<h4 class="my-3">Follow Us</h4>
<div class="social-icon-container">
  <a href="https://www.facebook.com" target="_blank" class="social-icon facebook">
    <i class="fab fa-facebook-f"></i>
  </a>
  <a href="https://www.instagram.com" target="_blank" class="social-icon instagram">
    <i class="fab fa-instagram"></i>
  </a>
  <a href="https://www.twitter.com" target="_blank" class="social-icon twitter">
    <i class="fab fa-x-twitter"></i>
  </a>
  <a href="https://www.youtube.com" target="_blank" class="social-icon youtube">
    <i class="fab fa-youtube"></i>
  </a>
</div>

<h4>Find Us</h4>
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=nairobi+cbd+kimathi+street&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0; height: 100%; width: 100%" allowfullscreen></iframe>
</div>

@endsection