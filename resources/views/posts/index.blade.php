<!DOCTYPE html>
<x-app-layout>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <x-slot name="header">
            <head>
                <meta charset='utf-8'>
                <title>Blog</title>
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,6oo" rel="stylesheet">
            </head>
        </x-slot>
        <body>
            <h1>Blog Name</h1>
            <div class='posts'>
                <div class='post'>
                    <h2 class='title'>Title</h2>
                    <p class='body'>This is a sample body.</p>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>