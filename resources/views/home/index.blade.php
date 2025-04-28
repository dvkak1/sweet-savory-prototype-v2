<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    @include('home.header')

    @include('home.about')

    @include('home.gallery')

    @include('home.book')

    @include('home.blog')

    @include('home.footer')

</body>
</html>
