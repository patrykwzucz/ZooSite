<!doctype html>
<html lang="pl">
  <head>
  @include('shared.header')

  </head>
  <body>

  @include('shared.navbar')
    <div class="container">
        <h1>{{ $animal->name }}</h1>
        <img src="{{ asset($animal->img) }}" alt="..." class="m-4">
        <p><b>Region: {{ $animal->region }}<br>
            Type: {{ $animal->type }}</b></p>
        <p style="text-align: justify">{{ $animal->description }}</p>
    </div>

@include('shared.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
