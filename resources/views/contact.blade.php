@extends('base')

@section('content')
<h2>Contact</h2>
<h3>Adresse : 5 Bd Louis XIV, 59800 Lille</h3>
<div class="tel">
    <p>Téléphone : 06 00 00 00 00</p>
    <p><u>www.beastgym.com</u></p>
</div>
<div id="map"></div>

<!-- Message de confirmation -->
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Erreurs de validation -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form">
    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div>
            <label for="nom">Nom et prénom</label>
        </div>
        <div>
            <input id="nom" name="name" type="text" maxlength="45" minlength="5" required>
        </div>
        <div>
            <label for="demande">Votre demande</label>
        </div>
        <div>
            <input id="demande" name="request" type="text" required>
        </div>
        <div>
            <label for="email">E-mail</label>
        </div>
        <div>
            <input id="email" name="email" type="email" required>
        </div>
        <div>
            <label for="areatext">Message</label>
        </div>
        <div>
            <textarea name="message" id="areatext" required></textarea>
        </div>

        <div class="envoyer">
            <input id="submit" type="submit" value="Envoyer">
        </div>
    </form>
</div>
@endsection