<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GetManaged | Manage your business</title>

    <meta name="description" content="A Social platform for academic notes sharing and earning">
    <meta name="keywords" content="Sahre notes, Earn by sharing notes, Academic notes, Kerala Psc Notes, Engineering notes">
    <meta name="author" content="Mas Edu Private Limited">

    <link rel="apple-touch-icon" sizes="57x57" href="/storage/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/storage/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/storage/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/storage/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/storage/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/storage/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/storage/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/storage/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/storage/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/storage/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/storage/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/storage/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/storage/favicon-16x16.png">
    <!-- <link rel="manifest" href="/storage/manifest.json"> -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}">
</head>

<body>
    <div id="app"></div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>