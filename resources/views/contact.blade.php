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
            min-height: 300px; /* for mobile */
        }

        @media (min-width: 768px) {
            .hero-section {
                min-height: 500px; /* for tablets and larger */
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
                    Contact Us
                </h1>

                <p class="lato-regular f-18 text-gray-500 mb-4">
                    Home &nbsp;
                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5 6L1 11" stroke="#04090D" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    &nbsp; Contact Us
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


<!-- Contact Section -->
<div class="container py-5">
    <div class="row">
        <!-- Left Column: Contact Info -->
        <!-- Left Column: Contact Info -->
        <div class="col-md-5 mb-4">
            <h3 class="lato-regular fw-bold f-24">Have Questions?<br>Get in Touch!</h3>
            <p class="text-gray f-16">It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout.</p>

            <!-- Email -->
            <div class="d-flex align-items-start mb-3">
                <img src="{{ asset('images/email.png') }}" alt="Email Icon" class="icon-40 me-3">
                <div>
                    <p class="mb-1 fw-bold f-16">Email</p>
                    <a href="mailto:help@zipmylaundry.co.uk" class="text-decoration-none text-dark f-16">help@zipmylaundry.co.uk</a>
                </div>
            </div>

            <!-- Phone -->
            <div class="d-flex align-items-start mb-3">
                <img src="{{ asset('images/phone.png') }}" alt="Phone Icon" class="icon-40 me-3">
                <div>
                    <p class="mb-1 fw-bold f-16">Phone Number</p>
                    <a href="tel:+441234567890" class="text-decoration-none text-dark f-16">+44 1234 567890</a>
                </div>
            </div>

            <!-- Social Icons -->
            <div class="d-flex align-items-center gap-3 mt-3">
                <img src="{{ asset('images/social.png') }}" alt="Phone Icon" class="icon-40 me-3">
                <div>

                    <a href="#"><i class="bi bi-facebook text-black f-24 "></i></a>
                    <a href="#"><i class="bi bi-instagram text-black f-24 mx-2"></i></a>
                    <a href="#"><i class="bi bi-twitter text-black f-24"></i></a>
                </div>
            </div>

        </div>


        <!-- Right Column: Contact Form -->
        <div class="col-md-7">
            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control f-16" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control f-16" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <input type="tel" class="form-control f-16" placeholder="Phone Number">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control f-16" rows="4" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn app-btn text-white w-100 f-16">Send Your Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Service Area Section -->
<div class="container text-start py-5">
    <h4 class="lato-regular fw-bold f-24">We currently serve Leicester City (LE1–LE5)</h4>
    <p class="text-gray f-16 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit lorem sagittis, pretium
        luctus sed. Etiam egestas urna elit.</p>

    <!-- Google Map Embed -->
    <div class="ratio ratio-16x9">
        <!-- Google Map Embed -->
        <div class="ratio ratio-16x9">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.7842024252355!2d-1.1351710842307322!3d52.63687797983369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487760b7e181ad81%3A0x4227bd153f84a4e6!2sLeicester!5e0!3m2!1sen!2suk!4v1624987172517!5m2!1sen!2suk"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>

    </div>
</div>


@include("widget.footer")

@include('widget.footer_required')
</body>
</html>
