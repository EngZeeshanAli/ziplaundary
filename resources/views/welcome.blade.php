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

<div class="container-fluid app-bg-primary-color">
    <div class="px-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-center" style="height: 60vh;">
                <div class="w-100">
                    <div class="app-btn text-center p-2 text-white lato-regular f-16 w-50">
                        Professional Laundry Service Company
                    </div>
                    <h1 class="lato-regular f-72 fw-bold mt-3 mb-3">
                        Laundry. Fresh.<br> Fast. To Your Door.
                    </h1>
                    <span class="lato-regular f-18 text-gray-500 mt-3">
            Book in seconds. We collect, clean, and deliver in 24–36 hours.
        </span>

                    <div class="row mt-4">
                        <a href="#" class="btn btn-primary app-btn w-25 me-3 lato-regular">Book a Pickup</a>
                        <a href="#" class="btn btn-primary app-btn-white w-25 lato-regular">How It Works</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                <img class="img-fluid" src="{{ asset('images/header-girl.png') }}" alt="header">
            </div>
        </div>
    </div>
</div>

@include('widget.footer_required')
</body>
</html>
