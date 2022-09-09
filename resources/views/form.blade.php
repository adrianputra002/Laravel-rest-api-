<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form</h1>
    <form action="/storemahasiswa" method="POST">
        @csrf
    <input type="text" placeholder="adrian123" name="username">
    <input type="text" placeholder="jalan sutomo no 31" name="address">
    <button type="submit"> submit</button>
    </form>
</body>
</html>
