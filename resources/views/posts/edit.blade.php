<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <center><h2>Edit Post</h2></center>
    <a href="{{ route('posts.index') }}">Post List</a>
    {!! Form::open([
        'route' => ['posts.update',$post->id],
        'method'=>'put'
        ]) !!}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <label for="usr">Title:</label>
    {!! form::text('title',$post->title,[
      'class'=>'form-control'
    ]) !!}
    <br>
    <label for="usr">Description:</label>
    {!! form::text('description',$post->description,[
      'class'=>'form-control'
    ]) !!}
    <br>
    {!! form::submit('Update',[
      'class'=>'btn btn-primary'
    ]) !!}
    {!! Form::close() !!}
</div>

</body>
</html>
