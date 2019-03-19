<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
    Header
</header>
<main>
    <nav class="sidebar">Sidebar</nav>
    <div class="content">
        <h1>Content</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto beatae debitis dolores doloribus eaque error hic libero nam nostrum perspiciatis placeat provident quam soluta suscipit temporibus, veritatis vero voluptates.</p>
    </div>
</main>
<footer>
    Footer
</footer>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
