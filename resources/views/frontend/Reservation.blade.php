@extends('frontend.layouts.main')

@section('main-container')
    <div class="container" id="pt222">
        <div class="section_title">
            <h3 class="title">
                Upcoming Event
            </h3>
        </div>
        <div class="nine columns">
            <div class="coverflow top10 bot10">
                <a class="prev-arrow"></a>
                <a href=""><img src="{{ url('frontend/img/cleander/xc1.png.pagespeed.ic.JiI-ZKujy8.jpg') }}"
                        class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/cleander/xc1.png.pagespeed.ic.JiI-ZKujy8.jpg') }}"
                        class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/cleander/xc1.png.pagespeed.ic.JiI-ZKujy8.jpg') }}"
                        class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/cleander/xc1.png.pagespeed.ic.JiI-ZKujy8.jpg') }}"
                        class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/cleander/xc1.png.pagespeed.ic.JiI-ZKujy8.jpg') }}"
                        class="coverflow__image" /></a>
                <a class="next-arrow"></a>
            </div>
        </div>
    </div>



    <section class="bg-img pt70 pb70" style="background-image: url('frontend/img/bg/bg-img.png');">
        <div class="overlay_dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <h4 class="mb30 text-center color-light">Counter until the big event</h4>

                    <p id="demo"></p>
                    <script>
                        // Set the date we're counting down to
                        var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

                        // Update the count down every 1 second
                        var x = setInterval(function() {

                            // Get today's date and time
                            var now = new Date().getTime();

                            // Find the distance between now and the count down date
                            var distance = countDownDate - now;

                            // Time calculations for days, hours, minutes and seconds
                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Output the result in an element with id="demo"
                            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                                minutes + "m " + seconds + "s ";

                            // If the count down is over, write some text
                            if (distance < 0) {
                                clearInterval(x);
                                document.getElementById("demo").innerHTML = "EXPIRED";
                            }
                        }, 1000);
                    </script>

                </div>
            </div>
        </div>
    </section>



    <div class="container" id="pt222">
        <div class="section_title">
            <div class="title">
                <a href="#">BOOKING Tickets</a>
            </div>
        </div>
        <section class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ url('/') }}/Reservation">
                    @csrf
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="lname">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="xyz123@gmail.com...">

                    <label for="lname">Number</label>
                    <input type="text" id="number" name="number" placeholder="000000....">

                    <label for="Gender">Gender</label>
                    <select id="Gender" name="gender">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="o">Other</option>
                    </select>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="col-md-6">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://piratebay-proxys.com/">Piratebay</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 100%;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 100%;
                        }

                        .gmap_iframe {
                            width: 100% !important;
                            height: 100% !important;
                        }
                    </style>
                </div>
            </div>
        </section>
    </div>
@endsection