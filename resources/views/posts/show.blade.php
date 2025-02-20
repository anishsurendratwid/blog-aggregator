<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <style>
        /* Styles for the sticky button */
        .create-post-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 15px 25px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .logout-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            padding: 15px 25px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .create-post-btn:hover {
            background-color: #0056b3;
        }

        .logout-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div style="max-width: 800px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;">
        <h1>{{ $post->title }}</h1>
        <h3>{{ $user->username }}</h3>
        <div>
            <p>{{ $post->content }}</p>
        </div>
    </div>
    <!-- Sticky button to create a new post -->
    <a href="{{ url('create') }}">
        <button class="create-post-btn">Create New Post</button>
    </a>

    <form action="{{ url('logout') }}" method="POST">
        @csrf
        <button class="logout-btn" type="submit">Logout</button>
    </a>
</body>
</html>
