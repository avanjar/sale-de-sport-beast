@extends('base')
@section('content')
<h2>Tarifs</h2>
<div class="nosabn">
    <h2>NOS ABONNEMENTS</h2>
</div>

<div class="tarifs">
    <div id="annuel" class="tarif">
        <p>Adhéasion annuelle à l'association : 15 eur</p>
    </div>
    <div id="seance" class="tarif">
        <p> La séance : 10 eur</p>
    </div>
    <div id="seances" class="tarif">
        <p> 10 séances : 90 eur</p>
    </div>
    <div id="mensuel" class="tarif">
        <p>Abonnement mensuel illimité sans cours : 30 eur </p>
    </div>
    <div id="mensuelcs" class="tarif">
        <p>Abonnement mensuel illimité avec cours : 60 eur</p>
    </div>
</div>
@endsection