<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
</head>
<body>
    <div style="max-width: 800px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;">
        <h1>{{ $post->title }}</h1>
        <div>
            <p>{{ $post->content }}</p>
        </div>
    </div>
</body>
</html>
