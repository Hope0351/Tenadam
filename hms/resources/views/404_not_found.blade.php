<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="{{config('app.name')}}">
    <meta name="keywords" content="Tenedam (ጤና አዳም)"/>
    <meta name="description" content="Tenedam (ጤና አዳም) | Health Management System"/>
    <meta name="author" content="tenedam.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>404 Not Found | {{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('web/img/tenedam-favicon.ico') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #F0FDFA 0%, #ECFDF5 50%, #F0F9FF 100%);
            overflow: hidden;
        }
        .container-404 {
            text-align: center;
            padding: 40px 20px;
            position: relative;
            z-index: 1;
        }
        .error-code {
            font-size: 10rem;
            font-weight: 800;
            line-height: 1;
            background: linear-gradient(135deg, #0D9488 0%, #10B981 50%, #14B8A6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
            position: relative;
        }
        .error-code::after {
            content: '404';
            position: absolute;
            top: 8px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 10rem;
            font-weight: 800;
            opacity: 0.08;
            -webkit-text-fill-color: #0D9488;
            z-index: -1;
        }
        .error-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 12px;
        }
        .error-subtitle {
            color: #6B7280;
            font-size: 1rem;
            max-width: 400px;
            margin: 0 auto 32px;
            line-height: 1.6;
        }
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 32px;
            background: linear-gradient(135deg, #0D9488, #10B981);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(13,148,136,0.3);
            transition: all 0.25s ease;
        }
        .btn-back:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(13,148,136,0.4);
            color: white;
        }
        .bg-shapes {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: 0;
            overflow: hidden;
        }
        .bg-shapes .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.06;
        }
        .bg-shapes .shape-1 { width: 400px; height: 400px; background: #0D9488; top: -100px; right: -100px; }
        .bg-shapes .shape-2 { width: 300px; height: 300px; background: #10B981; bottom: -80px; left: -80px; }
        .bg-shapes .shape-3 { width: 200px; height: 200px; background: #14B8A6; top: 50%; left: 10%; }
    </style>
</head>
<body>
    <div class="bg-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>
    <div class="container-404">
        <div class="error-code">404</div>
        <h2 class="error-title">Oops! Something's missing</h2>
        <p class="error-subtitle">The page you are looking for doesn't exist, isn't available, or was loaded incorrectly.</p>
        <a href="{{ URL::previous() }}" class="btn-back">
            <i class="fa-solid fa-arrow-left"></i>
            Back to Previous Page
        </a>
    </div>
</body>
</html>