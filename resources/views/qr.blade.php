<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Example</title>
</head>
<body>
    <!-- {!! QrCode::generate('BEGIN:VCARD\nVERSION:3.0\nFN:John Doe\nTEL:1234567890\nEMAIL:john@example.com\nEND:VCARD') !!} -->
    {{QrCode::geo(37.822214, -122.481769)}}
</body>
</html>
