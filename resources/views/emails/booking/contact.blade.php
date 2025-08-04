<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 20px; background-color: #f9f9f9;">
<h2 style="color: #333;">📨 New Contact Message</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Message:</strong></p>
<p style="background-color: #fff; padding: 15px; border-left: 4px solid #1e88e5;">
    {{ $data['message'] }}
</p>
</body>
</html>
