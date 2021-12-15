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
<h1>Discount</h1>
<form action="/product" method="post">
    @csrf
    <p>
        <input type="text" name="description" placeholder="Enter description">
    </p>
    <p>
        <input type="number" name="price" placeholder="Enter price">
    </p>
    <p>
        <input type="number" name="discount" placeholder="Enter discount">
    </p>
    <p>
        <button type="submit">Thanh tien</button>
    </p>
</form>
</body>
</html>
