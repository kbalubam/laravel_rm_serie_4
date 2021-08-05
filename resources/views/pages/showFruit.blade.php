@extends('welcome')
@section('content')
<div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">présentation du fruit : {{$fruit->id}}</h5>
        <p class="card-text"> nom :{{$fruit->nom}}</p>
        <p class="card-text"> quantitée :{{$fruit->quantite}}</p>
        </div>
</div>


@endsection