<!doctype html>
<html lang="pl">
  <head>
  @include('shared.header')
  <style>
    .panel {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 20px;
    }
    .panel-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }
  </style>

  </head>
  <body>

  @include('shared.navbar')
  <br><br><br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-title">Admin Panel</div>
          <div class="panel-body text-center">
            <a href="{{ route('tickets.create') }}">
            <button class="btn btn-primary">Add a new ticket</button>
            </a>
            <a href="{{ route('reservation.create') }}">
            <button class="btn btn-secondary">Add a new booking</button>
            </a>
            <a href="{{ route('animals.create') }}">
                <button class="btn btn-warning">Add a new animal</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
<br><br><br>



@include('shared.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
