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
  <center><h2>Category List</h2></center>
  <p><a href="{{ route('categories.create') }}">Add Category</a></p>

  @if(session()->has('message'))
   {{ session('message') }}
  @endif

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Serial</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>

    @php
    $a=0
    @endphp

    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{ ++$a }}</td>
        <td>{{ $category->title }}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('categories.show',$category->id) }}">show</a>
          <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">edit</a>
          {!! Form::open([
            'route'=>['categories.destroy',$category->id],
            'method'=>'delete',
            'style'=>'display:inline'
          ]) !!}
          {!! Form::button('delete',[
            'type'=>'submit',
            'class'=>'btn btn-primary',
            'onclick'=>'return confirm("Are you sure to delete?")'
          ]) !!}
          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $categories->links() }}
</div>

</body>
</html>
