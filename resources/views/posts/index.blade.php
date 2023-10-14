<!DOCTYPE html>
<x-app-layout>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <x-slot name="header">
            <head>
                <meta charset='utf-8'>
                <title>Blog</title>
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            </head>
        </x-slot>
        <body>
            <h1>Blog Name</h1>
            <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h2 class='title'>{{ $post->title }}</h2>
                        <p class='body'>{{ $post->body }}</p>
                    </div>
                @endforeach
            </div>
            <div class='paginate'>
                {{ $posts->links() }}
            </div>
        </body>
    </html>
</x-app-layout>