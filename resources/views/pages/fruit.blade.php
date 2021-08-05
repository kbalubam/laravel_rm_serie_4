@extends('welcome')
@section('content')
<h1 style="text-align:center;">TABLE FRUIT</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">quantité</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dataFruit as $item )
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nom}}</td>
        <td>{{$item->quantite}}</td>
        <td>
        <a href="{{route('showfruit', $item->id)}}">
        <button type="button" class="btn btn-primary">SHOW</button>
        </a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>

@endsection