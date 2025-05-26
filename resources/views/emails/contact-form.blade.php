<!DOCTYPE html>
<html>
<head>
    <title>New Bookings Available</title>
</head>
<body>
    <h2>Bookings from Elbio Cleaning</h2>
    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Phone:</strong> {{ $formData['phone'] ?? 'Not provided' }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $formData['message'] }}</p>
</body>
</html>
