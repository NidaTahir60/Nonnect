<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Message Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h3 {
            color: #333;
        }
        p {
            color: #555;
            line-height: 1.6;
        }
        .content {
            padding: 20px 0;
        }
        .footer {
            padding-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
        .header {
            background-color: #f9c4a4;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .header h2 {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Message from Ateeb Cosmetics </h2>
        </div>
        <div class="content">
            <h3>Hello Admin,</h3>
            <p><strong>Name:</strong> {{ $data->name }}</p>
            <p><strong>Email:</strong> {{ $data->email }}</p>
            <p><strong>Message:</strong> {{ $data->message }}</p>
        </div>
        <div class="footer">
            <p>Thank you for using our service.</p>
            <p>&copy; 2024 Ateeb Cosmetics. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
