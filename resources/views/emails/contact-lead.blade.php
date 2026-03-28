<div style="font-family: sans-serif; max-width: 600px; margin: auto; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px;">
    <h2 style="color: #2563eb; margin-bottom: 20px;">Duct Cleaning Request</h2>
    <div style="margin-bottom: 10px;"><strong>Name:</strong> {{ $details['name'] }}</div>
    <div style="margin-bottom: 10px;"><strong>Phone:</strong> {{ $details['phone'] }}</div>
    <div style="margin-bottom: 10px;"><strong>Email:</strong> {{ $details['email'] }}</div>
    <div style="margin-bottom: 10px;"><strong>Service:</strong> {{ $details['service'] }}</div>
    <hr style="border: 0; border-top: 1px solid #e2e8f0; margin: 20px 0;">
    <div style="background: #f8fafc; padding: 15px; border-radius: 8px;">
        <strong>Message:</strong><br>
        {{ $details['message'] ?? 'No additional details provided.' }}
    </div>
</div>