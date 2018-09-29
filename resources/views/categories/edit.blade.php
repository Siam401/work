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
    <center><h2>Edit Category</h2></center>
    <a href="{{ route('categories.index') }}">Category List</a>
<!-- <form action="{{ route('categories.store') }}" method="post"> -->
    {!! Form::open([
        'route' => ['categories.update',$category->id],
        'method'=>'put'
        ]) !!}
    <label>Edit Category:</label>
    <!-- <input type="text" class="form-control" style="width: 600px" name="title" required> -->
    {!! form::text('title',$category->title,[
      'class'=>'form-control',
      'style'=>'width:600px',
      'required'
    ]) !!}
    <br>
    <!-- <input type="submit" class="btn btn-primary" name="submit" value="Add"> -->
    {!! form::submit('Update',[
      'class'=>'btn btn-primary'
    ]) !!}
    {!! Form::close() !!}
</div>

</body>
</html>
