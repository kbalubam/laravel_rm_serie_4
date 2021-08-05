@extends('welcome')
@section('content')
<h1 style="text-align:center;">TABLE LEGUMES</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">quantité</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($dataLeg as $item )
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nom}}</td>
        <td>{{$item->quantite}}</td>
    </tr>
      @endforeach
    </tbody>
  </table>


@endsection