<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home page</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <x-news.header></x-news.header>
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="btn btn-sm btn-outline-secondary" href='/about'>about</a>
                    <a class="btn btn-sm btn-outline-secondary" href='/category'>News categories</a>
                </nav>
            </div>
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Welcome to the News portal!</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently
                        about what's most interesting in this post's contents.</p>
                    <p class="lead mb-0"><a href='/category' class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>
        </div>
    </body>
</html>

