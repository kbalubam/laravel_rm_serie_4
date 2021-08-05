@extends('welcome')
@section('content')
<div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">présentation du legumes : {{$legume->id}}</h5>
        <p class="card-text"> nom :{{$legume->nom}}</p>
        <p class="card-text"> quantitée :{{$legume->quantite}}</p>
        </div>
      </div>


@endsection