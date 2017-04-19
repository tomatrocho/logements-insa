@extends('layouts.front')

@section('content')

<div class="container">
  <h4>Gérer mes annonces</h4>

  <p class="text-right">
    <a class="btn btn-primary" href="{{ action('BidController@create') }}">Ajouter une annonce</a>
  </p>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Montant du loyer (€)</th>
        <th>Surface (m<sup>2</sup>)</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>
      @foreach($bids as $bid)
      <tr>
        <td>{{ $bid->name }}</td>
        <td>{{ $bid->description }}</td>
        <td>{{ $bid->rental }}</td>
        <td>{{ $bid->ground }}</td>
        <td>
          <a class="btn btn-primary" href="{{ action('BidController@edit', $bid) }}">Éditer</a>
          <a class="btn btn-primary" href="{{ action('BidController@destroy', $bid) }}" data-method="delete" data-confirm="Voulez-vous vraiment clotûrer cette annonce ?">Clôturer</a>
          <a class="btn btn-danger" href="{{ action('BidController@destroy', $bid) }}" data-method="delete" data-confirm="Voulez-vous vraiment supprimer cette annonce ?">Supprimer</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection