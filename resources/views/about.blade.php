<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zip My Laundry</title>
    @include('widget.top_required')

    <style>

        .hero-section {
            background: url('{{asset("images/about-bg.png")}}') center center no-repeat;
            background-size: cover;
            min-height: 300px;   /* for mobile */
        }

        @media (min-width: 768px) {
            .hero-section {
                min-height: 500px;  /* for tablets and larger */
            }
        }
    </style>

</head>
<body class="antialiased">
@include('widget.navbar')

<div class="container-fluid app-bg-primary-color py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-12 col-md-6 mb-5 mb-md-0">
                <h1 class="lato-regular f-72 fw-bold mb-3">
                    About US
                </h1>

                <p class="lato-regular f-18 text-gray-500 mb-4">
                    Home &nbsp;
                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5 6L1 11" stroke="#04090D" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    &nbsp; About US
                </p>
            </div>

            <!-- Contact Boxes -->
            <div class="col-12 col-md-6">
                <div class="row g-3">
                    <div class="col-12 col-sm-6 d-flex justify-content-center"></div>
                    <!-- Whatsapp Box -->
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <a href="https://wa.me/447520653811" target="_blank" class="text-decoration-none text-white">

                        <div class="px-3 py-3 app-bg-secondary-color text-white rounded w-100 d-flex align-items-center">
                            <img src="{{ asset('images/whatsapp.png') }}" alt="Whatsapp Logo" style="max-width: 50px;" class="me-3">
                            <div>
                                <h3 class="lato-regular fw-bold mb-1">Whatsapp</h3>
                                <p class="lato-regular fw-bold mb-0">+44 1234 567890</p>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!-- Live Support Box -->
{{--                    <div class="col-12 col-sm-6 d-flex justify-content-center">--}}
{{--                        <div class="px-3 py-3 bg-dark text-white rounded w-100 d-flex align-items-center">--}}
{{--                            <img src="{{ asset('images/support.png') }}" alt="Support Logo" style="max-width: 50px;" class="me-3">--}}
{{--                            <div>--}}
{{--                                <h3 class="lato-regular fw-bold mb-0">Live Support</h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>



</div>

<div class="container p-0 mb-5">
    <div class="position-relative hero-section">
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div>

        <!-- Content -->
        <div class="position-absolute top-50 start-0 translate-middle-y text-white px-3 px-md-5 text-center text-md-start"
             style="max-width: 500px; left: 5%;">
            <h1 class="lato-regular fw-bold mb-3">Meet ZipMyLaundry</h1>
            <p class="lato-regular mb-4">
                ZipMyLaundry, we believe your time is better spent doing anything but laundry.
                That's why we've created a simple, fast, and reliable laundry service.
            </p>
            <a href="#" class="btn app-btn text-white lato-regular fw-bold">Learn More</a>
        </div>
    </div>
</div>


@include("widget.footer")

@include('widget.footer_required')
</body>
</html>
