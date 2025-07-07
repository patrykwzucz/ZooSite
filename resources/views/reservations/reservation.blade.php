<!doctype html>
<html lang="pl">
  <head>
  @include('shared.header')

  </head>
  <body>

  @include('shared.navbar')

<div class="container">

  <div class="row ">
    <div class="col-10">
        <h1>All ticket bookings pending</h1>
    </div>
    <hr/>
</div>
<div class="row overflow-auto">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Booking ID</th>
      <th scope="col">Booker details</th>
      <th scope="col">Ticket type index</th>
      <th scope="col">Quantity</th>
      <th scope="col">Date of booking</th>
      <th scope="col">Price</th>
      @auth
        @if(auth()->id() === 1)
            <th scope="col">Actions</th>
        @endif
      @endauth
    </tr>
  </thead>
  <tbody>
    @foreach($reservations as $r)
    <tr>
        <th scope="row">{{ $r-> id }}</th>
        <td >{{ $r-> ReservedName }}</td>
        <td >{{ $r-> TicketType }}</td>
        <td >{{ $r-> Count }}</td>
        <td>{{ $r-> ReservationDate }}</td>
        <td>{{ $r-> Sum }}</td>
        @auth
        @if(auth()->id() === 1)
        <td>
          <a href="{{ route('reservation.edit', $r->id) }}" class="btn btn-sm btn-warning">Edit</a>
        </td>
        @endif
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