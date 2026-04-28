<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee Valley</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #fff; }

        .cv-header { padding: 16px 24px; border-bottom: 2px solid #5a2d0c; display: flex; align-items: center; gap: 16px; }
        .cv-brand { font-size: 24px; font-style: italic; font-weight: bold; color: #5a2d0c; font-family: Georgia, serif; }
        .cv-tagline { font-size: 11px; color: #5a2d0c; font-style: italic; }
        .cv-addr { font-size: 11px; color: #444; }

        .cv-nav { background: #6b3312; display: flex; }
        .cv-nav a { color: #fff; text-decoration: none; padding: 9px 22px; font-size: 13px; border-right: 1px solid #8a4520; }
        .cv-nav a:hover, .cv-nav a.active { background: #4a2008; }

        .cv-content { padding: 24px; max-width: 720px; }
        .cv-label { font-weight: bold; font-size: 13px; margin-bottom: 2px; }
        .cv-value { font-size: 13px; margin-bottom: 14px; }

        .cv-footer { text-align: center; font-size: 12px; color: #555; padding: 16px; border-top: 1px solid #ccc; margin-top: 20px; }
    </style>
</head>
<body>

<div class="cv-header">
    <img src="{{ asset('images/logo.png') }}" width="56" height="56" alt="Coffee Valley Logo">
    <div>
        <div class="cv-brand">Coffee Valley</div>
        <div class="cv-tagline">Taste the love in every cup!</div>
        <div class="cv-addr">One Alewife Center 3rd Floor</div>
        <div class="cv-addr">Cambridge, MA 02140</div>
    </div>
</div>

<div class="cv-nav">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
    <a href="{{ route('catalogue') }}" class="{{ request()->routeIs('catalogue') ? 'active' : '' }}">Catalog</a>
    <a href="{{ route('distributors.index') }}" class="{{ request()->routeIs('distributors.*') ? 'active' : '' }}">Distributors</a>
    <a href="{{ route('upload') }}" class="{{ request()->routeIs('upload') ? 'active' : '' }}">Upload</a>
    <a href="{{ route('logout') }}">Logout</a>
</div>

@yield('content')

<div class="cv-footer">
    {{ \Carbon\Carbon::now()->format('F d, Y') }}
</div>

</body>
</html>