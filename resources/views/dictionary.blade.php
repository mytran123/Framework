<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
<h2>Nhập từ khóa cần dịch</h2>
<form action="/dictionary" method="post">
    @csrf
    <label for="">Từ khóa</label>
    <input type="text" name="name" placeholder="Enter key">
    <input type="submit" value="Dịch">
</form>
</body>
</html>
