<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کد تأیید ایمیل</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .email-header {
            background-color: #006d77;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        .email-header img {
            max-width: 100px;
            margin-bottom: 10px;
        }
        .email-content {
            padding: 20px;
            text-align: center;
            color: #333333;
        }
        .email-content h1 {
            color: #006d77;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .verification-code {
            font-size: 32px;
            font-weight: bold;
            color: #e63946;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #f4f4f4;
            border-radius: 5px;
            display: inline-block;
        }
        .email-footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 15px;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="email-header">
        <img src="{{ asset('/images/logo.png') }}" alt="لوگو">
        <h2>{{env("APP_NAME")}}</h2>
    </div>
    <div class="email-content">
        <h1>کد تأیید شما</h1>
        <p>برای تأیید ایمیل خود، لطفاً کد زیر را وارد کنید:</p>
        <div class="verification-code">{{ $code }}</div>
        <p>این کد فقط به مدت ۲ دقیقه معتبر است.</p>
    </div>
    <div class="email-footer">
        <p>اگر این ایمیل را به اشتباه دریافت کرده‌اید، لطفاً آن را نادیده بگیرید.</p>
        <p>© 2025 {{env("APP_NAME")}}. تمامی حقوق محفوظ است.</p>
    </div>
</div>
</body>
</html>
