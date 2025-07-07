<!doctype html>
<html lang="pl">
  <head>
  @include('shared.header')

  </head>
  <body>

  @include('shared.navbar')


<div class="container">

  <div class="row">
    <div class="col-10">
        <h1>Ticket types</h1>
    </div>
  </div>
    <div class="row">
        <hr/>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Ticket type</th>
          <th scope="col">Price</th>
          @auth
          <th scope="col"></th>
          <th scope="col"></th>
          @endauth
        </tr>
      </thead>
    <tbody>
    @foreach($tickets as $ticket)
    <tr>
        <td>{{ $ticket-> name }}</td>
        <td>{{ $ticket-> price }}</td>
        @auth
        <td>
          <a href="{{route("tickets.edit", ["id" => $ticket -> id])}}">
            <button class="btn btn-primary btn-sm">Edit ticket price</button>
          </a>
        </td>
        <td>
          <form method="POST" action="{{route("tickets.destroy", ["id" => $ticket -> id])}}">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Delete ticket</button>
          </form>
        </td>
        @endauth
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>

  
@include('shared.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
