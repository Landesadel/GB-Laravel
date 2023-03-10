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
        <div>
            <form method="post">
                <h2>Create News</h2>
                <label for="title">Title</label>
                <input id="title">
                <label for="description">Description news</label>
                <input id="description">
                <label for="short-description">Short description news</label>
                <input id="short-description">
                <button type="submit">Add</button>
            </form>
        </div>
    </body>
</html>
