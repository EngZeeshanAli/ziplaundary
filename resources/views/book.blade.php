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
                    Book Now
                </h1>

                <p class="lato-regular f-18 text-gray-500 mb-4">
                    Home &nbsp;
                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5 6L1 11" stroke="#04090D" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    &nbsp; Book Now
                </p>
            </div>

            <!-- Contact Boxes -->
            <div class="col-12 col-md-6">
                <div class="row g-3">
                    <!-- Whatsapp Box -->
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <div
                            class="px-3 py-3 app-bg-secondary-color text-white rounded w-100 d-flex align-items-center">
                            <img src="{{ asset('images/whatsapp.png') }}" alt="Whatsapp Logo" style="max-width: 50px;"
                                 class="me-3">
                            <div>
                                <h3 class="lato-regular fw-bold mb-1">Whatsapp</h3>
                                <p class="lato-regular fw-bold mb-0">+44 1234 567890</p>
                            </div>
                        </div>
                    </div>

                    <!-- Live Support Box -->
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <div class="px-3 py-3 bg-dark text-white rounded w-100 d-flex align-items-center">
                            <img src="{{ asset('images/support.png') }}" alt="Support Logo" style="max-width: 50px;"
                                 class="me-3">
                            <div>
                                <h3 class="lato-regular fw-bold mb-0">Live Support</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container py-5">
    <div class="row">
        <!-- Left: Add-ons -->
        <div class="col-md-5 mb-4">
            <h2 class="lato-regular fw-bold f-24 mb-3">Book Now</h2>
            <p class="text-gray f-16 mb-4">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
            </p>

            <h5 class="fw-bold f-18 mb-3">Add-ons</h5>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center mb-2">
                    <img src="{{ asset('images/check-icon.png') }}" class="me-2 icon-20" alt="Checked"> Eco Detergent
                </li>
                <li class="d-flex align-items-center mb-2">
                    <img src="{{ asset('images/check-icon.png') }}" class="me-2 icon-20" alt="Checked"> Hangers
                </li>
                <li class="d-flex align-items-center">
                    <img src="{{ asset('images/check-icon.png') }}" class="me-2 icon-20" alt="Checked"> Express Service
                </li>
            </ul>
        </div>

        <!-- Right: Booking Form -->
        <div class="col-md-7">
            <form>
                <div class="mb-3">
                    <label class="form-label f-16">Pickup Date</label>
                    <input type="date" class="form-control f-16" />
                </div>

                <div class="mb-3">
                    <label class="form-label f-16">Pickup Time</label>
                    <input type="time" class="form-control f-16" />
                </div>

                <div class="mb-3">
                    <label class="form-label f-16 d-block mb-2">Bag Size</label>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="bag_size" id="small" autocomplete="off" checked>
                        <label class="btn app-btn-outline" for="small">Small (up to 5kg)</label>

                        <input type="radio" class="btn-check" name="bag_size" id="medium" autocomplete="off">
                        <label class="btn app-btn-outline" for="medium">Medium (up to 10kg)</label>

                        <input type="radio" class="btn-check" name="bag_size" id="large" autocomplete="off">
                        <label class="btn app-btn-outline" for="large">Large (up to 15kg)</label>
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label f-16">Special Instructions</label>
                    <textarea class="form-control f-16" rows="4"></textarea>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="subscribe">
                    <label class="form-check-label f-16" for="subscribe">
                        Subscribe & Save (10% off)
                    </label>
                </div>

                <button type="submit" class="btn app-btn text-white w-100 f-16">Confirm Pickup</button>
            </form>
        </div>
    </div>
</div>




@include("widget.footer")

@include('widget.footer_required')
</body>
</html>
