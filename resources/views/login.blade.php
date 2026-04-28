<form method="POST" action="/login">
@csrf
User: <input name="user"><br>
Password: <input type="password" name="pass"><br>
<button>Login</button>
</form>