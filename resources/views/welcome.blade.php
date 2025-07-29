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
            <div class="col-12 col-md-6 mb-5 mb-md-0 d-flex justify-content-center">
                <div class="text-center text-md-start">
                    <div class="app-btn text-white lato-regular py-2 px-4 mb-3 d-inline-block">
                        Professional Laundry Service Company
                    </div>

                    <h1 class="lato-regular f-72 fw-bold mb-3">
                        Laundry. Fresh.<br> Fast. To Your Door.
                    </h1>

                    <p class="lato-regular f-18 text-gray-500 mb-4 text-gray">
                        Book in seconds. We collect, clean, and deliver in 24–36 hours.
                    </p>

                    <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start">
                        <a href="#" class="btn btn-primary app-btn me-sm-3 mb-3 mb-sm-0 lato-regular px-4 py-2">Book a
                            Pickup</a>
                        <a href="#" class="btn app-btn-white lato-regular px-4 py-2">How It Works</a>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img class="img-fluid" src="{{ asset('images/header-girl.png') }}" alt="header image">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-lg-6 mt-5">
        <h1 class="mt-5 lato-regular text-black f-48 fw-bold">How It Works</h1>
        <span class="lato-regular f-18 text-gray">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit lorem sagittis, proin ut lectus sed ut. Enim egestas enim id duis.
            </span>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 mt-5">
            <div class="card p-3">
                <img class="icon-40" src="{{ asset('images/calendar.png') }}"/>
                <span class="mt-3 lato-regular fw-bold f-24">Schedule Pickup</span>
                <span class="mt-2 lato-regular text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus cum purus.</span>
                <span class="mt-2 lato-regular fw-semibold">Learn More
                    <img class="icon-40 ms-3" src="{{ asset('images/pointer.png') }}"/></span>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mt-5">
            <div class="card p-3">
                <img class="icon-40" src="{{ asset('images/baskit.png') }}"/>
                <span class="mt-3 lato-regular fw-bold f-24"> We Wash & Fold</span>
                <span class="mt-2 lato-regular text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus cum purus.</span>
                <span class="mt-2 lato-regular fw-semibold">Learn More
                    <img class="icon-40 ms-3" src="{{ asset('images/pointer.png') }}"/></span>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mt-5">
            <div class="card p-3">
                <img class="icon-40" src="{{ asset('images/truck.png') }}"/>
                <span class="mt-3 lato-regular fw-bold f-24">Delivery to Your Door</span>
                <span class="mt-2 lato-regular text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus cum purus.</span>
                <span class="mt-2 lato-regular fw-semibold">Learn More
                    <img class="icon-40 ms-3" src="{{ asset('images/pointer.png') }}"/></span>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid app-bg-primary-color py-5 mt-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column -->
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <h2 class="mt-3 lato-regular fw-bold f-48">Why Choose ZipMyLaundry?</h2>
                <p class="lato-regular f-16 text-gray">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit lorem sagittis, proin ut lectus sed ut.
                    Enim egestas enim id duis.
                </p>

                <!-- Feature Item -->
                <div class="d-flex align-items-start mt-4">
                    <img src="{{ asset('images/calendar.png') }}" class="icon-40 me-3" alt="Calendar Icon"/>
                    <div>
                        <p class="mb-1 lato-regular fw-bold f-18">Fast 24–36hr turnaround</p>
                        <span class="lato-regular f-16 text-gray">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit lorem sagittis, proin ut lectus sed ut.
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-start mt-4">
                    <img src="{{ asset('images/calendar.png') }}" class="icon-40 me-3" alt="Calendar Icon"/>
                    <div>
                        <p class="mb-1 lato-regular fw-bold f-18">Optional same-day express</p>
                        <span class="lato-regular f-16 text-gray">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-start mt-4">
                    <img src="{{ asset('images/calendar.png') }}" class="icon-40 me-3" alt="Calendar Icon"/>
                    <div>
                        <p class="mb-1 lato-regular fw-bold f-18">Eco-friendly detergent upgrade</p>
                        <span class="lato-regular f-16 text-gray">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit lorem sagittis, proin ut lectus sed ut.
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-start mt-4">
                    <img src="{{ asset('images/calendar.png') }}" class="icon-40 me-3" alt="Calendar Icon"/>
                    <div>
                        <p class="mb-1 lato-regular fw-bold f-18">No hidden fees, ever</p>
                        <span class="lato-regular f-16 text-gray">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6 col-md-12 text-center">
                <img class="img-fluid" src="{{ asset('images/girl_laundry.png') }}" alt="Girl with Laundry"/>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <img src="{{ asset('images/want_to_see.png') }}" class="img-fluid" alt="Calendar Icon"/>
</div>

<div class="container">
    <div class="col-lg-6">
        <h1 class="mt-5 lato-regular text-black f-48 fw-bold">Weekly Laundry Plans</h1>
        <span class="lato-regular f-18 text-gray">
                Save time and money with flexible subscriptions:
            </span>
    </div>

    <section class="mt-5 mb-5">
        <div class="row justify-content-center">
            <!-- Basic Plan -->
            <div class="col-md-5 mb-4">
                <div class="card h-100 shadow border-0 rounded-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Basic Plan</h5>
                        <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <h3 class="fw-bold">£49 <span class="fs-6 text-muted">/ 4 Bags/month</span></h3>
                        <hr>
                        <ul class="list-unstyled">

                            <li><i class="bi bi-check-circle text-primary me-2"></i>Free delivery</li>
                            <li><i class="bi bi-check-circle text-primary me-2"></i>Priority booking</li>
                            <li><i class="bi bi-check-circle text-primary me-2"></i>Cancel anytime</li>
                        </ul>
                        <button class="btn app-bg-secondary-color text-white w-100 rounded-pill mt-3">Choose a Plan
                        </button>
                    </div>
                </div>
            </div>

            <!-- Premium Plan -->
            <div class="col-md-5 mb-4">
                <div class="card h-100 shadow border-0 rounded-4 app-bg-secondary-color text-white">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Premium Plan</h5>
                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <h3 class="fw-bold">£89 <span class="fs-6 text-white-50">/ 8 Bags/month</span></h3>
                        <hr class="border-light">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle me-2"></i>Free delivery</li>
                            <li><i class="bi bi-check-circle me-2"></i>Priority booking</li>
                            <li><i class="bi bi-check-circle me-2"></i>Cancel anytime</li>
                        </ul>
                        <button class="btn btn-light w-100 rounded-pill mt-3">Choose a Plan</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>


@include("widget.footer")

@include('widget.footer_required')
</body>
</html>
