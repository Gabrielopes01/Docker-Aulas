<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container mx auto">
        <div class="grid grid-cols-3 gap-4">
            @if ($posts->first() != null)
                @foreach ($posts as $post)
                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->content }}</p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</body>
</html>