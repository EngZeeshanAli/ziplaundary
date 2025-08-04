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
                        <div class="px-3 py-3 app-bg-secondary-color text-white rounded w-100 d-flex align-items-center">
                            <img src="{{ asset('images/whatsapp.png') }}" alt="Whatsapp Logo" style="max-width: 50px;" class="me-3">
                            <div>
                                <h3 class="lato-regular fw-bold mb-1">Whatsapp</h3>
                                <p class="lato-regular fw-bold mb-0">+44 1234 567890</p>
                            </div>
                        </div>
                    </div>

                    <!-- Live Support Box -->
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <div class="px-3 py-3 bg-dark text-white rounded w-100 d-flex align-items-center">
                            <img src="{{ asset('images/support.png') }}" alt="Support Logo" style="max-width: 50px;" class="me-3">
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
                Skip the laundry day stress—schedule a pickup in minutes and enjoy professionally cleaned clothes, delivered to your door.
            </p>

            <h5 class="fw-bold f-18 mb-3">Optional Add-ons</h5>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center mb-2">
                    <img src="{{ asset('images/check-icon.png') }}" class="me-2 icon-20" alt="Checked"> Eco Detergent – Gentle on clothes, safer for the environment
                </li>
                <li class="d-flex align-items-center mb-2">
                    <img src="{{ asset('images/check-icon.png') }}" class="me-2 icon-20" alt="Checked"> Hangers – Clothes returned pressed and ready to hang
                </li>
                <li class="d-flex align-items-center">
                    <img src="{{ asset('images/check-icon.png') }}" class="me-2 icon-20" alt="Checked"> Express Service – Get your laundry back the same day
                </li>
            </ul>
        </div>

        <!-- Right: Booking Form -->
        <div class="col-md-7">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form action="{{ route('booking.submit') }}" method="POST">
                    @csrf

                    <div class="row">
                        <!-- Name -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label f-16">Full Name</label>
                            <input type="text" name="name" class="form-control f-16" value="{{ old('name') }}">
                        </div>

                        <!-- Email -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label f-16">Email Address</label>
                            <input type="email" name="email" class="form-control f-16" value="{{ old('email') }}">
                        </div>

                        <!-- Phone -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label f-16">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" name="phone" class="form-control f-16" value="{{ old('phone') }}" required>
                        </div>

                        <!-- Pickup Date -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label f-16">Pickup Date <span class="text-danger">*</span></label>
                            <input type="date" name="pickup_date" class="form-control f-16" value="{{ old('pickup_date') }}" required>
                        </div>

                        <!-- Pickup Time -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label f-16">Pickup Time <span class="text-danger">*</span></label>
                            <input type="time" name="pickup_time" class="form-control f-16" value="{{ old('pickup_time') }}" required>
                        </div>

                        <!-- Bag Size -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label f-16 d-block mb-2">Bag Size <span class="text-danger">*</span></label>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="bag_size" id="small" value="small" autocomplete="off" {{ old('bag_size', 'small') == 'small' ? 'checked' : '' }}>
                                <label class="btn app-btn-outline" for="small">Small</label>

                                <input type="radio" class="btn-check" name="bag_size" id="medium" value="medium" autocomplete="off" {{ old('bag_size') == 'medium' ? 'checked' : '' }}>
                                <label class="btn app-btn-outline" for="medium">Medium</label>

                                <input type="radio" class="btn-check" name="bag_size" id="large" value="large" autocomplete="off" {{ old('bag_size') == 'large' ? 'checked' : '' }}>
                                <label class="btn app-btn-outline" for="large">Large</label>
                            </div>
                        </div>

                        <!-- Special Instructions (full width) -->
                        <div class="mb-3 col-12">
                            <label class="form-label f-16">Special Instructions</label>
                            <textarea name="special_instructions" class="form-control f-16" rows="4">{{ old('special_instructions') }}</textarea>
                        </div>

                        <!-- Subscribe (full width) -->
                        <div class="form-check mb-4 col-12">
                            <input class="form-check-input" type="checkbox" name="subscribe" id="subscribe" {{ old('subscribe') ? 'checked' : '' }}>
                            <label class="form-check-label f-16" for="subscribe">
                                Subscribe & Save (10% off)
                            </label>
                        </div>

                        <!-- Submit Button (full width) -->
                        <div class="col-12">
                            <button type="submit" class="btn app-btn text-white w-100 f-16">Confirm Pickup</button>
                        </div>
                    </div>
                </form>

        </div>
    </div>
</div>

@include("widget.footer")
@include('widget.footer_required')
</body>
</html>
