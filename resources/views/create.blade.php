<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laborator 2</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Carti</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('books.index') }}">Carti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col md-6 m-auto">
           <form action="{{route('books.store') }}" method="post" class="mt-4">
            @csrf 
            <div class="mb-3">
                <input type="text" name="titlu" class="form-control @error('titlu') is-invalid @enderror" placeholder="titlu">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" name="autor" class="form-control @error('autor') is-invalid @enderror" placeholder="autor">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="number" name="pagini" class="form-control @error('pagini') is-invalid @enderror" placeholder="pagini">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="number" step="0.01" name="pret" class="form-control @error('pret') is-invalid @enderror" placeholder="pret">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark btn-sm">Save</button>
        </form>
    </div>
  </div>
</div>
<footer>

</footer>
</body>
</html>