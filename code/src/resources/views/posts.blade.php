<!DOCTYPE html>
<html>
<head>
    <title>My Posts</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto my-4">
        <h4 class="text-lg mb-4 text-red-500">{{ $fromCache ? 'From Cache' : 'Not From Cache' }}</h4>
        <div class="grid grid-cols-2 gap-6 pb-8">
            @foreach($posts as $post)
                <div class="post bg-gray-100 py-2 px-4 rounded">
                    <h3 class="text-xl">{{ $post->title }}</h3>
                    <p class="font-light text-gray-700">{{ $post->content }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>