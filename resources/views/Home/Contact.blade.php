@extends('Layouts.main')
@section('header')
    {{-- <title>About Us | Council of Student Organizations</title>
    <meta property="og:image" content="{{asset('assets/csofiles/CSO Pictures/IMG_0868.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/about.css')}}">
    <link rel="stylesheet" href="{{asset('css/Extras/anim.css')}}">
    <script src = "{{asset('js/extras/anim.js')}}"></script> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/contact.css')}}">
@endsection

@section('content')
    <!-- NAVBAR -->
    @include('Layouts.navbar', ['contactnav'=>true])
    <!-- /NAVBAR -->
    <div class="main-container">
        <section class="header">
          <div class="header-details container">
            <div>
              <h1>Contact Us</h1>
              <p>44 Organizations &sdot; 9 Executive Teams &sdot; <b>1 CSO</b></p>
            </div>
          </div>
        </section>
        <section class="message">
          <!-- <div class="container"> -->
          <div class="message container">
            <div class="message-purpose heading">
              <h2>Get in touch with <b>CSO</b></h2>
              <p>How can we help you?</p>
            </div>
            <div class="message-purpose panel" onclick="clickPurpose('inquiry')" id="panel--inquiry">
              <div class="message-purpose card">
                <i
                  class="far fa-question-circle"
                  style="font-size: 100px; color: #000;"
                ></i>
                <h3>Inquiries</h3>
              </div>
            </div>
            <div class="message-purpose panel" onclick="clickPurpose('partnership')" id="panel--partnership">
              <div class="message-purpose card">
                <i
                  class="far fa-handshake"
                  style="font-size: 100px; color: #000;"
                ></i>
                <h3>Partnerships</h3>
              </div>
            </div>
            <div class="message-form hide" id="message-form">
              <form class="" autocomplete="off" method="post">
                    {{ csrf_field() }}
                <input type="hidden" name="type" value="" id="message-type" />
                <div class="field">
                  <div class="input-text1">
                    <input type="text" name="name" placeholder="Full Name*" required/>
                  </div>
                </div>
                <div class="field">
                  <div class="input-text1">
                    <input type="email" name="email" placeholder="Email*" required/>
                  </div>
                </div>
                <div class="field">
                  <div class="input-text1">
                    <input type="text" name="subject" placeholder="Subject*" required/>
                  </div>
                </div>
                <div class="field">
                  <div class="input-text1">
                    <textarea
                      name="message"
                      rows="6"
                      placeholder="Message*"
                      style="resize: none; font-family: 'Open Sans';"
                      required
                    ></textarea>
                  </div>
                </div>
  
                <button class="" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </section>
        <!-- <hr> -->
        <!-- <section class="contact">
          <div class="contact-details container">
            <div class="contact-details heading">
              <h2>STAY CONNECTED</h2>
            </div>
            <div class="contact-details panel"> -->
              <!-- <p><i class="fas fa-phone"></i>&nbsp;<b>Phone: </b>(02) 524 4611 local 744</p>
              <p><i class="fas fa-envelope"></i>&nbsp;<b>Email: </b>cso@dlsu.edu.ph</p> -->
              <!-- <p>fb.com/DLSU.CSO</p>
              <p>@DLSUCSO</p> -->
              <!-- <p>
                <b><i class="fas fa-map">&nbsp;</i>Address: </b>4th Floor, Bro. Connon Hall, SPS Building, De La Salle University
              </p> -->
            <!-- </div>
          </div>
        </section> -->
      </div>
      <script>
        function clickPurpose(selected) {
            var type=document.getElementById("message-type").value;
            if(type != selected) {
                document.getElementById("panel--inquiry").classList.remove("selected");
                document.getElementById("panel--partnership").classList.remove("selected");
                document.getElementById("panel--"+selected).classList.add("selected");
                document.getElementById("message-form").classList.remove("hide");
                document.getElementById("message-type").value = selected;
            } else {
                document.getElementById("message-form").classList.add('hide');
                document.getElementById("panel--inquiry").classList.remove("selected");
                document.getElementById("panel--partnership").classList.remove("selected");
                document.getElementById("message-type").value = "";
            }
        }
    </script>
@endsection