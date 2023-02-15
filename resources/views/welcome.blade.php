<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge"
    >
    <title>{{ env('APP_NAME') }}</title>
    {{-- Load the default generated javascript and stylesheets --}}
    @vite([ 'resources/js/app.js', 'resources/sass/app.scss' ])
</head>
<body>
<nav class="navbar is-primary  has-text-white" >
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                {{-- Use the APP_NAME setting from the .env file --}}
                <strong>{{ env('APP_NAME') }}</strong>
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a class="navbar-item" href="/posts/my-first-post">My first post</a>
                <a class="navbar-item" href="/posts/my-second-post">My second post</a>
            </div>
        </div>
    </div>
</nav>

<section class="section">
    <div class="container">
        <div class="content">
            <h1>Welcome to my portfolio</h1>
        </div>
    </div>
</section>


</body>
</html>
