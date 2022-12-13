@extends('frontend.layouts.main')

@section('main-container')
    <div class="container" id="pt222">
        <div class="section_title">
            <h3 class="title">
                <a href="#">Contact Us</a>
            </h3>
        </div>
        <section class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ url('/') }}/Contact">
                    @csrf
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="lname">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="xyz123@gmail.com...">

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

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