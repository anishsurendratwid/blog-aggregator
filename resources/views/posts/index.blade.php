<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
</head>
<body>
    <h1>All Blog Posts</h1>

    @foreach ($posts as $post)
    <div style="max-width: 800px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;">
            <a href="{{ url('post/'.$post->id) }}">
                <h2>{{ $post->title }}</h2>
            </a>
            <div>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    @endforeach

</body>
</html>
