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
        <div class="row">
            <div class="col-6">
                <span class="mt-3 lato-regular fw-bold f-48">Why Choose ZipMyLaundry?</span>
                <span class="lato-regular f-16 text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit lorem sagittis, proin ut lectus sed ut. Enim egestas enim id duis.</span>
                <div class="row">
                    <img class="icon-40 col-2" src="{{ asset('images/calendar.png') }}"/>
                    <div class="">
                        <p class="mt-3 lato-regular fw-bold f-18">Why Choose ZipMyLaundry?</p>
                        <span class="lato-regular f-16 text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit lorem sagittis, proin ut lectus sed ut. Enim egestas enim id duis.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('widget.footer_required')
</body>
</html>
