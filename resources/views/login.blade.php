<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Dang nhap</h1>
<form action="/login" method="post">
    @csrf
    <p>
        <input type="text" name="username" placeholder="Enter name">
    </p>
    <p>
        <input type="password" name="password" placeholder="Enter password">
    </p>
    <p>
        <button type="submit">Dang nhap</button>
    </p>
</form>

</body>
</html>
