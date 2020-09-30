<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="{{ route('post-login') }}">
        @csrf
        <input type="text" name="username"  placeholder="Username" >

        <input type="password" name="password" placeholder="PassWord">
        
        <button type="sumbit">Sumbit</button>
    </form>
</body>
</html>