<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <a href="/artikel" class="btn btn-primary mb-2 mt-2">artikel</a>
    <a href="/artikel/create" class="btn btn-primary mb-2 mt-2">create+</a><br>

    <h1> {{$artikel->judul}}</h1>
    <p>{{$artikel->isi}}</p>
    <img class="card-img-top" src="/gambar/{{$artikel->thumbnail}}" alt="gambar">

</body>
</html>
