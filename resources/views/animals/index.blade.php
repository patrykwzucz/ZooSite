<!doctype html>
<html lang="pl">
  <head>
  @include('shared.header')

  </head>
  <body>

  @include('shared.navbar')
    <div class="container">
    <div class="row mb-5 mt-5">
        @foreach ($animals as $a)
        <div class="col-12 col-md-3">
        <div class="card mt-3">
            <img src="{{ asset($a->img) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $a->name }}</h5>
              <p class="card-text">{{ substr($a->description, 0, 120)."..." }}</p>
              <a href="{{ route("animals.animal", ["id"=>$a->id]) }}" class="btn btn-success mt-1">Read more...</a>
              @auth
                <a href="{{ route("animals.edit", ["id"=>$a->id]) }}" class="btn btn-primary mt-1">Edit this animal</a>

                <form method="POST" action={{ route("animals.destroy", ["id"=>$a->id])}}>
                    @csrf
                    <input type="submit" class="btn btn-danger mt-1" value="Delete animal">
                </form>
              @endauth
            </div>
          </div>
        </div>
        @endforeach
    </div>
    </div>

@include('shared.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
