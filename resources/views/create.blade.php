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

    <form action="/artikel" method="post" enctype="multipart/form-data">
         @csrf
        <div class="form-group">
            <label for="title">judul</label>
            <input type="text" class="form-control" id="title" name="judul" value="{{old('judul')}}"><br>
        </div>
        <div class="form-group">
            <label for="subject">subject</label><br>
            <textarea name="isi" id="subject" cols="150"  rows="3" class="form-control">{{old('isi')}}</textarea>
        </div>
        <div class="form-group">
            <label for="waktu">waktu</label>
            <input type="text" class="form-control" id="waktu" name="waktu" value="{{old('waktu')}}"><br>
        </div>
        <div class="form-group">
            <label for="tag">tag</label>
            <input type="text" class="form-control" id="tag" name="tag" value="{{old('tag')}}"><br>
        </div>
            <div class="form-group">
            <label for="thumbnail">upload thumbnail</label>
            <input type="file" id="thumbnail" class="form-control-file" name="thumbnail">
            </div>

        <button type="submit" class="btn btn-primary" name="submit">submit</button>




    </form>
        
    



    


</body>
</html>