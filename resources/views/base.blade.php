<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Beast GYM</h1>
        <div id="tete" class="flex justify-around">
        <div><a href="{{ route('accueil.index') }}">Accueil</a></div>
        <div><a href="{{ route('cours.index') }}">Cours</a></div>
        <div><a href="{{ route('contact.index') }}">Contact</a></div>
        <div><a href="{{ route('tarifs.index') }}">Tarif</a></div>
        <div><a href="{{ route('mentions-legales.index') }}">Mentions légales</a>
        </div>
    </div></header>
    
    <div class="logo"></div>
    
 @yield('content')   
 <footer>
    <div>
        <a href="{{ route('mentions-legales.index') }}">Voir les Mentions légales</a>
    </div>
</footer>
</body>
</html>