@extends('layouts.front')

@section('content')

<div class="container">
  <div class="pull-left">
    <h4>Gérer les types de bien</h4>
  </div>

  <p class="pull-right">
    <a class="btn btn-primary" href="{{ route('types.create') }}">Ajouter un type de bien</a>
  </p>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Slug</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>
      @foreach($types as $type)
      <tr>
        <td>{{ $type->id }}</td>
        <td>{{ $type->name }}</td>
        <td>{{ $type->slug }}</td>
        <td>
          <a class="btn btn-default" href="{{ route('types.edit', $type) }}">Éditer</a>
          <a class="btn btn-danger" href="{{ route('types.destroy', $type) }}" data-method="delete" data-confirm="Voulez-vous vraiment supprimer le type de bien « {{ $type->name }} » ?">Supprimer</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection