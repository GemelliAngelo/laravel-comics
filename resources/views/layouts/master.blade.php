<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page-title")</title>

    @vite(["resources/sass/app.scss","resources/js/app.js"])

</head>
<body>
    @include("partials.header")

<div class="wrapper">
    @yield("content")
</div>

    @include("partials.footer")
</body>
</html>