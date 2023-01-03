<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memulai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <a href="/artikel" class="btn btn-primary mb-2 mt-2">artikel</a>
    <a href="/artikel/create" class="btn btn-primary mb-2 mt-2">create+</a><br>
    
         @foreach($artikels->chunk(3) as $artikelChunk)
    <div class="row">
        @foreach($artikelChunk as $artikel)  
       
        <div class="col-3 card mb-1 mr-1 ml-1" >
        <img class="card-img-top" src="/gambar/{{$artikel->thumbnail}}" width="20" height="150" alt="gambar">
        <div class="card-body">
            
            <p><strong>{{$artikel->judul}}</strong></p><br>
            <p>{{$artikel->isi}}</p>
            <p>{{$artikel->waktu}}</p>
            <p>{{$artikel->tag}}</p>
            <a href="/artikel/{{$artikel->id}}/edit" class="btn btn-primary">edit</a>
            <a href="/artikel/{{$artikel->id}}" class="btn btn-primary">baca</a>
            <form action="/artikel/{{$artikel->id}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-secondary">hapus</button>
             </form>
        </div>
       
        </div>&nbsp
    @endforeach
    </div>
        @endforeach

        
    
        <h5>
            {{ $artikels->links()}}
        </h5>

</body>
        
</html>