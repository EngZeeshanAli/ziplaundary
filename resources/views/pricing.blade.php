<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zip My Laundry</title>
    @include('widget.top_required')


</head>
<body class="antialiased">
@include('widget.navbar')
<div class="container-fluid app-bg-primary-color py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-12 col-md-6 mb-5 mb-md-0">
                <h1 class="lato-regular f-72 fw-bold mb-3">
                    Pricing
                </h1>

                <p class="lato-regular f-18 text-gray-500 mb-4">
                    Home &nbsp;
                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5 6L1 11" stroke="#04090D" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    &nbsp; Pricing
                </p>
            </div>

            <!-- Contact Boxes -->
            <div class="col-12 col-md-6">
                <div class="row g-3">
                    <div class="col-12 col-sm-6 d-flex justify-content-center"></div>
                    <!-- Whatsapp Box -->
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <a href="https://wa.me/447520653811" target="_blank" class="text-decoration-none text-white">

                            <div
                                class="px-3 py-3 app-bg-secondary-color text-white rounded w-100 d-flex align-items-center">
                                <img src="{{ asset('images/whatsapp.png') }}" alt="Whatsapp Logo"
                                     style="max-width: 50px;"
                                     class="me-3">
                                <div>
                                    <h3 class="lato-regular fw-bold mb-1">Whatsapp</h3>
                                    <p class="lato-regular fw-bold mb-0">+447520653811</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Live Support Box -->
{{--                    <div class="col-12 col-sm-6 d-flex justify-content-center">--}}
{{--                        <div class="px-3 py-3 bg-dark text-white rounded w-100 d-flex align-items-center">--}}
{{--                            <img src="{{ asset('images/support.png') }}" alt="Support Logo" style="max-width: 50px;"--}}
{{--                                 class="me-3">--}}
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


<div class="container py-5">
    <div class="row align-items-center">

        <!-- Left Side with Cards and Skewed BG -->
        <div class="col-md-6">
            <img class="img-fluid" src="{{asset('images/pricing.png')}}"/>
        </div>

        <!-- Right Side Content -->
        <!-- Right Side Content -->
        <div class="col-md-6 px-4">
            <h2 class="f-48 fw-bold">Affordable Pricing & Thoughtful Add-Ons</h2>
            <p class="text-gray mb-4 f-18">Customize your laundry experience with these optional extras:</p>
            <ul class="list-unstyled f-18 mb-4">
                <li class="mb-2">
                    <img src="{{ asset('images/check-icon.png') }}" class="me-2 icon-20" alt="Checked"/>
                    Hanger Service – Clothes returned wrinkle-free and ready to wear
                </li>
                <li class="mb-2">
                    <img src="{{ asset('images/check-icon.png') }}" class="me-2 icon-20" alt="Checked"/>
                    Fragrance-Free Wash – Perfect for sensitive skin or allergies
                </li>
                <li class="mb-2">
                    <img src="{{ asset('images/check-icon.png') }}" class="me-2 icon-20" alt="Checked"/>
                    Delicate Care – Gentle cycle and special handling for your finest fabrics
                </li>
            </ul>
            <a href="{{ url('/book-now') }}">
                <button class="btn app-btn f-18 text-white lato-regular">Book a Pickup</button>
            </a>
        </div>


    </div>
</div>


@include("widget.footer")

@include('widget.footer_required')
</body>
</html>
