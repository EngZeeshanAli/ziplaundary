<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation - Zip My Laundry</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f6f8;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.07);
            overflow: hidden;
        }

        .email-header {
            background-color: #ffffff;
            text-align: center;
            padding: 30px 20px 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        .email-header img {
            height: 50px;
            margin-bottom: 10px;
        }

        .email-body {
            padding: 30px;
            color: #333;
        }

        .email-body h2 {
            font-size: 22px;
            color: #1e88e5;
            margin-bottom: 10px;
        }

        .email-body p {
            font-size: 16px;
            line-height: 1.6;
            margin: 0 0 15px;
        }

        .info-box {
            background-color: #f7f9fc;
            padding: 20px;
            border-radius: 6px;
            margin: 20px 0;
            font-size: 15px;
        }

        .info-box p {
            margin: 0 0 8px;
        }

        .label {
            font-weight: bold;
            color: #222;
        }

        .highlight {
            color: green;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 13px;
            background: #fafafa;
            color: #777;
            border-top: 1px solid #e0e0e0;
        }

        @media only screen and (max-width: 600px) {
            .email-body, .email-header {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="email-container">
    <!-- Header -->
    <div class="email-header">
        <img src="https://zipmylaundry.co.uk/public/images/logo.png" alt="Zip My Laundry Logo">
        <h2>Booking Confirmation</h2>
    </div>

    <!-- Body -->
    <div class="email-body">
        <p>Hi <strong>{{ $booking->name ?? 'Customer' }}</strong>,</p>

        <p>Thank you for booking with <strong>Zip My Laundry</strong>! Here’s your pickup summary:</p>

        <div class="info-box">
            <p><span
                    class="label">📅 Pickup Date:</span> {{ \Carbon\Carbon::parse($booking->pickup_date)->format('F j, Y') }}
            </p>
            <p><span
                    class="label">⏰ Pickup Time:</span> {{ \Carbon\Carbon::parse($booking->pickup_time)->format('h:i A') }}
            </p>
            <p><span class="label">🧺 Bag Size:</span> {{ ucfirst($booking->bag_size) }}</p>

            @if($booking->special_instructions)
                <p><span class="label">📝 Instructions:</span> {{ $booking->special_instructions }}</p>
            @endif

            @if($booking->subscribe)
                <p><span class="label">💸 Subscribed:</span> <span class="highlight">Yes – 10% discount applied</span>
                </p>
            @endif
        </div>

        <p>We'll be at your doorstep on time and will return your clothes fresh and clean!</p>

        <p style="font-size: 16px;">
            Need help? <a href="https://wa.me/441234567890" style="color: #1e88e5; text-decoration: none;">Message us on
                WhatsApp</a>
            or <a href="https://zipmylaundry.co.uk/support" style="color: #1e88e5; text-decoration: none;">start a Live
                Chat</a>.
        </p>

        <p>Thanks again,<br><strong>Zip My Laundry Team</strong></p>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; {{ now()->year }} Zip My Laundry | All rights reserved
    </div>
</div>

</body>
</html>
