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
<center><h1>Show Category</h1></center></br>
<div class="container">
    <h3>View Category details</h3>

        <label for="usr">Title:</label>
        <p>{{ $category->title }}</p></br>
        <label for="usr">Created At:</label>
        <p>{{ $category->created_at }}</p></br>
        <a href="{{ route('categories.index') }}" class="btn btn-primary"><<<</a>
    </form>
</div>
</body>

</html>