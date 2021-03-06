@if (count($errors) > 0)
  <div class="container">
    <div class="alert alert-danger">
      <strong>Certains champs ne sont pas valides !</strong>
    </div>
  </div>
@endif

@if (session()->has('success'))
  <div class="container">
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  </div>
@endif

@if (session()->has('warning'))
  <div class="container">
    <div class="alert alert-warning">
      {{ session('warning') }}
    </div>
  </div>
@endif
