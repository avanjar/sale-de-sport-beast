@extends('base')
@section('content')
<h2>Contact</h2>
<h3>Adresse : 5 Bd Louis XIV,59800 Lille</h3>
<div class="tel">
    <p>Téléphone : 06 00 00 00 00</p>
</div>
<div id="map"></div>

<div class="form">
    <form action="#" method="post">
        <div>
            <label for="nom">Nom et prénom</label>
        </div>
        <div>
            <input id="nom" type="text" maxlength="45" minlength="5" required>
        </div>
        <div>
            <label for="demande">Votre demande</label>
        </div>
        <div>
            <input id="demande" type="text" required>
        </div>
        <div>
            <label for="email">E-mail</label>
        </div>
        <div>
            <input id="email" type="email" required>
        </div>
        <div>
            <label for="areatext">Message</label>
        </div>
        <div>
            <textarea name="Message" id="areatext" required></textarea>
        </div>

        <div class="envoyer">
            <input id="submit" type="submit" value="Envoyer" required>
        </div>
    </form>
</div>
@endsection