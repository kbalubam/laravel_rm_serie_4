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
        @if (strlen($item->nom) >= 5)
        <td class="bg-primary">{{$item->nom}}</td>
        @endif
        <td>{{$item->quantite}}</td>
       
       
        <td>
        <a href="{{route('showleg', $item->id)}}">
        <button type="button" class="btn btn-primary">SHOW</button>
        </a>
        </td>

    </tr>
      @endforeach
    </tbody>
  </table>


@endsection