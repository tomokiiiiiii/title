<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>練習パンチマン</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{$post->title}}</h2>
                    <p class='body'>{{$post->body}}</p>
                </div>
                 <div class='post'>
                    <h2 class='title'>title 2</h2>
                    <p class='body'>this is body 2</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            
        </div>
    </body>
</html>