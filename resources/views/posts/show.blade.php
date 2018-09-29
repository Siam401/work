<html>
<head>
    <title>OOP Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><h1>Show Post</h1></center></br>
<div class="container">
    <h3>View Post details</h3>

    <label for="usr">Title:</label>
    <p>{{ $post->title }}</p></br>
    <label for="usr">Description:</label>
    <p>{{ $post->description }}</p></br>
    <label for="usr">Created At:</label>
    <p>{{ $post->created_at }}</p></br>
    <a href="{{ route('posts.index') }}" class="btn btn-primary"><<<</a>
    </form>
</div>
</body>

</html>