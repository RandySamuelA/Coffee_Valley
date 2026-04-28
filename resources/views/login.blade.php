<!DOCTYPE html>
<html>
<head>
    <title>Coffee Valley - Login</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .login-box { width: 280px; margin: 80px auto; background: #fff; padding: 24px; border: 1px solid #ccc; }
        .brand { font-size: 22px; font-style: italic; font-weight: bold; color: #5a2d0c; font-family: Georgia, serif; }
        .tagline { font-size: 11px; color: #5a2d0c; font-style: italic; }
        .addr { font-size: 11px; color: #444; margin-bottom: 16px; }
        label { font-size: 13px; }
        input[type=text], input[type=password] { width: 160px; height: 22px; border: 1px solid #999; font-size: 13px; }
        .btn { margin-top: 8px; padding: 4px 16px; background: #eee; border: 1px solid #999; cursor: pointer; font-size: 13px; }
        .error { color: red; font-size: 12px; margin-bottom: 10px; }
        table td { padding: 3px 4px; font-size: 13px; }
    </style>
</head>
<body>
<div class="login-box">
    <div class="brand">Coffee Valley</div>
    <div class="tagline">Taste the love in every cup!</div>
    <div class="addr">
        One Alewife Center 3rd Floor<br>
        Cambridge, MA 02140
    </div>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <table>
            <tr>
                <td><label>User ID:</label></td>
                <td><input type="text" name="user_id"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn">Login</button></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>