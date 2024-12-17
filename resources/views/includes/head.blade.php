<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ env("APP_NAME") ?? 'Page Title' }}@yield('title')</title>

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" href="/assets/images/favicon.png">
<link rel="shortcut icon" href="/assets/images/favicon.ico">

<!-- Google Font (font-family: 'Karla', sans-serif;) -->
<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700" rel="stylesheet">
<!-- Google Font (font-family: 'Rubik', sans-serif;) -->
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,700" rel="stylesheet">

<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/plugins.css">
<link rel="stylesheet" href="/assets/css/style.css">

<link rel="stylesheet" href="/assets/css/custom.css">
@vite('resources/css/app.css')
@livewireStyles
